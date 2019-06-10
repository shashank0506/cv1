<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php require './basic/include.php';?>
        <title style="font-family: inherit;">Find Free</title>
        <!-- Latest compiled and minified CSS -->
        <style>
            body{
                padding: 25px;
            }
            #background{
                
                background-image: url("./font_view/view.jpg");
                height: 700px;width: 1040px;background-repeat: no-repeat;border: 1px solid;
            }
            #sign_up{
                background-color: rgba(0,0.5,0,0.5);width: 400px;
                position: absolute;top: 160px;left: 700px;color: white;
            }
            .header{
                background-color:#F5F5DC;border: 1px solid #F5F5DC;width: 1200px;
                height: 75px;margin-bottom: 20px;font-family: cursive;margin-left: 100px;
                
            }
            .login{
                float: right;
            }
        </style> 
        
    
    </head>
    <body>
        <div class="header">
                <h3 style="margin-left:20px;margin-top: 10px;">Find Free</h3>
                <div class="login">
                    <form action="login.php" method="post">
                        <label style="position: absolute;top:25px;left: 700px;">Name:</label>
                        <input type="text" name="name" id="name" style="position:absolute;top: 50px;left: 700px;" placeholder="Name">
                        <label style="position: absolute;top:25px;left: 975px;">password:</label>
                        <input type="password" name="password" id="password" value="" style="position:absolute;top: 50px;left: 975px;" placeholder="Password">
                        <input type="submit" value="login" class="btn btn-primary" name="submit" 
                               style="position:absolute;top: 50px;left: 1235px;">
                    </form>
                </div>
            </div>
        
        <div class="container">
            
            
            <div id="background">
                <div id="sign_up" style="font-family: cursive"><center>
                        <h2>Sign up</h2></center><br>
                        <form method="post" action="signup.php" style="padding:20px;">
                        <div class="form-group">
                            <label>Name:</label>
                            <input name="name" type="text" id="name" class="form-control" placeholder="Name">
                        </div>
                            <div class="form-group">
                            <label>Phone Number:</label>
                            <input name="number" type="number" id="number" class="form-control" placeholder="Number">
                        </div>
                            <div class="form-group">
                            <label>Email:</label>
                            <input name="email" type="email" id="email" class="form-control" placeholder="Email">
                        </div>
                            <div class="form-group">
                            <label>Password:</label>
                            <input name="password" type="password" id="password" class="form-control" placeholder="Password">
                            </div><label></label>
                            <button class="btn btn-primary form-control" type="submit" id="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('input').focus(function(){
                $(this).attr('placeholder','');
                $(this).css('background-color','white');
                
            })
            $('input').blur(function(){
                if($(this).val() == ''){
                    $(this).attr('placeholder','incomplete form');
                    $(this).css('background-color','rgba(255, 0, 0, 0.7)');
                }
            })
        </script>
        
    </body>
    
</html>
