<?php
include("dbcon.php");
// column values
$name=$_POST['username'];
$phone=$_POST['ph'];
$email=$_POST["email"];
$password=$_POST['password'];
$img=$_FILES['image'];
$user_id=rand(100000,999999);
echo $user_id;
session_start(); 
// print_r($image);

// image fileds
$img_name=$img['name'];
$imgtmp=$img['tmp_name'];
$img_error=$img['error'];

// image name breaking to get extension 
$imgbreak= explode('.',$img_name );
$img_ext=strtolower(end($imgbreak));
$img_ext_store= array('png','jpg','jpeg');

	if(in_array($img_ext,$img_ext_store))
	{
		$file_destination='uploaded_image/'.$img_name;
		move_uploaded_file($imgtmp, $file_destination);

		$data="insert into whatsapp_login(name,phone,email,password,image,user_id)value('$name','$phone','$email','$password','$img_name','$user_id')";
		mysqli_query($con,$data);
		$_SESSION['user_id'] = $user_id;
	header("Location:whatsapp_user_id_show.php",$user_id);	
	}
	
?>