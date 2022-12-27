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
    <title>Product Upload</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css"> -->
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"> -->

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- <link type="text/css" rel="stylesheet" href="http://example.com/image-uploader.min.css">  -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    .container {
        position: relative;
        width: 160px;
        height: 160px;
    }
    #progressbar li.active:before, #progressbar li.active:after {
    background: #1172c2;
}
    
    .center {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .form-input {
        width: 350px;
        padding: 20px;
        background: #fff;
        box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377), 3px 3px 7px rgba(94, 104, 121, 0.377);
    }
    
    .form-input1 {
        width: 350px;
        padding: 20px;
        background: #fff;
        box-shadow: -3px -3px 7px rgba(94, 104, 121, 0.377), 3px 3px 7px rgba(94, 104, 121, 0.377);
    }
    
    .form-input input {
        display: none;
    }
    
    .form-input label {
        display: block;
        width: 45%;
        height: 45px;
        margin-left: 25%;
        line-height: 50px;
        text-align: center;
        background: #1172c2;
        color: #fff;
        font-size: 15px;
        font-family: "Open Sans", sans-serif;
        text-transform: Uppercase;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .form-input img {
        width: 100%;
        display: none;
        margin-bottom: 30px;
    }
    
    .form-input1 input {
        display: none;
    }
    
    .form-input1 label {
        display: block;
        width: 45%;
        height: 45px;
        margin-left: 25%;
        line-height: 50px;
        text-align: center;
        background: #1172c2;
        color: #fff;
        font-size: 15px;
        font-family: "Open Sans", sans-serif;
        text-transform: Uppercase;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .form-input1 img {
        width: 100%;
        display: none;
        margin-bottom: 30px;
    }
    
    .image {
        display: block;
        width: 160px;
        height: 160px;
    }
    
    .overlay {
        position: absolute;
        width: 160px;
        height: 160px;
        border-radius: 50%;
        opacity: 0;
        transition: .3s ease;
        background-color: black;
    }
    
    .form-input label {
        display: block;
        width: 55%;
        height: 55px;
        margin-left: 25%;
        line-height: 50px;
        text-align: center;
        background: #1172c2;
        color: #fff;
        font-size: 15px;
        font-family: "Open Sans", sans-serif;
        text-transform: Uppercase;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .container:hover .overlay {
        opacity: 1;
    }
    
    .icon {
        color: white;
        font-size: 25px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    
    .fa-user:hover {
        color: #eee;
    }

    /* multiple images */
    

    
html * {
  box-sizing: border-box;
}

p {
  margin: 0;
}

.upload__box {
  padding: 40px;
}
.upload__inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}

.upload__inputfile1 {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.upload__btn {
  display: inline-block;
  font-weight: 600;
  color: #fff;
  text-align: center;
  min-width: 116px;
  padding: 5px;
  transition: all 0.3s ease;
  cursor: pointer;
  border: 2px solid;
  background-color:  rgb(0,123,255);
  border-color: rgb(0,123,255);
  border-radius: 10px;
  line-height: 26px;
  font-size: 14px;
}
.upload__btn:hover {
  background-color: unset;
  color: #4045ba;
  transition: all 0.3s ease;
}
.upload__btn-box {
  margin-bottom: 10px;
}
.upload__img-wrap {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -10px;
}
.upload__img-box {
  width: 200px;
  padding: 0 10px;
  margin-bottom: 12px;
}
.upload__img-close {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 10px;
  right: 10px;
  text-align: center;
  line-height: 24px;
  z-index: 1;
  cursor: pointer;
}
.upload__img-close:after {
  content: "✖";
  font-size: 14px;
  color: white;
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}


    
</style>


<?php
$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."all-brands/";

// Read JSON file
$json_data = file_get_contents($url);
    
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
$user_data_brand_show = $response_data->data;
// $brands = $response_data->brands;


}

//print_r($response_data);
//print_r($user_data);
// foreach ($user_data_brand_show as $user_show_brand){

//   echo "name: ".$user_show_brand->name;
//   echo "<br />";
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
<?php
 
 $aaa =32323;
  $baserurl = 'https://sofiapi.code7labs.com/api/';

if($_GET['id']==null){
    header('location: index.php');

}//print_r($_SESSION);
$api_url = "https://sofiapi.code7labs.com/public/api/single-product/".$id;

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




<?php
$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."update_product/".$_GET['id'];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(isset($_POST['upload'])){


$name=$_POST['item_name'];
$brand=$_POST['brand'];
$type=$_POST['type'];
$itemprice=$_POST['item_price'];
$oneday=$_POST['priceoneday'];
$pricesevenday=$_POST['pricesevenday'];
$category=$_POST['cat'];
$subcategory=$_POST['sub_cat'];
$size=$_POST['size'];
$color=$_POST['color'];
$insuretype=$_POST['insuretype'];
$condition=$_POST['item_condition'];
$descrip=$_POST['description'];
// $tags=$_POST['tags'];
// $demageinfo=$_POST['demageinfo'];
// $demagepic="";
// $proof="";
$user=$_SESSION['name'];



$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
  
    "Item_name":"$name",
    "Item_price":"$itemprice",
    "Item_brand":"$brand",
    "Item_rating":"",
    "username":"$user",
    "Item_mode":"$type",
    "rental_price_week":"$pricesevenday",
    "rental_price_oneday":"$oneday",
    "category":"$category",
    "subcategory":"$subcategory",
    "size":"$size",
    "color":"$color",
    "insuretype":"$insuretype",
    "Item_condition":"$condition",
    "description":"$descrip"


    
    

}
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);



$resp = curl_exec($curl);

$obj = json_decode($resp,true);


// $obj = json_decode($resp,true);
if($obj['status']){
// print_r($obj);


 $msg='<div class="alert alert-success" role="alert">
  Product SuccessFully Updated  Done
</div>';
echo $msg;


}
else
{
 $msg='<div class="alert alert-danger" role="alert">
  Product Not SuccessFully Updated Done
</div>';
echo $msg;


}
}
?>


<body>

    <!-- header start -->

    <div id="profile_header">
        <div class="iconprofileheader">
        <i class=" fa fa-angle-left fa-2x" onclick="history.go(-1)"></i>
        </div>

        <div id="profile_heading">
            <div id="profhead">Edit Product</div>
        </div>
    </div>

    <!-- header end -->

    <!-- content start -->

    <!-- MultiStep Form -->
    <div class="container-fluid upl1" id="grad1" style="width: 94%;">
        <div class="row justify-content-center mt-0" style="display:flex;justify-content:center">
            <div class="col-12 col-sm-6 col-md-8 col-lg-6 text-center p-0 mb-2" style="display:flex;justify-content:center">
                <div class="card px-0 pb-0 mb-3" style="margin: 15px;">

                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" class="mt-0" method="post" action="">
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card" style="box-shadow: none; padding: 20px 15px 30px 15px;">
                                        <h4 class="fs-title mb-4">Edit Product</h4>
                                         <input type="text" name="item_name" placeholder="Product Title" value="<?php  echo 
        $user_data->Item_name;?>" />
                                       
                                         <label>Brand</label>
                                       <select class="form-control select2" name="brand">
                                             <option>Select</option> 
                                             
                                              <option><?php echo $user_data->brand_id; ?></option> 
                                           <?php 
                                          
                                           foreach ($user_data_brand_show as $user_show_brand){
                                        if($user_show_brand->status=="Blacklist"){
                                            ?>
                                            
                                            <option value="<?php echo $user_show_brand->id; ?>" disabled style="color:red;"><?php echo $user_show_brand->name; ?></option> 
                                            <?php
                                        } else{                                     
                                           ?>
             
               <option value="<?php echo $user_show_brand->id; ?>"><?php echo $user_show_brand->name; ?></option> 
<?php
               }}
               ?>
            </select>
                 
                                      
                                        <input type="text" name="type" placeholder="Product Type" value=<?php  echo 
        $user_data->brand_id;?> />
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">€</span>
  </div>
  <input type="text" placeholder="Original Rental Price" name="item_price" class="form-control" aria-label="Amount (to the nearest dollar)" style="width: 70%;" value=<?php  echo 
        $user_data->Item_price;?>>
  <div class="input-group-append">
    <span class="input-group-text" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-info-circle" style="color:#b6b6b6;"></i></span>
  </div>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">€</span>
  </div>
  <input type="text"  name="priceoneday" placeholder="Rental Price for 1 Day" class="form-control" aria-label="Amount (to the nearest dollar)"  style="width: 70%;" value=<?php  echo 
        $user_data->rental_price_oneday;?>>
  <div class="input-group-append">
    <span class="input-group-text" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-info-circle" style="color:#b6b6b6;"></i> </span>
  </div>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">€</span>
  </div>
  <input type="text" placeholder="Rental Price for 7 Day" name="pricesevenday" class="form-control" aria-label="Amount (to the nearest dollar)" style="width: 70%;" value=<?php  echo 
        $user_data->rental_price_week;?> >
  <div class="input-group-append">
    <span class="input-group-text" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-info-circle" style="color:#b6b6b6;"></i></span>
  </div>
</div>


                                        <!-- <input type="text" name="phno_2" placeholder="RRP" /> -->
                                        <!-- <input type="text" name="lname" placeholder="Year Of Production" /> -->
                                        <!-- <input type="text" name="phno" placeholder="Category" /> -->
                                        <div class="size-204 mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="cat" id="category">
                                            <option>Category</option>
                                            <option><?php  echo 
        $user_data->category;?> </option>
                                            <option value="bags">Bags</option>
                                            <option value="Clothes">Clothes</option>
                                            <option value="Shoes">Shoes</option>
                                            <option value="Jewelerry">Jewelerry</option>
                                            <option value="Accessories">Accessories</option>
                                            
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div> 
                                        <!-- <input type="text" name="phno" placeholder="Sub Category" /> -->
                                        <div class="size-204 mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="sub_cat" id="subcategory">
                                            <option>Sub Category</option>
                                            <option><?php  echo 
        $user_data->sub_category;?> </option>
                                            <option value="Handbags">Handbags</option>
                                            <option value="Clutches">Clutches</option>
                                            <option value="Weekender">Weekender</option>
                                            <option value="Backpack">Backpack</option>
                                            <option value="Dresses">Dresses</option>
                                            <option value="Sets">Sets</option>
                                            <option value="Tops">Tops</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div> 
                                         <div class="size-204">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="size" id="size">
                                            <option>Size</option>
                                           <option><?php  echo 
        $user_data->size;?> </option>
                                            <option>Size S</option>
                                            <option>Size M</option>
                                            <option>Size L</option>
                                            <option>Size XL</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div> 
                                        <!-- <input type="text" name="lname" placeholder="Color" /> -->
                                        <div class="size-204 mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="color">
                                            <option>Color</option>
                                            <option><?php  echo 
        $user_data->color;?> </option>
                                            <option>Beige</option>
                                            <option>black</option>
                                            <option>blue</option>
                                            <option>brown</option>
                                            <option>gold</option>
                                            <option>green</option>
                                            <option>grey</option>
                                            <option>multicolored</option>
                                            <option>orange</option>
                                            <option>pink</option>
                                            <option>purple</option>
                                            <option>red</option>
                                            <option>rose</option>
                                            <option>silver</option>
                                            <option>turquois</option>
                                            <option>white</option>
                                            <option>yellow</option>
                                            <option>other</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div> 

                                        <!-- <input type="text" name="phno_2" placeholder="Select Insurance Type" /> -->
                                        <div class="size-204 mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="insuretype">
                                            
                                            <option>Insurance Type</option>
                                            <option><?php  echo 
        $user_data->insuretype;?> </option>
                                            <option>My insurance covers rentals</option>
                                            <option>My insurance doesn't cover rentals or I don't have an insurance</option>
                                            <option>I have an insurance and don't know whether it covers rentals</option>
                                            
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div> 
                                        <!-- <input type="text" name="phno_2" placeholder="Condition Dropdown " /> -->
                                        <div class="size-204 mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="item_condition">
                                            <option>Condition</option>
                                            <option><?php  echo 
        $user_data->Item_condition;?> </option>
                                            <option>New or never used</option>
                                            <option>Like new</option>
                                            <option>Very good condition</option>
                                            <option>Good condition</option>
                      <option>Acceptable condition</option>
                                            
                                        </select>
                    
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    
                                </div> 
                                <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10 " placeholder="Discription"  id="review" name="description" style="border: 1px solid #ccc;"><?php  echo 
        $user_data->description;?> </textarea>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Back" />
                                    <input type="submit"  name="upload" class="action-button btnnext" id="done" value="Continue" />
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content end -->

    <div class="gap4">

    </div>

    
    <!-- footerstart -->
    <?php include 'footer.php' ?>

    <!-- footer end -->

    <script type="text/javascript">
        // function showPreview1(event) {
        //     console.log(44)
        //     if (event.target.files.length > 0) {
        //         var src = URL.createObjectURL(event.target.files[0]);
        //         var preview = document.getElementById("file-ip-1-preview");
        //         preview.src = src;
        //         preview.style.display = "block";
        //     }
        // }

        function showPreview(event) {
            console.log(55)
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-3-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
    <!-- <script>
        function showPreview2(event) {
            console.log(78)
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-2-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script> -->

    <script>
        document.querySelector("#file-ip-1").addEventListener("change",(e)=>{
            if(window.File && window.FileReader && window.FileList && window.Blob){
                const files=e.target.files
                console.log(files)
            }
            else{
                alert("Your Browser doesnot support the file API");
            }
        })
    </script>

<script>
var subjectObject = {
  "Bags": {
    "HandBags": ["One Size","Other"],
    "Cluthes": ["One Size","Other"],
    "Weekender":["One Size","Other"],
    "Backpack":["One Size","Other"],
    "other":["One Size","Other"],
       
  },
  "Cloths": {
    "Dresses":["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Sets": ["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Tops": ["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Pullovers":["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Shorts":["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Skirts":["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Jump Suits":["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Cardigens":["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Coats":["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Trousers":["XS", 'S', 'M', 'L', 'XL', 'XXL', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '2', '4', '6', '8', '10', '12',  '14','16', 'onesize', 'other'],
    "Jackets":["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Beach Fashion":["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
    "Other":["XS", "S", "M", "L", 'XL', 'XXL','EU32' , 'EU34','EU36' , 'EU38', 'EU40', 'EU42', 'EU44', 'EU46', 'EU48', 'IT34','IT36' ,'IT38' , 'IT40', 'IT42', 'IT44', 'IT46', 'IT48', 'IT50', 'onsize', 'other'],
  },
  "Shoes": {
    "High Heels": ['EU36', 'EU37', 'EU38', 'EU39', 'EU40', 'EU41', 'EU42', 'US5', 'US6', 'US7', 'US8', 'US9', 'US10', 'US11', 'others'],
    "Pumps": ['EU36', 'EU37', 'EU38', 'EU39', 'EU40', 'EU41', 'EU42', 'US5', 'US6', 'US7', 'US8', 'US9', 'US10', 'US11', 'others'],
    "Sneakers":['EU36', 'EU37', 'EU38', 'EU39', 'EU40', 'EU41', 'EU42', 'US5', 'US6', 'US7', 'US8', 'US9', 'US10', 'US11', 'others'],
    "Loafers":['EU36', 'EU37', 'EU38', 'EU39', 'EU40', 'EU41', 'EU42', 'US5', 'US6', 'US7', 'US8', 'US9', 'US10', 'US11', 'others'],
    "Sandals":['EU36', 'EU37', 'EU38', 'EU39', 'EU40', 'EU41', 'EU42', 'US5', 'US6', 'US7', 'US8', 'US9', 'US10', 'US11', 'others'],
    "Boots":['EU36', 'EU37', 'EU38', 'EU39', 'EU40', 'EU41', 'EU42', 'US5', 'US6', 'US7', 'US8', 'US9', 'US10', 'US11', 'others'],
    "Espandrilles":['EU36', 'EU37', 'EU38', 'EU39', 'EU40', 'EU41', 'EU42', 'US5', 'US6', 'US7', 'US8', 'US9', 'US10', 'US11', 'others'],
    "Other":['EU36', 'EU37', 'EU38', 'EU39', 'EU40', 'EU41', 'EU42', 'US5', 'US6', 'US7', 'US8', 'US9', 'US10', 'US11', 'others'],
       
  },
  "Jewellery": {
    "Rings": ['52','54' , '56', '58', '60', '62'],
    "Earrings": ['onesize', 'others'],
    "Bracelets":['onesize', 'others'],
    "Necklets":['onesize', 'others'],
    "Headdresses":['onesize', 'others'],
    "Sets":['onesize', 'others'],
    "Watches":['onesize', 'others'],
    "Other":['onesize', 'others'],
       
  },
}
window.onload = function() {
  var subjectSel = document.getElementById("category");
  var topicSel = document.getElementById("subcategory");
  var chapterSel = document.getElementById("size");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    chapterSel.length = 1;
    topicSel.length = 1;
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>

    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function() {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function() {
                return false;
            })

        });
    </script>
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>

<script src="./js/choicefilter.js"></script>

<script>$('.input-images-1').imageUploader();</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- <script>
    var language = document.getElementById("category");
var languages = document.getElementById("subcategory");
language.filtchoices(languages, 
  {
    data:{
      "bags": ["Handbags","Clutches","Weekender","Backpack"],
      "Clothes": ["Dresses","Sets","Tops"]
    },
    showAllChildChoicesWhen: "all" 
});
language.filtchoices(languages, 
  { -->
    <!-- // fires an onChange event on init
    autoFilterOnInit : true, // when initialized fire onchange event
    
    // custom delimiter if your values are strings
    valueDelimiter: ",",  -->
    
    <!-- // wrapper of a child choices
    wrapperSelector: null,
     
    // only data will be updated
    dataOnly: false, 
                
    // exclude choices here
    independentChoices: [],  -->
    
    <!-- // show all child choices with these values
    showAllChildChoicesWhen : [], 
    // auto select these choices after filter
    autoSelectedChoicesAfterFilter : [], // choices which are in this array will 
    
    // choices in child element which are present in every parent
    presentOnEveryParent : [], // 
    // when parent has some value, it will show some elements specified by this selector
    parentControlsVisibilityOf : null, 
    // ignore parent values
    ignoreParentValues : [] 
});
</script> -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById("done").onclick = function() {
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Your Product has been Uploaded',
  showConfirmButton: false,
  timer: 1500
},
)
setTimeout(function redirectother(){
  location.replace("http://localhost/sofia/myproducts.php")
},2000)
    }
         
</script>
<!-- <script>
    $(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);
    
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});



var num = 4;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
}


</script> -->

<script>
    jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];
  var imgWrap1 = "";
  var imgArray1 = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('.upload__inputfile1').each(function () {
    $(this).on('change', function (e) {
      imgWrap1 = $(this).closest('.upload__box').find('.upload__img-wrap1');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray1.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray1.length; i++) {
            if (imgArray1[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray1.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close1").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close1'></div></div></div>";
              imgWrap1.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });


  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });

  $('body').on('click', ".upload__img-close1", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
</script>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- <script type="text/javascript" src="http://example.com/jquery.min.js"></script>
<script type="text/javascript" src="http://example.com/image-uploader.min.js"></script>
 -->


</body>

</html>