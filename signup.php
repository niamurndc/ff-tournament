<?php
include('admin/db.php');

if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $query0 = "SELECT * FROM users where username = '$username'";
  $result0 = mysqli_query($conn, $query0);

  $user1 = mysqli_num_rows($result0);
  if($user1 == 1){
    echo '<p class="text-center text-danger bg-light">Username taken</p>';
  }else{
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);
  
    
    if($result){
      header('location: login.php');
    }
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
<div class="board p-2 mt-5">
<h5>AR Gaming BD</h5>
  <h5>Sign Up</h5>
  <form  method="post">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="Enter exact Free Fire nickname">
    </div>
    <div class="form-group">
      <label for="password">Password</label><br>
      <span class="text-warning">Remeber your password. You will not recover your password</span>
      <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
    </div>
    <input type="submit" value="Sign Up" class="btn btn-light" name="submit">
  </form>
  <a href="login.php">Have account? Login</a>
</div>

</div>
  </body>

</html>