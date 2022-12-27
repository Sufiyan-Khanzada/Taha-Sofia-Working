<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
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
    <link rel="stylesheet" href="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" />
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container {
            position: relative;
            width: 160px;
            height: 160px;
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
            box-shadow: 0px 4px 8px #e7e7e791;
            border-radius: 10px;
        }
        
        .form-input1 {
            width: 350px;
            padding: 20px;
            background: #fff;
            box-shadow: 0px 2px 4px #c6c3e391;
            border-radius: 10px;
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
            background: #9DCAEB;
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
            background: #9DCAEB;
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
            background: #9DCAEB;
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

        .div1 {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  border-style: solid;
  border-color: #FFFFFF;
  box-shadow: 0 0 8px 3px #B8B8B8;
  position: relative;
}

.div1 img {
  height: 100%;
  width: 100%;
  border-radius: 50%;
}

.div1 i {
  position: absolute;
  height: 30px;
  width: 30px;
  margin-left: 18px;
  margin-top: 15px;

}
.div2 {
  position: absolute;
  top: 20px;
  right: -7px;
  /* border: 1px solid; */
  border-radius: 50%;
  /* padding: 11px; */
  height: 30px;
  width: 30px;
  display: flex !important;
  align-items: center;
  justify-content: center;
  background-color: white;
  color: cornflowerblue;
  box-shadow: 0 0 8px 3px #B8B8B8;
}
</style>
</head>
<body>
<?php
$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."updateuser/".$_SESSION['id'];


 //echo $url;



$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(isset($_POST['login'])){

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

$name=$_POST['fn'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$insuretype=$_POST['insuretype'];
$postal=$_POST['postcode'];
$address=$_POST['address'];
$phone=$_POST['phone'];
// $name=$_POST['name'];
// $name=$_POST['name'];
// $name=$_POST['name'];
// $name=$_POST['name'];

// $password=$_POST['password'];

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
  
  "name":"$name",
  "lastname":"$lastname",
  "city":"$city",
  "postalcode":"$postal",
  "address":"$address",
  "phone":"$phone",
  "insuretype":"$insuretype",
  "address":"$address",
  "phone":"$phone",
  "country":"$country",
  "state":"$state",
  "profile":"$target_file"
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);

print_r($obj);
// $obj = json_decode($resp,true);
if($obj['status']){

 // echo $obj['status'];  
$msg='<div class="alert alert-success" role="alert">
  Profile Updated
</div>';

echo $msg;

echo "<script type='text/javascript'>window.location.replace('login.php');
</script>";
}
else{
   //header("Location:login.php");

$msg='<div class="alert alert-danger" role="alert">
  Profile Not Updated
</div>';
echo $msg;
}
curl_close($curl);
}
?>   
  <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
        <i class="fa fa-angle-left fa-2x" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profhead">Update Profile</div>
        </div>
        <div class="iconprofileheader">
        <a href="profile.php" style="color:black"><i class="fa-solid fa-user fa-2x"></i></a>
        </div>
    </div>
    <!-- header end -->


    <div class="signupcontent">
        <!-- <div style="display: flex;justify-content:center;align-items:center" class="container">
            <img src="user2.jpg" alt="Avatar" class="image profpicupd">
            <div class="overlay">
                <a href="#" class="icon" title="User Profile">
                    <i class="fa-sharp fa-solid fa-camera"></i>
                </a>
            </div>
        </div>  -->
        <!-- image start -->
         <form method="post" action="" enctype="multipart/form-data">
<div style="display:flex;justify-content:center">
<div class="div1">
  <img src="user2.jpg" class="main-profile-img" />
  <div class="div2">
  <i class="fa fa-edit" type="file" multiple="" data-max_length="10" class="upload__inputfile"><input type="file" name="fileToUpload" data-max_length="10" class="upload__inputfile" style="opacity: 0;"> </i>
  </div>
</div>  
</div>
       

        <!-- image end -->
        <label style="margin-top: 20px;">First Name</label>
        <input type="text" class="typecol"  name="fn" value=<?php  echo 
        $_SESSION['name']; ?>>
        <label>Last Name</label>
        <input type="text" class="typecol" name="lastname"  value=<?php  echo 
        $_SESSION['lastname'];?>>
        <label>User Email</label>
        <input type="email" class="typecol"  name="email" value=<?php  echo 
        $_SESSION['email']; ?>>
        
        <div class="size-204 mt-3 mb-3">

                                <div class="size-204 mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="country">
											<option>Country</option>
                                            <option><?php  echo $_SESSION['country'];?></option>    
                                            <option value="Adilpur">Adilpur</option>
    <option value="Badin">Badin</option>
    <option value="Bagarji">Bagarji</option>
    <option value="Bandhi">Bandhi</option>
    <option value="Berani">Berani</option>
    <option value="Bhan">Bhan</option>
    <option value="Bhiria">Bhiria</option>
    <option value="Bhit Shah">Bhit Shah</option>
    <option value="Bozdar Wada">Bozdar Wada</option>
    <option value="Bulri">Bulri</option>
    <option value="Chak">Chak</option>
    <option value="Chamber">Chamber</option>
    <option value="Chhor">Chhor</option>
    <option value="Chuhar Jamali">Chuhar Jamali</option>
    <option value="Dadu">Dadu</option>
    <option value="Daromehar">Daromehar</option>
    <option value="Darya Khan Marri">Darya Khan Marri</option>
    <option value="Daulatpur">Daulatpur</option>
    <option value="Daur">Daur</option>
    <option value="Dhoro Naro">Dhoro Naro</option>
    <option value="Digri">Digri</option>
    <option value="Diplo">Diplo</option>
    <option value="Dokri">Dokri</option>
    <option value="Gambat">Gambat</option>
    <option value="Garhiyasin">Garhiyasin</option>
    <option value="Gharo">Gharo</option>
    <option value="Ghauspur">Ghauspur</option>
    <option value="Ghotki">Ghotki</option>
    <option value="Goth Garelo">Goth Garelo</option>
    <option value="Goth Phulji">Goth Phulji</option>
    <option value="Goth Radhan">Goth Radhan</option>
    <option value="Hala">Hala</option>
    <option value="Hingorja">Hingorja</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Islamkot">Islamkot</option>
    <option value="Jacobabad">Jacobabad</option>
    <option value="Jām Sāhib">Jām Sāhib</option>
    <option value="Jamshoro">Jamshoro</option>
    <option value="Jati">Jati</option>
    <option value="Jhol">Jhol</option>
    <option value="Johi">Johi</option>
    <option value="Kadhan">Kadhan</option>
    <option value="Kambar">Kambar</option>
    <option value="Kandhkot">Kandhkot</option>
    <option value="Kandiari">Kandiari</option>
    <option value="Kandiaro">Kandiaro</option>
    <option value="Karachi">Karachi</option>
    <option value="Karaundi">Karaundi</option>
    <option value="Kario Ghanwar">Kario Ghanwar</option>
    <option value="Kashmor">Kashmor</option>
    <option value="Keti Bandar">Keti Bandar</option>
    <option value="Khadro">Khadro</option>
    <option value="Khairpur">Khairpur</option>
    <option value="Khairpur Mir’s">Khairpur Mir’s</option>
    <option value="Khairpur Nathan Shah">Khairpur Nathan Shah</option>
    <option value="Khanpur Mahar">Khanpur Mahar</option>
    <option value="Kot Diji">Kot Diji</option>
    <option value="Kotri">Kotri</option>
    <option value="Kunri">Kunri</option>
    <option value="Lakhi">Lakhi</option>
    <option value="Larkana">Larkana</option>
    <option value="Madeji">Madeji</option>
    <option value="Malir Cantonment">Malir Cantonment</option>
    <option value="Matiari">Matiari</option>
    <option value="Matli">Matli</option>
    <option value="Mehar">Mehar</option>
    <option value="Miro Khan">Miro Khan</option>
    <option value="Mirpur Bhtoro">Mirpur Bhtoro</option>
    <option value="Mirpur Khas">Mirpur Khas</option>
    <option value="Mirpur Mathelo">Mirpur Mathelo</option>
    <option value="Mirpur Sakro">Mirpur Sakro</option>
    <option value="Mirwah Gorchani">Mirwah Gorchani</option>
    <option value="Mithi">Mithi</option>
    <option value="Moro">Moro</option>
    <option value="Nabisar">Nabisar</option>
    <option value="Nasirabad">Nasirabad</option>
    <option value="Naudero">Naudero</option>
    <option value="Naukot">Naukot</option>
    <option value="Naushahro Firoz">Naushahro Firoz</option>
    <option value="Nawabshah">Nawabshah</option>
    <option value="New Bādāh">New Bādāh</option>
    <option value="Pad Idan">Pad Idan</option>
    <option value="Pano Aqil">Pano Aqil</option>
    <option value="Pir Jo Goth">Pir Jo Goth</option>
    <option value="Pithoro">Pithoro</option>
    <option value="Rajo Khanani">Rajo Khanani</option>
    <option value="Ranipur">Ranipur</option>
    <option value="Ratodero">Ratodero</option>
    <option value="Rohri">Rohri</option>
    <option value="Rustam">Rustam</option>
    <option value="Sakrand">Sakrand</option>
    <option value="Samaro">Samaro</option>
    <option value="Sanghar">Sanghar</option>
    <option value="Sann">Sann</option>
    <option value="Sehwan">Sehwan</option>
    <option value="Setharja Old">Setharja Old</option>
    <option value="Shahdad Kot">Shahdad Kot</option>
    <option value="Shahdadpur">Shahdadpur</option>
    <option value="Shahpur Chakar">Shahpur Chakar</option>
    <option value="Shikarpur">Shikarpur</option>
    <option value="Sinjhoro">Sinjhoro</option>
    <option value="Sīta Road">Sīta Road</option>
    <option value="Sobhodero">Sobhodero</option>
    <option value="Sukkur">Sukkur</option>
    <option value="Talhar">Talhar</option>
    <option value="Tando Adam">Tando Adam</option>
    <option value="Tando Allahyar">Tando Allahyar</option>
    <option value="Tando Bago">Tando Bago</option>
    <option value="Tando Jam">Tando Jam</option>
    <option value="Tando Mitha Khan">Tando Mitha Khan</option>
    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
    <option value="Tangwani">Tangwani</option>
    <option value="Tharu Shah">Tharu Shah</option>
    <option value="Thatta">Thatta</option>
    <option value="Thul">Thul</option>
    <option value="Ubauro">Ubauro</option>
    <option value="Umarkot">Umarkot</option>
    <option value="Umerkot District">Umerkot District</option>
    <option value="Warah">Warah</option>
    <option value="">Select City</option>
    <option value="Ahmadpur Sial">Ahmadpur Sial</option>
    <option value="Ahmedpur East">Ahmedpur East</option>
    <option value="Alipur Chatha">Alipur Chatha</option>
    <option value="Arifwala">Arifwala</option>
    <option value="Attock Tehsil">Attock Tehsil</option>
    <option value="Baddomalhi">Baddomalhi</option>
    <option value="Bahawalnagar">Bahawalnagar</option>
    <option value="Bahawalpur">Bahawalpur</option>
    <option value="Bakhri Ahmad Khan">Bakhri Ahmad Khan</option>
    <option value="Basirpur">Basirpur</option>
    <option value="Basti Dosa">Basti Dosa</option>
    <option value="Begowala">Begowala</option>
    <option value="Bhakkar">Bhakkar</option>
    <option value="Bhalwal">Bhalwal</option>
    <option value="Bhawana">Bhawana</option>
    <option value="Bhera">Bhera</option>
    <option value="Bhopalwala">Bhopalwala</option>
    <option value="Burewala">Burewala</option>
    <option value="Chak Azam Saffo">Chak Azam Saffo</option>
    <option value="Chak Jhumra">Chak Jhumra</option>
    <option value="Chak One Hundred Twenty Nine Left">Chak One Hundred Twenty Nine Left</option>
    <option value="Chak Thirty-one -Eleven Left">Chak Thirty-one -Eleven Left</option>
    <option value="Chak Two Hundred Forty-Nine TDA">Chak Two Hundred Forty-Nine TDA</option>
    <option value="Chakwal">Chakwal</option>
    <option value="Chawinda">Chawinda</option>
    <option value="Chichawatni">Chichawatni</option>
    <option value="Chiniot">Chiniot</option>
    <option value="Chishtian">Chishtian</option>
    <option value="Choa Saidanshah">Choa Saidanshah</option>
    <option value="Chuhar Kana">Chuhar Kana</option>
    <option value="Chunian">Chunian</option>
    <option value="Daira Din Panah">Daira Din Panah</option>
    <option value="Dajal">Dajal</option>
    <option value="Dandot RS">Dandot RS</option>
    <option value="Darya Khan">Darya Khan</option>
    <option value="Daska">Daska</option>
    <option value="Daud Khel">Daud Khel</option>
    <option value="Daultala">Daultala</option>
    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
    <option value="Dhanot">Dhanot</option>
    <option value="Dhaunkal">Dhaunkal</option>
    <option value="Dhok Awan">Dhok Awan</option>
    <option value="Dijkot">Dijkot</option>
    <option value="Dinan Bashnoian Wala">Dinan Bashnoian Wala</option>
    <option value="Dinga">Dinga</option>
    <option value="Dipalpur">Dipalpur</option>
    <option value="Dullewala">Dullewala</option>
    <option value="Dunga Bunga">Dunga Bunga</option>
    <option value="Dunyapur">Dunyapur</option>
    <option value="Eminabad">Eminabad</option>
    <option value="Faisalabad">Faisalabad</option>
    <option value="Faqirwali">Faqirwali</option>
    <option value="Faruka">Faruka</option>
    <option value="Fazilpur">Fazilpur</option>
    <option value="Ferozewala">Ferozewala</option>
    <option value="Fort Abbas">Fort Abbas</option>
    <option value="Garh Maharaja">Garh Maharaja</option>
    <option value="Gojra">Gojra</option>
    <option value="Gujar Khan">Gujar Khan</option>
    <option value="Gujranwala">Gujranwala</option>
    <option value="Gujranwala Division">Gujranwala Division</option>
    <option value="Gujrat">Gujrat</option>
    <option value="Hadali">Hadali</option>
    <option value="Hafizabad">Hafizabad</option>
    <option value="Harnoli">Harnoli</option>
    <option value="Harunabad">Harunabad</option>
    <option value="Hasan Abdal">Hasan Abdal</option>
    <option value="Hasilpur">Hasilpur</option>
    <option value="Haveli Lakha">Haveli Lakha</option>
    <option value="Hazro">Hazro</option>
    <option value="Hujra Shah Muqeem">Hujra Shah Muqeem</option>
    <option value="Jahanian Shah">Jahanian Shah</option>
    <option value="Jalalpur Jattan">Jalalpur Jattan</option>
    <option value="Jalalpur Pirwala">Jalalpur Pirwala</option>
    <option value="Jampur">Jampur</option>
    <option value="Jand">Jand</option>
    <option value="Jandiala Sher Khan">Jandiala Sher Khan</option>
    <option value="Jaranwala">Jaranwala</option>
    <option value="Jatoi Shimali">Jatoi Shimali</option>
    <option value="Jauharabad">Jauharabad</option>
    <option value="Jhang">Jhang</option>
    <option value="Jhang Sadar">Jhang Sadar</option>
    <option value="Jhawarian">Jhawarian</option>
    <option value="Jhelum">Jhelum</option>
    <option value="Kabirwala">Kabirwala</option>
    <option value="Kahna Nau">Kahna Nau</option>
    <option value="Kahuta">Kahuta</option>
    <option value="Kalabagh">Kalabagh</option>
    <option value="Kalaswala">Kalaswala</option>
    <option value="Kaleke Mandi">Kaleke Mandi</option>
    <option value="Kallar Kahar">Kallar Kahar</option>
    <option value="Kalur Kot">Kalur Kot</option>
    <option value="Kamalia">Kamalia</option>
    <option value="Kamar Mushani">Kamar Mushani</option>
    <option value="Kamoke">Kamoke</option>
    <option value="Kamra">Kamra</option>
    <option value="Kanganpur">Kanganpur</option>
    <option value="Karor">Karor</option>
    <option value="Kasur">Kasur</option>
    <option value="Keshupur">Keshupur</option>
    <option value="Khairpur Tamiwali">Khairpur Tamiwali</option>
    <option value="Khandowa">Khandowa</option>
    <option value="Khanewal">Khanewal</option>
    <option value="Khanga Dogran">Khanga Dogran</option>
    <option value="Khangarh">Khangarh</option>
    <option value="Khanpur">Khanpur</option>
    <option value="Kharian">Kharian</option>
    <option value="Khewra">Khewra</option>
    <option value="Khurrianwala">Khurrianwala</option>
    <option value="Khushab">Khushab</option>
    <option value="Kohror Pakka">Kohror Pakka</option>
    <option value="Kot Addu Tehsil">Kot Addu Tehsil</option>
    <option value="Kot Ghulam Muhammad">Kot Ghulam Muhammad</option>
    <option value="Kot Mumin">Kot Mumin</option>
    <option value="Kot Radha Kishan">Kot Radha Kishan</option>
    <option value="Kot Rajkour">Kot Rajkour</option>
    <option value="Kot Samaba">Kot Samaba</option>
    <option value="Kot Sultan">Kot Sultan</option>
    <option value="Kotli Loharan">Kotli Loharan</option>
    <option value="Kundian">Kundian</option>
    <option value="Kunjah">Kunjah</option>
    <option value="Ladhewala Waraich">Ladhewala Waraich</option>
    <option value="Lahore">Lahore</option>
    <option value="Lala Musa">Lala Musa</option>
    <option value="Lalian">Lalian</option>
    <option value="Layyah">Layyah</option>
    <option value="Layyah District">Layyah District</option>
    <option value="Liliani">Liliani</option>
    <option value="Lodhran">Lodhran</option>
    <option value="Mailsi">Mailsi</option>
    <option value="Malakwal">Malakwal</option>
    <option value="Malakwal City">Malakwal City</option>
    <option value="Mamu Kanjan">Mamu Kanjan</option>
    <option value="Mananwala">Mananwala</option>
    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
    <option value="Mandi Bahauddin District">Mandi Bahauddin District</option>
    <option value="Mangla">Mangla</option>
    <option value="Mankera">Mankera</option>
    <option value="Mehmand Chak">Mehmand Chak</option>
    <option value="Mian Channun">Mian Channun</option>
    <option value="Mianke Mor">Mianke Mor</option>
    <option value="Mianwali">Mianwali</option>
    <option value="Minchinabad">Minchinabad</option>
    <option value="Mitha Tiwana">Mitha Tiwana</option>
    <option value="Moza Shahwala">Moza Shahwala</option>
    <option value="Multan">Multan</option>
    <option value="Multan District">Multan District</option>
    <option value="Muridke">Muridke</option>
    <option value="Murree">Murree</option>
    <option value="Mustafabad">Mustafabad</option>
    <option value="Muzaffargarh">Muzaffargarh</option>
    <option value="Nankana Sahib">Nankana Sahib</option>
    <option value="Narang Mandi">Narang Mandi</option>
    <option value="Narowal">Narowal</option>
    <option value="Naushahra Virkan">Naushahra Virkan</option>
    <option value="Nazir Town">Nazir Town</option>
    <option value="Okara">Okara</option>
    <option value="Pakki Shagwanwali">Pakki Shagwanwali</option>
    <option value="Pakpattan">Pakpattan</option>
    <option value="Pasrur">Pasrur</option>
    <option value="Pattoki">Pattoki</option>
    <option value="Phalia">Phalia</option>
    <option value="Pind Dadan Khan">Pind Dadan Khan</option>
    <option value="Pindi Bhattian">Pindi Bhattian</option>
    <option value="Pindi Gheb">Pindi Gheb</option>
    <option value="Pir Mahal">Pir Mahal</option>
    <option value="Qadirpur Ran">Qadirpur Ran</option>
    <option value="Qila Didar Singh">Qila Didar Singh</option>
    <option value="Rabwah">Rabwah</option>
    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
    <option value="Rahimyar Khan District">Rahimyar Khan District</option>
    <option value="Raiwind">Raiwind</option>
    <option value="Raja Jang">Raja Jang</option>
    <option value="Rajanpur">Rajanpur</option>
    <option value="Rasulnagar">Rasulnagar</option>
    <option value="Rawalpindi">Rawalpindi</option>
    <option value="Rawalpindi District">Rawalpindi District</option>
    <option value="Renala Khurd">Renala Khurd</option>
    <option value="Rojhan">Rojhan</option>
    <option value="Sadiqabad">Sadiqabad</option>
    <option value="Sahiwal">Sahiwal</option>
    <option value="Sambrial">Sambrial</option>
    <option value="Sangla Hill">Sangla Hill</option>
    <option value="Sanjwal">Sanjwal</option>
    <option value="Sarai Alamgir">Sarai Alamgir</option>
    <option value="Sarai Sidhu">Sarai Sidhu</option>
    <option value="Sargodha">Sargodha</option>
    <option value="Shahkot Tehsil">Shahkot Tehsil</option>
    <option value="Shahpur">Shahpur</option>
    <option value="Shahr Sultan">Shahr Sultan</option>
    <option value="Shakargarh">Shakargarh</option>
    <option value="Sharqpur">Sharqpur</option>
    <option value="Sheikhupura">Sheikhupura</option>
    <option value="Shorkot">Shorkot</option>
    <option value="Shujaabad">Shujaabad</option>
    <option value="Sialkot">Sialkot</option>
    <option value="Sillanwali">Sillanwali</option>
    <option value="Sodhra">Sodhra</option>
    <option value="Sukheke Mandi">Sukheke Mandi</option>
    <option value="Surkhpur">Surkhpur</option>
    <option value="Talagang">Talagang</option>
    <option value="Talamba">Talamba</option>
    <option value="Tandlianwala">Tandlianwala</option>
    <option value="Taunsa">Taunsa</option>
    <option value="Toba Tek Singh">Toba Tek Singh</option>
    <option value="Umerkot">Umerkot</option>
    <option value="Vihari">Vihari</option>
    <option value="Wah">Wah</option>
    <option value="Warburton">Warburton</option>
    <option value="Wazirabad">Wazirabad</option>
    <option value="West Punjab">West Punjab</option>
    <option value="Yazman">Yazman</option>
    <option value="Zafarwal">Zafarwal</option>
    <option value="Zahir Pir">Zahir Pir</option>
											
										</select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>


 <div class="size-204 mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="state">
                                            <option>State</option>
                                            <option><?php  echo $_SESSION['state'];?></option>   
                                            <option value="Adilpur">Adilpur</option>
    <option value="Badin">Badin</option>
    <option value="Bagarji">Bagarji</option>
    <option value="Bandhi">Bandhi</option>
    <option value="Berani">Berani</option>
    <option value="Bhan">Bhan</option>
    <option value="Bhiria">Bhiria</option>
    <option value="Bhit Shah">Bhit Shah</option>
    <option value="Bozdar Wada">Bozdar Wada</option>
    <option value="Bulri">Bulri</option>
    <option value="Chak">Chak</option>
    <option value="Chamber">Chamber</option>
    <option value="Chhor">Chhor</option>
    <option value="Chuhar Jamali">Chuhar Jamali</option>
    <option value="Dadu">Dadu</option>
    <option value="Daromehar">Daromehar</option>
    <option value="Darya Khan Marri">Darya Khan Marri</option>
    <option value="Daulatpur">Daulatpur</option>
    <option value="Daur">Daur</option>
    <option value="Dhoro Naro">Dhoro Naro</option>
    <option value="Digri">Digri</option>
    <option value="Diplo">Diplo</option>
    <option value="Dokri">Dokri</option>
    <option value="Gambat">Gambat</option>
    <option value="Garhiyasin">Garhiyasin</option>
    <option value="Gharo">Gharo</option>
    <option value="Ghauspur">Ghauspur</option>
    <option value="Ghotki">Ghotki</option>
    <option value="Goth Garelo">Goth Garelo</option>
    <option value="Goth Phulji">Goth Phulji</option>
    <option value="Goth Radhan">Goth Radhan</option>
    <option value="Hala">Hala</option>
    <option value="Hingorja">Hingorja</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Islamkot">Islamkot</option>
    <option value="Jacobabad">Jacobabad</option>
    <option value="Jām Sāhib">Jām Sāhib</option>
    <option value="Jamshoro">Jamshoro</option>
    <option value="Jati">Jati</option>
    <option value="Jhol">Jhol</option>
    <option value="Johi">Johi</option>
    <option value="Kadhan">Kadhan</option>
    <option value="Kambar">Kambar</option>
    <option value="Kandhkot">Kandhkot</option>
    <option value="Kandiari">Kandiari</option>
    <option value="Kandiaro">Kandiaro</option>
    <option value="Karachi">Karachi</option>
    <option value="Karaundi">Karaundi</option>
    <option value="Kario Ghanwar">Kario Ghanwar</option>
    <option value="Kashmor">Kashmor</option>
    <option value="Keti Bandar">Keti Bandar</option>
    <option value="Khadro">Khadro</option>
    <option value="Khairpur">Khairpur</option>
    <option value="Khairpur Mir’s">Khairpur Mir’s</option>
    <option value="Khairpur Nathan Shah">Khairpur Nathan Shah</option>
    <option value="Khanpur Mahar">Khanpur Mahar</option>
    <option value="Kot Diji">Kot Diji</option>
    <option value="Kotri">Kotri</option>
    <option value="Kunri">Kunri</option>
    <option value="Lakhi">Lakhi</option>
    <option value="Larkana">Larkana</option>
    <option value="Madeji">Madeji</option>
    <option value="Malir Cantonment">Malir Cantonment</option>
    <option value="Matiari">Matiari</option>
    <option value="Matli">Matli</option>
    <option value="Mehar">Mehar</option>
    <option value="Miro Khan">Miro Khan</option>
    <option value="Mirpur Bhtoro">Mirpur Bhtoro</option>
    <option value="Mirpur Khas">Mirpur Khas</option>
    <option value="Mirpur Mathelo">Mirpur Mathelo</option>
    <option value="Mirpur Sakro">Mirpur Sakro</option>
    <option value="Mirwah Gorchani">Mirwah Gorchani</option>
    <option value="Mithi">Mithi</option>
    <option value="Moro">Moro</option>
    <option value="Nabisar">Nabisar</option>
    <option value="Nasirabad">Nasirabad</option>
    <option value="Naudero">Naudero</option>
    <option value="Naukot">Naukot</option>
    <option value="Naushahro Firoz">Naushahro Firoz</option>
    <option value="Nawabshah">Nawabshah</option>
    <option value="New Bādāh">New Bādāh</option>
    <option value="Pad Idan">Pad Idan</option>
    <option value="Pano Aqil">Pano Aqil</option>
    <option value="Pir Jo Goth">Pir Jo Goth</option>
    <option value="Pithoro">Pithoro</option>
    <option value="Rajo Khanani">Rajo Khanani</option>
    <option value="Ranipur">Ranipur</option>
    <option value="Ratodero">Ratodero</option>
    <option value="Rohri">Rohri</option>
    <option value="Rustam">Rustam</option>
    <option value="Sakrand">Sakrand</option>
    <option value="Samaro">Samaro</option>
    <option value="Sanghar">Sanghar</option>
    <option value="Sann">Sann</option>
    <option value="Sehwan">Sehwan</option>
    <option value="Setharja Old">Setharja Old</option>
    <option value="Shahdad Kot">Shahdad Kot</option>
    <option value="Shahdadpur">Shahdadpur</option>
    <option value="Shahpur Chakar">Shahpur Chakar</option>
    <option value="Shikarpur">Shikarpur</option>
    <option value="Sinjhoro">Sinjhoro</option>
    <option value="Sīta Road">Sīta Road</option>
    <option value="Sobhodero">Sobhodero</option>
    <option value="Sukkur">Sukkur</option>
    <option value="Talhar">Talhar</option>
    <option value="Tando Adam">Tando Adam</option>
    <option value="Tando Allahyar">Tando Allahyar</option>
    <option value="Tando Bago">Tando Bago</option>
    <option value="Tando Jam">Tando Jam</option>
    <option value="Tando Mitha Khan">Tando Mitha Khan</option>
    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
    <option value="Tangwani">Tangwani</option>
    <option value="Tharu Shah">Tharu Shah</option>
    <option value="Thatta">Thatta</option>
    <option value="Thul">Thul</option>
    <option value="Ubauro">Ubauro</option>
    <option value="Umarkot">Umarkot</option>
    <option value="Umerkot District">Umerkot District</option>
    <option value="Warah">Warah</option>
    <option value="">Select City</option>
    <option value="Ahmadpur Sial">Ahmadpur Sial</option>
    <option value="Ahmedpur East">Ahmedpur East</option>
    <option value="Alipur Chatha">Alipur Chatha</option>
    <option value="Arifwala">Arifwala</option>
    <option value="Attock Tehsil">Attock Tehsil</option>
    <option value="Baddomalhi">Baddomalhi</option>
    <option value="Bahawalnagar">Bahawalnagar</option>
    <option value="Bahawalpur">Bahawalpur</option>
    <option value="Bakhri Ahmad Khan">Bakhri Ahmad Khan</option>
    <option value="Basirpur">Basirpur</option>
    <option value="Basti Dosa">Basti Dosa</option>
    <option value="Begowala">Begowala</option>
    <option value="Bhakkar">Bhakkar</option>
    <option value="Bhalwal">Bhalwal</option>
    <option value="Bhawana">Bhawana</option>
    <option value="Bhera">Bhera</option>
    <option value="Bhopalwala">Bhopalwala</option>
    <option value="Burewala">Burewala</option>
    <option value="Chak Azam Saffo">Chak Azam Saffo</option>
    <option value="Chak Jhumra">Chak Jhumra</option>
    <option value="Chak One Hundred Twenty Nine Left">Chak One Hundred Twenty Nine Left</option>
    <option value="Chak Thirty-one -Eleven Left">Chak Thirty-one -Eleven Left</option>
    <option value="Chak Two Hundred Forty-Nine TDA">Chak Two Hundred Forty-Nine TDA</option>
    <option value="Chakwal">Chakwal</option>
    <option value="Chawinda">Chawinda</option>
    <option value="Chichawatni">Chichawatni</option>
    <option value="Chiniot">Chiniot</option>
    <option value="Chishtian">Chishtian</option>
    <option value="Choa Saidanshah">Choa Saidanshah</option>
    <option value="Chuhar Kana">Chuhar Kana</option>
    <option value="Chunian">Chunian</option>
    <option value="Daira Din Panah">Daira Din Panah</option>
    <option value="Dajal">Dajal</option>
    <option value="Dandot RS">Dandot RS</option>
    <option value="Darya Khan">Darya Khan</option>
    <option value="Daska">Daska</option>
    <option value="Daud Khel">Daud Khel</option>
    <option value="Daultala">Daultala</option>
    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
    <option value="Dhanot">Dhanot</option>
    <option value="Dhaunkal">Dhaunkal</option>
    <option value="Dhok Awan">Dhok Awan</option>
    <option value="Dijkot">Dijkot</option>
    <option value="Dinan Bashnoian Wala">Dinan Bashnoian Wala</option>
    <option value="Dinga">Dinga</option>
    <option value="Dipalpur">Dipalpur</option>
    <option value="Dullewala">Dullewala</option>
    <option value="Dunga Bunga">Dunga Bunga</option>
    <option value="Dunyapur">Dunyapur</option>
    <option value="Eminabad">Eminabad</option>
    <option value="Faisalabad">Faisalabad</option>
    <option value="Faqirwali">Faqirwali</option>
    <option value="Faruka">Faruka</option>
    <option value="Fazilpur">Fazilpur</option>
    <option value="Ferozewala">Ferozewala</option>
    <option value="Fort Abbas">Fort Abbas</option>
    <option value="Garh Maharaja">Garh Maharaja</option>
    <option value="Gojra">Gojra</option>
    <option value="Gujar Khan">Gujar Khan</option>
    <option value="Gujranwala">Gujranwala</option>
    <option value="Gujranwala Division">Gujranwala Division</option>
    <option value="Gujrat">Gujrat</option>
    <option value="Hadali">Hadali</option>
    <option value="Hafizabad">Hafizabad</option>
    <option value="Harnoli">Harnoli</option>
    <option value="Harunabad">Harunabad</option>
    <option value="Hasan Abdal">Hasan Abdal</option>
    <option value="Hasilpur">Hasilpur</option>
    <option value="Haveli Lakha">Haveli Lakha</option>
    <option value="Hazro">Hazro</option>
    <option value="Hujra Shah Muqeem">Hujra Shah Muqeem</option>
    <option value="Jahanian Shah">Jahanian Shah</option>
    <option value="Jalalpur Jattan">Jalalpur Jattan</option>
    <option value="Jalalpur Pirwala">Jalalpur Pirwala</option>
    <option value="Jampur">Jampur</option>
    <option value="Jand">Jand</option>
    <option value="Jandiala Sher Khan">Jandiala Sher Khan</option>
    <option value="Jaranwala">Jaranwala</option>
    <option value="Jatoi Shimali">Jatoi Shimali</option>
    <option value="Jauharabad">Jauharabad</option>
    <option value="Jhang">Jhang</option>
    <option value="Jhang Sadar">Jhang Sadar</option>
    <option value="Jhawarian">Jhawarian</option>
    <option value="Jhelum">Jhelum</option>
    <option value="Kabirwala">Kabirwala</option>
    <option value="Kahna Nau">Kahna Nau</option>
    <option value="Kahuta">Kahuta</option>
    <option value="Kalabagh">Kalabagh</option>
    <option value="Kalaswala">Kalaswala</option>
    <option value="Kaleke Mandi">Kaleke Mandi</option>
    <option value="Kallar Kahar">Kallar Kahar</option>
    <option value="Kalur Kot">Kalur Kot</option>
    <option value="Kamalia">Kamalia</option>
    <option value="Kamar Mushani">Kamar Mushani</option>
    <option value="Kamoke">Kamoke</option>
    <option value="Kamra">Kamra</option>
    <option value="Kanganpur">Kanganpur</option>
    <option value="Karor">Karor</option>
    <option value="Kasur">Kasur</option>
    <option value="Keshupur">Keshupur</option>
    <option value="Khairpur Tamiwali">Khairpur Tamiwali</option>
    <option value="Khandowa">Khandowa</option>
    <option value="Khanewal">Khanewal</option>
    <option value="Khanga Dogran">Khanga Dogran</option>
    <option value="Khangarh">Khangarh</option>
    <option value="Khanpur">Khanpur</option>
    <option value="Kharian">Kharian</option>
    <option value="Khewra">Khewra</option>
    <option value="Khurrianwala">Khurrianwala</option>
    <option value="Khushab">Khushab</option>
    <option value="Kohror Pakka">Kohror Pakka</option>
    <option value="Kot Addu Tehsil">Kot Addu Tehsil</option>
    <option value="Kot Ghulam Muhammad">Kot Ghulam Muhammad</option>
    <option value="Kot Mumin">Kot Mumin</option>
    <option value="Kot Radha Kishan">Kot Radha Kishan</option>
    <option value="Kot Rajkour">Kot Rajkour</option>
    <option value="Kot Samaba">Kot Samaba</option>
    <option value="Kot Sultan">Kot Sultan</option>
    <option value="Kotli Loharan">Kotli Loharan</option>
    <option value="Kundian">Kundian</option>
    <option value="Kunjah">Kunjah</option>
    <option value="Ladhewala Waraich">Ladhewala Waraich</option>
    <option value="Lahore">Lahore</option>
    <option value="Lala Musa">Lala Musa</option>
    <option value="Lalian">Lalian</option>
    <option value="Layyah">Layyah</option>
    <option value="Layyah District">Layyah District</option>
    <option value="Liliani">Liliani</option>
    <option value="Lodhran">Lodhran</option>
    <option value="Mailsi">Mailsi</option>
    <option value="Malakwal">Malakwal</option>
    <option value="Malakwal City">Malakwal City</option>
    <option value="Mamu Kanjan">Mamu Kanjan</option>
    <option value="Mananwala">Mananwala</option>
    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
    <option value="Mandi Bahauddin District">Mandi Bahauddin District</option>
    <option value="Mangla">Mangla</option>
    <option value="Mankera">Mankera</option>
    <option value="Mehmand Chak">Mehmand Chak</option>
    <option value="Mian Channun">Mian Channun</option>
    <option value="Mianke Mor">Mianke Mor</option>
    <option value="Mianwali">Mianwali</option>
    <option value="Minchinabad">Minchinabad</option>
    <option value="Mitha Tiwana">Mitha Tiwana</option>
    <option value="Moza Shahwala">Moza Shahwala</option>
    <option value="Multan">Multan</option>
    <option value="Multan District">Multan District</option>
    <option value="Muridke">Muridke</option>
    <option value="Murree">Murree</option>
    <option value="Mustafabad">Mustafabad</option>
    <option value="Muzaffargarh">Muzaffargarh</option>
    <option value="Nankana Sahib">Nankana Sahib</option>
    <option value="Narang Mandi">Narang Mandi</option>
    <option value="Narowal">Narowal</option>
    <option value="Naushahra Virkan">Naushahra Virkan</option>
    <option value="Nazir Town">Nazir Town</option>
    <option value="Okara">Okara</option>
    <option value="Pakki Shagwanwali">Pakki Shagwanwali</option>
    <option value="Pakpattan">Pakpattan</option>
    <option value="Pasrur">Pasrur</option>
    <option value="Pattoki">Pattoki</option>
    <option value="Phalia">Phalia</option>
    <option value="Pind Dadan Khan">Pind Dadan Khan</option>
    <option value="Pindi Bhattian">Pindi Bhattian</option>
    <option value="Pindi Gheb">Pindi Gheb</option>
    <option value="Pir Mahal">Pir Mahal</option>
    <option value="Qadirpur Ran">Qadirpur Ran</option>
    <option value="Qila Didar Singh">Qila Didar Singh</option>
    <option value="Rabwah">Rabwah</option>
    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
    <option value="Rahimyar Khan District">Rahimyar Khan District</option>
    <option value="Raiwind">Raiwind</option>
    <option value="Raja Jang">Raja Jang</option>
    <option value="Rajanpur">Rajanpur</option>
    <option value="Rasulnagar">Rasulnagar</option>
    <option value="Rawalpindi">Rawalpindi</option>
    <option value="Rawalpindi District">Rawalpindi District</option>
    <option value="Renala Khurd">Renala Khurd</option>
    <option value="Rojhan">Rojhan</option>
    <option value="Sadiqabad">Sadiqabad</option>
    <option value="Sahiwal">Sahiwal</option>
    <option value="Sambrial">Sambrial</option>
    <option value="Sangla Hill">Sangla Hill</option>
    <option value="Sanjwal">Sanjwal</option>
    <option value="Sarai Alamgir">Sarai Alamgir</option>
    <option value="Sarai Sidhu">Sarai Sidhu</option>
    <option value="Sargodha">Sargodha</option>
    <option value="Shahkot Tehsil">Shahkot Tehsil</option>
    <option value="Shahpur">Shahpur</option>
    <option value="Shahr Sultan">Shahr Sultan</option>
    <option value="Shakargarh">Shakargarh</option>
    <option value="Sharqpur">Sharqpur</option>
    <option value="Sheikhupura">Sheikhupura</option>
    <option value="Shorkot">Shorkot</option>
    <option value="Shujaabad">Shujaabad</option>
    <option value="Sialkot">Sialkot</option>
    <option value="Sillanwali">Sillanwali</option>
    <option value="Sodhra">Sodhra</option>
    <option value="Sukheke Mandi">Sukheke Mandi</option>
    <option value="Surkhpur">Surkhpur</option>
    <option value="Talagang">Talagang</option>
    <option value="Talamba">Talamba</option>
    <option value="Tandlianwala">Tandlianwala</option>
    <option value="Taunsa">Taunsa</option>
    <option value="Toba Tek Singh">Toba Tek Singh</option>
    <option value="Umerkot">Umerkot</option>
    <option value="Vihari">Vihari</option>
    <option value="Wah">Wah</option>
    <option value="Warburton">Warburton</option>
    <option value="Wazirabad">Wazirabad</option>
    <option value="West Punjab">West Punjab</option>
    <option value="Yazman">Yazman</option>
    <option value="Zafarwal">Zafarwal</option>
    <option value="Zahir Pir">Zahir Pir</option>
                                            
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>

                                 <div class="size-204 mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="city">
                                            <option>City</option>
                                            <option><?php  echo $_SESSION['city'];?></option>   
                                            <option value="Adilpur">Adilpur</option>
    <option value="Badin">Badin</option>
    <option value="Bagarji">Bagarji</option>
    <option value="Bandhi">Bandhi</option>
    <option value="Berani">Berani</option>
    <option value="Bhan">Bhan</option>
    <option value="Bhiria">Bhiria</option>
    <option value="Bhit Shah">Bhit Shah</option>
    <option value="Bozdar Wada">Bozdar Wada</option>
    <option value="Bulri">Bulri</option>
    <option value="Chak">Chak</option>
    <option value="Chamber">Chamber</option>
    <option value="Chhor">Chhor</option>
    <option value="Chuhar Jamali">Chuhar Jamali</option>
    <option value="Dadu">Dadu</option>
    <option value="Daromehar">Daromehar</option>
    <option value="Darya Khan Marri">Darya Khan Marri</option>
    <option value="Daulatpur">Daulatpur</option>
    <option value="Daur">Daur</option>
    <option value="Dhoro Naro">Dhoro Naro</option>
    <option value="Digri">Digri</option>
    <option value="Diplo">Diplo</option>
    <option value="Dokri">Dokri</option>
    <option value="Gambat">Gambat</option>
    <option value="Garhiyasin">Garhiyasin</option>
    <option value="Gharo">Gharo</option>
    <option value="Ghauspur">Ghauspur</option>
    <option value="Ghotki">Ghotki</option>
    <option value="Goth Garelo">Goth Garelo</option>
    <option value="Goth Phulji">Goth Phulji</option>
    <option value="Goth Radhan">Goth Radhan</option>
    <option value="Hala">Hala</option>
    <option value="Hingorja">Hingorja</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Islamkot">Islamkot</option>
    <option value="Jacobabad">Jacobabad</option>
    <option value="Jām Sāhib">Jām Sāhib</option>
    <option value="Jamshoro">Jamshoro</option>
    <option value="Jati">Jati</option>
    <option value="Jhol">Jhol</option>
    <option value="Johi">Johi</option>
    <option value="Kadhan">Kadhan</option>
    <option value="Kambar">Kambar</option>
    <option value="Kandhkot">Kandhkot</option>
    <option value="Kandiari">Kandiari</option>
    <option value="Kandiaro">Kandiaro</option>
    <option value="Karachi">Karachi</option>
    <option value="Karaundi">Karaundi</option>
    <option value="Kario Ghanwar">Kario Ghanwar</option>
    <option value="Kashmor">Kashmor</option>
    <option value="Keti Bandar">Keti Bandar</option>
    <option value="Khadro">Khadro</option>
    <option value="Khairpur">Khairpur</option>
    <option value="Khairpur Mir’s">Khairpur Mir’s</option>
    <option value="Khairpur Nathan Shah">Khairpur Nathan Shah</option>
    <option value="Khanpur Mahar">Khanpur Mahar</option>
    <option value="Kot Diji">Kot Diji</option>
    <option value="Kotri">Kotri</option>
    <option value="Kunri">Kunri</option>
    <option value="Lakhi">Lakhi</option>
    <option value="Larkana">Larkana</option>
    <option value="Madeji">Madeji</option>
    <option value="Malir Cantonment">Malir Cantonment</option>
    <option value="Matiari">Matiari</option>
    <option value="Matli">Matli</option>
    <option value="Mehar">Mehar</option>
    <option value="Miro Khan">Miro Khan</option>
    <option value="Mirpur Bhtoro">Mirpur Bhtoro</option>
    <option value="Mirpur Khas">Mirpur Khas</option>
    <option value="Mirpur Mathelo">Mirpur Mathelo</option>
    <option value="Mirpur Sakro">Mirpur Sakro</option>
    <option value="Mirwah Gorchani">Mirwah Gorchani</option>
    <option value="Mithi">Mithi</option>
    <option value="Moro">Moro</option>
    <option value="Nabisar">Nabisar</option>
    <option value="Nasirabad">Nasirabad</option>
    <option value="Naudero">Naudero</option>
    <option value="Naukot">Naukot</option>
    <option value="Naushahro Firoz">Naushahro Firoz</option>
    <option value="Nawabshah">Nawabshah</option>
    <option value="New Bādāh">New Bādāh</option>
    <option value="Pad Idan">Pad Idan</option>
    <option value="Pano Aqil">Pano Aqil</option>
    <option value="Pir Jo Goth">Pir Jo Goth</option>
    <option value="Pithoro">Pithoro</option>
    <option value="Rajo Khanani">Rajo Khanani</option>
    <option value="Ranipur">Ranipur</option>
    <option value="Ratodero">Ratodero</option>
    <option value="Rohri">Rohri</option>
    <option value="Rustam">Rustam</option>
    <option value="Sakrand">Sakrand</option>
    <option value="Samaro">Samaro</option>
    <option value="Sanghar">Sanghar</option>
    <option value="Sann">Sann</option>
    <option value="Sehwan">Sehwan</option>
    <option value="Setharja Old">Setharja Old</option>
    <option value="Shahdad Kot">Shahdad Kot</option>
    <option value="Shahdadpur">Shahdadpur</option>
    <option value="Shahpur Chakar">Shahpur Chakar</option>
    <option value="Shikarpur">Shikarpur</option>
    <option value="Sinjhoro">Sinjhoro</option>
    <option value="Sīta Road">Sīta Road</option>
    <option value="Sobhodero">Sobhodero</option>
    <option value="Sukkur">Sukkur</option>
    <option value="Talhar">Talhar</option>
    <option value="Tando Adam">Tando Adam</option>
    <option value="Tando Allahyar">Tando Allahyar</option>
    <option value="Tando Bago">Tando Bago</option>
    <option value="Tando Jam">Tando Jam</option>
    <option value="Tando Mitha Khan">Tando Mitha Khan</option>
    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
    <option value="Tangwani">Tangwani</option>
    <option value="Tharu Shah">Tharu Shah</option>
    <option value="Thatta">Thatta</option>
    <option value="Thul">Thul</option>
    <option value="Ubauro">Ubauro</option>
    <option value="Umarkot">Umarkot</option>
    <option value="Umerkot District">Umerkot District</option>
    <option value="Warah">Warah</option>
    <option value="">Select City</option>
    <option value="Ahmadpur Sial">Ahmadpur Sial</option>
    <option value="Ahmedpur East">Ahmedpur East</option>
    <option value="Alipur Chatha">Alipur Chatha</option>
    <option value="Arifwala">Arifwala</option>
    <option value="Attock Tehsil">Attock Tehsil</option>
    <option value="Baddomalhi">Baddomalhi</option>
    <option value="Bahawalnagar">Bahawalnagar</option>
    <option value="Bahawalpur">Bahawalpur</option>
    <option value="Bakhri Ahmad Khan">Bakhri Ahmad Khan</option>
    <option value="Basirpur">Basirpur</option>
    <option value="Basti Dosa">Basti Dosa</option>
    <option value="Begowala">Begowala</option>
    <option value="Bhakkar">Bhakkar</option>
    <option value="Bhalwal">Bhalwal</option>
    <option value="Bhawana">Bhawana</option>
    <option value="Bhera">Bhera</option>
    <option value="Bhopalwala">Bhopalwala</option>
    <option value="Burewala">Burewala</option>
    <option value="Chak Azam Saffo">Chak Azam Saffo</option>
    <option value="Chak Jhumra">Chak Jhumra</option>
    <option value="Chak One Hundred Twenty Nine Left">Chak One Hundred Twenty Nine Left</option>
    <option value="Chak Thirty-one -Eleven Left">Chak Thirty-one -Eleven Left</option>
    <option value="Chak Two Hundred Forty-Nine TDA">Chak Two Hundred Forty-Nine TDA</option>
    <option value="Chakwal">Chakwal</option>
    <option value="Chawinda">Chawinda</option>
    <option value="Chichawatni">Chichawatni</option>
    <option value="Chiniot">Chiniot</option>
    <option value="Chishtian">Chishtian</option>
    <option value="Choa Saidanshah">Choa Saidanshah</option>
    <option value="Chuhar Kana">Chuhar Kana</option>
    <option value="Chunian">Chunian</option>
    <option value="Daira Din Panah">Daira Din Panah</option>
    <option value="Dajal">Dajal</option>
    <option value="Dandot RS">Dandot RS</option>
    <option value="Darya Khan">Darya Khan</option>
    <option value="Daska">Daska</option>
    <option value="Daud Khel">Daud Khel</option>
    <option value="Daultala">Daultala</option>
    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
    <option value="Dhanot">Dhanot</option>
    <option value="Dhaunkal">Dhaunkal</option>
    <option value="Dhok Awan">Dhok Awan</option>
    <option value="Dijkot">Dijkot</option>
    <option value="Dinan Bashnoian Wala">Dinan Bashnoian Wala</option>
    <option value="Dinga">Dinga</option>
    <option value="Dipalpur">Dipalpur</option>
    <option value="Dullewala">Dullewala</option>
    <option value="Dunga Bunga">Dunga Bunga</option>
    <option value="Dunyapur">Dunyapur</option>
    <option value="Eminabad">Eminabad</option>
    <option value="Faisalabad">Faisalabad</option>
    <option value="Faqirwali">Faqirwali</option>
    <option value="Faruka">Faruka</option>
    <option value="Fazilpur">Fazilpur</option>
    <option value="Ferozewala">Ferozewala</option>
    <option value="Fort Abbas">Fort Abbas</option>
    <option value="Garh Maharaja">Garh Maharaja</option>
    <option value="Gojra">Gojra</option>
    <option value="Gujar Khan">Gujar Khan</option>
    <option value="Gujranwala">Gujranwala</option>
    <option value="Gujranwala Division">Gujranwala Division</option>
    <option value="Gujrat">Gujrat</option>
    <option value="Hadali">Hadali</option>
    <option value="Hafizabad">Hafizabad</option>
    <option value="Harnoli">Harnoli</option>
    <option value="Harunabad">Harunabad</option>
    <option value="Hasan Abdal">Hasan Abdal</option>
    <option value="Hasilpur">Hasilpur</option>
    <option value="Haveli Lakha">Haveli Lakha</option>
    <option value="Hazro">Hazro</option>
    <option value="Hujra Shah Muqeem">Hujra Shah Muqeem</option>
    <option value="Jahanian Shah">Jahanian Shah</option>
    <option value="Jalalpur Jattan">Jalalpur Jattan</option>
    <option value="Jalalpur Pirwala">Jalalpur Pirwala</option>
    <option value="Jampur">Jampur</option>
    <option value="Jand">Jand</option>
    <option value="Jandiala Sher Khan">Jandiala Sher Khan</option>
    <option value="Jaranwala">Jaranwala</option>
    <option value="Jatoi Shimali">Jatoi Shimali</option>
    <option value="Jauharabad">Jauharabad</option>
    <option value="Jhang">Jhang</option>
    <option value="Jhang Sadar">Jhang Sadar</option>
    <option value="Jhawarian">Jhawarian</option>
    <option value="Jhelum">Jhelum</option>
    <option value="Kabirwala">Kabirwala</option>
    <option value="Kahna Nau">Kahna Nau</option>
    <option value="Kahuta">Kahuta</option>
    <option value="Kalabagh">Kalabagh</option>
    <option value="Kalaswala">Kalaswala</option>
    <option value="Kaleke Mandi">Kaleke Mandi</option>
    <option value="Kallar Kahar">Kallar Kahar</option>
    <option value="Kalur Kot">Kalur Kot</option>
    <option value="Kamalia">Kamalia</option>
    <option value="Kamar Mushani">Kamar Mushani</option>
    <option value="Kamoke">Kamoke</option>
    <option value="Kamra">Kamra</option>
    <option value="Kanganpur">Kanganpur</option>
    <option value="Karor">Karor</option>
    <option value="Kasur">Kasur</option>
    <option value="Keshupur">Keshupur</option>
    <option value="Khairpur Tamiwali">Khairpur Tamiwali</option>
    <option value="Khandowa">Khandowa</option>
    <option value="Khanewal">Khanewal</option>
    <option value="Khanga Dogran">Khanga Dogran</option>
    <option value="Khangarh">Khangarh</option>
    <option value="Khanpur">Khanpur</option>
    <option value="Kharian">Kharian</option>
    <option value="Khewra">Khewra</option>
    <option value="Khurrianwala">Khurrianwala</option>
    <option value="Khushab">Khushab</option>
    <option value="Kohror Pakka">Kohror Pakka</option>
    <option value="Kot Addu Tehsil">Kot Addu Tehsil</option>
    <option value="Kot Ghulam Muhammad">Kot Ghulam Muhammad</option>
    <option value="Kot Mumin">Kot Mumin</option>
    <option value="Kot Radha Kishan">Kot Radha Kishan</option>
    <option value="Kot Rajkour">Kot Rajkour</option>
    <option value="Kot Samaba">Kot Samaba</option>
    <option value="Kot Sultan">Kot Sultan</option>
    <option value="Kotli Loharan">Kotli Loharan</option>
    <option value="Kundian">Kundian</option>
    <option value="Kunjah">Kunjah</option>
    <option value="Ladhewala Waraich">Ladhewala Waraich</option>
    <option value="Lahore">Lahore</option>
    <option value="Lala Musa">Lala Musa</option>
    <option value="Lalian">Lalian</option>
    <option value="Layyah">Layyah</option>
    <option value="Layyah District">Layyah District</option>
    <option value="Liliani">Liliani</option>
    <option value="Lodhran">Lodhran</option>
    <option value="Mailsi">Mailsi</option>
    <option value="Malakwal">Malakwal</option>
    <option value="Malakwal City">Malakwal City</option>
    <option value="Mamu Kanjan">Mamu Kanjan</option>
    <option value="Mananwala">Mananwala</option>
    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
    <option value="Mandi Bahauddin District">Mandi Bahauddin District</option>
    <option value="Mangla">Mangla</option>
    <option value="Mankera">Mankera</option>
    <option value="Mehmand Chak">Mehmand Chak</option>
    <option value="Mian Channun">Mian Channun</option>
    <option value="Mianke Mor">Mianke Mor</option>
    <option value="Mianwali">Mianwali</option>
    <option value="Minchinabad">Minchinabad</option>
    <option value="Mitha Tiwana">Mitha Tiwana</option>
    <option value="Moza Shahwala">Moza Shahwala</option>
    <option value="Multan">Multan</option>
    <option value="Multan District">Multan District</option>
    <option value="Muridke">Muridke</option>
    <option value="Murree">Murree</option>
    <option value="Mustafabad">Mustafabad</option>
    <option value="Muzaffargarh">Muzaffargarh</option>
    <option value="Nankana Sahib">Nankana Sahib</option>
    <option value="Narang Mandi">Narang Mandi</option>
    <option value="Narowal">Narowal</option>
    <option value="Naushahra Virkan">Naushahra Virkan</option>
    <option value="Nazir Town">Nazir Town</option>
    <option value="Okara">Okara</option>
    <option value="Pakki Shagwanwali">Pakki Shagwanwali</option>
    <option value="Pakpattan">Pakpattan</option>
    <option value="Pasrur">Pasrur</option>
    <option value="Pattoki">Pattoki</option>
    <option value="Phalia">Phalia</option>
    <option value="Pind Dadan Khan">Pind Dadan Khan</option>
    <option value="Pindi Bhattian">Pindi Bhattian</option>
    <option value="Pindi Gheb">Pindi Gheb</option>
    <option value="Pir Mahal">Pir Mahal</option>
    <option value="Qadirpur Ran">Qadirpur Ran</option>
    <option value="Qila Didar Singh">Qila Didar Singh</option>
    <option value="Rabwah">Rabwah</option>
    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
    <option value="Rahimyar Khan District">Rahimyar Khan District</option>
    <option value="Raiwind">Raiwind</option>
    <option value="Raja Jang">Raja Jang</option>
    <option value="Rajanpur">Rajanpur</option>
    <option value="Rasulnagar">Rasulnagar</option>
    <option value="Rawalpindi">Rawalpindi</option>
    <option value="Rawalpindi District">Rawalpindi District</option>
    <option value="Renala Khurd">Renala Khurd</option>
    <option value="Rojhan">Rojhan</option>
    <option value="Sadiqabad">Sadiqabad</option>
    <option value="Sahiwal">Sahiwal</option>
    <option value="Sambrial">Sambrial</option>
    <option value="Sangla Hill">Sangla Hill</option>
    <option value="Sanjwal">Sanjwal</option>
    <option value="Sarai Alamgir">Sarai Alamgir</option>
    <option value="Sarai Sidhu">Sarai Sidhu</option>
    <option value="Sargodha">Sargodha</option>
    <option value="Shahkot Tehsil">Shahkot Tehsil</option>
    <option value="Shahpur">Shahpur</option>
    <option value="Shahr Sultan">Shahr Sultan</option>
    <option value="Shakargarh">Shakargarh</option>
    <option value="Sharqpur">Sharqpur</option>
    <option value="Sheikhupura">Sheikhupura</option>
    <option value="Shorkot">Shorkot</option>
    <option value="Shujaabad">Shujaabad</option>
    <option value="Sialkot">Sialkot</option>
    <option value="Sillanwali">Sillanwali</option>
    <option value="Sodhra">Sodhra</option>
    <option value="Sukheke Mandi">Sukheke Mandi</option>
    <option value="Surkhpur">Surkhpur</option>
    <option value="Talagang">Talagang</option>
    <option value="Talamba">Talamba</option>
    <option value="Tandlianwala">Tandlianwala</option>
    <option value="Taunsa">Taunsa</option>
    <option value="Toba Tek Singh">Toba Tek Singh</option>
    <option value="Umerkot">Umerkot</option>
    <option value="Vihari">Vihari</option>
    <option value="Wah">Wah</option>
    <option value="Warburton">Warburton</option>
    <option value="Wazirabad">Wazirabad</option>
    <option value="West Punjab">West Punjab</option>
    <option value="Yazman">Yazman</option>
    <option value="Zafarwal">Zafarwal</option>
    <option value="Zahir Pir">Zahir Pir</option>
                                            
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
        <div class="size-204 mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="insuretype">
										<option><?php  echo $_SESSION['insuretype'];?></option>   
                                        	<option>Insurance Type</option>
											<option>My insurance covers rentals</option>
											<option>My insurance doesn't cover rentals or I don't have an insurance</option>
											<option>I have an insurance and don't know whether it covers rentals</option>
											
										</select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div> 
        <label>Postal Code </label>
            <input type="text" class="typecol" name="postcode" value=<?php echo $_SESSION['postalcode'] ?>>
        <label>Address </label>
        <input type="text" class="typecol" name="address" value=<?php echo $_SESSION['address']; ?>>
        <label>Phone </label>
        <input type="text" class="typecol" name="phone" value=<?php echo $_SESSION['phone']; ?>>




        <!-- <div id="dropdown"></div> -->


        <!-- img upload start -->
        <div class="center mb-5 mt-3">
            <div class="form-input">
                <div class="preview">
                    <img id="file-ip-1-preview">
                </div>
                <label for="file-ip-1">Proof of ID Front</label>
                <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview1(event);">

            </div>
        </div>
        <!-- img upload end -->
        <!-- img upload start -->
        <div class="center">
            <div class="form-input">
                <div class="preview1">
                    <img id="file-ip-2-preview">
                </div>
                <label for="file-ip-2">Proof of ID Back</label>
                <input type="file" id="file-ip-2" accept="image/*" onchange="showPreview(event);">

            </div>
        </div>
        <!-- img upload end -->





        <div style="margin-top:15px;width:100%;display: flex;justify-content:center;align-items:center;height: 100%;">
                    <button type="submit" name="login" id="btn1log"><!-- <a href="profile.php" style="text-decoration:none;color:white;font-size:22px">Login</a> -->Update Profile</button>
                </div>
    </div>

</form>
    <div id="gap1"></div>

<?php include 'footer.php' ?>


    <script type="text/javascript">
        function showPreview1(event) {
           /// console.log(44)
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>


    <script>
        function showPreview(event) {
          //  console.log(55)
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-2-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
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




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>

</html>