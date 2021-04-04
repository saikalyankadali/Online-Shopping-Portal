<?php
	include("connect.php");
	if(isset($_POST['submit'])!="")
	{
	$credit=$_POST['credit'];
	$mn=$_POST['mn'];
	$otp=$_POST['otp'];
	$e=$_POST['e'];
	$sql="insert into funcart.buyhereinsert(credit,mn,otp,e) values('$credit','$mn','$otp','$e')";
	if($conn->query($sql)===TRUE)
	{

		echo" <script>alert('Your order is placed !'); window.location='part2.html' </script>";
	}
	ELSE
	{
		echo" <script>alert('Order is not placed ! Try again'); window.location='buyhere.html' </script>";
	}
	
	}
	else
	echo "network error";
	
?>