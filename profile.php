<?php
include 'connect.php';

session_start();
if( $_SESSION['loggedin'] !=true){
    header("location: alpha1.php");
    exit;
}
$Username = $_SESSION['Username'];
$sql = "Select * from `kbh_data`.`data_of_kbh` where Username='$Username'";

$result = mysqli_query($con, $sql);
if($res = mysqli_fetch_array($result)){
    $Name=$res['Name'];
    $Email= $res['Email_ID'];
    $phone= $res['Mobile_Number'];
    $Joined = $res['dt'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .profile{
            margin-top:10px;
           
        }

     
        span{
            font-weight: bolder;
            font-size: 25px;
            padding: 0.25rem;
        } 
        .desc{
            text-align: left;
            margin-left: 27px;
            line-height: 2;
        }
        .container{
            width: 300px;
            margin:auto;
            border: 1px solid black;
            border-radius:3px;
        }
        body{
            margin-top:80px;
            background: url(./profile.jpg);
        }
        .image{
            width: 60px;
            position:absolute;
            right: 90px;
          }
    </style>
    <link rel="stylesheet" href="style1.css">
    
</head>
<body style="text-align: center;">
    <div class="container" >

    <div class="profile" >
        <img src="istockphoto-1300845620-612x612.jpg" height="250px">
        
         <form action="profile.php" method="post">
<!-- <input type="text" id="signupUsername" class="form__input" autocomplete="off" autofocus placeholder="Username(Enter atleast 10 characters)" name="Username" > -->

<!-- <input type="submit" value="login" name="btn">  -->
</form >
        <div class="desc">
        <span>Name: </span><?php echo $Name; ?><br>
        <span>Username: </span><?php echo $_SESSION['Username']; ?><br>
        <span>Email: </span><?php echo $Email; ?><br>
        <span>Joined on: </span><?php echo $Joined; ?><br>
        <span>Contact: </span><?php echo $phone; ?>
        </div>
    </div>
    </div>

    <h2>Go to homepage?<a href="index1.php">Click Here.</a></h2>

    
</body>
</html>