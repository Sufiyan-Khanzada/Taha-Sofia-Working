<?php 
session_start();
$token="Bearer ".$_SESSION['token'];
$pr_id=$_GET['id'];
$usr_id=$_SESSION['id'];
// $pr_id="24";
//echo $token;


?>

<?php

$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$usr_id=$_SESSION['id'];
$pr_id=$_GET['id'];
$url = $baseurlapi."add-favourite";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
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
  
  "user_id":"$usr_id",
    "product_id":"$pr_id"
    
  
  
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);

// print_r($obj);
// $obj = json_decode($resp,true);
//print_r($obj);
if($obj['success']=='1'){
//   ini_set('session.cookie_domain','.domain.com');
echo "Done";
echo "<script type='text/javascript'>window.location.replace('product-detail.php?id=$pr_id');
</script>";

}
echo $obj['message'];
echo "<script type='text/javascript'>window.location.replace('product-detail.php?id=$pr_id');
</script>";
// else if($obj['message']){
//     echo $obj['message'];
    
// }

?>