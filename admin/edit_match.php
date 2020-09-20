<?php
include('header.php');

$id = $_GET['id'];

if(isset($_POST['submit'])){

  $com = $_POST['com'];
  $dat = $_POST['dat'];

  $query2 = "UPDATE matches SET  status = '$com', details = '$dat' WHERE id = $id";
  $result2 = mysqli_query($conn, $query2);
  
  if($result2){
    if($com == '1'){
      $query1 = "INSERT INTO notice (msg) VALUES ('Match Result Published <br> Join Now')";
      mysqli_query($conn, $query1);
    }else{
      $query1 = "INSERT INTO notice (msg) VALUES ('Room ID and Password Published <br> Join Now')";
      mysqli_query($conn, $query1);
    }
    header('location: match.php');
  }
}
?>



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Match/Tournament</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>


      <div class="table-responsive">
        <form method="post">
        <div class="form-group">
            <label>Type</label>
            <select name="com" class="form-control">
              <option value="0">Incomplete</option>
              <option value="1">Complete</option>
            </select>
          </div>
          <div class="form-group">
            <label>Room Details</label>
            <input type="text" name="dat" class="form-control">
          </div>
          
          <input type="submit" name="submit" value="Update" class="btn btn-info mb-5">
          
        </form>
      </div>
    </main>



<?php
include('footer.php');
?>