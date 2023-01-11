<?php 
    session_start();
    $id=$_SESSION['id'];
    $token="Bearer ".$_SESSION['token'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STATS</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
            <i class="fa fa-angle-left fa-2x" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profheadrev">STATS</div>
        </div>
    </div>
    <!-- header end -->

    <!-- 
    <canvas id="line-chart" width="100%" height="50" style="margin-top:10px"></canvas> -->
    <?php
$stats="https://sofiapi.code7labs.com/api/user-stats/".$id;
$resolve = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .
              "Authorization: ".$token.""
              
  )
);

$mainData = stream_context_create($resolve);
$fetchResult = file_get_contents($stats, true, $mainData);
$response = json_decode($fetchResult);
$brands = $response->brands;
$products = $response->products;
$amount = $response->amount;
$graphMonth = [];
$graphAmount = [];
foreach($amount as $k => $v){
    $convert = (array)$v;
    array_push($graphMonth, date('M', mktime(0, 0, 0, $convert['month'], 10)));
    array_push($graphAmount, $convert['amount']);
}
$catname = [];
$pricee = [];
$len = count($brands);
for ($i=0; $i < $len -1; $i++) { 
foreach($brands as $key => $value)
{
        array_push($pricee, $value->rented_products->price);
        array_push($catname, $value->categories[$i]->name);
        foreach($value as $k => $v){

        }
    }
}
?>
    <canvas id="myChart" width="100%" height="50" style="margin-top:10px"></canvas>


    <canvas id="pie-chart" width="100%" height="100" style="margin-top:100px"></canvas>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',

            data: {
                    labels: ["<?php echo implode('","', $graphMonth) ?>"],
                datasets: [{
                    label: 'PAST MONTH INCOME',
                    data: [<?php echo implode(', ', $graphAmount); ?>],
                    backgroundColor: [
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB'
                    ],
                    borderColor: [
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB',
                        '#9DCAEB'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)",
                        }
                    }]
                }
            }

        });
        
        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: ["<?php echo implode('","', $catname) ?>"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#59788E", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                    data: ["<?php echo implode('","', $pricee) ?>"]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'RENTAL BY PRODUCTS'
                }
            }
        });




        // new Chart(document.getElementById("line-chart"), {
        //     type: 'line',
        //     data: {
        //         labels: [1500, 1600, 1700, 1750, 1800, 1850, 1900, 1950, 1999, 2050],
        //         datasets: [{
        //             data: [1500, 1104, 1600, 106, 107, 111, 133, 221, 783, 2478],
        //             label: "JAN",
        //             borderColor: "#3e95cd",
        //             fill: false
        //         }, {
        //             data: [2820, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267],
        //             label: "FEB",
        //             borderColor: "#8e5ea2",
        //             fill: false
        //         }, {
        //             data: [168, 170, 178, 190, 203, 2760, 4080, 547, 675, 734],
        //             label: "MAR",
        //             borderColor: "#3cba9f",
        //             fill: false
        //         }, {
        //             data: [40, 20, 10, 16, 24, 3800, 740, 167, 508, 784],
        //             label: "APR",
        //             borderColor: "#e8c3b9",
        //             fill: false
        //         }, {
        //             data: [6, 3, 2, 2, 7, 26, 82, 172, 312, 433],
        //             label: "JUN",
        //             borderColor: "#c45850",
        //             fill: false
        //         }]
        //     },
        //     options: {
        //         title: {
        //             display: true,
        //             text: 'MONTHLY INCOME'
        //         }
        //     }
        // });
    </script>

<div class="gapgap1"></div>

<!-- footer start -->
<?php include 'footer.php' ?>
<!-- footer end -->



</body>

</html>