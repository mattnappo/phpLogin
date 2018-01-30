<?php
	//server stuff
	$servername = "localhost";
	$serverUser = "root";
	$dbName = "main";
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
			$sql = "SELECT id, username, password FROM phpLogin";
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
