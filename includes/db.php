<?php
// building a connection to my SQL database using PDO Object
//Data according Docker-compose File

//connect to mySql using PHP PDO Object
$dbHost = getenv('DB_HOST');
$dbName = getenv('DB_NAME');
$dbUser = getenv('DB_USER');
$dbPassword = getenv('DB_PASSWORD');


$dbConnection = new PDO(
     "mysql:host=$dbHost;dbname=$dbName;charset=utf8",
    $dbUser,
    $dbPassword
);
// error mode
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>