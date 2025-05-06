<?php
session_start();
$db = new mysqli("localhost","root","","project_db");
$action=$_POST['action'];



if($action==="Sign Up"){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
// Check if the username already exists
$sql = "SELECT * FROM login WHERE username = '$username' AND email='$email'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<script>alert('Username already exists');</script>";
    echo"<script>window.location.href='index.php'</script>";

} else {

        $quer="INSERT INTO login(username,email,password)VALUES('$username','$email','$password')";
if($db->query($quer) === TRUE){
    echo"<script>alert('Registration succesful')</script>";
    echo"<script>window.location.href='index.php'</script>";

} 

   else{
    echo "Error:" .$quer ."<br>" .$db->error;

}
}

}elseif($action==="Login"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result=$db->query($query);
    $row=mysqli_fetch_assoc($result);

    if($result->num_rows == 1){
        $_SESSION['username']=$row['username'];
        header("Location:home.php");
    }else{
        echo"<script>alert('Invalid username or password')</script>";
        echo"<script>window.location.href='index.php'</script>";
    }
}
$db->close();
?>