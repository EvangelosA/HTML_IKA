<?php

  session_start();
  
$hn = 'localhost';
  $db = 'logindb';
  $un = 'root';
  $pw = '02189104vag';

  $conn = new mysqli($hn, $un, $pw, $db);
  
  if ($conn->connect_error) die($conn->connect_error);

  // POST Data
  $email = $_POST['email'];
  $query  = "SELECT * FROM `logintable` WHERE `email` = '$email';";
  $result = $conn->query($query);
  $conn->close();

  // If 1, user exists
  if($result->num_rows == 1){
    
    $user = mysqli_fetch_object($result);
    
    if($user->password == $_POST['password'])
    {
      $_SESSION['user'] = $user;
      header('Location: http://localhost/');
    }else{
      header('Location: http://localhost/enter.php?msg=Wrong password!');
    }

  }else{
    header('Location: http://localhost/enter.php?msg=Wrong email!');
  }