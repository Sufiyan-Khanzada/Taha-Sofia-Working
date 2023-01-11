<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<?php
$token="Bearer ".$_SESSION['token']; 
  $baseurlapi="https://sofiapi.code7labs.com/api/";
$unreadNotification_url = $baseurlapi."get-unread-notification/".$_SESSION['id'];
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $unreadNotification_url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  
  
$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
    "Authorization: ".$token.""
);
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  $json_data_unreadNotification = curl_exec($curl);
  $response_data_unreadNotification =json_decode($json_data_unreadNotification);
?>

<body>

    <!-- header start -->

    <div id="profile_header">
        <div class="iconprofileheader">
            <i class="fa fa-angle-left fa-2x"></i>
        </div>
        <div id="profile_heading">
            <div id="profheadrev">Notification</div>
        </div>
        
    </div>
    <!-- header end -->
<?php
if(isset($response_data_unreadNotification->success)){
    foreach ($response_data_unreadNotification->data as $data){
        if(str_contains($data->data, "wants to rent your product")){
    echo ' <form  method="post" action="rental_details.php" id="'.$data->id.'" style="text-decoration: none;color: black;" enctype="multipart/form-data">
    <input type="hidden" value="'.$data->products[0]->id .'" name="pId"/>
    <input type="hidden" value="'.$data->products[0]->Item_name .'" name="Item_name"/>
    <input type="hidden" value="'.$data->products[0]->Item_image .'" name="Item_image"/>
    <input type="hidden" value="'.$data->products[0]->category_id .'" name="category_id"/>
    <input type="hidden" value="'.$data->products[0]->brand_id .'" name="brand_id"/>
    <input type="hidden" value="'.$data->products[0]->rental_price_week .'" name="rental_price_week"/>
    <input type="hidden" value="'.$data->products[0]->rental_price_oneday .'" name="rental_price_oneday"/>
    <input type="hidden" value="'.$data->rented[0]->id .'" name="rId"/>
    <input type="hidden" value="'.$data->rented[0]->to .'" name="to"/>
    <input type="hidden" value="'.$data->rented[0]->from .'" name="from"/>
    <input type="hidden" value="'.$data->rented[0]->price .'" name="price"/>
    <input type="hidden" value="'.$data->rented[0]->shipment_address .'" name="shipment_address"/>
    <div onClick="document.getElementById(\''.$data->id.'\').submit();" class="notify" style="background-color:#f1f1f1 ;">
    <div class="notifyimg" style="background-image:url('.$data->products[0]->Item_image.'); background-size: contain;"></div>
    <div class="notifypara1">
    <div class="notifypara2">
    <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="notifypara">
        <div>
            <span style="font-weight: bolder;">'. strstr ( $data->data , ' ' , true) .'</span> 
            <p class= "stext-102 c16">'. strstr ( $data->data , ' ' ) .'</p>
        </div>
    </div>
    
    </div>
</div>
</form>
';


    }
    elseif(str_contains($data->data, "waiting for vendor for approval.")){
        $title=$data->data;
        echo ' <div id="'.$data->id.'" style="text-decoration: none;color: black;" >
        <div  class="notify" style="background-color:#f1f1f1 ;">
        <div class="notifyimg" style="background-image:url('.$data->products[0]->Item_image.'); background-size: contain;"></div>
        <div class="notifypara1">
        <div class="notifypara2">
        <i class="fa-solid fa-xmark"></i>
        </div>
        <div class="notifypara">
            <div>
                <span style="font-weight: bolder;">'. strstr ( $title , ':',true ).'</span> 
                <p class= "stext-102 c16">'. explode(':', $title, 2)[1]  .'</p>
            </div>
        </div>
        
        </div>
    </div>
    </div>
    ';
    
        }
      else{
            $title=$data->data;
            echo ' <div id="'.$data->id.'" style="text-decoration: none;color: black;" >
            <div  class="notify" style="background-color:#f1f1f1 ;">
            <div class="notifyimg" style="background-image:url(); background-size: contain;"></div>
            <div class="notifypara1">
            <div class="notifypara2">
            <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="notifypara">
                <div>
                    <span style="font-weight: bolder;">'.$title=$data->data.'</span> 
                </div>
            </div>
            
            </div>
        </div>
        </div>
        ';
        
            }}

}
?>
    <!-- content start -->
    <!-- second -->
    <a href="rental_details.php" style="text-decoration: none;color: black;">
        <div class="notify">
            <div class="notifyimg"></div>
            <div class="notifypara1">
            <div class="notifypara2">
            <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="notifypara">
                <div>
                    <span style="font-weight: bolder;">Valerie92</span>
                    <p class="stext-102 c16"> wants to rent your product "Louis".Review the details and accept or reject the request</p>
                </div>
            </div>
            
            </div>
        </div>
    </a>
    <a href="rental_details.php" style="text-decoration: none;color: black;">
        <div class="notify">
            <div class="notifyimg"></div>
            <div class="notifypara1">
            <div class="notifypara2">
            <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="notifypara">
                <div>
                    <span style="font-weight: bolder;">Valerie92</span> 
                    <p class"stext-102 c16"> wants to rent your product "Louis".Review the details and accept or reject the request</p>
                </div>
            </div>
            
            </div>
        </div>
    </a>
    <a href="rental_details.php" style="text-decoration: none;color: black;">
        <div class="notify">
            <div class="notifyimg"></div>
            <div class="notifypara1">
            <div class="notifypara2">
            <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="notifypara">
                <div>
                    <span style="font-weight: bolder;">Valerie92</span> 
                    <p class"stext-102 c16"> wants to rent your product "Louis".Review the details and accept or reject the request</p>
                </div>
            </div>
            
            </div>
        </div>
    </a>

    <!-- content end -->
    <!-- footer start -->
    <div id="gap1">
    </div>
    <?php include 'footer.php' ?>

    <!-- footer end -->


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>