<?php

    $con=mysqli_connect("localhost","root","","404_found");
   

    if(mysqli_connect_error()){
        echo"<script>aleart('Connection failed !!')</script>";
        exit();
    }
    else{
        $_SESSION['email'] = $email;
            header("Location: http://localhost/Form-Friend/index/indexFinal.html");
    }
 ?>