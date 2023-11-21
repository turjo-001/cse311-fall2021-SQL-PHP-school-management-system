<?php
include("navbar.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Add New Subject</title>
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
	<h1 style="text-align:center;text-decoration: underline;">Subject Information Form</h1><br><br>

	<form class="form_layout" action="Form 5.php" method="post">
		<label>Subject ID: <input type="Text" name="subjectId" required><span style="color: red"> *&emsp;</label><br>
		<label>Subject Requirements: <input type="Text" name="requirements" required><span style="color: red"> *&emsp;</label><br>
        <label>Maximum Capacity: <input type="Text" name="maxCapacity" required><span style="color: red"> *&emsp;</label><br>



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
	$subjectId = $_POST['subjectId'];
	$requirements = $_POST['requirements'];
	$maxCapacity = $_POST['maxCapacity'];

	$result =

		"INSERT INTO subject(subjectId,requirements,maxCapacity)
				
				VALUES('$subjectId','$requirements','$maxCapacity')";

	$result = mysqli_query($conn, $result);

	echo "<div class=\"success_message\">";
	echo "New subject registration is succesfully completed. Thank You.";
	echo "</div>";
}
?>