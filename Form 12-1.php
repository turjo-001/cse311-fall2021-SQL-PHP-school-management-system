<?php
include("navbar.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Students in a Class</title>
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
    <h1 style="text-align:center;text-decoration: underline;">Enter teacher's initial to find the classes taken by them.</h1><br><br>

    <form class="form_layout" action="Form 12-1.php" method="post">

        <label>Class ID: <input type="Text" name="classId" required><span style="color: red"> *&emsp;</label><br>

        <div class="button_position"><input class="btn btn-primary" type="Submit" name="Submit" value="Submit"></div>
    </form>



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
        $result = "SELECT student.studentId, student.firstName,student.lastName
                FROM student JOIN studentclasses ON student.studentId = studentclasses.studentId
                 WHERE studentclasses.classId = '$classId' ";
        $result = mysqli_query($conn, $result);

        echo "<h1 style=\"text-align:center;text-decoration: underline;\">Information of students in $classId</h1><br><br>";

        echo "<table align=\"center\" border=\"10\">
    <th>Student Id</th>
    <th>First Name</th>
    <th>Last Name</th>"; // start a table tag in the HTML

        while ($row = mysqli_fetch_array($result)) {   //Creates a loop to loop through results
            echo "<tr>
        <td>" . $row['studentId'] . "</td>
        <td>" . $row['firstName'] . "</td>
        <td>" . $row['lastName'] . "</td>
        
        </tr>";  //$row['index'] the index here is a field name
        }

        echo "</table>";
    }

    ?>

</body>

</html>