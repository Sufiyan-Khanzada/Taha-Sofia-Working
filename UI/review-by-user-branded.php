<?php

 $token1="Bearer ".$_SESSION['token'];
?>

<?php
  

if($_GET['id']==null){
    header('location: index.php');

}//print_r($_SESSION);
$api_url_featured = "https://sofiapi.code7labs.com/api/reviews-for-user/".$_GET['id'];

// echo $api_url;

$options_featured = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Authorization:$token1"  // check function.stream-context-create on php.net
               // i.e. An iPad 
  )
);
$context_featured = stream_context_create($options_featured);
$json_data_featured = file_get_contents($api_url_featured, false, $context_featured);

$response_data_featured = json_decode($json_data_featured);

$user_data_featured = $response_data_featured->average;

?>