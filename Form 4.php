<?php
include("navbar.php");
?>

<html>

<head>
    <title>All Current Teachers</title>
</head>
<style>
    .form_layout {
        width: 1200px;
        margin: auto;
        padding: 10px;
        align-content: center;
        border: 1px solid black;
        /*border-top: 10px solid purple;*/
    }

    .link_position {
        margin-top: 20px;
        margin-left: 500px;
    }

    label {
        margin-top: 5px;
        margin-bottom: 5px;

    }

    .center {
        margin: auto;
        width: 50%;
        border: 3px solid green;
        padding: 10px;
    }

    td {
        text-align: center;
    }

    th,
    td {
        padding: 5px;
    }
</style>

<body>
    <h1 style="text-align:center;text-decoration: underline;">Information of all current teachers</h1><br><br>

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
    /*if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
	}*/

    $result = "SELECT * FROM teacher ORDER BY teacherId";
    $result = mysqli_query($conn, $result);

    echo "<table align=\"center\" border=\"10\">
    <th>Teacher ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Teacher Initial</th>
    <th>Subject</th>
    <th>Level</th>"; // start a table tag in the HTML

    while ($row = mysqli_fetch_array($result)) {   //Creates a loop to loop through results
        echo "<tr>
        <td>" . $row['teacherId'] . "</td>
        <td>" . $row['firstName'] . "</td>
        <td>" . $row['lastName'] . "</td>
        <td>" . $row['initial'] . "</td>
        <td>" . $row['subjectTaught'] . "</td>
        <td>" . $row['level'] . "</td>
        </tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>";

    ?>

</body>

</html>