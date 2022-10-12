<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home|AyruMed</title>
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
</head><!--/head-->
<body>

	<?php include("include/header.php"); ?>

	<section id="slider"><!--slider-->
	<div class="container">
	<div class="row">
	<div class="col-sm-12">
	<div id="slider-carousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
    <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#slider-carousel" data-slide-to="1" class=""></li>
    <li data-target="#slider-carousel" data-slide-to="2" class=""></li>
	</ol>
	  <div class="carousel-inner">
		<div class="item active">
		<div class="col-sm-6">
      <h1><span>Ayur</span>Med</h1>
      <h2>What is Ayurveda</h2>
      <p>
        The Sanskrit term Ayurveda translates to “Knowledge of life”. Ayurveda offers a rich and dynamic body of knowledge that provide comprehensive disease management and supports holistic wellness on a deep level.
      </p>
      <a href="cosmetics.php" class="btn btn-default get">Get it now</a>
		</div>

		<div class="col-sm-6">
      <img src="images/Ay01.png" class="girl img-responsive" alt="" style="width:400px; height:auto;">
		</div></div>

		<div class="item">
		<div class="col-sm-6" style="margin-top:-20px;">
      <h1><span>Ayur</span>Med</h1>
      <h2>Why Ayurveda is better than modern medicine?</h2>
      <p >

Ayurveda is one form of medicine which has only benefits when cured a disease. Modern form of medicine which has just a few benefits and a lot more side effects. At the same time Ayurvedic treatment give the solution and stay for a long time. Form any point, Ayurveda is better than modern form of medicine.

      </p>
      <a href="#clothes.php" class="btn btn-default get">Get it now</a>
		</div>

		<div class="col-sm-6">
      <img src="images/Ay03.png" class="girl img-responsive" alt="" style="width:380px; height:400px; margin-top:20px;">
		</div></div>

		<div class="item">
		<div class="col-sm-6">
      <h1><span>Ayur</span>Med</h1>
      <h2>Why do you want Ayurmed?</h2>
      <p>

You can Save money and time. We can deliver quickly as much as possible. We provide authentic raw material. You paid money after your delivery. So visit Ayurmed, Be healthy.

      </p>
      <a href="#clothes.php" class="btn btn-default get">Get it now</a>
		</div>

		<div class="col-sm-6">
      <img src="images/blogimg.png" class="girl img-responsive" alt="" style="width:600px; height:400px;">
		</div>
		</div>
		</div>

    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
      <i class="fa fa-angle-left"></i></a>
    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next"><i class="fa fa-angle-right"></i>
		</a>
		</div></div>
		</div></div>
	    </section><!--/slider-->


	<section>
	<div class="container">
    <div class="row">
	<div class="col-sm-3">
	<div class="left-sidebar">
    <h2>Category</h2>
	<div class="panel-group category-products" id="accordian"><!--category-productsr-->
	 <div class="panel panel-default">
	<div class="panel-heading">
    <h4 class="panel-title"><a href="link_form.php?link=dress">leaf</a></h4></div></div>

    <div class="panel panel-default">
	     <div class="panel-heading">
         <h4 class="panel-title">
           <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
             <span class="badge pull-right">
               <i class="fa fa-plus"></i>
             </span>Fruits</a>
          </h4>
	      </div>

	<div id="sportswear" class="panel-collapse collapse">
	<div class="panel-body">
		<ul>
      <li><a href="link_form.php?link=tshirt">Abc</a></li>
      <li><a href="link_form.php?link=dressshirt">Abc </a></li>
      <li><a href="link_form.php?link=jeanspant">Abc </a></li>
<li><a href="link_form.php?link=dresspant">Abc</a></li>
      <li><a href="link_form.php?link=korta">Abc </a></li>
		</ul>
	</div></div>
	</div>

	<div class="panel panel-default">
	<div class="panel-heading">
      <h4 class="panel-title"><a href="link_form.php?link=summer">Stems</a></h4>
		 </div></div>

      <div class="panel panel-default">
		      <div class="panel-heading">
            <h4 class="panel-title"><a href="link_form.php?link=winter">Oil</a></h4>
		   </div></div>

		 <div class="panel panel-default">
		 <div class="panel-heading">
       <h4 class="panel-title"><a href="link_form.php?link=facial">Flower</a></h4>
		 </div></div>

		 <div class="panel panel-default">
		 <div class="panel-heading">
    <h4 class="panel-title"><a href="link_form.php?link=skincare">Gel</a></h4>
		 </div></div>

		 <div class="panel panel-default">
		 <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=beautycare">Seed</a></h4>
		</div></div>

    <div class="panel panel-default">
    <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=beautycare">Jam</a></h4>
   </div></div>

   <div class="panel panel-default">
   <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=beautycare">Bud</a></h4>
  </div></div>

  <div class="panel panel-default">
  <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=beautycare">Bark</h4>
 </div></div>

 <div class="panel panel-default">
 <div class="panel-heading">
<h4 class="panel-title"><a href="link_form.php?link=beautycare">Additive</a></h4>
</div></div>



	

		</div><!--/category-products-->

		

		</div></div>








		<div class="col-sm-9 padding-right">
    <!--features_items-->
		<div class="features_items">
<h2 class="title text-center">New Items</h2>
		<?php 
$recommended=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%raw%' order by rand() LIMIT 0,4")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($recommended))
{
echo"
<div class='col-sm-3'>
	<div class='product-image-wrapper'>
	<div class='single-products'>
	<div class='productinfo text-center'>
	<a href='product_details.php?id=$product_id' class='thumbnail'><img src='images/products/$image' alt='' style='width:300px; height:200px'></a>
	<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
	<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
					</div><img src='images/new.jpg' class='new' alt=''></div>
					
					</div></div>
";
}
 ?>	

        </div>
        <!--features_items-->







	</div></div>



  <div class="container-fluid">
  <div class="row">
  <div class="col-sm-5">
  <h2>Our Blog</h2>
  <h4></h4>
  <p>
  Our blog mainly concern about raw materials information.You can read our blog to get more information about raw materials and find the way of its usage.
  </p>
<br>
  <button class="btn btn-default btn-lg"><a href ="https://infoayurmed.blogspot.com/" >Touch in Blog</a></button>
  </div>

<div class="col-sm-3">

 
<img src="images/blog-02.jpg" alt="" width="600px" height="250px"  style="margin-left:50px;border-radius: 5%;">

</div>
</div>
</div>

	<div class="recommended_items"><!--recommended_items-->
<h2 class="title text-center">
Related Items</h2>
		<?php include("include/recomended.php");?>
        </div><!--/recommended_items-->
</div>
</section><br>

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
