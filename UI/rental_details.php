<?php
session_start();
$data= $_POST;
extract($_POST, EXTR_SKIP);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .button1 {
            height: 40px;
  background-color: #9DCAEB;
  border: none;
  color: white;
  padding: 15px 21px;
  text-align: center;
  text-decoration: none;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 4px 2px;
  cursor: pointer;
}

.button3 {font-size: 16px;}
    </style>
</head>
<?php 

if(isset($_POST['rejected'])){

 
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






}
?>



<?php 

if(isset($_POST['approved'])){

 
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






}
?>


<body>


    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
            <i class="fa fa-angle-left fa-2x"  onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profheadrev">Rental Details</div>
        </div>
        
    </div>
    <!-- header end -->

    <!-- request sent start -->
    <div id="request_start_rental">
        <div class="date_rental" style="text-transform:uppercase;">
        <?php  
    echo date("d M", strtotime($to)). " - ".date("d M Y", strtotime($from));;  
?></div>
        <div id="req_btn">
            <div class="bigfont">Request Sent</div>
        </div>
    </div>
    <!-- request sent end -->

    <!-- profile start -->
    <div id="profile_rental" style="margin-top: 10px;">
        <div id="imgprogrental" <?php echo 'style="background-image:url('.$Item_image.'); background-size: contain;"';?>></div>
        <div id="contentprogrental">
            <div class="low1 low2"><?php echo $Item_name;?></div>
            <div class="low1"><?php echo $category_id.', '.$brand_id;?> </div>
        </div>
    </div>
    <!--  profile end-->

    <!-- calender start -->
    <div id="calrental">
        <div class="disflex" style="width:50%;"><i class="fa-solid far fa-calendar fa-2x"></i></div>
        <div class="disflex1">
            <div class="date_rental" style="margin-left: -30px; color:black;text-transform:uppercase;">  <?php  
    echo date("d M", strtotime($to)). " - ".date("d M Y", strtotime($from));;  
?></div>
        </div>
    </div>
    <!-- calender end -->

    <!-- price start -->
    <div class="del1">PRICE DETAILS</div>
    <div class="subdel5">
    <ul class="list-group" style="border-bottom: 1px solid #76767691; margin-left:10px; margin-right:10px;">
    <div><li class="list-group-item " style="border: none;"><div class="picdet" style="background-color:white">
        <div class="picdet1">
            <div class="picdet3">$13 x 3 days</div>
        </div>
        <div class="picdet1 juscent">
            <div class="picdet3" style="margin-left: 100px;">$39.00</div>
        </div>
        
    </div></li></div>
    <div><li class="list-group-item " style="border: none;"><div class="picdet" style="background-color:white">
        <div class="picdet1">
            <div class="picdet3">Service Fee (21%)</div>
        </div>
        <div class="picdet1 juscent">
            <div class="picdet3" style="margin-left: 100px;">$8.91</div>
        </div>
        
    </div></li></div>
    <div><li class="list-group-item " style="border: none;"><div class="picdet" style="background-color:white">
        <div class="picdet1">
            <div class="picdet3" style="color: black; font-weight:600;">Total</div>
        </div>
        <div class="picdet1 juscent">
            <div class="picdet3" style="color: black; font-weight:600; margin-left: 100px;">$47.91</div>
        </div>
        
    </div></li></div>
    </ul>
        <!-- <div>
            <div class="subdel11">
                <div class="subdel21 bigfont">Service Fee (21%)</div>
                <div class="subdel111 subdel21 bigfont">$8.91</div>
            </div>
        </div> -->
        <!-- <div>
            <div class="subdel11">
                <div class="bigfont">Total</div>
                <div class="subdel111 bigfont">$47.91</div>
            </div>
        </div> -->

    </div>
    <!-- price detail end -->

    <!-- About rental start-->
    <div class="del1" style="margin-top: 20px;  margin-bottom: 20px;">ABOUT RENTER</div>
    <!-- profile start -->
    <div id="rendetprof" style="box-shadow: none; padding:0;">
        <div id="renderprof1">
            <div class="renderprof2" style="align-items: center;">
                <div id="teea1pic"></div>
            </div>

            <div style="display: flex; justify-content: center; flex-direction: column;">
                <div class="bigfont">_niki_</div>
                <div><i class="fa-solid fa-star favcol"></i><i class="fa-solid fa-star favcol"></i><i class="fa-solid fa-star favcol"></i><i class="fa-solid fa-star favcol"></i><i class="fa-solid fa-star favcol"></i></div>
            </div>
        </div>
    </div>
    <!-- profile end -->
    <div class="addressfiled" style="margin:10px;">
    <input type="text" name="fname" placeholder="House no#65, Street 63 " style="width: 90%; margin:10px;"/>
    <div class="devider"  style="display: flex; margin:10px;">
    <input type="text" name="fname" placeholder="islamabad " style="width: 45%;"/>
    <input type="text" name="fname" placeholder="53000 " style="width: 45%; margin-left:15px;"/>
    </div>
    </div>
    <!-- about rental end -->

    <!-- first message start -->
    <div class="del1" style="margin-top: 40px;">THE FIRST MESSAGE FROM YOUR RENTER</div>
    <div class="bigfont" style="margin-top: 10px;color: rgb(164, 140, 140); padding-left: 15px;padding-right: 15px;">
        Hey, I would love to rent this for a wedding I'm attending. I'll be returning via Royal Mail.
    </div>
    <!-- first message end -->

    <!-- delivery INFO START -->
    <div class="del1" style="margin-top: 40px; padding-bottom:10px; border-bottom: 1px solid #c6c3e391;">DELIVERY INFO</div>
    <div id="btndelinfo" style="margin-top: 20px;">
        <div id="reject" class="bigfont">Reject
            
        </div>
        <div id="accept" class="bigfont">
            <a  data-toggle="modal" data-target="#exampleModalCenter" href="myproducts.php" style="text-decoration: none; color:white;">
            <div style="padding: 10px 20px;">Accept</div>
            </a>
        </div>
    </div>
    <!-- Delivery INFO END -->

<!-- Modal Replay -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Write a Message</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review" style="height: 70px; border: 1px solid #e6e6e6; margin-top:10px; width:100%;"></textarea>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button id="accept1" type="button" class="btn btn-primary" style="background-color: #fff; color:#888; margin-left:10px"> Submit</button>
</div>
</div>
</div>
</div>

    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!-- footer end -->




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.getElementById("accept1").onclick = function() {
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Your Accept the Request',
  showConfirmButton: false,
  timer: 1500
},
)
setTimeout(function redirectother(){
  location.replace("http://localhost/sofia-ui-master/rented_product.php")
},2000)
    }

    document.getElementById("reject1").onclick = function() {
        Swal.fire({
  position: 'center',
  icon: 'error',
  title: 'You Reject the Request',
  timer: 1500
},
)
setTimeout(function redirectother(){
  location.replace("http://localhost/sofia/")
},2000)
    }
         
</script>
</body>

</html>