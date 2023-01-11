<?php
// session_start();
$token="Bearer ".$_SESSION['token']; 

$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."chat/message/".$_SESSION['id'];

// Read JSON file
$options_chat = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Authorization:$token"  // check function.stream-context-create on php.net
               // i.e. An iPad 
  )
);
$context_chat = stream_context_create($options_chat);
$json_data_chat = file_get_contents($url, false, $context_chat);
    
// Decode JSON data into PHP array

// All user data exists in 'data' object

// $meal = $user_data->meal;
// $offer = $user_data->offer;
// $category = $user_data->category;
// $offerchunk = array_chunk($offer, 3, true);
// $categorychunk = array_chunk($category, 3);
if($json_data_chat==""){
///echo "Not reviews yet";
$user_data_chat="";
}else{
$response_data_chat = json_decode($json_data_chat);

$user_data_chat = $response_data_chat;
$user_data_chat1 = $response_data_chat->data[0]->user_messages;

// $brands = $response_data->brands;

// print_r($user_data_chat1);

}

//print_r($response_data);

// foreach ($user_data_chat as $user_chat) {

//   echo "_message: ".$user_chat->message."<br>";
//   echo "user_message: ".$user_chat->users_messages."<br>";
//   echo "<br />";
// }
// print_r($user_data->id);

// $nearby = $user_data->nearby;
// $nearbychunk = array_chunk($nearby, 2);
// print_r( count($nearby));
// print_r(count($nearbychunk[1][0]));
// print_r(count($nearbychunk[1]));
// print_r(count($nearbychunk[1][1]));


// print_r($user_data->meal);
// print_r($offer);
// echo "ssadsasd";
// echo count($offerchunk);
?>
