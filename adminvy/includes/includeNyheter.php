<div id="myTopNav" >
	<nav class="navbar"><?php include 'features/adminTopNav.php';?></nav>
</div>
<body class="container background">
	<div class="row">
		<section id="leftSection" class="column leftCol" style="background-color:#BBDDF9 "></section>
		<div id="midCol" class="column middleCol">
			<p class="textFontRice" style="">Uppdatera nyhet</p>
			<div class="containerAnsok">
				<form method="POST" enctype="multipart/form-data" action="adminNyheter.php" class="ajax">
					<label class="textFontRice" for="title">Titel</label>
					<input type="text"  name="title" required placeholder="Titel..">

					<label class="textFontRice" for="content">Innehåll</label>
					<textarea rows="4" cols="50" name="content" placeholder="Innehåll.."></textarea>

					<label class="textFontRice" for="pic">Bild</label>
					<input type="file" name="pic" accept="image/*">

					<input style="font-family:'Spicy Rice'" name="upload" type="submit" value="Ladda upp"/>
					<?php include('errors.php'); ?>
				</form>
			</div>
		</div>

	</div>

	<script src="../js/navbar.js"></script>
</body>
