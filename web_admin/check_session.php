<?php
session_start();
if(isset($_SESSION['user_id'])&& $_SESSION['user_id']!="")
{}
else
{
   header("location: index.php");
}

$inactive=1000;
if(isset($_SESSION['timeout']))
{
	$sessionttl=time()- $_SESSION['timeout'];
	if($sessionttl > $inactive)
	{
	session_destroy();
	header("location:index.php");
	}
}
$_SESSION['timeout']=time();
?>
