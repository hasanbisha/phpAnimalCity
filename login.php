<?php 
  session_start();
  require 'db_con.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($con, "SELECT * FROM animal_users WHERE Username = '$username' AND Password = '$password'");
  
  if(mysqli_num_rows($query) > 0) {
    $_SESSION['username'] = $username;
    header('location: home.php');
  }else{
    header('location: index.php');
  }
?>