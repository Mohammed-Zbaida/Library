<?php

# Connect to the database
$dsn = "mysql:host=localhost; dbname=library";
$username = "root";
$password = "";
$database = new PDO($dsn, $username, $password); // Start a new connection with PDO Class

if ($database) 
    echo 'YES';


?>


