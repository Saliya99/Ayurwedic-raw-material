<?php
// include("check_session.php");
include("web_admin/connection.php");
error_reporting(0);
if(isset($_POST['submit']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$c_price=$_POST['c_price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$tags=$_POST['tags'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="picture/jpeg" || $picture_type=="picture/jpg" || $picture_type=="picture/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	{
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../picture/products/".$pic_name);

mysqli_query($connection,"insert into products (product_name, details, image, price, c_price, product_type, brand, tags) values ('$product_name','$details','$pic_name','$price','$c_price','$product_type','$brand','$tags')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}else
{}
}else
{}
mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Products</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="web_admin/style/css/bootstrap.min.css" rel="stylesheet">
<link href="web_admin/style/css/k.css" rel="stylesheet">

<link href="layout/css/bootstrap.min.css" rel="stylesheet">
    <link href="layout/css/font-awesome.min.css" rel="stylesheet">
    <link href="layout/css/prettyPhoto.css" rel="stylesheet">
    <link href="layout/css/price-range.css" rel="stylesheet">
    <link href="layout/css/animate.css" rel="stylesheet">
	  <link href="layout/css/main.css" rel="stylesheet">
	  <link href="layout/css/responsive.css" rel="stylesheet">
    <link href="layout/css/mystyle.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
    <?php include("include/header.php");?>
   	<div class="container-fluid" style="margin-top:-50px;">

    <div class="col-md-12 content" style="margin-left:10px">
  	<div class="panel panel-default">
  	    
	<div class="panel-heading" style="background-color:#c4e17f">
	<h2><a href="index.php">
	<img src="images/logo.png"  style="width:50px;" alt=""></a> <b>Ayurvedic medicine is one of the world’s oldest medical systems and remains one of Sri Lanka’s traditional health care systems.<b> </h2>
	<!--<div class="logo pull-right">-->
	<!--	<button class="btn btn-success btn-lg" style="margin-top:-140px;width:150px; height:45px"><a href ="index.php" style=" text-decoration:none; color:white;" > <span class="glyphicon glyphicon-name"></span>Go to Home </a></button>-->

	<!--</div>-->
</div><br>
<main class="container">

<!-- Left Column / Headphones Image -->
<div class="left-column">
  <img data-image="black" src="images/black.png" alt="">
  <img data-image="blue" src="images/blue.png" alt="">
  <img data-image="red" class="active" src="images/red.png" alt="">
</div>







<?php include("web_admin/include/js.php"); ?>
</body>
</html>
