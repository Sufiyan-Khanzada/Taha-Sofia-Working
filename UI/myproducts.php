<!DOCTYPE html>
<?php 
session_start();

$token="Bearer ".$_SESSION['token'];
$usr_id=$_SESSION['id'];
//echo $token;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My products</title>
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
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
    height: 100%;
   
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

.button3 {font-size: 16px;}

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


.three-dots:after {
  cursor: pointer;
  color: #fff;
  content: '\2807';
  font-size: 20px;
  padding: 0 5px;
}

a {
  text-decoration: none;
  color: #353535;
  font-size: 14px;
}

a div {
  padding: 4px;
}

.dropdown {
  width: 60px;
  position: absolute;
  right: 10px;
  background-color: #fff;
  outline: none;
  opacity: 0;
  z-index: -1;
  max-height: 0;
  transition: opacity 0.1s, z-index 0.1s, max-height 5s;
}

.dropdown-container:focus {
  outline: none;
}

.dropdown-container:focus .dropdown {
  opacity: 1;
  z-index: 100;
  max-height: 100vh;
  transition: opacity 0.2s, z-index 0.2s, max-height 0.2s;
}
 i.fa.fa-calendar.glyphicon.glyphicon-calendar {
            top: 15px;
        }

        .daterangepicker_input input {
            padding-left: 25px !important;
        }

        .table-condensed td,
        .table-condensed th {
            padding: 0 !important;
        }
    </style>
</head>
<body>
<?php
$msg="";
// include_once 'constant.php';
$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."product-by-user/".$usr_id;

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


$user_data = $response_data->data;
// $brands = $response_data->brands;


}

//print_r($response_data);
//print_r($user_data);
foreach ($user_data as $user) {

  // echo "name: ".$user->id;
  // echo "<br />";
}
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

    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
            <i class="fa fa-angle-left fa-2x" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profheadrev">My Products</div>
        </div>
        <!-- <div class="iconprofileheader">
        <a href="update.php" style="color:black"><i class="fa-solid fa-gear fa-2x"></i></a>
        </div> -->
    </div>
    <!-- header end -->

    <?php if(isset($_SESSION['response']))
      {?>
    <div class="alert alert-danger">
   <?php
$obj=$_SESSION['response'];
   print_r($obj->message);
   unset($_SESSION['response']);

   
   //?>


</div>

<?php 
      }?>


    <div id="fav1">
      
      <?php

foreach ($user_data as $user) {
  
  ?>
        <div  class="img-wish" style="margin: 6px;">
        

                        
          <div class="card" style="width: 100%; border:none;">
              
         <a href='product-detail.php?id=<?php echo $user->id; ?>'>
                                <img class="img-fluid" alt="100%x280px" src="<?php echo $user->featured_image; ?>" style="width: 100%;">
                              </a>
                                     <div class="dropdown-container" tabindex="-1"  style="position: absolute; left:85%; top:2%">
                                       <div class="three-dots"></div>
                                       <div class="dropdown">
                                         <a href="editproduct.php?id=<?php echo $user->id; ?>"><div>Edit</div></a>
                                         <a href="#" data-toggle="modal" data-target="#pauseModal"><div>Pause</div></a>
                                         <a href="delete_product.php?id=<?php echo $user->id; ?>" ><div>Delete</div></a>
                                       </div>
                                     </div>
                                    
        
                                    

                                <div class="card-body" style="padding: 8px;">
                                    
                                  <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text" style="color: black;"><?php echo $user->Item_name; ?></p>
                                 <small class="text-muted" ><?php echo $user->brands[0]->name; ?><span> |</span> <span><?php echo $user->size; ?></span></small>

                                 
                                <center>
                                 <a href='product-detail.php?id=<?php echo $user->id; ?>' class="btn btn-primary bor4">€ <?php echo $user->Item_price."/Perday"; ?></a>
                                  </center>
                                </div>
                              </div></a>
                              <div class="custom-select"  style="width:100%;"  >
  <select >
    <!-- <option value="0">Select car:</option> -->
    <option value="1"  selected>Availible For Rent</option>
    <option value="1">Availible For Rent</option> 
    <option value="2">Waiting For Return</option>
    <option value="3">Waiting For Shipment</option>
    
  </select>
</div>



</div>



</div>

<!-- Modal Date -->
<div class="modal fade" id="pauseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pick Date</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
                    <form method="post" action="pause.php" >

                   
                        <input type="hidden" value="<?php echo $user->id; ?>" name="p_id" />
                       

                        <input type="text" name="daterange" />
                        <script>
                            $(function() {
                                $('input[name="daterange"]').daterangepicker({
                                    "autoapply": true,
                                    "startDate": moment(),
                                    "endDate": moment().add(5, 'days'),
    
                                });
                                $('.drp-calendar.right').hide();
                                $('.drp-calendar.left').addClass('single');

                                $('.calendar-table').on('DOMSubtreeModified', function() {
                                    var el = $(".prev.available").parent().children().last();
                                    if (el.hasClass('next available')) {
                                        return;
                                    }
                                    el.addClass('next available');
                                    el.append('<span></span>');
                                });
                            });
                        </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" style="padding:0; box-shadow: none; width:47%; height:40px; margin-right:10px; background-color:#6c757d; color:white" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="width:47%;height:40px; padding:0; box-shadow: none; color: white;text-decoration: none; color:#353535">Submit</button>

                    </form>
                </div>
    </div>
  </div>
</div>

<?php

}?>

<!-- Modal Delete -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         Do you really want to delete these product? 
         This process cannot be undone.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" style="background-color: red; color:white; margin-left:10px"> Delete</button>
      </div>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 95%;margin:auto">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mark the Date</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      


      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" style="width:47%; height:40px; margin-right:10px; background-color:#6c757d;" data-bs-dismiss="modal">Close</button> 
    <button type="button" class="btn btn-primary" style="width:47%;height:40px;"><a href="sent_rental.php" style="color: white;text-decoration: none;">Check</a></button>
      </div>
    </div> 
    

  </div>
</div>


</div>

       </div> 
      
    </div>
  </div>
</div>

    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>

    <!-- dropdown start -->
    <script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>


    <!-- dropdown end -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
   

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>