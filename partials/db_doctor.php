<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    header("location: d_login.php");
    exit;
}
?>
<?php
include 'partials/db_connect.php';
$username=$_SESSION["username"];
//accesing doctors_info
$sql="SELECT * FROM `doctors_info` WHERE username='$username' ";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name=$row['name'];

?>
<?php
//apointment info
$sql1="SELECT * FROM `visit` WHERE doctorid='$username'and visited='no'";
$result1=mysqli_query($conn,$sql1);
$num1=mysqli_num_rows($result1);

//total patient
$sql4="SELECT * FROM `visit` WHERE doctorid='$username' and visited='yes'";
$result4=mysqli_query($conn,$sql4);
$row4 = mysqli_fetch_assoc($result4);
$num4=mysqli_num_rows($result4);

//Todays patient
$sql5="SELECT * FROM `visit` WHERE dt >= DATE_SUB(NOW(), INTERVAL 24 HOUR) and statusof='done' and doctorid='$username'";
$result5=mysqli_query($conn,$sql5);
$row5 = mysqli_fetch_assoc($result5);
$num5=mysqli_num_rows($result5);
?>