<!DOCTYPE html>
<?php 
session_start();
$id=$_GET['id'];
if(isset($_SESSION['token']))
{
$token="Bearer ".$_SESSION['token'];
}
else{
    $token="Bearer ";

}

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// echo $actual_link;
//echo $token;
?>
<html lang="en">
<head>
    <title>Product Detail</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- lightbox css -->
    <link rel="stylesheet" href="lightbox.css">

    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!--===============================================================================================-->
    <style>
  /* ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 70px 25px;
  width: 100%;
  background: #1abc9c;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}


@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
} */
i.fa.fa-calendar.glyphicon.glyphicon-calendar {
    top: 15px;
}

.daterangepicker_input input {
    padding-left: 25px!important;
}   
.table-condensed td , .table-condensed th
{
    padding: 0!important;
}

    </style>

</head>


<?php
$baserurl = 'https://sofiapi.code7labs.com/api/';

// if($_GET['id']==null){
//     header('location: index.php');

// }//print_r($_SESSION);

$api_url_brand = "https://sofiapi.code7labs.com/api/single-brand/".$id;

// echo $api_url;

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n".
              "Authorization:$token"  // check function.stream-context-create on php.net
               // i.e. An iPad 
  )
);
$context_brand = stream_context_create($options);

if(file_exists($api_url_brand)){
    
$json_data_brand = file_get_contents($api_url_brand, false, $context_brand);

$response_data_brand = json_decode($json_data_brand);

$user_data_brand = $response_data_brand->data;
    
    
}
else{
    
   // echo "not done";
}




?>


<?php
 
 $aaa =32323;
  $baserurl = 'https://sofiapi.code7labs.com/api/';

if($_GET['id']==null){
    header('location: index.php');

}//print_r($_SESSION);
$api_url = "https://sofiapi.code7labs.com/api/single-product/".$id;

// echo $api_url;

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"  // check function.stream-context-create on php.net
               // i.e. An iPad 
  )
);
$context = stream_context_create($options);
$json_data = file_get_contents($api_url, false, $context);

$response_data = json_decode($json_data);

$user_data = $response_data->data;

// echo "<pre>";
// print_r($response_data);

// echo "</pre>";


?>





<?php
 $brand=$user_data->brand_id;


 $aaa =32323;
  $baserurl = 'https://sofiapi.code7labs.com/api/';

// if($_GET['id']==null){
//     header('location: index.php');

// }//print_r($_SESSION);

$api_url_brand = "https://sofiapi.code7labs.com/api/single-brand/".$brand;

// echo $api_url_brand;

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n".
              "Authorization:$token"  // check function.stream-context-create on php.net
               // i.e. An iPad 
  )
);
$context_brand = stream_context_create($options);
$json_data_brand = file_get_contents($api_url_brand, false, $context_brand);

$response_data_brand = json_decode($json_data_brand);

$user_data_brand = $response_data_brand->data;




?>

<?php
///////////Recommended API/////////
$item=$user_data->Item_name;

$msg1="";
// include_once 'constant.php';
$baseurlapi1="https://sofiapi.code7labs.com/api/";
$url1 = $baseurlapi1."add-recommended-products";
// echo $item;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url1);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


// $category="bags";

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
   "Authorization:$token"
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{  
  "search_query":"$item"
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);



// $obj = json_decode($resp,true);

if(isset($obj['success'])){
$msg1="Recommended Done";
//echo $msg1;

}
else{
$msg1="Recommended Not Done";
//echo $msg1;
echo "<script>console.log(". $msg1 . ")</script>";
}
?>

<?php
///////////Get Reviews API/////////
$msg111="";
// include_once 'constant.php';
$baseurlapi113="https://sofiapi.code7labs.com/api/";
$url113 = $baseurlapi113."reviews-by-product/".$id;

//echo $url113;

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);
$context113 = stream_context_create($options);


if(file_exists($url113)){

if($context113==""){
    echo "not done";
    
}

// Read JSON file
// $json_data1 = file_get_contents($url1);
    $json_data1113 = file_get_contents($url113, false, $context113);



if($json_data1113==""){
///echo "Not reviews yet";
 
$user_data113="";
}else{

$response_data113 = json_decode($json_data1113);


$user_data113 = $response_data113->data;

}
}
else{
    $user_data113="";
}
// Decode JSON data into PHP array





// echo "Done";

// All user data exists in 'data' object

// $meal = $user_data->meal;
// $offer = $user_data->offer;
// $category = $user_data->category;
// $offerchunk = array_chunk($offer, 3, true);
// $categorychunk = array_chunk($category, 3);


//print_r($response_data);
// foreach ($user_data1 as $user1) {

//   // echo "name: ".$user->id;
//   // echo "<br />";
// }
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
<body class="animsition">

    <!-- Header -->
    <header class="header-v4">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>

                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m trans-04 p-lr-25">
							Help & FAQs
						</a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
							EN
						</a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
							USD
						</a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop how-shadow1">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="#" class="logo">
                        <img src="images/icons/logo-01.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="index.php">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.php">Homepage 1</a></li>
                                    <li><a href="home-02.php">Homepage 2</a></li>
                                    <li><a href="home-03.php">Homepage 3</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="product.php">Shop</a>
                            </li>

                            <li class="label1" data-label1="hot">
                                <a href="shoping-cart.php">Features</a>
                            </li>

                            <li>
                                <a href="blog.php">Blog</a>
                            </li>

                            <li>
                                <a href="about.php">About</a>
                            </li>

                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <?php
include 'count_fav.php';
?>
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <!-- <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
					<span class="hamburger-inner"></span>
                </span>
            </div> -->
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>
                </li>

                <li>
                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.php">Home</a>
                    <ul class="sub-menu-m">
                        <li><a href="index.php">Homepage 1</a></li>
                        <li><a href="home-02.php">Homepage 2</a></li>
                        <li><a href="home-03.php">Homepage 3</a></li>
                    </ul>
                    <span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
                </li>

                <li>
                    <a href="product.php">Shop</a>
                </li>

                <li>
                    <a href="shoping-cart.php" class="label1 rs1" data-label1="hot">Features</a>
                </li>

                <li>
                    <a href="blog.php">Blog</a>
                </li>

                <li>
                    <a href="about.php">About</a>
                </li>

                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">
        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
					Your Cart
				</span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-01.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

                            <span class="header-cart-item-info">
								1 x $19.00
							</span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-02.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

                            <span class="header-cart-item-info">
								1 x $39.00
							</span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-03.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

                            <span class="header-cart-item-info">
								1 x $17.00
							</span>
                        </div>
                    </li>
                </ul>

                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: $75.00
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

                        <a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
                
            <span class="stext-109 cl4">
				<?php  echo $user_data->Item_name;?>
			</span>
        </div>
    </div>


    <!-- Product Detail -->
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7 p-b-30">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                           <div class="slick3 gallery-lb">
                                <div class="item-slick3" data-thumb="<?php  echo $user_data->featured_image;?>">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="<?php  echo $user_data->featured_image;?>" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php  echo $user_data->featured_image;?>">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="<?php  echo $user_data->Item_image;?>">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="<?php  echo $user_data->Item_image;?>" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php  echo $user_data->Item_image;?>">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-slick3" data-thumb="<?php  echo $user_data->Item_image;?>">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="<?php  echo $user_data->Item_image;?>" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php  echo $user_data->Item_image;?>">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5 p-b-30">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <div class="heart3">
                        <div class="mtext-105 cl2  p-b-14">
                             
                            <?php echo $user_data->Item_name;?>
                            
                        </div>
                        <div>
                            <?php
                            if(isset($favid)){
                            if (in_array($id, $favid))
                            {
                                echo '<a href="delete_fav.php?id='.array_search($_GET['id'],$fav_id).'" style="color: #717fe0;" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 tooltip100" data-tooltip="Add to Wishlist">
                                <i class="zmdi zmdi-favorite fa-2x"></i></a>';
                                  }
                          else
                            {
                            echo '<a href="detail-fav.php?id='.$_GET['id'].'" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 tooltip100" data-tooltip="Add to Wishlist">
                            <i class="zmdi zmdi-favorite fa-2x"></i></a>';
                            }}
                            ?>
                          </div>

                        </div>
                        <div class="head1txt"><?php  echo $user_data_brand->name;?></div>
                        <span class="mtext-102 cl2">
                           Retail Price
						</span>
                        <span> <?php  echo $user_data->Item_price;?></span>
                        <br>
                        <span class="size203 cl2">
							Minimum
						</span>
						
                        <span><?php echo $user_data->min_rent_day." Days"; ?></span>
                        |
                        <span class="size203 cl2">
							Maximum
						</span>
						
                        <span class="size203 cl2">
							<?php echo $user_data->max_rent_day." Days";; ?>
						</span>
						
                    

                        <p class="stext-102 cl3 p-t-23">
                           <?php  echo $user_data->description;?>
                        </p>

                        <div class="bg6 portion3" >
                            <div style="margin-left: 10px;">
                                <h6>Basis Mietpresis</h6>
                                <p>$ <?php echo 
                                $user_data->rental_price_oneday; ?></p>
                                <p>Nulla eget sem vitae eros</p>
                            </div>
                            <div>
                            <div class="vl"  style="margin-left: 10px;"></div>
                            </div>
                            <div  style="margin-left: -10px;">
                            <h6>Basis Mietpresis</h6>
                                <p>$ <?php echo 
                                $user_data->rental_price_week;?></p>
                                <p>Nulla eget sem vitae eros</p>
                            </div>

                        </div>

                        <!--  -->
                        <div class="p-t-33">
                            <div class="flex-w  p-b-10">
                                <div class="size-203 flex-c-m respon6">Size:
                                </div>
                                <span><?php  echo $user_data->size;?></span>
                                <!-- <div class="size-204 respon6-next"> -->
                                
                                    <!-- <input placeholder="Larger"> -->
                                <!-- </div> -->

                                <!-- <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
											<option>Choose an option</option>
											<option>Size S</option>
											<option>Size M</option>
											<option>Size L</option>
											<option>Size XL</option>
										</select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div> -->
                            </div>

                            <div class="flex-w p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    Color:
                                </div>
                                <span><?php  echo $user_data->color;?></span>
                                </div>
                                <div class="flex-w p-b-10">
                                <div class="size-203 flex-c-m respon6" style="margin-left:15px;">
                                Condition:
                                </div>
                                <span style="margin-left:15px;"> <?php  echo $user_data->item_condition;?></span>
                                </div>
                                <!-- <div class="size-204 respon6-next">
                                    <div>Black</div> -->
                                    <!-- <input placeholder="Black"> -->
                                <!-- </div> -->

                                <!-- <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
											<option>Choose an option</option>
											<option>Red</option>
											<option>Blue</option>
											<option>White</option>
											<option>Grey</option>
										</select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div> -->

                                <?php
                                if(isset($_SESSION['objmess'])){
                                    $obj['message'] = $_SESSION['objmess'];
                                echo '<div class="alert alert-danger">';
                                
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
                                    echo '</div>';
                                    unset($_SESSION['objmess']);
                                }?>

                            <div class="flex-w p-b-10" style="display: flex;justify-content:center">
                                <!-- <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div> -->

                                    <!-- <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail"> -->
                                    <!-- Add to cart
									</button> -->
                                    <!-- <a href="sent_rental.html"></a> -->
                                    <!-- <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn4 trans-04 m-r-8 m-tb-4">
						            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                                    <a href="product-detail.php" style="text-decoration: none; padding:8px; ">€39.55/Day</a> 
					            </div> -->
                            
                                    <div id="btncheck">
                                    
                                        <button id="checkavail"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="width:100%; height:48px; padding:15px; box-shadow: none; background-color:#fff; color: #888; border: 1px solid #e6e6e6;">
                                        Check Availibility</button>
                                    </div>
                                    
                                    
                            </div>
                            <div style="display: flex;justify-content:center">
                            <div>Share to</div>
                            <span class="p-l-7">
                                <i class="fa fa-facebook"></i></span><span class="p-l-7"><i class="fa fa-twitter"></i></span><span class="p-l-7"> <i class="fa fa-instagram"></i></span>
</div>
                                </div>
                        </div>
                        <!-- date picker start -->

                        <!-- date picker end -->


                        <!--  -->
                
                        <!-- <div class="flex-w flex-m p-l-100 p-t-20 respon7">
                        
                            <div class="flex-m bor9 p-r-10 m-r-11">
                            <i class="fa-solid fa-share-nodes"></i>
                                 -->
                                <!-- <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                    <i class="zmdi zmdi-favorite"></i>
                                </a> -->
                            <!-- </div>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="bor10 m-t-50 p-t-43 p-b-40">
                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#information" role="tab">Details</a>
                        </li>

                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
                        </li>
                        <li class="nav-item p-b-10">
                            <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Owner</a>
                        </li>
                    </ul>

                  
                    <!-- Tab panes -->
                    <div class="tab-content p-t-43">
                        <!-- - -->
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <div class="how-pos2 p-lr-15-md">
                                <!-- <p class="stext-102 cl6">
                                    Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus
                                    et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur
                                    dignissim, nunc nec laoreet consequat, purus nunc porta lacus, vel efficitur tellus augue in ipsum. Cras in arcu sed metus rutrum iaculis. Nulla non tempor erat. Duis in egestas nunc.
                                </p> -->
                                <div class="flex-w flex-t p-b-20">
                                    <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                    <a href="branded-user.php?id=<?php echo $user_data->users[0]->id; ?>">
                                    <img src="<?php

                                              echo   $user_data->users[0]->profile;

                                                 ?> " alt="AVATAR">
                                                </a>
                                    </div>

                                    <div class="size-207">
                                        <div class="flex-w flex-sb-m p-b-17">
                                           <a href="branded-user.php?id=<?php echo $user_data->users[0]->id; ?>">
                                           <span class="mtext-107 cl2 p-r-20">
                                                <?php
// print_r($user_data);
                                              echo   $user_data->users[0]->name

                                                 ?> 
                                            </span>
                                           </a>

                                            <!--<span class="fs-18 cl11">-->
                                            <!--    <i class="zmdi zmdi-star"></i>-->
                                            <!--    <i class="zmdi zmdi-star"></i>-->
                                            <!--    <i class="zmdi zmdi-star"></i>-->
                                            <!--    <i class="zmdi zmdi-star"></i>-->
                                            <!--    <i class="zmdi zmdi-star-half"></i>-->
                                            <!--</span>-->
                                        </div>

                                        <p class="stext-102 cl6">

                                            <div><span>City: </span><span><?php

                                              echo   $user_data->users[0]->city;

                                                 ?> </span></div>
                                            <div><span>Insurance Type: </span>




                                               <?php 
                if($user_data->users[0]->insuretype=="My insurance doesn't cover rentals or I don't have an insurance"){
?>
 <div class="idd" style="display:flex;justify-content:center;align-items:center">
            <span><i class="fa-sharp fa-solid fa-circle" style="color: red;"></i> </span>&nbsp; <span> <?php echo $_SESSION['insuretype']; ?> </span>
        </div>

<?php 
                }



              else if($user_data->users[0]->insuretype=="My insurance covers rentals"){
?>
 <div class="idd" style="display:flex;justify-content:center;align-items:center">
            <span><i class="fa-sharp fa-solid fa-circle" style="color: green;"></i> </span>&nbsp; <span> <?php echo $_SESSION['insuretype']; ?> </span>
        </div>

<?php 
                }


             else if($user_data->users[0]->insuretype=="I have an insurance and don't know whether it covers rentals"){
?>
 <div class="idd" style="display:flex;justify-content:center;align-items:center">
            <span><i class="fa-sharp fa-solid fa-circle" style="color: yellow;"></i> </span>&nbsp; <span> <?php echo $_SESSION['insuretype']; ?> </span>
        </div>

<?php 
                }    


            ?>  </span></div>
                                                 



                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                        <!-- - -->
                        <div class="tab-pane fade" id="information" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                    <ul class="p-lr-28 p-lr-15-sm">



                                        <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
												Proof Of Athenticity
											</span>

                                            <span class="stext-102 cl6 size-206">
                                                  <a href="<?php echo $user_data->purchaseproof; ?>" data-lightbox="models" data-title="Product Condition">
                                               	<img src="<?php echo $user_data->purchaseproof; ?>" style="width:30px;height:30px"/>
                                                </a>
											
											</span>
                                        </li>

                                        <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
												Product Condition
											</span>

                                            <span class="stext-102 cl6 size-206">
                                                <a href="<?php echo $user_data->damage_pic; ?>" data-lightbox="models" data-title="Product Condition">
                                                  <img src="<?php echo $user_data->damage_pic; ?>" style="width:30px;height:30px"/>
                                                </a>
                                                <a href="<?php echo $user_data->damage_pic; ?>" data-lightbox="models" data-title="Product Condition">
                                                  <img src="<?php echo $user_data->damage_pic; ?>" style="width:30px;height:30px"/>
                                                </a>
												  
                                                </a>
                                                <a href="<?php echo $user_data->damage_pic; ?>" data-lightbox="models" data-title="Product Condition">
                                                 <img src="<?php echo $user_data->damage_pic; ?>" style="width:30px;height:30px"/>
                                                </a>
                                                
                                               
											</span>
                                        </li>

                                        <!-- <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
												Size
											</span>

                                            <span class="stext-102 cl6 size-206">
												XL, L, M, S
											</span>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- - -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                    <div class=" m-lr-15-sm">
                                       
<?php 
if($user_data113==""){

echo "No Reviews Yet";
}
else{
foreach($user_data113 as $user11333){




?>
                                        <!-- Review -->
                                        <div class="flex-w flex-t p-b-20">
                                            <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                            <a href="images/avatar-01.jpg" data-lightbox="models" data-title="User">
                                                 <img src="<?php  ?>" alt="AVATAR">
                                                </a>
                                                
                                            </div>

                                            <div class="size-207">
                                                <div class="flex-w flex-sb-m p-b-17">
                                                <a href="profile.php">
                                                <span class="mtext-107 cl2 p-r-20">
														Ariana Grande
													</span>
                                                </a>
                                                

                                                    <span class="fs-18 cl11">
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star-half"></i>
													</span>
                                                </div>

                                                <p class="stext-102 cl6">
                                              <?php echo  $user11333->reviews;
                                               
                                               ?> </p>
                                               <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
												Review Images
											</span>

                                            <span class="stext-102 cl6 size-206">
                                                <a href="product3.jpg" data-lightbox="models" data-title="Product Condition">
                                                  <img src="<?php echo $user_data->review_image; ?>" style="width:30px;height:30px"/>
                                                </a>
                                                <a href="product2.jpg" data-lightbox="models" data-title="Product Condition">
                                                  <img src="<?php echo $user_data->review_image; ?>" style="width:30px;height:30px"/>
                                                </a>
												  
                                                </a>
                                                <a href="product5.jpg" data-lightbox="models" data-title="Product Condition">
                                                 <img src="<?php echo $user_data->review_image; ?>" style="width:30px;height:30px"/>
                                                </a>
                                                
                                               
											</span>
                                        </li>
                                               
                                            </div>
                                        </div>

<?php
}
}
                                    ?>

                                        <!-- Add review -->
                                        <!-- <form class="w-full">
                                            <h5 class="mtext-108 cl2 p-b-7">
                                                Add a review
                                            </h5>

                                            <p class="stext-102 cl6">
                                                Your email address will not be published. Required fields are marked *
                                            </p>

                                            <div class="flex-w flex-m p-t-50 p-b-23">
                                                <span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

                                                <span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating">
												</span>
                                            </div>

                                            <div class="row p-b-25">
                                                <div class="col-12 p-b-5">
                                                    <label class="stext-102 cl3" for="review">Your review</label>
                                                    <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review"></textarea>
                                                </div>

                                                <div class="col-sm-6 p-b-5">
                                                    <label class="stext-102 cl3" for="name">Name</label>
                                                    <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name">
                                                </div>

                                                <div class="col-sm-6 p-b-5">
                                                    <label class="stext-102 cl3" for="email">Email</label>
                                                    <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email">
                                                </div>
                                            </div>

                                            <button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
												Submit
											</button>
                                        </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Related Products -->
    <section class="sec-relate-product bg0 p-t-45 p-b-105">
        <div class="container">
            <div class="p-b-45">
                <h3 class="ltext-106 cl5 txt-center">
                    Related Products
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                        </div>
                </div>
            </div>
        </div>
    </section>
      <!-- footer start -->
    <?php include 'footer.php' ?>
    <!-- footer end -->
    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
    </div>

    <!-- Modal1 -->
    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
        <div class="overlay-modal1 js-hide-modal1"></div>

        <div class="container">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

                <div class="row">
                    <div class="col-md-6 col-lg-7 p-b-30">
                        <div class="p-l-25 p-r-30 p-lr-0-lg">
                            <div class="wrap-slick3 flex-sb flex-w">
                                <div class="wrap-slick3-dots"></div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                                <div class="slick3 gallery-lb">
                                    <div class="item-slick3" data-thumb="images/product-detail-01.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item-slick3" data-thumb="images/product-detail-02.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="item-slick3" data-thumb="images/product-detail-03.jpg">
                                        <div class="wrap-pic-w pos-relative">
                                            <img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

                                            <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 p-b-30">
                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                Lightweight Jacket
                            </h4>

                            <span class="mtext-106 cl2">
								$58.79
							</span>

                            <p class="stext-102 cl3 p-t-23">
                                Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                            </p>

                            <!--  -->
                            <div class="p-t-33">
                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Size
                                    </div>

                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-203 flex-c-m respon6">
                                        Color
                                    </div>

                                    <div class="size-204 respon6-next">
                                        <div class="rs1-select2 bor8 bg0">
                                            <select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-w flex-r-m p-b-10">
                                    <div class="size-204 flex-w flex-m respon6-next">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>

                                        <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                                <div class="flex-m bor9 p-r-10 m-r-11">
                                    <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                </div>

                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 95%;margin:auto">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mark the Date</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form method="post" action="check-availability.php" enctype="multipart/form-data">
    
     <!--<input type="hidden" value="<?php //echo $user_data->featured_image; ?>" name="i_name"/>-->
  <input type="hidden" value="<?php echo "https://sofiapi.code7labs.com/UI/uploads/cats-graphic.jpg"?>" name="i_image"/>

    <input type="hidden" value="<?php echo $user_data->id; ?>" name="i_id"/>
    <input type="hidden" value="<?php echo $user_data->Item_name; ?>" name="i_name"/>
    <input type="hidden" value="<?php echo $user_data->size; ?>" name="i_size"/>
    <input type="hidden" value="<?php echo $user_data_brand->name; ?>" name="i_brand"/>
    <input type="hidden" value="<?php echo $user_data->Item_price; ?>" name="i_price"/>
    <input type="hidden" value="<?php echo $user_data->user_id; ?>" name="user_id"/>
    
    
    <input type="text" name="daterange" value="01/01/2022 - 12/15/2023" />
<script>
    $(function() {
  $('input[name="daterange"]').daterangepicker({
    "autoapply": true
  });
  $('.drp-calendar.right').hide();
  $('.drp-calendar.left').addClass('single');

  $('.calendar-table').on('DOMSubtreeModified', function() {
    var el = $(".prev.available").parent().children().last();
    if (el.hasClass('next available')) {
      return;
    }
    el.addClass('next available');
    el.append('<span></span>');
  });
});
</script>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" style="padding:0; box-shadow: none; width:47%; height:40px; margin-right:10px; background-color:#6c757d; color:white" data-bs-dismiss="modal">Close</button> 
    <button type="submit"  class="btn btn-primary" style="width:47%;height:40px; padding:0; box-shadow: none; color: white;text-decoration: none; color:#353535">Check</button>
    
    </form>
      </div>
    </div> 
    

  </div>
</div>


</div>

       </div> 
      
    </div>
  </div>
</div>

    <!-- lightbox js -->
    <script src="lightbox-plus-jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
      $(".button-collapse").sideNav();
    </script>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<!--===============================================================================================-->
    <script src="vendor/slick/slick.min.js"></script>
    <script src="js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/parallax100/parallax100.js"></script>
    <script>
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <script>
        $('.gallery-lb').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                    enabled: true
                },
                mainClass: 'mfp-fade'
            });
        });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $('.js-addwish-b2, .js-addwish-detail').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>
   

    <!--===============================================================================================-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>

</html>