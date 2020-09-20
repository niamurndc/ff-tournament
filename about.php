<?php
include('header.php');
?>
<h2>About</h2>
          <?php 
            $query = "SELECT * FROM about WHERE id = 1";
            $result = mysqli_query($conn, $query);

            $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach($matchs as $match){
          ?>
          
<p><?php echo $match['rules']; ?></p>

<?php  } ?>


