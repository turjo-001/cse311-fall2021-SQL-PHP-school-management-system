<?php
include("navbar.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Add New Teacher</title>
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
	<h1 style="text-align:center;text-decoration: underline;">Teacher Information Form</h1><br><br>

	<form class="form_layout" action="Form 3.php" method="post">

    <label>Teacher ID: <input type="Text" name="teacherId" required><span style="color: red"> *&emsp;</label><br>
    <label>Name: <input type="Text" name="firstName" required>(First Name)<span style="color: red"> *</span>&emsp;<input type="Text" name="lastName" required>(Last Name)<span style="color: red"> *</span></label><br>
    <label>Teacher Initial: <input type="Text" name="initial" required><span style="color: red"> *&emsp;</label><br>
    <label>Subject: <input type="Text" name="subjectTaught" required><span style="color: red"> *&emsp;</label><br>
    <label>Level: <input type="Text" name="level" required><span style="color: red"> *&emsp;</label><br>


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
	$teacherId = $_POST['teacherId'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$initial = $_POST['initial'];
	$subjectTaught = $_POST['subjectTaught'];
	$level = $_POST['level'];

	$result =

		"INSERT INTO teacher(teacherId,firstName,lastName,
				initial,subjectTaught,level)
				
				VALUES('$teacherId','$firstName','$lastName',
				'$initial','$subjectTaught','$level')";

	$result = mysqli_query($conn, $result);

	echo "<div class=\"success_message\">";
	echo "New teacher registration is succesfully completed. Thank You.";
	echo "</div>";
}
?>