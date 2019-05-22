<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
  
  <title>Document</title>
  <style>
    *{
      text-align: center;
    }
    .row{
      margin-top: 50px;
    }
    h1{
      margin-top: 175px;
    }
  </style>
</head>
<body>
  <h1>Welcome to the Animal Registrator</h1>
  <div class="row">
    <div class="six columns">
      <form action="login.php" method="post">
        <h3>Log In</h3>
        <label>Username</label>
        <input type="text" name="username" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Log In</button>
      </form>
    </div>
    <div class="six columns">
      <form action="register.php" method="post">
        <h3>Sign Up</h3>
        <label>Username</label>
        <input type="text" name="username" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Sign Up</button>
      </form>
    </div>
  </div>
</body>
</html>