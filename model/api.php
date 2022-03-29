<?php

    include_once '../controller/connection.php';

    function getGameData($dbID){
        $conn = getDatabaseConnection();
        //$message = (string)$message;
        $checkSQl = "select * from CMP304_Shop_Games where id = ? LIMIT 1";
        $checkStmt = $conn->prepare($checkSQl);
        $checkStmt->bind_param("i", $dbID);
        $checkStmt->execute();
        $gameResult = $checkStmt->get_result();
        $resultRow = $gameResult->fetch_array();
        if($resultRow["id"] == $dbID){
            return $resultRow;
        }
        else{
            return false;
        }
    }
