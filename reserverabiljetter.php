<!DOCTYPE html>
<html lang="en">
	<head>
			<link rel="shortcut icon" type="image/png" href="Images/favicon.png">
	<?php include 'template/includeMeta.php';?>
	</head>

	<header>
		<?php include 'template/header.php';?>
				<h1>Reservera</h1>
				<p>Fyll i formuläret</p>
			</div>
		</section>
	</a>
	</header>


  <body>
		<?php include 'template/topNav.php'; ?>

	<body>

    <main class="main-content">
  		<div style="margin:10%;" id="reserveform">
  		<center>
  			<h2 class="w3-wide">RESERVERA BILJETT</h2>
        <p class="w3-opacity"><i>Reservera din biljett redan idag!</i></p>
  		</center>

  		<form id="reserveForm" action="php/reserveraBiljett.php" method="post">

  			<label>Förnamn*:</label><br>
  			<input type="text" name="firstname" class="input" placeholder="Förnamn" id="firstname" required>
  			<br>
  			<label>Efternamn*:</label><br>
  			<input type="text" name="lastname" class="input" placeholder="Efternamn" id="lastname" required>
  			<br>
  			<label>Personnummer*:</label><br>
  			<input type="text" name="ssn" class="input" placeholder="Personnummer" id="ssn" required>
  			<br>
  			<label>Email*:</label><br>
  			<input type="email" name="email" class="input" placeholder="Email" required>
  			<br>
  			<label>Välj Evenemang:</label><br>
  			<select name="event" class="selector">
  				<option value="spex">Spex</option>
  				<option value="cirkus">Cirkus</option>
  				<option value="revyn">Revyn</option>
  				<option value="konsert">Konserten</option>
  			</select>

				<label type="text" name="tickets">Antal biljetter</label>
				<select name="tickets">
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				</select>
  			<br><br>
  			<input type="submit" value="Reservera">
  		</form>
  	</div>
  	</main>


	<?php include 'template/footer.php'; ?>

		<script src="js/navbar.js"></script>
		<script src="js/countdown.js"></script>

	</body>
	</html>
