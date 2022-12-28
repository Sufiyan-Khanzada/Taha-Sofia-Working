<?php

session_start();
if(isset($_SESSION['POST'])){
    

    $_POST= $_SESSION['POST'][0];
    unset($_SESSION['POST']);
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Rental</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="style.css">
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <style>
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

.picdet{
    text-align: center;
}
.picdet li{
    border: none;
}

.button3 {font-size: 16px;}

.citydown{
    background-color: #fff;
    border: 1px solid #e6e6e6;
    color: #888;
    height: 40px;
    width: 100%;
    padding: 10px;
    border-radius: 3px;
    margin: 5px 0;
    display: inline-block;
    font-size: 14px;
    text-decoration: none;
}
input.form-check-input:checked {
    background-color: #5ac335;
    border-color: #0d6efd00;
    border-radius: 50px;
}

input.form-check-input {
    border-radius: 50px!important;    
}
    </style>

</head>

<body>


    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
            <i class="fa fa-angle-left fa-2x"  onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profheadrev">Request a Rental</div>
        </div>
    </div>
    <!-- header end -->

 <form method="post" enctype="multipart/form-data">
    <!-- profile des start -->
    <div id="review1">
        <!-- first review -->
        <div class="card mb-3 revcard" style="max-width: 540px; box-shadow:none; background:none; border:none;">
            <div class="row g-0">
               
                <div class="col-md-4  sizeadj">
                    <img src="<?php echo $_POST['i_image']; ?>" width="100%" class="img-fluid rounded-start reviewimg">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h6 class="head1txt"><?php echo $_POST['i_name'];?></h6>
                        <div class="stext"><?php echo "Brand name: ".$_POST['i_brand'] ." ";?></div>
                        <div class="stext"><?php echo "Size: ".$_POST['i_size'];?></div>
                        
                        <?php
                        if(empty($_POST['to']))
                        {
                        $to=substr($_POST['daterange'],13);
                        $subject = $_POST['daterange'] ;
                        $search = $to ;
                        $trimmed = str_replace($search, '', $subject);
                        $from=str_replace('-', '', $trimmed);
                    }
                    else{
                        $to=$_POST['to'];
                        $from=$_POST['from'];
                        

                    }
    ?>   
     
    <input type="hidden" value="<?php echo $_POST['i_name'];?>" name="i_name"/>
    <input type="hidden" value="<?php echo $_POST['i_brand']; ?>" name="i_brand"/>
    <input type="hidden" value="<?php echo $_POST['i_size']; ?>" name="i_size"/>
    <input type="hidden" value="<?php echo $_POST['i_price']; ?>" name="i_price"/>
    <input type="hidden" value="<?php echo $_POST['user_id']; ?>"    name="user_id"/>
    <input type="hidden" value="<?php echo $_POST['i_id']; ?>" name="i_id"/>
    <input type="hidden" value="<?php echo $_POST['i_image'];?>" name="i_image"/>
     
    <input type="hidden" value="<?php echo $to; ?>" name="to"/>
    <input type="hidden" value="<?php echo $from; ?>" name="from"/>
    
                        
                        
<?php

// echo "<br>".$from ;
                        
                        
                        //numbers of days code
                        // $datediff = $from - $to;

                        // echo round("".$datediff / (60 * 60 * 24));
     ?>                
                        
                        <div class="stext"><?php echo "Rental Period : ".$from ." - ".$to;?></div>
                        <?php
if(isset($_POST['rent']))
{
    include_once 'request_rental_code.php'; 
}
?>                   
                      
                        
                        
                        
                        

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- profile des end -->

    <hr>
    
    <!-- del option start -->
    <div class="del1 head1txt">DELIVERY OPTION</div>
    <!-- del option end -->

    <!-- del optionsub start -->
    <div class="del1 stext-102">
<div class="form-check">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="postage" id="" value="1"> <p class="ml-2 pt-1" style="font-size:13px;color:#212529;">Postage ($5)</p>
  </label>
</div>
<div class="form-check mt-2">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="arrangecollection" id="" value="1"> <p class="ml-2 pt-1" style="font-size:13px;color:#212529;">I will arange a collection</p>
  </label>
</div>

        <!-- <div class="subdel11">
            <div class="subdel21">Postage($5)</div>
            <div class="subdel111"><i class="fa-solid fa-circle-check"></i></div>
        </div> -->
       
    </div>
    <!-- del optionsub end -->

    <hr>

        <!-- del address start -->
        <div class="del1 head1txt">ADDRESS OPTION</div>
    <!-- del option end -->

    <!-- del optionsub start -->
    <div class="del2 stext-102">
    <ul class="list-group">
    <li class="list-group-items">
    <input class="form-control"  name="address" type="text" value="<?php echo $_SESSION['address']."(Default)"  ?>" aria-label="address input example" readonly>
    <!-- <a href="#" data-toggle="modal" data-target="#exampleModalCenter" id="shipsomewhere" style="font-size: 13px; color: #0d6efd;">ship somewhere else?</a>-->
    <a href="#!" id="shipsomewhere" style="font-size: 13px; color: #0d6efd;">ship somewhere else?</a> 
    <div id="TextBoxesGroup"></div>
    <script>
        counter=0;
        $("#shipsomewhere").click(
            function(){   
                if(counter==0){
                var newTextBoxDiv = $(document.createElement('div'))
         .attr("id", 'TextBoxDiv' + counter);

    newTextBoxDiv.after().html('<label style="font-size:13px;color:#212529;">Enter Your Address' + ' : </label>' +
          '<input type="text" name="NewAddress" id="textbox' + counter + '" value="" >');

    newTextBoxDiv.appendTo("#TextBoxesGroup");


    counter++;
}
else
{
    $("#TextBoxDiv0").remove();
    counter--;

}
     });

    </script>
        <div class="mb-3 form-check jusflex">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label " for="exampleCheck1" style="margin-left: 2%;font-size: 13px;color:#212529;">I'm okay with <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">sharing the data </a></label>
        </div>
    </li>
    </ul>
    </div>
    <!-- del address end -->

    <!-- Modal Delete -->
    
<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->
    <!-- <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title" id="exampleModalLongTitle">Add New Address</Address></h5>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--      <section>-->
<!--        <label for="name">Name</label>-->
<!--        <input id="name" name="name" autocomplete="name" maxlength="100"  required style="width: 100%;">-->
<!--      </section> -->


<!-- <section>-->
<!--        <label for="address">Address</label>-->
<!--        <textarea id="address" name="address" autocomplete="address" maxlength="300" required style="width: 100%; border: 1px solid #e6e6e6;"></textarea>-->
<!--      </section>-->
<!--      <section>-->
<!--        <label for="postal-code">ZIP or postal code (optional)</label>-->
<!--        <input id="postal-code" name="postal-code" autocomplete="postal-code" maxlength="20" style="width: 100%;">-->
<!--      </section>-->
      
<!--      <section id="country-region">-->
<!--        <label for="country">Country or region</label>-->
<!--        <select id="country" class="citydown" name="country" autocomplete="country" enterkeyhint="done" required>-->
<!--            <option selected value="SPACER"> </option>-->
<!--            <option value="AF">Afghanistan</option>-->
<!--            <option value="AX">Åland Islands</option>-->
<!--            <option value="AL">Albania</option>-->
<!--            <option value="DZ">Algeria</option>-->
<!--            <option value="AS">American Samoa</option>-->
<!--            <option value="AD">Andorra</option>-->
<!--            <option value="AO">Angola</option>-->
<!--            <option value="AI">Anguilla</option>-->
<!--            <option value="AQ">Antarctica</option>-->
<!--            <option value="AG">Antigua &amp; Barbuda</option>-->
<!--            <option value="AR">Argentina</option>-->
<!--            <option value="AM">Armenia</option>-->
<!--            <option value="AW">Aruba</option>-->
<!--            <option value="AC">Ascension Island</option>-->
<!--            <option value="AU">Australia</option>-->
<!--            <option value="AT">Austria</option>-->
<!--            <option value="AZ">Azerbaijan</option>-->
<!--            <option value="BS">Bahamas</option>-->
<!--            <option value="BH">Bahrain</option>-->
<!--            <option value="BD">Bangladesh</option>-->
<!--            <option value="BB">Barbados</option>-->
<!--            <option value="BY">Belarus</option>-->
<!--            <option value="BE">Belgium</option>-->
<!--            <option value="BZ">Belize</option>-->
<!--            <option value="BJ">Benin</option>-->
<!--            <option value="BM">Bermuda</option>-->
<!--            <option value="BT">Bhutan</option>-->
<!--            <option value="BO">Bolivia</option>-->
<!--            <option value="BA">Bosnia &amp; Herzegovina</option>-->
<!--            <option value="BW">Botswana</option>-->
<!--            <option value="BV">Bouvet Island</option>-->
<!--            <option value="BR">Brazil</option>-->
<!--            <option value="IO">British Indian Ocean Territory</option>-->
<!--            <option value="VG">British Virgin Islands</option>-->
<!--            <option value="BN">Brunei</option>-->
<!--            <option value="BG">Bulgaria</option>-->
<!--            <option value="BF">Burkina Faso</option>-->
<!--            <option value="BI">Burundi</option>-->
<!--            <option value="KH">Cambodia</option>-->
<!--            <option value="CM">Cameroon</option>-->
<!--            <option value="CA">Canada</option>-->
<!--            <option value="CV">Cape Verde</option>-->
<!--            <option value="BQ">Caribbean Netherlands</option>-->
<!--            <option value="KY">Cayman Islands</option>-->
<!--            <option value="CF">Central African Republic</option>-->
<!--            <option value="TD">Chad</option>-->
<!--            <option value="CL">Chile</option>-->
<!--            <option value="CN">China</option>-->
<!--            <option value="CX">Christmas Island</option>-->
<!--            <option value="CC">Cocos (Keeling) Islands</option>-->
<!--            <option value="CO">Colombia</option>-->
<!--            <option value="KM">Comoros</option>-->
<!--            <option value="CG">Congo - Brazzaville</option>-->
<!--            <option value="CD">Congo - Kinshasa</option>-->
<!--            <option value="CK">Cook Islands</option>-->
<!--            <option value="CR">Costa Rica</option>-->
<!--            <option value="CI">Côte d’Ivoire</option>-->
<!--            <option value="HR">Croatia</option>-->
<!--            <option value="CW">Curaçao</option>-->
<!--            <option value="CY">Cyprus</option>-->
<!--            <option value="CZ">Czechia</option>-->
<!--            <option value="DK">Denmark</option>-->
<!--            <option value="DJ">Djibouti</option>-->
<!--            <option value="DM">Dominica</option>-->
<!--            <option value="DO">Dominican Republic</option>-->
<!--            <option value="EC">Ecuador</option>-->
<!--            <option value="EG">Egypt</option>-->
<!--            <option value="SV">El Salvador</option>-->
<!--            <option value="GQ">Equatorial Guinea</option>-->
<!--            <option value="ER">Eritrea</option>-->
<!--            <option value="EE">Estonia</option>-->
<!--            <option value="SZ">Eswatini</option>-->
<!--            <option value="ET">Ethiopia</option>-->
<!--            <option value="FK">Falkland Islands (Islas Malvinas)</option>-->
<!--            <option value="FO">Faroe Islands</option>-->
<!--            <option value="FJ">Fiji</option>-->
<!--            <option value="FI">Finland</option>-->
<!--            <option value="FR">France</option>-->
<!--            <option value="GF">French Guiana</option>-->
<!--            <option value="PF">French Polynesia</option>-->
<!--            <option value="TF">French Southern Territories</option>-->
<!--            <option value="GA">Gabon</option>-->
<!--            <option value="GM">Gambia</option>-->
<!--            <option value="GE">Georgia</option>-->
<!--            <option value="DE">Germany</option>-->
<!--            <option value="GH">Ghana</option>-->
<!--            <option value="GI">Gibraltar</option>-->
<!--            <option value="GR">Greece</option>-->
<!--            <option value="GL">Greenland</option>-->
<!--            <option value="GD">Grenada</option>-->
<!--            <option value="GP">Guadeloupe</option>-->
<!--            <option value="GU">Guam</option>-->
<!--            <option value="GT">Guatemala</option>-->
<!--            <option value="GG">Guernsey</option>-->
<!--            <option value="GN">Guinea</option>-->
<!--            <option value="GW">Guinea-Bissau</option>-->
<!--            <option value="GY">Guyana</option>-->
<!--            <option value="HT">Haiti</option>-->
<!--            <option value="HM">Heard &amp; McDonald Islands</option>-->
<!--            <option value="HN">Honduras</option>-->
<!--            <option value="HK">Hong Kong</option>-->
<!--            <option value="HU">Hungary</option>-->
<!--            <option value="IS">Iceland</option>-->
<!--            <option value="IN">India</option>-->
<!--            <option value="ID">Indonesia</option>-->
<!--            <option value="IR">Iran</option>-->
<!--            <option value="IQ">Iraq</option>-->
<!--            <option value="IE">Ireland</option>-->
<!--            <option value="IM">Isle of Man</option>-->
<!--            <option value="IL">Israel</option>-->
<!--            <option value="IT">Italy</option>-->
<!--            <option value="JM">Jamaica</option>-->
<!--            <option value="JP">Japan</option>-->
<!--            <option value="JE">Jersey</option>-->
<!--            <option value="JO">Jordan</option>-->
<!--            <option value="KZ">Kazakhstan</option>-->
<!--            <option value="KE">Kenya</option>-->
<!--            <option value="KI">Kiribati</option>-->
<!--            <option value="XK">Kosovo</option>-->
<!--            <option value="KW">Kuwait</option>-->
<!--            <option value="KG">Kyrgyzstan</option>-->
<!--            <option value="LA">Laos</option>-->
<!--            <option value="LV">Latvia</option>-->
<!--            <option value="LB">Lebanon</option>-->
<!--            <option value="LS">Lesotho</option>-->
<!--            <option value="LR">Liberia</option>-->
<!--            <option value="LY">Libya</option>-->
<!--            <option value="LI">Liechtenstein</option>-->
<!--            <option value="LT">Lithuania</option>-->
<!--            <option value="LU">Luxembourg</option>-->
<!--            <option value="MO">Macao</option>-->
<!--            <option value="MG">Madagascar</option>-->
<!--            <option value="MW">Malawi</option>-->
<!--            <option value="MY">Malaysia</option>-->
<!--            <option value="MV">Maldives</option>-->
<!--            <option value="ML">Mali</option>-->
<!--            <option value="MT">Malta</option>-->
<!--            <option value="MH">Marshall Islands</option>-->
<!--            <option value="MQ">Martinique</option>-->
<!--            <option value="MR">Mauritania</option>-->
<!--            <option value="MU">Mauritius</option>-->
<!--            <option value="YT">Mayotte</option>-->
<!--            <option value="MX">Mexico</option>-->
<!--            <option value="FM">Micronesia</option>-->
<!--            <option value="MD">Moldova</option>-->
<!--            <option value="MC">Monaco</option>-->
<!--            <option value="MN">Mongolia</option>-->
<!--            <option value="ME">Montenegro</option>-->
<!--            <option value="MS">Montserrat</option>-->
<!--            <option value="MA">Morocco</option>-->
<!--            <option value="MZ">Mozambique</option>-->
<!--            <option value="MM">Myanmar (Burma)</option>-->
<!--            <option value="NA">Namibia</option>-->
<!--            <option value="NR">Nauru</option>-->
<!--            <option value="NP">Nepal</option>-->
<!--            <option value="NL">Netherlands</option>-->
<!--            <option value="NC">New Caledonia</option>-->
<!--            <option value="NZ">New Zealand</option>-->
<!--            <option value="NI">Nicaragua</option>-->
<!--            <option value="NE">Niger</option>-->
<!--            <option value="NG">Nigeria</option>-->
<!--            <option value="NU">Niue</option>-->
<!--            <option value="NF">Norfolk Island</option>-->
<!--            <option value="KP">North Korea</option>-->
<!--            <option value="MK">North Macedonia</option>-->
<!--            <option value="MP">Northern Mariana Islands</option>-->
<!--            <option value="NO">Norway</option>-->
<!--            <option value="OM">Oman</option>-->
<!--            <option value="PK">Pakistan</option>-->
<!--            <option value="PW">Palau</option>-->
<!--            <option value="PS">Palestine</option>-->
<!--            <option value="PA">Panama</option>-->
<!--            <option value="PG">Papua New Guinea</option>-->
<!--            <option value="PY">Paraguay</option>-->
<!--            <option value="PE">Peru</option>-->
<!--            <option value="PH">Philippines</option>-->
<!--            <option value="PN">Pitcairn Islands</option>-->
<!--            <option value="PL">Poland</option>-->
<!--            <option value="PT">Portugal</option>-->
<!--            <option value="PR">Puerto Rico</option>-->
<!--            <option value="QA">Qatar</option>-->
<!--            <option value="RE">Réunion</option>-->
<!--            <option value="RO">Romania</option>-->
<!--            <option value="RU">Russia</option>-->
<!--            <option value="RW">Rwanda</option>-->
<!--            <option value="WS">Samoa</option>-->
<!--            <option value="SM">San Marino</option>-->
<!--            <option value="ST">São Tomé &amp; Príncipe</option>-->
<!--            <option value="SA">Saudi Arabia</option>-->
<!--            <option value="SN">Senegal</option>-->
<!--            <option value="RS">Serbia</option>-->
<!--            <option value="SC">Seychelles</option>-->
<!--            <option value="SL">Sierra Leone</option>-->
<!--            <option value="SG">Singapore</option>-->
<!--            <option value="SX">Sint Maarten</option>-->
<!--            <option value="SK">Slovakia</option>-->
<!--            <option value="SI">Slovenia</option>-->
<!--            <option value="SB">Solomon Islands</option>-->
<!--            <option value="SO">Somalia</option>-->
<!--            <option value="ZA">South Africa</option>-->
<!--            <option value="GS">South Georgia &amp; South Sandwich Islands</option>-->
<!--            <option value="KR">South Korea</option>-->
<!--            <option value="SS">South Sudan</option>-->
<!--            <option value="ES">Spain</option>-->
<!--            <option value="LK">Sri Lanka</option>-->
<!--            <option value="BL">St Barthélemy</option>-->
<!--            <option value="SH">St Helena</option>-->
<!--            <option value="KN">St Kitts &amp; Nevis</option>-->
<!--            <option value="LC">St Lucia</option>-->
<!--            <option value="MF">St Martin</option>-->
<!--            <option value="PM">St Pierre &amp; Miquelon</option>-->
<!--            <option value="VC">St Vincent &amp; Grenadines</option>-->
<!--            <option value="SR">Suriname</option>-->
<!--            <option value="SJ">Svalbard &amp; Jan Mayen</option>-->
<!--            <option value="SE">Sweden</option>-->
<!--            <option value="CH">Switzerland</option>-->
<!--            <option value="TW">Taiwan</option>-->
<!--            <option value="TJ">Tajikistan</option>-->
<!--            <option value="TZ">Tanzania</option>-->
<!--            <option value="TH">Thailand</option>-->
<!--            <option value="TL">Timor-Leste</option>-->
<!--            <option value="TG">Togo</option>-->
<!--            <option value="TK">Tokelau</option>-->
<!--            <option value="TO">Tonga</option>-->
<!--            <option value="TT">Trinidad &amp; Tobago</option>-->
<!--            <option value="TA">Tristan da Cunha</option>-->
<!--            <option value="TN">Tunisia</option>-->
<!--            <option value="TR">Turkey</option>-->
<!--            <option value="TM">Turkmenistan</option>-->
<!--            <option value="TC">Turks &amp; Caicos Islands</option>-->
<!--            <option value="TV">Tuvalu</option>-->
<!--            <option value="UG">Uganda</option>-->
<!--            <option value="UA">Ukraine</option>-->
<!--            <option value="AE">United Arab Emirates</option>-->
<!--            <option value="GB">United Kingdom</option>-->
<!--            <option value="US">United States</option>-->
<!--            <option value="UY">Uruguay</option>-->
<!--            <option value="UM">US Outlying Islands</option>-->
<!--            <option value="VI">US Virgin Islands</option>-->
<!--            <option value="UZ">Uzbekistan</option>-->
<!--            <option value="VU">Vanuatu</option>-->
<!--            <option value="VA">Vatican City</option>-->
<!--            <option value="VE">Venezuela</option>-->
<!--            <option value="VN">Vietnam</option>-->
<!--            <option value="WF">Wallis &amp; Futuna</option>-->
<!--            <option value="EH">Western Sahara</option>-->
<!--            <option value="YE">Yemen</option>-->
<!--            <option value="ZM">Zambia</option>-->
<!--            <option value="ZW">Zimbabwe</option>-->
<!--        </select>  -->
<!--      </section>-->

<!--      </div>-->
<!--      <div class="modal-footer">-->
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--        <button id="save-address" type="button" class="btn btn-primary" style="background-color: white; color:#888; margin-left:10px"> Save Address</button>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<hr>
    <!-- price detail start -->
    <div class="del1 head1txt">Price DETAILS</div>
    <div class="subdel2">
    <ul class="list-group">
    <div class="picdet" style="background-color:white">
    
    <li class="list-group-item "><div class="picdet1">
            <div class="picdet2">$13 x 3 days</div>
        </div></li>
        <li class="list-group-item "><div class="picdet1 juscent">
            <div class="picdet3">$39.00</div>
        </div></li>
   
    </div>
    </ul>
    <ul class="list-group">
    <div class="picdet" style="background-color:white">
    <li class="list-group-item "><div class="picdet1">
            <div class="picdet2">Postage</div>
        </div></li>
        <li class="list-group-item "><div class="picdet1 juscent">
            <div class="picdet3">$5.0</div>
        </div></li>
        
    </div>
    </ul>
    <ul class="list-group">
    <div class="picdet" style="background-color:white">
    <li class="list-group-item "><div class="picdet1">
            <div class="picdet2">Total</div>
        </div></li>
        <li class="list-group-item "><div class="picdet1 juscent">
            <div class="picdet3">$47.91</div>
        </div></li>
        
    </div>
    </ul>
        <!-- <div class="subdel11">
            <div class="subdel21">$13 x 3 days</div>
            <div class="subdel111 subdel21">$39.00</div>
        </div> -->
        <!-- <div> -->
            <!-- <div class="subdel11">
                <div class="subdel21">Service Fee (21%)</div>
                <div class="subdel111 subdel21">$8.91</div>
            </div> -->
        <!-- </div>
        <div> -->
            <!-- <div class="subdel11">
                <div class="subdel21">Total</div>
                <div class="subdel111 subdel21">$47.91</div>
            </div> -->
        <!-- </div> -->

    </div>
    <!-- price detail end -->

    <!-- apply discount code button start -->
    <div >
        <!-- <div id="discountbtn">Apply Discount Code</div> -->
        <div class="p-t-33" style="display: flex;justify-content: center;width:100%">
            <div class="flex-w flex-r-m p-b-10">
            <input type="text" placeholder="Apply Discount Code" class="inpapply">

            </div>


        </div>
    </div>
    <!-- apply discount code button end -->

    <div class="p-t-5 p-lr-0-lg">
        <!-- <h4 class="mtext-105 cl2 js-name-detail p-b-14">

        </h4> -->

        <!-- <span class="mtext-106 cl2">
               
            </span> -->




        <div class="p-t-23" style="display: flex;justify-content: center;width:100%">
            <div class="flex-w flex-r-m p-b-10">
                

            </div>


        </div>
    </div>


    <!-- message lender start -->
    <!--<div class="del1 head1txt">MESSAGE LENDER</div>-->
    <!--<div class="stext-102" id="share1">Any comments for the lender? Share them here. To improve the chances of getting the rental accepted share a few details about yourself and why you want to rent this product.</div>-->
    <!-- message lender end -->

    <hr>

    <!-- review start -->
    <div id="teea1">
        <div id="teea1pic"></div>
        <div style="font-weight:bold"><?php echo $_SESSION['name'];?></div>
    </div>
    <!--<div class="col-12 p-b-5" style="margin-top: 20px;">-->
                                                    <!-- <label class="stext-102 cl3" for="review">Your review</label> -->
    <!--                                                <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" placeholder="Write a message" id="review" name="review"></textarea>-->
    <!--                                            </div>-->

    <!-- <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                        Add to cart
                        </button> -->

                        <div class="moreproducts1">

<button class="btn btn-primary"  type="submit" name="rent">Send request</button>

</div>
</form>



    <!-- review end -->

    <!-- footer start -->
    <div id="gap1">
    </div>
    <?php include 'footer.php' ?>

    <!-- footer end -->
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $('.js-addwish-b2').on('click', function(e) {
            e.preventDefault();
        });

        $('.js-addwish-b2').each(function() {
            var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-b2');
                $(this).off('click');
            });
        });

        $('.js-addwish-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");

                $(this).addClass('js-addedwish-detail');
                $(this).off('click');
            });
        });

        /*---------------------------------------------*/

        $('.js-addcart-detail').each(function() {
            var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to cart !", "success");
            });
        });
    </script>

    <div class="wrap-modal1 js-modal1 p-t-60 p-b-20 ">
        <div class="overlay-modal1 js-hide-modal1 "></div>

        <div class="container ">
            <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent ">
                <button class="how-pos3 hov3 trans-04 js-hide-modal1 ">
                <img src="images/icons/icon-close.png " alt="CLOSE ">
            </button>

                <div class="row ">
                    <div class="col-md-6 col-lg-7 p-b-30 ">
                        <div class="p-l-25 p-r-30 p-lr-0-lg ">
                            <div class="wrap-slick3 flex-sb flex-w ">
                                <div class="wrap-slick3-dots ">
                                    <ul class="slick3-dots " role="tablist ">
                                        <li class="slick-active " role="presentation "><img src=" images/product-detail-01.jpg ">
                                            <div class="slick3-dot-overlay "></div>
                                        </li>
                                        <li role="presentation "><img src=" images/product-detail-02.jpg ">
                                            <div class="slick3-dot-overlay "></div>
                                        </li>
                                        <li role="presentation "><img src=" images/product-detail-03.jpg ">
                                            <div class="slick3-dot-overlay "></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="wrap-slick3-arrows flex-sb-m flex-w "><button class="arrow-slick3 prev-slick3 slick-arrow " ><i class="fa fa-angle-left " aria-hidden="true "></i></button><button class="arrow-slick3 next-slick3 slick-arrow
        "><i class="fa fa-angle-right " aria-hidden="true "></i></button></div>

                                <div class="slick3 gallery-lb slick-initialized slick-slider slick-dotted ">
                                    <div class="slick-list draggable ">
                                        <div class="slick-track " style="opacity: 1; width: 855px; ">
                                            <div class="item-slick3 slick-slide slick-current slick-active " data-thumb="images/product-detail-01.jpg " data-slick-index="0 " aria-hidden="false " tabindex="0 " role="tabpanel " id="slick-slide20
        " aria-describedby="slick-slide-control20 " style="width: 285px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; ">
                                                <div class="wrap-pic-w pos-relative ">
                                                    <img src="images/product-detail-01.jpg " alt="IMG-PRODUCT ">

                                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04 " href="images/product-detail-01.jpg " tabindex="0 ">
                                                        <i class="fa fa-expand " aria-hidden="true "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item-slick3 slick-slide " data-thumb="images/product-detail-02.jpg " data-slick-index="1 " aria-hidden="true " tabindex="-1 " role="tabpanel " id="slick-slide21 " aria-describedby="slick-slide-control21
        " style="width: 285px; position: relative; left: -285px; top: 0px; z-index: 998; opacity: 0; ">
                                                <div class="wrap-pic-w pos-relative ">
                                                    <img src="images/product-detail-02.jpg " alt="IMG-PRODUCT ">

                                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04 " href="images/product-detail-02.jpg " tabindex="-1 ">
                                                        <i class="fa fa-expand " aria-hidden="true "></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="item-slick3 slick-slide " data-thumb="images/product-detail-03.jpg " data-slick-index="2 " aria-hidden="true " tabindex="-1 " role="tabpanel " id="slick-slide22 " aria-describedby="slick-slide-control22
        " style="width: 285px; position: relative; left: -570px; top: 0px; z-index: 998; opacity: 0; ">
                                                <div class="wrap-pic-w pos-relative ">
                                                    <img src="images/product-detail-03.jpg " alt="IMG-PRODUCT ">

                                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04 " href="images/product-detail-03.jpg " tabindex="-1 ">
                                                        <i class="fa fa-expand " aria-hidden="true "></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 p-b-30 ">
                        <div class="p-r-50 p-t-5 p-lr-0-lg ">
                            <h4 class="mtext-105 cl2 js-name-detail p-b-14 ">
                                Lightweight Jacket
                            </h4>

                            <span class="mtext-106 cl2 ">
                            $58.79
                        </span>

                            <p class="stext-102 cl3 p-t-23 ">
                                Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                            </p>

                            <!--  -->
                            <div class="p-t-33 ">
                                <div class="flex-w flex-r-m p-b-10 ">
                                    <div class="size-203 flex-c-m respon6 ">
                                        Size
                                    </div>

                                    <div class="size-204 respon6-next ">
                                        <div class="rs1-select2 bor8 bg0 ">
                                            <select class="js-select2 select2-hidden-accessible " name="time " tabindex="-1 " aria-hidden="true ">
                                            <option>Choose an option</option>
                                            <option>Size S</option>
                                            <option>Size M</option>
                                            <option>Size L</option>
                                            <option>Size XL</option>
                                        </select><span class="select2 select2-container select2-container--default " dir="ltr " style="width: 142px; "><span class="selection "><span class="select2-selection select2-selection--single " role="combobox
        " aria-haspopup="true " aria-expanded="false " tabindex="0 " aria-labelledby="select2-time-fm-container "><span class="select2-selection__rendered " id="select2-time-fm-container " title="Choose an option ">Choose an option</span>
                                            <span class="select2-selection__arrow " role="presentation "><b role="presentation "></b></span>
                                            </span>
                                            </span><span class="dropdown-wrapper " aria-hidden="true "></span></span>
                                            <div class="dropDownSelect2 "></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-w flex-r-m p-b-10 ">
                                    <div class="size-203 flex-c-m respon6 ">
                                        Color
                                    </div>

                                    <div class="size-204 respon6-next ">
                                        <div class="rs1-select2 bor8 bg0 ">
                                            <select class="js-select2 select2-hidden-accessible " name="time " tabindex="-1 " aria-hidden="true ">
                                            <option>Choose an option</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>White</option>
                                            <option>Grey</option>
                                        </select><span class="select2 select2-container select2-container--default " dir="ltr " style="width: 142px; "><span class="selection "><span class="select2-selection select2-selection--single " role="combobox
        " aria-haspopup="true " aria-expanded="false " tabindex="0 " aria-labelledby="select2-time-ap-container "><span class="select2-selection__rendered " id="select2-time-ap-container " title="Choose an option ">Choose an option</span>
                                            <span class="select2-selection__arrow " role="presentation "><b role="presentation "></b></span>
                                            </span>
                                            </span><span class="dropdown-wrapper " aria-hidden="true "></span></span>
                                            <div class="dropDownSelect2 "></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-w flex-r-m p-b-10 ">
                                    <div class="size-204 flex-w flex-m respon6-next ">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10 ">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m ">
                                                <i class="fs-16 zmdi zmdi-minus "></i>
                                            </div>

                                            <input class="mtext-104 cl3 txt-center num-product " type="number " name="num-product " value="1 ">

                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m ">
                                                <i class="fs-16 zmdi zmdi-plus "></i>
                                            </div>
                                        </div>

                                        <button class=" js-addcart-detail flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail ">
                                        Add to cart
                                    </button>
                                    </div>
                                </div>
                            </div>

                            <!--  -->
                            <div class="flex-w flex-m p-l-100 p-t-40 respon7 ">
                                <div class="flex-m bor9 p-r-10 m-r-11 ">
                                    <a href="# " class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100 " data-tooltip="Add to Wishlist ">
                                        <i class="zmdi zmdi-favorite "></i>
                                    </a>
                                </div>

                                <a href="# " class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100 " data-tooltip="Facebook ">
                                    <i class="fa fa-facebook " aria-hidden="true "></i>
                                </a>

                                <a href="# " class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100 " data-tooltip="Twitter ">
                                    <i class="fa fa-twitter " aria-hidden="true "></i>
                                </a>

                                <a href="# " class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100 " data-tooltip="Google Plus ">
                                    <i class="fa fa-google-plus " aria-hidden="true "></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.getElementById("sentrental1").onclick = function() {
        Swal.fire({
  position: 'center',
  icon: 'success',
  title: 'Your Sent the Request',
  showConfirmButton: false,
  timer: 1500
},
)}


   
         
</script>
    <!--===============================================================================================-->
    <script src="js/main.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa " crossorigin="anonymous "></script>
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>

    <script src="vendor/jquery/jquery-3.2.1.min.js "></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js "></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js "></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js "></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa " crossorigin="anonymous "></script>


</body>

</html>