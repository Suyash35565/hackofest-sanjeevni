<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    header("location: p_login.php");
    exit;
}
?>
<?php
include 'partials/db_connect.php';
$username=$_SESSION["username"];
//accesing doctors_info
$sql="SELECT * FROM `patient_info` WHERE username='$username' ";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$name=$row['name'];
$weight=$row['weight'];
$lowbp=$row['lower_bp'];
$highbp=$row['higher_bp'];
?>
<?php
//total visit
$sql1="SELECT * FROM `visit` WHERE patientid='$username'";
$result1=mysqli_query($conn,$sql1);
$num1=mysqli_num_rows($result1);

//past appointments
$sql4="SELECT * FROM `visit` WHERE patientid='$username' ";
$result4=mysqli_query($conn,$sql4);
$row4 = mysqli_fetch_assoc($result4);
$num4=mysqli_num_rows($result4);

//Todays appointments
$sql5="SELECT * FROM `visit` WHERE dt >= DATE_SUB(NOW(), INTERVAL 24 HOUR) and visited='no' and patientid='$username'";
$result5=mysqli_query($conn,$sql5);
$row5 = mysqli_fetch_assoc($result5);
$num5=mysqli_num_rows($result5);


?>