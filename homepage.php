<?php
include 'connect.php';

session_start();
if( $_SESSION['loggedin'] !=true){
    header("location: alpha1.php");
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
    <link rel="stylesheet" href="style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<title>Welcome - <?php echo $_SESSION['Username']; ?></title>
<body>

Welcome - <?php echo $_SESSION['Username']; ?>
    <h2><br><a href="profile.php">Profile</a></h2>
<h2><a href="logout.php">logout</a></h2>
</body>
</html>