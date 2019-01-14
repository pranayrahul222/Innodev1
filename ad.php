<?php 
include("connectdb.php");
if(isset($_POST['submit']))
{
	$c=$_POST['cat'];
	$n=rand(1000,9999)."-".rand(1000,9999)."-".rand(1000,9999);
	$flag=1;
	$msg="";
	$img="img/prod.png";	
	$file_name=$_FILES["dp"]["name"];
	$file_tmp_name=$_FILES["dp"]["tmp_name"];
	$ext=end(explode('.', $file_name));
	$sno=$n;
		if($ext=="jpeg" || $ext=="jpg"|| $ext="png" )
		{
			$new_file_name=$sno.".".$ext;
			$upload_path="img/".$new_file_name;
			move_uploaded_file($file_tmp_name,$upload_path);
			$img="img/".$new_file_name;
		}
		else
		{
			$msg="Please select appropriate file";
			$flag=0;
		}
		if($flag==1)
		{
	$sql=mysqli_query( $con,"insert into books values ( '$n','$_POST[name]','$_POST[email]','$_POST[cat]','$_POST[about]','$_POST[price]','$_POST[add]','$_POST[info]','$img')")or die('ERROR'.mysqli_error($con));
	header('LOCATION:home.php');
		}
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Market</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(img/back.jpg)">
<div class="container" style="position: relative; top:;">
<div class="jumbotron" style=" background:rgba(204, 204, 204, 0.5);">
<div class="row">
  <h1 style="font-weight: bolder;font-family:Impact;position: relative; bottom: 15px;">Post Ad</h1>
</div>
  <form class="form-horizontal" method="post" enctype="multipart/form-data" >
	 <div class="form-group">
      <label class="control-label col-sm-2" for="usr">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="cat">Category:</label>
      <div class="col-sm-10">
        <label for="cat"></label>
                        <select name="cat" id="cat" class="form-control">
                          <option value="Select Option">Select category</option>
                          <option value="coolers">Coolers</option>
                          <option value="cycles">Cycles</option>
                          <option value="router">Router</option>
                          <option value="books">Books</option>
                          <option value="kettles">Kettles</option>
                          <option value="otherelectronics">Other Electronics</option>
                          <option value="hostelessentials">Hostel Essentials</option>
                          <option value="matresses">Matresses</option>
                          <option value="engineeringtools">Engineering Tools</option>
                        </select>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-2">Name of your Poduct(To be displayed on the AD):</label>
      <div class="col-sm-10">
        <input type="about" class="form-control" id="about" placeholder="What are you trying to sell??" name="about" style="position: relative; top: 18px" required>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-2">Price of your Poduct:</label>
      <div class="col-sm-10">
        <input type="about" class="form-control" id="price" name="price" placeholder="Give them an offer they can't refuse" style="position: relative;" required>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-2">Address:</label>
      <div class="col-sm-10">
        <textarea type="add" class="form-control" id="add" placeholder="Where do you live??" name="add" required></textarea>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-2">Information:</label>
      <div class="col-sm-10">
        <textarea type="info" class="form-control" id="info" placeholder="Say something about your product" name="info" required></textarea>
      </div>
      </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Upload picture:</label>
      <div class="col-sm-10">
        <input type="file"  id="dp" name="dp" style="position: relative;top: 8px;" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info" name="submit" id="submit" value="submit">Submit</button></br>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>