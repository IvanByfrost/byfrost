<?php

class HomeController extends mainController
{
    public function index()
    {
        $data = [
            'mainTitle' => "Byfrost - Sistema de Gestión Académica",
            'loginTitle' => "Inicia sesión en Byfrost",
            'regTitle' => "Regístrate en Byfrost",
            'rootDash' => "Súper Usuario - Byfrost",
            'pareDash' => "Acudiente - Byfrost",
            'studDash' => "Estudiante - Byfrost",
            'masDash' => "Administrativo - Byfrost",
            'treaDash' => "Contador - Byfrost",
            'teacDash' => "Docente - Byfrost"
        ];
        $this->view('home/index', $data, 'guest-layout');
    }

}
