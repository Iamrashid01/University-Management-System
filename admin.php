<!DOCTYPE html>
<center>
<?php
//include 'session_check.php';
session_start();
if($_SESSION['login_lev']!='3')
	{
	header('Location:home.php');
	}
	echo $_SESSION['login_lev'];
?>
<html>
<head>
  <title>Admin</title>
<link rel="stylesheet" href="style.css">

</head>

<body link="EEEEEE">
<div id="background">
    <img src="Images/bkgrnd.jpg" class="stretch" alt="" />
</div>
<font color="white">  
<h1>Welcome Administrator</h1>
  <p>What would you like to do?</p>
<table>
<tr>
	<td>
	<a title="Add Student"> <img class="img-circle" src="Images/addstud.png" width="150" height="130"/></a><br/>
	</td>

	<td>
	<a title="Add Department"> <img class="img-circle" src="Images/dept.png" width="150" height="130"/></a><br/>
	</td>
</tr>
<tr>
	<td>
    <a href="add_student.php" class="button">Add Student</a>

	<!-- <a href="add_student.php">Add Student</a> -->
	</td>
	<td>
		<a href="add_department.php" class="button">Add Department</a>
	<!-- <a href="add_department.php">Add Department</a> -->
	</td>
</tr>
<tr>
	<td>
	<a title="Add Teacher"> <img class="img-circle" src="Images/add_teacher.png" width="150" height="130"/></a><br/>
	</td>

	<td>
	<a title="Add Course"> <img class="img-circle" src="Images/addcourse.png" width="150" height="130"/></a><br/>
	</td>
</tr>
<tr>
	<td>
		<a href="add_teacher.php" class="button">Add Teacher</a>
	<!-- <a href="add_teacher.php">Add Teacher</a> -->
	</td>
	<td>
		<a href="add_course.php" class="button">Add Course</a>
	<!-- <a href="add_course.php">Add Course</a> -->
	</td>
</tr>
<tr>
	<td>
	<a title="Remove Teacher"> <img class="img-circle" src="Images/removeteacher.png" width="150" height="130"/></a><br/>
	</td>

	<td>
	<a title="Remove Student"> <img class="img-circle" src="Images/removestudent.png" width="150" height="130"/></a><br/>
	</td>
</tr>
<tr>
	<td>
		<a href="terminate_teacher.php" class="button">Remove Teacher</a>
	<!-- <a href="terminate_teacher.php">Remove Teacher</a> -->
	</td>
	<td>
		<a href="terminate_student.php" class="button">Remove Student</a>
	<!-- <a href="terminate_student.php">Remove Student</a> -->
	</td>
</tr>

</table>

<br><br><a href="logout.php">Logout</a><br><br>

</body>
</center>
