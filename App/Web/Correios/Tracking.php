<?php

namespace App\Web\Correios;

class Tracking
{
    public static function consultTracking($code)
    {
        $url = "https://proxyapp.correios.com.br/v1/sro-rastro/";

        $urlCode = $url . strtoupper($code);

        $ch = curl_init($urlCode);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);        
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        
        $result = curl_exec($ch);
        
        curl_close($ch);
        return json_decode($result, true);
        
    }
}
