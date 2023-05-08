<?php
	include("dbcon.php");
	$password=$_POST['password'];
	$user_id= $_POST['userid'];
	session_start();
	echo $user_id;
	$data="Select * from whatsapp_login where user_id = $user_id";
	$result=mysqli_query($con,$data);
	$fetch=mysqli_fetch_array($result);
	if($result){
		if($fetch['password']==$password){
			$_SESSION['user_id'] = $fetch['user_id'];
			header("Location:main_page_table.php");
		}	
		else{
			echo "password not matched";
		}
	}
	else{
		echo "not user_id";
	}
?>





 