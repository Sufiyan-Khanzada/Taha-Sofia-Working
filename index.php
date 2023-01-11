<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['token'])) {
    $token = "Bearer " . $_SESSION['token'];
} else {

    $token = "Bearer ";
}
//echo $token;


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!--===============================================================================================-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Demo styles -->
    <style>
        .main {
            width: 85%;
            display: block;
            margin: 0 auto;
        }

        .img-wish {
            text-align: center !important;
        }

        .img-wish img {
            width: 100%;
        }

        .img-wish2 {
            text-align: center !important;
        }

        .img-wish2 img {
            width: 100%;
        }

        .button1 {
            background-color: #9DCAEB;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
        }

        #footer1 {
            height: 52px !important;
            margin-left: -28px !important;

        }

        .button3 {
            font-size: 16px;
        }

        .slick-slide {
            margin: 0 27px;
        }
    </style>

</head>



<?php
$msg = "";
// include_once 'constant.php';
$baseurlapi11 = "https://sofiapi.code7labs.com/api/";
$url11 = $baseurlapi11 . "trending-product/";

// Read JSON file
$json_data11 = file_get_contents($url11);

// Decode JSON data into PHP array
$response_data11 = json_decode($json_data11);

// All user data exists in 'data' object
$user_data1111 = $response_data11->data;

//print_r($user_data1111);
// $meal = $user_data->meal;
// $offer = $user_data->offer;
// $category = $user_data->category;
// $offerchunk = array_chunk($offer, 3, true);
// $categorychunk = array_chunk($category, 3);


//print_r($response_data);
// foreach ($user_data1111 as $user_trending) {
// // print_r($user_trending->brands[0]->name);



//   // echo "name: ".$user->id;
//   // echo "<br />";
// }
// print_r($user_data->id);

// $nearby = $user_data1111->brands;
// print_r($nearby);
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
    <header>
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

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="#" class="logo">
                        <img src="images/icons/logo-01.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="index.php">Home</a>
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

                        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="5">
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
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">

            <ul class="main-menu-m">
                <li>
                    <a href="index.php">Home</a>
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


                <form class="wrap-search-header flex-w p-l-15" method="post" action="search.php">
                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- carousel header start -->






    <!-- <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-inner sizecar1">
    <div class="carousel-item active sizecar2">
      <img src="carousel1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item sizecar2">
      <img src="carousel2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item sizecar2">
      <img src="carousel3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
    <div class="swiper mySwiper heightswip">
        <div class="swiper-wrapper">
            <div class="swiper-slide ">
                <div class="carouselindex ">
                    <div class="txtcarind ">

                        <div class="mainheadtxtind">

                            Men Collection 2018

                        </div>

                        <div class="mainheadtxtind1">New Arrivals</div>
                        <div>
                            <a href="product.php">
                                <button class="button-36" role="button">Shop Now</button>
                            </a>
                        </div>

                    </div>
                    <div id="carouselimgind1">
                        <!-- <img src="carousel3.png" /> -->
                    </div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="carouselindex">
                    <div class="txtcarind">
                        <div class="mainheadtxtind">

                            Women Collection 2018

                        </div>

                        <div class="mainheadtxtind1">New Arrivals</div>
                        <div>
                            <a href="product.php">
                                <button class="button-36" role="button">Shop Now</button>
                            </a>
                        </div>
                    </div>
                    <div id="carouselimgind2"></div>

                </div>
            </div>
            <div class="swiper-slide">
                <div class="carouselindex">
                    <div class="txtcarind">
                        <div class="mainheadtxtind">

                            Watch Collection 2018

                        </div>

                        <div class="mainheadtxtind1">New Arrivals</div>
                        <div>
                            <a href="product.php">
                                <button class="button-36" role="button">Shop Now</button>
                            </a>
                        </div>
                    </div>
                    <div id="carouselimgind3">

                    </div>

                </div>
            </div>




            <!-- <div class="swiper-slide"> 
            <div class="carouselindex">
                <div></div>
                <div class="carouselimgind"></div>

            </div>
        </div> -->
            <!-- <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div> -->
        </div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- <div class="moreproducts1">

<a href="moreproduct.php"><button class="button1 button3 ">Browse More</button></a>
    
</div> -->




    <?php
    ///////////Recommended API/////////

    $msg = "";
    // include_once 'constant.php';
    $baseurlapi112 = "https://sofiapi.code7labs.com/api/";
    $url112 = $baseurlapi112 . "recommeded-products";



    $options1 = array(
        'http' => array(
            'method' => "GET",
            'header' => "Accept-language: en\r\n" .
                "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
                "Authorization: " . $token . "" // i.e. An iPad 

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












    <!-- carousel header end -->

    <!-- Recommended start -->
    <div class="recind">
        <span class="recindtxt">Recommended For You</span>

    </div>
    <!-- recommended end -->

    <!-- recommended carousel start -->



    <!-- recommended carousel end -->
    <!-- <section class="pt-5 pb-5">
  <div class="container text-center">
    <div class="row">
        
        
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" style="margin-left:30px">

                <div class="carousel-inner" style="display:flex;justify-content:flex-start">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card" style="width: 18rem;">
                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                <div class="card-body">
                                  <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text">Brand New Watch</p>

                                 <p class="card-text" ><small class="text-muted">Louis Vuitton</small></p>
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                </div>
                              </div>

                            </div>
                            <div class="col-md-4 mb-3">
                                 <div class="card" style="width: 18rem;">
                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                <div class="card-body">
                                   <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text">Brand New Watch</p>
                                 <p class="card-text" ><small class="text-muted">Louis Vuitton</small></p>
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card" style="width: 18rem;">
                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                <div class="card-body">
                                   <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text">Brand New Watch</p>
                                 <p class="card-text" ><small class="text-muted">Louis Vuitton</small></p>
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                 <div class="card" style="width: 18rem;">
                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                <div class="card-body">
                                   <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text">Brand New Watch</p>
                                 <p class="card-text" ><small class="text-muted">Louis Vuitton</small></p>
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                 <div class="card" style="width: 18rem;">
                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                <div class="card-body">
                                   <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text">Brand New Watch</p>
                                 <p class="card-text" ><small class="text-muted">Louis Vuitton</small></p>
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                 <div class="card" style="width: 18rem;">
                                <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                <div class="card-body">
                                   <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text">Brand New Watch</p>
                                 <p class="card-text" ><small class="text-muted">Louis Vuitton</small></p>
                               
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                  
                                </div>
                              </div>
                                </div>
                            </div>

                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- <div class="col-6 text-right"> 
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
              <i class="fas fa-dot-circle"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
               <i class="fas fa-dot-circle"></i>
            </a>
        </div>-->
    <!-- </div> 
</section> -->
    <div class="main">
        <div class="slider slide-show">

            <!-- 1st -->

            <?php

            foreach ($user_data112 as $user112) {
            ?>
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <a href='product-detail.php?id=<?php echo $user112->id; ?>'>
                            <img src="<?php echo $user112->Item_image; ?>" alt="IMG-PRODUCT">
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
                            <p class="card-text"><small class="text-muted">
                                    <?php echo  $user112->brands['0']->name; ?>
                                    <span style="color:<?php echo  $user112->color; ?>">|</span> <span><?php echo  $user112->size; ?></span></small>
                            </p>
                        </div>


                        <div class="block2-txt-child2 flex-r p-t-3">
                            <?php
                            if (isset($favid)) {
                                if (in_array($user112->id, $favid)) {
                                    echo '
                                            <a href="delete_fav.php?id=' . array_search($user112->id, $fav_id) . '" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-02.png" alt="ICON">
                                    </a>';
                                } else {
                                    echo '<a href="detail-fav.php?id=' . $user112->id . '" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                    </a>';
                                }
                            }
                            else {
                                    echo '<a href="detail-fav.php?id=' . $user112->id . '" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                    </a>';
                                }

                            ?>
                        </div>
                        <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn4 trans-04 m-r-8 m-tb-4">
                            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>

                            <a href="product-detail.php?id=<?php echo $user112->id; ?>" style="text-decoration: none; padding:8px; ">€<?php echo $user112->Item_price; ?>/Day</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>

    <!-- more products start -->
    <div class="moreproducts">
        <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn4 trans-04 m-r-8 m-tb-4">
            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
            <a href="product.php" style="text-decoration: none; padding:12px; ">Browse More</a>
        </div>
    </div>
    <!-- more products end -->

    <!-- trending start -->
    <div class="recind">
        <span class="recindtxt">Trending</span>

    </div>
    <!-- trending end -->

    <!-- trending carousel start -->
    <div class="main">
        <div class="slider slide-show">






            <?php

            foreach ($user_data1111 as $user111) {


            ?>
                <!-- 1st -->
                <div class="block2">

                    <div class="block2-pic hov-img0">

                        <a href='product-detail.php?id=<?php echo $user111->id; ?>'>
                            <img src="<?php echo $user111->Item_image; ?>" alt="IMG-PRODUCT">
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14" style="justify-content: center;">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                <?php echo $user111->Item_name ?>
                            </a>
                            <p class="card-text"><small class="text-muted">
                                    <?php echo $user111->brands[0]->name ?>
                                    <span style="color:#C5C5C5">|</span> <span><?php echo $user111->size ?></span></small>
                            </p>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="add-fav.php?id=<?php echo $user111->id; ?>" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                        <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn4 trans-04 m-r-8 m-tb-4">
                            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                            <a href="product-detail.php" style="text-decoration: none; padding:8px; ">€<?php echo $user111->Item_price ?>/Day</a>
                        </div>
                    </div>
                </div>

            <?php
            } ?>
            <!-- 2nd -->
            <!--                         <div class="block2">
                            <div class="block2-pic hov-img0">
                                <a href="product-detail.php">
                                 <img src="product3.jpg" alt="IMG-PRODUCT">
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14" style="justify-content: center;">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										Esprit Ruffle Shirt
									</a>
                                     <p class="card-text" ><small class="text-muted">
                                        Louis Vuitton 
                                        <span style="color:#C5C5C5">|</span> <span>xl</span></small>
                                    </p>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                    </a>
                                </div>
                                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn4 trans-04 m-r-8 m-tb-4">
						            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                                    <a href="product-detail.php" style="text-decoration: none; padding:8px; ">€39.55/Day</a> 
					            </div>
                            </div>
                        </div>

 -->
            <!-- 3rd -->
            <!--                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <a href="product-detail.php">
                                 <img src="product4.jpg" alt="IMG-PRODUCT">
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14" style="justify-content: center;">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										Esprit Ruffle Shirt
									</a>
                                     <p class="card-text" ><small class="text-muted">
                                        Louis Vuitton 
                                        <span style="color:#C5C5C5">|</span> <span>xl</span></small>
                                    </p>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                    </a>
                                </div>
                                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn4 trans-04 m-r-8 m-tb-4">
						            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                                    <a href="product-detail.php" style="text-decoration: none; padding:8px; ">€39.55/Day</a> 
					            </div>
                            </div>
                        </div>
 -->
            <!-- 4th -->
            <!--                         <div class="block2">
                            <div class="block2-pic hov-img0">
                                <a href="product-detail.php">
                                 <img src="product1.jpg" alt="IMG-PRODUCT">
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14" style="justify-content: center;">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										Esprit Ruffle Shirt
									</a>
                                     <p class="card-text" ><small class="text-muted">
                                        Louis Vuitton 
                                        <span style="color:#C5C5C5">|</span> <span>xl</span></small>
                                    </p>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                    </a>
                                </div>
                                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn4 trans-04 m-r-8 m-tb-4">
						            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                                    <a href="product-detail.php" style="text-decoration: none; padding:8px; ">€39.55/Day</a> 
					            </div>
                            </div>
                        </div>
 -->

            <!-- 6th
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <a href="product-detail.php">
                                 <img src="product4.jpg" alt="IMG-PRODUCT">
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14" style="justify-content: center;">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										Esprit Ruffle Shirt
									</a>
                                     <p class="card-text" ><small class="text-muted">
                                        Louis Vuitton 
                                        <span style="color:#C5C5C5">|</span> <span>xl</span></small>
                                    </p>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                                    </a>
                                </div>
                                <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn4 trans-04 m-r-8 m-tb-4">
						            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                                    <a href="product-detail.php" style="text-decoration: none; padding:8px; ">€39.55/Day</a> 
					            </div>
                            </div>
                        </div>-->
        </div>
    </div>

    <!-- more products start -->
    <div class="moreproducts">
        <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn4 trans-04 m-r-8 m-tb-4">
            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
            <a href="product.php" style="text-decoration: none; padding:12px; ">Browse More</a>
        </div>
    </div>
    <!-- more products end -->


    <!-- trending carousel end -->

    <!-- featured brand start -->
    <div class="recind">
        <span class="recindtxt">Featured Brands</span>


    </div>
    <!-- featured brand end -->
    <?php
    $baseurlapi = "https://sofiapi.code7labs.com/api/";
    $url = $baseurlapi . "all-featured";
    //https://sofiapi.code7labs.com/api/all-featured
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $headers = array(
        "Accept: application/json",
        "Method:GET",
        "Content-Type: application/json",


    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $resp = curl_exec($curl);

    $obj = json_decode($resp);
    if (isset($obj->data)){
    if (!empty($obj->data)) {
    
    ?>

    <!--featured brand carousel start-->

    <div class="main">
        <div class="slider slide-show">
            <?php
            foreach ($obj->data as $a) {
                echo '<div class="block2" >
        <div class="block2-pic hov-img0">
            <a href="branded-user.php?id=' . $a->id . '">
                <img src="' . $a->profile . '" alt="' . $a->name . '">
            </a>
        </div>
    </div>
    ';
            } ?>

        </div>
    </div>
    <?php
    }}
    ?>
    </div>


    <div class="swiper mySwiper1 marswip htlogo">
        <div class="swiper-wrapper  bgnone">
            <div class="swiper-slide bgnone">



            </div>
        </div>
        <div class="swiper-pagination"></div>


        <!-- featured brand carousel end -->

        <div class="gapfoot">

        </div>



        <div class="main-footer">
            <footer class="bg3 p-t-75 p-b-32">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 p-b-50">
                            <h4 class="stext-301 cl0 p-b-30">
                                Categories
                            </h4>

                            <ul>
                                <li class="p-b-10">
                                    <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                        Women
                                    </a>
                                </li>

                                <li class="p-b-10">
                                    <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                        Men
                                    </a>
                                </li>

                                <li class="p-b-10">
                                    <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                        Shoes
                                    </a>
                                </li>

                                <li class="p-b-10">
                                    <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                        Watches
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-3 p-b-50">
                            <h4 class="stext-301 cl0 p-b-30">
                                Help
                            </h4>

                            <ul>
                                <li class="p-b-10">
                                    <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                        Track Order
                                    </a>
                                </li>

                                <li class="p-b-10">
                                    <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                        Returns
                                    </a>
                                </li>

                                <li class="p-b-10">
                                    <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                        Shipping
                                    </a>
                                </li>

                                <li class="p-b-10">
                                    <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                        FAQs
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6 col-lg-3 p-b-50">
                            <h4 class="stext-301 cl0 p-b-30">
                                GET IN TOUCH
                            </h4>

                            <p class="stext-107 cl7 size-201">
                                Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                            </p>

                            <div class="p-t-27">
                                <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                    <i class="fa fa-instagram"></i>
                                </a>

                                <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3 p-b-50">
                            <h4 class="stext-301 cl0 p-b-30">
                                Newsletter
                            </h4>

                            <form>
                                <div class="wrap-input1 w-full p-b-4">
                                    <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
                                    <div class="focus-input1 trans-04"></div>
                                </div>

                                <div class="p-t-18">
                                    <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="p-t-40">
                        <div class="flex-c-m flex-w p-b-18">
                            <a href="#" class="m-all-1">
                                <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
                            </a>

                            <a href="#" class="m-all-1">
                                <img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
                            </a>

                            <a href="#" class="m-all-1">
                                <img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
                            </a>

                            <a href="#" class="m-all-1">
                                <img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
                            </a>

                            <a href="#" class="m-all-1">
                                <img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
                            </a>
                        </div>

                        <p class="stext-107 cl6 txt-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                        </p>
                    </div>
                </div>
            </footer>
            <nav class="mobile-nav">
                <a href="#" class="bloc-icon">
                    <img src="ressources/home.svg" alt="">
                </a>
                <a href="#" class="bloc-icon">
                    <img src="ressources/heart.svg" alt="">
                </a>
                <a href="#" class="bloc-icon">
                    <img src="ressources/magnifying-glass.svg" alt="">
                </a>
                <a href="#" class="bloc-icon">
                    <img src="ressources/plus.svg" alt="">
                </a>
                <a href="#" class="bloc-icon">
                    <img src="ressources/user.svg" alt="">
                </a>
            </nav>
        </div>

        <!-- Back to top -->
        <!-- <div class="btn-back-to-top" id="myBtn">
                  <span class="symbol-btn-back-to-top">
                            <i class="zmdi zmdi-chevron-up"></i>
                  </span>
        </div> -->

        <!-- Back to top -->
        <div class="btn-back-to-top" id="myBtn">
            <span class="symbol-btn-back-to-top">
                <i class="zmdi zmdi-chevron-up"></i>
            </span>
        </div>

        <!-- footer start -->
        <?php include 'footer.php' ?>
        <!-- footer end -->
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.single-item').slick();
            })
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>



        <script>
            $('.slide-show').slick({

                slidesToShow: 3,
                slidesToScroll: 1,

                arrows: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2500,
                responsive: [{
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,

                    }
                }]


            });

            $('.slide-show1').slick({

                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 2500,



            });





            //  function myFunction(x) {
            //             if (x.matches) {
            //                 console.log(33)
            //                 $('.slide-show').slick({
            //    slidesToShow: 1,
            //    slidesToScroll: 1,
            //    arrows: true, 
            //    dots: true,
            //    autoplay:true,
            //   autoplaySpeed:1500,
            //  });
            //             } else {
            //                 $('.slide-show').slick({
            //    slidesToShow: 3,
            //    slidesToScroll: 3,
            //    arrows: true, 
            //    dots: true,
            //    autoplay:true,
            //   autoplaySpeed:1500,
            //  });
            //             }
            //         }

            //         var x = window.matchMedia("(max-width: 700px)")

            //         myFunction(x)
            //         x.addListener(myFunction)
        </script>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <!-- Initialize Swiper -->
        <script>
            // function myFunction(x) {
            //     if (x.matches) {
            //         var swiper = new Swiper(".mySwiper1", {
            //             slidesPerView: 2,
            //             spaceBetween: 30,
            //             autoplay: {
            //                 delay: 2500,
            //                 disableOnInteraction: false,
            //             },
            //             pagination: {
            //                 el: ".swiper-pagination",
            //                 clickable: true,
            //             },
            //         });
            //     } else {
            //         var swiper = new Swiper(".mySwiper1", {
            //             slidesPerView: 4,
            //             spaceBetween: 30,
            //             autoplay: {
            //                 delay: 2500,
            //                 disableOnInteraction: false,
            //             },
            //             pagination: {
            //                 el: ".swiper-pagination",
            //                 clickable: true,
            //             },
            //         });
            //     }
            // }

            // var x = window.matchMedia("(max-width: 700px)")

            // myFunction(x)
            // x.addListener(myFunction)
        </script>

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>

        <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script>
            $('.js-pscroll').each(function() {
                $(this).css('position', 'relative');
                $(this).css('overflow', 'hidden');
                var ps = new PerfectScrollbar(this, {
                    wheelSpeed: 1,
                    scrollingThreshold: 1000,
                    wheelPropagation: false,
                });

                $(window).on('resize', function() {
                    ps.update();
                })
            });
        </script>

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script>
            $('#carouselExampleIndicators2').carousel({
                interval: 10000
            })

            $('.carousel .carousel-item').each(function() {
                var minPerSlide = 1;
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            });
        </script>

        <!-- Initialize Swiper -->
        <script>
            function myFunction(x) {
                if (x.matches) {
                    var swiper = new Swiper(".mySwiper1", {
                        slidesPerView: 2,
                        spaceBetween: 30,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                    });
                } else {
                    var swiper = new Swiper(".mySwiper1", {
                        slidesPerView: 4,
                        spaceBetween: 30,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                    });
                }
            }

            var x = window.matchMedia("(max-width: 700px)")

            myFunction(x)
            x.addListener(myFunction)
        </script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                cssMode: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                mousewheel: true,
                keyboard: true,
            });
        </script>







        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


        <script src="js/main.js"></script>
        <script>
            AOS.init();
        </script>




        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>






</body>

</html>