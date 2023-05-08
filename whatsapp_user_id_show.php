<?php
    include "dbcon.php";
    session_start();
    $user_id_get = $_SESSION['user_id'];
    $data = "Select * from whatsapp_login where user_id= $user_id_get";
    $result=mysqli_query($con,$data);
    $d=mysqli_fetch_array($result);
    

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div style="height: 100vh;background:linear-gradient(to top,rgb(9,14,17) 0,rgb(9,14,17) 75%,rgb(0,191,165) 75%,rgb(0,191,165) 100%)">
	 <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8 " style="margin-top: 10%"  >
                <div class="login-form bg-light p-4">
                    <form action="main_page_table.php" method="post" enctype="multipart/form-data" class="row g-3">
                        <h1 class="text-center font-weight-bold t"> Congratulations  </h1>
                        <p> Your new user id </p>
                        <p class="text-danger">Remember it!</p>
                        <div class="col-12">
                            <label>User Id</label>
                           	<h1><pre><?php echo $d['user_id'] ?></pre></h1>
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <h1><?php echo $d['password'] ?></h1>
                        </div>
                        
                        <div class="col-12">
                            
                            <button type="submit" class="btn btn-dark float-end">Next</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
</div>	

</body>
</html>