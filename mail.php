<html>
<body>

<?php
if (isset($_POST['reset_email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_POST['reset_email'];
  $subject = "reset your password" ;
  $message = "this is an email to reset your password" ;
  mail( "360033686@qq.com", "Subject:' $subject'",
  $message, "From:' $email'" );
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form role='form' action='mail.php' method='post' enctype='text/plain'>
								<div class='form-group'>
		        				 	<label for='restore-email'><i class='icon-envelope'></i> <b>Enter Your Email</b></label>
									<input class='form-control' id='restore-email' name='reset_email' type='text' placeholder=''>
								</div>
								<div class='form-group'>
									<button type='submit' class='btn pull-right'>Reset Password</button>
									<div class='clearfix'></div>
								</div>
							</form>";
  }
?>

</body>
</html>