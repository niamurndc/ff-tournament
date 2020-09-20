<?php
include('db.php');
session_start();

if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND status = 1";

  $result = mysqli_query($conn, $query);

  $user = mysqli_num_rows($result);

  
  if($user == 1){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 1;
    header('location: index.php');
  }
  
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Signin Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="login.css">
  </head>
  <body class="text-center">
    <form class="form-signin" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" id="inputEmail" name="username"  class="form-control" placeholder="Userame" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <input type="submit" value="Sign in" class="btn btn-lg btn-primary btn-block" name="submit">
      <p class="mt-5 mb-3 text-muted">&copy; Free Fire</p>
    </form>
  </body>
</html>
