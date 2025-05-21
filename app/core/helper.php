<?php
class helper {
/*Función para encriptar*/
    public function encryption($string)
    {
        $output = FALSE;
        $key = hash('sha256', secret_key);
        $iv = substr(hash('sha256', secret_iv), 0, 16);
        $output = openssl_encrypt($string, method, $key, 0, $iv);
        $output = base64_encode($output);
        return $output;
    }
    /*Función para desencriptar*/
    protected static function decryption($string)
    {
        $key = hash('sha256', secret_key);
        $iv = substr(hash('sha256', secret_key), 0, 16);
        $output = openssl_decrypt(base64_decode($string), method, $key, 0, $iv);
        return $output;
    }
    /*Función para códigos aleatorios*/
    protected static function randomCode($letter, $length, $random)
    {
        for ($i = 1; $i < $length; $i++) {
            $random .= rand(0, 9);
            $letter . $random;
        }
        return $letter . "-" . $random;
    }
}