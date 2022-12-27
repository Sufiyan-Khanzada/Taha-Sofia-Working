
<?php

$name=$_SESSION['name'];
$href="";
if($name!=""){
  
      $href="profile.php";
    
}
else{
    
    $href="login.php";
}
?>

    <!-- footerstart -->
    <div id="footer1">
        
       
        
        
        
        
        
        <div class="iconfooter"><a href="index.php" class="changes1"><i class="fa-solid fa-house "></i></a>
        </div>

 
        <?php 
         if($name!=""){
        
        ?>
         <div class="iconfooter"><a href="message.php" class="changes1"><i class="fa-solid fa-comments "><span class="noti-alert">2</span></i></a></div>
        <?php
         }else{
         ?>
         <div class="iconfooter"><a href="login.php" class="changes1"><i class="fa-solid fa-comments "><span class="noti-alert">2</span></i></a></div>
        <?php
         }
        ?>
    
       <?php
       if($name!=""){
       
      ?>
        <div class="iconfooter"><a href="productupload.php" class="changes1"><i class="fa-solid fa-circle-plus "></i></a></div>
       <?php
       }else {
       ?>
        <div class="iconfooter"><a href="login.php" class="changes1"><i class="fa-solid fa-circle-plus "></i></a></div>
        <?php
        }
        ?>
        
        <?php 
        if($name!=""){
            
            
        ?>
        
        <div class="iconfooter"><a href="notification.php" class="changes1"><i class="fa-solid fa-bell "><span class="noti-alert">1</span></i></a></div>
        <?php
        }else{
    
        ?>
         <div class="iconfooter"><a href="login.php" class="changes1"><i class="fa-solid fa-bell "><span class="noti-alert">1</span></i></a></div>
      
        <?php 
        }
        ?>
        <div class="iconfooter"><a href="<?php echo $href;?>" class="changes1"><i class="fa-solid fa-user"></i></a></div>
    </div>

    <!-- footer end -->
    <!--===============================================================================================-->
