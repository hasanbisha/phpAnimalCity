<?php 
  //Server variables
  $server_name = 'localhost';
  $server_user = 'root';
  $server_password = '123456';
  $server_database = 'test';

  $con = mysqli_connect($server_name, $server_user, $server_password, $server_database);

  if($con == null) {
    die('Failed to connect to the database. ' . mysqli_connect_error());
  };
?>