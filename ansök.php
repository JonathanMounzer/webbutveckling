<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Jonathan Mounzer">
<title>Lundakarnevalen 2018</title>
<link rel="shortcut icon" type="image/png" href="Images/favicon.png">
<link rel="stylesheet" type="text/css" href="css/gridview.css">
<link rel="stylesheet" type="text/css" href="css/mediaQueries.css">
<link rel="stylesheet" type="text/css" href="css/ansokform.css">
<link rel="stylesheet" type="text/css" href="css/ansokStyle.css">
<link rel="stylesheet" href="./css/style.css">
<script type="text/javascript" src="jquery.js"></script>
	</head>

	<header>
		<?php include 'template/header.php';?>
				<h1>Ansök</h1>
				<p>Fyll i formuläret</p>
			</div>
		</section>
	</a>
	</header>


  <body>
		<?php include 'template/topNav.php'; ?>

	<body>

	<main class="main-content">
			<div class="row">
				<div class="col-16">

					<section class="middle-content">
						<div class= title>
							<h2>Ansök idag!</h2>
							</div>
							<div class="form">

							<form id="requestForm" action="php/ansok.php" method="post">
							  <div class="container">
							    <label><b>Förnamn *</b></label>
							    <input type="text" placeholder="Fyll i förnamn *" name="firstname" id="firstname" required>

							    <label><b>Efternamn *</b></label>
							    <input type="text" placeholder="Fyll i efternamn *" name="lastname" id="lastname" required>

							    <label><b>Email</b></label>
							    <input type="text" placeholder="Fyll i emailadress *" name="email" required>
							    <br>
							    <label style="font-size: 22px;"><b>Välj en position!</b></label>
							    <br><br>
							    <select name="section" id="selector">
								  <option value="Administerit">IT</option>
								  <option value="Blädderiet">Blädderiet</option>
								  <option value="Biljonsen">Biljonsen</option>
								  <option value="Dansen">Dansen</option>
								</select>

							    <div class="clearfix">
							      <button type="submit" value="submit" name="submit" class="ansokbtn">Ansök</button>
							    </div>

							    <span id="requestSent" class="error sent">Skickat!</span>
							    <span id="requestFail" class="error">Alla stjärnmärkta (*) fält måste fylla i</span>

							  </div>
							</form>
							</div>

					</section>

			</div>
		</main>


		<?php include 'template/footer.php'; ?>

		<script src="js/navbar.js"></script>
		<script src="js/countdown.js"></script>

	</body>
	</html>
