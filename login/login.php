<?php

    $con=mysqli_connect("localhost","root","","404_found");
   

    if(mysqli_connect_error()){
        echo"<script>aleart('Connection failed !!')</script>";
        exit();
    }
 
    if (isset($_POST['submit'])) {
       
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
     
        // Check if the email and password match the database records

        $sql = "SELECT * FROM faculty WHERE email='$email'";
        $result = mysqli_query($con, $sql);
        
        if (mysqli_num_rows($result) == 1) {
            
            // Set session variables and redirect to the home page
            
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                // Password matches, set session variable and redirect to dashboard
                $_SESSION['email'] = $email;
                header("Location: http://localhost/Form-Friend/faculty_home/facultyOptions.html");
            } 
            else {
                // Password does not match, show error message
                echo "Invalid password !!";
            }

            $sql3 = "DELETE FROM `currentuser` WHERE 1=1";
            $result3 = mysqli_query($con, $sql3);

            $sql2 = "INSERT INTO currentuser VALUES ('$email')";
            $result2 = mysqli_query($con, $sql2);

        } 

        $sql1 = "SELECT * FROM student WHERE email='$email'";
        $result1 = mysqli_query($con, $sql1);
        
        if (mysqli_num_rows($result1) == 1) {
            
            // Set session variables and redirect to the home page

            $row1 = mysqli_fetch_assoc($result1);
            if (password_verify($password, $row1['password'])) {
                // Password matches, set session variable and redirect to dashboard
                $_SESSION['email'] = $email;
                header("Location: http://localhost/Form-Friend/student_home/student_home.html");
            } 
            else {
                // Password does not match, show error message
                echo "Invalid password !!";
            }

            $sql4 = "DELETE FROM `currentuser` WHERE 1=1";
            $result4 = mysqli_query($con, $sql4);

            $sql3 = "INSERT INTO currentuser VALUES ('$email')";
            $result3 = mysqli_query($con, $sql3);

        } 
        else if(mysqli_num_rows($result1) != 1 and mysqli_num_rows($result) != 1) {
            echo "Incorrect email or password !!";
        }
    
        mysqli_close($con);
    }
?>