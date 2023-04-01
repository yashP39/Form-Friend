<?php require('send_mail.php'); ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alkatra&family=Oswald&family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="facultySendEmailPage.css">

  <title>Faculty Send Email Page</title>
</head>

<body>
  <header>
        <img src="../logo.png" id="logo" alt="404 Found">
        
        <nav class="navigation">

        <button class="login-popup" onclick="redirectToIndex()">Back</button>
            <script>
                function redirectToIndex() {
                  window.location.href = "http://localhost/Form-Friend/faculty_home/facultyOptions.html";
                }
            </script>

        </nav>
  </header>
    <form action="send_mail.php" method="POST">
  <div class="container">
    <div class="form-group">
      <label for="">Enter Form link :</label>
      <input type="text" class="form-control" id="link" name="link" placeholder="Enter link">
      <small class="invalid-feedback is-invalid">Please enter link</small>
    </div>

    <div class="form-group">
      <label>Message :</label>
      <textarea placeholder="Enter Message" name="msg" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
      <small class="invalid-feedback is-invalid">Please select department</small>
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
      <small class="invalid-feedback is-invalid">Please select semester</small>
    </div>
    <div class="form-group">
      <label for="batch">Select your batch :</label>
      <select class="form-control" name="batch" id="batch">
        <option>None</option>
        <option>A</option>
        <option>B</option>
      </select>
      <small class="invalid-feedback is-invalid">Please select batch</small>
    </div>

    <div class="sendBtn">
      <button type="submit" style="font-size:20px" name="submit" id="sendBtn"><i class="fa fa-send-o"></i><br>
        Send Email</button>
    </div>
  </form>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"></script>
    <script src="facultySendEmailPage.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
      -->
</body>

</html>
