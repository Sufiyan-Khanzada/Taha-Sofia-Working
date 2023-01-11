<?php
///////////Recommended API/////////

$msg="";
// include_once 'constant.php';
$baseurlapi112="https://sofiapi.code7labs.com/api/";
$url112 = $baseurlapi112."recommeded-products";



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
    $json_data1112 = file_get_contents($url112, false, $context1121);



// Decode JSON data into PHP array
$response_data112 = json_decode($json_data1112);


// All user data exists in 'data' object
$user_data1123 = $response_data112->data;
$user_data112 = array_slice($user_data1123, 0, 5, true);


//print_r($user_data112);
// $meal = $user_data->meal;
// $offer = $user_data->offer;
// $category = $user_data->category;
// $offerchunk = array_chunk($offer, 3, true);
// $categorychunk = array_chunk($category, 3);


//print_r($response_data);
// foreach ($user_data112 as $user1) {

//   echo "name: ".$user->id;
//   echo "<br />";
// }


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
 
 
 <div class="main">
  <div class="slider slide-show">

                    <!-- 1st -->
                       <h3>Related Products</h3>
                             <?php 

foreach ($user_data112 as $user112) {
  ?>
   <div class="block2">
                            <div class="block2-pic hov-img0">
                                <a href='product-detail.php?id=<?php echo $user112->id; ?>'>
                                 <img src="uploads/cats-graphic.jpg" alt="IMG-PRODUCT">
                                </a>
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
									Quick View
								</a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14" style="justify-content: center;">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php?id=<?php echo $user112->id; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?php echo  $user112->Item_name; ?>
									</a>
                                     <p class="card-text" ><small class="text-muted">
                                       <?php echo  $user112->brands['0']->name; ?>
                                        <span style="color:<?php echo  $user112->color; ?>">|</span> <span><?php echo  $user112->size;?></span></small>
                                    </p>
                                </div>


                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="add-fav.php?id=<?php echo $user112->id; ?>" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                    </a>
                                </div>
                                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn4 trans-04 m-r-8 m-tb-4">
						            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                                     
                                    <a href="product-detail.php?id=<?php echo $user112->id; ?>" style="text-decoration: none; padding:8px; ">€<?php echo $user112->Item_price;?>/Day</a> 
					            </div>
                            </div>
                        </div>
<?php
}
?>
                       
    </div>
</div>
