<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$college = $_POST['college'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$password = md5($password);

$allusers = mysqli_query($con, "SELECT * FROM user");
while($row=mysqli_fetch_array($allusers)){
$lid = $row['userId'];
}
$uid = $lid+1;

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$uid', '$name', '$gender', '$college', '$email', '$mob', '$password')");
if($q3)
{
session_start();
$_SESSION["userId"] = $uid;
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;


header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>