<?php
session_start();
$db = new mysqli("localhost","root","","project_db");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$course=$_POST['course'];


$quer="INSERT INTO teacher(Name,Email,Phone,Address,Course)VALUES('$name','$email','$phone','$address','$course')";
if($db->query($quer)){
    echo "<script>alert('Thank You for your feedback!');</script>";
    echo"<script>window.location.href='book_form.php'</script>";
}
else{
    echo "<script>alert('Some Problem occured');</script>";
    echo"<script>window.location.href='book_form.php'</script>";
}