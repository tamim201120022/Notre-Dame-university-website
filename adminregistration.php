<?php
session_start();
header('location: adminform.php');

$con=mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'ndubb');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from adminregistration where name= '$name'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num== 1)
{
    echo "username Already taken";
}
else{
    $reg="insert into adminregistration (name,password) values ('$name', '$pass')";
    mysqli_query($con,$reg);
    echo "<script>alert('Success')</script>";
}


?>

