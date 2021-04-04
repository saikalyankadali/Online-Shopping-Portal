<?php
session_start();
$conn=new mysqli("localhost","root","","funcart") or die(mysql_error());
$sql="select username,password from funcart.reg";
$result=$conn->query($sql);
$un=$_POST['un'];
$p=$_POST['p'];
$_SESSION["un"]=$un;
$flag=0;
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
					}
while($row=$result->fetch_assoc())
{
	echo $row['username'];
		echo $un;
		echo $row['password'];
		echo $p;
	if($row['username']==$un&&$row['password']==$p)
	{
		$flag=true;
		echo"<script>alert('login done successfully');window.location='user_interface.html' </script>";
		break;
	}
	else{
		echo"<script>alert('please enter correct details');window.location='login.html'</script>";
	}
}
?>