<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" >
    <title>Document</title>
</head>



<body style="background-color: #3edbf0;">


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
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
    </div>
  </div>
</nav>

<div class="container-md">
  <div>
  <br>
  <br>
      <!-- <div>
          <a href="logout.php" class="form-inline my-2 my-lg-0 btn btn-secondary">Logout</a>
      </div> -->
      <br>
      <div>
        <h1>Selamat Datang <?php echo $_SESSION['nama']?></h1>
        <h2>Dengan NIM <?php echo $_SESSION['nim'] ?></h2>
        <h2>Dari Program Studi <?php echo $_SESSION['prodi'] ?></h2>
        <h6>Email Mahasiswa <?php echo $_SESSION['email'] ?> </h6>
      </div>

      
</div>
    <script src="js/bootstrap.js" ></script>
    <script src="js/popper.min.js"></script>
</body>
</html>