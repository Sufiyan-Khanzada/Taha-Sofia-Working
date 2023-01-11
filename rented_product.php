<!DOCTYPE html>
<?php 
session_start();
$token="Bearer ".$_SESSION['token'];
$user_id1=$_SESSION['id'];

$prod_id="";
//echo $token;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rented Product</title>
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        p{
            margin-top: 0;
    margin-bottom:0 !important;
        }
        a{
            color: #007bff;
    text-decoration: none;
    background-color: transparent;
        }
        /* .img-wish {
    text-align: center !important;
} */

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    height: 120px;
   
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

.text2{
    float: right;
}

/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
} 

.select-selected {
  background-color: white;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #343a40;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: rgb(0 0 0 / 15%);
  cursor: pointer;
  user-select: none;
  font-size: 14px;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: white;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
.button3 {font-size: 16px;}

#display-image{
  width: 100%;
  height: 120px;
  border: 1px solid #e6e6e6;
  background-position: center;
  background-size: cover;
}

    </style>
</head>
<?php

$msg="";
if(isset($_POST['submit'])){


$review=$_POST['review'];
$review_img=$_POST['image'];
$id=$_SESSION['id'];
$prod_id=$_POST['pr_id'];
$place_rating=$_POST['values_get'];
 
  $baseurlapi="https://sofiapi.code7labs.com/api/";
$api_url12 = $baseurlapi."add-reviews";

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $api_url12);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  
  
$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
    "Authorization: ".$token.""
);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  
 
$data= <<<DATA
{
  
  "user_id":"$id",    
    "product_id":"$prod_id",
    "reviews":"$review",
    "review_image":"$review_img",
    "rating":"5"  
  
  
  }
DATA;



  // echo $data;
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  
  $resp = curl_exec($curl);
  
 



$response_data12 =json_decode($resp);




$profileadddata = $response_data12;



// if($response_data12==""){

// echo $msg="Products Not Found";

// }

// foreach($profileadddata as $user){

// echo $profileadddata[0]->Item_name;

// }



print_r($data);
print_r($response_data12);
}

 ?>


<?php
$msg="";

// include_once 'constant.php';
$baseurlapi_rent="https://sofiapi.code7labs.com/api/";
$url_rent = $baseurlapi_rent."rented-product-by-buyer/".$user_id1;
if(file_exists($url_rent)){


$options_rent = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);
$context113_rent = stream_context_create($options_rent);

// Read JSON file
$json_data_rent = file_get_contents($url_rent, false, $context113_rent);
    
// Decode JSON data into PHP array

// All user data exists in 'data' object

// $meal = $user_data->meal;
// $offer = $user_data->offer;
// $category = $user_data->category;
// $offerchunk = array_chunk($offer, 3, true);
// $categorychunk = array_chunk($category, 3);


$response_data_rent = json_decode($json_data_rent);
$user_data_rent = $response_data_rent->data;
// $brands = $response_data->brands;



//print_r($response_data);
//print_r($user_data_rent);
// foreach ($user_data_rent as $user_rent) {

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

}
else{
$user_data_rent="";
}?>




























<body>
    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
            <i class="fa fa-angle-left fa-2x" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profheadrev">Rented Products</div>
        </div>
        <!-- <div class="iconprofileheader">
        <a href="update.php" style="color:black"><i class="fa-solid fa-gear fa-2x"></i></a>
        
        </div> -->
    </div>
    <!-- header end -->

    <!-- <div style="margin-bottom:50%">
        <div class="myproducts">
            <div class="prod1">
                <div class="imgprod1"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>


            <div class="prod1">
                <div class="imgprod2"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>
        </div>
        <div class="myproducts">
            <div class="prod1">
                <div class="imgprod3"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>


            <div class="prod1">
                <div class="imgprod4"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>
        </div>
        <div class="myproducts">
            <div class="prod1">
                <div class="imgprod5"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="fav1">
<?php
if($user_data_rent!=""){
    
    

foreach ($user_data_rent as $user_rent) {
if($user_rent->request_status=="approved"){
    $prod_id=$user_rent->product_id;

?>



    <div  class="img-wish" style="margin: 6px;">
        
                             <div class="card" style="width: 100%; border:none;">
                                <img class="img-fluid" alt="100%x280" src="product1.jpg" style="width: 100%;">
                                <i data-toggle="modal" data-target="#exampleModalCenter" class="fa-regular fa-message" style="position:absolute; left:85%; top:3%; color:#fff;"></i>
                                <div class="card-body" style="padding: 8px;">
                                    
                                  <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text" style="color: black;"><?php echo $user_rent->products[0]->Item_name; ?></p>
                                 <small class="text-muted" ><?php echo $user_rent->products[0]->brand_id; ?> | <?php echo $user_rent->products[0]->size; ?> </small>
                                 <small class="text2" style="color: green;"><?php echo $user_rent->request_status; ?></small>

                                 
                                <center>
                                 <a href="#" class="btn btn-primary">€ <?php echo $user_rent->products[0]->Item_price; ?> / Day</a>
                                  </center>
                                </div>
                              </div>
                              <?php
                              
}else if($user_rent->request_status=="pending"){
    
    
    
    
    ?>
    
     <div  class="img-wish" style="margin: 6px;">
        
                             <div class="card" style="width: 100%; border:none;">
                                <img class="img-fluid" alt="100%x280" src="product1.jpg" style="width: 100%;">
                                <!--<i data-toggle="modal" data-target="#exampleModalCenter" class="fa-regular fa-message" style="position:absolute; left:85%; top:3%; color:#fff;"></i>-->
                                <div class="card-body" style="padding: 8px;">
                                    
                                  <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text" style="color: black;"><?php echo $user_rent->products[0]->Item_name; ?></p>
                                 <small class="text-muted" ><?php echo $user_rent->products[0]->brand_id; ?> | <?php echo $user_rent->products[0]->size; ?> </small>
                                 <small class="text2" style="color: Orange;"><?php echo $user_rent->request_status; ?></small>

                                 
                                <center>
                                 <a href="#" class="btn btn-primary">€ <?php echo $user_rent->products[0]->Item_price; ?> / Day</a>
                                  </center>
                                </div>
                              </div>
    <?php
}
else if($user_rent->request_status=="rejected"){

?>
     <div  class="img-wish" style="margin: 6px;">
        
                             <div class="card" style="width: 100%; border:none;">
                                <img class="img-fluid" alt="100%x280" src="product1.jpg" style="width: 100%;">
                                <!--<i data-toggle="modal" data-target="#exampleModalCenter" class="fa-regular fa-message" style="position:absolute; left:85%; top:3%; color:#fff;"></i>-->
                                <div class="card-body" style="padding: 8px;">
                                    
                                  <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text" style="color: black;"><?php echo $user_rent->products[0]->Item_name; ?></p>
                                 <small class="text-muted" ><?php echo $user_rent->products[0]->brand_id; ?> | <?php echo $user_rent->products[0]->size; ?> </small>
                                 <small class="text2" style="color: red;"><?php echo $user_rent->request_status; ?></small>

                                <center>
                                 <a href="#" class="btn btn-primary">€ <?php echo $user_rent->products[0]->Item_price; ?> / Day</a>
                                  </center>
                                  
                                </div>
                              </div>
<?php
}
}
?>
<!--                              <div class="custom-select"  style="width:100%;"  >-->
<!--  <select >-->
    <!-- <option value="0">Select car:</option> -->
<!--    <option value="1"  selected>Availible For Rent</option>-->
<!--    <option value="1">Availible For Rent</option> -->
<!--    <option value="2">Waiting For Return</option>-->
<!--    <option value="3">Waiting For Shipment</option>-->
    
<!--  </select>-->
<!--</div>-->



</div>

<?php
}
?>





</div>

<!-- Modal Review -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Write a Review</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form method="post" action="">
    	<input type="hidden"   class="form-control" name="values_get" id="get_values" required />
					
<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" placeholder="Write your message" id="review" name="review" style="height: 70px; border: 1px solid #e6e6e6; margin-top:10px; width:100%;"></textarea>
<input type="hidden" name="pr_id" value="<?php echo $prod_id; ?>">
<input type="file" id="image-input" name="image" accept="image/jpeg, image/png, image/jpg" style="width: 100%; padding:5px;">
<div id="display-image"></div>

  <div>
                <h3>Rating:</h3>
                <span id="1" style="font-size:20px; cursor:pointer;"  class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)" ></span>
                <span id="2"  style="font-size:20px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
                <span id="3"  style="font-size:20px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
                <span id="4"  style="font-size:20px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
                <span id="5"  style="font-size:20px; cursor:pointer;" class="fa fa-star" onmouseover="startRating(this)" startRating="starmark(this)"></span>
                
            

</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary" style="background-color: #fff; color:#888; margin-left:10px" name="submit"> Submit Review</button>
</div>
</form>

</div>
</div>
</div>

    </div>

    <div class="moreproducts1">

<a href="productupload.php"><button class="button1 button3 ">Upload More Products</button></a>
    
</div>

<div class="gapgap1"></div>

    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!-- footer end -->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>

  <script>
    const image_input = document.querySelector("#image-input");
image_input.addEventListener("change", function() {
  const reader = new FileReader();
  reader.addEventListener("load", () => {
    const uploaded_image = reader.result;
    document.querySelector("#display-image").style.backgroundImage = `url(${uploaded_image})`;
  });
  reader.readAsDataURL(this.files[0]);
});
  </script>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
<script>
    
var count = 0;

function result(){
    if(count != 0){
        document.getElementById('result').innerHTML =
        "<h4>Rating: <label class='text-primary'>" + count + "</label></h4>"
        +
        + "<h4>Review</h4>"
        + "<p>"+document.getElementById("review").value+"</p>"
                ;

    }else{
    }
}

function startRating(item){
    count=item.id[0];
    sessionStorage.star = count;
    for(var i=0;i<5;i++){
        if(i<count){
            document.getElementById((i+1)).style.color="yellow";

        }
        else{
            document.getElementById((i+1)).style.color="black";
        }
    }
//document.getElementById("get_values").value=count;



}
// var count = 0;

// function result(){
// 	if(count != 0){
// 		document.getElementById('result').innerHTML =
// 		"<h4>Rating: <label class='text-primary'>" + count + "</label></h4>"
// 		+
// 		+ "<h4>Review</h4>"
// 		+ "<p>"+document.getElementById("review").value+"</p>"
// 				;

// 	}else{
// 	}
// }

// function startRating(item){
// 	count=item.id[0];
// 	sessionStorage.star = count;
// 	for(var i=0;i<5;i++){
// 		if(i<count){
// 			document.getElementById((i+1)).style.color="yellow";

// 		}
// 		else{
// 			document.getElementById((i+1)).style.color="black";
// 		}
// 	}
// document.getElementById("get_values").value=count;
</script>


</html>