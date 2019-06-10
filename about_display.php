<?php
include './basic/include.php';
 include './basic/security.php';?>

<html>
    <head>
        
    </head>
    <style>
        body{
            font-family: cursive;
        }
        .header{
                background-color:#F5F5DC;border: 1px solid #F5F5DC;width: 1250px;
                height: 75px;margin-bottom: 20px;font-family: cursive;margin-left: 100px;
                
            }
            .login{
                float: right;
            }

           
    </style>
    <body>
        
        <div class="header">
                <h3 style="margin-left:20px;margin-top: 10px;">Find Free</h3>
                <div class="login">
                    <form action="login.php" method="post">
                        <a href="profile.php">
                        <i class="fa fa-home" aria-hidden="true" style="position:absolute;top: 50px;left: 900px; font-size: 25px;" ></i>
                        </a>
                        <a href="#" id="notification">
                            <i class="fa fa-window-restore" aria-hidden="true" style="position:absolute;top: 50px;left: 1050px; font-size: 25px;"></i>
                        </a>
                        <a href="logout.php">
                            <i class="fas fa-sign-out-alt" style="position: absolute;top:50px;left: 1200px; font-size: 25px;"></i>
                            
                        </a>
                        
                    </form>
                </div>
        </div>
        <div class="container">
            <table class="table table-bordered">
                <tr>
                    <td>About</td><td>Information</td>
                    
                </tr>
                <tr>
                    <td>Work Status</td><td><?php echo $_SESSION['work'];?></td>
                </tr>
                <tr>
                    <td>Relation Status</td><td><?php echo $_SESSION['relation'];?></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <?php
                        if(($_SESSION['dob_date'] == 0) || ($_SESSION['dob_month'] == 0) || ($_SESSION['dob_year']==0)){
                            echo '';
                        } else {
                            echo "".$_SESSION['dob_date']."/".$_SESSION['dob_month']."/".$_SESSION['dob_year'];
                        }
 
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Thought
                    </td><td><?php echo $_SESSION['thought'];?></td>
                </tr>
            </table>
            
            <br><br>
            <form method="post" action="about.php">
                <input type="submit" class="btn btn-primary" name="submit" value="edit">
            </form>
        </div>
    </body>
</html>
