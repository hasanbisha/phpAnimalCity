<?php 
  require 'db_con.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($con, "SELECT * FROM animal_users WHERE Username = '$username'");

  if(mysqli_num_rows($query) > 0) {
    echo "User alredy exists";
  }else{
    $register = "INSERT INTO animal_users (Username, Password) VALUES ('$username', '$password')";
    mysqli_query($con, $register);

    session_start();
    $_SESSION['username'] = $username;
    header('location: home.php');
  };
?>