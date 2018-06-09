<?php
session_start();
include_once '../dbconnect.php';
$usrname = $_GET['un'];
?>
<script>
	function generateLink(){
		username = document.getElementById("username");
		generatedLink = document.getElementById("generatedLink");
		generatedLink.href = "/wish/wish.php?un=" + username.value;
		generatedLink.innerHTML = "http://codemenow.com/wish/wish.php?un=" + username.value;

	}
</script>
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
<style>
</style>
<section style="background-color: #eee;">
<div class="content" style="margin-top: 0px;margin-bottom: 80px;">
<a href="http://codemenow.com/"><img src = "../assets/logo.png" style="height: 50px;float:left;margin-left: 10px;"></img><h5 style="padding-top: 15px; color:black; text-align: center;margin-right: 60px;">Codemenow</h5></a><br>
<hr>
        <center>
        <h2 style="color:brown"><?php echo $usrname;?></h2>
        <h5>Wishes you a very<h5>
        <h5 style="color:green">Happy Ganesh Chaturthi</h5>
        <img src = "../assets/ganesh.gif" style="width: 300px;" />
        <p>Generate your message...</p>
        <div class="input-field col s12" style="width: 90%;">
        <input type="text" id = "username"></input><label>Your Name</label></div>
        <button class = "button-black" type="submit" id = "submit" onclick = "generateLink()">Generate your link</button><br>
        <a href = "" id = "generatedLink"></a><br>
        <p style="float:right; margin-right: 20px;">- Team Codemenow</p>
        </center>
</div>
</section>
<?php include_once '../footer.php'; ?>
</body>

</html>