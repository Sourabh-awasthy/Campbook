<?php
include 'connect.php';



if(isset($_POST['Description'])){
session_start();

// echo "success";

$Username = $_SESSION['Username'];
$sql = "Select * from `kbh_data`.`data_of_kbh` where Username='$Username'";

$result = mysqli_query($con, $sql);
if($res = mysqli_fetch_array($result)){
    $Name=$res['Name'];
    $Mobile_Number=$res['Mobile_Number'];
}

$Description= $_POST['Description'];
$Price= $_POST['Price'];
if(!empty($Description) && !empty($Price) && !empty($Name)){
  $sql = "INSERT INTO `kbh_data`.`buy` ( `Name`, `Description`, `Price`, `Mobile_Number`) VALUES ( '$Name' , '$Description' , '$Price', '$Mobile_Number')";
  header("location: buy.php");

if($con->query($sql)==true){
    //  echo "Successfully inserted";

}else{
    echo "ERROR: $sql <br> $con->error";
}
}


// $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy/Sell</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <style>
      span{
            font-weight: bolder;
            font-size: 20px;
            
        } 
        .main{
          text-align: left;
          
          margin-left:50px;
          margin-bottom: 200px;
        }
        h3{
          font-family:cursive;
          margin-bottom: 20px;
          margin-top: 10px;
        }
  
        ul li {
          padding: 8px 16px;
          border-bottom: 1px solid #ddd;
          }

          ul li:last-child {
            border-bottom: none
          }
          ul input{
            position: absolute;
            right: 10px;
    

          }
          ul strong{
            position: absolute;
            right: 50px;
    
    
  }
  .image{
            width: 60px;
            position:absolute;
            right: 20px;
          }
          .image:hover{
          cursor: pointer;
        }
        a{
          color:black;
        }
  </style>
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index1.php">CampBook</a>
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

      <div class="main">
        <h3>Buy and sell in your campus</h3>
        <table class="table">
        <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Contact</th>
        </thead>

        <?php 
        $query = mysqli_query($con, "SELECT * FROM `kbh_data`.`buy`");
        while($row= mysqli_fetch_array($query)){
          $Name= $row['Name'];
          $Description= $row['Description'];
          $Price=$row['Price'];
          $Mobile_Number= $row['Mobile_Number'];
        
        
        ?>
        <tbody>
          <tr>
            <td><?php echo $Name; ?></td>
            <td><?php echo $Description; ?></td>
            <td><?php echo $Price; ?></td>
            <td><?php echo $Mobile_Number; ?></td>
          </tr>

        </tbody>
        <?php  }  ?>
      </table>

        <dialog id="favDialog">
        <form  action= "buy.php" method="post">
          <p>
            <label>Description:
             <input type="text" name="Description">
            </label>
          </p>
          <p>
            <label>Price:
            <input type="text" class="pricing" autofocus placeholder="Enter Price(INR)" name="Price">
            </label>
          </p>
          <div>
            <button id="confirmBtn" value="default" type="submit">Confirm</button>
            <button value="cancel" type="submit">Cancel</button>
            
          </div>
        </form>
      </dialog>
        <div class="image" id="showDialog">
          <img src="9d08cc2022b1d219c5cc54ac8d8ebe31.jpg" height="60px">
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