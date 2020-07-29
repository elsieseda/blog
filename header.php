<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8"/>
		<title> farmer</title>
		<link rel="stylesheet" type= "text/css" href="style.css" media="all">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
	<body>
		<header>
		<!--	<div class="logs">
				<figure>
				<img src="image/logo.jpg" class="log" alt="logo">
				<figcaption class="lo"> </figcaption>
				</figure>
			</div>-->
			<nav>
				<div class="left">
					<ul >
						<li>
							<a href="pets.php">Home</a>
						</li>
						<li>
							<a href="health.php">Animal Health</a>
						</li>
						<li>
							<a href="diy.php">DIY Farming</a>
						</li>
						<li >
							<a href="#">Pet Care</a>
						</li>
					</ul>
				</div>
				<div class="right">
					<ul >
						<li>
							<a href="login.php">logout</a>
						</li>
						<li>
							<a href="logout.php">logout</a>
						</li>
					</ul>
				</div>
			</nav>
			
		<p><?php 
		if(isset($_SESSION['username'])){
			echo "HI there, $username";
	 
			}?> </p>
		</header>