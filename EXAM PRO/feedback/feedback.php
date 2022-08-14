<?php
$msg="";
if(isset($_POST['f_submit']))
{
	require '../phpmailer/PHPMailerAutoload.php';
	$mail=new PHPMailer;
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username='toiyeb2002@gmail.com';
	$mail->Password='8158837163';
	$mail->setFrom('toiyeb2002@gmail.com',$_POST['f_name']);
	$mail->addAddress($_POST['f_email']);
	$mail->addReplyTo($_POST['f_email'],$_POST['f_name']);
	$mail->isHTML(true);
	$mail->Subject='Feedback Completed Sucessfully';
	$mail->Body='<h1 align=justify>Name : '.$_POST['f_name'].'<br/>
    your feedback is : <br/>' .$_POST['feedback_comment'].'
	</h1>';

	if(!$mail->send())
	{
		$msg="error occured";
	}
	else
	{
		$msg="sucessfully feedback submitted .Please check your email : <br/> ".$_POST['email'];
	}
	
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Feedback</title>
    <link rel="stylesheet" href="../aptitude/aptitude.css">
  </head>
  <body>
      <hr>
      <center>
          <h2>Feedback/Report Form</h2>
      </center>
    <hr>
    <div class="container">
        <form action="feedback.php" method="POST">
            <div class="feedback_box">
                <b><span>how satisfied were you with our service?</span> </b> 
                <div class="feedback_checkbox">
                <div><input type="radio" name="feedback_check" value="Excellent">
                    <label>Excellent</label></div>
                <div><input type="radio" name="feedback_check" value="Good">
                    <label>Good</label></div>
                <div><input type="radio" name="feedback_check" value="Average">
                    <label>Average</label></div>
                <div><input type="radio" name="feedback_check" value="Poor">
                    <label>Poor</label></div>
                </div>
                <b><span>if you have specific feedback then write with us ..</span></b> 
                <center>
                    <textarea name="feedback_comment" cols="40" rows="5"></textarea>
                </center>
                <center>
                    <input type="text" name="f_name" placeholder="Name" required>
                <input type="email" name="f_email" placeholder="Email" required>
                <input type="text" name="f_mobile" placeholder="Mobile Number" required>
                </center>
                
                <center><button name="f_submit" type="submit" class="btn btn-outline-success">Submit Feedback</button></center>
                <div>
                    <center style="color:red; font-family: sans-serif;">
                        <?php 
                        echo $msg;
                        ?>
                    </center>
                    
                </div>
                
            </div>
        </form>
            
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>