<?php
include './basic/include.php';
 include './basic/security.php';

 
?>
<html>
    <style>
        
    </style>
    <body>
<div id="background">
    <h3 id="background_text">please upload Your Background Pic</h3>
    <br><br>
    <form method="post" action="file.php" enctype="multipart/form-data">                   
   <input type="hidden" name="size" value="30000000000000000">
   <input type="file" name="upload" value="" style="background-color:black;color: white">
        <input type="submit" name="submit_back" value="upload" style="background-color:black;color: white" 
               id="submit_back">
        </form>
</div><br><br>



    </body>
    <script type="text/javascript">
        /*$('#profile_update_text').hide();
        $('#submit_profile').on('click',function(){
            $('#profile_text').hide();
            $('#profile_update_text').show();
        })*/
    </script>
</html>
