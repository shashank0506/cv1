<?php
include './basic/include.php';
 include './basic/security.php';?>

<html>
    <head>
        
    </head>
    <style>
        .header{
                background-color:#F5F5DC;border: 1px solid #F5F5DC;width: 1200px;
                height: 75px;margin-bottom: 20px;font-family: cursive;margin-left: 100px;margin-top: 20px;
                
            }
            .login{
                float: right;
            }
            #result{
                position: fixed;left: 35%;width: 400px;background-color: rgba(0.5,0,0,0.5);
            }
    </style>
    <body>
        
        <div class="header">
                <h3 style="margin-left:20px;margin-top: 10px;">Find Free</h3>
                <form action="search.php" method="post">
                    <input type="text" name="name" placeholder="Search" id="name"
                           style="position:absolute;top: 50px;font-family: cursive;left: 400px;"
                           >
                    
                </form>
                <div class="login">
                    
                        
                        <a href="home.php">
                            <i class="fa fa-user" aria-hidden="true" style="position:absolute;top: 50px;left:70%; font-size: 25px;"></i>
                        </a>
                        <a href="message.php">
                            <i class="fa fa-paper-plane" aria-hidden="true" style="position:absolute;top: 50px;left: 1200px; font-size: 25px;"></i>
                        </a>
                        
                    <form action="others_profile.php" method="post">
                        <input type="number" name="id" id="friend" placeholder="id" 
                               style="position:absolute;top: 50px;left: 45%;width: 50px;">
                        <input type="submit" name="friend_submit" value="sub" class="btn btn-primary"
                                style="position:absolute;top: 45px;left: 50%;width: 50px;">
                    </form>
                </div>
        </div>
        <div id="result">
             
        </div>
    </body>
    <script type="text/javascript">
        $('#name').keyup(function(){
            if($(this).val() == ''){
                $('#result').hide();
            }else{
                $('#result').show();
            }
            var name = $(this).val();
            $.post('search.php',{name:name},function(data){
            //$.post('search',{name:name},function(data){
                console.log(data);
                $('#result').html(data);
            });
        });
    
    </script>
</html>