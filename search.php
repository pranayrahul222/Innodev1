<?php include("header.php");?>
  <div class="row">
  <div class="column">
  <?php
  if($_SESSION['results']!=0)
  {
  $rs=$_SESSION['results']
  ?>
    <a href="produt.php" class="a" ><div class="box" style="background:rgba(204, 204, 204, 0.5);">
      <h2 class="head"><?php echo $rs[4];?></h2>
      <h4 class="name"> <?php echo $rs[1];?></h4>
      <div class="row">
      <div class="col-sm-2"><img style=""src="<?php echo $rs[8];?>" width='180px' height='100px'/></div>
      <div class="col-sm-6" ><h3 class="info"></h3><p class="info"><?php echo $rs[6];;?></p></div>
      <div class="col-sm-4" style="position: relative; bottom: 80px;"><h3 class="name">Price: <?php echo $rs[5]; ?></h3></div>
     </div>
     </div></a>
     <?php } else {?>
     <h3>No Search results Found...</h3>
     <?php }?>
  </div>
</div>

<?php include("footer.php");?>
