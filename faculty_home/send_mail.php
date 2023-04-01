<?php

    $con=mysqli_connect("localhost","root","","404_found");

    if(mysqli_connect_error()){
        echo"<script>aleart('Connection failed !!')</script>";
        exit();
    }
    if (isset($_POST['submit'])) {

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

        $sql1 = "DELETE FROM `sendmail` WHERE 1=1";
        mysqli_query($con,$sql1);

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
        // echo "nothing insrted";
    }    
?>