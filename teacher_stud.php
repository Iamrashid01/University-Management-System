<?php
   include "db_connect.php";
   $link = connect();
   session_start();
?>

<html>
<head>
<title>View Students</title>
<style>
.img-circle
{
        border-radius: 50%;
}
#background {
    width: 100%; 
    height: 100%; 
    position: fixed; 
    left: 0px; 
    top: 0px; 
    z-index: -1;
}

.stretch {
    width:100%;
    height:100%;
}

table{

  color:white;
}

</style>
</head>

<body align="center" link="white">
<div id="background">
    <img src="Images/bg2.jpg" class="stretch" alt="" />
</div>
<font color="white">    

<div id="header">
  <h2 id="h2">Students You Are Currently Teaching </h2>
</div>

<?php
   $query = mysqli_query($link,"select s_name,c_name,c_sem From stud_info natural join enrolled natural join course where s_id=std_id and c_id=course_id and c_id in (select course_id From course where c_teach = '".$_SESSION['user_id']."') ");
   $row_cnt = mysqli_num_rows($query);
   if($row_cnt!=0)
   {
       echo "<table align='center' border='1'>
             <tr><th>Student Name</th>
             <th>Course Sem</th>
             <th>Course Title</th></tr>";
        while($res = mysqli_fetch_array($query))
		{
	       echo "<tr>";
           echo "<td>" . $res['s_name'] . "</td>";
           echo "<td>" . $res['c_sem'] . "</td>";
           echo "<td>" . $res['c_name'] . "</td>";
           echo "</tr>";
	    }
        echo "</table>";
    }
    else
    {
	   echo "No Enrolled Students";
    }
?>

</body>
</html>