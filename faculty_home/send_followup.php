<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
       
        <link rel="stylesheet" href="followup_student.css">

    <title>followup_student</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-radius: 10px;
        border-style: double;
    }
</style>

<body>
    <button onclick="redirectToFacSignUp()">Back</button>
                    <script>
                        function redirectToFacSignUp() {
                            window.location.href = "http://localhost/Form-Friend/faculty_home/facultySendReminder.php";
                        }
                    </script>
    <h4>students who have not submitted form</h4>
    <table style="width:100%">
        <tr>
            <th>Student Name</th>
            <th>Student Email Id</th>
        </tr>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php

    $con=mysqli_connect("localhost","root","","404_found");

    if(mysqli_connect_error()){
        echo"<script>aleart('Connection failed !!')</script>";
        exit();
    }
    $api_url = 'http://127.0.0.1:5000/fup';

        // Read JSON file
        $json_data = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

        // print_r($response_data);

        echo nl2br("\n",false);
        $lenght = count($response_data);

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

?>