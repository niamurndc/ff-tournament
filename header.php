<?php
  include('admin/db.php');
  session_start();
  if($_SESSION['username'] == ''){
    header('location: login.php');
  }else{
    $uname = $_SESSION['username'];
  }

  $query4 = "SELECT * FROM logo WHERE id = 1"; 
  $result = mysqli_query($conn, $query4);
  $logo = mysqli_fetch_array($result);
  $logo_image = 'logo/'.$logo['logo'];

  $query = "SELECT * FROM transections WHERE status = 0 AND sender = '$uname'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_num_rows($result);
  $sum0 = 0;
  for($i = 1; $i <= $row; $i++) {
  $player = mysqli_fetch_array($result);
  $amount = $player['amount'];
  $sum0 = $sum0 + $amount;
  }
  $tspend = $sum0;

  $query = "SELECT * FROM transections WHERE status = 1 AND sender = '$uname' AND cond = 1";
  $result = mysqli_query($conn, $query);
  $row = mysqli_num_rows($result);
  $sum1 = 0;
  for($i = 1; $i <= $row; $i++) {
  $player = mysqli_fetch_array($result);
  $amount = $player['amount'];
  $sum1 = $sum1 + $amount;
  }
  $tadd = $sum1;

  $query = "SELECT * FROM transections WHERE status = 2 AND reciver = '$uname'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_num_rows($result);
  $sum2 = 0;
  for($i = 1; $i <= $row; $i++) {
  $player = mysqli_fetch_array($result);
  $amount = $player['amount'];
  $sum2 = $sum2 + $amount;
  }
  $twith = $sum2;

  $query = "SELECT * FROM transections WHERE status = '3' AND reciver = '$uname' AND cond = 1";
  $result = mysqli_query($conn, $query);
  $row = mysqli_num_rows($result);
  $sum3 = 0;
  for($i = 1; $i <= $row; $i++) {
  $player = mysqli_fetch_array($result);
  $amount = $player['amount'];
  $sum3 = $sum3 + $amount;
  }
  $treward = $sum3;

  $query = "SELECT * FROM participants WHERE player_id = '$uname' AND stat = 1";
  $result = mysqli_query($conn, $query);
  $row1 = mysqli_num_rows($result);
  $tkill = 0;
  for($i = 1; $i <= $row1; $i++) {
    $player = mysqli_fetch_array($result);
    $amount = $player['kills'];
    $tkill = $tkill + $amount;
  }


  $plus = $treward + $tadd;
  $min = $tspend + $twith;
  $tbal =  $plus - $min;
  
  $query = "UPDATE users SET balance = '$tbal', kills = $tkill, win = $treward, play = $row1 WHERE username = '$uname'";
  $result = mysqli_query($conn, $query);
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

    <title>AR Gaming BD</title>
  </head>
  <body>
    <div class="custom">
      <header>
        <div class="primary-header">
          <a href="#" class="title my-1">Free Fire Tournament</a>
        </div>
        <div class="secondery-header">
          <div class="menu">
            <a href="main.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'main.php'){echo 'active';} ?>"><i class="fa fa-home" aria-hidden="true"></i></a>
            <a href="about.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'about.php'){echo 'active';} ?>"><i class="fa fa-address-book-o" aria-hidden="true"></i></a>
            <a href="current.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'current.php'){echo 'active';} ?>"><i class="fa fa-cubes" aria-hidden="true"></i></a>
            <a href="result.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'result.php'){echo 'active';} ?>"><i class="fa fa-list-alt" aria-hidden="true"></i></a>
            <a href="notice.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'notice.php'){echo 'active';} ?>"><i class="fa fa-bell" aria-hidden="true"></i></a>
            <a href="account.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'account.php'){echo 'active';} ?>"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
          </div>
        </div>
      </header>