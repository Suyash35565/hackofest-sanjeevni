<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'include/db_connect.php';
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="SELECT * FROM doctors_info WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location: \Sanjeevanifinal\d_dashboard.php");
    }    
    else{
        $showError="Invalid Credentials";
    }

    }


?>
