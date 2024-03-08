<?php

class StripeCustomersDatabase {
    private $db; // Objeto de conexión a la base de datos

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertCustomer($customerData) {
        try {
            // Crear la consulta SQL sin escapar valores
            $query = "INSERT INTO stripe_customers (payment_intent, payment_method_configuration_id, price, discount, final_price, customer_name, customer_email, customer_country, customer_tax, payment_status)
                VALUES (
                    '{$customerData['payment_intent']}',
                    '{$customerData['payment_method_configuration_id']}',
                    '{$customerData['price']}',
                    '{$customerData['discount']}',
                    '{$customerData['final_price']}',
                    '{$customerData['customer_name']}',
                    '{$customerData['customer_email']}',
                    '{$customerData['customer_country']}',
                    '{$customerData['tax_id']}',
                    '{$customerData['payment_status']}'
                )";

            if ($this->db->query($query)) {
                return true; // Insercion exitosa
            } else {
                return false; // Error en la inserción
            }
        } catch (Exception $e) {
            $errorMessage = json_encode(["insertCustomer", $e->getMessage()]);
            http_response_code(500); // Error interno del servidor
            throw new Exception($errorMessage);
        }
    }

}
