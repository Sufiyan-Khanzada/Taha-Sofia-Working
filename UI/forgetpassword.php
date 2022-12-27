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
    


        
    </style>
</head>

<body>
    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
        <i class="fa-solid fa fa-angle-left fa-2x"  onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profhead">Forget Password</div>
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
                <div class="input-container">
                    <!-- <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;background: #0275d8;"><i class="fa fa-user icon"></i></div> -->
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="abc@gmail.com" style="margin-top:0px;margin-bottom:0px; width:100%;">

                </div>

                <div class="input-container1">
                    <!-- <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;background: #0275d8;"><i class="fa fa-key icon"></i></div> -->
                    <input type="text" class="typecol" placeholder="Password" height="100%"  autocomplete="off" style="margin-top:0px;margin-bottom:0px; width:100%;">
                    <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;"><i class="fa-solid fa-eye"></i></div>

                </div>

                <div class="input-container1">
                    <!-- <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;background: #0275d8;"><i class="fa fa-key icon"></i></div> -->
                    <input type="text" class="typecol" placeholder="Confirm Password" height="100%"  autocomplete="off" style="margin-top:0px;margin-bottom:0px; width:100%;">
                    <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;"><i class="fa-solid fa-eye"></i></div>

                </div>

                <div style="margin-top:15px;width:100%;display: flex;justify-content:center;align-items:center;height: 100%;">
                    <button id="btn1log"><a href="update.php" style="text-decoration:none;color:white;font-size:22px">Save</a></button>
                </div>
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