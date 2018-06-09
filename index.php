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
  }
      header("Location: login");
    } else {
      $errormsg = "Error in registering...Please try again later!";
    }
  }
}
$review="";
$usrdata = mysqli_query($con, "SELECT * FROM users");
if ($usrdata->num_rows > 0) {
    for($i=0;$i<4;$i++){
      $row = $usrdata->fetch_assoc();
      if($row["review"] != ""){
        $review = $review."<div class='card'><img class='img' src = 'assets/img/usr/".$row['id'].".jpg' onError=\"this.onerror=null;this.src='/assets/img/usr/sample.png';\"/><br><br><div class='message' style='padding: 20px;'>".substr($row["review"], 0,240).".....</div><h5 class ='usrname'>- ".$row["name"]."</h5></div>";
      }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Easiest way to learn code | Codemenow</title>
<link rel="stylesheet" type="text/css" href="/css/materialize.css">
<meta name="description" content="Codemenow is an online platform that offer easiest way to learn How to code!">
<meta name="keywords" content="HTML,CSS,XML,JavaScript, Programming, Programming languages, c, c++, java, python, ruby, how to learn programming, easiest way to learn programming">
<meta name="msvalidate.01" content="090DA27FAF4DEC75043C441C59AF6C54" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/typed.js"></script>
<script type="text/javascript" src="/js/typed1.js"></script>
</head>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "name": "Codemenow",
  "alternateName": "Codemenow",
  "url": "http://www.codemenow.com",
  "logo": "http://codemenow.com/assets/logo.png",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+918519027140",
    "contactType": "customer service"
  }]
}
</script>
<body>

<script>
  document.addEventListener('DOMContentLoaded', function(){
      Typed.new('.element', {
        strings: ["Learn how to code, for free.", "Learn all programming languages,With us.","Just Sign up and Start Coding with Codemenow!"],
        typeSpeed: 100,
        loop:true
      });
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function(){
      Typed1.new('.element1', {
        strings: ["Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program. <br> - <b>Linus Torvalds</b>","Stay <b>foolish</b>. Stay <b>hungry</b>.<br> - <b>Steve Jobs</b>","<b>Eat. Sleep. Code. Repeat.</b><br> -<b>Anonymous</b>","I choose a <b>lazy</b> person to do a <b>hard</b> job. Because, He will find an <b>easy</b> way to do it. <br> - <b>Bill Gates</b>","Become a <b>programmer</b>, lose your brains <b>virginity</b>.<br> - <b>Anonymous</b>"],
        typeSpeed: 50,
        backDelay: 1000,
        fadeOut: true,
        fadeOutDelay: 1000,
        loop: true,
      });
  });
</script>
<section class="home" style="padding-bottom: 50px;"> 
<nav class="main-nav" >
<a href="/home"><img src = "/assets/logo.png"  style="float:left; margin-top: 5px; margin-left:15px; height: 55px;"></img></a>
<ul style="float:right;">
<?php if (isset($_SESSION['usr_id'])) { ?>
        <li><a href="#" style="height: 0px;width: 0px; margin-top: 5px;" data-activates="slide-out" class="button-collapse"><img src="assets/img/usr/<?php echo $_SESSION['usr_id']; ?>.jpg" onError="this.onerror=null;this.src='/assets/img/usr/sample.png';" style="height: 50px;width: 50px; border-radius: 100%; float: right;"></a></li></ul>
        <?php } else { ?>
<div style="width:290px;"><button class="button-black" style="float:right;height: 40px; margin-top: 10px;margin-right: 5px;margin-left: 5px; width: 30%; padding: 10px 5px;" onclick="window.location.href='/signup'">Sign up</button>
 <button class="button-gray" style="float:right;height: 40px; margin-top: 10px;width: 30%;padding: 10px 5px; margin-left: 5px;margin-right: 5px;" onclick="window.location.href='/login'">Login</button>
 <button class="button-black" style="float:right;height: 40px; margin-top: 10px;width: 30%;padding: 10px 5px;margin-right: 5px;" onclick="window.location.href='/course'">Courses</button></div>
<?php } ?>
 
</nav>

<div class="content" style="margin-top:135px; margin-bottom: 135px;">
    <center><div class="element" style="font-size:30px;padding: 10px;"></div></br></br></center>
    <div class="container">
    <div style="float:left; margin-top: 50px;">
    <img src ="/assets/img/home.png"/></div>
        <div style="float:right;"><p class="startcoding" style="font-size: 20px; text-align: center;">Let's! Get started...</p>
    <form class="col s12" style="padding :2%;width: 320px; " role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
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
          <span style="color: red; font-size: 13px;"><?php if (isset($password_error)) echo $password_error; ?></span>
        </div>
      </div>
      <p><style>
        .link:hover{
          text-decoration: underline; 
        }
      </style>
      <input name = "checkbox" type="checkbox" id="test5" onclick="EnableSubmit(this)" />
      <label for="test5" style="font-size: 12px;">you agree to codemenow's <a href="/termsandcondition" class="link" style="font-size: 12px;">Terms of Service and Privacy Policy.</a></label>
    </p><br><span><?php if (isset($name_error)) echo $name_error; ?></span>
      <button type = "submit" name="signup" class="button1" value="Sign Up"><span>Sign up </span></button>
      </form></div></div>
      
</div></section>
<section>
<div id ="content2">
  <div class="content2" style="height: 300px;"></br>
    <center><div class="element1"  style="font-size:20px;"></div></center>
</div>
</div>
<style>
  .review{
    padding-top: 5%;
    padding-bottom: 5%;
  }
  .card{
    margin: 20px;
    background-color: white;
    width: 300px;
    border:10px solid #f1f1f1;
  }
  .card:hover{
    background-color: #f2f2f2;
  }
  .img{
    border-radius: 50%;
    height: 120px;
    width: 120px;
    margin-top: 50px;
  }
  .usrname{
    text-align: right;
    padding: 10px;
    padding-top: 0px;
    color:grey;
  }

</style>
<div class = "content3">

<div class="review">
<center>
<?php echo $review;?>
</center>
</div>

</div>
</section>

<?php include_once 'footer.php';?>
</body>

</html>