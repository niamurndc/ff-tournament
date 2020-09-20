<?php
include('header.php');

if(isset($_POST['submit'])){
  $type = $_POST['type'];
  $name = $_POST['name'];
  $time = $_POST['date']. ' ' .$_POST['time'];
  $t_prize = $_POST['t-prize'];
  $t_player = $_POST['t-player'];
  $fee = $_POST['fee'];
  $per_kill = $_POST['per-kill'];
  $map = $_POST['map'];
  $match_type = $_POST['match-type'];
  $prize1 = $_POST['prize1'];
  $prize2 = $_POST['prize2'];
  $prize3 = $_POST['prize3'];
  $rules = $_POST['rules'];

  $query = "INSERT INTO matches(name, time, type, prize, pkill, map, participant, entry, mtype, prize1, prize2, prize3, rules) VALUES ('$name', '$time', '$type', '$t_prize', '$per_kill', '$map', '$t_player', '$fee', '$match_type', '$prize1', '$prize2', '$prize3', '$rules')";

  $result = mysqli_query($conn, $query);

  if($result){
    $query1 = "INSERT INTO notice (msg) VALUES ('New match Published <br> Join Now')";
    mysqli_query($conn, $query1);
    header('location: match.php');
  }else{
    $msg = 'Tournament or Matched is not Published';
  }
}
?>



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Match/Tournament</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>



      <div class="table-responsive">
        <form method="post">
        <div class="form-group">
            <label>Type</label>
            <select name="type" class="form-control">
              <option value="1">Match</option>
              <option value="2">Tournament</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tournament/Match Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Tournament/Match Date</label>
            <input type="date" name="date" class="form-control">
          </div>
          <div class="form-group">
            <label>Tournament/Match Time</label>
            <input type="time" name="time" class="form-control">
          </div>
          <div class="form-group">
            <label>Total Prize</label>
            <input type="text" name="t-prize" class="form-control">
          </div>
          <div class="form-group">
            <label>Total Perticipants</label>
            <input type="text" name="t-player" class="form-control">
          </div>
          <div class="form-group">
            <label>Entry Fee</label>
            <input type="text" name="fee" class="form-control">
          </div>
          <div class="form-group">
            <label>Per Kill</label>
            <input type="text" name="per-kill" class="form-control">
          </div>
          <div class="form-group">
            <label>Map</label>
            <input type="text" name="map" class="form-control">
          </div>
          <div class="form-group">
            <label>Match Type</label>
            <select name="match-type" class="form-control">
              <option value="1">Solo</option>
              <option value="4">Clash Squad</option>
            </select>
          </div>
          <div class="form-group">
            <label>Winner Prize</label>
            <input type="text" name="prize1" class="form-control">
          </div>
          <div class="form-group">
            <label>2nd Prize (if any)</label>
            <input type="text" name="prize2" class="form-control">
          </div>
          <div class="form-group">
            <label>3rd Prize (if any)</label>
            <input type="text" name="prize3" class="form-control">
          </div>
          <div class="form-group">
            <label>Rules</label>
            <textarea name="rules" class="form-control"></textarea>
          </div>
          <input type="submit" value="Publish" name="submit" class="btn btn-info mb-5">
          
        </form>
      </div>
    </main>



<?php
include('footer.php');
?>