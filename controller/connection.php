<?php
    function getDatabaseConnection() {
        $servername = "lochnagar.abertay.ac.uk";
        $username = "sql1902765";
        $password = "Z5NDg3PGtroX";
        $dbname = "sql1902765";
        $conn = mysqli_connect($servername, $username, $password, $dbname) ;
        return $conn ;
    }
?>

