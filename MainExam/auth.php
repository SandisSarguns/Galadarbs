<?php
session_start();

$host = "localhost";
$dbname = "Sandis_Sarguns";
$username = "skolnieks";
$password = "pQcM10ClEn3lSWy";
try {
  // Connect to the database
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $username = $_POST['username'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT * FROM log_in WHERE username = :username AND password = :password");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':password', $password);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($user) {
    $_SESSION['user'] = $user;

    header('Location: restricted.php');
    exit();
  } else {
    echo 'Nepareizs lietotājvārds vai parole';
  }
} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}


?>
