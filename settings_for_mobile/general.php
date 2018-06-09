<?php
session_start();
if(!isset($_SESSION['usr_id'])!="") {
  header("Location: home");
}

include_once '../dbconnect.php';


$error = false;
$successmsg = "";
//check if form is submitted
if (isset($_POST['signup'])) {
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $description = mysqli_real_escape_string($con, $_POST['description']);
  $facebooklink = mysqli_real_escape_string($con, $_POST['facebooklink']);
  $twitterlink = mysqli_real_escape_string($con, $_POST['twitterlink']);
  $instagramlink = mysqli_real_escape_string($con, $_POST['instagramlink']);
  $youtubelink = mysqli_real_escape_string($con, $_POST['youtubelink']);
  $googlepluslink = mysqli_real_escape_string($con, $_POST['googlepluslink']);
  $id = $_SESSION['usr_id'];
   if(mysqli_query($con,"UPDATE users SET name='$name', email='$email', description='$description',facebooklink='$facebooklink',twitterlink='$twitterlink',instagramlink='$instagramlink',youtubelink='$youtubelink',googlepluslink='$googlepluslink' WHERE id='$id'")) {
      $successmsg = "Update Successfully! Please relogin your account to see the changes.";
    } else {
      $errormsg = "Please try again later!";
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
        <form class="col s12" style="padding :2%; width: 95%;" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
    <div class="row">
        <div class="input-field col s12">
          <input name = "name" type="text" class="validate" required value="<?php echo $_SESSION['usr_name'] ?>">
          
          <label for="name">Name</label>
          
         </div>
      </div>
    <div class="row">
        <div class="input-field col s12">
          <input id="email" name = "email" type="email" class="validate" required value="<?php echo $_SESSION['usr_email'] ?>">
          <label for="email" data-error="wrong email" data-success="right">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name = "description" type="text" class="validate" value="<?php echo $_SESSION['usr_description'] ?>">
          
          <label for="description">Description</label>
          
         </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name = "facebooklink" type="text" class="validate" value="<?php echo $_SESSION['facebooklink'] ?>">
          
          <label for="facebooklink">Facebook</label>
          
         </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name = "twitterlink" type="text" class="validate" value="<?php echo $_SESSION['twitterlink'] ?>">
          
          <label for="twitterlink">Twitter</label>
          
         </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name = "instagramlink" type="text" class="validate" value="<?php echo $_SESSION['instagramlink'] ?>">
          
          <label for="instagramlink">Instagram</label>
          
         </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name = "youtubelink" type="text" class="validate" value="<?php echo $_SESSION['youtubelink'] ?>">
          
          <label for="youtubelink">Youtube</label>
          
         </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name = "googlepluslink" type="text" class="validate" value="<?php echo $_SESSION['googlepluslink'] ?>">
          
          <label for="googlepluslink">Google Plus</label>
          
         </div>
      </div>
      <button type = "submit" name="signup" class="button-black" value="Sign Up">Update</button><br>
      <span style=""><?php echo $successmsg;?></span>
      </form>
</div>
</section>
<?php include_once '../footer.php'; ?>
</body>

</html>