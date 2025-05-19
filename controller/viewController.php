<?php
require_once "./model/viewModel.php";

class viewController extends viewModel {
    /*Controlador para obtener la plantilla*/ 
    public function getTemplateController(){
        return require_once "./views/template.php";
    }

        /*Controlador para obtener vistas*/ 
        public function getViewController(){
            if (isset($_GET['vista'])){
                $route=explode("/", $_GET['vista']);
                $response = viewModel::obtenerVistaModel($route[0]);
            }
            else{
                $response = "index";
            }
            return $response;
        }
}