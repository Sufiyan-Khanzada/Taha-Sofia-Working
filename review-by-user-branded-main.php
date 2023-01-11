<?php

 $token1="Bearer ".$_SESSION['token'];
?>

<?php
  

if($_SESSION['id']==null){
    header('location: index.php');

 }
 $baseurlapi="https://sofiapi.code7labs.com/api/";
 $url = $baseurlapi."reviews-for-user/".$_SESSION['id'];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
  "Accept: application/json",
  "Method:GET",
  "Content-Type: application/json",
   "Authorization: ".$token1.""
  
  
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);

$obj = json_decode($resp,true);
if(isset($obj->average))
{
  $user_data_featured = $obj->average;
}
else{
  $user_data_featured=0;
}
 //print_r($_SESSION);
// $api_url_featured = "https://sofiapi.code7labs.com/api/reviews-for-user/".$_SESSION['id'];

// // echo $api_url;

// $options_featured = array(
//   'http'=>array(
//     'method'=>"GET",
//     'header'=>"Accept-language: en\r\n" .
//               "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
//               "Authorization: ".$token1."" // i.e. An iPad 
              
//   )
// );
// $context_featured = stream_context_create($options_featured);
// $json_data_featured = file_get_contents($api_url_featured, false, $context_featured);

// $response_data_featured = json_decode($json_data_featured);

?>