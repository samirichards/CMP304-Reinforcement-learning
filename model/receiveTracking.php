<?php

    //Make sure that it is a POST request.
    if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
        throw new Exception('Request method must be POST!');
    }

//Receive the RAW post data.
    $content = trim(file_get_contents("php://input"));

//Attempt to decode the incoming RAW post data from JSON.
    $decoded = json_decode($content, true);

//If json_decode failed, the JSON is invalid.
    if(!is_array($decoded)){
        throw new Exception('Received content contained invalid JSON!');
    }

    var_dump(json_encode($decoded));

    $numberOfStates = 3;
    $numberOfActions = 3;
    $qMatrix = array_fill(0, $numberOfStates, array_fill(0, $numberOfActions, 0.0));

    //throw new Exception($decoded["itemViewingID"]);

?>