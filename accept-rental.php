<?php
session_start();
if(empty(['id'])){
    header('location: index.php');

}
if(isset($_GET['id'])){

    $id=$_GET['id'];
$token="Bearer ".$_SESSION['token']; 
  $baseurlapi="https://sofiapi.code7labs.com/api/";
$unreadNotification_url = $baseurlapi."approve-rental/".$id;
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $unreadNotification_url);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  
  
$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
    "Authorization: ".$token.""
);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  $json_data_unreadNotification = curl_exec($curl);
  $response_data_unreadNotification =json_decode($json_data_unreadNotification);
  echo "<script>window.location.href='rented_product.php';</script>";

}
?>


