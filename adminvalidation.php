<?php
session_start();


$con=mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'ndubb');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from adminregistration where name= '$name' && password= '$pass'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num== 1)
{
    $_SESSION['username']=$name;
    echo "<script>window.open('admin-panel.php', '_self')</script>";
    //header('location: admissionpage.php');
}
else{
    echo "<script>alert('Password does not match')</script>";
    //header('location: admission-form.php');
}


?>

