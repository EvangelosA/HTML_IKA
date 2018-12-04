<?php

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

  // Insert user
  $stmt = $conn->prepare("INSERT INTO `logintable`(`name`, `surname`, `midname`, `email`, `amka`, `afm`, `password`) VALUES (?, ?, ?, ?, ?, ?, ?);");
  $stmt->bind_param('sssssss', $name, $surname, $midname, $email, $amka, $afm, $password);
  $stmt->execute();
  $stmt->close();

  $conn->close();

  header('Location: http://localhost/signup.php?msg=Η εγγραφή ολοκληρώθηκε!');