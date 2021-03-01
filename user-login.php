<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Self</title>
</head>
<body>

	<h1>Registration Form Self</h1>

	<?php
		$userIdErr = $firstNameErr = $lastNameErr =$passwordErr = $emailErr  = $genderErr = "";

		$userId = "";
		$firstName = ""; 
		$lastName = "";
		$gender = ""; 
		$email = "";
		$password = "";

		if($_SERVER["REQUEST_METHOD"] == "POST") {

            if(empty($_POST['uid'])) {
				$userIdErr = "Please fill up the user id properly";
			}
			else {
				$userId = $_POST['uid'];
			}

			if(empty($_POST['fname'])) {
				$firstNameErr = "Please fill up the first name properly";
			}
			else {
				$firstName = $_POST['fname'];
			}

			if(empty($_POST['lname'])) {
				$lastNameErr = "Please fill up the last name properly";
			}
			else {
				$lastName = $_POST['lname'];
			}

			if(empty($_POST['gender'])) {
				$genderErr = "Please select the gender properly";
			}
			else {
				$gender = $_POST['gender'];
			}



			if(empty($_POST['email'])) {
				$emailErr = "Please fill up the email properly";
			}
			else {
				$email = $_POST['email'];
			}


			if(empty($_POST['password'])) {
				$password = "Please fill up the password properly";
			}
			else {
				$password = $_POST['password'];
			}

			/*if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$email)) {
  				$emailErr = "Invalid URL";
			}
			else {
				$email = $_POST['email'];
			}*/

			$filePath = "RGDetails.txt";

			$f1 = fopen($filePath, "a");

        fwrite($f1, $userId."\n");
		fwrite($f1, $firstName."\n");
		fwrite($f1, $lastName."\n");
		
		fwrite($f1, $gender."\n");
		fwrite($f1, $email."\n");
		fwrite($f1, $password."\n");

		fclose($f1);
		}
	?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<label for="uid">User Id</label>
		<input type="number" name="uid" id="uid" value="<?php echo $userId; ?>"> 
		<p style="color:red"><?php echo $userIdErr; ?></p>

		<br>

		<!-- Input Text Field -->
		<label for="fname">First Name</label>
		<input type="text" name="fname" id="fname" value="<?php echo $firstName; ?>"> 
		<p style="color:red"><?php echo $firstNameErr; ?></p>

		<br>

		<label for="lname">Last Name</label>
		<input type="text" name="lname" id="lname" value="<?php echo $lastName ?>">
		<p><?php echo $lastNameErr; ?></p>
		
		<br>

		<label for="gender">Gender:</label>

			<input type="radio" id="male" name="gender" value="male">
			<label for="male">Male </label>

			<input type="radio" id="female" name="gender" value="female">
			<label for="female">Female </label>

			<br><br>

		<label for="email">Email:</label>
		<input type="txt" name="email" id="email" value="<?php echo $email ?>">
		<p><?php echo $emailErr; ?></p>
		
		<br>

		<label for="password">Password</label>
		<input type="text" name="password" id="password" value="<?php echo $password; ?>"> 
		<p style="color:red"><?php echo $passwordErr; ?></p>

		<br>

		<!-- Input submit -->
		<input type="submit" value="Submit">
		<br><br>

    </form>


    <form action="homepage.php" method="GET">

		<fieldset>
			<legend>User Login</legend>

			<p>
				<label for="uid">User Id</label>
		<input type="number" name="uid" id="uid" value="<?php echo $userId; ?>"> 
		<p style="color:red"><?php echo $userIdErr; ?></p>

		<br>

		<label for="password">Password</label>
		<input type="text" name="password" id="password" value="<?php echo $password; ?>"> 
		<p style="color:red"><?php echo $passwordErr; ?></p>

		<input type="submit" name="submit" value="Login">

			</p>
		</fieldset>

	</form>

</body>
</html>#user-login
# user-login
# user-login
