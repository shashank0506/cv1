<?php
include './basic/include.php';
 include './basic/security.php';
 ?>

<html>
    <head>
        
    </head>
    <style>
        body{
            font-family: cursive;
        }
        .header{
                background-color:#F5F5DC;border: 1px solid #F5F5DC;width: 1250px;
                height: 75px;margin-bottom: 20px;font-family: cursive;margin-left: 100px;margin-top: 20px;
                
            }
            .login{
                float: right;
            }
            #background{
                width: 100%;height: 350px;background-color: wheat;
            }
            #active{
                background-color: red;position: fixed;top: 120px;left: 1000px;width: 550px;
            }
            #upload{
                position: absolute;top:320;left: 350px; 
            }
            #background_pic{
                height: 350px;
                width: 100%;
            }
            #bigger_pic{
                position: fixed;top: 30px;width: 1200px;
                height: 800px;background-color: rgba(0.5,0,0,0.5);
                left: 115px;display: none;
            }
            #bigger_background_pic{
                position: absolute;top: 100px;height: 500px;width: 600px;left:200px; 
            }
            #bigger_pic1{
                position: fixed;top: 30px;width: 1200px;
                height: 800px;background-color: rgba(0.5,0,0,0.5);
                left: 115px;display: none;
            }
            #bigger_profile_pic{
                position: absolute;top: 100px;height: 500px;width: 600px;left:200px; 
            }
           
    </style>
    <body>
        <?php
        $_SESSION['visit'] = 1;
        ?>
        <div class="header" id="header">
                <h3 style="margin-left:20px;margin-top: 10px;">Find Free</h3>
                <div class="login">
                    <form action="login.php" method="post">
                        <a href="profile.php">
                        <i class="fa fa-home" aria-hidden="true" style="position:absolute;top: 50px;left: 900px; font-size: 25px;" ></i>
                        </a>
                        <a href="notification.php" >
                            <i class="fa fa-window-restore" aria-hidden="true" style="position:absolute;top: 50px;left: 1050px; font-size: 25px;"
                               id="notification"></i>
                        </a>
                        <p id="number_notification"
                           style="position:absolute;top: 70px;left: 1050px; font-size: 25px;"
                           ><?php echo $_SESSION['notification'];?></p>
                        <a href="logout.php">
                            <i class="fas fa-sign-out-alt" style="position: absolute;top:50px;left: 1200px; font-size: 25px;"></i>
                            
                        </a>
                        
                    </form>
                </div>
        </div>
       
        
        <div class="container">
            
            <div class="row">
                <div class="col-sm-8">
                    <div id="background">
                         <img src="<?php
       echo "./".$_SESSION['year_background']."/".$_SESSION['month_background']."/".$_SESSION['date_background']."/".$_SESSION['background_pic'];
       ?>" alt="image" title="cover" id="background_pic">
                        
                   
                        <div id="upload">
                            <form method="post" action="file.php" enctype="multipart/form-data">
                                <input type="hidden" name="size" value="300000000000000000000">
                                <input type="file" name="upload" value="" style="background-color:black;color: white">
                                <input type="submit" name="submit_back" value="upload" style="background-color:black;color: white" >
                            </form>
                        </div>
                    </div>
                    <br>
                    <div id="profile_photo" style="border:1px solid;background-color: wheat;">
                        
                    <img src="<?php
       echo "./".$_SESSION['year_profile']."/".$_SESSION['month_profile']."/".$_SESSION['date_profile']."/".$_SESSION['profile_pic'];
       ?>" alt="image" title="profile" id="profile_pic"
                         style="width:250px;height: 250px;padding: 10px;">
                    <h3 style="position:absolute;left: 40%;top: 400px;"><?php echo $_SESSION['name'];?></h3>
                    <h3 style="position:absolute;left: 40%;top: 450px;"><?php echo $_SESSION['email'];?></h3>
                    <a href="friends_list.php"><i class="fa fa-users" aria-hidden="true" style="position:absolute;left: 40%;top: 530px;font-size: 25px;"></i>
                    </a><h3 style="position:absolute;left: 40%;top: 570px;">Friends</h3> 
                    <a href="about_display.php"><i class="fa fa-address-book" aria-hidden="true" style="position:absolute;left: 60%;top: 530px;font-size: 25px;"></i>
                    </a><h3 style="position:absolute;left: 60%;top: 570px;">About</h3>
                    <a href="#"><i class="fa fa-film" aria-hidden="true" style="position:absolute;left: 80%;top: 530px;font-size: 25px;"></i>
                    </a><h3 style="position:absolute;left: 80%;top: 570px;">Photos</h3>
                    <br>
                    <form method="post" action="file.php" enctype="multipart/form-data">                   
   <input type="hidden" name="size" value="30000000000000000">
   <input type="file" name="upload" value="" style="background-color:black;color: white">
        <input type="submit" name="submit_profile" value="upload" style="background-color:black;color: white"
               id="submit_profile">
        </form>
                </div>
                
            
                        
                <div class="col-sm-3" id="active">
                    <h1>fcgvbh</h1>
                </div>
            </div>
        </div>
        
        <div id="bigger_pic" class="hide">
            <img src="<?php
       echo "./".$_SESSION['year_background']."/".$_SESSION['month_background']."/".$_SESSION['date_background']."/".$_SESSION['background_pic'];
       ?>" alt="image" title="cover"
                 id="bigger_background_pic">
        </div>
            <div id="bigger_pic1" class="hide">
                 <img src="<?php
       echo "./".$_SESSION['year_profile']."/".$_SESSION['month_profile']."/".$_SESSION['date_profile']."/".$_SESSION['profile_pic'];
       ?>" alt="image" title="profile"
                 id="bigger_profile_pic">
        </div>
           

         
        
        
        
    </body>
    <script type="text/javascript">
         $('#number_notification').hide();
        $('#background_pic').on('click',function(){
            
            console.log($(this).src);
            
            $('#bigger_pic').show();
        })
        $('#bigger_pic').on('click',function(){
            $('#bigger_pic').hide();
        })
        $('#profile_pic').on('click',function(){
            
            console.log($(this).src);
            
            $('#bigger_pic1').show();
        })
        $('#bigger_pic1').on('click',function(){
            $('#bigger_pic1').hide();
        })
        $('#notification').hover(function(){
            //$('#number_notification').show();
            if($('#number_notification').is(':visible'))
                $('#number_notification').hide();
            else
                $('#number_notification').show();
        })
       
    
    
    </script>
</html>