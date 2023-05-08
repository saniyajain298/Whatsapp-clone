<div class="col-sm-4" id="first_row">
 					<!-- profile line -->
    				<div  style="background-color: rgb(42,47,50);" >
	    				<div class="d-flex flex-row bd-highlight mb-3" >
	    					<!-- Profile image -->
                            <?php
                                include "dbcon.php";
                                session_start();
                                $user_id_get = $_SESSION['user_id'];
                            
                                $data = "Select * from whatsapp_login where user_id= $user_id_get";
                                $result=mysqli_query($con,$data);
                                $d=mysqli_fetch_array($result);
                            ?> 
                            
	    					<div class="col">
			    				<img src="uploaded_image/<?php echo $d['image'];?>  ?>" alt="Avatar" id="pro" style="border-radius: 50%;width:40px;height: 40px; margin-left: 10px; margin-top: 5px; margin-bottom:3px;" >
		    				</div>
		    				
		    				<!-- Three icon aline on the top  -->
		    				<div class="d-flex flex-row-reverse bd-highlight">
								<div class="p-2 bd-highlight"><a href="" ><img src="menu_option_icon.png" alt="status"> </a></div>
								<div class="p-2 bd-highlight"><a href="" ><img src="messege_icon.png" alt="status"> </a></div>
								<div class="p-2 bd-highlight"><a href="" ><img src="status_icon.png" alt="status"> </a></div>
							</div>
		    			</div>    
    				</div>


    				<!-- search -->
    				<div>
    					<div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
        						<div class="md:flex">
            						<div class="w-full " style="margin:0px 10px ">
               		 					<div > <i class="fa fa-search text-white mt-2" style="position: absolute; margin-left: 1%"></i> <input type="text" class=" w-full form-control rounded-pill text-white " style="background-color: rgb(42,47,50);padding-left:50px; border-color: rgb(42,47,50);" name=""><span class="absolute top-4 right-5 pl-4"></span> </div>
            					</div>
						    </div>
 					   </div>
    				</div>

    				<!-- contect cards/boxes -->

                    <div style="margin-top:2%">
                        <div class="d-flex float-end " style="width: 100%; border-top: 1px solid grey">
                            <div class="hr"></div>
                        </div>
                        <?php
                        include ("dbcon.php");
                        $data="Select * from whatsapp_user";
                        $result=mysqli_query($con,$data);
                        while ($d=mysqli_fetch_array($result)) {
                        
                        
                        ?>
                        <div class="card" style="width: 100%; height: 20%; background-color: rgb(19,28,33);">
                              
                            <div class="card-body d-flex ">
                               
                                <div>
                                    <img src="uploaded_image/<?php echo $d['image'];?>  ?>" class="card-img-top" alt="AVATAR" style="border-radius: 50%;width:40px;height: 40px; margin-left: 10px; margin-top: 5px; margin-bottom:3px;">
                                </div>
                                <div style="margin-left: 10%;" class="text-white" >
                                    <p > <?php echo $d['user_id']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex float-end " style="width: 80%; border-top: 1px solid grey">
                            <div class="hr"></div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>