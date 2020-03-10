<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/adminStyle.css">
<title>Admin Panel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="images/favicon.png">
<link rel="stylesheet" type="text/css" href="../css/adminStyle.css">
<link rel="stylesheet" href="./css/w3schoolsTillSektion.css">
<body>
	<div class="">
	  <button class="AdminBtn" onclick="openTab('Student')">Student Management</button>
	  <button class="AdminBtn" onclick="openTab('Post')">Post Management</button>
	  <button class="AdminBtn" onclick="openTab('Generate-mail')">Generate</button>
	</div>
	 <center>
	<div id="Student" class="tabs">
	  <h2 class="w3-wide">Student Management</h2>

  	<form action="../php/addStudent.php" method="post">
  		<br>
  		Add Student:
  		<br>
  		<input type="text" name="ssn" required placeholder="Social Security Number">
  		<input type="text" name="firstname" required placeholder="Firstname">
  		<input type="text" name="lastname" required placeholder="Lastname">

  		<select name="section" required>
  			<option value="AdministerIT">AdministerIT</option>
  			<option value="Biljonsen">Biljonsen</option>
  			<option value="Blädderiet">Blädderiet</option>
  			<option value="Dansen">Dansen</option>
  		</select>
  		<input class="SubmitBtn" type="submit">
  	</form>

  	<form action="../php/findStudent.php" method="post">
		<br>
		Search Student by firstname:
		<br>
		<input type="text" name="firstname" placeholder="firstname">
		<input class="SubmitBtn" type="submit" name="search">
	</form>

	<form action="../php/findSection.php" method="post">
		<br>
		Search students within a section:
		<br>
		<select name="section">
  			<option value="AdministerIT">AdministerIT</option>
  			<option value="Biljonsen">Biljonsen</option>
  			<option value="Blädderiet">Blädderiet</option>
  			<option value="Dansen">Dansen</option>
  		</select>
  		<input class="SubmitBtn" type="submit">
	</form>

	<form action="../php/removeStudent.php" method="post">
		<br>
		Remove a student:
		<br>
		<input type="text" name="ssn" placeholder="ssn">
		<input class="SubmitBtn" type="submit">
	</form>
	<br>
	<form action="../php/updateStudent.php"  method="post">
		Update student information:
		<br>
		<input type="text" name="ssn" required placeholder="ssn">
		<input type="text" name="firstname" required placeholder="Firstname">
		<input type="text" name="lastname" required placeholder="Lastname">
		<select required name="section">
  			<option value="AdministerIT">AdministerIT</option>
  			<option value="Biljonsen">Biljonsen</option>
  			<option value="Blädderiet">Blädderiet</option>
  			<option value="Dansen">Dansen</option>
  		</select>
		<br><br>
		<input class="SubmitBtn" type="submit" name="edit">
	</form>
</div>


<center>
<div id="Post" class="tabs" style="display:none">

	<div class="col-6">
		<h2>Create new post</h2>
		<form action="../php/addPost.php" method="post" enctype="multipart/form-data">
			<br>
			Title:
			<br>
			<input type="text" name="title" required>
			<br>
			Bild:
			<br>
			<input type="file" name="picture" accept="image/*">
			<br>
			Content:
			<br>
			<textarea placeholder="Content" name="info" style="height: 250px;max-height: 550px;width:500px;overflow-y: scroll;overflow-x: hidden;" required></textarea>
			<br>
			<input class="SubmitBtn" type="submit" value="Upload Image" name="submit">
			<?php include('../template/errors.php'); ?>
		</form>
	</div>

	<div class="col-6">
		<h2>Newspage</h2>
		<form action="../php/addNews.php" method="post">
			<br>
			Title:
			<br>
			<input type="text" name="title" required>
			<br>
			<br>
			<br>
			Content:
			<br>
			<textarea placeholder="Content" name="content" style="height: 250px;max-height: 550px;width:500px;overflow-y: scroll;overflow-x: hidden;" required></textarea>
			<br>
			<input class="SubmitBtn" type="submit" name="Post">
		</form>
	</div>
</div>


	<center>
		<div id="Generate-mail" class="tabs" style="display:none">
		  <h2>Generate Email</h2>
		  	<input type="text" id="emailInput" readonly placeholder="Email">
		  	<select name="email-section" id="sec-select">
		  		<option value="AdministerIT.se">AdministerIT</option>
				<option value="Biljonsen.se">Biljonsen</option>
				<option value="Blädderiet.se">Blädderiet</option>
				<option value="Dansen.se">Dansen</option>
		  	</select>
		  	<button onclick="generateEmail()">Generate email</button>
  </center>
	<div class="LogOutBtn">
  <h4><a href="loggaUt.php">Logout</a></h4>
  <h4><a href="bytaLosen.php">Change Password</a></h4>
</div>
</div>

<script>
function openTab(tabName) {
    var i;
    var x = document.getElementsByClassName("tabs");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
}

function generateEmail() {
  var mail = "1";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  var section = document.getElementById('sec-select').value;
  var at = "@";

  for (var i = 0; i < 7; i++){
  	mail += possible.charAt(Math.floor(Math.random() * possible.length));
  }
	document.getElementById("emailInput").value = mail + at+ section;
	return mail;
}
</script>

</body>
</html>
