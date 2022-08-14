<?php
include("feedback_connection.php");
$name=$_POST['f_name'];
$email=$_POST['f_email'];
$mobile=$_POST['f_mobile'];
$remark=$_POST['feedback_check'];
$comment=$_POST['feedback_comment'];

$insert=mysqli_query($connect,"INSERT INTO feedback(name,email,mobile,remark,comment) VALUES('$name','$email','$mobile','$remark','$comment')");

if($insert)
    {
        echo '<script>
        alert("Feedback sucessfully submitted");
        window.location="../login.html";
        </script>';
    }
    else
    {
        echo '<script>
        alert("Some error occured");
        window.location="feedback.html";
        </script>';
    }
?>
