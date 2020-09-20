<?php
include('header.php');

if(isset($_GET['id']) || isset($_GET['action'])){
  if($_GET['id'] || $_GET['action'] == 'delete'){
    $pid = $_GET['id'];

    $query = "DELETE FROM matches WHERE id = '$pid'";
    $result3 = mysqli_query($conn, $query);
    
    if($result3){
      
      echo '<p style=color:red>Match Deleted Successfuly</p>';
    }
}
}
?>



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Match/Tournament</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <a href="create_match.php" class="btn btn-sm btn-outline-secondary">
            Create Match/Tournament
          </a>
        </div>
      </div>


      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Type</th>
              <th>View</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $query = "SELECT * FROM matches ORDER BY id desc";
            $result = mysqli_query($conn, $query);

            $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($matchs as $match){
          ?>
            <tr>
              <td><?php echo $match['id']; ?></td>
              <td><?php echo $match['name']; ?></td>
              <td><?php $mtype = $match['type'];
                        if($mtype == 1){
                          echo 'Daily Match';
                        }else{
                          echo 'Tournament';
                        } ?></td>
              <td><a href="view.php?id=<?php echo $match['id']; ?>" class="btn btn-info">
              <?php if($match['status'] == 1){
                      echo 'Result';
                    }else{
                      echo 'View';
                    } ?></td></a></td>
              <td><a href="edit_match.php?id=<?php echo $match['id']; ?>" class="btn btn-warning">Edit</a></td>
              <td><a href="match.php?action=delete&id=<?php echo $match['id']; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
          <?php  } ?>
          </tbody>
        </table>
      </div>
    </main>



<?php
include('footer.php');
?>