<?php

 $token1="Bearer ".$_SESSION['token'];
?>

<?php
  

if($_SESSION['id']==null){
    header('location: index.php');

}
$baseurlapi = "https://sofiapi.code7labs.com/api/";
$url = $baseurlapi . "reviews-for-user/".$_SESSION['id'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
    "Accept: application/json",
    "Method:GET",
    "Content-Type: application/json",

    

);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);

$response_data_profile = json_decode($resp);

if(isset($response_data_profile->data)){
  if(!empty($response_data_profile->data)){

  $user_data_profile = $response_data_profile->data;
  }}
else{
  $user_data_profile='';
}
?>
