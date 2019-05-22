<?php 
  session_start();
  if($_SESSION['username' == null]) {
    header('home.php');
  };

  require 'db_con.php';
  
  $animal_id = $_POST['animal-id']; 
  
  mysqli_query($con, "DELETE FROM animals WHERE Id = $animal_id");
  header('location: home.php');
?>