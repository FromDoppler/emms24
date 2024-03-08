<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/utils/DB.php';
require_once 'models/StripeCustomersDatabase.php';

//creo la conexion a la db

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
            //$logger = new Logger();
            //$logger->registrarLog("success_raw", "objRaw", $jsonData);
        }
        return $jsonData;
    }

    private function processAndSaveSubscription($UserData)
    {
        //creo la conexion a la db
        $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        // Procesar las suscripciones
        $StripeCustomersModel = new StripeCustomersDatabase($db);

        $StripeCustomersModel->insertCustomer($UserData);
        return true;
    }
}
