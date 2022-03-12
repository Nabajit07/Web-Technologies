<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<h1>Login</h1><hr>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
			<label>User Name: </label>
			<input type="text" name="userName">
			<br>
			<br>

			<label>Password: </label>
			<input type="password" name="password">
			<br>

		<br>
		<input type="submit" name="login" value="Login">
	</form>
	<br>

	Don't have account? Click <a href="form-submission.php"> here</a> to create a account.

	<?php 

	if($_SERVER['REQUEST_METHOD'] === "POST"){

		if($_SERVER['REQUEST_METHOD'] === "POST"){

			$userName = $_POST['userName'];
			$password = $_POST['password'];

			if(empty($userName) or empty($password)){
				echo "Please fill up proper information.";
			}
			else{
				if(file_exists("../fileio/data.json")){
					$handle = fopen("../fileio/data.json","r");
					$explode = fread($handle,filesize("../fileio/data.json"));
					$explode = explode("\n", $explode);
					$loginFlag = false;

					for($i = 0; $i<count($explode) - 1;$i++){
						$json = json_decode($explode[$i]);
						if($userName === $json->userName and $password === $json->password){
							$loginFlag = true;
							break;
						}
					}
					if($loginFlag === true){
						
						header("Location: WelcomePage.php");
					}
					else{
						echo "<br><br><b>Login failed</b><br>";

					}
				}

				else{
					echo "json file not found!";
				}
			}

		}

	}

	?>

	

</body>
</html>