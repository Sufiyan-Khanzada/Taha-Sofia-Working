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
            height: 450px;
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
            height: 400px;
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
.digit-groups input {
    width:20%;
    height:75px;
    margin:5px;
    line-height: 50px;
	text-align: center;
	font-size: 24px;
	font-family: 'Raleway', sans-serif;
	font-weight: 200;
}
.digit-groups {
    display: flex;
	align-items: center;
	justify-content: center;

}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;

}
input[type=number] {
  -moz-appearance: textfield;
}


        
    </style>
</head>
<?php
if(isset($_POST['next'])){
    


$otp=$_POST['digit-1'];
$otp1=$_POST['digit-2'];
$otp2=$_POST['digit-3'];
$otp3=$_POST['digit-4'];

$otpp=$otp."".$otp1.""."".$otp2."".$otp3."";
echo $otpp;

$_SESSION['otp']=$otpp;

 echo "<script type='text/javascript'>window.location.replace('forgetpassword.php');
</script>";

   
}

?>
<body>
    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
        <i class="fa-solid fa fa-angle-left fa-2x"  onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profhead">Enter OTP</div>
        </div>
    </div>
    <!-- header end -->

    <!-- <div id="upperimg">

    </div> -->

    <!-- content start -->
    
    <div class="containerlogin">
        <div class="containerlogin1">
            <div class="logto" style="margin-bottom: 30px;"> <img src="logo.svg" alt="#"></div>
            <div style="width:90%;margin: auto;">
               
                <form method="post" action="" class="digit-group" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                    <div class="digit-groups"> 
                       
                    
                        <input type="number" id="digit-1" name="digit-1"  />
                        <input type="number" id="digit-2" name="digit-2"   />
                        <input type="number" id="digit-3" name="digit-3" />
                        <input type="number" id="digit-4" name="digit-4"  maxlength="1" />
                        </div>
                        <div id="digit-5" style="margin-top:15px;display: flex;justify-content:center;align-items:center;">
                    <button id="btn1log" type="submit"  style="width:25%;height: 50px;text-decoration:none;color:white;font-size:17px" name="next">Submit</button>
                </div>
                
               
                    </form>

<script>
    $('.digit-group').find('input').each(function() {
	$(this).on('keyup', function(e) {
		var parent = $($(this).parent());
		
		if(e.keyCode === 8 || e.keyCode === 37) {
			var prev = parent.find('input#' + $(this).data('previous'));
			
			if(prev.length) {
				$(prev).select();
			}
		} else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
			var next = parent.find('input#' + $(this).data('next'));
			
			if(next.length) {
				$(next).select();
			} else {
				if(parent.data('autosubmit')) {
					parent.submit();
				}
			}
		}
	});
});
</script>

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