<?php 
session_start();

$token="Bearer ".$_SESSION['token'];

//echo $token;
?>
<?php
$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."get-favourite";

$options1 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);



$context1121 = stream_context_create($options1);

// Read JSON file
// $json_data1 = file_get_contents($url1);
    $json_data = file_get_contents($url, false, $context1121);



// Read JSON file

    
// Decode JSON data into PHP array

// All user data exists in 'data' object

// $meal = $user_data->meal;
// $offer = $user_data->offer;
// $category = $user_data->category;
// $offerchunk = array_chunk($offer, 3, true);
// $categorychunk = array_chunk($category, 3);
if($json_data==""){
///echo "Not reviews yet";
$user_data="";
}else{

$response_data = json_decode($json_data);


$user_data = $response_data->data;

}

//print_r($response_data);
//print_r($user_data);
foreach ($user_data as $user) {

  // echo "name: ".$user->products[0]->Item_name;
  // echo "<br />";
?>

<div class="img-wish" style="margin: 6px;">

<div class="card" style="width: 100%; border:none;">
                    <img class="img-fluid" alt="100%x280" src="<?php echo $user->products[0]->Item_image ?>" style="width: 100%;">
                    
                                                  
                    <div class="dropdown-container" tabindex="-1"  style="position: absolute; left:85%; top:2%">
                               <div class="three-dots"></div>
                               <div class="dropdown">
                                 <a href="editproduct.php"><div>Edit</div></a>
                                 <a href="#" data-toggle="modal" data-target="#exampleModal"><div>Pause</div></a>
                                 <a href="#"  data-toggle="modal" data-target="#exampleModalCenter"><div>Delete</div></a>
                               </div>
                             </div>


                    <div class="card-body" style="padding: 8px;">
                      <span class="fa fa-heart" style="float: right;"></span>
                     <p class="card-text" style="color: black;"><?php echo $user->products[0]->Item_name ?></p>
                     <small class="text-muted" ><?php  $user->products[0]->brand_id?><span> |</span> <span> Large</span></small>
                     
                    <center>
                     <a href="#" class="btn btn-primary">€ <?php  echo $user->products[0]->Item_price ?> / Day</a>
                      </center>
                    </div>
                  </div>
                  


</div>




<?php







}
// print_r($user_data->id);

// $nearby = $user_data->nearby;
// $nearbychunk = array_chunk($nearby, 2);
// print_r( count($nearby));
// print_r(count($nearbychunk[1][0]));
// print_r(count($nearbychunk[1]));
// print_r(count($nearbychunk[1][1]));


// print_r($user_data->meal);
// print_r($offer);
// echo "ssadsasd";
// echo count($offerchunk);
?>