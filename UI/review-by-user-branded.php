<?php

 

$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."reviews-for-user/".$_GET['id'];

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

$obj = json_decode($resp,true);
if(isset($obj->average))
{
 $user_data_featured = $obj->average;
}
else{
 $user_data_featured=0;
}

?>