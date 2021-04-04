<?php
	session_start();
	$un=$_SESSION["un"];
	include("connect.php");
	if(isset($_POST['submit'])!="")
	{
	$p=$_POST['p'];
	$mrp=$_POST['mrp'];
	$price=$_POST['price'];
	$save=$_POST['save'];
	$tax=$_POST['tax'];
	$img=$_POST['img'];
	$sql="insert into funcart.cart values('$un','$p','$mrp','$price','$save','$tax','$img')";
	if($conn->query($sql)==TRUE)
	echo" <script>alert('order added successfully');window.location='part2.html'</script>";
	}
?>