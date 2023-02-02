<?php include "header.php" ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bon A p p é t i t - Team-13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="homestyle.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@400;700&display=swap" rel="stylesheet">

</head>
  <body>

  <div class="wrapper">
  <div class="container">

      <div class="row">
        <div class="col-md-2">
          <img class="logo" src="images/logo.png" alt="logo">
        </div>

        <div class="col-md-6">
          <h1><b>Bon Appétit</b></h1>
        </div>

        <div class="col-md-4" style="text-align: right;">
          <a class="btn btn-danger" href="about.html" role="button" style="vertical-align: middle ;"> <b>About us</b></a>
          <a class="btn btn-danger" href="https://www.hamk.fi/" role="button" style="vertical-align: middle ;"> <b>Make Reservation</b></a>
          <a class="home" href="index.html"><img class="home" src="images/home.png" alt="home button"> </a>
        </div>

      </div>


      <div class="row3">
        <a class="card1" href="break.html">
          <img src="images/breakfast.jpg" alt="breakfast menu" style="width:90%">
          <div class="container">
            <br>
            <h4><b>BREAKFAST</b></h4>
          </div>
        </a>

        <a class="card2" href="lunch.html">
          <img src="images/lunch.jpg" alt="lunch menu" style="width:90%">
          <div class="container">
            <br>
            <h4><b>LUNCH</b></h4>
          </div>
        </a>

        <a class="card3" href="dinner.html">
          <img src="images/dinner.jpg" alt="dinner menu" style="width:90%">
          <div class="container">
            <br>
            <h4><b>DINNER</b></h4>
          </div>
        </a>

      </div>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</div>
</body>
</html>

<?php include "footer.php" ?>