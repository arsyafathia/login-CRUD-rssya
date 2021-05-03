<?php
session_start();
include 'koneksibaru.php';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .jumbotron{
            padding: top 6rem;
            font-color: 
        }
        section{
          padding-top: 5rem;
        }
    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">RS.SYA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
                <span class="material-icons">
                  </span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-warning" href="#"><?php echo $_SESSION ["email"] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-dark text-white" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <section class="jumbotron jumbotron-fluid text-center" id="home">
        <div class="container">
            <img src ="hehe.jpg" alt = "" width="200"
            class="rounded-circle">
          <h1 class="display-4 font-color ">RS.SYA</h1>
          <h6 class="fst-italic font-color ">The Hospital Industry to This Day Works Its Tail of to Do The Right Thing</h6>
          <p class="lead font-color">Power of The Community to Create Health is Far greater than any pyshician, clinic or hospital.</p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000 " fill-opacity="1" d="M0,64L1440,192L1440,320L0,320Z"></path></svg>
</section>
</div>
<center>
<div class="row">
  <div class="col-sm-6">
    <div class="card" id="about">
      <div class="card-body">
        <h5 class="card-title">Doctor's Table</h5>
        <a href="readdokter.php" class="btn btn-primary">ABOUT DOCTOR </a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Patient's Table</h5>
        <a href="readpasien.php" class="btn btn-primary">ABOUT PATIENT</a>
      </div>
    </div>
  </div>
</div>


</pre>
       
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>