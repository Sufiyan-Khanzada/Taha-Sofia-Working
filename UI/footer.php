
<?php
if(!empty($_SESSION['id'])&&(!empty($_SESSION['token'])))
{
  $token="Bearer ".$_SESSION['token'];
$user_id1=$_SESSION['id'];
$baseurlapi_unread="https://sofiapi.code7labs.com/api/";
$url_unread = $baseurlapi_unread."get-unread-notification/".$user_id1;

$options_unread = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);
$context_unread = stream_context_create($options_unread);

// Read JSON file
$json_data_unread = file_get_contents($url_unread, false, $context_unread);
    
// Decode JSON data into PHP array


$response_data_unread = json_decode($json_data_unread);
if(!empty($response_data_unread)){
$NotCount = $response_data_unread->count;
}


}
$name=isset($_SESSION['name']);

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
         <div class="iconfooter"><a href="login.php" class="changes1"><i class="fa-solid fa-comments "></i></a></div>
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
        
        <div class="iconfooter"><a href="notification.php" class="changes1"><i class="fa-solid fa-bell ">
            <?php if((!empty($NotCount))||($NotCount!="0")){
                if($NotCount!="0"){
                  echo '<span class="noti-alert">'. $NotCount . '</span>'; 
                } }?></i></a></div>
        <?php
        }else{
    
        ?>
         <div class="iconfooter"><a href="login.php" class="changes1"><i class="fa-solid fa-bell "></i></a></div>
      
        <?php 
        }
        ?>
        <div class="iconfooter"><a href="<?php echo $href;?>" class="changes1"><i class="fa-solid fa-user"></i></a></div>
    </div>

    <!-- footer end -->
    <!--===============================================================================================-->
