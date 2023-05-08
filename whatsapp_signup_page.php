<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

	<div style="height: 100vh;
	background:linear-gradient(to top,rgb(9,14,17) 0,rgb(9,14,17) 75%,rgb(0,191,165) 75%,rgb(0,191,165) 100%)">
	 <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8 " style="margin-top: 10%" >
                <div class="login-form bg-light p-4">
                    <form action="whatsapp_signup_insert.php" method="post" enctype="multipart/form-data" class="row g-3">
                        <h4 >Welcome Back</h4>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-12">
                            <label>Phone</label>
                            <input type="text" name="ph" class="form-control" placeholder="Phone...">
                        </div>
                        <div class="col-12">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email...">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password...">
                        </div>
                        <div class="col-12">
                            <label>Avatar</label>
                            <input type="file" name="image" id="image" accept="image/gif, image/jpeg, image/png" />
                        </div>
                        <div class="col-12">
                            
                            <button type="submit" class="btn btn-dark float-end">Sign up</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
		
	
	</div>
</body>
</html>