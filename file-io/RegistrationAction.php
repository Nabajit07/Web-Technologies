<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Action</title>
</head>
<body>

	<h4>Your Submitted Information</h4><hr>

	<?php 

$firstname= "";
$lastname = "";
$Gender ="";
$Date_of_Birth ="";
$Religion = "";
$Present_Address ="";
$Phone ="";
$Email ="";
$Personal_Website_link ="";
$userName ="";
$password ="";
$Confirm_password ="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{



	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$Gender = $_POST['gender'];
	$Date_of_Birth = $_POST['birthday'];
	$Religion = $_POST['religion'];
	$Present_Address = $_POST['present_Address'];
	$Permanent_Address = $_POST['permanent_Address'];
	$Phone = $_POST['phone'];
	$Email = $_POST['email'];
	$Personal_Website_link = $_POST['Website'];
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$Confirm_password = $_POST['Confirm_password'];
	
	

	if (empty($firstname)){
		//$firstnameValid = false;
		echo "First Name is Empty (Requred->Fill Information) <br>";
	}
	else {
		echo "First Name :".$firstname;
		echo "<br><br>";
	} 

	if (empty($lastname)){
		echo "Last Name is Empty (Requred->Fill Information) <br>";
	}
	else {
		echo "Last Name :".$lastname ;
		echo "<br><br>";
	}

	if (empty($Gender)){
		echo "Gender Button Empty (Requred->Fill Information) <br>";
	}
	else {
		echo "Gender is:".$Gender ;
		echo "<br><br>";
	}

	if (empty($Date_of_Birth)){
		echo "Date of Birth is not given (Requred->Fill Information) <br>";
	}
	else {
		echo "Date of Birth is:".$Date_of_Birth;
		echo "<br><br>";
	}

	if (empty($Religion)){
		echo "Religion is not given (Requred->Fill Information) <br>";
	}
	else {
		echo "Religion is :".$Religion;
		echo "<br><br>";
	}

	if (empty($Present_Address)){
		echo "Present Address is not given (Requred->Fill Information) <br>";
	}
	else {
		echo "Present Address is:".$Present_Address;
		echo "<br><br>";
	}
if (!empty($Permanent_Address)){
		echo "Permanent Address is:".$Permanent_Address;
		echo "<br><br>";
	}
	if (!empty($Phone)){
		echo "Phone Number is:".$Phone;
		echo "<br><br>";
	}
	
	if (empty($Email)){
		echo "Email is not given (Requred->Fill Information) <br>";
	}
	else {
		echo "Email is:".$Email ;
		echo "<br><br>";
	}

	if (empty($Personal_Website_link )){
		echo "Web Site is not given (Requred->Fill Information) <br>";
	}
	else {
		echo "Web Site is:".$Personal_Website_link ;
		echo "<br><br>";
	}

	if (empty($userName)){
		echo "User Name is not given (Requred->Fill Information) <br>";
	}
	else {
		echo "User Name is:".$userName ;
		echo "<br><br>";

	}

if (strlen($userName) > 5) {
	echo "Username cannot be greater than 5 characters (Requred->Fill Information)<br>";
}
	

	if (empty($password)){
		echo "Password is not given (Requred->Fill Information) <br>";
	}
	else {
		echo "Password is:".$password ;
		echo "<br><br>";
	}

	if (empty($Confirm_password)){
		echo "Confirm Password is not given (Requred->Fill Information) <br>";
	}
	
if($password !== ($Confirm_password)){
	echo " password doesn't match (Requred->Fill Information) <br>";
}
	
}
	?>

</body>
</html>