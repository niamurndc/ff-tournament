<?php
include('header.php');
?>
<h2>Notifications</h2>
<?php 
  $query = "SELECT * FROM notice ORDER BY id desc";
  $result = mysqli_query($conn, $query);

  $sliders = mysqli_fetch_all($result, MYSQLI_ASSOC);
  foreach($sliders as $slider){
?>
<div class="board notice">
  <p><?php echo $slider['msg']; ?></p>
</div>
<?php } ?>


