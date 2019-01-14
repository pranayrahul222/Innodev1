<?php 
include("connectdb.php");
if(isset($_POST['submit']))
  {  
    $sql=mysqli_query($con,"insert into login(name,Mobile_no,Email,pasword) values ('$_POST[name]','$_POST[cno]','$_POST[email]','$_POST[pas]')") or die('Error - : '.mysqli_error($con));
    header("Location:signup1.php");
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
<div class="container" style="position: relative; top: 110px;">
<div class="jumbotron" style=" background:rgba(204, 204, 204, 0.5);">
<div class="row">
  <h1 style="font-weight: bolder;font-family:Impact;position: relative; bottom: 15px;">Sign Up</h1>
</div>
  <form class="form-horizontal" method="post" onsubmit="return checkPassword()" >
	 <div class="form-group">
      <label class="control-label col-sm-2" for="usr">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="phone">Mobile No:</label>
      <div class="col-sm-10">
        <input type="phone" class="form-control" id="cno" placeholder="123-456-7890" name="cno" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" onmouseover="show()">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pas" placeholder="Enter password" name="pas" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="cpas" placeholder="Re-enter password" name="cpas" required>
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
        <button type="submit" class="btn btn-info" name="submit" id="submit" value="submit">Submit</button></br>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</html>