<?php
include('header.php');
  $id = $_GET['id'];

  if(isset($_POST['complete'])){
    $plid = $_POST['plid'];
    $rank = $_POST['rank'];
    $kill = $_POST['kill'];
    $pekill = $_POST['pkills'];
    $prize11 = $_POST['prize1'];
    $username = $_POST['uname'];
    $win = $pekill * $kill + $prize11;
    $query = "UPDATE participants SET rank = '$rank', win = $win, kills = '$kill', stat = 1 WHERE id = $plid";
    $result = mysqli_query($conn, $query);
    if($result){
      $query = "INSERT INTO transections (reciver, sender, amount, type, cond, status) VALUES ('$username', 'admin', '$win', 'reward','1', '3')";
       mysqli_query($conn, $query);
    }
  }

  if(isset($_POST['cancel'])){
    $plid = $_POST['plid'];

    $query = "UPDATE participants SET stat = 0 WHERE id = $plid";
    $result = mysqli_query($conn, $query);
  }

  $query = "SELECT * FROM matches WHERE id = $id";
  $result = mysqli_query($conn, $query);

  $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);
  foreach($matchs as $match){
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo $match['name']; ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
      </div>
      <div class="jambo mb-5">
        <div class="j-child">
          <p>Total Price</p>
          <h5><?php echo $match['prize']; ?></h5>
        </div>
        <div class="j-child">
          <p>Entry fee</p>
          <h5><?php echo $match['entry']; ?></h5>
        </div>
        <div class="j-child">
          <p>Per Kills</p>
          <h5><?php echo $pkills = $match['pkill']; ?></h5>
        </div>
        <div class="j-child">
          <p>Map</p>
          <h5><?php echo $match['map']; ?></h5>
        </div>
        <div class="j-child">
          <p>Type</p>
          <h5><?php echo $mtype = $match['mtype']; ?></h5>
        </div>
      </div>
      <div class="table-responsive">
        <h2>Prize List</h2>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Amount(tk)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Winner</td>
              <td><?php echo $match['prize1']; ?></td>
            </tr>
            <tr>
              <td>Second</td>
              <td><?php echo $match['prize2']; ?></td>
            </tr>
            <tr>
              <td>Third</td>
              <td><?php echo $match['prize3']; ?></td>
            </tr>
          </tbody>
        </table>
      <div class="jambo">
        <h2>Rules And Regulations</h2>
        <p><?php echo $match['rules']; ?></p>
      </div>


      <div class="table-responsive">
      
        <h2>Total Participents</h2>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <?php if($mtype == 4) {?>
              <th>Team</th>
              <?php } ?>
              <th>Rank</th>
              <th>Kills</th>
              <th>Prize</th>
              <th>Complete</th>
            </tr>
          </thead>
          <tbody>
          <?php
  $query = "SELECT * FROM participants WHERE match_id = $id AND stat = 0";
  $result = mysqli_query($conn, $query);
  $row = mysqli_num_rows($result);
  for($i = 1; $i <= $row; $i++) {
  $player = mysqli_fetch_array($result);
?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $player['player_id']; ?></td>
      <?php if($mtype == 4) {?>
        <td><?php echo $player['team']; ?></td>
      <?php } ?>
      <form method="post">
      <input type="text" name="uname" value="<?php echo $player['player_id']; ?>" class="sr-only">
      <input type="number" class="sr-only" name="plid" value="<?php echo $player['id']; ?>">
      <td><input type="number" class="view-input" name="rank"></td>
      <td><input type="number" name="kill" class="view-input"></td>
      <input type="number" value="<?php echo $pkills; ?>" name="pkills"  class="sr-only">
      <td><input type="number" name="prize1"  class="view-input"></td>
      <td><input type="submit" value="Complete" name="complete" class="btn btn-sm btn-warning"></td>
      </form>
    </tr>
  <?php  } ?>
          </tbody>
        </table>
      </div>

      <div class="table-responsive">
        <h2>Final Result</h2>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Rank</th>
              <?php if($mtype == 4) {?>
                <th>Team</th>
              <?php } ?>
              <th>Name</th>
              <th>Kills</th>
              <th>Win</th>
            </tr>
          </thead>
          <tbody>
<?php
  $query = "SELECT * FROM participants WHERE match_id = $id AND stat = 1 ORDER BY rank";
  $result = mysqli_query($conn, $query);
  $players = mysqli_fetch_all($result, MYSQLI_ASSOC);
  foreach($players as $player){
?>
    <tr>
      <th scope="row"><?php echo $player['rank']; ?></th>
      <?php if($mtype == 4) {?>
        <td><?php echo $player['team']; ?></td>
      <?php } ?>
      <td><?php echo $player['player_id']; ?></td>
      <td><?php echo $player['kills']; ?></td>
      <td><?php echo $player['win']; ?></td>
    </tr>
  <?php  } ?>
          </tbody>
        </table>

        <?php  } ?>
      </div>
    </main>



  <?php 
include('footer.php');
?>