<?php
session_start();

if(isset($_SESSION['usr_id'])) {
  header("Location: course");
}
include_once 'dbconnect.php';
include_once 'code.php';
require 'phpmailer/PHPMailerAutoload.php';


//set validation error flag as false
$error = false;
$sussesmsg="";
//check if form is submitted
if (isset($_POST['reset'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);    
  //name can contain only alpha characters and space
  $result = mysqli_query($con, "SELECT * FROM users WHERE email ='$email' ");
  if ($row = mysqli_fetch_array($result)) {
    $tempid = $row['id'];
    $tempname = $row['name'];
    $mail = new PHPMailer;
    $mail->isSMTP();                                     
    $mail->Host = 'smtp.gmail.com';  
    $mail->SMTPAuth = true;                              
    $mail->Username = 'your email';                
    $mail->Password = 'your password';                
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465; 
    $mail->setFrom('your email', 'your name');
    $mail->addAddress($email);
    $mail->addReplyTo('your email', 'your name');
    $mail->isHTML(true);
    $mail->Subject = 'Password reset';
    $mail->Body    = "Hello {$tempname} <br><br> Someone has requested a link to change your password. You can do this through the link below.<br> <br><a href='http://codemenow.com/rpassword/{$tempid}/{$code}'>Change my password</a><br><br>If you didn't request this, please ignore this email.<br><br>Your password won't change until you access the link above and create a new one.<br><br>";
    $mail->AltBody = '';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    header("Location: /failed");
} else {
    echo 'Message has been sent';
    $myfile = fopen("confirmid.php","w");
    $txt = "<?php\n $"."confirmid = {$tempid};\n?>";
    fwrite($myfile, $txt);
    fclose($myfile);
    header("Location: sent");
}
  }
  else{
    $sussesmsg = "Email not found..";
  }
  
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Codemenow</title>
<link rel="stylesheet" type="text/css" href="/css/materialize.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/typed.js"></script>
</head>
<body>
<?php include_once 'nav_and_sidebar.php';?>
<section> 
<div class="content" style="margin-top: 135px;margin-bottom: 135px;">
        <center><p class= "startcoding" style="font-size: 20px;margin-top: 0%;" >Forgot your password?</p>
    <form class="col s12" style="padding :2%; width: 320px;" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
    <div class="row">
        <div class="input-field col s12">
          <input id="email" name = "email" type="email" class="validate" required value="<?php if($error) echo $email; ?>">
          <label for="email" data-error="wrong email" data-success="right">Email</label>
        </div>
      </div>
      <button type = "submit" name="reset" class="button-black" value="RESET">RESET PASSWORD</button>
      </form>
      </center>
</div>
</section>
<?php include_once 'footer.php'; ?>
</body>

</html>
