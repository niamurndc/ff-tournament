<?php
include('header.php');

if(isset($_POST['pending'])){

  $tnc = $_POST['tid'];

  $query2 = "UPDATE transections SET cond = 1 WHERE id = '$tnc'";
  $result2 = mysqli_query($conn, $query2);
  
  if($result2){
    echo "Transection Complete.";
  }
}
?>



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Transections</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div>


      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>

              <th>#</th>
              <th>Sender</th>
              <th>Reciver</th>
              <th>Amount</th>
              <th>Time</th>
              <th>Type</th>
              <th>Status</th>
              <th>Condition</th>
            </tr>
            
          </thead>
          <tbody>
          <?php 
            $query = "SELECT * FROM transections ORDER BY id desc";
            $result = mysqli_query($conn, $query);

            $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($matchs as $match){
          ?>
            <tr>
              <td><?php echo $match['id'];?></td>
              <td><?php echo $match['sender'];?></td>
              <td><?php echo $match['reciver'];?></td>
              <td><?php echo $match['amount'];?></td>
              <td><?php echo $match['time'];?></td>
              <td><?php echo $match['type'];?></td>
              <td><?php if($match['status'] == 1){echo ' <span class="text-success">added</span> '; }elseif($match['status'] == 2){echo ' <span class="text-danger">withdraw</span> ';}elseif($match['status'] == 3){echo ' <span class="text-success">Rewarded</span> ';} else{echo ' <span class="text-danger">spended</span> ';}?></td>
              <td><?php if($match['cond'] == 1){echo '<p class="text-success">Complete</p>';}else{
                ?>
                  <form method="post">
                    <input type="number" name="tid" class="sr-only" value="<?php echo $match['id'];?>">
                    <input class="btn btn-sm btn-danger" type="submit" value="Pending" name="pending">
                  </form>
                <?php
              };?></td>
            </tr>
            <?php  } ?>
            
          </tbody>
        </table>
      </div>
    </main>



<?php
include('footer.php');
?>