<?php
session_start();
include_once 'dbconnect.php';
$usrid = $_SESSION['usr_id'];
if(isset($_POST['test'])){
	$one = mysqli_real_escape_string($con, $_POST['one']);
   if($_GET['id']==1){
		if($_SESSION['cplusplus']==0){
			mysqli_query($con,"UPDATE users SET cplusplus='$one' WHERE id='$usrid'");
			header("Location: /course/cplusplus/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/cplusplus/beginnercoursef/asdfa8201".$_SESSION['cplusplus'] . "2122sdfasdfid=08012000" );
		}
	 
	}
	if($_GET['id']==2){
		if($_SESSION['javascript']==0){
			mysqli_query($con,"UPDATE users SET javascript='$one' WHERE id='$usrid'");
			header("Location: /course/javascript/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/javascript/beginnercoursef/asdfa8201".$_SESSION['javascript'] . "2122sdfasdfid=08012000");
		}
	}
	
	if($_GET['id']==3){
		if($_SESSION['python']==0){
			mysqli_query($con,"UPDATE users SET python='$one' WHERE id='$usrid'");
			header("Location: /course/python/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/python/beginnercoursef/asdfa8201".$_SESSION['python']. "2122sdfasdfid=08012000");
		}
	
	}
	if($_GET['id']==4){
		if($_SESSION['ruby']==0){
			mysqli_query($con,"UPDATE users SET ruby='$one' WHERE id='$usrid'");
			header("Location: /course/ruby/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/ruby/beginnercoursef/asdfa8201".$_SESSION['ruby'] . "2122sdfasdfid=08012000" );
		}
	}
	
	if($_GET['id']==5){
		if($_SESSION['htmlcss']==0){
			mysqli_query($con,"UPDATE users SET htmlcss='$one' WHERE id='$usrid'");
			header("Location: /course/htmlcss/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/htmlcss/beginnercoursef/asdfa8201".$_SESSION['htmlcss'] . "2122sdfasdfid=08012000");
		}
	
	}
	if($_GET['id']==6){
		if($_SESSION['sql']==0){
			mysqli_query($con,"UPDATE users SET sqlite='$one' WHERE id='$usrid'");
			header("Location: /course/sql/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/sql/beginnercoursef/asdfa8201".$_SESSION['sql'] . "2122sdfasdfid=08012000");
		}
	}
	if($_GET['id']==7){
		if($_SESSION['perl']==0){
			mysqli_query($con,"UPDATE users SET perl='$one' WHERE id='$usrid'");
			header("Location: /course/perl/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/perl/beginnercoursef/asdfa8201".$_SESSION['perl'] . "2122sdfasdfid=08012000");
		}
	
	}
	if($_GET['id']==8){
		if($_SESSION['terminal']==0){
			mysqli_query($con,"UPDATE users SET terminal='$one' WHERE id='$usrid'");
			header("Location: /course/terminal/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/terminal/beginnercoursef/asdfa8201".$_SESSION['terminal'] . "2122sdfasdfid=08012000");
		}
	}
	if($_GET['id']==9){
		if($_SESSION['php']==0){
			mysqli_query($con,"UPDATE users SET php='$one' WHERE id='$usrid'");
			header("Location: /course/php/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/php/beginnercoursef/asdfa8201".$_SESSION['php'] . "2122sdfasdfid=08012000");
	}

	
	}
    if($_GET['id']==10){
    if($_SESSION['c']==0){
      mysqli_query($con,"UPDATE users SET c='$one' WHERE id='$usrid'");
      header("Location: /course/c/beginnercoursef/asdfa820112122sdfasdfid=08012000");
    }
    else{
    header("Location: /course/c/beginnercoursef/asdfa8201".$_SESSION['c'] . "2122sdfasdfid=08012000");
  }

  
  }
}
$perc = ($_SESSION['c']/104)*100;
$perc = (int)$perc;
$percplusplus = ($_SESSION['cplusplus']/104)*100;
$percplusplus = (int)$percplusplus;
$perjavascript = ($_SESSION['javascript']/104)*100;
$perjavascript = (int)$perjavascript;
$perpython = ($_SESSION['python']/167)*100;
$perpython = (int)$perpython;
$perruby = ($_SESSION['ruby']/104)*100;
$perruby = (int)$perruby;
$perhtmlcss = ($_SESSION['htmlcss']/104)*100;
$perhtmlcss = (int)$perhtmlcss;
$persql = ($_SESSION['sql']/104)*100;
$persql = (int)$persql;
$perperl = ($_SESSION['perl']/104)*100;
$perperl = (int)$perperl;
$perphp = ($_SESSION['php']/104)*100;
$perphp = (int)$perphp;

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

?>


<!DOCTYPE html>
<html>
<head><time>Dashboard | Codemenow</time>
<link rel="stylesheet" type="text/css" href="/css/materialize.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/typed.js"></script>
</head>
<body>
<?php include_once 'nav_and_sidebar.php';?>
<section > 
<style type="text/css">
/*Just the background stuff */
span.s1 {
  position: absolute;
  top: 0;
  font-size: 15rem;
  font-weight: 800;
  text-transform: uppercase;
  color: #3C4447;
}

span.s2 {
  font-weight: 800;
  position: absolute;
  bottom: 0;
  right: 0;
  font-size: 15rem;
  text-transform: uppercase;
  color: #3C4447;
}


/* The card */
.card1 {
  position: relative;
  height: 200px;
  width: 700px;
  margin: 200px auto;
  margin-top: 60px;
  background-color: #FFF;
  -webkit-box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);
  box-shadow: 10px 10px 93px 0px rgba(0, 0, 0, 0.75);
}

/* Image on the left side */
.thumbnail {
  float: left;
  position: relative;
  left: 30px;
  top: -60px;
  height: 150px;
  width: 150px;
  
  overflow: hidden;
}

/*object-fit: cover; */
/*object-position: center; */
.left {
  position: absolute;
  left: 50%;
  top: 50%;
  height: auto;
  height: 100%;
  width: 100%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

/* Right side of the card */
.right {
  margin-right: 150px;
}

.h1 {
  padding-top: 15px;
  font-size: 2rem;
  color: #4B4B4B;
}

.author {
  background-color: #9ECAFF;
  height: 30px;
  width: 110px;
  border-radius: 20px;
}

.author > img {
  padding-top: 5px;
  margin-left: 10px;
  float: left;
  height: 20px;
  width: 20px;
  border-radius: 50%;
}

.h2 {
  padding-top: 8px;
  margin-right: 6px;
  text-align: right;
  font-size: 0.8rem;
}

.separator {
  margin-top: 10px;
  border: 1px solid #C3C3C3;
}

.p {
  text-align: justify;
  padding-top: 10px;
  font-size: 1rem;
  line-height: 150%;
  color: #4B4B4B;
}

/* DATE of release */
.h5 {
  position: absolute;
  left: 30px;
  bottom: 0px;
  font-size: 3rem;
  color: #C3C3C3;
}

.h6 {
  position: absolute;
  left: 30px;
  bottom: -55px;
  font-size: 2rem;
  color: #C3C3C3;
}

/* Those futur buttons */
.ul {
  margin-left: 250px;
}

.li {
  display: inline;
  list-style: none;
  padding-right: 40px;
  color: #7B7B7B;
}

/* Floating action button */
.fab {
  position: absolute;
  right: 20px;
  bottom: -10px;
  box-sizing: border-box;
  padding-top: 18px;
  width: 80px;
  height: 80px;
  color: white;
  text-align: center;
  border-radius: 50%;
}
/* Style the tab */
.tab {
    float: left;
    
    background-color: #f1f1f1;
    width: 30%;
    height: 100%;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    
    width: 61%;
    border-left: none;
    height: 100%;
}
</style>
<style>
.ul1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 25%;
    background-color: #fbfbfb;
    position: fixed;
    height: 100%;
    overflow: auto;
}

.li1 a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

.li1 a.active1 {
    background-color: #4CAF50;
    color: white;
}

.li1 a:hover:not(.active1) {
    background-color: #555;
    color: white;
}
@media screen and (max-width: 640px){
  .desktop{
    display: none;
  }
}
@media screen and (min-width: 640px){
  .card1{
    box-shadow: none;
    border:10px solid #f1f1f1;
  }
  .mobile{
    display:none;
  }
}
html{
	background-color: #fbfbfb;
}
</style>
<div class = "desktop">
<?php if($_SESSION['c']>0 || $_SESSION['cplusplus']>0 || $_SESSION['javascript']>0 || $_SESSION['python']>0 || $_SESSION['ruby']>0 || $_SESSION['htmlcss']>0 || $_SESSION['sql']>0 || $_SESSION['perl']>0 || $_SESSION['php']>0) {?>
<div class="content" style="margin: 135px; margin-left: 10px; margin-top: 0px;"><ul class="ul1">
<center><h5>Dashboard</h5><hr></center>
  <?php if($_SESSION['c']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==10){?>active1<?php }?>" href="10">C <p style="float:right;margin-top: 0px;"><?php echo $perc; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['cplusplus']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==1){?>active1<?php }?>" href="1">C++ <p style="float:right;margin-top: 0px;"><?php echo $percplusplus; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['javascript']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==2){?>active1<?php }?>" href="2">Javascript <p style="float:right;margin-top: 0px;"><?php echo $perjavascript; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['python']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==3){?>active1<?php }?>" href="3">Python <p style="float:right;margin-top: 0px;"><?php echo $perpython; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['htmlcss']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==5){?>active1<?php }?>" href="5">HTML & CSS <p style="float:right;margin-top: 0px;"><?php echo $perhtmlcss; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['ruby']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==4){?>active1<?php }?>" href="4">Ruby<p style="float:right;margin-top: 0px;"><?php echo $perruby; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['perl']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==7){?>active1<?php }?>" href="7">Perl <p style="float:right;margin-top: 0px;"><?php echo $perperl; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['sql']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==6){?>active1<?php }?>" href="6">Sql <p style="float:right;margin-top: 0px;"><?php echo $persql; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['terminal']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==8){?>active1<?php }?>" href="8">Terminal</a></li><?php }?>
    <?php if($_SESSION['php']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==9){?>active1<?php }?>" href="9">php <p style="float:right;margin-top: 0px;"><?php echo $perphp; ?>%</p></a></li><?php }?>
</ul>

<div style="margin-left:35%;padding:1px 16px;margin-top: 80px;">
	<div class="card1" >
  <div class="thumbnail"><img class="left" src="<?php echo("/assets/languages/" . htmlspecialchars($_GET["id"]) . ".png");?>"/></div>
  <div class="right">
    <h1 class = "h1"><?php echo file_get_contents("coursepage/name/" . htmlspecialchars($_GET["id"]) . ".txt");?></h1>
    <div class="separator"></div>
    <p class="p"><?php echo file_get_contents("coursepage/inf/" . htmlspecialchars($_GET["id"]) . ".txt");?></p>
  </div>
  <h5 class="h5"><?php echo file_get_contents("coursepage/name/" . htmlspecialchars($_GET["id"]) . ".txt");?></h5>
    <div class="fab"><form method="post">
    <input style="display: none;" name = "one" type="text" class="validate" required value="1"><input style="background: url(/assets/img/button.png);height: 80px; width: 80px; border: 0; background-size:100% 100%; outline: none;" type="submit"  name="test" id="test" value="" /><br/></form>
</div>
</div></div>
<div id="content1" style="margin-left:38%; margin-bottom: 50%; margin-top: -12%;">
<?php echo explode("@", file_get_contents("coursepage/syllabus/" . htmlspecialchars($_GET["id"]) . ".txt"))[0];?>
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
</div>
</div>
<div class = "mobile" style="margin-top: 60px;">
<ul class="ul12">
<center><h5>Dashboard</h5><hr></center>
  <?php if($_SESSION['c']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==10){?>active1<?php }?>" href="/course/10">C <p style="float:right;margin-top: 0px;"><?php echo $perc; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['cplusplus']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==1){?>active1<?php }?>" href="/course/1">C++ <p style="float:right;margin-top: 0px;"><?php echo $percplusplus; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['javascript']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==2){?>active1<?php }?>" href="/course/2">Javascript <p style="float:right;margin-top: 0px;"><?php echo $perjavascript; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['python']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==3){?>active1<?php }?>" href="/course/3">Python <p style="float:right;margin-top: 0px;"><?php echo $perpython; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['htmlcss']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==5){?>active1<?php }?>" href="/course/5">HTML & CSS <p style="float:right;margin-top: 0px;"><?php echo $perhtmlcss; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['ruby']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==4){?>active1<?php }?>" href="/course/4">Ruby<p style="float:right;margin-top: 0px;"><?php echo $perruby; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['perl']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==7){?>active1<?php }?>" href="/course/7">Perl <p style="float:right;margin-top: 0px;"><?php echo $perperl; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['sql']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==6){?>active1<?php }?>" href="/course/6">Sql <p style="float:right;margin-top: 0px;"><?php echo $persql; ?>%</p></a></li><?php }?>
    <?php if($_SESSION['terminal']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==8){?>active1<?php }?>" href="/course/8">Terminal</a></li><?php }?>
    <?php if($_SESSION['php']>=1) {?>
    <li class="li1"><a class="<?php if($_GET['id']==9){?>active1<?php }?>" href="/course/9">php <p style="float:right;margin-top: 0px;"><?php echo $perphp; ?>%</p></a></li><?php }?>
</ul>
</div>
<?php } else{?>
<center><h5 style="margin: 135px;">You have not enrolled any course right now.</h5></center><?php }?>
</section>
</body>
</html>