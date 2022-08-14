<?php
session_start();
  $userdata=$_SESSION['userdata'];
  if(!isset($userdata['name']))
  {
    header('location:login.html');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand"><b>EXAM PRO</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Aptitude Test
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="aptitude/quant.php" target="blank">Quantitative</a></li>
            <li><a class="dropdown-item" href="aptitude/reasoning.php" target="blank">Reasoning</a></li>
            <li><a class="dropdown-item" href="aptitude/verbal.php" target="blank">verbal</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="https://www.geeksforgeeks.org/puzzles/" target="blank">Puzzles</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Gate previous questions
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="https://www.selfstudys.com/show-pdf/mhzm3ogGkmOFRyT6LiSA.pdf" target="blank">2021</a></li>
            <li><a class="dropdown-item" href="https://www.selfstudys.com/show-pdf/zQfsXi0ZX0qEYpe4PQtM.pdf" target="blank">2020</a></li>
            <li><a class="dropdown-item" href="https://www.selfstudys.com/show-pdf/rRKx9tyyV53wIqN7HAx2.pdf" target="blank">2019</a></li>
            <li><a class="dropdown-item" href="https://www.selfstudys.com/show-pdf/tKgmJsGPSidrYJpPWoXO.pdf" target="blank">2018</a></li>
            <li><a class="dropdown-item" href="https://www.selfstudys.com/show-pdf/dhg077iFfDQhdFy4FtWp.pdf" target="blank">2017</a></li>
            <li><a class="dropdown-item" href="https://www.selfstudys.com/gate/computer-science-engineering/online/exam/previous-year-paper-pdf/cs-gate-2016-paper-01" target="blank">2016</a></li>
            <li><a class="dropdown-item" href="https://www.selfstudys.com/show-pdf/C6AKgQJMGvtWVqiS6Lc6.pdf" target="blank">2015</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="feedback/feedback.php" target="blank">Feedback</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-success" type="submit"><a style="text-decoration:none;" href="logout.php">Log out</a></button>
      </form>
    </div>
  </div>
</nav>
<div class="homepage">
  <div class="homepage_box">
    <P>Welcome <?php echo $userdata['name'];?> in <b>EXAM PRO</b> Platform</P>
    
  </div>
</div>
<div class="resources">
<div class="container">
  
  <div class="card" style="width: 18rem; height:360px;">
  <img src="quant_img.webp" style="height:161px; "class="card-img-top">
  <div class="card-body">
  <center><h5 class="card-title"><b>Quantitative</b></h5></center>
    <p class="card-text"style="text-align:justify;">Quantitative Aptitude Tests evaluate numerical ability and problem solving skills of candidates.</p>
    <center><a href="aptitude/reasoning.php" class="btn btn-success" style="width:200px;">Click here</a></center>
  </div>
</div>
<div class="card" style="width: 18rem;height:360px;">
  <img src="reasoning_img.jpg" class="card-img-top" >
  <div class="card-body">
    <center><h5 class="card-title"><b>Reasoning</b></h5></center>
    <p class="card-text">Logical reasoning involves using a given set of facts or data to deduce other facts by reasoning logically.</p>
    <center><a href="aptitude/reasoning.php" class="btn btn-success" style="width:200px;">Click here</a></center>
  </div>
</div>
<div class="card" style="width: 18rem; height:360px;">
  <img src="verbal_img.jpg" style="height:161px; class="card-img-top" >
  <div class="card-body">
  <center><h5 class="card-title"><b>Verbal</b></h5></center>
    <p class="card-text">Verbal aptitude refers to a person's ability to understand and respond to spoken information.</p>
    <center><a href="aptitude/reasoning.php" class="btn btn-success" style="width:200px;">Click here</a></center>
  </div>
</div>
  </div>
  
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>