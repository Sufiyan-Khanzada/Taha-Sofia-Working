<?php

$baseurlapi="https://sofiapi.code7labs.com/api/";
$url = $baseurlapi."user-detail";




$token="Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDU5NDhlNTBmMzFlNzViYmJkZWFhMzQ1ZmM4ODExMThkNGVmMmMwMjA1Njc3ODA2NzUzNTE0ZGE3MTQzYWU0NmM4ZTUxNTIxZWIwNDRiYmMiLCJpYXQiOjE2Njc2MDY5MzguMjgyOTc0LCJuYmYiOjE2Njc2MDY5MzguMjgyOTc2LCJleHAiOjE2OTkxNDI5MzguMjc4MTA5LCJzdWIiOiIzMSIsInNjb3BlcyI6W119.lu_WwtSEkoxB4RicvGQOgS7X8LmtrO-wIKPDltR3SyrJhOvGeglxP9edEO-TWMajOIwswCdvn81Ev97Egjpg1490g6vyQUYNiDDfZvezLUPRM2TrTv8HiDWvM_i4vI7sChS4Yof2P6yTx14obDcBMQG7-t1kK7wRzC6flBsyZT_ZhDjyFnO8cDM8cnXBeSYoG48irnHjn6JM2YiO8-tmW6VCa5zJcWGjrflK1rKbI_Lz60u3XrIPJbInDDDyZcIqXcs7E9M-PL78VDX7wv0L1rDAoeIGhg-a2RPKuZBeNvX8xby8EtFZFoEf-nJqF0mfV7w7fPLR8CgIbfKOY8PWUIOVg9qBNiRCP2vVzMlLfPBNg49eHmROLjhb_Q8-EeAtE9BRE5KvC3efRYFAbDyzd_-KhTrN8uukixOAf_5Scytx73iVvYx2z9OyQh1bH8byrF2nrv6WKIe7psEwOPd9RpcE0nKJRQQ6pv1Le4TRzTXHYjNP8vMyXEnoSz8Q4z2VfnKEVfSM-QRgcXqN02zpG-eE5wif8H8iK50m9O7QvUoIIFMYGIcbCl0huUqnJbrFqVOveVXMEhEoKM67gNnvwo7OoXYv_XbEqBvqnPF__kCXNzXRmrbWThkmXIut2GiNCEQwJNgjbShJYFOXDF7Sl7l9Z1-V8eyxhtewsyxeXrY";

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

$response_data = json_decode($json_data);

$user_data = $response_data->data;
 print_r($user_data);



// $resp = curl_exec($curl);

// $obj = json_decode($resp,true);

// echo $obj;


?>