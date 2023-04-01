<?php require('login.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bree+Serif&family=Cardo&family=Dancing+Script:wght@500;600&family=Exo+2:wght@200;300&family=Fira+Sans+Condensed:wght@500&family=Fjalla+One&family=Lato:ital,wght@1,700&family=Oswald:wght@500&family=Poppins:wght@500&family=Roboto+Condensed:ital,wght@1,300;1,700&display=swap" rel="stylesheet">
    
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
        </nav>
    </header>

    <div class="wrapper">
        
    <div class="form-box login">
            <h2>Login</h2>
            <form  action="login.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </span>
                    <input type="text" name="email" required>
                    <label for="username">Username</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon> 
                    </span>
                    <input type="Password"  name="password" required>
                    <label for="Password">Password</label>
                </div>
                <button type="submit" name="submit" class="btn">Login</button>
            </form>
        </div>

    </div>

    <script src="login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
