<?php
$link=$_REQUEST['link'];
?>
<html>
<head>
<script>
function myfunction()
{
	document.getElementById("submit").click();
}
</script>
</head>
<body onload="myfunction()">
<form action="search.php" method="post" id="myform">
	<input hidden="" type="text" name="search_text" value="<?php echo"$link";?>">
    <button hidden="" type="submit" id="submit" data-modal="submit" name="submit" value="submit"></button>
</form>

<h1 style="padding-left:400px; padding-top:200px;"><img src="images/loading-x.gif" /></h1>
</body>
</html>
