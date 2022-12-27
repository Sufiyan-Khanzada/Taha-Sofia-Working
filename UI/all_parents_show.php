<?php 


$token="Bearer ".$_SESSION['token'];

//echo $token;
?>
<?php
$msg="";
// include_once 'constant.php';
$baseurlapi_cat="https://sofiapi.code7labs.com/api/";
$url_cat = $baseurlapi_cat."all-parents-category";

$options1 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);



$context1121_cat = stream_context_create($options1);

// Read JSON file
// $json_data1 = file_get_contents($url1);
    $json_data_cat = file_get_contents($url_cat, false, $context1121_cat);




if($json_data_cat==""){
///echo "Not reviews yet";
$user_data_cat="";
}else{

$response_data_cat = json_decode($json_data_cat);


$user_data_cat = $response_data_cat->data;



}

?>