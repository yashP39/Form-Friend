<?php require('fac_signUp.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Faculty Signup</title>

    <link rel="stylesheet" href="faculty_signup.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bree+Serif&family=Cardo&family=Dancing+Script:wght@500;600&family=Exo+2:wght@200;300&family=Fira+Sans+Condensed:wght@500&family=Fjalla+One&family=Lato:ital,wght@1,700&family=Oswald:wght@500&family=Poppins:wght@500&family=Roboto+Condensed:ital,wght@1,300;1,700&display=swap"
    rel="stylesheet">
</head>

<body>
    <header>
        <img src="../logo.png" id="logo" alt="404 Found">
        <nav class="navigation">
            
            <button onclick="redirectToHome()" class="login-popup">Home</button>
            <script>
                        function redirectToHome() {
                            window.location.href = "http://localhost/Form-Friend/index/indexFinal.html";
                        }
            </script>

            <button onclick="redirectToLogin()" class="login-popup">Log In</button>
            <script>
                        function redirectToLogin() {
                            window.location.href = "http://localhost/Form-Friend/login/loginpage.php";
                        }
            </script>
        </nav>
    </header>

    <div class="container">
        <div class="form-box login">
            <h3>Faculty Sign-Up</h3>
            <form id="form" method="post" action = "fac_signUp.php">

                <label for="name">Name</label>
                <div class="row form-group">
                    <div class="col">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name">
                    </div>
                    <small class="invalid-feedback is-invalid">This is wrong name</small>
                </div>

                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" placeholder="Enter Your Email" class="form-control" id="email" name="email">
                    <small class="invalid-feedback is-invalid">This is wrong email.</small>
                </div>

                <div class="form-group">
                    <label for="password">Application Password</label>
                    <input type="text" class="form-control" name="apppassword" id="apppassword" placeholder="Enter Application Password"
                    name="appPassword">
                    <small class="invalid-feedback is-invalid">Enter valid application password</small>
                </div>

                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter your Password">
                    <i id="show-password" class="fa fa-eye fa-eye-slash" aria-hidden="true"></i>
                    <small class="invalid-feedback is-invalid">Enter valid password</small>
                </div>
                <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
<!--     <script src="{{ url_for('static', filename='faculty_signup.js')}}"></script> -->
    <script src="faculty_signup.js"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>
