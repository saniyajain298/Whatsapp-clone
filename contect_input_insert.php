<?php
include("dbcon.php");
$user_id=$_POST['user_id'];
$phone=$_POST['phone'];

$data="Select * from whatsapp_login where phone = $phone";
$result=mysqli_query($con,$data);
$fetch=mysqli_fetch_array($result);

// echo $result;

if($fetch){
	echo "phone matched";
	if($fetch['user_id']==$user_id){
		echo "user_id matched";
		$image=$fetch['image'];		
		$input="insert into whatsapp_user(user_id,phone,image)value('$user_id','$phone','$image')";
		$done=mysqli_query($con,$input);
		echo $input;


	}	
	else{
		echo "user_id not matched";
	}
}
else{
	echo "not phone matched";
}


?>