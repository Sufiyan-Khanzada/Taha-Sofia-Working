<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login In</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <style>
        .containerlogin {
            position: relative;
            width: 100%;
            height: 600px;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30%;
            margin-top:10px;
        }
        .typecol:focus{
            outline: 2px solid #9DCAEB !important;
            border:2px solid #9DCAEB !important;
        }
        .iconlog{
            font-size:25px

        }
        .containerlogin1 {
            position: absolute;
            width: 95%;
            height: 580px;
            margin: 25px 0px;
            border: 1px solid white;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0px 4px 8px #c6c3e391;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 0.5fr 1.8fr 0.9fr 0.3fr;
            place-items: center;
        }
        
        .input-container {
            display: grid;
            grid-template-columns:  1fr;
            grid-template-rows: 1fr;
            place-items: center;
            width: 100%;
            margin-bottom: 10px;
        }

        .input-container1 {
            display: grid;
            grid-template-columns:  0.8fr 0.2fr;
            grid-template-rows: 1fr;
            place-items: center;
            width: 100%;
            margin-bottom: 10px;
        }
        
        .icon {
            color: white;
        }
        
        #containerlogin2 {
            width: 90%;
            height: 100%;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 0.3fr 1fr;
            place-items: center;
        }
        
        #containerlogin3 {
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: 1fr ;
            grid-template-rows: 1fr 1fr 1fr;
            grid-row-gap: 8px;
            place-items: center;
        }
        #btn1log{
            background-color: #9DCAEB;
            outline:1px solid #9DCAEB;
            border:1px solid #9DCAEB;
            border-radius: 5px;
            color: white;
            width: 100%;
            text-align: center;
            height: 44px;
        }
        .form-check .form-check-input{
            width: 5px;
            height: 5px;
        }
        .btnlogor{
            width:100%;
            height:44px;
            margin-bottom: 8px;
            border: 1px solid grey;
            border-radius: 10px;
            display: grid;
            grid-template-columns: 0.3fr 1fr;
            grid-template-rows: 1fr;
            place-items: center;
        }
        /* .conttxt{
            width:100%;
            display: flex;
            justify-content:center;
            align-items:center;
            height: 100%;
            font-size:20px;
            font-weight:bold;
            padding-right: 20px;
        } */
        .forpas{
            color: black;
            text-decoration:none
        }
        .accept1{
            color: black;
            margin-left:5px;
            font-size:14px
        }
        .logto img{
            height: 100px;
            width: 100px;
        }
        .dontacc{
            font-size: 18px;
        }
        
        @media only screen and (max-width: 300px) {
            .conttxt{
            width:100%;
            display: flex;
            justify-content:center;
            align-items:center;
            height: 100%;
            font-size:13px;
            font-weight:bold
        } 
        .dontacc{
            font-size: 13px;
        } 
        }
        @media only screen and (min-width: 768px) and (max-device-width: 1024px){
            .containerlogin {
            position: relative;
            width: 100%;
            height: 680px;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30%;
        }
            .containerlogin1 {
            position: absolute;
            width: 65%;
            height: 650px;
            margin: 25px 0px;
            border: 1px solid white;
            border-radius: 15px;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 0.5fr 1.8fr 0.9fr 0.3fr;
            place-items: center;
        }
        .logto{
            color: black;
             font-weight: bold;
             font-size:xx-large;
        }
        #btn1log{
            background-color: #0275d8;
            outline:1px solid #0275d8;
            border:1px solid #0275d8;
            border-radius: 5px;
            color: white;
            font-size: 20px;
            width: 100%;
            text-align: center;
            height: 44px;
        }
        .forpas{
            color: black;
            text-decoration:none;
            font-size: 20px;
        }
        .accept1{
            color: black;
            margin-left:5px;
            font-size:18px;
            font-weight: bold;
        }
        .conttxt{
            width:100%;
            display: flex;
            justify-content:center;
            align-items:center;
            height: 100%;
            font-size:19px;
            font-weight:bold
        } 

        }
        @media only screen and (min-width: 1205px) {
            .containerlogin {
            position: relative;
            width: 100%;
            height: 680px;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30%;
        }
            .containerlogin1 {
            position: absolute;
            width: 55%;
            height: 650px;
            margin: 25px 0px;
            border: 1px solid white;
            border-radius: 15px;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 0.5fr 1.8fr 0.9fr 0.3fr;
            place-items: center;
        }
        .logto{
            color: black;
             font-weight: bold;
             font-size:xx-large;
        }
        #btn1log{
            background-color: #0275d8;
            outline:1px solid #0275d8;
            border:1px solid #0275d8;
            border-radius: 5px;
            color: white;
            font-size: 20px;
            width: 100%;
            text-align: center;
            height: 44px;
        }
        .forpas{
            color: black;
            text-decoration:none;
            font-size: 20px;
        }
        .accept1{
            color: black;
            margin-left:5px;
            font-size:18px;
            font-weight: bold;
        }
        .conttxt{
            width:100%;
            display: flex;
            justify-content:center;
            align-items:center;
            height: 100%;
            font-size:19px;
            font-weight:bold
        } 
        }
    


        
    </style>
</head>

<body>

<?php
$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."login";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
  
  "email":"$email",
    "password":"$password"
    
  
  
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);


// $obj = json_decode($resp,true);
if($obj['status']){
//   ini_set('session.cookie_domain','.domain.com');

// echo ini_get('session.cookie_domain');
// session_set_cookie_params( 0, "/", ".domain.com", false, false); 

 //  session_start();
   
    // $_SESSION['favcolor'] = "green";
    //  $_SESSION['userId'] = $obj['data']['userId'];
    //  $_SESSION['userFullName'] = $obj['data']['userFullName'];
    //  $_SESSION['userEmail'] = $obj['data']['userEmail'];
    //  $_SESSION['userPhoneNumber'] = $obj['data']['userPhoneNumber'];
    //  $_SESSION['address'] = $obj['data']['address'];
    //  $_SESSION['userImage'] = $obj['data']['userImage'];
    //  $_SESSION['remember_token'] = $obj['data']['remember_token'];
    //  $_SESSION['device_type'] = $obj['data']['device_type'];
    //  $_SESSION['device_token'] = $obj['data']['device_token'];
    //  $_SESSION['isSocial'] = $obj['data']['isSocial'];
    //  $_SESSION['provider'] = $obj['data']['provider'];
    //  $_SESSION['longitude'] = $obj['data']['longitude'];
    //  $_SESSION['latitude'] = $obj['data']['latitude'];
    //  $_SESSION['address_type'] = $obj['data']['address_type'];
    //  $_SESSION['user_city'] = $obj['data']['user_city'];
    //  $_SESSION['address1'] = $obj['data']['address1'];
    // $_SESSION['cart_item'] = array();
  // print_r( $obj['message']);

  $token="Bearer ".$obj['token'];

//echo $token;



$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."user-detail";




// $token="Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDU5NDhlNTBmMzFlNzViYmJkZWFhMzQ1ZmM4ODExMThkNGVmMmMwMjA1Njc3ODA2NzUzNTE0ZGE3MTQzYWU0NmM4ZTUxNTIxZWIwNDRiYmMiLCJpYXQiOjE2Njc2MDY5MzguMjgyOTc0LCJuYmYiOjE2Njc2MDY5MzguMjgyOTc2LCJleHAiOjE2OTkxNDI5MzguMjc4MTA5LCJzdWIiOiIzMSIsInNjb3BlcyI6W119.lu_WwtSEkoxB4RicvGQOgS7X8LmtrO-wIKPDltR3SyrJhOvGeglxP9edEO-TWMajOIwswCdvn81Ev97Egjpg1490g6vyQUYNiDDfZvezLUPRM2TrTv8HiDWvM_i4vI7sChS4Yof2P6yTx14obDcBMQG7-t1kK7wRzC6flBsyZT_ZhDjyFnO8cDM8cnXBeSYoG48irnHjn6JM2YiO8-tmW6VCa5zJcWGjrflK1rKbI_Lz60u3XrIPJbInDDDyZcIqXcs7E9M-PL78VDX7wv0L1rDAoeIGhg-a2RPKuZBeNvX8xby8EtFZFoEf-nJqF0mfV7w7fPLR8CgIbfKOY8PWUIOVg9qBNiRCP2vVzMlLfPBNg49eHmROLjhb_Q8-EeAtE9BRE5KvC3efRYFAbDyzd_-KhTrN8uukixOAf_5Scytx73iVvYx2z9OyQh1bH8byrF2nrv6WKIe7psEwOPd9RpcE0nKJRQQ6pv1Le4TRzTXHYjNP8vMyXEnoSz8Q4z2VfnKEVfSM-QRgcXqN02zpG-eE5wif8H8iK50m9O7QvUoIIFMYGIcbCl0huUqnJbrFqVOveVXMEhEoKM67gNnvwo7OoXYv_XbEqBvqnPF__kCXNzXRmrbWThkmXIut2GiNCEQwJNgjbShJYFOXDF7Sl7l9Z1-V8eyxhtewsyxeXrY";
$options = array(
  'http'=>array(
    'method'=>"POST",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);
$context = stream_context_create($options);
$json_data = file_get_contents($url, false, $context);

$obj1 = json_decode($json_data,true);
     $_SESSION['id'] = $obj1['data']['id'];
     $_SESSION['name'] = $obj1['data']['name'];
     $_SESSION['email'] = $obj1['data']['email'];
     $_SESSION['lastname'] = $obj1['data']['lastname'];
     $_SESSION['username'] = $obj1['data']['username'];
     $_SESSION['city'] = $obj1['data']['city'];
     $_SESSION['state'] = $obj1['data']['state'];
     $_SESSION['country'] = $obj1['data']['country'];
     $_SESSION['postalcode'] = $obj1['data']['postalcode'];
     $_SESSION['address'] = $obj1['data']['address'];
     $_SESSION['phone'] = $obj1['data']['phone'];
     $_SESSION['insuretype'] = $obj1['data']['insuretype'];
     $_SESSION['payement'] = $obj1['data']['payment'];
     $_SESSION['image'] = $obj1['data']['profile'];
     $_SESSION['token'] = $obj['token'];
     


     
     // $_SESSION['payement'] = $obj1['data']['id'];
     // $_SESSION['p'] = $obj1['data']['id'];
     



     



          
   // echo $obj1['data']['id'];






    $msg='<div class="alert alert-success" role="alert">
  Login SuccessFully Done
</div>';

?>
<script type="text/javascript">window.location.replace("profile.php");
</script>



<?php



    //header("Location:index.php");
}
else{
   //header("Location:login.php");
$msg='<div class="alert alert-danger" role="alert">
  Login Failed
</div>';
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
            <div id="profhead">Login</div>
        </div>
    </div>
    <!-- header end -->

    <!-- <div id="upperimg">

    </div> -->

    <!-- content start -->
     <form method="post" action="">
    <div class="containerlogin">
        
        <div class="containerlogin1">
<?php echo $msg; ?>
            <div class="logto"> <img src="logo.svg" alt="#"></div>
           
            <div style="width:90%;margin: auto;">
                <div class="input-container">
                    <!-- <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;background: #0275d8;"><i class="fa fa-user icon"></i></div> -->
                    <input type="email" class="typecol" placeholder="Email Address" height="100%"  autocomplete="off"  name="email"
                    style="margin-top:0px;margin-bottom:0px; width:100%;" >

                </div>

                <div class="input-container1">
                    <!-- <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;background: #0275d8;"><i class="fa fa-key icon"></i></div> -->
                    <input type="password" class="typecol" placeholder="Password" height="100%"  autocomplete="off" name="password" style="margin-top:0px;margin-bottom:0px; width:100%;">
                    <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;"><i class="fa-solid fa-eye"></i></div>

                </div>
                <div style="margin-bottom: 8px;margin-top:5px;display:flex;justify-content:flex-end;">
                    <a href="send-email.php" style="font-size:13px; color:#0275d8">Forgot Password?</a>
                </div>
                <!-- <div class="mb-3 form-check" style="display: flex;align-items:center;">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" class="accept1">I accept the terms & condition</label>
  </div> -->
                <div style="margin-top:15px;width:100%;display: flex;justify-content:center;align-items:center;height: 100%;">

                    <button type="submit" name="login" id="btn1log"><!-- <a href="profile.php" style="text-decoration:none;color:white;font-size:22px">Login</a> -->Login</button>

                    
                </div>
            </div>
            </form>
            <!-- or 5555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555 with start -->
            <div id="containerlogin2">
                <div style="color: black; font-weight: bold;font-size: larger;margin-bottom:10px">or</div>
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
            <!-- dont have a account start -->
            <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;">
                <div class="dontacc">
                    Don't have an account?<span style="margin-left:5px"><a href="signup.php" style="text-decoration:underline;">Sign Up</a></span>
                </div>
            </div>
        </div>
    </div>


    <!-- content end -->

    <!-- last img -->
    <!-- <div id="lastimg">

    </div> -->

    <?php include 'footer.php' ?>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>




</body>

</html>