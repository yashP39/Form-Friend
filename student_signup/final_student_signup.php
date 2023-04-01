<?php require('stu_signUp.php');?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Student Signup</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='final_student_signup.css')}}">
    <link rel="stylesheet" href="final_student_signup.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bree+Serif&family=Cardo&family=Dancing+Script:wght@500;600&family=Exo+2:wght@200;300&family=Fira+Sans+Condensed:wght@500&family=Fjalla+One&family=Lato:ital,wght@1,700&family=Oswald:wght@500&family=Poppins:wght@500&family=Roboto+Condensed:ital,wght@1,300;1,700&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    
                <button onclick="redirectToLogin()" class="login-popup">Login</button>
                <script>
                            function redirectToLogin() {
                                window.location.href = "http://localhost/Form-Friend/login/loginpage.php";
                            }
                        </script>
            </nav>
    </header>

    <div class="container">
        <div class="form-box">
            <h4>Student Sign-Up</h4>
            <form id="form" method="post" action="stu_signUp.php">
                <label for="name">Name</label>
                <div class="row form-group">
                    <div class="col">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name">
                        <small class="invalid-feedback is-invalid">This is wrong name</small>
                    </div>
                    
                    <div class="col">
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name">
                        <small class="invalid-feedback is-invalid">This is wrong name</small>
                    </div>
                    
                </div>

                <div class="form-group">
                    <label for="Email">Email address :</label>
                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                        placeholder="Enter your email">
                    <small class="invalid-feedback is-invalid">This is wrong email</small>
                </div>
                
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter your Password">
                    <i id="show-password" class="fa fa-eye" aria-hidden="true"></i>
                    <small class="invalid-feedback is-invalid">Incorrect</small>
                </div>

                <div class="form-group">
                    <label for="department">Select your department :</label>
                    <select class="form-control" name="department" id="department" placeholder="Select your department">
                        <option>None</option>
                        <option>CE</option>
                        <option>IT</option>
                        <option>BM</option>
                        <option>MET</option>
                        <option>MECH</option>
                        <option>CIVIL</option>
                        <option>EC</option>
                        <option>IC</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="semester">Select your semester :</label>
                    <select class="form-control" name="semester" id="semester">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="batch">Select your batch :</label>
                    <select class="form-control" name="batch" id="batch">
                        <option>None</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>
                <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="student_signup.js"></script>
</body>

</html>
