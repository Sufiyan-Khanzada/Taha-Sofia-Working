
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
if($obj['success']){
//   ini_set('session.cookie_domain','.domain.com');
echo "Done";
echo "<script type='text/javascript'>window.location.replace('index.php');
</script>";
// echo ini_get('session.cookie_domain');
// session_set_cookie_params( 0, "/", ".domain.com", false, false); 

 //  session_start();
   
    // $_SESSION['favcolor'] = "green";
    //  $_SESSION['userId'] = $obj['data']['userId'];
    //  $_SESSION['userFullName'] = $obj['data']['userFullName'];
    //  $_SESSION['userEmail'] = $obj['data']['userEmail'];
    //  $_SESSION['userPhoneNumber'] = $obj['data']['userPhoneNumber'];
    //  $_SESSION['address'] = $obj['data']['address'];
    //  $_SESSION['userImage'] = $obj['data']['userImage'];
    //  $_SESSION['remember_token'] = $obj['data']['remember_token'];
    //  $_SESSION['device_type'] = $obj['data']['device_type'];
    //  $_SESSION['device_token'] = $obj['data']['device_token'];
    //  $_SESSION['isSocial'] = $obj['data']['isSocial'];
    //  $_SESSION['provider'] = $obj['data']['provider'];
    //  $_SESSION['longitude'] = $obj['data']['longitude'];
    //  $_SESSION['latitude'] = $obj['data']['latitude'];
    //  $_SESSION['address_type'] = $obj['data']['address_type'];
    //  $_SESSION['user_city'] = $obj['data']['user_city'];
    //  $_SESSION['address1'] = $obj['data']['address1'];
    // $_SESSION['cart_item'] = array();
  // print_r( $obj['message']);
}

?>