<?php
$username               = $_POST['username'];
$email                  = $_POST['email'];
$phonenumber            = $_POST['phonenumber'];
$password               = $_POST['password'];
$confrimpassword        = $_POST['confrimpassword'];


$conn = new mysqli('localhost','root','','','test2');
if($conn->connect_error){
    echo" connection"
    die('Connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into guvi(username, email, phonenumber, password,confrimpassword )
    value(?,?,?,?,?)");
    $stmt->bind_param(" ssiss",$username, $email, $phonenumber, $password, $confrimpassword )
     $stmt->execute();
$stmt = $conn->prepare(insert into guvi(username)
value ('chakravarthy'));
$stmt->execute();
    echo"registration successfull...";
    $stmt->close();
    $conn->close();
}
?>
