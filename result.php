<?php
include('header.php');
?>
<h2>Results</h2>
<?php 
  $query = "SELECT * FROM matches WHERE status = 1";
  $result = mysqli_query($conn, $query);

  $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);
  foreach($matchs as $match){
?>
<div class="board">
<a class="view-tag" href="view_result.php?id=<?php echo $match['id']; ?>">
  <div class="board-head">
    <img src="<?php echo $logo_image; ?>" class="match-logo">
    <div>
      <h5><?php echo $match['name']; ?></h5>
      <p>Time <?php echo $match['time']; ?></p>
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
      <h6><?php echo $match['mtype']; ?></h6>
    </div>
    <div class="point">
      <p>Map</p>
      <h6><?php echo $match['map']; ?></h6>
    </div>
  </div></a>
  <div class="board-foot">
    <a href="view_result.php?id=<?php echo $match['id']; ?>" class="btn btn-dark">View Price</a>
  </div>
</div>
<?php  } ?>
<?php
include('footer.php');
?>
