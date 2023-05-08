<?php
    include "common/link.php";
?>
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

	<title>What'sapp web</title>
	<!-- favicon -->
	<link rel="icon" type="image/png" href="favicon.png" alt="web icon">
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- fontawesome  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">   --> 
 
    <link rel="stylesheet" href="stylesheet/dashbored.css">
    <script type="text/javascript" src="javascript/dashbored.js"></script>  
</head>
<body style="background-color:rgb(9,14,17);">
	<!-- background color-->
	<div id="box" >
    	<div class="container-fluid ">
    		<div class="row  g-0" style="background-color: rgb(19,28,33);">
<!----------------------------------------- column 1(contacts)--------------------------------------- -->
    			<div class="col-sm-4" id="first_row">
 					<!-- profile line -->
                    <div id='contect-list' >

                     
                        <div  style="background-color: rgb(42,47,50);" >
                            <div class="d-flex flex-row bd-highlight mb-3" >
                                <!-- Profile image -->
                               
                                <div class="col">
                                    <img src="uploaded_image/<?php echo $d['image'];?>  ?>" id="profileImage-click" class='profileImage' alt="Avatar">
                                </div>
                                
                                <!-- Three icon aline on the top  -->
                                <div class="d-flex flex-row-reverse bd-highlight">
                                    <div class="p-2 bd-highlight"><a href="" ><img src="menu_option_icon.png" alt="Status" title= 'Status' > </a></div>
                                    <div class="p-2 bd-highlight"><a href="" ><img src="messege_icon.png" alt="Message" title= 'Message'> </a></div>
                                    <!-- <button type="button" >
                                        Alerts 
                                    </button> -->

                                    <div class="p-2 bd-highlight"><a href="" class=" position-relative status-icon" ><img src="status_icon.png" alt="Menu" title= 'Menu'> <span class="position-absolute top-20 start-90 translate-middle badge border border-light rounded-circle p-1"><span class="visually-hidden">unread messages</span></span></a></div>
                                </div>
                            </div>    
                        </div>

                        <!-- search -->
                            <div>
                                <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
                                        <div class="md:flex">
                                            <div class="w-full " style="margin:0px 10px ">
                                                <div > <i class="fa fa-search  mt-2" style="position: absolute; margin-left: 1%"></i> <input type="text" placeholder = 'Search or start new chat' title ='Search input textbox' class=" w-full form-control rounded-pill " style="background-color: rgb(42,47,50);padding-left:50px; border-color: rgb(42,47,50);" name=""><span class="absolute top-4 right-5 pl-4"></span> </div>
                                        </div>
                                    </div>
                            </div>
                            </div>

                        <!-- contect cards/boxes -->

                        <div style="margin-top:2%" id = 'content-card'>
                            <div class="d-flex float-end " style="width: 100%; border-top: 1px solid rgb(66, 59, 59)">
                                <div class="hr"></div>
                            </div>
                            <div class="card btn " >
                                
                                <div class="card-body d-flex flex-row  content-card-body">
                                
                                    <div class="dp-pic d-flex " >
                                        <img src="uploaded_image/<?php echo $d['image'];?>  ?>" title ="Avatar" class="card-img-top" alt="AVATAR">
                                    </div>
                                    <div class="friend-name d-flex "   >
                                        <small title= ' <?php echo $d['user_id']?>'> <?php echo $d['user_id']?> <br><p>thik h byy</p></small>
                                    </div>
                                    <div class= "mes-time d-flex  " >
                                        <p>4:05PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex float-end " style="width: 85%; margin-top: 0%;  border-top: 1px solid rgb(66, 59, 59)">
                                <div class="hr"></div>
                            </div>
                        </div>
                    </div>
<!--------------------------------------------- (profile open change)--------------------------------  -->

                    <div  id="profile_page" style="display:none;" >
                        <!-- profile write and back  -->
                        <div id='profile'>
                            <div id='header'>
                                <span>
                                    <i id='back-arrow' class="fas fa-arrow-left"></i>    
                                </span>  
                                <h4 >                      
                                    Profile
                                </h4>
                            </div>  
                            <!-- --- (IMAGE) -------- -->
                            <div id='profile-page' class="d-flex flex-column " >
                                <div id='wrapper'class="dropdown" >
                                    <div class = 'container dropdown-toggle'type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="uploaded_image/<?php echo $d['image'];?>?>" class= 'profile-pic' alt="Avatar">
                                        <div class="button-container">
                                            <div class="image-icon"><i class="fa fa-camera"><br><p>Change Profile image</p></i></div>
                                        </div>
                                    </div>
                                    <div class='img' >
                                    
                                        <div class='image-circle image-circle--primary '>
                                        </div>  
                                        <div class="dropdown-menu change-profile-dropdown" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item text-white">View Photo</a>
                                            <a class="dropdown-item text-white">Take Photo</a>
                                            <a class="dropdown-item text-white">Upload Photo</a>
                                            <a class="dropdown-item text-white" >Remove Photo</a>

                                        </div>  
                                    </div>
                                </div>
                                <!-- Change name -->

                                <div class ="change-field" >
                                    <small class="text-success" >Your name</small>
                                    <div class= 'col-12'>
                                        <input type='text'value='Saniya jain' name='change-name' class='change-input' readonly>
                                        <span class='focus-border'></span>
                                        <span class="edit_icon" id = 'profile_name'  ><i class = "fas fa-pen" onclick="edit_icon_click('name')"></i></span>
                                    </div>
                                </div>

                                <div class= "name-note" >
                                    <small>This is not your your username or pin. This name will be visible to your WhatsApp contacts. </small>
                                </div>
                                <div class ="change-field" >
                                    <small class="text-success" >About</small>
                                    <div class= 'col-12'>
                                        <input type='text'value='Hey there I am using WhatsApp.' name='change-status' class='change-input' readonly>
                                        <span class='focus-border'></span>
                                        <span class="edit_icon" id = 'profile_status'  ><i class = "fas fa-pen" onclick="edit_icon_click('about')" ></i></span>
                                    </div>
                                </div>

                            </div>     

                        </div>    
                        


                        <!-- end of profile image -->
                    </div>   
       			</div><!-- end of first column -->

<!----------------------------------------- column 2(chats or defaults) ------------------------------------->
                <div  class="col-sm-8 sec-col-container ">
                    <div class='vertical' ></div>

                    <div class="w-100 min-vh-100 p-3 sec-col-1 ">                      
                        <div class="text-white ">
                            <span  class="align-middle">
                                <img src="phone_network.png" alt="..." style="width:40%; height: 25%;  border-radius: 50%">
                                <br>
                                <div style="margin-top: 5%">
                                    <h5 >Keep your phone connected</h5> 
                                    <br>

                                    <div style="margin-top: 3%">
                                        <p class="text-white">Whatsapp connects to your phone to sync messages. To reduce data useage,connect your <br> phone to Wi-Fi.</p>
                                    </div>   
                                </div>
                                <br>
                                <hr style="margin-left:25%;width: 50%">
                                
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                
                            </span> 
                        </div>
                    </div>
<!-- -----------------------------chatting html--------------------------------------------------------- -->
                    <div class = "w-100 min-vh-100 sec-col-2 "  style="display:none;">
                        <div class="chating-header d-flex flex-row bd-highlight mb-3">
                            <div class="col d-flex " >
                                <img src="uploaded_image/<?php echo $d['image'];?>  ?>" title ="Avatar" class="profileImage" alt="AVATAR">
                                <div class="group-name d-flex "   >
                                    <small title= ' <?php echo $d['user_id']?>'> <?php echo $d['user_id']?> <br><p>online</p></small>
                                </div>
                            </div>
                            <div class= "sec-header-icon d-flex  " >
                                <div class= 'search_icon'><i class='fa fa-search  p-3'></i> </div>
                                <div><i class="fa-solid fa-ellipsis-vertical  p-3  "></i></div>
                            </div> 
                        </div>
                        <div class="chat-box">
                            <div class="message" id="message" >

                            <!-- messsage -->
                                <div class="row" >

                                    <div class="col-1"></div>
                                    <div class="left col-md-4 card" >
                                        <div class='d-flex flex-column' >
                                            <div class= 'd-flex justify-content-between p-2 ' >
                                                <div class = "number"><small>+91 7024181097</small></div>
                                                <div class = "temp-name " ><small>S jain</small></div>
                                            </div>
                                            <div class= "receive-message ml-2" >
                                                <small>hyy how are you icuwet sdguiherg  wefoijer iefuwefr ueidfrwe r usfr we
                                                    <div >
                                                        <small>4:05PM</small>
                                                    </div>
                                                </small>
                                            </div>
                                            <!-- <p>left</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class= 'row'>
                                    <div class ="col-md-7"></div>
                                    <div class="right col-md-4 card" >
                                        <div class='d-flex flex-column' >
                                            <div class= "send-message" >
                                                <small>hyy how are you  
                                                    <div class="bottom-0 end-0">
                                                        <small>4:05PM</small>
                                                    </div>
                                                </small>
                                            </div>
                                            <!-- <p>left</p> -->
                                        </div>

                                    </div>
                                </div>





                                <!-- message end -->
                            </div> 
                             
                        </div>

                        <!-- massage typing -->
                        <div class="typing-mess d-flex ">
                            <div class="d-flex justify-content-start " >
                                <div class="group-name m-3 h5 "><i class="fa-regular fa-face-smile"></i></div>
                                <div class="group-name m-3 h5"><i class="fa fa-paperclip" aria-hidden="true"></i></div>
                            </div>
                            <div class=' type-mess d-flex justify-content-center'  > 
                                <input type="text" placeholder = 'Type a message' title ='Type a message' class="form-control rounded-pill " style="background-color:rgb(68, 73, 76);padding-left:50px; border-color: rgb(42,47,50);" name=""><span class="absolute top-4 right-5 pl-4"></span> 
                            </div>
                            <div class= "type-mess d-flex justify-content-end" >
                                <div class= 'search_icon'><i class='fa fa-search  p-3'></i> </div>
                                <div><i class="fa-solid fa-ellipsis-vertical  p-3  "></i></div>
                            </div>
                            <!-- <div class = 'type-mess '> -->


                                <!-- <input type='text' class= 'type-mess change-input form-control p-1 m-3' name='send-mess'> -->
                                <!-- </div> -->
                            

                        </div>
                    </div>

                </div>
                
    			
    		</div>
    	</div>
    </div>

<!-- ++++++++++++++++++++++++ (SCRIPT) +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <script>

        // ============================================(PAGE CHANGING SCRIPT)==================================
        $("#profileImage-click").click(function(){
            $("#contect-list").hide();
            $("#profile_page").show();

            console.log("hannn")
        });
        $("#back-arrow").click(function(){
            $("#profile_page").hide();
            $("#contect-list").show();

        });



        $("#content-card .card").click(function(){
            
            $(".sec-col-1").hide();
            $(".sec-col-2").show();
        });
        // _______________________(PROFILE PAGE EDIT ICON CLICK)_________________________

        function edit_icon_click(temp){
            if(temp == 'name'){
                $('input[name=change-name]').removeAttr('readonly');
                var_id = "profile_name"

            }
            else{
                $('input[name=change-status]').removeAttr('readonly');
                var_id = "profile_status"         
            }
            $("#" + var_id).html('<i class = "fas fa-check" onclick=" check_icon_click(`'+ temp+'`)" ></i><i class = "fas fa-smile" ></i>')

        }

        // _______________________(PROFILE PAGE CHECK ICON CLICK)_________________________
        function check_icon_click(temp){
            if(temp == 'name'){
                $('input[name=change-name]').attr('readonly', true);
                var_id = "profile_name";

            }
            else{
                $('input[name=change-status]').attr('readonly', true);
                var_id = "profile_status";         
            }
            $("#" + var_id).html('<i class = "fas fa-pen" onclick=" edit_icon_click(`'+ temp+'`)" ></i>')

        }
        
        var html = `<div class="row" >
                        <div class="col-1"></div>
                        <div class="left col-md-4 " >
                            <div class='d-flex flex-column' >
                                <div class= 'd-flex justify-content-between p-2 ' >
                                    <div class = "number"><small>+91 7024181097</small></div>
                                    <div class = "temp-name " ><small>S jain</small></div>
                                </div>
                                <div class= "receive-message ml-2" >
                                    <small class="float-md-end">hyy how are you icuwet sdguiherg  wefoijer iefuwefr ueidfrwe r usfr we<div class="position-absolute bottom-0 end-0"><small>4:05PM</small></div></small>
                                </div>
                                <!-- <p>left</p> -->
                            </div>
                        </div>
                        </div>
                        <div class= 'row'>
                        <div class ="col-md-7"></div>
                        <div class="right col-md-4 card" >
                            <div class='d-flex flex-column' >
                                <div class= "send-message" >
                                    <small float-none>hyy how are you  <div class="position-absolute bottom-0 end-0"><small>4:05PM</small></div></small>
                                </div>
                                <!-- <p>left</p> -->
                            </div>

                        </div>
                    </div>`
        temp()
        function temp(){
            console.log('ypu')
            var tuna = ''
            for(var i =0;i<10;i++){
                tuna= tuna + html
            }
            document.getElementById('message').innerHTML  = tuna;
        }


    </script>

</body>
</html>