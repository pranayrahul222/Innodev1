<?php 
include("connectdb.php");
$sql = mysqli_query($con,"select * from books where category =$_GET[key]")or die('ERROR'.mysqli_error($con));
$sql1=mysqli_query($con,"select max(price) as maxprice from books where category=$_GET[key]")or die('ERROR'.mysqli_error($con));
$sql2=mysqli_query($con,"select min(price) as minprice from books where category=$_GET[key]")or die('ERROR'.mysqli_error($con));
?>
<?php include("header.php");?>
  <div class="row">
  <div class="rightcolumn" style="width: 300px;background-image:url(img/orange.png); position: relative;top: 10px;">
    <div class="box" style="background:rgba(204, 204, 204, 0.5);">
      <h2 style="font-weight: bolder;font-family:Impact;"><?php if($_GET['key']=="'coolers'")
  $n='Coolers';
if($_GET['key']=="'cycles'")
  $n='Cycles';
if($_GET['key']=="'routers'")
  $n='Routers';
if($_GET['key']=="'books'")
  $n='Books';
if($_GET['key']=="'kettles'")
  $n='Kettles';
if($_GET['key']=="'otherelectronics'")
  $n='Other Electronics';
if($_GET['key']=="'hostelessentials'")
  $n='Hostel Essentials';
if($_GET['key']=="'mattres'")
  $n='Matress';
if($_GET['key']=="'engineeringtools'")
  $n='Engineering Tools';
echo $n;
?></h2>
    </div>
  </div>
  <div class="leftcolumn">
  <?php
  while($rs=mysqli_fetch_array($sql))
  {?>
    <a href="buy.php?key='<?php echo $rs[0];?>'" class="a" ><div class="box" style="background:rgba(204, 204, 204, 0.5);">
      <h2 class="head"><?php echo $rs[4];?></h2>
      <h4 class="name"> <?php echo $rs[1];?></h4>
      <h4 class="name"> <?php echo $rs[6];?></h4>
      <div class="row">
      <div class="col-sm-2"><img src="<?php echo $rs[8];?>"width='200px' height='100px' /></div>
      <div class="col-sm-6" ></div>
      <div class="col-sm-4" style="position: relative; bottom: 80px;"><h3 class="name">Price: <?php echo $rs[5]; ?></h3></div>
     </div>
     </div></a>
     <?php }?>
  </div>
</div>

<?php include("footer.php");?>
