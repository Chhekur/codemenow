<?php
session_start();
if(!isset($_SESSION['usr_id'])!="") {
  header("Location: home");
}

include_once '../dbconnect.php';


$error = false;
$successmsg = "";
//check if form is submitted

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
<center>
<div class="content" style="margin-top: 80px;">
        <form action="../upload.php" method="post" enctype="multipart/form-data">
        <input id="file" type="file" name="file" style="width: 0.1px;height: 0.1px;opacity: 0;overflow: hidden;position: absolute;z-index: -1;">
        <label class="choose" for="file"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
        <button type="submit" value="upload" class="button-black">Upload</button>
        </form>
</div></center>
</section><br>
<?php include_once '../footer.php'; ?>
</body>

</html>