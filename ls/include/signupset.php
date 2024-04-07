<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'include/db_connect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $name=$_POST["name"];
    $address=$_POST["address"];
    $email=$_POST["email"];
    $contactnum=$_POST["contactnum"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];

    $existSql="SELECT * FROM `patient_info` WHERE username='$username'";
    $result=mysqli_query($conn,$existSql);
    $numExistRows=mysqli_num_rows($result);
    if($numExistRows>0)
        {
        $exist=true;
        }
    else
        {
        $exist=false;
        }
    if($password==$cpassword && $exist==false){
        $sql="INSERT INTO `patient_info` (`sno`, `username`, `name`, `password`, `dt`, `age`, `address`, `email`, `contactnum`, `gender`) VALUES (NULL, '$username', '$name', '$password', current_timestamp(), '$age', '$address', '$email', '$contactnum', '$gender')";
        $result=mysqli_query($conn,$sql);
        if($result){
            $showAlert=true;
            header("location: \Sanjeevanifinal\ls\patientloginpage.php");
        }
        }
    else
        {
        $showError="Password do not match or Username already exist";
        }
    
}
?>
