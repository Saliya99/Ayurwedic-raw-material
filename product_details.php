<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home|LETS-SHOP</title>
    <link href="layout/css/bootstrap.min.css" rel="stylesheet">
    <link href="layout/css/font-awesome.min.css" rel="stylesheet">
    <link href="layout/css/prettyPhoto.css" rel="stylesheet">
    <link href="layout/css/price-range.css" rel="stylesheet">
    <link href="layout/css/animate.css" rel="stylesheet">
	<link href="layout/css/main.css" rel="stylesheet">
	<link href="layout/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="layout/css/mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head><!--/head-->

<body>
	<?php include("include/header.php"); ?>

	<section>
		<div class="container">
			<div class="row">
			<div class="col-sm-12 padding-right">
					<div class="product-details">
<?php
if(isset($_GET['id'])){
$product_details_id = $_GET['id'];

 $product_details = mysqli_query($connection,"select product_name,details,brand, image, price, c_price from products where product_id ='$product_details_id'")or die("Query 1 is inncorrect..........");
 list($product_name,$details,$brand,$image,$price,$c_price)= mysqli_fetch_array($product_details);
}
 ?>
 <div class="col-sm-5">
	<div class="view-product">
	<img src="<?php echo"images/products/$image";?>" alt="">
	</div></div>
		<div class="col-sm-7">
		<div class="product-information">
		<img src="images/new.jpg" class="newarrival" alt="">
		<h2><?php echo"$product_name";?></h2>
		<p><?php echo"$details";?></p>
		<span><span>RS: <?php echo"$price";?>
        <strike><p>RS: <?php echo"$c_price";?></p></strike></span>
        <span> &nbsp;&nbsp;&nbsp;</span>
		<label>Quantity:</label>
		<input type="number" value="<?php echo"$quantity";?>">


		</span>
<p>
    <a href="link_cart.php?id=$product_id" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
  </p>  
		<p><b>Tags:</b><?php echo"$brand";?></p>


<a href="#"><img src="images/share.png" class="share img-responsive" alt=""></a>
	</div></div>
  
	</div><br>


         <div class="recommended_items">
		<h2 class="title text-center">Related Items</h2>
				<?php include("include/recomended.php");?>
					</div><!--/recommended_items-->

				</div>
			</div>
		</div>
	</section>

<?php include("include/footer.php"); ?>
    <script src="layout/js/jquery.js"></script>
	<script src="layout/js/bootstrap.min.js"></script>
	<script src="layout/js/jquery.scrollUp.min.js"></script>
	<script src="layout/js/price-range.js"></script>
    <script src="layout/js/jquery.prettyPhoto.js"></script>
    <script src="layout/js/main.js"></script>
<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;">
<i class="fa fa-angle-up">
</i></a>
</body>
</html>
