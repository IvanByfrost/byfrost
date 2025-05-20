<?php
if ($AjaxPetition) {
    require_once "../config/server.php";
} else {
    require_once "./config/server.php";
}

class mainModel
{
    /*Función para conectar a la base de datos*/
    protected static function connect()
    {
        $connection = new PDO(SGBD, user, pass);
        $connection->exec("SET CHARACTER SET utf8");
        return $connection;
    }
    /*Función para consultas simples*/
    protected static function executeSimpleQuery($query)
    {
        $sql = self::connect();
        $response = $sql->prepare($query);
        $response->execute();
        return $response;
    }
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
    /*Función para limpiar cadenas*/
    protected static function cleanString($string)
    {
        $string = htmlspecialchars($string);
        $string = str_ireplace("<script>", "", $string);
        $string = str_ireplace("</script>", "", $string);
        $string = str_ireplace("<script src>", "", $string);
        $string = str_ireplace("<script type=>", "", $string);
        $string = str_ireplace("SELECT * FROM", "", $string);
        $string = str_ireplace("DELETE * FROM", "", $string);
        $string = str_ireplace("INSERT INTO", "", $string);
        $string = str_ireplace("DROP TABLE", "", $string);
        $string = str_ireplace("DROP DATABASE", "", $string);
        $string = str_ireplace("TRUNCATE TABLE", "", $string);
        $string = str_ireplace("SHOW TABLES", "", $string);
        $string = str_ireplace("SHOW DATABASES", "", $string);
        $string = str_ireplace("<?php", "", $string);
        $string = str_ireplace("?>", "", $string);
        $string = str_ireplace("--", "", $string);
        $string = str_ireplace(">", "", $string);
        $string = str_ireplace("<", "", $string);
        $string = str_ireplace("[", "", $string);
        $string = str_ireplace("]", "", $string);
        $string = str_ireplace("^", "", $string);
        $string = str_ireplace("==", "", $string);
        $string = str_ireplace(";", "", $string);
        $string = str_ireplace("::", "", $string);
        $string = stripslashes($string);
        $string = trim($string);
        return $string;
    }
    /*Función para verificar los datos*/
    protected static function verifyData($filter, $string)
    {
        if (preg_match("^" . $filter . "$/", $string)) {
            return false;
        } else {
            return true;
        }
    }
    /*Función para validar las fechas*/
    protected static function validateDate($date)
    {
        $val = explode('-', $date);
        if (count($val) == 3 && checkdate($val[1], $val[2], $val[0])) {
            return false;
        } else {
            return true;
        }
    }
    
}