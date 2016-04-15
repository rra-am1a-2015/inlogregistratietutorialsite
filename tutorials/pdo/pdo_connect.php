<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "am1a_2015_loginregistration"; 
    
    $conn = new PDO("mysql:host=".$servername.";dbname=".$databasename, $username, $password);
?>