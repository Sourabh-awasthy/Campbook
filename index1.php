<?php
include 'connect.php';

session_start();
if( $_SESSION['loggedin'] !=true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>a{color:black}</style>
    <link rel="stylesheet" href="style1.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CampBook</a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
            <span class="navbar-toggler-icon"></span>
        </button>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto ">
              <li class="nav-item">
                <a class="nav-link active" href="profile.php">Profile</a>  
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#footer">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              
              
            </ul>
            
          </div>
        </div>
      </nav>


  
    <div class="container-fluid">
      <div class="row">
      <button onclick="freelance()" class="btn1 col-lg-6 col-md-12"><span>FREELANCE</span><p class="hoveron1">Do some of work of your campusmates and get paid</p></button>
        <button onclick="buy()" class="btn2 col-lg-6 col-md-12"><span class="span1">Buy/Sell</span><p  class="hoveron2">Buy and sell products in your campus</p>  </button>
        <button onclick="discussion()" class="btn3 col-lg-6 col-md-12"><SPAN>DISCUSSION</SPAN><p class="hoveron3">Discuss with like minded people in your college on any topic</p></button>
        <button onclick="trips()" class="btn4 col-lg-6 col-md-12"><span class="span2">Trips</span><p class="hoveron4">Plan Your weekend trips!!</p></button>
        
      </div>
    </div>
    <footer class="white-section" id="footer">
        <div class="container-fluid">
          <a href="https://www.facebook.com/profile.php?id=100055601827737"><i class="social-icon fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/Sourabh15166099?t=etryGPm7GhanJcxJ4PjQHQ&s=09"><i class="social-icon fab fa-twitter"></i></a>
          <a href="https://instagram.com/_paul__dirac?igshid=ZDdkNTZiNTM="><i class="social-icon fab fa-instagram"></i></a>
          <a href="mailto:22bcs094@nith.ac.in"><i class="social-icon fas fa-envelope"></i></a>
          <p>© Contact Us For Any Issue</p>
        </div>
      </footer>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="script1.js"></script>

</body>
</html>