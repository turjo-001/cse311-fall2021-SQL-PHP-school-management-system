

<?php
include("navbar.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Student's classes information Form</title>
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
	<h1 style="text-align:center;text-decoration: underline;">Student's classes registration Form</h1><br><br>

	<form class="form_layout" action="Form 11.php" method="post">
		<label>Class ID: <input type="Text" name="classId" required><span style="color: red"> *&emsp;</label><br>
		<label>Student ID: <input type="Text" name="studentId" required><span style="color: red"> *&emsp;</label><br>


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
	$classId = $_POST['classId'];
	$studentId = $_POST['studentId'];

	$result =

		"INSERT INTO studentclasses(classId,studentId)
				
				VALUES('$classId','$studentId')";

	$result = mysqli_query($conn, $result);

	echo "<div class=\"success_message\">";
	echo "New student has assigned in a Class. Thank You.";
	echo "</div>";
}
?>