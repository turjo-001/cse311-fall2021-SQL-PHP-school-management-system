<?php
include("navbar.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Classes taken by a student</title>
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
    <h1 style="text-align:center;text-decoration: underline;">Enter student's id to find the classes taken by them.</h1><br><br>

    <form class="form_layout" action="Form 2-1.php" method="post">

        <label>Student ID: <input type="Text" name="studentId" required><span style="color: red"> *&emsp;</label><br>

        <div class="button_position"><input class="btn btn-primary" type="Submit" name="Submit" value="Submit"></div>
    </form>

    <!-- <h1 style="text-align:center;text-decoration: underline;">Information of classes taken by teacher</h1><br><br> -->

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
        $studentId = $_POST['studentId'];
        $result = "SELECT studentclasses.classId, class.period, class.classTime, class.classroomId, class.teacherId, class.subjectId
                FROM (student JOIN studentclasses ON student.studentId = studentclasses.studentId) JOIN class ON studentclasses.classId= class.classId
                WHERE student.studentId = '$studentId' ";
        $result = mysqli_query($conn, $result);

        echo "<h1 style=\"text-align:center;text-decoration: underline;\">Information of classes taken by $studentId</h1><br><br>";

        echo "<table align=\"center\" border=\"10\">
    <th>Class ID</th>
    <th>Period</th>
    <th>Class Time</th>
    <th>Classroom ID</th>
    <th>Teacher ID</th>
    <th>Subject ID</th>"; // start a table tag in the HTML

        while ($row = mysqli_fetch_array($result)) {   //Creates a loop to loop through results
            echo "<tr>
        <td>" . $row['classId'] . "</td>
        <td>" . $row['period'] . "</td>
        <td>" . $row['classTime'] . "</td>
        <td>" . $row['classroomId'] . "</td>
        <td>" . $row['teacherId'] . "</td>
        <td>" . $row['subjectId'] . "</td>
        </tr>";  //$row['index'] the index here is a field name
        }

        echo "</table>";
    }

    ?>

</body>

</html>
