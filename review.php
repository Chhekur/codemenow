<?php
session_start();

include_once 'dbconnect.php';
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
//set validation error flag as false
$error = false;
$id = $_SESSION['usr_id'];
//check if form is submitted
if (isset($_POST['submit'])) {
  $message = mysqli_real_escape_string($con, $_POST['message']);
  if(mysqli_query($con,"UPDATE users SET review='$message' WHERE id='$id'")){
        $name = $_SESSION['usr_name'];
        $email = $_SESSION['usr_email'];
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'codemenow17@gmail.com';
        $mail->Password = 'codemenow@17';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('support@codemenow.com', 'Codemenow');
        $mail->addAddress($email); 
        $mail->addReplyTo('support@codemenow.com', 'Codemenow');
        $mail->isHTML(true);
        $mail->Subject = "Review";
        $mail->Body    = "Hello ". $name . ",<br><br>". "<h1>Thank you for submitting your review.</h1><br><h3>'".$message."'</h3><h3>We'll publish it soon.</h3><br><h4>Don't reply this mail because it is auto generated mail.</h4><br><br>Codemenow" ;
        $mail->AltBody = '';
        $mail->send();
        header("Location: revsent");
      }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Review | Codemenow</title>
<link rel="stylesheet" type="text/css" href="/css/materialize.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/typed.js"></script>
</head>
<body>
<?php include_once 'nav_and_sidebar.php';?>
<section> 
<style>
  @media screen and (max-width: 640px){
    .fo{
      width:90%;
    }
  }
  @media screen and (min-width: 640px){
    .fo{
      width:50%;
    }
  }
</style>
<?php if($_SESSION['usr_id'] == "") {?>

<div class="content" style="margin-top: 135px;margin-bottom: 135px;">
<center><h4>Login first for submitting review.</h4><br></center><?php } else{?>
        <center><p class= "startcoding" style="font-size: 20px;margin-top: 0%;" >Submit a review</p>
    <form class="col s12 fo" style="padding :2%;" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
      <div class="row">
        <div class="input-field col s12">
          <textarea name="message" id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Review</label>
        </div>
      </div>
  <style>
  form p{
  	margin-top: 12px;
  	text-align: inherit;
  	  }
.button1 {
  font-size: 19px;
  font-family: 'Pacifico';
  overflow: visible;
  border-radius: 3px;
  position: relative;
  padding-right: 30px;
  background-color: #ecfbff;
  border: 2px solid #a6e0ee;
  color: #2d7586;
  display: block;
  margin: auto;
  height: 5%;
  width: 40%;
  cursor: pointer;
}
.button1:hover {
  background-color: #ddf7ff;
}
.button1:hover svg {
  -webkit-transform: rotate(10deg);
  -moz-transform: rotate(10deg);
  -o-transform: rotate(10deg);
  -ms-transform: rotate(10deg);
  transform: rotate(10deg);
  -webkit-transition: -webkit-transform 0.15s;
  -moz-transition: -moz-transform 0.15s;
  -o-transition: -o-transform 0.15s;
  -ms-transition: -ms-transform 0.15s;
  transition: transform 0.15s;
}
.button1 svg {
  position: absolute;
  top: 13px;
  right: 25px;
  height: 30px;
  width: auto;
  -webkit-transition: -webkit-transform 0.15s;
  -moz-transition: -moz-transform 0.15s;
  -o-transition: -o-transform 0.15s;
  -ms-transition: -ms-transform 0.15s;
  transition: transform 0.15s;
}
.button1 svg path {
  fill: #2d7586;
}
.button1.clicked {
  background-color: #cff5b3;
  border: 2px solid #cff5b3;
  color: #6aaa3b;
  padding-right: 6px;
  -webkit-animation: bounce-in 0.3s;
  -moz-animation: bounce-in 0.3s;
  -o-animation: bounce-in 0.3s;
  -ms-animation: bounce-in 0.3s;
  animation: bounce-in 0.3s;
  cursor: default;
}
.button1.clicked svg {
  -webkit-animation: flyaway 1.3s linear;
  -moz-animation: flyaway 1.3s linear;
  -o-animation: flyaway 1.3s linear;
  -ms-animation: flyaway 1.3s linear;
  animation: flyaway 1.3s linear;
  top: -80px;
  right: -1000px;
}
.button1.clicked svg path {
  fill: #6aaa3b;
}
@-moz-keyframes flyaway {
  0% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: 13px;
    right: 25px;
    height: 30px;
  }
  5% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: 13px;
    right: 0px;
    height: 30px;
  }
  20% {
    -webkit-transform: rotate(-20deg);
    -moz-transform: rotate(-20deg);
    -o-transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    transform: rotate(-20deg);
    top: 13px;
    right: -130px;
    height: 45px;
  }
  40% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: -40px;
    right: -280px;
    opacity: 1;
    -ms-filter: none;
    filter: none;
  }
  100% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    transform: rotate(60deg);
    top: -200px;
    right: -1000px;
    height: 0;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
  }
}
@-webkit-keyframes flyaway {
  0% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: 13px;
    right: 25px;
    height: 30px;
  }
  5% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: 13px;
    right: 0px;
    height: 30px;
  }
  20% {
    -webkit-transform: rotate(-20deg);
    -moz-transform: rotate(-20deg);
    -o-transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    transform: rotate(-20deg);
    top: 13px;
    right: -130px;
    height: 45px;
  }
  40% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: -40px;
    right: -280px;
    opacity: 1;
    -ms-filter: none;
    filter: none;
  }
  100% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    transform: rotate(60deg);
    top: -200px;
    right: -1000px;
    height: 0;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
  }
}
@-o-keyframes flyaway {
  0% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: 13px;
    right: 25px;
    height: 30px;
  }
  5% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: 13px;
    right: 0px;
    height: 30px;
  }
  20% {
    -webkit-transform: rotate(-20deg);
    -moz-transform: rotate(-20deg);
    -o-transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    transform: rotate(-20deg);
    top: 13px;
    right: -130px;
    height: 45px;
  }
  40% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: -40px;
    right: -280px;
    opacity: 1;
    -ms-filter: none;
    filter: none;
  }
  100% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    transform: rotate(60deg);
    top: -200px;
    right: -1000px;
    height: 0;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
  }
}
@keyframes flyaway {
  0% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: 13px;
    right: 25px;
    height: 30px;
  }
  5% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: 13px;
    right: 0px;
    height: 30px;
  }
  20% {
    -webkit-transform: rotate(-20deg);
    -moz-transform: rotate(-20deg);
    -o-transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    transform: rotate(-20deg);
    top: 13px;
    right: -130px;
    height: 45px;
  }
  40% {
    -webkit-transform: rotate(10deg);
    -moz-transform: rotate(10deg);
    -o-transform: rotate(10deg);
    -ms-transform: rotate(10deg);
    transform: rotate(10deg);
    top: -40px;
    right: -280px;
    opacity: 1;
    -ms-filter: none;
    filter: none;
  }
  100% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    transform: rotate(60deg);
    top: -200px;
    right: -1000px;
    height: 0;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
  }
}
@-moz-keyframes bounce-in {
  0% {
    padding-right: 30px;
  }
  40% {
    padding-right: 6px;
  }
  50% {
    padding-left: 30px;
  }
  100% {
    padding-left: 6px;
  }
}
@-webkit-keyframes bounce-in {
  0% {
    padding-right: 30px;
  }
  40% {
    padding-right: 6px;
  }
  50% {
    padding-left: 30px;
  }
  100% {
    padding-left: 6px;
  }
}
@-o-keyframes bounce-in {
  0% {
    padding-right: 30px;
  }
  40% {
    padding-right: 6px;
  }
  50% {
    padding-left: 30px;
  }
  100% {
    padding-left: 6px;
  }
}
@keyframes bounce-in {
  0% {
    padding-right: 30px;
  }
  40% {
    padding-right: 6px;
  }
  50% {
    padding-left: 30px;
  }
  100% {
    padding-left: 6px;
  }
}

  </style>
  	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
      <button class="button1" type = "submit" name="submit" class="button-black" value="Sign Up"><p>Send</p><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
    <path id="paper-plane-icon" d="M462,54.955L355.371,437.187l-135.92-128.842L353.388,167l-179.53,124.074L50,260.973L462,54.955z
M202.992,332.528v124.517l58.738-67.927L202.992,332.528z"></path> 
  </svg></button>
      </form>
      </center>
</div><?php }?>
<script type="text/javascript">
  	$(document).ready(function() {
    $('select').material_select();
  });

$('button').click(function() {
  $(this).toggleClass('clicked');
  $('button p').text(function(i, text) {
    return text === "Sent!" ? "Send" : "Sent!";
  });
});
  </script>
</section>
<?php include_once 'footer.php'; ?>
</body>
</html>