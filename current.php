<?php
include('header.php');
?>
<h2>Current</h2>
<?php 
            $query = "SELECT * FROM matches WHERE status = 0 ORDER BY id desc";
            $result = mysqli_query($conn, $query);

            $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($matchs as $match){
?>
<div class="board">
  <a class="view-tag" href="view.php?id=<?php echo $match['id']; ?>">
  <div class="board-head">
    <img src="<?php echo $logo_image; ?>" class="match-logo">
    <div>
      <h5><?php echo $match['name']; ?></h5>
      <p><?php echo $match['time']; ?></p>
    </div>
  </div>
  <div class="board-body">
    <div class="point">
      <p>Total Price</p>
      <h6><?php echo $match['prize']; ?></h6>
    </div>
    <div class="point">
      <p>Per Kill</p>
      <h6><?php echo $match['pkill']; ?></h6>
    </div>
    <div class="point">
      <p>Entry Fee</p>
      <h6><?php echo $match['entry']; ?></h6>
    </div>
    <div class="point">
      <p>Type</p>
      <h6><?php echo $mtype = $match['mtype']; ?></h6>
    </div>
    <div class="point">
      <p>Map</p>
      <h6><?php echo $match['map']; ?></h6>
    </div>
  </div>
  <div class="board-seat">
    <p class="bar">Only <?php $id = $match['id'];
    $query = "SELECT * FROM participants WHERE match_id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

   $part = $match['participant']; 
   if($mtype == 4){
     $avi = $part - $row/4; 
     echo $avi; 
   }else{ 
     $avi = $part - $row;
     echo $avi;
   } ?> Seats Avilable</p><progress id="file" value="<?php if($mtype == 4){echo $row/4; }else{ echo $row;} ?>" max="<?php echo $match['participant']; ?>"> </progress><h6><?php
    $id = $match['id'];
    $query = "SELECT * FROM participants WHERE match_id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result); 
    if($mtype == 4){echo $row/4; }else{ echo $row;}
    ?>/<?php echo $part; ?></h6>
  </div>  </a>
  <div class="board-foot">
    <?php if($avi == 0){ ?>
    <a href="#" class="btn btn-light">Closed</a>
    <?php }else{ ?>
      <a href="join.php?id=<?php echo $match['id'];?>&slot=<?php echo $avi ;?>" class="btn btn-light">Join</a>
    <?php } ?>
    <a href="view.php?id=<?php echo $match['id']; ?>" class="btn btn-dark">View Price</a>
  </div>
</div>
<?php  } ?>
<?php
include('footer.php');
?>


