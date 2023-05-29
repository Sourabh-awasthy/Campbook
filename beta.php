<?php
include 'connect.php';

if(isset($_POST['Username'])){

 $login=false;


$Username= $_POST['Username'];
$password= $_POST['password'];

$sql = "Select * from `kbh_data`.`data_of_kbh` where Username='$Username' AND password='$password' ";


$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);
// echo $num;
if($num==1){
  $login=true;
  echo "you are logged in";
  session_start();
  $_SESSION['loggedin']=true;
  $_SESSION['Username']=$Username;
  
  header("location: index1.php");
}else{
    echo "invalid credentials! Please try again!";
    header("location: alpha1.php");
}
}
?>
