<?php

	$h="localhost";
	$u="root";
	$p="";
	$conn=mysqli_connect($h,$u,$p) or die(mysql_error());
	
	{
	//create database
	$sql="create database funcart";
	if($conn->query($sql)==TRUE)
	{

		echo"database is created";
	}

	//creation of table
	$conn=new mysqli($h,$u,$p,"funcart") or die(mysql_error());
	if($conn)
	echo"connected";
	$sql="create table feedback1(username varchar(30),feedback varchar(40))";
	}
	if($conn->query($sql)===TRUE)
	{

		echo"TABLE is created";
	}

?>