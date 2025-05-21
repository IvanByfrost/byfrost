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
    /*Función paginador de tablas*/
    protected static function dataPagination($page, $nPages, $url, $buttons)
    {
        $tabla = '<nav aria-label="Page navigation example"><ul class ="pagination justify-content-center">';
        if ($page == 1) {
            $tabla .= '<li class ="page-item disabled"><a class="page-link"><i class ="fas fa-angle-double-left"></i></a></li>';
        } else {
            $tabla .= '<li class ="page-item disabled"><a class="page-link" href="' . $url . '1/"><i class ="fas fa-angle-double-left"></i></a></li>';
            $tabla .= '<li class ="page-item"><a class="page-link" href="' . $url . ($page - 1) . '/">Anterior</a></li>
        ';
        }
        $ci = 0;

        for ($i = $page; $i <= $nPages; $i++) {
            if ($ci >= $buttons) {
                break;
            }
            if ($page == $i) {
                $tabla .= '<li class ="page-item"><a class="page-link active" href="' . $url . '1/">' . $i . '</a></li>';
            } else {
                $tabla .= '<li class ="page-item"><a class="page-link " href="' . $url . '1/">' . $i . '</a></li>';
            }
            $ci++;
        }

        if ($page == $nPages) {
            $tabla .= '<li class ="page-item disabled"><a class="page-link"><i class ="fas fa-angle-double-right"></i></a></li>';
        } else {
            $tabla .= '<li class ="page-item disabled"><a class="page-link" href="' . $url . $nPages . '/"><i class ="fas fa-angle-double-left"></i></a></li>';
            $tabla .= '<li class ="page-item"><a class="page-link" href="' . $url . ($page + 1) . '/">Siguiente</a></li>
        ';
        }

        $tabla .= '</ul></nav>';
        return $tabla;
    }
}
