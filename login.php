<?php
include('admin/db.php');
session_start();

if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

  $result = mysqli_query($conn, $query);

  $user = mysqli_num_rows($result);

  
  if($user == 1){
    $_SESSION['username'] = $username;
    header('location: main.php');
  }else{
    echo '<p class="text-center text-danger bg-light">Wrong Username or Password</p>';
  }
  
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

    <title>Free Fire Tournament</title>
  </head>
  <body>
  <div class="custom">
<div class="board p-2 mt-5" >
<h5>AR Gaming BD</h5>
  <h5>Login</h5>
  <form action="" method="post">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="form-control">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control">
    </div>
    <input type="submit" value="Login" class="btn btn-light" name="submit">
  </form>
  <a href="signup.php">Not account? Sign Up</a>
</div>
</div>
  </body>

</html>