<?php

    $con=mysqli_connect("localhost","root","","404_found");

    if(mysqli_connect_error()){
        echo"<script>aleart('Connection failed !!')</script>";
        exit();
    }
    if (isset($_POST['followup'])) {
        
            $department = mysqli_real_escape_string($con, $_POST['department']);
            $semester = mysqli_real_escape_string($con, $_POST['semester']);
            $batch = mysqli_real_escape_string($con, $_POST['batch']);
            $link = mysqli_real_escape_string($con, $_POST['link']);
            $msg = mysqli_real_escape_string($con, $_POST['msg']);
            $googlesheet = mysqli_real_escape_string($con, $_POST['googlesheet']);
            $subsheet = mysqli_real_escape_string($con, $_POST['subsheet']);
    
            // Delete Data before inserting
            
            $sql = "DELETE FROM `sendreminder` WHERE 1=1";
            mysqli_query($con,$sql);
    
            // Insert the data into the database
            $sql1 = "INSERT INTO sendreminder VALUES ('$department','$semester','$batch','$link','$msg','$googlesheet','$subsheet')";
    
            if (mysqli_query($con, $sql1)) {
                header("Location: http://127.0.0.1:5000/fup");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con); 
            }
            mysqli_close($con);
    }
    else if(isset($_POST['submit']))
    {
        // echo "nothing insrted";
    }    
?>