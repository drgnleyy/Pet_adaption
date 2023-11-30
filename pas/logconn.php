<?php

include('connect.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$hash_pass = md5($password);

$sql = "SELECT * from accounts where username= '$username' and password = '$hash_pass'";

$result = $conn -> query($sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

  if ($count ==1) {
       echo '<script>alert("User Log in Successfull"); window.location.href = "adaplist.php";</script>';

  }else{
      echo '<script>alert("User Log in Failed"); window.location.href = "login.php";</script>';

  }

?>