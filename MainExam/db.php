<?php
$host = 'localhost';
$user = 'skolnieks';
$pass = 'pQcM10ClEn3lSWy';
$dbName = 'Sandis_Sarguns';

$conn = new mysqli($host, $user, $pass, $dbName);

if($conn->connect_error){
    echo "Notikus kļūda savienojumā!";
}

?>

