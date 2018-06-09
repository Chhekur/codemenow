<?php
session_start();
if(!isset($_SESSION['usr_id'])!="") {
  header("Location: home");
}

include_once 'dbconnect.php';


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
  header("Location: home");
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
<head>
<title>Setting | Codemenow</title>
<link rel="stylesheet" type="text/css" href="/css/materialize.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/typed.js"></script>
</head>
<body>
<?php include_once 'nav_and_sidebar.php';?>
<style type="text/css">
   header, main {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main {
        padding-left: 0;
      }
    }
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
/* Style the tab */
@media screen and (max-width: 640px){
  .desktop{
    display: none;
  }
}
@media screen and (min-width: 640px){
  .mobile{
    display:none;
  }
}
</style>
<section style="padding-bottom:50px;">
<div class="desktop" style="margin:135px;">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">General</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Change Password</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Change Image</button>
</div>
<div class="transback">
<div id="London" class="tabcontent" style="height: 100%;">
  <form class="col s12" style="padding :2%; width: 100%;" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
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
</div></div>

<div id="Paris" class="tabcontent">
  <form class="col s12" style="padding :2%; width: 100%;" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="updatepassword">
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
    </form>
</div>

<div id="Tokyo" class="tabcontent">
  <p>Upload Profile Picture</p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
        <input id="file" type="file" name="file" style="width: 0.1px;height: 0.1px;opacity: 0;overflow: hidden;position: absolute;z-index: -1;">
        <label class="choose" for="file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
        <button type="submit" value="upload" class="button-black">Upload</button>
        </form>
</div>
</div>
<div class="mobile" style="margin-top: 100px;">
  <div class="tab" style="width: 100%;">
  <button style="background-color: #fbfbfb; box-shadow: none;margin: 0px;" onclick="document.location.href='/gen_setting'">General</button>
  <button style="background-color: #fbfbfb; box-shadow: none;margin: 0px;" onclick="document.location.href='/pass_setting'">Change Password</button>
  <button style="background-color: #fbfbfb; box-shadow: none;margin: 0px;" onclick="document.location.href='/pic_setting'">Change Image</button>
</div>
</div>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</section>

<?php include_once 'footer.php';?>
</body>
</html>