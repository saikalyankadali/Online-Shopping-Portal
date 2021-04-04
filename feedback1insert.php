<?php
	session_start();
	$un=$_SESSION["un"];
	include("connect.php");
	if(isset($_POST['submit'])!="")
	{
	$feedback=$_POST['feedback'];
	$sql="insert into funcart.feedback1 values('$un','$feedback')";
	if($feedback!="")
		{
	if($conn->query($sql)===TRUE)
	{

		echo" <script>alert('Thank U for your feedback !');window.location='part2.html'</script>";
	}
	ELSE
	{
		echo" <script>alert('Feedback is not entered !');</script>";
	}
		}
		else
		{
			echo"<script>alert('please enter valid feedback');window.location='feedback1.html'</script>";
		}
	}
	else
	echo "network error";
	
?>