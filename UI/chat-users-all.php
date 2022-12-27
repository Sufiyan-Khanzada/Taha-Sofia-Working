<?php

$token="Bearer ".$_SESSION['token']; 

$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."chat/users";

// Read JSON file
$options_featured = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Authorization:$token"  // check function.stream-context-create on php.net
               // i.e. An iPad 
  )
);
$context_featured = stream_context_create($options_featured);
$json_data = file_get_contents($url, false, $context_featured);
    
// Decode JSON data into PHP array

// All user data exists in 'data' object

// $meal = $user_data->meal;
// $offer = $user_data->offer;
// $category = $user_data->category;
// $offerchunk = array_chunk($offer, 3, true);
// $categorychunk = array_chunk($category, 3);
if($json_data==""){
///echo "Not reviews yet";
$user_data="";
}else{




$response_data = json_decode($json_data);


$user_data = $response_data->data;
// $brands = $response_data->brands;


}

//print_r($response_data);

// foreach ($user_data as $user) {

// //   echo "name: ".$user->name."<br>";
//   // echo "<br />";
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
