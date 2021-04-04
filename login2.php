<?php
session_start();
$conn=new mysqli("localhost","root","","funcart") or die(mysql_error());
$un=$_POST['un'];
$p=$_POST['p'];
$_SESSION["an"]=$un;
if($un=="kalyan"&&$p=="kalyan369")
{
echo"<script>alert('admin login done successfully');window.location='admin.php' </script>";		
}
?>