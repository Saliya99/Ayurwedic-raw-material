<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home|LETS-Shop</title>
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

            <div class="col-sm-3">
	<div class="left-sidebar">
<h2>Category</h2>
	<div class="panel-group category-products" id="accordian"><!--category-productsr-->
	 <div class="panel panel-default">
		 <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=facial">Abc</a></h4>
		 </div></div>
		 <div class="panel panel-default">
		 <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=skincare">Abc</a></h4>
		 </div></div>
		 <div class="panel panel-default">
		 <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=beautycare">Abc</a></h4>
		</div></div>

		<div class="panel panel-default">
		<div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=nailart">Abc</a></h4>
		</div></div>
		</div><!--/category-products-->

<!--brands_products-->
        <!-- <div class="brands_products">
<h2>Brands</h2>
		<div class="brands-name">
	<ul class="nav nav-pills nav-stacked">

   <li><a href="link_form.php?link=oriflame"><img src="images/brands/oriflame.png" style="width:180px"></a></li>
   </ul>
			</div><br><br>
 <img src="images/sdf.jpg" style="width:200px">
            </div> -->
            <!--/brands_products-->

		</div></div>
            <div class="col-sm-9 padding-right">
		<div class="features_items"><!--features_items-->
<h2 class="title text-center">Abc Items</h2>
	<?php
$cosmetics=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%cosmetics%' order by rand(), time Desc LIMIT 0,12")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($cosmetics))
{
echo"
<div class='col-sm-3'>
		<div class='product-image-wrapper'>
		<div class='single-products'>
		<div class='productinfo text-center'>
<a href='product_details.php?id=$product_id' class='thumbnail'><img src='images/products/$image' alt='' style='width:250px; height:250px'></a>
<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
		</div></div>
		</div></div>
";
}
 ?>
</div></div>
</div><!--features_items-->

         <div class="recommended_items">
		<h2 class="title text-center">recommended items</h2>
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
