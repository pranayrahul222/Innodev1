<?php session_start(); 
include("connectdb.php");
if($_POST)
{
    $query = $_POST['search']; 
        $sql = mysqli_query($con,"select * from books where about like '%".$query."%' or Name like '%".$query."%' or category like '%".$query."%'") or die(mysql_error());
             
        if(mysqli_num_rows($sql) > 0){ 
         
         $_SESSION['results']=mysqli_fetch_array($sql);    
        }
        else
        {
            $_SESSION['results']='0';
        }
        header('LOCATION:search.php');
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
    <div class="container-fluid">
        <div class="row" style="background-color:#003300" class="header">
        	<div class="col-sm-2">
        		<h1 style="text-shadow:2px 2px #003300; color:#FF3; position: relative;left: 10px;">Marketplace</h1>
        	</div>
            <div class="col-sm-6">
            <form name="form" method="post">
            	<input type="text" placeholder="  Search.." name="search" id="search" style="width:90%; border-radius:10px; position:relative; top:20px; left:90px; height:40px; text-align:left" /><span class="glyphicon glyphicon-search" style="position:relative; left:70px; top:25px;"></span>
            </form>
            </div>
            <div class="col-sm-4">
            <p style="color:#FFF; position:relative; top:5px;left:100px; height:12px; text-shadow:#FFF; font-size:20px; font-weight: bolder;">Welcome</p>
            <div class="dropdown">
              <a href="#" style="position: relative; left: 100px; top: 15px; color:#ffffff; font-size: 20px; text-shadow:#FFF;font-weight: bolder;"><?php echo $_SESSION['name']?></a>
              <div class="dropdown-content">
              <a href="home.php">Home</a>
                <a href="changeaddress.php">Edit Account</a>
                <a href="signup1.php">Logout</a>
              </div>
            </div>
            <a href="ad.php"><button type="button" class="btn btn-success" style="position:relative; top:10px; left:110px">Submit an Ad</button></a>
            </div>
        </div>
    </div>
