<?php
include 'db_con.php';

session_start();
if ($_SESSION['username'] == null) {
  header('location: index.php');
};
$owner = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Animal City</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
  <style>
    header {
      margin-top: 150px;
      text-align: center;
    }

    h1 {
      display: inline-block;
    }

    li{
      list-style: none;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <header>
    <h1>Hello <?php echo $_SESSION['username']; ?></h1>
    <a class="button" href="logout.php">Logout</a>
  </header>

  <div class="row">
    <div class="four columns">
      <h2>Register Your Animal</h2>
      <form action="animal_registrator.php" method="POST">
        <label>Name</label>
        <input type="text" name="animal-name" required>
        <label>Type</label>
        <select name="animal-type">
          <option value="dog">Dog</option>
          <option value="cat">Cat</option>
          <option value="bird">Bird</option>
        </select>
        <br>
        <button type="submit">Submit Your Animal</button>
      </form>
    </div>

    <div class="four columns">
      <h2>Your Animals</h2>
      <?php
      $query_your_animals = mysqli_query($con, "SELECT Name, Type, Id FROM animals WHERE Owner = '$owner'");

      while ($row = mysqli_fetch_assoc($query_your_animals)) {
        echo "
            <ul> 
              <li>Name: {$row['Name']} </li>
              <li>Type: {$row['Type']} </li>
              <form action='remove_animal.php' method='POST'>
                <button type='submit' name='animal-id' value={$row['Id']}>Remove Your Animal</button>
              </form>
            </ul>
            </ul>
        ";};
      ?>
    </div>

    <div class="four columns">
      <h2>Other Peoples Animals</h2>
      <?php
      $query_all_animals = mysqli_query($con, "SELECT Name, Type, Owner FROM animals");

      while($row = mysqli_fetch_assoc($query_all_animals)) {
        echo "
        <ul>
          <li>Name: {$row['Name']} </li>
          <li>Type: {$row['Type']} </li>
          <li>Owner: {$row['Owner']} </li>
        </ul>
        ";};
      ?>
    </div>
  </div>
</body>
</html>