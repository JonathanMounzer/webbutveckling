<!DOCTYPE html>
<html>
<head>
		<link rel="shortcut icon" type="image/png" href="Images/favicon.png">
	<?php include 'template/includeMeta.php';?>

</head>

<header>
	<?php include 'template/header.php';?>
			<h1>FAQ</h1>
			<p>Vanliga frågor</p>
		</div>
	</section>
</a>
</header>

<?php include 'template/topNav.php'; ?>

<body>
<main>
  <div class="wall">
    <article class="wall-post">
      <header class="wall-post-header">
        Avstängda gator
      </header>
      <div class="wall-post-content">
        Kollektivtrafik är rekommenderat, givetvis kan du ta bilen också. Men tänk på att de flesta större genomfartsleder
        i stadskärnan är avspärrade och det kan därför bli svårt att hitta parkering.
      </div>
    </article>

    <article class="wall-post wall-post-b">
      <header class="wall-post-header">
        Cykelställ
      </header>
      <div class="wall-post-content">
        Festivalkartan hjälper dig att hitta till cykelparkeringsplatser, som du kommer ha tillgång till i slutet av April. <br>
    Förbjud att ställa cyklar ivägen för andra trafikanter, vi vill inte att olyckor ska förekomma - speciellt för de som har en funktionshindring.
      </div>
    </article>
    <article class="wall-post wall-post-c">
      <header class="wall-post-header">
        Borttappat/upphittat
      </header>
      <div class="wall-post-content">
       Upphittat gods ligger kvar en dag och lämnas sedan vidare till Hittegodsavdelningen på Sturkögatan 10.
      </div>
    </article>
    <article class="wall-post wall-post-d">
      <header class="wall-post-header">
        Bra att ta med sig
      </header>
      <div class="wall-post-content">
       Ta gärna med en vattenflaska, men tänk på att sortera soporna efter dig.
      </div>
    </article>
    <article class="wall-post wall-post-a">
      <header class="wall-post-header">
        Kollektivtrafik
      </header>
      <div class="wall-post-content">
       Det är vanligt förekommande att några busshållplatser blockeras. Några ersätts eller flyttas. Under festivalen utökas tågtrafiken. På kvällar sker biljettkontrollen redan innan du går ner på perrongen vid både Anna Lindhs plats och i Glashallen på Centralstationen.
       <br>
       Läs mer på <a href="https://www.skanetrafiken.se/">www.skanetrafiken.se/ eller ring 0771-77-77-77.</a>
      </div>
    </article>
    <article class="wall-post wall-post-a">
      <header class="wall-post-header">
        Vid misstänkt Matförgiftning
      </header>
      <div class="wall-post-content">
       Misstänker du att du har blivit matförgiftad när du ätit ute på någon av festivalens serveringar bör du kontakta vännerna på miljöförvaltningen så snart som möjligt. Ju tidigare de får in din anmälan desto större möjligheter har de att ta reda på vad som har hänt. Livsmedelskontroll gör kontroller av all mat och alla livsmedel på serveringarna för att se till att du som besökare kan vara trygg.
      </div>
    </article>
    <article class="wall-post wall-post-c">
      <header class="wall-post-header">
        Åldersgräns
      </header>
      <div class="wall-post-content">
       Det finns ingen åldersgräns. Alla är välkomna och karnevalen är har anpassade aktiviteter för alla åldrar.
      </div>
    </article>

		<div class="wall-post wall-post-c">
		<header class="wall-post-header" >HAR DU NÅGRA FRÅGOR?</header>
		<form method="POST" action="php/sendQuestion.php" class="ajax">
			<label class="w3-opacity" for="name">Namn</label>
			<input type="text"  name="name" required placeholder="Ange ditt namn..">
			<label class="w3-opacity" for="question">Fråga</label>
			<input type="text"  name="question" required placeholder="Ange din fråga..">

			<div class="clearfix">
			<input type="submit" value="Skicka" name="upload" class="ansokbtn"/>
		</div>
			<?php include('template/errors.php'); ?>
		</form>
		</div>

		<?php
			require 'php/connect.php';

			$result = mysqli_query($conn,"SELECT * FROM forum ORDER BY id DESC");

			while($row = mysqli_fetch_array($result)) {
				print '<br></br>';
				print '<div class="wall-post wall-post-b">';
				print '<header class="wall-post-header">'.$row['name'].'</header>';
				print '<p class="wall-post-content">'.$row['question'].'</p>';
				print '<p class="wall-post-content" text-align:center">'.$row['postedDate'].'</p>';
				print '</div>';
			}
			mysqli_close($conn);
			?>

		<script src="js/sendQuestionPost.js"></script>
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</main>


<?php include 'template/footer.php'; ?>

<script src="js/navbar.js"></script>
<script src="js/countdown.js"></script>

</body>
</html>
