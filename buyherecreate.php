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
	$sql="create table buyhereinsert(id int AUTO_INCREMENT primary key,credit varchar(20) ,mn varchar(30) not null,otp varchar(30) not null,e varchar(30) not null)";
	}
	if($conn->query($sql)===TRUE)
	{

		echo"TABLE is created";
	}

?>