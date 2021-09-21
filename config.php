<?php

$databaseHost = 'localhost';//or localhost
$databaseName = 'finance'; // your db_name
$databaseUsername = 'root'; // root by default for localhost 
$databasePassword = 'root';  // by defualt empty for localhost

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
 
?>