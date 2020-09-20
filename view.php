<?php
include('header.php');

  $id = $_GET['id'];
  $query = "SELECT * FROM matches WHERE id = $id";
  $result = mysqli_query($conn, $query);

  $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);
  foreach($matchs as $match){
?>

<img src="img/pubg.jpg" class="view-img">
<h2><?php echo $match['name']; ?></h2>
<p class="ml-2 mto">Time <?php echo $match['time']; ?></p>
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
  <div class="prizee">

<h5 class="ml-2">Prize Details</h5>
<table class="table table-dark my-1">

  <tbody>
    <tr>
      <td>Winner</td>
      <td><?php echo $match['prize1']; ?></td>
    </tr>
    <?php if($match['prize2'] != 0){ ?>
    <tr>
      <td>Second</td>
      <td><?php echo $match['prize2']; ?></td>
    </tr>
    <tr>
      <td>Third</td>
      <td><?php echo $match['prize3']; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<div class="rules">
<h5 class="ml-2 mt-2">Rules and Regulations</h5>
<p class="m-2 b-center"><?php echo $match['rules']; ?></p>
</div>

<div class="rules">
<?php if($mtype == 1){ ?>
<h5 class="ml-2 mt-2">Registered Participents</h5>
<table class="table table-striped table-light">
  <tbody>
  <?php
  $query = "SELECT * FROM participants WHERE match_id = $id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_num_rows($result);
  for($i = 1; $i <= $row; $i++) {
  $player = mysqli_fetch_array($result);
?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $player['player_id']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
  <?php }elseif($mtype == 4){ ?>
    <h5 class="ml-2 mt-2">Registerd Squad</h5>
<table class="table table-striped table-light">
  <thead>
    <th>First Team</th> 
  </thead>
  <tbody>
  <?php
  $query = "SELECT * FROM participants WHERE match_id = $id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_num_rows($result);
  for($i = 1; $i <= $row; $i++) {
  $player = mysqli_fetch_array($result);
  if($i < 5){ 
?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      
      <td><?php echo $player['player_id']; ?></td>
      
    </tr>
  <?php } } ?>
  </tbody>
</table>
<table class="table table-striped table-light">
  <thead>
    <th>Second Team</th> 
  </thead>
  <tbody>
  <?php
  $query = "SELECT * FROM participants WHERE match_id = $id";
  $result = mysqli_query($conn, $query);
  $row = mysqli_num_rows($result);
  for($i = 1; $i <= $row; $i++) {
  $player = mysqli_fetch_array($result);
  if($i > 4){ 
?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      
      <td><?php echo $player['player_id']; ?></td>
      
    </tr>
  <?php } } ?>
  </tbody>
</table>
</div>

  
  <?php } }
include('footer.php');
?>


