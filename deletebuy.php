<?php
include("connect.php");
$un=$_GET["un"];
echo $un;
$sql="delete from buyhereinsert where id='$un' ";
if($conn->query($sql)==true)
{
	echo "deleted";
}
else
echo "not deleted";
?>