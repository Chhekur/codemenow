<?php include_once 'dbconnect.php';
$notification="";
$noti = explode(",", $_SESSION['notifications']);
for($i = sizeof($noti); $i > sizeof($noti)-5; $i--){
  if($noti[$i] !=""){
    $notification .= "<li><a>".$noti[$i]."</a></li>";
  }
}
?>

<style type="text/css">
	/*section{
		background: url("assets/img/coursepage.jpg");
		background-size: 100% 100%;
	}*/
   header, main {
      padding-left: 300px;
    }

    @media only screen and (max-width : 992px) {
      header, main {
        padding-left: 0;
      }
    }
    .dropdown-button{
      margin-right: 50px;
    }
    .dropdown-button:hover{
      background-color: white;
    }
    .dropdown-content{
      min-width: 300px;
      margin-top: 50px;
    }
</style>
<!--Profile-->
<ul id="slide-out" class="side-nav">
    <li><div class="userView">
      <div class="background">
        <img src="/assets/img/usr/cover.jpg" style="height: 100%;width: 100%;">
      </div>
      <a href="#!user"><img class="circle" style="border: 2px solid white;" src="/assets/img/usr/<?php echo $_SESSION['usr_id']; ?>.jpg" onError="this.onerror=null;this.src='/assets/img/usr/sample.png';"></a>
      <a href="#!name"><span class="white-text name"><?php echo $_SESSION['usr_name']; ?></span></a>
      <a href="#!email"><span class="white-text email"><?php echo $_SESSION['usr_email'];?></span></a>
    </div></li>
    <li><a href="/profile"><i class="material-icons">perm_identity</i>View Full Profile</a></li>
    <li><a class="waves-effect" href="/dashboard/<?php echo $_SESSION['ds'];?>">Dashboard</a></li>
    <li><a href="/course">All Courses</a></li>
    <li><a class="waves-effect" href="/setting">Settings</a></li>
    <li><a class="waves-effect" href="/logout">Log out</a></li>
  </ul>

<nav class="main-nav" >
<a href="/home"><img src = "/assets/logo.png"  style="float:left; margin-top: 5px; margin-left:15px; height: 55px;"></img></a>
<ul style="float:right;">
<?php if (isset($_SESSION['usr_id'])) { ?>
<li>
  <a style ="color:black;" class='dropdown-button' href='#' data-activates='dropdown1'><i class="material-icons" >notifications</i></a>
  <ul id='dropdown1' class='dropdown-content'>
    <?php echo $notification;?>
  </ul>
        </li>
        <li><a href="#" style="height: 0px;width: 0px; margin-top: 5px;" data-activates="slide-out" class="button-collapse"><img src="/assets/img/usr/<?php echo $_SESSION['usr_id']; ?>.jpg" onError="this.onerror=null;this.src='/assets/img/usr/sample.png';" style="height: 50px;width: 50px; border-radius: 100%; float: right;"></a></li>
        </ul>
        <?php } else { ?>
<button class="button-black" style="float:right;height: 40px; margin: 10px;" onclick="window.location.href='/signup'">Sign up</button>
 <button class="button-gray" style="float:right;height: 40px; margin: 10px;" onclick="window.location.href='/login'">Login</button>
<?php } ?>

</nav>
<script type="text/javascript">
    
     $(".button-collapse").sideNav();
     $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
  </script>