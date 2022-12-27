<?php
//session_start();
$user_id1=$_SESSION['id'];
$token="Bearer ".$_SESSION['token'];

$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."request-rental";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$b_id=$_SESSION['id'];
$user_id=$_POST['user_id'];
$p_id=$_POST['i_id'];
$pr_price=$_POST['i_price'];
$fromdate=$_POST['from'];
$todate=$_POST['to'];
$to_date=str_replace('/', '-', $todate);
echo $to_date . "<br>";
$from_date1=str_replace(' ', '', $fromdate);
$from_date = date("d-m-Y", strtotime($from_date1));  
$to_date = date("d-m-Y", strtotime($todate));  
if(empty($_POST['NewAddress'])){
    $ship_address=$_POST['address'];
}else{
    $ship_address=$_POST['NewAddress'];
}

// "seller_id":"56",
//         // "product_id":"56",
//         // "price"':"56",
//         // "from":"56",
//         // "to":"565",
//         // "shipment_address":"56566"


$headers = array(
   "Accept: application/json",
   "Method:POST",
   "Content-Type: application/json",
    "Authorization: ".$token.""
   
   
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
  "buyer_id":"$b_id",
  "seller_id":"$user_id",
  "product_id":"$p_id",
  "price":"$pr_price",
  "from":"$from_date",
  "to":"$to_date"
  }
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);
// $obj = json_decode($resp,true);
if(empty($obj['message'])){
   echo "<script>window.location.href='rented_product.php';</script>";

    
    exit;

    

}
else{
 ?>
  <div class="alert alert-danger">
   <?php

   $alert = $obj['message'];
   if(is_array($obj['message'])){
   $keys = array_keys($alert);
        for($i = 0; $i < count($alert); $i++) {
            foreach($alert[$keys[$i]] as $key => $value) {
                echo $value . "<br>";
            }
        }}
        else{
            print_r($obj['message']);
        }
   ?>


</div>
 <?php   
}
?>