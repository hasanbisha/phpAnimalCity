<?php 
  include 'db_con.php';

  session_start();
  if ($_SESSION['username'] == null) {
    header('location: index.php');
  };
  
  if($con == null) {
    die('Failed to connect to the database. ' . mysqli_connect_error());
  }

  $animal_name = $_POST['animal-name'];
  $animal_type = $_POST['animal-type'];
  $animal_owner = $_SESSION['username'];

  $query = mysqli_query($con, "SELECT * FROM animals WHERE Name = '$animal_name' AND Owner = '$animal_owner'");
  if(mysqli_num_rows($query) > 0) {
    echo 'You have alredy registered this animal';
    header('location: home.php');
  }else{
    mysqli_query($con, "INSERT INTO animals (Name, Type, Owner) VALUES ('$animal_name', '$animal_type', '$animal_owner')");
    header('location: home.php');
  }
?>