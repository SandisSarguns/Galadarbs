<?php

?>
    <link rel="icon" href="favicon1.ico" type="image/x-icon"/>
    <html>
<body>

    <title>Pakalpojumu pieteikumu saraksts</title>
    <style>

    </style>
<?php

include "db.php";

if($_POST["submit"]){
    $pakalpojumi = $_POST['pakalpojumi'];
    $problema = $_POST['problema'];
    $kontakti = $_POST['kontakti'];
    $datums = $_POST['datums'];

    $sql = "INSERT INTO problemas(problema)
VALUES ('$problema')";
}
if ($conn->query($sql) === TRUE) {
    echo "Jūsu ievadītie dati tika nosūtīti un drīzumā tiks pārbaudīti.";
} else {
    echo "Error: " . $sql . "" . $conn->error;
}
?>
    <fieldset>
<?php
$sql = "SELECT pakaplojums FROM pakalpojumi";
$sql2 = "SELECT problema FROM problemas";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<li> Klienta kārtas numurs: ". $row["id"]. "<li> Izvēlētais pakalpojums ". $row["pakalpojums"].
            "<li> Klienta problēma " . $row["problema"] . "<li>Datums: ". $datums ;
    }
} else {
    echo "0 results";
}
$conn->close();
?>