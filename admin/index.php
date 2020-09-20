<?php
include('header.php');

if(isset($_POST['add'])){

  $target = '../img/'.basename($_FILES['image']['name']);
  $tmpLocation = $_FILES['image']['tmp_name'];
  $image = $_FILES['image']['name'];

  $query = "INSERT INTO slider (image) VALUES ('$image')";
  $result = mysqli_query($conn, $query);
  
  if($result){
    echo "Slider add successguly.";
  }
  
  move_uploaded_file($tmpLocation, $target);
}

if(isset($_POST['edit'])){

  $target = '../logo/'.basename($_FILES['l-image']['name']);
  $tmpLocation = $_FILES['l-image']['tmp_name'];
  $image = $_FILES['l-image']['name'];

  $query4 = mysqli_query($conn, "SELECT * FROM logo WHERE id = 1");
  $result4 = mysqli_fetch_array($query4);
  $o_image = "../logo/".$result4['image'];

  $query1 = "UPDATE logo SET logo = '$image' WHERE id = 1";
  $result1 = mysqli_query($conn, $query1);
  
  if($result1){
    echo "Slider add successguly.";
  }
  
  move_uploaded_file($tmpLocation, $target);
}

if(isset($_POST['update'])){

  $tnc = $_POST['tnc'];

  $query2 = "UPDATE about SET rules = '$tnc' WHERE id = 1";
  $result2 = mysqli_query($conn, $query2);
  
  if($result2){
    echo "Slider add successguly.";
  }
}

if(isset($_GET['id']) || isset($_GET['action'])){
  if($_GET['id'] || $_GET['action'] == 'delete'){
    $pid = $_GET['id'];

    $query4 = mysqli_query($conn, "SELECT * FROM slider WHERE id = $pid");
    $result4 = mysqli_fetch_array($query4);
    $o_image = "../img/".$result4['image'];
    unlink($o_image);
    $query = "DELETE FROM slider WHERE id = '$pid'";
    $result3 = mysqli_query($conn, $query);
    
    if($result3){
      
      echo '<p style=color:red>Slider Deleted Successfuly</p>';
    }
}
}
?>



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <a href="create_match.php" class="btn btn-sm btn-outline-secondary">
            Create Match/Tournament
          </a>
        </div>
      </div>
      

      <div class="dash mb-5">
        <h2>Slider Image</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $query = "SELECT * FROM slider";
            $result = mysqli_query($conn, $query);

            $sliders = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($sliders as $slider){
          ?>
            <tr>
              <td><?php echo $slider['id']; ?></td>
              <td><img src="../img/<?php echo $slider['image']; ?>" height="20" width="70px" alt="<?php echo $slider['image']; ?>"></td>
              <td><a href="index.php?action=delete&id=<?php echo $slider['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
              
          <?php  } ?>
          </tbody>
        </table>
        <form method="post" enctype="multipart/form-data">
          <label>Slider Image</label>
          <input type="file" name="image">
          <input type="submit" value="Add" name="add" class="btn btn-info btn-sm">
        </form>
      </div>
      </div>
      <div class="dash mb-5">
        <h2>Match Logo</h2>
        <?php 
            $query = "SELECT * FROM logo";
            $result = mysqli_query($conn, $query);

            $logos = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($logos as $logo){
          ?>
        <img src="../logo/<?php echo $logo1 = $logo['logo']; ?>" height="70px" width="70px">
        <?php  } ?>
        <form method="post" enctype="multipart/form-data">
          <label>Change Logo</label>
          <input type="file" name="l-image">
          <input type="submit" value="Add" name="edit" class="btn btn-info btn-sm">
        </form>
      </div>
      <div class="dash mb-5">
        <h2>Terms & Conditions</h2>
        <form method="post">
        <?php 
            $query = "SELECT * FROM about";
            $result = mysqli_query($conn, $query);

            $abouts = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($abouts as $about){
          ?>
        
        
          <label>T&C Text</label>
          <textarea name="tnc" rows="7"  class="form-control"><?php echo $about['rules']; ?></textarea>
          <?php  } ?>
          <input type="submit" value="Update" name="update" class="btn btn-info btn-sm my-2">
        </form>
      </div>

      
      </div>
    </main>



<?php
include('footer.php');
?>