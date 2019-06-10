<?php
include './basic/security.php';
?>

<html>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
     
<link href="https://media5.picsearch.com/is?0oL8Bjbzj2hIo8yOFrIe6hkpolJxyN5bPE1_giy0_lA&height=231" rel="icon" type="image/x-icon">


<title>Find Free</title>
<body>
    <?php
    $connect = mysqli_connect("localhost","root","","findfree");
    $id = $_SESSION['id'];
    //echo $id;
    $select_friend = "SELECT * FROM `friends` WHERE `id1` = $id || `id2` = $id";
    $result_friend = mysqli_query($connect, $select_friend);
    mysqli_close($connect);
    if($result_friend){
        $number_friends = mysqli_num_rows($result_friend);
        //echo $number_friends;
        if($number_friends != 0){
           while($array_friend_list = mysqli_fetch_array($result_friend)){
               if($array_friend_list['id1'] == $id){
                   $friend_id = $array_friend_list['id2'];
               } else {
                   $friend_id = $array_friend_list['id1'];
               }
               $connect = mysqli_connect("localhost","root","","findfree");
//$name = $_POST['name'];
//$password = md5($_POST['password']);
               // $friend_id;
               //echo $id;
                $select = "SELECT * FROM `user` WHERE `id` = $friend_id";
                $result = mysqli_query($connect, $select);
                $array = mysqli_fetch_array($result);
                mysqli_close($connect);
                
                
                $connect = mysqli_connect("localhost","root","","findfree");

                    $select_profile = "SELECT * FROM `profile` WHERE `id` = $friend_id";
                $result_profile = mysqli_query($connect, $select_profile);
                if($result_profile){
                    $array_profile = mysqli_fetch_array($result_profile);
                while($array_pro = mysqli_fetch_array($result_profile)){
                    if($array_profile['uid'] < $array_pro['uid']){
                        $array_profile = $array_pro;
                }
                }
                }

                mysqli_close($connect);
                if($array_profile['date']<10){
                    $array_profile['date'] = "0".$array_profile['date'];
                }
                if($array_profile['month']<10){
                    $array_profile['month'] = "0".$array_profile['month'];
                }
                ?>
    <div class="col-sm-2">
    <div class="thumbnail">
        <img src="<?php echo "./".$array_profile['year']."/".$array_profile['month']."/".$array_profile['date']."/".$array_profile['name'];
        ?>
             " alt="image" title="profile">
        <span><?php echo $array['name'];?></span><span style="position: absolute;right: 10%"><?php echo $array['email'];?></span>
    </div>
        <br></div>
    
    <?php
    
    
           }
           
        }
    }
    ?>
</body>
</html>