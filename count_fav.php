<?php 
if(isset($_SESSION['token'])&&isset($_SESSION['id']))
{

$token="Bearer ".$_SESSION['token'];




$msg="";
// include_once 'constant.php';
$baseurlapi_index_fav="https://sofiapi.code7labs.com/api/";
$url_index_fav = $baseurlapi_index_fav."get-favourite";

$options1 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);
$context1121_index_fav = stream_context_create($options1);

// Read JSON file
// $json_data1 = file_get_contents($url1);
    $json_data_index_fav = file_get_contents($url_index_fav, false, $context1121_index_fav);



// Read JSON file

    
// Decode JSON data into PHP array

// All user data exists in 'data' object

// $meal = $user_data->meal;
// $offer = $user_data->offer;
// $category = $user_data->category;
// $offerchunk = array_chunk($offer, 3, true);
// $categorychunk = array_chunk($category, 3);

///echo "Not reviews yet";
$user_data_index_fav="";


$response_data_index_fav = json_decode($json_data_index_fav);

foreach ($response_data_index_fav->data as $a) 
{ 
  $favid[]=$a->product_id;
  $fav_id[$a->id]= $a->product_id ; 
}

$count_index_fav=$response_data_index_fav->count;


//print_r($user_data);
//print_r($response_data);
//print_r($user_data);

// echo $count_index_fav;

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

}
if(isset($count_index_fav))
{
    echo '<a href="favourite.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="'. $count_index_fav .'">';
}
else{
    echo '<a href="login.php" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 " >';
}
?>