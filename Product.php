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
        $url = "http://b98c7f721f6b.ngrok.io/restapi/v1/producten";

        // init the curl
        $ch = curl_init($url);

        // Setup request voor de JSON
        $data = array(
            'ean' => $ean,
            'naam' => $naam,
            'beschrijving' => $beschrijving,
            'voetafdruk' => $voetafdruk,
            'plu' => $plu
        );
        //Encode the array into JSON.
        $jsonDataEncoded = json_encode($data);

        // om de response van de post te vangen
        $optArray = array(
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        
        //Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, 1);
        
        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
        
        // Voer het request uit
        $result = curl_exec($ch);
    }
}