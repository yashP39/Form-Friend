<?php

$api_url = 'http://127.0.0.1:5000/fup';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// print_r($response_data);

echo nl2br("\n",false);
$lenght = count($response_data);

$con=mysqli_connect("localhost","root","","404_found");

    if(mysqli_connect_error()){
        echo"<script>aleart('Connection failed !!')</script>";
        exit();
    }
    
    else
    {

        for ($x = 0; $x < $lenght; $x++) {
            $sql1 = "select firstname,lastname FROM student WHERE email='$response_data[$x]'";
            $result1 = mysqli_query($con, $sql1);

            $row1 = mysqli_fetch_assoc($result1);

            if (mysqli_num_rows($result1) > 0) {
                print_r($row1['firstname']);

                
            }

            $sql2 = "select lastname FROM student WHERE email='$response_data[$x]'";
            $result2 = mysqli_query($con, $sql2);

            $row1 = mysqli_fetch_assoc($result2);

            if (mysqli_num_rows($result2) > 0) {
                echo " ";
                print_r($row1['lastname']);
            }

            echo nl2br("\n",false);

          }

        
        mysqli_close($con);

    }    


// All user data exists in 'data' object
// $user_data = $response_data->data;

// Cut long data into small & select only first 10 records
// $user_data = array_slice($user_data);



// // Print data if need to debug
// print_r($user_data);

// // Traverse array and display user data
// foreach ($user_data as $user) {
// 	echo "name: ".$user->l2[0];
// 	echo "<br />";
// 	echo "name: ".$user->l3[0];
// 	echo "<br /> <br />";
// }

?>