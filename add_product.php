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
<title>Supplier</title>
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
	<img src="images/logo.png"  style="width:50px;" alt=""></a> <b>Add Your Product Information<b> </h2>
	<!--<div class="logo pull-right">-->
	<!--	<button class="btn btn-success btn-lg" style="margin-top:-140px;width:150px; height:45px"><a href ="index.php" style=" text-decoration:none; color:white;" > <span class="glyphicon glyphicon-name"></span>Go to Home </a></button>-->

	<!--</div>-->
</div><br>

	<div class="panel-body" style="background-color:#E6EEEE;">
		<div class="col-lg-7">
        <div class="well">
        <form action="add_product.php" method="post" name="form" enctype="multipart/form-data">
        <p>Title</p>
        <input class="thumbnail form-control" type="text" name="product_name" id="product_name" autofocus style="width:100%" placeholder=" Product Name" required>
<p>Description</p>
<textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" placeholder=" Descript your product..." required></textarea>
<p>Add Image</p>
<div style="background-color:#CCC">
<input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
</div>
</div>
<div class="well">
<h3>Pricing</h3>
<p>Price</p>
<div class="input-group">
      <div class="input-group-addon">Rs</div>
      <input type="text" class="form-control" name="price" id="price"  placeholder="0.00" required>
    </div><br>
<p>Compare at price</p>
<div class="input-group">
      <div class="input-group-addon">Rs</div>
      <input type="text" name="c_price" id="c_price" class="form-control" placeholder="0.00">
    </div>
    </div>
        </div>
        <div class="col-lg-5">
        <div class="well">
<h3>Category</h3>
<p>Product type</p>
<input type="text" name="product_type" id="product_type" class="form-control" placeholder="Raw material">
<br>
<p>Quantity</p>
<input type="text" name="brand" id="brand" class="form-control" placeholder="No of product or Kg">
<br>
<p>Tags</p>
<input type="text" name="tags" id="tags" class="form-control" placeholder="Place of product">
</div>
</div>

<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:45px"> Cancel</button> <span>  &nbsp; </span>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:45px"> Add Product</button>
    </div>
        </form>

	</div>
</div></div></div>
<?php include("web_admin/include/js.php"); ?>
</body>
</html>
