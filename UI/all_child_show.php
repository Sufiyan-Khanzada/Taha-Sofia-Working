<?php 
$token="Bearer ".$_SESSION['token'];

//echo $token;
?>
<?php
$msg="";
// include_once 'constant.php';
$baseurlapi_cat_child="https://sofiapi.code7labs.com/api/";
$url_cat_child = $baseurlapi_cat_child."all-child-category";

$options1 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);



$context1121_cat_child = stream_context_create($options1);

// Read JSON file
// $json_data1 = file_get_contents($url1);
    $json_data_cat_child = file_get_contents($url_cat_child, false, $context1121_cat_child);




if($json_data_cat_child==""){
///echo "Not reviews yet";
$user_data_cat_child="";
}else{

$response_data_cat_child = json_decode($json_data_cat_child);


$user_data_cat_child_child = $response_data_cat_child->data;



}

?>