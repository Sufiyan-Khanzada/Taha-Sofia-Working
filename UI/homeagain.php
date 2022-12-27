<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <script>
        $(function() {
            $('a[href*=\\#]:not([href=\\#])').on('click', function() {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 500);
                    return false;
                }
            });
        });
    </script>
</head>

<body>
    <!-- header start -->
    <div id="upperpichome">
        <div id="iconupperhome"><i class="fa-solid fa-bars fa-3x"></i></div>
    </div>
    <!-- header end -->

    <!-- slider start -->
    <div id="slidercoll">
        <span id="collectionhome">Collections</span>
    </div>
    <!-- packages start -->
    <div id="package">
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">

                    </div>
                    <div class="col-6 text-right">
                        <a class="btn  btn3 mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                        <a class="btn btn3 mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic1"></div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>


                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic2"></div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic3"></div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic4"></div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic5"></div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic6"></div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic7"></div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic8"></div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic9"></div>
                                                <div class="cardtxt1">Lorem ipsum dolor sit</div>
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
    <!-- packages end -->
    <!-- slider end -->

    <!--  Recommended start-->

    <div class="reccoll">
        <span class="rechome">Recommended for you</span>
    </div>

    <!-- Recommended end-->
    <!-- recommended product start -->
    <div class="recprod">
        <div class="prodrec">
            <a href="productdetail.html">
                <div id="imgprod1">
                    <div class="like1"><i class="fa-solid fa-heart fa-2x"></i></div>
                </div>
            </a>
            <div class="headrecprod">aliquid culpa officia aut!</div>
            <div class="bodyrec">similique accusantium nemo</div>
            <div class="bodyrec">eveniet aliquid culpa</div>
        </div>
        <div class="prodrec">
            <div id="imgprod2">
                <div class="like1"><i class="fa-solid fa-heart fa-2x"></i></div>
            </div>
            <div class="headrecprod">aliquid culpa officia aut!</div>
            <div class="bodyrec">similique accusantium nemo</div>
            <div class="bodyrec">eveniet aliquid culpa</div>
        </div>
    </div>
    <!-- recommended product end-->

    <!-- more products button start -->
    <div class="moreprod"><button class="btn1prod">More Products</button></div>
    <!-- more products button end -->

    <!--  trending start-->

    <div class="reccoll">
        <span class="rechome">Trending</span>
    </div>

    <!-- trending end-->
    <!-- trending product start -->
    <div class="recprod">
        <div class="prodrec">
            <a href="productdetail.html">
                <div id="imgprod3">
                    <div class="like1"><i class="fa-solid fa-heart fa-2x"></i></div>
                </div>
            </a>
            <div class="headrecprod">aliquid culpa officia aut!</div>
            <div class="bodyrec">similique accusantium nemo</div>
            <div class="bodyrec">eveniet aliquid culpa</div>
        </div>
        <div class="prodrec">
            <div id="imgprod4">
                <div class="like1"><i class="fa-solid fa-heart fa-2x"></i></div>
            </div>
            <div class="headrecprod">aliquid culpa officia aut!</div>
            <div class="bodyrec">similique accusantium nemo</div>
            <div class="bodyrec">eveniet aliquid culpa</div>
        </div>
    </div>
    <!-- trending product end-->

    <!-- more products button start -->
    <div class="moreprod"><button class="btn1prod">More Products</button></div>
    <!-- more products button end -->

    <!-- featured brands start -->
    <div class="reccoll">
        <span class="rechome">Featured Brands</span>
    </div>

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
                                                <div id="sliderpic11"></div>



                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic22"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic33"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic44"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic55"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic66"></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic77"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic88"></div>

                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <div id="sliderpic99"></div>

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
    <!-- featured brand end -->

    <!-- footer start -->

    <?php include 'footer.php' ?>


    <!-- footer end -->





    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>

</html>