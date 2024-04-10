<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/DB.php';
require_once 'models/StripeCustomersDatabase.php';
require_once 'models/RegisteredDatabase.php';
require_once 'utils/sendEmail.php';
require_once 'utils/toHex.php';
require_once 'models/SubscriberDopplerList.php';
require_once 'utils/SpreadSheetGoogle.php';

class StripeCustomersController
{
    public function handleRequest()
    {
        try {
            // Verificar el metodo de solicitud
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                http_response_code(405); // Metodo no permitido
                throw new Exception('Metodo no permitido');
            }
            $jsonData = $this->getJsonDataFromRequest();

            // Procesar y guardar suscripcion
            $resultados = $this->processAndSaveSubscription($jsonData);
            $response = ['message' => 'Subscription saved successfully', 'data' => $resultados];
            return $response;
        } catch (Exception $e) {
            http_response_code(500); // Error interno del servidor
            throw new Exception($e->getMessage());
        }
    }

    private function getJsonDataFromRequest()
    {
        $entityBody = file_get_contents('php://input');
        $jsonData = mb_convert_encoding($entityBody, 'UTF-8');
        $jsonData = json_decode($jsonData, true);
        // Verificar si el JSON es valido
        if (json_last_error() !== JSON_ERROR_NONE) {
            http_response_code(400); // Solicitud incorrecta
            throw new Exception('JSON incorrecto' . $jsonData);
        } else {
            $response = ['message' => "success_raw", "objRaw" => $jsonData];
        }
        return $jsonData;
    }

    private function updateRegisteredUser($db, $UserData)
    {
        $RegisteredModel = new RegisteredDatabase($db);
        if ($RegisteredModel->getRegisteredByEmail($UserData['customer_email'])) {
            $RegisteredModel->updateEcommerceVIPByEmail($UserData['customer_email']);
        } else {
            return $RegisteredModel->insertAutomatedRegistered($UserData);
        }
    }

    private function processAndSaveSubscription($UserData)
    {
        $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        // registra usuario VIP en tabla STRIPE
        $StripeCustomersModel = new StripeCustomersDatabase($db);
        $StripeCustomersModel->insertCustomer($UserData);

        // crea o actualiza usuario en tabla registered
        $this->updateRegisteredUser($db, $UserData);

        // carga el usuario en lista de doppler de usuarios vip
        $user = $this->CreateUserObj($UserData, LIST_LANDING_ECOMMERCE_VIP);
        $dopplerHandler = new SubscriberDopplerList();
        $dopplerHandler->saveSubscription($user);

        // Guardar la suscripcion en SpreadSheet de usuarios VIP
        saveSubscriptionSpreadSheet(ID_SPREADSHEET_VIP, $user);

        // Enviar email de compra exitosa
        $user['final_price'] = $UserData['final_price'];
        $user['payment_status'] = $UserData['payment_status'];
        sendEmail($user, $user['subject']);

        return true;
    }


    private function CreateUserObj($UserData, $listId = LIST_LANDING_ECOMMERCE_VIP)
    {
        $encode_email = toHex(json_encode([
            'userEmail' => $UserData['customer_email'],
            'userEvents' => ['ecommerce24']
        ]));
        return [
            'register' => date("Y-m-d h:i:s A"),
            'firstname' => $UserData['customer_name'],
            'email' => $UserData['customer_email'],
            'company' =>  '',
            'jobPosition' =>  '',
            'phone' =>  '',
            'ecommerce' => 1,
            'digital_trends' => 0,
            'encode_email' => $encode_email,
            'privacy' => true,
            'promotions' => false,
            'ip' => '',
            'country_ip' => '',
            'source_utm' => "stripe",
            'medium_utm' => "stripe",
            'campaign_utm' => 'stripe',
            'content_utm' => 'stripe',
            'term_utm' => "stripe",
            'origin' => "stripe",
            'type' => "ecommerce24",
            'tiketType' => 'ecommerceVip',
            'form_id' => "pre",
            'list' => $listId,
            'subject' => "Compraste!"
        ];
    }

}
