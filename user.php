<?php
session_start();

include_once 'dbconnect.php';
  $usrname = $_GET['usrname'];
  $result = mysqli_query($con, "SELECT * FROM users WHERE name ='$usrname' ");
  if ($row = mysqli_fetch_array($result)) {
    $_SESSION['temp_id'] = $row['id'];
    $_SESSION['temp_name'] = $row['name'];
    $_SESSION['temp_email'] = $row['email'];
    $_SESSION['temp_password'] = $row['password'];
    $_SESSION['temp_description'] = $row['description'];
    $_SESSION['temp_cplusplus'] = $row['cplusplus'];
    $_SESSION['temp_javascript'] = $row['javascript'];
    $_SESSION['temp_python'] = $row['python'];
    $_SESSION['temp_ruby'] = $row['ruby'];
    $_SESSION['temp_htmlcss'] = $row['htmlcss'];
    $_SESSION['temp_sql'] = $row['sqlite'];
    $_SESSION['temp_perl'] = $row['perl'];
    $_SESSION['temp_terminal'] = $row['terminal'];
    $_SESSION['temp_php'] = $row['php'];
  }

?>

<!DOCTYPE html>
<html>
<head>
<title>User Profile | Codemenow</title>
<link rel="stylesheet" type="text/css" href="/css/materialize.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/typed.js"></script>
</head>
<body>
<?php include_once 'nav_and_sidebar.php';?>
<section> 
<style type="text/css">
  @import "https://fonts.googleapis.com/css?family=Open+Sans:300,400";
.badgescard, .firstinfo {
  display: flex;
  justify-content: center;
  align-items: center;
}

html {
  height: 100%;
}


*, *:before, *:after {
  box-sizing: border-box;
}

.content {
  position: relative;
  animation: animatop 0.9s cubic-bezier(0.425, 1.14, 0.47, 1.125) forwards;
}

.card {
  margin-left: 20%;
  width: 700px;
  height: 200px;
  min-height: 100px;
  padding: 20px;
  border-radius: 3px;
  background-color: white;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
  position: relative;
  overflow: hidden;
}
.card:after {
  content: '';
  display: block;
  width: 190px;
  height: 300px;
  background: cadetblue;
  position: absolute;
  animation: rotatemagic 0.75s cubic-bezier(0.425, 1.04, 0.47, 1.105) 1s both;
}

.badgescard {
  margin-left: 22%;
  padding: 10px 20px;
  border-radius: 3px;
  background-color: #fff;
  width: 640px;
  height: 50px;
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
  position: absolute;
  z-index: -1;
  left: 10px;
  bottom: 10px;
  animation: animainfos 0.5s cubic-bezier(0.425, 1.04, 0.47, 1.105) 0.75s forwards;
}
.badgescard span {
  font-size: 1.6em;
  margin: 0px 6px;
  opacity: 0.6;
}

.firstinfo {
  flex-direction: row;
  z-index: 2;
  position: relative;
}
.firstinfo img {
  margin-left: -40%;
  border-radius: 50%;
  width: 120px;
  height: 120px;
}
.firstinfo .profileinfo {
  padding: 0px 20px;
}
.firstinfo .profileinfo h1 {
  font-size: 1.8em;
}
.firstinfo .profileinfo h3 {
  font-size: 1.2em;
  color: #009688;
  font-style: italic;
}
.firstinfo .profileinfo p.bio {
  padding: 10px 0px;
  color: #5A5A5A;
  line-height: 1.2;
  font-style: initial;
}

@keyframes animatop {
  0% {
    opacity: 0;
    bottom: -500px;
  }
  100% {
    opacity: 1;
    bottom: 0px;
  }
}
@keyframes animainfos {
  0% {
    bottom: 10px;
  }
  100% {
    bottom: -42px;
  }
}
@keyframes rotatemagic {
  0% {
    opacity: 0;
    transform: rotate(0deg);
    top: -24px;
    left: -253px;
  }
  100% {
    transform: rotate(-30deg);
    top: -24px;
    left: -78px;
  }
}

</style>
<div class="content1" style="margin:135px;">
<div class="content">
  <div class="card">
    <div class="firstinfo"><img src="/assets/img/usr/<?php echo $_SESSION['temp_id']; ?>.jpg" onError="this.onerror=null;this.src='/assets/img/usr/sample.png';">
      <div class="profileinfo">
        <h1><?php echo $_SESSION['temp_name'];?></h1>
        <h3><?php echo $_SESSION['temp_description'];?></h3>
      </div>
    </div>
  </div>
  <div class="badgescard"></div>
</div>
</div>
</section>

<?php include_once 'footer.php';?>
</body>
</html>