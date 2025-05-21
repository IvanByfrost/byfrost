<?php
class mainController
{
    protected function model($model)
    {
        $modelPath = '../app/model/' . $model . '.php';
        if (file_exists($modelPath)) {
            require_once $modelPath;
            return new $model();
        } else {
            throw new Exception("Model not found: " . $model);
        }
    }
/* Función para llamar vistas*/
    protected function view($viewName, $data = [], $layout = null)
    {
        extract($data);
        $view_path = '../app/views/' . $viewName . '.php';
        if (file_exists($view_path)) {
            if ($layout) {
                $layoutPath = '../app/views/' . $layout . '.php';
                if (file_exists($layoutPath)) {
                    require_once $layoutPath;
                } else {
                    throw new Exception("Error: El layout '$layout' no se encontró en la ruta: " . $layoutPath);
                }
            } else {
                require_once $view_path;
            }
        }else {
            require_once '../app/views/errors/404.php';
        }
    }
    protected function redirect($url)
    {
        header("Location: " . APP_URL . $url);
        exit();
    }

}
