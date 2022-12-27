<?php 
session_start();

$token="Bearer ".$_SESSION['token'];
//echo $token;
?>
<?php
$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."logout";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
   "Authorization: ".$token.""
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);

$obj = json_decode($resp,true);


// $obj = json_decode($resp,true);
if($obj['status']){
echo "Logout Done";
echo "<script type='text/javascript'>window.location.replace('login.php');
</script>";

$_SESSION['name']=="";
}else{
echo "Logout Not Done";
    
    
}

?>