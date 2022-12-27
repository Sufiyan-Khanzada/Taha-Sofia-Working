<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        #containerlogin2 {
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 0.3fr 1fr;
            place-items: center;
        }
  
    </style>
</head>

<body>

<?php
$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."register";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(isset($_POST['register'])){

$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_pass=$_POST['confirm_password'];
$privacy=$_POST['privacy'];
$terms=$_POST['terms'];



$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
  
    "name":"$name",
    "lastname":"$lastname",
    "email":"$email",
    "password":"$password",
    "confirm_password":"$confirm_pass",
    "privacypolicy":"$privacy",
    "termscondition":"$terms"
    
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);


// $obj = json_decode($resp,true);
if($obj['status']){

 $msg='<div class="alert alert-success" role="alert">
  Registration SuccessFully Done
</div>';

echo $msg;

echo "<script type='text/javascript'>window.location.replace('login.php');
</script>";
}
else{
   //header("Location:login.php");
$msg='<div class="alert alert-danger" role="alert">
Registration Not Done
</div>';
echo $msg;
}


curl_close($curl);

}
?>

    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
        <i class="fa-solid fa fa-angle-left fa-2x"  onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profhead">Sign Up</div>
        </div>
    </div>
    <!-- header end -->

    <!-- content start -->
<form method="post" action="">
    <div class="signupcontent">
        <!-- <div class="signtxt">
            <div class="logto">Sign Up to Louluxe</div>
        </div> -->
        <!-- fields start -->

        <input type="text" class="typecol" name="name" placeholder="First Name" style="width: 100%;">
        <input type="text"  name="lastname" class="typecol" placeholder="Last Name" style="width: 100%;">
        <input type="email" class="typecol" name="email" placeholder="Email Address" style="width: 100%;">
        <div class="input-container1">
            <!-- <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;background: #0275d8;"><i class="fa fa-key icon"></i></div> -->
            <input type="password" class="typecol" placeholder="Password" name="password" height="100%" autocomplete="off" style="margin-top:0px;margin-bottom:0px; width: 100%;">
            <div style="width:100%;display:flex;justify-content:center;align-items:center;height: 100%;"><i class="fa-solid fa-eye"></i></div>

        </div>
        <div class="input-container1">
            <!-- <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;background: #0275d8;"><i class="fa fa-key icon"></i></div> -->
            <input type="password" class="typecol" placeholder="Confirm Password"  name="confirm_password" height="100%" autocomplete="off" style="margin-top:0px;margin-bottom:0px; width: 100%;">
            <div style="width:100%;display:flex;justify-content:center;align-items:center;height: 100%;"><i class="fa-solid fa-eye"></i></div>

        </div>

        <div class="mb-3 form-check jusflex">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="privacy" required>
            <label class="form-check-label" for="exampleCheck1" style="margin-left: 2%;font-size: 15px;">I accept the <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Privacy Statement</a></label>
        </div>

        <div class="mb-3 form-check jusflex">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="terms" required>
            <label class="form-check-label" for="exampleCheck1" style="margin-left: 2%;font-size: 15px;">I accept the <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Terms & Conditions</a></label>
        </div>

        <div style="margin-top:15px;width:100%;display: flex;justify-content:center;align-items:center;height: 100%;">
            <button type="submit" name="register" id="btn1log"><!-- <a href="profile.php" style="text-decoration:none;color:white;font-size:22px">Login</a> -->Sign Up</button>
        </div>
          </form>
        <!-- or login with start -->
        <div id="containerlogin2">
            <div style="color: black; font-weight: bold;font-size: larger;margin-bottom:10px;margin-top:12px">or</div>
            <div id="containerlogin3">
                <div class="btnlogor">
                    <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;color:red;"><i class="fa-brands fa-google iconlog"></i></div>
                    <div class="conttxt">Continue with Google</div>
                </div>
                <div class="btnlogor">
                    <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;color:black;"><i class="fa-brands fa-twitter iconlog"></i></div>
                    <div class="conttxt">Continue with Twitter</div>
                </div>
                <div class="btnlogor">
                    <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;color:blue;"><i class="fa-brands fa-facebook iconlog"></i></div>
                    <div class="conttxt">Continue with Facebook</div>
                </div>

                <!-- <div style="color: blue;"><i class="fa-brands fa-facebook "></i></div>
                <div style="color: black;"><i class="fa-brands fa-twitter"></i></div> -->


            </div>

        </div>


        <!-- fields end -->
    </div>


    <!-- content end -->
    <div class="gapgap1"></div>

    <?php include 'footer.php' ?>

    <!-- privacy modal start -->
  
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Privacy Statement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
consequuntur! Commodi minima excepturi repudiandae velit hic maxime
doloremque. Quaerat provident commodi consectetur veniam similique ad 
earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
suscipit quas? Nulla, placeat. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
      </div>
    </div>
  </div>
</div>
<!-- privacy modal end -->

<!-- terms and condition modal start -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Terms And Condition</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
consequuntur! Commodi minima excepturi repudiandae velit hic maxime
doloremque. Quaerat provident commodi consectetur veniam similique ad 
earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
suscipit quas? Nulla, placeat. 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
      </div>
    </div>
  </div>
</div>

<!-- terms and condition modal end -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>

</html>