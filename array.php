<?php


$token = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMTA1ZDYxNzc1OTk1ZTE4NmFkYWViY2Q5NGY3OTg4NWM4OWRlZGQ1YWNkNGRiNDE5YjIxYzgyODll...
";

//echo $token;
?>
<?php
$msg = "";
// include_once 'constant.php';
$baseurlapi_cat = "https://sofiapi.code7labs.com/api/";
$url_cat = $baseurlapi_cat . "all-parents-category";

$options1 = array(
    'http' => array(
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
            "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
            "Authorization: " . $token . "" // i.e. An iPad 

    )
);



$context1121_cat = stream_context_create($options1);

// Read JSON file
// $json_data1 = file_get_contents($url1);
$json_data_cat = file_get_contents($url_cat, false, $context1121_cat);




if ($json_data_cat == "") {
    ///echo "Not reviews yet";
    $user_data_cat = "";
} else {

    $response_data_cat = json_decode($json_data_cat);


    $user_data_cat = $response_data_cat->data;
}

?>
<?php
$msg = "";
// include_once 'constant.php';
$url_ccat = $baseurlapi_cat . "all-child-category";

$options1 = array(
    'http' => array(
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
            "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
            "Authorization: " . $token . "" // i.e. An iPad 

    )
);



$context_cat = stream_context_create($options1);

// Read JSON file
// $json_data1 = file_get_contents($url1);
$child_cat = file_get_contents($url_ccat, false, $context1121_cat);





?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="form-group">
        <label for=""></label>
        <select class="form-control" name="main" id="main">
            <option></option>
            <?php
            foreach ($user_data_cat as $main) {
                echo "<option value=" . $main->id . ">" . $main->name . "</option>";
            }
            ?>


            <option></option>
        </select>
    </div>
    <div class="form-group">
        <label for=""></label>
        <select class="form-control" name="main" id="child">
            <option></option>
        </select>
    </div>
    <div class="form-group">
        <label for=""></label>
        <select class="form-control" name="main" id="Subchild">
            <option></option>
        </select>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        var childCat = JSON.parse(<?php echo json_encode($child_cat); ?>).data;
        var main=$('#main');
        var child=$('#child');
        var Subchild=$('#Subchild');
        
        main.on("change", function() {
            var main=$('#main');
       
            child.find('option').remove().end().append('<option value=""></option>').val('');
            Subchild.find('option').remove().end().append('<option value=""></option>').val('');
            parentChildCat(main,child);
        });
        $("#child").on("change", function() {
            Subchild.find('option').remove().end().append('<option value=""></option>').val('');
            parentChildCat(child,Subchild);
        });

        function parentChildCat(cat,subcat){
            catVal = cat.val();
            var filtering = childCat.filter(filter => filter.child_of === catVal);
            $.each(filtering, function(i, item) {
                subcat.append($('<option>', {
                    value: item.id,
                    text: item.name
                }));
            });
           
            }
    </script>
</body>

</html>