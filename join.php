<?php
include('header.php');
$id = $_GET['id'];
$slot = $_GET['slot'];



if(isset($_POST['join'])){
  $username = $_POST['username'];
  $amount = $_POST['tfee'];

  $query = "SELECT * FROM participants WHERE match_id = '$id' AND player_id = '$username'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_num_rows($result);
  if($row < 1){
    $query = "INSERT INTO participants (match_id, player_id) VALUES ('$id', '$username')";
    $result = mysqli_query($conn, $query);
    if($result){
      $query = "INSERT INTO transections (sender, reciver, amount, type, status, cond) VALUES ('$uname', 'admin', '$amount', 'join', '0', '1')";
      $result = mysqli_query($conn, $query);
      header('location: current.php');
    }
  }else{
    echo 'you already join';
  }
}

$team = $id.'1'.$uname;

if(isset($_POST['clashjoin'])){
  $username1 = $_POST['username1'];
  $username2 = $_POST['username2'];
  $username3 = $_POST['username3'];
  $username4 = $_POST['username4'];
  $amount = $_POST['tfee'];

  $users = array($username1, $username2, $username3, $username4);
  for($i = 0; $i < count($users); $i++){
    $query = "INSERT INTO participants (match_id, player_id, team) VALUES ('$id', '$users[$i]', '$team')";
    $result = mysqli_query($conn, $query);
    if($result){
      $query = "INSERT INTO transections (sender, reciver, amount, type, status, cond) VALUES ('$uname', 'admin', '$amount', 'join', '0', '1')";
      $result = mysqli_query($conn, $query);
      header('location: current.php');
    }
  }
  

}

?>

<div class="text-center">
<?php 
            $query = "SELECT * FROM matches WHERE id = $id";
            $result = mysqli_query($conn, $query);

            $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($matchs as $match){
?>
  <h2 class="text-center"><?php echo $match['name']; ?></h2>
  <p class="text-center"><?php echo $match['time']; ?></p>
  <div class="board-body">
    <div class="point">
      <p>Avilable Balance</p>
      <h6><?php echo $tbal; ?></h6>
    </div>
    <div class="point">
      <p>Entry fee per person</p>
      <h6><?php echo $entry_fee = $match['entry']; 
                $mtype = $match['mtype'];
                $tfee = $entry_fee * $mtype;
      ?></h6>
    </div>
    <div class="point">
      <p>Total Entry Fee</p>
      <h6><?php echo $tfee; ?></h6>
    </div>
  </div>
  <h2 class="text-center"><?php echo $slot; ?> Slots Avilabe</h2>
  <div class="board p-1">
    <?php if($mtype == 1){ ?>
    <h5>Solo Registration</h5>
    <form method="post">
      <label for="username">Exact Game Player Name</label>
      <input type="text" name="tfee" value="<?php echo $tfee ; ?>" class="sr-only">
      <input type="text" name="username" id="username" class="form-control">
      <?php if($tbal < $tfee){ ?>
        <a href="add_money.php" class="btn btn-danger disable mt-2">Load Balance</a>
      <?php }else{ ?>
        <input type="submit" value="Join" name="join" class="btn btn-danger mt-2">
      <?php } ?>
    </form>
    <?php }elseif($mtype == 4){ ?>
      <h5>Join With Your Squad</h5>
      <form method="post">
        <label for="username">Exact Squad Player Name</label>
        <input type="text" name="tfee" value="<?php echo $tfee ; ?>" class="sr-only">
        <input type="text" name="username1"  class="form-control">
        <input type="text" name="username2"  class="form-control">
        <input type="text" name="username3"  class="form-control">
        <input type="text" name="username4"  class="form-control">
        <?php if($tbal < $tfee){ ?>
          <input type="submit" value="Join" class="btn btn-danger disable mt-2">
        <?php }else{ ?>
          <input type="submit" value="Join" name="clashjoin" class="btn btn-danger mt-2">
        <?php } ?>
      </form>
    <?php }else{ ?>
      
    <?php } ?>
  </div>
  <?php  } ?>
</div>