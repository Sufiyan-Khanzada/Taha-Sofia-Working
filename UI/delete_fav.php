<?php 
session_start();

$token="Bearer ".$_SESSION['token'];
$usr_id=$_GET['id'];

//echo $token;
?>
<?php
/////////////Delete Products//////////
$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."delete-favourite/".$usr_id;


$options = array(
  'http'=>array(
    'method'=>"DELETE",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n".
              "Authorization: ".$token.""
                 // check function.stream-context-create on php.net
               // i.e. An iPad 
              
  )
);
$context = stream_context_create($options);

// Read JSON file
// $json_data1 = file_get_contents($url1);
    $json_data = file_get_contents($url, false, $context);
// Read JSON file

    

if($json_data!=""){
echo "Favourite Deleted";
echo "<script type='text/javascript'>window.location.replace('favourite.php');
</script>";

}
print_r($json_data);


?>

