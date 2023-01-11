<?php
session_start();
$user_id1=$_SESSION['id'];
$token="Bearer ".$_SESSION['token'];
$myFile = pathinfo($_SERVER['REQUEST_URI']);
$filename = $myFile['basename'];
  echo $filename;

$to=substr($_POST['daterange'],13);
$subject = $_POST['daterange'] ;
$search = $to ;
$trimmed = str_replace($search, '', $subject);
$from=str_replace('-', '', $trimmed);
$fromdate=$from;
$todate=$to;
$to_date=str_replace('/', '-', $todate);
$from_date1=str_replace(' ', '', $fromdate);
$from_date = date("d-m-Y", strtotime($from_date1));  
$to_date = date("d-m-Y", strtotime($todate));  

$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."available-product/".$_POST['i_id']."?from=".$from_date."&to=". $to_date;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
   "Accept: application/json",
   "Method:POST",
   "Content-Type: application/json",
    "Authorization: ".$token."" 
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);
$obj = json_decode($resp,true);
if(empty($obj['data'])){
 $_SESSION['POST'][] = $_POST ;
  echo "<script>window.location.href='sent_rental.php';</script>";
 exit;  

}
else{
   $_SESSION['objmess'] =  $obj['message'];
        echo "<script>window.location.href='product-detail.php?id=" .$_POST['i_id']."';</script>";

}
?>