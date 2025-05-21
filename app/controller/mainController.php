<?php
class mainController
{
    public function builder(){}

    protected function model($model)
    {
        $modelUrl = '../app/model/' . $model . '.php';
        if (file_exists($modelUrl)) {
            require_once $modelUrl;
            return new $model();
        } else {
            throw new Exception("Model not found: " . $model);
        }
    }
/* Función para llamar vistas*/
    protected function view($viewName, $data = [], $layout = null)
    {
        extract($data);
        $view_path = '../app/views/layouts' . $viewName . '.php';
        if (file_exists($view_path)) {
            if ($layout) {
                $layoutPath = '../app/views/layouts/' . $layout . '.php';
                if (file_exists($layoutPath)) {
                    require_once $layoutPath;
                } else {
                    throw new Exception("Error: El layout '$layout' no se encontró en la ruta: " . $layoutPath);
                }
            } else {
                require_once $view_path;
            }
        }else {
            require_once '../app/views/errors/404-view.php';
        }
    }
    protected function redirect($url)
    {
        header("Location: " . APP_URL . $url);
        exit();
    }

}
