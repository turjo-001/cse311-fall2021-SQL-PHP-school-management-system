<?php
include("navbar.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Add New Student</title>
</head>
<style>
	.button_position {
		margin-top: 0px;
		margin-left: 500px;
	}

	.form_layout {
		width: 1200px;
		margin: auto;
		padding: 10px;
		align-content: center;
		/*border: 1px solid black;*/
		/*border-top: 10px solid purple;*/
	}

	label {
		margin-top: 10px;
		margin-bottom: 10px;
	}

	#Address_Title {
		font-size: 18px;
	}

	.link_position {
		margin-left: 500px;
		font-weight: bold;
		font-size: 18px;

	}

	.success_message {
		margin-left: 400px;
		font-weight: bold;
		font-size: 18px
	}
</style>

<body>
	<h1 style="text-align:center;text-decoration: underline;">Student Information Form</h1><br><br>

	<form class="form_layout" action="Form 1.php" method="post">
		<label>Date of Admission:&emsp;<input type="Text" name="dateOfAdmission">(YYYY-MM-DD)</label><br>

		<label>Name: <input type="Text" name="firstName" required>(First Name)<span style="color: red"> *</span>&emsp;<input type="Text" name="lastName" required>(Last Name)<span style="color: red"> *</span></label><br>
		<label>Date of Birth:<input type="Text" name="dateOfBirth" required>(YYYY-MM-DD)<span style="color: red"> *</label><br>
		<label>Father's Name: <input type="Text" name="fathersName" required><span style="color: red"> *&emsp;</label><br>
		<label>Mother's Name: <input type="Text" name="mothersName" required><span style="color: red"> *&emsp;</label><br>
		<label>Mobile: <input type="Text" name="mobileNumber" required><span style="color: red"> *&emsp;</label><br>
		<label>Student ID: <input type="Text" name="studentId" required><span style="color: red"> *&emsp;</label><br>
		<label>Address :&emsp;<input type="Text" name="address">(House,Road,Block/Sector,District,City)</label><br>



		<div class="button_position"><input class="btn btn-primary" type="Submit" name="Submit" value="Submit"></div>
	</form>

</body>

</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$DatabaseName = "schoolclassesproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $DatabaseName);

// Check connection
if ($conn->connect_error) {

	die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['Submit'])) {
	$dateOfAdmission = $_POST['dateOfAdmission'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$dateOfBirth = $_POST['dateOfBirth'];
	$fathersName = $_POST['fathersName'];
	$mothersName = $_POST['mothersName'];
	$mobileNumber = $_POST['mobileNumber'];
	$studentId = $_POST['studentId'];
	$address = $_POST['address'];

	$result =

		"INSERT INTO student(dateOfAdmission,firstName,lastName,
				dateOfBirth,fathersName,mothersName,mobileNumber, studentId,address)
				
				VALUES('$dateOfAdmission','$firstName','$lastName',
				'$dateOfBirth','$fathersName','$mothersName','$mobileNumber', '$studentId','$address')";

	$result = mysqli_query($conn, $result);

	echo "<div class=\"success_message\">";
	echo "New student registration is succesfully completed. Thank You.";
	echo "</div>";
}
?>