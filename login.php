<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
  header("Location: home");
}

include_once 'dbconnect.php';
$_SESSION['ds'] = 0;

//check if form is submitted
if (isset($_POST['login'])) {

  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

  if ($row = mysqli_fetch_array($result)) {
    $_SESSION['usr_id'] = $row['id'];
    $_SESSION['usr_name'] = $row['name'];
    $_SESSION['usr_email'] = $row['email'];
    $_SESSION['usr_password'] = $row['password'];
    $_SESSION['notifications'] = $row['notifications'];
    $_SESSION['usr_description'] = $row['description'];
    $_SESSION['cplusplus'] = $row['cplusplus'];
    $_SESSION['javascript'] = $row['javascript'];
    $_SESSION['python'] = $row['python'];
    $_SESSION['ruby'] = $row['ruby'];
    $_SESSION['htmlcss'] = $row['htmlcss'];
    $_SESSION['sql'] = $row['sqlite'];
    $_SESSION['perl'] = $row['perl'];
    $_SESSION['terminal'] = $row['terminal'];
    $_SESSION['php'] = $row['php'];
    $_SESSION['c'] = $row['c'];
    $_SESSION['facebooklink'] = $row['facebooklink'];
    $_SESSION['twitterlink'] = $row['twitterlink'];
    $_SESSION['instagramlink'] = $row['instagramlink'];
    $_SESSION['youtubelink'] = $row['youtubelink'];
    $_SESSION['googlepluslink'] = $row['googlepluslink'];
if($_SESSION['c']>0){
	$_SESSION['ds'] = 10;
}
elseif($_SESSION['cplusplus']>0){
	$_SESSION['ds'] = 1;
}
elseif($_SESSION['javascript']>0){
	$_SESSION['ds'] = 2;
}
elseif($_SESSION['python']>0){
	$_SESSION['ds'] = 3;
}
elseif($_SESSION['htmlcss']>0){
	$_SESSION['ds'] = 5;
}
elseif($_SESSION['ruby']>0){
	$_SESSION['ds'] = 4;
}
elseif($_SESSION['perl']>0){
	$_SESSION['ds'] = 7;
}
elseif($_SESSION['sql']>0){
	$_SESSION['ds'] = 6;
}
elseif($_SESSION['terminal']>0){
	$_SESSION['ds'] = 8;
}
elseif($_SESSION['php']>0){
	$_SESSION['ds'] = 9;
}
    header("Location: dashboard/{$_SESSION['ds']}");
  } else {
    $errormsg = "Incorrect Email or Password!!!";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Login | Codemenow</title>
<link rel="stylesheet" type="text/css" href="/css/materialize.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/typed.js"></script>
</head>
<body>
<style type="text/css">
</style>
<?php include_once 'nav_and_sidebar.php';?>
<section> 
<div class="content" style="margin-top: 135px; margin-bottom: 135px;">
        <center><p class="startcoding" style="font-size: 20px;margin-top: 0%; width:300px;" >Cont... where you left!</p>
    <form class="col s12" style="padding :2%; width: 320px; " role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform" >
    <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row" style="margin-bottom: -30px;">
        <div class="input-field col s12">
          <input id="password" name ="password" type="password" class="validate" required>
          <label for="password">Password</label>
        </div>
        </div>
        <a href="reset" class="link">Forgot your password?</a></center>
        <style>
          .link:hover{
            text-decoration: underline;
          }
        </style>
        
      <center>
      <button type ="submit" style="margin-top: 20px;" name = "login" value="Login" class="button-black">Login</button>
      </form><br>
      <span style="color: red;font-size: 15px;"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

      </center>
</div>
</section>
<?php include_once 'footer.php';?>
</body>

</html>