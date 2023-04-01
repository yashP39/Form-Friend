<?php

    $con=mysqli_connect("localhost","root","","404_found");

    if(mysqli_connect_error()){
        echo"<script>aleart('Connection failed !!')</script>";
        exit();
    }
    if (isset($_POST['submit'])) {

        $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $department = mysqli_real_escape_string($con, $_POST['department']);
        $semester = mysqli_real_escape_string($con, $_POST['semester']);
        $batch = mysqli_real_escape_string($con, $_POST['batch']);
        
        $hash= password_hash($password, PASSWORD_DEFAULT);

        // Insert the data into the database

        $sql = "INSERT INTO student VALUES ('$firstname','$lastname','$email','$hash','$department','$semester','$batch')";
        
        if (mysqli_query($con, $sql)) {
            header("Location: http://localhost/Form-Friend/login/loginpage.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }    
?>