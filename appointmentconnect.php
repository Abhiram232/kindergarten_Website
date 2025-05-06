<?php
session_start();
$db = new mysqli("localhost","root","","project_db");

$name=$_POST['gname'];
$email=$_POST['gmail'];
$cname=$_POST['cname'];
$cage=$_POST['cage'];
$message=$_POST['message'];


$quer="INSERT INTO appointment(gname,email,cname,cage,message)VALUES('$name','$email','$cname','$cage','$message')";
if($db->query($quer)){
    echo "<script>alert('Thank You for your feedback!');</script>";
    echo"<script>window.location.href='appointment.php'</script>";
}
else{
    echo "<script>alert('Some Problem occured');</script>";
    echo"<script>window.location.href='appointment.php'</script>";
}
?>