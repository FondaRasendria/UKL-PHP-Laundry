<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <nav class="navbar navbar-expand-lg sticky-top bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" >Laundry</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home.php">Paket Laundry</a>
                  </li>
                  <?php
                    if($_SESSION['role'] == 'admin'){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="tampil_member.php">Member</a>
                  </li>
                  <?php
                    }
                  ?>
                  <?php
                    if($_SESSION['role'] == 'admin'){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="tampil_user.php">Staff</a>
                  </li>
                  <?php
                    }
                  ?>
                  <?php
                    if($_SESSION['role'] == 'admin'){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="tampil_paket.php">Paket</a>
                  </li>
                  <?php
                    }
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="histori_transaksi.php">Histori Laundry</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                  </li>
                </ul>
                <h6 style="padding-left: 5px;"><?=$_SESSION['nama']?></h6>
              </div>
            </div>
          </nav>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>