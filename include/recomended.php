<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
            <?php 
$recommended=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%raw%' order by rand() LIMIT 0,4")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($recommended))
{
echo"
<div class='col-sm-3'>
	<div class='product-image-wrapper'>
	<div class='single-products'>
	<div class='productinfo text-center'>
	<a href='product_details.php?id=$product_id' class='thumbnail'><img src='images/products/$image' alt='' style='width:160px; height:140px'></a>
	<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
	<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
					</div></div>
					</div></div>
";
}
 ?>	
		</div>
		<div class="item"><?php 
$recommended=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%cosmetics%' order by rand()  LIMIT 0,4")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($recommended))
{
echo"
<div class='col-sm-3'>
	<div class='product-image-wrapper'>
	<div class='single-products'>
	<div class='productinfo text-center'>
<a href='product_details.php?id=$product_id' class='thumbnail'>	<img src='images/products/$image' alt='' style='width:160px; height:140px'></a>
	<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
	<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
					</div></div>
					</div></div>
";
}
 ?>	
 </div>
 	<div class="item"><?php 
$recommended=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%raw%' order by rand()  LIMIT 0,4")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($recommended))
{
echo"
<div class='col-sm-3'>
	<div class='product-image-wrapper'>
	<div class='single-products'>
	<div class='productinfo text-center'>
	<a href='product_details.php?id=$product_id' class='thumbnail'><img src='images/products/$image' alt='' style='width:160px; height:140px'></a>
	<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
	<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>					</div></div>
</div></div>";
}
 ?>	
 </div>
 <div class="item"><?php 
$recommended=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%cosmetics%' order by rand()  LIMIT 0,4")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($recommended))
{
echo"
<div class='col-sm-3'>
	<div class='product-image-wrapper'>
	<div class='single-products'>
	<div class='productinfo text-center'>
<a href='product_details.php?id=$product_id' class='thumbnail'>	<img src='images/products/$image' alt='' style='width:160px; height:140px'></a>
	<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
	<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
					</div></div>
					</div></div>
";
}
 ?>	
 </div>
 <div class="item"><?php 
$recommended=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%raw%' order by rand()  LIMIT 0,4")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($recommended))
{
echo"
<div class='col-sm-3'>
	<div class='product-image-wrapper'>
	<div class='single-products'>
	<div class='productinfo text-center'>
	<a href='product_details.php?id=$product_id' class='thumbnail'><img src='images/products/$image' alt='' style='width:160px; height:140px'></a>
	<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
	<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>					</div></div>
</div></div>";
}
 ?>	
 </div>
 <div class="item"><?php 
$recommended=mysqli_query($connection,"select product_id, product_name, image, price, c_price from products where product_type like '%cosmetics%' order by rand()  LIMIT 0,4")or die("Query 1 is inncorrect..........");
while(list($product_id,$product_name,$image,$price,$c_price)=mysqli_fetch_array($recommended))
{
echo"
<div class='col-sm-3'>
	<div class='product-image-wrapper'>
	<div class='single-products'>
	<div class='productinfo text-center'>
<a href='product_details.php?id=$product_id' class='thumbnail'>	<img src='images/products/$image' alt='' style='width:160px; height:140px'></a>
	<h2>Rs: $price <span><strike><p>Rs: $c_price</p></strike></span></h2>
	<p>$product_name</p>
<a href='link_cart.php?id=$product_id' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Add to cart</a>
					</div></div>
					</div></div>
";
}
 ?>	
 </div>
</div>
							 <!--<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">-->
								<!--<i class="fa fa-angle-left"></i>-->
							 <!-- </a>-->
							 <!-- <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">-->
								<!--<i class="fa fa-angle-right"></i>-->
							 <!-- </a>			-->
						</div>