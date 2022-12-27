<?php

 $token1="Bearer ".$_SESSION['token'];
?>

<?php
  

if($_SESSION['id']==null){
    header('location: index.php');

}//print_r($_SESSION);
$api_url_profile = "https://sofiapi.code7labs.com/api/reviews-for-user/".$_SESSION['id'];

// echo $api_url;

$options_profile = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Authorization:$token1"  // check function.stream-context-create on php.net
               // i.e. An iPad 
  )
);

$context_profile = stream_context_create($options_profile);

$json_data_profile = file_get_contents($api_url_profile, false, $context_profile);

$response_data_profile = json_decode($json_data_profile);

$user_data_profile = $response_data_profile->data;


?>