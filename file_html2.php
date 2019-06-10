<?php
include './basic/include.php';
 include './basic/security.php';

 
?>
<html>
    <style>
        
    </style>
    <body>
       <div id="profile">
    
    <h3 id="profile_text">please upload your profile picture</h3>
    <h3 id="profile_update_text">Your profile has been updated</h3>
    <br><br>
    <form method="post" action="file.php" enctype="multipart/form-data">                   
   <input type="hidden" name="size" value="30000000000000000">
   <input type="file" name="upload" value="" style="background-color:black;color: white">
        <input type="submit" name="submit_profile" value="upload" style="background-color:black;color: white"
               id="submit_profile">
        </form>
</div><br><br> 
    </body>
</html>