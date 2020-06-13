<?php

class Product {
    // variabelen
    public $ean;
    public $naam;
    public $beschrijving;
    public $voetafdruk;
    public $plu;

    public static function postProduct($ean, $naam, $beschrijving, $voetafdruk) {
        // set de plu naar false
        $plu = false;

        // url voor naar de REST API
        $url = "http://f24b023cd995.ngrok.io/restapi/v1/producten";

        //Initiate cURL.
        $ch = curl_init($url);

        // Setup request to send json via POST
        $data = array(
            'ean' => $ean,
            'naam' => $naam,
            'beschrijving' => $beschrijving,
            'voetafdruk' => $voetafdruk,
            'plu' => $plu
        );
        //Encode the array into JSON.
        $jsonDataEncoded = json_encode($data);
        
        //Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);
        
        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
        
        //Execute the request
        $result = curl_exec($ch);
    }
}