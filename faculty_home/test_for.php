<?php

$api_url = 'http://127.0.0.1:5000/fup';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);
echo nl2br("\n",false);

$con=mysqli_connect("localhost","root","","404_found");

    if(mysqli_connect_error()){
        echo"<script>aleart('Connection failed !!')</script>";
        exit();
    }
    
    else
    {

        for ($x = 1; $x <= mysqli_num_rows($response_data); $x++) {
            $sql1 = "INSERT INTO followup_mail VALUES ('$response_data[$x]')";
            $result1 = mysqli_query($con, $sql1);    
        }


//         $sql2 = "select lastname FROM student WHERE email='$response_data[0]'";
//         $result2 = mysqli_query($con, $sql2);
// 
//         $row1 = mysqli_fetch_assoc($result2);
// 
//         if (mysqli_num_rows($result2) > 0) {
//             echo " ";
//             print_r($row1['lastname']);
//         }

        mysqli_close($con);

    }    


?>