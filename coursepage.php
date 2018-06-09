<?php
session_start();

include_once 'dbconnect.php';
$usrid = $_SESSION['usr_id'];
if(isset($_POST['test'])){
	$one = mysqli_real_escape_string($con, $_POST['one']);
   if($_GET['id']==1){
		if($_SESSION['cplusplus']==0){
			mysqli_query($con,"UPDATE users SET cplusplus='$one' WHERE id='$usrid'");
      $_SESSION['ds'] = 1;
			header("Location: /course/cplusplus/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/cplusplus/beginnercoursef/asdfa8201".$_SESSION['cplusplus'] . "2122sdfasdfid=08012000" );
		}
	 
	}
	if($_GET['id']==2){
		if($_SESSION['javascript']==0){
			mysqli_query($con,"UPDATE users SET javascript='$one' WHERE id='$usrid'");
      $_SESSION['ds'] = 2;
			header("Location: /course/javascript/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/javascript/beginnercoursef/asdfa8201".$_SESSION['javascript'] . "2122sdfasdfid=08012000");
		}
	}
	
	if($_GET['id']==3){
		if($_SESSION['python']==0){
			mysqli_query($con,"UPDATE users SET python='$one' WHERE id='$usrid'");
      $_SESSION['ds'] = 3;
			header("Location: /course/python/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/python/beginnercoursef/asdfa8201".$_SESSION['python']. "2122sdfasdfid=08012000");
		}
	
	}
	if($_GET['id']==4){
		if($_SESSION['ruby']==0){
			mysqli_query($con,"UPDATE users SET ruby='$one' WHERE id='$usrid'");
      $_SESSION['ds'] = 4;
			header("Location: /course/ruby/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/ruby/beginnercoursef/asdfa8201".$_SESSION['ruby'] . "2122sdfasdfid=08012000" );
		}
	}
	
	if($_GET['id']==5){
		if($_SESSION['htmlcss']==0){
			mysqli_query($con,"UPDATE users SET htmlcss='$one' WHERE id='$usrid'");
      $_SESSION['ds'] = 5;
			header("Location: /course/htmlcss/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/htmlcss/beginnercoursef/asdfa8201".$_SESSION['htmlcss'] . "2122sdfasdfid=08012000");
		}
	
	}
	if($_GET['id']==6){
		if($_SESSION['sql']==0){
			mysqli_query($con,"UPDATE users SET sqlite='$one' WHERE id='$usrid'");
      $_SESSION['ds'] = 6;
			header("Location: /course/sql/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/sql/beginnercoursef/asdfa8201".$_SESSION['sql'] . "2122sdfasdfid=08012000");
		}
	}
	if($_GET['id']==7){
		if($_SESSION['perl']==0){
			mysqli_query($con,"UPDATE users SET perl='$one' WHERE id='$usrid'");
      $_SESSION['ds'] = 7;
			header("Location: /course/perl/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/perl/beginnercoursef/asdfa8201".$_SESSION['perl'] . "2122sdfasdfid=08012000");
		}
	
	}
	if($_GET['id']==8){
		if($_SESSION['terminal']==0){
			mysqli_query($con,"UPDATE users SET terminal='$one' WHERE id='$usrid'");
      $_SESSION['ds'] = 8;
			header("Location: /course/terminal/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/terminal/beginnercoursef/asdfa8201".$_SESSION['terminal'] . "2122sdfasdfid=08012000");
		}
	}
	if($_GET['id']==9){
		if($_SESSION['php']==0){
			mysqli_query($con,"UPDATE users SET php='$one' WHERE id='$usrid'");
      $_SESSION['ds'] = 9;
			header("Location: /course/php/beginnercoursef/asdfa820112122sdfasdfid=08012000");
		}
		else{
		header("Location: /course/php/beginnercoursef/asdfa8201".$_SESSION['php'] . "2122sdfasdfid=08012000");
	}

	
	}
    if($_GET['id']==10){
    if($_SESSION['c']==0){
      mysqli_query($con,"UPDATE users SET c='$one' WHERE id='$usrid'");
      $_SESSION['ds'] = 10;
      header("Location: /course/c/beginnercoursef/asdfa820112122sdfasdfid=08012000");
    }
    else{
    header("Location: /course/c/beginnercoursef/asdfa8201".$_SESSION['c'] . "2122sdfasdfid=08012000");
  }

  
  }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Course | Codemenow</title>
<link rel="stylesheet" type="text/css" href="/css/materialize.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/typed.js"></script>
</head>

<body>
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
  width: 900px;
  margin: 200px auto;
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
div.tab {
    float: left;
    background-color: #f1f1f1;
    width: 30%;
    height: 100%;
}

/* Style the buttons inside the tab */
div.tab button {
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
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    width: 59%;
    border-left: none;
    height: 100%;
}
@media screen and (max-width: 640px){
  .desktop{
    display: none;
  }
  .card1{
  	margin-top: 120px;
    box-shadow: none;
    border:10px solid #f1f1f1;
    margin-bottom: 20px;
  }
}
@media screen and (min-width: 640px){
  .desktop{
    
  }
  .mobile{
    display: none;
  }
  .card1{
    box-shadow: none;
    border:15px solid #f1f1f1;
  }
}
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2212";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
<?php include_once 'nav_and_sidebar.php';?>
<section style="padding-bottom:20px;"> 
<div class="desktop">
<div class="content" style="margin: 135px; margin-top: 100px;">

<div class="card1">
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
<div id="content1" style="margin: 135px;margin-left:16%;margin-top: -12%;">
<?php echo explode ("@", file_get_contents("coursepage/syllabus/" . htmlspecialchars($_GET["id"]) . ".txt"))[0];?>
</div>
</div>
<div class="mobile">
  <div class="card1" style="width: 90%; height: 150px;" >
  <div class="thumbnail"><img style="width: 120px;height: 120px;" class="left" src="<?php echo("/assets/languages/" . htmlspecialchars($_GET["id"]) . ".png");?>"/></div>
  <div class="right">
  <h5 class="h5"><?php echo file_get_contents("coursepage/name/" . htmlspecialchars($_GET["id"]) . ".txt");?></h5>
    <div class="fab"><form method="post">
    <input style="display: none;" name = "one" type="text" class="validate" required value="1"><input style="background: url(/assets/img/button.png);height: 80px; width: 80px; border: 0; background-size:100% 100%; outline: none;" type="submit"  name="test" id="test" value="" /><br/></form>
</div>
</div>
</div>
<center>
<?php echo explode("@", file_get_contents("coursepage/syllabus/"   . htmlspecialchars($_GET["id"]) . ".txt"))[1]?>
</center>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}

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
</section>

<?php include_once 'footer.php';?>
</body>
</html>