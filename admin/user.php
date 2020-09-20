<?php
include('header.php');
?>



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Users</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>


      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Username</th>
              <th>Balance</th>
              <th>Play</th>
              <th>Win</th>
              <th>Kills</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $query = "SELECT * FROM users ";
            $result = mysqli_query($conn, $query);

            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($users as $user){
          ?>
            <tr>
              <td><?php echo $user['id']; ?></td>
              <td><?php echo $user['username']; ?></td>
              <td><?php echo $user['balance']; ?></td>
              <td><?php echo $user['play']; ?></td>
              <td><?php echo $user['win']; ?></td>
              <td><?php echo $user['kills']; ?></td>
              <td><a href="edit_user.php?id=<?php echo $user['id']; ?>" class="btn btn-info btn-sm">Edit</a></td>
            </tr>
            <?php  } ?>
          </tbody>
        </table>
      </div>
    </main>



<?php
include('footer.php');
?>