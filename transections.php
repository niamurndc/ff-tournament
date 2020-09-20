<?php
include('header.php');
?>
<h2 class="text-center">Your Wallet</h2>
  <div class="board-body">
    <div class="point">
      <p>Total Money</p>
      <h6><?php echo $tbal; ?></h6>
    </div>
  </div>
<div class="board p-2">
  <h5>Transections</h5>
  <?php 
            $query = "SELECT * FROM transections WHERE sender = '$uname' OR reciver = '$uname' ORDER BY id desc";
            $result = mysqli_query($conn, $query);

            $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($matchs as $match){
?>
  <div class="card bg-dark text-left pl-2 pt-1">
    <?php echo '<b>'.$match['amount']. ' BDT</b> '; if($match['cond'] == 0){echo '<span class="text-warning">(Pending)</span>';}else{} if($match['status'] == 1){echo ' <span class="text-success">added</span> '; }elseif($match['status'] == 2){echo ' <span class="text-danger">withdraw</span> ';}elseif($match['status'] == 3){echo ' <span class="text-success">Rewarded</span> ';} else{echo ' <span class="text-danger">spended</span> ';}echo ' at ' .$match['time']; ?>
  </div>
  <?php  } ?>
</div>
<div class="button-grp">
  <a href="withdraw.php" class="btn btn-light">Withdraw Money</a>
  <a href="add_money.php" class="btn btn-light">Add Money</a>
</div>
<?php
include('footer.php');
?>