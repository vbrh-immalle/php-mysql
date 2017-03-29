<?php

// Vergeet niet om mysql-drivers voor php te installeren: `sudo apt-get install php7.0-mysql`
// Controleer of de webserver nog draait: `sudo service apache2 status`
// Zoniet: `sudo service apache2 restart`

// Maak (met MySQL Workbench) een user (met username/password) aan.
// Maak vervolgens een nieuwe database `thewall` of `username_thewall`.
// Maak een file `db_credentials.php` waarin je de variabelen $servername, $username, $password en $database declareert. 
include 'db_credentials.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>
