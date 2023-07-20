<?php
    
    $serverName="bm7aexhfr4ezpyycqkzp-mysql.services.clever-cloud.com";
    $userName="uiqhwvfg3dysp9t8";
    $password="VStvG5UIsSdJaFOD1aCh";
    $dbName="bm7aexhfr4ezpyycqkzp";

    $db_conn = mysqli_connect($serverName,$userName,$password,$dbName);
    if(!$db_conn){
        echo 'Connection failed';
        exit;
    }
?>