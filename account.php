<?php include('header.php'); ?>
<h2>Account</h2>
<div class="profile">
          <?php 
            $query = "SELECT * FROM users WHERE username = '$uname'";
            $result = mysqli_query($conn, $query);

            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($users as $user){
          ?>
  <img src="<?php echo $logo_image; ?>" class="profile-img">
  <h5><?php echo $user['username']; ?></h5>
  <a href="logout.php" class="btn btn-dark">Logout</a>
  <div class="row">
    <div class="col-md-5 col-5 achive">
      <p>Balance</p>
      <h6><?php echo $user['balance']; ?></h6>
    </div>
    <div class="col-md-5 col-5 achive">
      <p>Total Kills</p>
      <h6><?php echo $user['kills']; ?></h6>
    </div>
    <div class="col-md-5 col-5 achive">
      <p>Match Play</p>
      <h6><?php echo $user['play']; ?></h6>
    </div>
    <div class="col-md-5 col-5 achive">
      <p>Winning</p>
      <h6><?php echo $user['win']; ?></h6>
    </div>
  </div>
  <div class="button-grp">
    <a href="edit_profile.php?id=<?php echo $user['id']; ?>" class="btn btn-light">Edit Profile</a>
    <a href="add_money.php" class="btn btn-light">My Wallet</a>
  </div>
</div>
<?php  } 