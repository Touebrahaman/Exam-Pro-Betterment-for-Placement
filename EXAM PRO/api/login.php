<?php
session_start();
include("connection.php");
$email=$_POST['l_email'];
$password=$_POST['l_password'];
$enc_pass=password_hash($password,PASSWORD_BCRYPT);
$pass_check=password_verify($password,$enc_pass);
$check=mysqli_query($connect,"SELECT * FROM user WHERE email='$email' and password='$password'");
if(mysqli_num_rows($check)>0)
{
    $userdata=mysqli_fetch_array($check);
    $_SESSION['userdata']=$userdata;
    
    echo '<script>
    window.location="../index.php";
    </script>';
}
else
{
    echo '<script>
    alert("user not found");
    window.location="../login.html";
    </script>';
}
?>