<?php

$api_url = 'http://127.0.0.1:5000/fup';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

print_r($response_data);

// All user data exists in 'data' object
// $user_data = $response_data->data;

// // Cut long data into small & select only first 10 records
// $user_data = array_slice($user_data);



// Print data if need to debug
//print_r($user_data);

// Traverse array and display user data
// foreach ($user_data as $user) {
// 	echo "name: ".$user->l2[0];
// 	echo "<br />";
// 	echo "name: ".$user->l3[0];
// 	echo "<br /> <br />";
// }

?>