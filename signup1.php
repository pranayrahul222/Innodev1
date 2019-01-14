<?php
session_start();
$msg="";
include("connectdb.php");
if(isset($_POST['submit']))
{
	$sql=mysqli_query($con,"select * from login where Email='$_POST[email]' and pasword='$_POST[pwd]'")or die('ERROR'.mysqli_error($con));
	$rs=mysqli_fetch_array($sql);
	if(mysqli_num_rows($sql)>0)
	{
		
		$_SESSION['name']=	$rs[0];
		header('Location:home.php');
	}
	else
	{
		$msg="invalid username or password";
	}
  $msg="";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(img/back.jpg)">
<div class="container" style="position: relative; top: 150px;">
<div class="jumbotron" style=" background:rgba(204, 204, 204, 0.5);">
<div class="row">
  <h1 style="font-weight: bolder;font-family:Impact;position: relative; bottom: 15px;">Log In</h1>
</div>
  <form class="form-horizontal" method="post" onsubmit="return validatePassword()">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" onmouseover="show()">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="msgerror"><?php echo $msg; ?></div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" value="submit" id="submit" name="submit">Log in</button></br>
	<a href="form1.php" style="position: relative;top: 20px;" >New User?</a>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>

