<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.html');
    exit();
}
error_reporting(0);
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="favicon1.ico" type="image/x-icon" />

    <title>Pieteikumi pakalpojumiem</title>
</head>
<style>
    fieldset {
        background-color: black;
        color: white;
        border-radius:20px;
    }</style>
<body>
<?php

$host = 'localhost';
$user = 'skolnieks';
$pass = 'pQcM10ClEn3lSWy';
$dbName = 'Sandis_Sarguns';

$conn = new mysqli($host, $user, $pass, $dbName);

if($conn->connect_error){
    echo "Notikus kļūda savienojumā!";
}

if($_POST["submit"]){

    $pakalpojumi = $_POST['pakalpojumi'];
    $problema = $_POST['problema'];
    $kontakti = $_POST['kontakti'];
    $datums = $_POST['datums'];


    $sql = "INSERT INTO pieteikumi(pakalpojumi, problema, kontakti, datums)
VALUES ('$pakalpojumi', '$problema', '$kontakti', '$datums')";
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
<fieldset>
    <?php
    $sql = "SELECT id, pakalpojumi, problema, kontakti, datums FROM pieteikumi";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<li> Klienta kārtas numurs: ". $row["id"]. "<li> Pakalpojums: ". $row["pakalpojumi"].
                "<li> Kilenta problēma: " . $row["problema"] . "<li> Klienta kontakti: " . $row["kontakti"] . "<li> Datums: " . $row["datums"];
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    ?>
</fieldset>
    </body>
</html>
