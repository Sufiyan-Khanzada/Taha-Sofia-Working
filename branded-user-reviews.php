<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
        <!-- lightbox css -->
        <link rel="stylesheet" href="lightbox.css">

<style>
.handle{
display: -webkit-box;
-webkit-box-orient: vertical;
overflow: hidden;
text-overflow: ellipsis;
white-space: normal;
-webkit-line-clamp: 1;
}
</style>
</head>

<body>

    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
        <i class="fa fa-angle-left fa-2x" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profhead">Reviews</div>
        </div>

    </div>

<?php
 

$baseurlapi = "https://sofiapi.code7labs.com/api/";
$url = $baseurlapi . "reviews-for-user/".$_GET['id'];
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

$response_data_profile = json_decode($resp);

if(isset($response_data_profile->data)){
 if(!empty($response_data_profile->data)){

 $user_data_profile = $response_data_profile->data;
 }}
else{
 $user_data_profile='';
}
?>
   <div id="review">
        <?php
        if($user_data_profile!=""){
        foreach($user_data_profile as $userprofile){
            
              
      
        
        ?>
        <!-- first review -->
        <div class="card mb-3 revcard" style="width:90%;">
            <div class="row g-0">
                <!-- <div class="col-md-4  sizeadj">
                    <img src="user1.jpg" width="100%" class="img-fluid rounded-start reviewimg">
                </div> -->
                <div class="col-md-8">
                    <div class="card-body">
                    <a href="#" style="text-decoration: none; color:#343a40"><h6 class="card-title"><?php echo  $userprofile->users[0]->name; ?></h6></a>
                        <div class="card-text">
                            <?php
                        
                        $round=$userprofile->rating;
                      
                        if($round==1){
                            ?>
                             <i class="fa-solid fa-star"></i>
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
                            </div>
                        <div class="card-text handle"><?php echo  $userprofile->reviews; ?></div>
                        <div class="card-text datlow">Dated: <?php echo  $userprofile->created_at; ?></div>
                        <div class="card-text revimg">
                        <a href="damage1.png" data-lightbox="models" data-title="Damage">
                        <img src="damage1.png" width="100%" height="45px">
                        </a>
                        <a href="damage2.png" data-lightbox="models" data-title="Damage">
                        <img src="damage2.png" width="100%" height="45px">
                        </a>
                        <a href="damage3.png" data-lightbox="models" data-title="Damage">
                        <img src="damage3.png" width="100%" height="45px">
                        </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>

<?php 
}
}
else{
    echo "<p class='text-center'>No record found</p>";
}
?>
    </div>
    <!-- reviews end -->

    <div class="gapgap1">

    </div>

    <!-- footerstart -->
    <?php include 'footer.php' ?>

    <!-- footer end -->


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- lightbox js -->
        <script src="lightbox-plus-jquery.js"></script>


</body>

</html>