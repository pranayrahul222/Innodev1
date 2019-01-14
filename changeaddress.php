<?php 
include('connectdb.php');
if(isset($_POST['submit']))
{
	$sql=mysqli_query($con,"update login set Name='$_POST[name]', Email='$_POST[eml]',Mobile_no='$_POST[phone]',addr='$_POST[address]' where pasword='$_POST[pass]'") or die('ERROR'.mysqli_error($con));
	header('LOCATION:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Address</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	
</head>
<body style="background-image:url(img/back.jpg)">

<div class="container" style="position: relative;top: 120px;">
<div class="jumbotron" style=" background:rgba(204, 204, 204, 0.5);">
  <form class="form-horizontal" method="post"  >
	 <div class="form-group">
      <label class="control-label col-sm-2" for="usr">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="phone">Mobile No:</label>
      <div class="col-sm-10">
        <input type="phone" class="form-control" id="phone" placeholder="123-456-7890" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Email">E-Mail:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="eml" placeholder="xyz@abc.com" name="eml" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="address">Address Line :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="address" placeholder="Address.." name="address" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="usr">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
      </div>
    </div>
	 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info" name="submit" value="submit" id="submit">Update</button></br>
      </div>
    </div>
   
  </form>
</div>
</div>

</body>
</html>

