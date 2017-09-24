<html lang="en">
	<head>
		<link rel="icon" type="image/ico" href="">
		<link rel="stylesheet" type="text/css" href="css/w3.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
		<title>Login</title>
		<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
	</head>
		<div class="w3-bar w3-red w3-padding">
			<a href="login.php" class="w3-bar-item w3-button w3-hover-white">Login</a>
		  	<a href="register.php" class="w3-bar-item w3-button w3-hover-white">Register</a>
		</div>

		<div id="correct" class="w3-modal">
			<div class="w3-modal-content">
				<div class="w3-container">
		    	<span onclick="document.getElementById('correct').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		      		<p>Correct credentials.</p>
		    	</div>
		  	</div>
		</div>
		<div id="wrong" class="w3-modal">
			<div class="w3-modal-content">
				<div class="w3-container">
		    	<span onclick="document.getElementById('wrong').style.display='none'" class="w3-button w3-display-topright">&times;</span>
		      		<p>Unknown credentials.</p>
		    	</div>
		  	</div>
		</div>
		<div class="w3-row w3-padding-large">
			<form class="w3-container w3-third" method="post" action="login.php">
				<h1 class="w3-center">Login</h1>
				<label>Username</label>
				<input class="w3-input w3-hover-border-red" name="username" type="text">
				<label>Password</label>
				<input class="w3-input w3-hover-border-red" name="password" type="password">
				<button class="w3-button w3-margin-top w3-red w3-right" name="login" onclick="document.getElementById('success').style.display='block'">Login</button>
			</form>
		</div>
	</body>
</html>
<?php
	//server stuff
	$servername = "localhost";
	$serverUser = "root";
	$dbName = "access";
	$serverPass = "";
	//form stuff
	$username = "";
	$password = "";
	$secPass = "";
	$secured = false;
	if($username=="") {
		if(isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			//Connect to database and test connection
			$secPass = md5($password);
			$conn = new mysqli($servername, $serverUser, $serverPass, $dbName);
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			//make sql stuff
			$sql = "SELECT id, username, password FROM users";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        if($row['username'] == $username && $row['password'] == $secPass) {
			        	$secured = true;
			        	echo '<script>document.getElementById("correct").style.display="block";</script>';
			        }
			    }
			    if($secured==false) {
			        echo '<script>document.getElementById("wrong").style.display="block";</script>';
			    }
			} else {
			    echo "<script>alert('Error: Database Empty');</script>";
			}
		}
	}
?>