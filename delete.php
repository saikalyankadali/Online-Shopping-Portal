<?php
include("connect.php");
$name=$_GET['name'];
$result=mysql_query("delete from addproduct where name='$name'");
if($result)
echo "successfull";
else
echo "unsuccessfull";
include("view3.php");
?>