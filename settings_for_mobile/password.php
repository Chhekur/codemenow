<?php
session_start();
if(!isset($_SESSION['usr_id'])!="") {
  header("Location: home");
}

include_once '../dbconnect.php';


$error = false;
$successmsg = "";
//check if form is submitted
if (isset($_POST['update'])) {
  $currentpassword = mysqli_real_escape_string($con, $_POST['currentpassword']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
  $cpassword = md5($cpassword);
  $currentpassword = md5($currentpassword);
  $password = md5($password);
  $id = $_SESSION['usr_id'];
if($currentpassword == $_SESSION['usr_password']){
  if($password == $cpassword){
   if(mysqli_query($con,"UPDATE users SET password='$cpassword' WHERE id='$id'")) {
      if(isset($_SESSION['usr_id'])) {
  session_destroy();
  unset($_SESSION['usr_id']);
  unset($_SESSION['usr_name']);
  header("Location: /home");
} else {
  header("Location: home");
}
      $successmsg = "Update Successfully! Please relogin your account to see the changes.";
    } else {
      $errormsg = "Please try again later!";
       }

  }
  else{
    $successmsg = "New password and confirm password doesn't match.";
  }
}
else{
  $successmsg = "Incorrect current password.";
}
}


?>
<!DOCTYPE html>
<html>
<head><time>Codemenow</time>
<link rel="stylesheet" type="text/css" href="/css/materialize.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/typed.js"></script>
</head>
<body>
<?php include_once '../nav_and_sidebar.php';?>
<section> 
<div class="content" style="margin-top: 80px;">
        <form class="col s12" style="padding :2%; width: 95%;" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="updatepassword">
    <div class="row">
        <div class="input-field col s12">
          <input id = "currentpassword" name="currentpassword" type="password" class="validate" required value="">
          
          <label for="currentpassword">Current Password</label>
          
         </div>
      </div>
    <div class="row">
        <div class="input-field col s12">
          <input id="password" name = "password" type="password" class="validate" required value="">
          <label for="password">New Password</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12">
          <input id="cpassword" name = "cpassword" type="password" class="validate" required value="">
          <label for="cpassword">Confirm Password</label>
        </div>
      </div>
      <button type = "submit" name="update" class="button-black" value="Sign Up">Update</button><br>
      <span style=""><?php echo $successmsg;?></span>
    </form>
</div>
</section><br>
<?php include_once '../footer.php'; ?>
</body>

</html>