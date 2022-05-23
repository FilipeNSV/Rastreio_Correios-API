<?php

namespace App\Controllers;

class Site
{
    public function formTrack()
    {
        require_once __DIR__ . '/../../resources/view/formTrack.php';
    }

    public function resultTrack()
    {
        require_once __DIR__ . '/../../resources/view/resultTrack.php';
    }

    //Methods

    public function Tracking()
    {
        require_once __DIR__ . '/../Web/Correios/Tracking.php';
    }
}
