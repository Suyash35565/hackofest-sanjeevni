<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'db_connect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $existSql="SELECT * FROM `users` WHERE username='$username'";
    $result=mysqli_query($conn,$existSql);
    $numExistRows=mysqli_num_rows($result);
    if($numExistRows>0)
        {$exist=true;}
    else
        $exist=false;
    if($password==$cpassword && $exist==false){
        $sql="INSERT INTO `users` (`sno`, `username`, `password`, `dt`) VALUES (NULL, '$username', '$password', current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result){
            $showAlert=true;
        }
    }
    else
        {$showError="Password do not match or Username already exist";}

}


?>