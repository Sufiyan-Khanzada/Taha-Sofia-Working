<?php
session_start();
$token="Bearer ".$_SESSION['token'];

$msg="";


$seller_id=$_SESSION['id'];
$prod_id=$_POST['p_id'];
$to=substr($_POST['daterange'],13);
$subject = $_POST['daterange'] ;
$search = $to ;
$trimmed = str_replace($search, '', $subject);
$from=str_replace('-', '', $trimmed);
$to_date=str_replace('/', '-', $to);
$from_date1=str_replace(' ', '', $from);
$from_date = date("d-m-Y", strtotime($from_date1));  
$to_date = date("d-m-Y", strtotime($to));  

 
  $baseurlapi="https://sofiapi.code7labs.com/api/";
$api_url12 = $baseurlapi."owner-usage";

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $api_url12);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  
  
$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
    "Authorization: ".$token.""
);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  
 
$data= <<<DATA
{
  
    "seller_id":"$seller_id",    
    "product_id":"$prod_id",
    "to": "$to_date",
    "from":"$from_date"
  
  }
DATA;



  // echo $data;
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  
  $resp = curl_exec($curl);
  
 



$response_data12 =json_decode($resp);




$profileadddata = $response_data12;



// if($response_data12==""){

// echo $msg="Products Not Found";

// }

// foreach($profileadddata as $user){

// echo $profileadddata[0]->Item_name;

// }

if(isset($response_data12->success)){
  echo "<script>window.location.href='myproducts.php';</script>";

    
  exit;


}
else{
  $_SESSION['response']= json_decode($resp);

  echo "<script>window.location.href='myproducts.php';</script>";

    
  exit;

}



 ?>
