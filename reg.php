<?php
	include("connect.php");
	if(isset($_POST['submit'])=="")
	{
	$un=$_POST['un'];
	$pw=$_POST['pw'];
	$cpw=$_POST['cpw'];
	$dob=$_POST['dob'];
	$g=$_POST['g'];
	$mn=$_POST['mn'];
	$e=$_POST['e'];
	$addr=$_POST['addr'];
	$sql="insert into funcart.reg values('$un','$pw','$cpw','$dob','$g','$e','$mn','$addr')";

	if($conn->query($sql)===TRUE)
	{

		echo" <script>alert('Registration completed please login to funcart'); window.location='login.html' </script>";
	}
	ELSE
	{
		echo" <script>alert('Registration not completed '); window.location='register.html' </script>";
	}
	
	}
	else
	echo "network error";
	
?>