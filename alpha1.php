<?php
$showerror=false;
$showalert=false;
include 'connect.php';

// echo "success connecting to db";
if(isset($_POST['Name'])){
$Name= $_POST['Name'];
$Number= $_POST['Number'];
$Username= $_POST['Username'];
$Email= $_POST['Email'];
$password= $_POST['password'];
$confirm= $_POST['confirm'];

if($password==$confirm){
  $sql = "INSERT INTO `kbh_data`.`data_of_kbh` ( `Name`, `Mobile_Number`, `Username`, `Email_ID`, `Password`, `Confirm_Password`, `dt`) VALUES ( '$Name' , '$Number' , '$Username', '$Email', '$password', '$confirm', current_timestamp())";
}


  if($con->query($sql)==true){
    //  echo "Successfully inserted";

    // $sql1 = "Select * from `kbh_data`.`data_of_kbh` where Username='$Username' AND password='$password' AND Name = '$Name' ";

    

}else{
    echo "ERROR: $sql <br> $con->error";
}
}


$con->close();
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>NIT Hamirpur</title>
  <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="container">
    <form class="form-one" id="createAccount" action="alpha1.php" method="post">
      <h1 class="form__title">Create Account</h1>
      <div class="form__message form__message--error"></div>
      <div class="form__input-group">
        <input type="text" class="form__input" autofocus placeholder="Enter your name" name="Name">
        <div class="form__input-error-message"></div>
        <div class="form__input-group">
        <input type="number" class="form__input" autofocus placeholder="Enter your Mobile Number" name="Number">
        <div class="form__input-error-message"></div>
      <div class="form__input-group">
        <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username(Enter atleast 10 characters)" name="Username">
        <div class="form__input-error-message"></div>
      </div>
      <div class="form__input-group">
        <input type="email" class="form__input" autofocus placeholder="Email Address" name="Email" pattern=".+@nith.ac.in">
        <div class="form__input-error-message"></div>
      </div>
      <div class="form__input-group">
        <input type="password" class="form__input" autofocus placeholder="Password" name="password">
        <div class="form__input-error-message"></div>
      </div>
      <div class="form__input-group">
        <input type="password" class="form__input" autofocus placeholder="Confirm Password" name="confirm">
        <div class="form__input-error-message"></div>
      </div>
      <button class="form__button" type="submit">continue</button>

      <p class="form__text">
        <a class="form__link" href="index.php" id="linkLogin">Already have an account? Sign in
        </a>
      </p>
    </form>
  </div>
  <script src="script.js"></script>

  <!-- INSERT INTO `data_of_kbh` (`S.No.`, `Username`, `Email ID`, `Password`, `Confirm_Password`) VALUES ('2', 'Sourabh_Awasthy', 'Sourabh@gmail.com', 'Alpha123', 'Alpha123'); -->
	
</body>

</html>