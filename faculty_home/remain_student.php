<?php

$api_url = 'http://127.0.0.1:5000/fup';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

print_r($response_data);


$con=mysqli_connect("localhost","root","","404_found");

    if(mysqli_connect_error()){
        echo"<script>aleart('Connection failed !!')</script>";
        exit();
    }
    
        $department = mysqli_real_escape_string($con, $_POST['department']);
        $semester = mysqli_real_escape_string($con, $_POST['semester']);
        $msg = mysqli_real_escape_string($con, $_POST['msg']);
        $batch = mysqli_real_escape_string($con, $_POST['batch']);
        $link = mysqli_real_escape_string($con, $_POST['link']);
        

        function returnVal() {
            $txt = "Hii";
            echo $txt;
            return $txt;
        }

        
        // Insert the data into the database
        $sql = "INSERT INTO sendmail VALUES ('$department','$semester','$batch','$link','$msg')";
        
        if (mysqli_query($con, $sql)) {
            header("Location: http://127.0.0.1:5000/email");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }
    else
    {
        $sql1 = "select firstname FROM `student` WHERE email=$response_data[0]";
        mysqli_query($con,$sql1);

        if (mysqli_query($con, $sql1)) {
            echo "First name :- {$sql1}";
        }

        $sql2 = "select lastname FROM `student` WHERE email=$response_data[0]";
        mysqli_query($con,$sql2);

        if (mysqli_query($con, $sql2)) {
            echo "Last name :- {$sql2}";
        }
    }    


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