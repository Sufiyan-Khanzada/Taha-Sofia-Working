<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Activity</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .button1 {
  background-color: #9DCAEB;
  border: none;
  color: white;
  padding: 8px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  margin: 0;
}

.button3 {font-size: 16px;}

.button4{
    width:164px
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
            <div id="profheadrev">Lender Activity</div>
        </div>
    </div>
    <!-- header end -->

    <!-- price start -->
    <div>
    <div style="font-size:30px ;font-weight: bolder;margin-left: 15px;margin-bottom: 10px;">$2,555.29</div>
    <div style="font-size:15px ;font-weight: 10px;margin-left: 15px;margin-top: 10px;margin-bottom: 10px;">Your Income</div>
    </div>
    <!-- price end -->

    <!-- payouts start-->
    <ul class="list-group">
    <div id="payoutlender">
    <li class="list-group-item " style="border:none; padding:0; border-top:1px solid #ebebeb ;"><div class="containerpayout">
            <div style="display: flex; justify-content: flex-start;align-items: center;">
                <div style="font-weight: bold">Payouts</div>
            </div>
            <div style="display: flex; justify-content: flex-end;align-items: center;">
                <div>$2,555.29</div>
            </div>
        </div></li>
        <li class="list-group-item " style="border:none; padding:0; border-top:1px solid #ebebeb ; border-bottom:1px solid #ebebeb;"><div class="containerpayout">
            <div style="display: flex; justify-content: flex-start;align-items: center;">
                <div style="font-weight: bold">Future Payouts</div>
            </div>
            <div style="display: flex; justify-content: flex-end;align-items: center;">
                <div>$0.00</div>
            </div>
        </div></li>
    </div>
    </ul>
    <!-- <ul class="list-group">
        <a href="favourite.php" class="ancacc"><li class="list-group-item ">Favourites</li></a>
        <a href="reviews.php" class="ancacc"><li class="list-group-item ">Reviews</li></a>
        <a href="myproducts.php" class="ancacc"><li class="list-group-item ">My Products</li></a>
        <a href="rented_product.php" class="ancacc"><li class="list-group-item ">Rented Products</li></a>
        <a href="stats.php" class="ancacc"><li class="list-group-item ">Stats</li></a>
        <a href="lender_activity.php" class="ancacc"><li class="list-group-item ">Earning</li></a>
        <a href="update.php" class="ancacc"><li class="list-group-item ">Update Profile</li></a>
      </ul>

    <-- payouts end -->

    <!-- update stripe start -->
    <div id="applybtn" style="margin: 0; width:100%;">
    <div class="moreproducts1">

<button class="button1 button3 " style="width: 350px;">Update Your Stripe</button>
    
</div>
    </div>

    <!-- update stripe end -->

    <!-- bank account detail start -->
    <ul class="list-group">
    <div id="payoutlender">
    <li class="list-group-item " style="border:none; padding:0; border-bottom:1px solid #ebebeb;"><div class="containerpayout">
            <div style="display: flex; justify-content: flex-start;align-items: center;">
                <div style="font-weight: bold;font-size:18px">BANK ACCOUNT</div>
            </div>
            <div style="display: flex; justify-content: flex-end;align-items: center;">
                <div style="color: green;font-weight: bolder;">ADD</div>
            </div>
        </div></li>
        <li class="list-group-item " style="border:none; padding:0; border-bottom:1px solid #ebebeb;"><div class="containerpayout">
            <div>
                <div style="font-weight: bold; font-size:18px;">.......675</div>
                <div style="font-size: 12px;">BARCLAYS BANK UK,PLC (GBP)</div>
            </div>
            <div style="display: flex; justify-content: flex-end;align-items: center;">
                <!-- <div style="background-color: green;color: white; width: 80px;height: 30px;display: flex; justify-content: center;align-items: center;">
                    <div>Default</div>
                </div> -->
                <div >

<button class="button1 button3 " style="padding: 6px;">Default</button>
    
</div>
            </div>
        </div></li>
    </div>
    </ul>


    <!-- bank account detail end -->

    <!-- transfer payout start -->
    <div id="transpay" style="margin-top: 35px; margin-bottom:10px; display: flex; justify-content: center; align-items: center; width:100%; background-color:#d5d5d5;">
        <!-- <div class="containertrans">
            <a class="nav-link" href="#scrollspyHeading1" style="text-decoration: none;color: black;">
                Transfers
            </a>
        </div> -->
        <div >

<button class="button1 button3 button4">Transfers</button>
    
</div>
<div >

<button class="button1 button3 button4">Payouts</button>
    
</div>
    </div>
    <!-- transfer payout end -->
    <!-- content transfer start -->
    <div style="margin-bottom: 40%;">
        <div style="width: 90%;height:350px;margin:auto;overflow-y: scroll;">
            <div id="rendetprof11 scrollspyHeading1">
            <div class="renderprof21">
             <div id="teea1pic"></div>
              <div class="renderprof22">
                <div class="renderprof23">
                 <div>
                    <h6 style="font-weight: bolder;margin-bottom:1px;">Rixo, Dress,UK 6</h6> 
                    <span>27 Apr - 01 May</span> 
                 </div>
                 <div style="margin-left: 80px; margin-top:12px; font-weight: bolder; color:#198754;">$29.25</div>

               </div>
              </div>
            </div>

            <div class="renderprof21">
             <div id="teea1pic"></div>
              <div class="renderprof22">
                <div class="renderprof23">
                 <div>
                    <h6 style="font-weight: bolder;margin-bottom:1px;">Rixo, Dress,UK 6</h6> 
                    <span>27 Apr - 01 May</span> 
                 </div>
                 <div style="margin-left: 80px; margin-top:12px; font-weight: bolder; color:#198754;">$29.25</div>

               </div>
              </div>
            </div>

            <!-- second -->
            <div class="renderprof21">
             <div id="teea1pic"></div>
              <div class="renderprof22">
                <div class="renderprof23">
                 <div>
                    <h6 style="font-weight: bolder;margin-bottom:1px;">Rixo, Dress,UK 6</h6> 
                    <span>27 Apr - 01 May</span> 
                 </div>
                 <div style="margin-left: 80px; margin-top:12px; font-weight: bolder; color:#198754;">$29.25</div>

               </div>
              </div>
            </div>


            <!-- third -->
            <div class="renderprof21">
             <div id="teea1pic"></div>
              <div class="renderprof22">
                <div class="renderprof23">
                 <div>
                    <h6 style="font-weight: bolder;margin-bottom:1px;">Rixo, Dress,UK 6</h6> 
                    <span>27 Apr - 01 May</span> 
                 </div>
                 <div style="margin-left: 80px; margin-top:12px; font-weight: bolder; color:#198754;">$29.25</div>

               </div>
              </div>
            </div>
            <!-- fourth -->
            <div class="renderprof21">
             <div id="teea1pic"></div>
              <div class="renderprof22">
                <div class="renderprof23">
                 <div>
                    <h6 style="font-weight: bolder;margin-bottom:1px;">Rixo, Dress,UK 6</h6> 
                    <span>27 Apr - 01 May</span> 
                 </div>
                 <div style="margin-left: 80px; margin-top:12px; font-weight: bolder; color:#198754;">$29.25</div>

               </div>
              </div>
            </div>
            <!-- link2 1 -->
            <div class="renderprof21">
             <div id="teea1pic"></div>
              <div class="renderprof22">
                <div class="renderprof23">
                 <div>
                    <h6 style="font-weight: bolder;margin-bottom:1px;">Rixo, Dress,UK 6</h6> 
                    <span>27 Apr - 01 May</span> 
                 </div>
                 <div style="margin-left: 80px; margin-top:12px; font-weight: bolder; color:#198754;">$29.25</div>

               </div>
              </div>
            </div>
            <!-- link2 2 -->
            <div class="renderprof21">
             <div id="teea1pic"></div>
              <div class="renderprof22">
                <div class="renderprof23">
                 <div>
                    <h6 style="font-weight: bolder;margin-bottom:1px;">Rixo, Dress,UK 6</h6> 
                    <span>27 Apr - 01 May</span> 
                 </div>
                 <div style="margin-left: 80px; margin-top:12px; font-weight: bolder; color:#198754;">$29.25</div>

               </div>
              </div>
            </div>

    <!-- content transfer end -->

    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!-- footer end -->



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>