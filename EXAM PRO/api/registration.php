<?php
include("connection.php");
$name=$_POST['r_name'];
$mobile=$_POST['r_mobile'];
$email=$_POST['r_email'];
$password=$_POST['r_password'];
$cpassword=$_POST['r_cpassword'];
$enc_pass=password_hash($password,PASSWORD_BCRYPT);
$msg="";
$check=mysqli_num_rows(mysqli_query($connect,"SELECT * FROM user WHERE email='$email' "));
if($check>0)
{
    echo '<script>
        alert("Email already exist");
        window.location="../login.html";
        </script>';
}
else if($password==$cpassword)
{
    $insert=mysqli_query($connect,"INSERT INTO user(name,mobile,email,password) VALUES ('$name','$mobile','$email','$enc_pass')");

    if($insert)
    {
        echo '<script>
        alert("Registration sucessful");
        window.location="../login.html";
        </script>';
    }
    else
    {
        echo '<script>
        alert("Password and Confirm Password does not match");
        window.location="../login.html";
        </script>';
    }
}
else
{
    echo '<script>
        alert("Some problem is occur");
        window.location="../login.html";
        </script>';
}
?>