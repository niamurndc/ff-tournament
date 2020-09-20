<?php 
include('db.php');
session_start();
if($_SESSION['username'] == '' || $_SESSION['status'] == ''){
  header('location: login.php');
}else{
  $uname = $_SESSION['username'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Admin | AR Gaming BD</title>
  </head>
  <body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">AR Gaming BD</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'active';} ?>" href="index.php">
              <span data-feather="home"></span>
              Dashboard 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'match.php'){echo 'active';} ?>" href="match.php">
              <span data-feather="file"></span>
              Matches/Tournaments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'user.php'){echo 'active';} ?>" href="user.php">
              <span data-feather="shopping-cart"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'transections.php'){echo 'active';} ?>" href="transections.php">
              <span data-feather="users"></span>
              Transections
            </a>
          </li>
        </ul>

        
        
      </div>
    </nav>