<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #500;
    }

    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
    }

    .topnav a:hover,
    .dropdown:hover .dropbtn {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #c27e00;
      color: white;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }
  </style>
</head>

<body>

  <div class="topnav">
    <a href="#school">CSE311L.9 School Database Management Project</a>
    <a class="active" href="http://localhost/CSE311.9%20Group-6%20project/HomePage.php">Home</a>

    <div class="dropdown">
      <button class="dropbtn">Student
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <!-- form 1 -->
        <!-- form 2 -->
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%201.php"><b>Add New Student</b></a>
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%202.php">All Current Students</a>
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%202-1.php">Classes taken by a Student</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Teacher
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <!-- form 3 -->
        <!-- form 4 -->
        <!-- form 4-1 -->
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%203.php"><b>Add New Teacher</b></a>
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%204.php">All Current Teachers</a>
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%204-1.php">Classes taken by a Teacher</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Subject
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <!-- form 5 -->
        <!-- form 6 -->
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%205.php"><b>Add New Subject</b></a>
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%206.php">All Current Subject</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Classroom
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <!-- form 9 -->
        <!-- form 10 -->
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%209.php"><b>Add New Classroom</b></a>
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%2010.php">All Current Classrooms</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Class
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <!-- form 7 -->
        <!-- form 8 -->
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%207.php"><b>Add New Class</b></a>
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%208.php">All Current Classes</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Class registrations
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <!-- form 11 -->
        <!-- form 12 -->
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%2011.php"><b>Add New registrations</b></a>
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%2012.php">All Current registrations</a>
        <a href="http://localhost/CSE311.9%20Group-6%20project/Form%2012-1.php">Students in a Class</a>
      </div>
    </div>
  </div>

</body>

</html>