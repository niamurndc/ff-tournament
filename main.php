<?php
include('header.php');
?>
      <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
                    <?php $query4 = "SELECT * FROM slider"; 
                          $result = mysqli_query($conn, $query4);
                          $row = mysqli_num_rows($result);
                                
                          for($i = 1; $i <= $row; $i++) :
                                $slide = mysqli_fetch_array($result);
                          if($i == 1){
                                ?>
                                <div class="carousel-item active">
                        <img src="img/<?php echo $slide['image']; ?>" class="d-block w-100 c-high" alt="<?php echo $slide['image']; ?>">
                      </div>
                      <?php
                            }else{
                                ?>
                                <div class="carousel-item">
                        <img src="img/<?php echo $slide['image']; ?>" class="d-block w-100 c-high" alt="<?php echo $slide['image']; ?>">
                      </div>
                      <?php

                            } endfor; ?>
                    </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>
      <h4 class="text-center">Daily Match</h4>
      <a href="current.php">
      <section class="board"> 
        
        <img src="<?php echo $logo_image; ?>" class="match-logo">
        <p class="ff">Free Fire</p>
        <?php 
            $query = "SELECT * FROM matches WHERE type = 1 AND status = 0";
            $result = mysqli_query($conn, $query);

            $matchs = mysqli_num_rows($result);
            
            if($matchs > 0){
        ?>
        <h6><?php echo $matchs; ?> matches Found</h6>
        <?php
            }else{
        ?>
        <h6>No matches Found</h6>
        <?php
            }
        ?>
      </section></a>
      <h4 class="text-center">Tournament</h4>
      <a href="current.php">
      <section class="board">
        
        <img src="<?php echo $logo_image; ?>" class="match-logo">
        <p class="ff">Free Fire</p>
        <?php 
            $query = "SELECT * FROM matches WHERE type = 2 AND status = 0";
            $result = mysqli_query($conn, $query);

            $matchs = mysqli_num_rows($result);
            
            if($matchs > 0){
        ?>
        <h6><?php echo $matchs; ?> matches Found</h6>
        <?php
            }else{
        ?>
        <h6>No matches Found</h6>
        <?php
            }
        ?>
      </section></a>
      <h4 class="text-center">Upcoming</h4>
      <?php 
          $query = "SELECT * FROM participants WHERE player_id = '$uname' AND stat = 0";
          $result = mysqli_query($conn, $query);
        
          $players = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach($players as $play){
            $match_id = $play['match_id'];
          

          $query = "SELECT * FROM matches WHERE id = $match_id AND status = 0";
          $result = mysqli_query($conn, $query);
        
          $matchs = mysqli_fetch_all($result, MYSQLI_ASSOC);
          foreach($matchs as $match){
            
      ?>
      <section class="board bg-light">
        <h5 class="text-dark"><?php echo $match["name"];?></h5>
        <p class="text-dark"><?php echo $match["time"];?></p>
        <span class="badge badge-dark p-2 m-2">Winning: <?php echo $match["prize"];?></span><span class="badge badge-dark p-2 m-2">Map: <?php echo $match["map"];?></span><br>
        <span class="badge badge-dark p-2 m-2">Entry Fee: <?php echo $match["entry"];?></span><span class="badge badge-dark p-2 m-2">Per Kill: <?php echo $match["pkill"];?></span><br>
        <span class="badge badge-dark p-2 m-2">Room Details</span><span class="badge badge-dark p-2"><?php if($match["details"] == ''){echo 'Not Published';}else{echo $match["details"];}?></span>
      </section>
          <?php } }?>
<?php
include('footer.php');
?>