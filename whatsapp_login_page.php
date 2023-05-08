<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
</head>
<body>
	<form method="post"  action="whatsapp_login_page_check.php">
  	<div  style="background-color:rgb(0,191,165);">
    	<section class="vh-100 gradient-custom">
    			<div class="container py-5 h-100">
     				<div class="row d-flex justify-content-center align-items-center h-100">
        				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
          				<div class="card bg-dark text-white" style="border-radius: 1rem;">
           					<div class="card-body p-5 text-center">
              					<div class="mb-md-5 mt-md-4 pb-5">
                				  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                				  <p class="text-white-50 mb-5">Please enter your User Id and password!</p>
                			 		
                          <!-- user_id input -->
                        <!--   <div class="form-outline form-white mb-4">
            			    	  	<label class="form-label float-start" >User_id</label>
                            <input type="text"  name="user_id " class="form-control form-control-lg relative" />
                  	 	    </div> -->
                          <div class="form-outline form-white mb-4">
                            <label class="form-label float-start">User id</label>
                            <input type="text" name=" userid" class="form-control form-control-lg relative" />
                          </div>
                					<!-- user_password input -->
                          <div class="form-outline form-white mb-4">
                  					<label class="form-label float-start">Password</label>
                            <input type="text" name=" password" class="form-control form-control-lg relative" />
                					</div>
                					<p class="small mb-5 pb-lg-2"><a class="text-white-50" href="whatsapp_forget_password.php">	Forgot password?</a></p>
                					
                       
                          <button class="btn btn-outline-light btn-lg px-5 " type="submit"> 
                           Login </button> 

                					
              			</div>
              			<div>
               	 			<p class="mb-0">Don't have an account? <a  href="whatsapp_signup_page.php" class="text-white-50 fw-bold">Sign Up</a></p>
              			</div>
            			</div>
          		</div>
        		</div>
        		
  		</section>
    </div>
	</form>
  

</body>
</html>