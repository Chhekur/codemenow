<?php
session_start();

if(isset($_SESSION['usr_id'])) {
  header("Location: course");
}
include_once 'dbconnect.php';
require 'phpmailer/PHPMailerAutoload.php';
//set validation error flag as false
$error = false;
$checkbox_error="";
$errormsg = "";
//check if form is submitted
if (isset($_POST['signup'])) {
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $checkbox = mysqli_real_escape_string($con, $_POST['checkbox']);
    
  //name can contain only alpha characters and space
  if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
    $error = true;
    $name_error = "Name must contain only alphabets and space";
  }
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $error = true;
    $email_error = "Please Enter Valid Email ID";
  }
  if(strlen($password) < 6) {
    $error = true;
    $password_error = "Password must be minimum of 6 characters";
  }
  if($checkbox != 'on'){
    $error = true;
    $checkbox_error = "Please accept terms and conditions";
  }
    if (!$error) {
    if(mysqli_query($con, "INSERT INTO users(name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
      $successmsg = "Successfully registration...";
    $mail = new PHPMailer;
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
    $mail->Subject = 'Welcome to Codemenow';
    $mail->Body    = "Hello {$name} Welcome.";
    $mail->AltBody = '';
    $mail->send();
      $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");
      if ($row = mysqli_fetch_array($result)) {
    $_SESSION['usr_id'] = $row['id'];
    $_SESSION['usr_name'] = $row['name'];
    $_SESSION['usr_email'] = $row['email'];
    $_SESSION['usr_password'] = $row['password'];
    $_SESSION['usr_description'] = $row['description'];
    $_SESSION['c'] = $row['c'];
    $_SESSION['cplusplus'] = $row['cplusplus'];
    $_SESSION['javascript'] = $row['javascript'];
    $_SESSION['python'] = $row['python'];
    $_SESSION['ruby'] = $row['ruby'];
    $_SESSION['htmlcss'] = $row['htmlcss'];
    $_SESSION['sql'] = $row['sqlite'];
    $_SESSION['perl'] = $row['perl'];
    $_SESSION['terminal'] = $row['terminal'];
    $_SESSION['php'] = $row['php'];
    $_SESSION['facebooklink'] = $row['facebooklink'];
    $_SESSION['twitterlink'] = $row['twitterlink'];
    $_SESSION['instagramlink'] = $row['instagramlink'];
    $_SESSION['youtubelink'] = $row['youtubelink'];
    $_SESSION['googlepluslink'] = $row['googlepluslink'];
    $_SESSION['ds'] = 0;
  }
      header("Location: course");
    } else {
      $errormsg = "This email is already registered";
    }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Signup | Codemenow</title>
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
        <center><p class= "startcoding" style="font-size: 20px;margin-top: 0%; width: 320px;" >Eat.Sleep.Code.Repeat.</p>
    <form class="col s12" style="padding :2%; width: 350px;" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
    <div class="row">
        <div class="input-field col s12">
          <input name = "name" type="text" class="validate" required value="<?php if($error) echo $name; ?>">
          
          <label for="name">Name</label>
          <span style="color:red; font-size: 13px;"><?php if (isset($name_error)) echo $name_error; ?></span>
        </div>
      </div>
    <div class="row">
        <div class="input-field col s12">
          <input id="email" name = "email" type="email" class="validate" required value="<?php if($error) echo $email; ?>">
          <label for="email" data-error="wrong email" data-success="right">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name = "password" type="password" class="validate">
          <label for="password" data-error="Password must be 6 or more." data-success= "right">Password</label>
          <span style="color: red; font-size: 13px;"><?php echo $checkbox_error; ?></span>

        </div>
      </div>
      <p><style>
        .link:hover{
          text-decoration: underline; 
        }
      </style>
      <input name = "checkbox" type="checkbox" id="test5" onclick="EnableSubmit(this)" />
      <label for="test5" style="left: 8px;" style="font-size: 12px;">you agree to codemenow's <a href="/termsandcondition" class="link" style="font-size: 12px;">Terms of Service and Privacy Policy.</a></label>
    </p><br><span><?php if (isset($name_error)) echo $name_error; ?></span>
      <button type = "submit" name="signup" class="button-black" value="Sign Up">Sign up</button>
      </form>
      <span style="color:red; font-size: 13px"><?php echo $errormsg;?></span>
      </center>
</div>
</section>
<?php include_once 'footer.php';?>
</body>

</html>