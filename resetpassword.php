<?php
include_once 'dbconnect.php';
include_once 'confirmcode.php';
include_once 'confirmid.php';
//set validation error flag as false
$id = $_GET['id'];
$successmsg = "";
$code = $_GET['code'];
//check if form is submitted
if (isset($_POST['reset'])) {
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']); 
  $resetid = mysqli_real_escape_string($con, $_POST['id']);
  $password  = md5($password);
  $cpassword = md5($cpassword);
  
 	if($password == $cpassword){
  if(mysqli_query($con,"UPDATE users SET password='$cpassword' WHERE id='$resetid'")) {
      $successmsg = "Your Password have been changed.";
      include_once 'code.php';
      header("Location: successful");
    } else {
      $successmsg = "Please try again later!";
    }
}
else{
	$successmsg = "New password and confirm password doesn't match.";
}

}

?>

<!DOCTYPE html>
<html>
<head><title>Codemenow</title>
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
<center>
<?php if ($confirmcode == $code && $confirmid == $id) {?>
        <p class= "startcoding" style="font-size: 20px;margin-top: 0%;" >Reset your password?</p>
    <form class="col s12" style="padding :2%; width: 320px;" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="resetform">
    <div class="row">
        <div class="input-field col s12">
          <input id="password" name ="password" type="password" class="validate" required>
          <label for="password">New Password</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="cpassword" name ="cpassword" type="password" class="validate" required>
          <label for="cpassword">Confirm Password</label>
        </div>
      </div>
      <input name="id" value="<?php echo $id;?>" style="display: none;"/>
      <button type = "submit" name="reset" class="button-black" value="RESET">RESET PASSWORD</button><br><br>
      <span><?php echo $successmsg;?></span>
      </form>
      <?php } else{ if($confirmid != $id){ ?>
      <h4>You are trying to manipulate url.</h4>
      <?php } else{?>
      <h4>Your password reset link has expired.</h4>
      <?php } }?>
      </center>
</div>
</section>
<?php include_once 'footer.php';?>
</body>
</html>
