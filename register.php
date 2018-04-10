<html lang="en">
	<head>
		<link rel="icon" type="image/ico" href="">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<title>Register</title>
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	</head>

	<body>
		<div class="w3-bar w3-red w3-padding">
			<a href="login.php" class="w3-bar-item w3-button w3-hover-white">Login</a>
		  	<a href="register.php" class="w3-bar-item w3-button w3-hover-white">Register</a>
		</div>

		<div id="match" class="w3-modal">
			<div class="w3-modal-content">
				<div class="w3-container">
		    	<span onclick="document.getElementById('match').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		      		<p>Error: Passwords must match.</p>
		    	</div>
		  	</div>
		</div>
		<div id="emptyuser" class="w3-modal">
			<div class="w3-modal-content">1
				<div class="w3-container">
		    	<span onclick="document.getElementById('emptyuser').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		      		<p>Error: Username field required.</p>
		    	</div>
		  	</div>
		</div>
		<div id="emptyuser" class="w3-modal">
			<div class="w3-modal-content">
				<div class="w3-container">
		    	<span onclick="document.getElementById('emptypass').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		      		<p>Error: Password field required.</p>
		    	</div>
		  	</div>
		</div>
		<div id="success" class="w3-modal">
			<div class="w3-modal-content">
				<div class="w3-container">
		    	<span onclick="document.getElementById('success').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		      		<p>Success! Account registered.</p>
		    	</div>
		  	</div>
		</div>

		<div class="w3-row w3-padding-large">
			<form class="w3-container w3-third" method="post" action="register.php">
				<h1 class="w3-center">Register</h1>
				<label>Username</label>
				<input class="w3-input w3-hover-border-red" name="name" type="text">
				<label>Password</label>
				<input class="w3-input w3-hover-border-red" name="password1" type="password">
				<label>Confirm Password</label>
				<input class="w3-input w3-hover-border-red" name="password2" type="password">
				<button class="w3-button w3-margin-top w3-red w3-right" name="register" onclick="document.getElementById('success').style.display='block'">Login</button>
			</form>
		</div>
	</body>
	<?php include('reg.php'); ?>
</html>
