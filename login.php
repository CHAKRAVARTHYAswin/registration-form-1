<?php
include_once('connect1.php');
$funObj = new dbFunction();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $funObj->Login($email, $password);
    if($user){

        header("location:login.html");
    }
    else{
        echo "<script>alert('Email / Password Not Match')</script>";
    }

}

if(isset($_POST['register'])){
    $username        = $_POST['username'];
    $email           = $_POST['email'];
    $phonenumber     = $_POST['phonenumber'];
    $password        = $_POST['password'];
    $confrimpassword = $_POST['confrimpassword'];
    if($password == $confrimpassword){
        $email = $funObj->isUserExist($email);
        if(!$email){
            $register = $funObj->UserRegister($username, $email, $phonenumber, $password);
            if($register){
                echo "<script>alert('Registration Successful')</script>";

            }
            else{
                echo "<script>alert('Register Not Successful')</script>";
            }
            else{
                echo "<script>alert('Email Already Exist')</script>";
            }
            else{
                echo "<script>alert('Pssword Not Match')</script>";
            }
        }
    }
  
    
}
?>