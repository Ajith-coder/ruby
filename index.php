<?php
header('Access-Control-Allow-Origin: *');

// session_start();

// // $response = file_get_contents('https://reqres.in/api/users/');

// // echo $response;

// // $json = json_decode($response);

// // foreach( $json->data as $key => $value) {
//     // echo $value->email; 
// // }


// $checkfor = ([
//     'email'=>'ajithrockers007@gmail.com',
//     'password'=>'ajithsss'
// ]);

// // $checkforJson = json_encode($checkfor);
// // //echo $checkforJson;

//   // kvstore API url
// $url = 'http://127.0.0.1:8000/api/details';
// // Collection object

// // Initializes a new cURL session
// $curl = curl_init($url);
// // Set the CURLOPT_RETURNTRANSFER option to true
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// // Set the CURLOPT_POST option to true for POST request
// curl_setopt($curl, CURLOPT_POST, true);
// // Set the request data as JSON using json_encode function
// curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($checkfor));
// // Set custom headers for RapidAPI Auth and Content-Type header
// curl_setopt($curl, CURLOPT_HTTPHEADER, [
//   'X-RapidAPI-Host: http://127.0.0.1:8000',
//   'Content-Type: application/json'
// ]);
// // Execute cURL request with all previous settings
// $response = curl_exec($curl);
// // Close cURL session
// curl_close($curl);
// //echo $response . PHP_EOL;

// $json = json_decode($response);

// echo $json->success->token;

// $_SESSION["token"] = $json->success->token;

echo "working";


?>
