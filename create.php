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
		$sql="create table reg(username varchar(20) primary key,password varchar(30) not null,confirmpassword varchar(30) not null,dob date not null,gender varchar(10) not null,email varchar(30) not null,phoneno varchar(30) not null,address varchar(40))";
	}
	if($conn->query($sql)===TRUE)
	{

		echo"TABLE reg is created";
	}

	$sql="create table cart(username varchar(20),pname varchar(40),mrp varchar(30) not null,price varchar(30) not null,save varchar(20) not null,tax varchar(30) not null,image varchar(250) not null)";

	if($conn->query($sql)===TRUE)
	{

		echo"TABLE  cart is created";
	}

	if($conn)
		echo"connected";
	$sql="create table buyhereinsert(id int AUTO_INCREMENT primary key,credit varchar(20) ,mn varchar(30) not null,otp varchar(30) not null,e varchar(30) not null,addr varchar(40))";
	if($conn->query($sql)===TRUE)
	{

		echo"TABLE buy is created";
	}

	$sql="create table feedback1(username varchar(30),feedback varchar(40))";
	if($conn->query($sql)===TRUE)
	{

		echo"TABLE feedback is created";
	}

?>