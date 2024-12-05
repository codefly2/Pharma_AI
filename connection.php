<?php

    $database= new mysqli("localhost","root","","pharmaai");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>