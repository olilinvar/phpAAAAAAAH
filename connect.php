<?php 
    //Opprette kobling
    $kobling = new mysqli('localhost', 'username', 'passowrd', 'databasen');

    //sjekk om kobling virker
    if($kobling->connect_error) {
        die("Noe gikk galt: ". $kobling->connect_error);
    }

    //angi utf-8 som tegnsett
    $kobling->set_charset("utf8");

    echo "hello";
?>
