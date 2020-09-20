<?php
include('header.php');

if(isset($_POST['submit'])){
  $username = $uname;
  $type = $_POST['payment'];
  $amount = $_POST['amount'];
  $last = $_POST['num'];

  $query = "INSERT INTO transections (reciver, sender, amount, type, last, status) VALUES ('$username', 'admin', '$amount', '$type', '$last', '2')";
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
      <h6><?php echo $tbal; ?></h6>
    </div>
  </div>
<div class="board p-2">
  <h5>Withdraw Money</h5>
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
      <input type="number" min="100" name="amount" id="username" class="form-control">
    </div>
    <div class="form-group">
      <label for="password">Phone Number</label>
      <input type="number" name="num" id="password" class="form-control" required>
    </div>
    <?php if($tbal > 99){ ?>
      <input type="submit" value="Withdraw" name="submit" class="btn btn-light">
    <?php }else{ ?>
      <input type="submit" value="Not Enough Money For Withdraw" name="subm" class="btn btn-danger">
    <?php } ?>
  </form>
</div>
<div class="button-grp">
  <a href="add_money.php" class="btn btn-light">Add Money</a>
  <a href="transections.php" class="btn btn-light">Transections</a>
</div>
<?php
include('footer.php');
?>