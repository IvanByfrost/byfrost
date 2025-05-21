<?php
class Helper
{
    /*Función para encriptar*/
    public static function encryption($string)
    {
        //$output = FALSE;
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV), 0, 16);
        $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output = base64_encode($output);
        //return $output;
        if ($output === false) {
            error_log("Error de encriptación: openssl_encrypt falló."); // Registra el error
            return false; // Retorna false en caso de fallo, en lugar de un base64_encode(false)
        }
        return base64_encode($output);
    }
    /*Función para desencriptar*/
    public static function decryption($string)
    {
        $key = hash('sha256', SECRET_KEY);
        $iv = substr(hash('sha256', SECRET_IV), 0, 16);
        $output = openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
                // *** MEJORA: Manejo de errores para base64_decode y openssl_decrypt ***
        $decoded_string = base64_decode($string);
        if ($decoded_string === false) {
            error_log("Error de desencriptación: Cadena no es Base64 válida.");
            return false;
        }

        $output = openssl_decrypt($decoded_string, METHOD, $key, 0, $iv);

        if ($output === false) {
            error_log("Error de desencriptación: openssl_decrypt falló (clave/IV incorrecta o datos corruptos).");
            return false;
        }
        return $output;
    }
    /*Función para códigos aleatorios*/
    public static function randomCode($letter, $length)
    {
        $numPart = '';
        for ($i = 1; $i < $length; $i++) {
            $numPart .= rand(0, 9);
        }
        return $letter . "-" . $numPart;
    }

    /*Función para verificar los datos*/
    public static function isValidData($filter, $string)
    {
        if (preg_match("/" . $filter . "/", $string)) {
            return false;
        } else {
            return true;
        }
    }
    /*Función para validar las fechas*/
    public static function isValidDate($date)
    {
        $val = explode('-', $date);
        if (count($val) == 3 && checkdate($val[1], $val[2], $val[0])) {
            return false;
        } else {
            return true;
        }
    }
}
