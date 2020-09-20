<?php
include('header.php');

if(isset($_POST['submit'])){
  $username = $uname;
  $type = $_POST['payment'];
  $amount = $_POST['amount'];
  $last = $_POST['last'];

  $query = "INSERT INTO transections (sender, reciver, amount, type, last, status) VALUES ('$username', 'admin', '$amount', '$type', '$last', '1')";
  $result = mysqli_query($conn, $query);
  
  if($result){
    header('location: transections.php');
  }
}
?>
<h2 class="text-center">Your Wallet</h2>
  <div class="board-body">
    <div class="point">
      <p>Total Money</p>
      <h6><?php echo $tbal?></h6>
    </div>
  </div>
<div class="board p-2">
  <h5>Add Money</h5>
  <form action="" method="post">
  <div class="form-group">
      <label for="Payment">Payment Method</label>
      <select name="payment" id="Payment" class="form-control">
        <option value="bkash">Bkash</option>
        <option value="rocket">Rocket</option>
      </select>
    </div>
    <div class="form-group">
      <label for="username">Amount</label>
      <input type="number" name="amount" id="username" class="form-control">
    </div>
    <div class="form-group">
      <label for="password">Last 4 Digits</label>
      <input type="number" name="last" id="password" class="form-control">
    </div>
    <input type="submit" name="submit" value="Add Money" class="btn btn-light">
  </form>
</div>
<div class="button-grp">
  <a href="withdraw.php" class="btn btn-light">Withdraw Money</a>
  <a href="transections.php" class="btn btn-light">Transections</a>
</div>
<?php
include('footer.php');
?>