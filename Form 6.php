<?php
include("navbar.php");
?>

<html>

<head>
    <title>All Current Subjects</title>
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
    <h1 style="text-align:center;text-decoration: underline;">Information of all current subjects</h1><br><br>

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

    $result = "SELECT * FROM subject ORDER BY subjectId";
    $result = mysqli_query($conn, $result);

    echo "<table align=\"center\" border=\"10\">
    <th>Subject ID</th>
    <th>Subject Requirements</th>
    <th>Maximum Capacity</th>"; // start a table tag in the HTML

    while ($row = mysqli_fetch_array($result)) {   //Creates a loop to loop through results
        echo "<tr>
        <td>" . $row['subjectId'] . "</td>
        <td>" . $row['requirements'] . "</td>
        <td>" . $row['maxCapacity'] . "</td>
        </tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>";

    ?>

</body>

</html>