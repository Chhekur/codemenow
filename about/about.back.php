<?php
session_start();
include_once '/../dbconnect.php';
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
<style type="text/css">
	@import url(//fonts.googleapis.com/css?family=Lato:400,900);
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

.info-card {
    float: left;
	margin: 10px;
	-webkit-perspective: 600px;
}

.front, .back {
	background: #FFF;
	transition: -webkit-transform 1s;
	-webkit-transform-style: preserve-3d;
	-webkit-backface-visibility: hidden;
	border: 10px solid white;
	box-shadow: 0 14px 26px rgba(0,0,0,0.1);

}

.front {
	overflow: none;
	width: 250px;
	height: 330px;
	position: absolute;
	z-index: 1;
}

.back {
	padding: 10px;
	width: 250px;
	height: 330px;
	-webkit-transform: rotateY(-180deg);
	overflow: hidden;
}

.info-card:hover .back {
	-webkit-transform: rotateY(0);
}

.info-card:hover .front {
	-webkit-transform: rotateY(180deg);
}

.card-image {
width: 100%;
height: 100%;
}


/* Social buttons */
.social {
	list-style: none;
	padding: 0px;
	margin-top: 25px;
	text-align: center;
}

.social a {
		position: relative;
		display: inline-block;
		min-width: 40px;
		padding: 10px 0px;
		margin: 0px 5px;
		overflow: hidden;
		text-align: center;
		background-color: rgb(215, 215, 215);
		border-radius: 40px;
	}


a.social-icon {
	text-decoration: none !important;
	box-shadow: 0px 0px 1px rgb(51, 51, 51);
	box-shadow: 0px 0px 1px rgba(51, 51, 51, 0.7);
	}
a.social-icon:hover {
	color: rgb(255, 255, 255) !important;
}
a.facebook {
	color: rgb(59, 90, 154) !important;
}
a.facebook:hover {		
	background-color: rgb(59, 90, 154) !important;
}
a.twitter {
	color: rgb(45, 168, 225) !important;
}
a.twitter:hover {
	background-color: rgb(45, 168, 225) !important;
}
a.github {
	color: rgb(51, 51, 51) !important;
}
a.github:hover {
	background-color: rgb(51, 51, 51) !important;
}
	
</style>
<?php include_once '../nav_and_sidebar.php';?>
<section> 
<div class="content" style="margin: 135px;"><br>
        <div class="container">
	<div class="row">
    	<!-- Info Card with social icons -->
		<div class="info-card">
				<div class="front">
					<img class="card-image" src="http://i.imgur.com/QHxnyes.jpg?1" style="height: 250px;">
					<h4 style="padding-left: 25px;">Hello World</h4>
				</div>
			<div class="back">
				<h4>Gentlesir</h4>
				<p>
					Globally facilitate timely bandwidth vis-a-vis user friendly core competencies. Uniquely architect covalent e-tailers through viral Lorem ipsum dolor sit amet, con.
				</p>
				<div class="social">
					<a href="#" class="social-icon facebook  animate"><span class="fa fa-facebook"></span></a>

					<a href="https://twitter.com/MichaelCanlas7" target="_blank" class=" social-icon twitter  animate"><span class="fa fa-twitter"></span></a>

					<a href="https://github.com/ironprice91" target="_blank" class=" social-icon github  animate"><span class="fa fa-github-alt"></span></a>

				</div>
			</div>
		</div>
		<div class="info-card">
				<div class="front">
					<img class="card-image" src="http://i.imgur.com/QHxnyes.jpg?1" style="height: 250px;">
					<h4 style="padding-left: 25px;">Hello World</h4>
				</div>
			<div class="back">
				<h4>Gentlesir</h4>
				<p>
					Globally facilitate timely bandwidth vis-a-vis user friendly core competencies. Uniquely architect covalent e-tailers through viral Lorem ipsum dolor sit amet, con.
				</p>
				<div class="social">
					<a href="#" class="social-icon facebook  animate"><span class="fa fa-facebook"></span></a>

					<a href="https://twitter.com/MichaelCanlas7" target="_blank" class=" social-icon twitter  animate"><span class="fa fa-twitter"></span></a>

					<a href="https://github.com/ironprice91" target="_blank" class=" social-icon github  animate"><span class="fa fa-github-alt"></span></a>

				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<?php include_once 'footer.php';?>
</body>
</html>