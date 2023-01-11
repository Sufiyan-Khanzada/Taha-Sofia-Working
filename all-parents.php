<?php 


$token="Bearer ".$_SESSION['token'];

//echo $token;
?>
<?php
$msg="";
// include_once 'constant.php';
$baseurlapi_cat="https://sofiapi.code7labs.com/api/";
$url_cat = $baseurlapi_cat."all-parents-category";

$options1 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);



$context1121_cat = stream_context_create($options1);

// Read JSON file
// $json_data1 = file_get_contents($url1);
    $json_data_cat = file_get_contents($url_cat, false, $context1121_cat);




if($json_data_cat==""){
///echo "Not reviews yet";
$user_data_cat="";
}else{

$response_data_cat = json_decode($json_data_cat);


$user_data_cat = $response_data_cat->data;



}

?>
<div id="show" class=" col-12" style="display:none;">
       <select class="form-control" name="category" >


          <option>Select Sub Category</option>

        

          <?php


foreach ($user_data_cat as $user_cat) {


?>
 
            <option><?php echo "$user_cat->name"; ?></option>
  
  
       

 




<?php







}

?>


   </select>
<?php
$msg="";
// include_once 'constant.php';
$baseurlapi_cat_child="https://sofiapi.code7labs.com/api/";
$url_cat_child = $baseurlapi_cat_child."all-child-category";

$options1 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$token."" // i.e. An iPad 
              
  )
);



$context1121_cat_child = stream_context_create($options1);

// Read JSON file
// $json_data1 = file_get_contents($url1);
    $json_data_cat_child = file_get_contents($url_cat_child, false, $context1121_cat_child);




if($json_data_cat_child==""){
///echo "Not reviews yet";
$user_data_cat_child="";
}else{

$response_data_cat_child = json_decode($json_data_cat_child);


$user_data_cat_child = $response_data_cat_child->data;



}

?>  <select class="form-control" name="subcategory" >


          <option>Select Sub Category</option>

        

          <?php


foreach ($user_data_cat_child as $user_cat_child) {


?>
 
            <option><?php echo "$user_cat_child->name"; ?></option>
  
  
       

 




<?php







}

?>


   </select>


        </div>


<script>
  function showDiv() {
   document.getElementById('show').style.display = "block";

}
</script>
