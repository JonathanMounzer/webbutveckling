<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/adminStyle.css">
<head>
	<title>Change admin Password</title>
</head>
<body>
  <div class="content">
    <h2>Change password</h2>
    <form method="POST" enctype="multipart/form-data" action="bytaLosen.php" class="ajax">
      <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Nuvarande användarnamn" name="username" required>

      <label><strong><b>Your Current Password</b></strong></label>
      <input type="password" placeholder="gamla lösenord" name="currentPassword" required>

      <label><strong><b>Your new Password</b></strong></label>
      <input type="password" placeholder="nya lösenord" name="newPassword" required>

			<label><strong><b>Your new Password again</b></strong></label>
      <input type="password" placeholder="nya lösenord igen" name="newPasswordAgain" required>

			<?php include('adminErrors.php'); ?>
      <button class="AdminBtn" type="submit" name="upload">Submit</button>
  </form>
</div>
</div>
<br>
<br>
<div class="content">
	<h2>Change Username</h2>
	<form method="POST" enctype="multipart/form-data" action="bytaLosen.php" class="ajax">
		<div class="container">
		<label><b>Ditt nuvarande användarnamn</b></label>
		<input type="text" placeholder="Ditt användarnamn" name="currentUsername" required>

		<label><strong><b>Nya användarnamnet</b></strong></label>
		<input type="text" placeholder="Ditt nya användarnamn" name="newUsername" required>

		<label><strong><b>Your Password</b></strong></label>
		<input type="password" placeholder="Ditt lösenord" name="currentPassword" required>

					<?php include('adminErrorsTwo.php'); ?>
		<button class="AdminBtn" type="submit" name="uploadUser">Submit</button>
</form>
</div>
</div>


</body>
</html>

</body>
