<?php

  session_start();
  
$hn = 'localhost';
  $db = 'logindb';
  $un = 'root';
  $pw = '02189104vag';
  $conn = new mysqli($hn, $un, $pw, $db);
  
  if ($conn->connect_error) die($conn->connect_error);

  // POST Data
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $midname = $_POST['midname'];
  $email = $_POST['email'];
  $afm = $_POST['afm'];
  $amka = $_POST['amka'];
  $password = $_POST['password'];

  // Update user
  $stmt = $conn->prepare("UPDATE `logintable` SET `name`= ?,`surname`= ?,`midname`= ?,`amka`= ?,`afm`= ?,`password`= ? WHERE `email` = ?;");
  $stmt->bind_param('sssssss', $name, $surname, $midname, $amka, $afm, $password, $email);
  $stmt->execute();
  $stmt->close();

  // Get new user data
  $query  = "SELECT * FROM `logintable` WHERE `email` = '$email';";
  $result = $conn->query($query);
  $user = mysqli_fetch_object($result);
  $_SESSION['user'] = $user;

  $conn->close();

  header('Location: http://localhost/change.php');