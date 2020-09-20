<?php
include('header.php');

$id = $_GET['id'];

if(isset($_POST['update'])){

  $name = $_POST['name'];
  $pass = $_POST['pass'];
  $bal = $_POST['bal'];

  $query2 = "UPDATE users SET username = '$name', password = '$pass', balance = '$bal' WHERE id = $id";
  $result2 = mysqli_query($conn, $query2);
  
  if($result2){
    echo "Slider add successguly.";
  }
}
?>



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit User</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>

      <?php 
          
            $query = "SELECT * FROM users WHERE id = $id";
            $result = mysqli_query($conn, $query);

            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($users as $user){
          ?>

      <div class="table-responsive">
        <form method="post">
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" class="form-control" value="<?php echo $user['password']; ?>">
          </div>
          <div class="form-group">
            <label>Balance</label>
            <input type="number" name="bal" class="form-control" value="<?php echo $user['balance']; ?>">
          </div>
          <input type="submit" value="Publish" name="update" class="btn btn-info mb-5">
          
        </form>
      </div>
      <?php  } ?>
    </main>



<?php
include('footer.php');
?>