<!DOCTYPE html>
<?php 
session_start();
$id=$_GET['id'];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product detail</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
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




?>

<body>

    <!-- navbar start -->
    <div id="navbar1">
        <div class="nav1"><i class="fa-solid fa-bars fa-2x"></i></div>
        <div id="nav2">
            <span id="navbar22"><?php $user_data->Item_name; ?></span>
        </div>
        <div class="nav1">
            <i class="fa-solid fa-ellipsis fa-2x"></i>
        </div>
    </div>
    <!-- navbar end -->

    <!-- sub navbar start -->
    <div id="subnavbar1">
        <div class="icon1nav"><i class="fa-solid fa-arrow-left fa-2x"></i></div>
        <div id="start1">
            <div id="star"></div>
        </div>
    </div>
    <!-- sub navbar end -->

    <!-- pic start -->
    <div id="package">
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">

                    </div>
                    <div class="col-6 text-right">

                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic111"></div>



                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic222"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic333"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic444"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic555"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic666"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic777"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic888"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic999"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- pic end -->

    <!-- productdetail start -->
    <div id="txt1">

        <div>Louis Voitton Twist<i class="fa-solid fa-heart fa-1x"></i></div>
    </div>
    <div id="txt2">
        <div>numquam blanditiis harum quisquam</div>
        <div>blanditiis harum quisquam</div>
        <div>harum quisquam</div>
        <div id="star1"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <div>5.00/5</div>
    </div>
    <!-- productdetail end -->

    <!-- pricing start -->
    <div id="price1prod">
        <div>
            <div id="mainprice">$ 34.25 / day</div>
            <div>min: 4 days</div>
            <div>max: 14 dayss</div>
        </div>
        <div id="btncheck">
            <button id="checkavail">Check Availibility</button>
        </div>
    </div>
    <!-- pricing end -->

    <!-- other des start -->
    <div id="otherdes">
        <div class="maindesc">Product Description</div>
        <div>This bag is from the 2019 cruise collection by Louis Vuitton. It is spacious and clean. No damages, only normal wear and tear. Silver buckle.</div>
        <span class="maindesc">Color: </span><span>black</span><br/>
        <span class="maindesc">Condition: </span><span>Good</span>
        <div>Normal wear and tear that you can see with the bucket and edges, please refer to pictures</div>
    </div>
    <!-- other des end -->
    <div style="margin-top: 20px;margin-bottom:20px">
        <div class="recprod">
            <div class="prodrec">
                <a href="productdetail.php">
                    <div id="imgprod1">

                    </div>
                </a>
                <div class="headrecprod">aliquid culpa officia aut!</div>
                <div class="bodyrec">similique accusantium nemo</div>
                <div class="bodyrec">eveniet aliquid culpa</div>
            </div>
            <div class="prodrec">
                <div id="imgprod2">

                </div>
                <div class="headrecprod">aliquid culpa officia aut!</div>
                <div class="bodyrec">similique accusantium nemo</div>
                <div class="bodyrec">eveniet aliquid culpa</div>
            </div>
        </div>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>

</html>