<?php  session_start();
	include("connection.php");
if(isset($_POST['submit']))
{
$details=$_POST['details'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$zip_code=$_POST['zip_code'];
$country=$_POST['country'];
$contactno=$_POST['contactno'];
$quantity=$_POST['quantity'];

	if(!isset($_SESSION["cart_array"]) || count ($_SESSION["cart_array"]))
{
foreach($_SESSION["cart_array"]as $each_item)
{
	$item_id= $each_item['item_id'];
	//query
	$results=mysqli_query($connection,"select product_id, product_name from products where product_id ='$item_id' Limit 1");

while($row=mysqli_fetch_array($results))
    {
		$product_id=$row["product_id"];
		$product_name=$row["product_name"];

	}
	mysqli_query($connection,"insert into orders( p_names , details, cus_name,contact_no, email, address, zip_code, country,quantity) values ('$product_name','$details', '$name', '$contactno','$email','$address', '$zip_code', '$country', '$quantity')") or die ("query 2 incorrect");

header("location: success_msg.php?success=1");

}}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home|E-Shopper</title>
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

	<section id="cart_items">
		<div class="container">
		<div class="register-req">
				<p>Please Fill your form carefully so that you get your Order correlty</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
                <div class="col-sm-1">
						<div class="order-message">

      <form></form>
                  </div></div>
				  <div class="col-sm-8 clearfix">
			   	<div class="bill-to">
							<p>Information Form</p>
							<div class="form-one">
		<form action="form.php" method="post" name="form1">
<input type="text" name="name" placeholder="Full Name *" required>
<input type="text" name="email" placeholder="Email*" required>
<input type="text" name="address" placeholder="Address *" required>


<input type="text" name="contactno" placeholder="Contact # *" required>
   <input type="text" name="zip_code" placeholder="Zip / Postal Code *">
	<select name="country">
		<option>-- District --</option>
        <option value="Jaffna">Jaffna</option>
		<option value="Kilinochchi">Kilinochchi</option>
		<option value="Vavuniya">Vavuniya</option>
		<option value="Mullaitivu">Mullaitivu</option>
	</select>


							</div>
							<div class="form-two">
                            <p>Products Details</p>
                            <textarea name="quantity" placeholder="Mention QUANTITY of your products *" rows="4" required></textarea>
							<p>Shipping Order</p>
                            <textarea name="details" placeholder="Notes about your order 'Out of Jaffna', Special Notes for Delivery." rows="4"></textarea>
</div>
						</div>
					</div>
						<div class="col-sm-3">
						<div class="shopper-info">
							<p>Your Decision</p>
<a class="btn btn-primary" href="cart.php?cmd=emptycart">Cancel</a>
<button type="submit" name="submit" class="btn btn-primary" >Confirm Order</button>
</form>
</div></div>
</div></div>
</div></div>
</section> <!--/#cart_items--><br>


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
