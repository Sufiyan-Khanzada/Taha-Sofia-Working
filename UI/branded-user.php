<!DOCTYPE html>
<?php 
session_start();
$id=$_GET['id'];
$token=$_SESSION['token'];


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>

        :root{
            --bs-body-font-size: 22px !important;
        }

        .cardwidth1{
            width: 98%;
        }

        .card {
    --bs-card-spacer-y: 1rem;
    --bs-card-spacer-x: 1rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-border-width: 1px;
    --bs-card-border-color: var(--bs-border-color-translucent);
    --bs-card-border-radius: 0.375rem;
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: calc(0.375rem - 1px);
    --bs-card-cap-padding-y: 0.5rem;
    --bs-card-cap-padding-x: 1rem;
    --bs-card-cap-bg: rgba(0, 0, 0, 0.03);
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: #fff;
    --bs-card-img-overlay-padding: 1rem;
    --bs-card-group-margin: 0.75rem;
    position: relative;
    /* display: flex;
    flex-direction: row; */
    display:grid;
    grid-template-columns:1fr 1.45fr;
    min-width: 0;
    height: var(--bs-card-height);
    word-wrap: break-word;
    background-color: var(--bs-card-bg);
    background-clip: border-box;
    border: var(--bs-card-border-width) solid var(--bs-card-border-color);
    border-radius: var(--bs-card-border-radius);
}
.stext-102 {
    margin: 10px;
    font-size: 14px;
    line-height: 1.7;
}
     
        </style>
</head>

<?php
 
 $aaa =32323;
  $baserurl = 'https://sofiapi.code7labs.com/api/';

if($_GET['id']==null){
    header('location: index.php');

}//print_r($_SESSION);
$api_url = "https://sofiapi.code7labs.com/api/single_user/".$id;

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
    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
        <i class="" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profhead">Profile</div>
        </div>
      <!--   <div class="iconprofileheader">
        <a href="update.php" style="color:black"><i class="fa-solid fa-gear"></i></a>
        </div> -->
    </div>
    <!-- header end -->

    <!-- profile start -->

    <!-- <img src="profile.jpg" height="100%" width="100%" /> -->
    <div class="container  mb-4 p-3 d-flex justify-content-center">
        <div class="card p-4 cardbg cardwidth1"  style="box-shadow:rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;">
            <div class=" image d-flex flex-column justify-content-center align-items-center"> <!-- <button class="btn2 btn-secondary"></button> --> 
<img src="<?php  echo $user_data->profile; ?>" class="rounded-circle" width=100 height=100>
</div>
<div>
<div>        
        <div class="name mt-3" style="display:flex;justify-content:center">
        <span><?php  echo $user_data->name; ?></span>
    </div> 
        <div class="idd" style="display:flex;justify-content:center">
        <span><?php  echo $user_data->username; ?></span></div>
                <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <?php 
                    include 'review-by-user-branded.php';
                    ?>
                    <span class="idd1 st1">
                        <?php
                        
                        $round=round($user_data_featured);
                      
                        if($round==1){
                            ?>
                             <i class="fa-solid fa-star" style="color:yellow"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                               <i class="fa fa-star-o" aria-hidden="true"></i>     
                                <i class="fa fa-star-o" aria-hidden="true"></i>     
                                 <i class="fa fa-star-o" aria-hidden="true"></i>     
                             
                             <?php
                        }

                        else if($round==2){
                            ?>
                             <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                               <i class="fa fa-star-o" aria-hidden="true"></i>     
                                <i class="fa fa-star-o" aria-hidden="true"></i>     
                                 <i class="fa fa-star-o" aria-hidden="true"></i>     
                             
                             <?php
                        }
                        else if($round==3){
                            ?>
                             <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                               <i class="fa fa-star-o" aria-hidden="true"></i>     
                                <i class="fa fa-star-o" aria-hidden="true"></i>     
                             
                             <?php
                        }
                        
                        else if($round==4){
                            ?>
                             <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>     
                              
                             
                             <?php
                        }
                        
                        else if(5){
                            ?>
                             <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>
                               <i class="fa-solid fa-star"></i>                          
                              
                             
                             <?php
                        }
                        
                      ?>
                     
                      
                            
                       
                       
                        </span><span class="idd1">(<?php echo $round; ?>)</span>
                        </div>
                
            </div>
            <?php 
                if($_SESSION['insuretype']=="My insurance doesn't cover rentals or I don't have an insurance"){
?>
 <div class="idd" style="display:flex;justify-content:center;align-items:center">
            <span><i class="fa-sharp fa-solid fa-circle" style="color: red;"></i> </span>&nbsp; <span> <?php  echo $user_data->insuretype; ?> </span>
        </div>

<?php 
                }



              else if($_SESSION['insuretype']=="My insurance covers rentals"){
?>
 <div class="idd" style="display:flex;justify-content:center;align-items:center">
            <span><i class="fa-sharp fa-solid fa-circle" style="color: green;"></i> </span>&nbsp; <span> <?php echo $_SESSION['insuretype']; ?> </span>
        </div>

<?php 
                }


             else if($_SESSION['insuretype']=="I have an insurance and don't know whether it covers rentals"){
?>
 <div class="idd" style="display:flex;justify-content:center;align-items:center">
            <span><i class="fa-sharp fa-solid fa-circle" style="color: yellow;"></i> </span>&nbsp; <span> <?php echo $_SESSION['insuretype']; ?> </span>
        </div>

<?php 
                }    


            ?>
                       <!-- <div id="rat1" style="display:flex;justify-content:center">
            <span>(5.00/5)</span></div> -->
            <div class="d-flex flex-row justify-content-center align-items-center mt-1 inst1"><i class="fa-brands fa-instagram fa-1x"></i></div>
            <!-- <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number">1069 <span class="follow">Followers</span></span>
                </div>
                <div class=" d-flex mt-2"> <button class="btn1 btn-dark">Edit Profile</button> </div>
                <div class="text mt-3"> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center">
                    <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                <div class=" px-2 rounded mt-4 date "> <span class="join">Joined May,2021</span> </div> -->
        </div>
    </div>
    </div>
</div>
    <!-- profile end -->
    <div class="del1 head1txt" style="margin: 0; padding-left:22px;">Profile Description</div>
    <div class="stext-102" id="#" style="margin: 10px 20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eleifend nunc justo, a dictum risus faucibus vitae.</div>
    <!-- accordation start -->


    <ul class="list-group" style="margin-top: 20px;">
        
       
        <a href="branded-user-products.php" class="ancacc"><li class="list-group-item "> Products <span style="float: right;"><i class="fa fa-angle-right"></i></span></li></a>
        <a href="branded-user-reviews.php" class="ancacc"><li class="list-group-item ">Reviews <span style="float: right;"><i class="fa fa-angle-right"></i></span></li></a>
        <!-- <a href="update.php" class="ancacc"><li class="list-group-item ">Update Profile</li></a> -->
      </ul>

    <!-- <div class="accordion accmar allinone" id="accordionExample">
        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingOne">
                <a href="favourite.php" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              Favourites
              
            </button></a>

            </h2>
        </div>

        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingTwo">
                <a href="reviews.php" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              Reviews
            </button></a>
            </h2>

        </div>

        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingThree">
                <a href="myproducts.php" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              My Products
            </button></a>
            </h2>

        </div>


        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingThree">
                <a href="#" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              Rented Products
            </button></a>
            </h2>

        </div>


        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingThree">
                <a href="#" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              Stats
            </button></a>
            </h2>

        </div>

        <div class="accordion-item shadcard">
            <h2 class="accordion-header" id="headingThree">
                <a href="lender_activity.php" class="ancacc"><button class="accordion-button collapsed txt8" type="button">
              Earning
            </button></a>
            </h2>

        </div> -->

    </div>

    <!-- accordation end -->
    <div class="gap4">

    </div>

    <!-- footerstart -->
     <?php include 'footer.php' ?>
    

    <!-- footer end -->


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>

</html>