<?php
include('header.php');

$id = $_GET['id'];

if(isset($_POST['edit'])){
  $name = $_POST['uname'];

    $query1 = "UPDATE users SET username = '$name' WHERE username = '$uname'";
    $result1 = mysqli_query($conn, $query1);

    if($result1){
      $query = "UPDATE transections SET sender = '$name' WHERE sender = '$uname'";
      $result = mysqli_query($conn, $query);

      $query = "UPDATE transections SET reciver = '$name' WHERE reciver = '$uname'";
      $result = mysqli_query($conn, $query);

      $query = "UPDATE participants SET player_id = '$name' WHERE player_id = '$uname'";
      $result = mysqli_query($conn, $query);

      $_SESSION['username'] = $name;
      header('location: account.php');
    }
}


if(isset($_POST['update'])){
  $pass1 = $_POST['pass1'];
  $pass2 = $_POST['pass2'];

  $query = "SELECT * FROM users WHERE id = $id AND password = '$pass1'";
  $result = mysqli_query($conn, $query);
  $pass = mysqli_num_rows($result);

  if($pass == 1) {
    $query1 = "UPDATE users SET password = $pass2 WHERE id = $id";
    $result1 = mysqli_query($conn, $query1);

    if($result1){
      header('location: account.php');
    }
  }else{
    echo '<p class="text-center text-danger bg-light">Old Password is incorrect</p>';
  }
}

?>

<div class="board p-2">
  <h5>Edit Username</h5>
  <form action="" method="post">
    <div class="form-group">
      <label for="uname">Username</label>
      <input type="text" name="uname" id="uname" class="form-control" value="<?php echo $uname; ?>">
    </div>
    <input type="submit" value="Update username" name="edit" class="btn btn-light mb-5">
  </form>
  <h5>Edit Password</h5>
  <form action="" method="post">
    <div class="form-group">
      <label for="password">Old Password</label>
      <input type="password" name="pass1" id="password" class="form-control">
    </div>
    <div class="form-group">
      <label for="password">New Password</label>
      <input type="password" name="pass2" id="password" class="form-control">
    </div>
    <input type="submit" value="Update" name="update" class="btn btn-light">
  </form>
</div>

<?php
include('footer.php');
?>