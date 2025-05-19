<?php

class viewModel
{
    /*--- Modelo para obtener vistas ---*/
    protected static function obtenerVistaModel($view)
    {
        $WhiteList = ["home", "about", "contact", "features", "privacy", "dashboard", "login", "register"];
        if (in_array($view, $WhiteList)) {
            if (is_file("./app/views/" . $view . "-view.php")) {
                $content = "./app/views/" . $view . "-view.php";
            } else {
              $content = "404";  
            }
        } elseif ($view == "login" || $view == "register" || $view == "404" || $view == "index") {
            $content = "index";
        } else {
            $content = "404";
        }
        return $content;
    }
}
