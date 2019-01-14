<?php 
include("connectdb.php");
$sql = mysqli_query($con,"select * from books where sno = $_GET[key]")or die('ERROR'.mysqli_error($con));
?>
<?php include('header.php');?>
  <?php
  while($rs=mysqli_fetch_array($sql))
  {?>
    <div class="jumbotron" style="background:rgba(204, 204, 204, 0.5); position: relative; top: 40px; margin-left: 100px; margin-right: 80px;">
      <h1 class="buytxt"><?php echo $rs[4]; ?></h1>
	<div ><img src="<?php echo $rs[8];?>" class='buyimg' height=200px></div>
	<p class="buytxt" style="position: relative; top: 60px"><?php echo $rs[7]; ?></p>
	<p class="buytxt" style="position: relative; top: 60px">Address:<?php echo $rs[6]; ?></p>
	<p class="buytxt" style="position: relative; top: 60px">Price:<?php echo $rs[5]; ?></p>
	<p class="buytxt" style="position: relative; top: 60px">Contact Details:<?php echo $rs[2]; ?></p>
	</div>
	<?php }?>

<?php include('footer.php');?>