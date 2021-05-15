<?php 
session_start();
include_once('connection.php');
$database = new database();
 
if(isset($_SESSION['is_login']))
{
    header('location:home.php');
}
 
if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:home.php');
}
 
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }
 
    if($database->login($username,$password,$remember))
    {
      header('location:home.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <title>Document</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">SARJANA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

      </ul>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Login</a>
        </li>
    </div>
  </div>
</nav>

<div class="container-md">
<br>
<br>
    <form class="form-signin" method="post" action="">
    <h1>Login</h1>
    <div>
        <label for="username" class="sr-only">Username</label>
        <div>
        <input type="text" id="username" class="form-group col-md-4"  name="username" placeholder="Username" required autofocus>
        </div>
    </div>
    <br>


    <div>
        <label for="password" class="sr-only">Password</label>
        <div>
        <input type="password" id="password" class="form-group col-md-4"  name="password" placeholder="Password" required>
        </div>
        </div>
        
    <div class="checkbox mb-3">
        <label>
        <input type="checkbox" value="remember-me" name="remember"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
    <a href="register.php" class="btn btn-lg btn-success btn-block">Register</a>
    </form>
    <img class="gambar" src="img/img6.jpg" alt="Girl in a jacket" width="550">

    </div>
    
    <script src="js/bootstrap.js" ></script>
    <script src="js/popper.min.js"></script>
</body>


</html>