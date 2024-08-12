<html>

<?php
   include "db_connect.php";
   $link = connect();
?>
<head>
<title>Terminate Teacher</title>
<style>
a:visited {
    color: white;
}
.img-circle
{
        border-radius: 50%;
}
label{
display:inline-block;
width:200px;
margin-right:130px;
text-align:right;
}

input{

}

fieldset{
border:none;
width:500px;
margin:0px auto;
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
</style>
</head>

<body align="center" link="EEEEEE">
<div id="background">
<img src="Images/bg1.jpg" class="stretch" alt="" />
</div>
<font color="white">
<a><img class="img-circle" src="Images/rem.jpg" width="250" height="200"/></a><br/>
<div id="header">
  <h2 id="h2">Terminate Teacher</h2>
</div>

<form name="new_course" id="cform" method="POST" action="">
<div id="formdiv">
	 <div id="inputbox">
		<label for="cteach">Teacher</label>
	 <select name="cteach" id="cteach"><br>
    <?php
  	   $query = mysqli_query($link,"select teacher_id,t_name,dept_name from teacher inner join dept on t_dep = dept_id");
  	   while($res = mysqli_fetch_array($query)){
	?>
    <option value="<?php echo $res['teacher_id'];?>"><?php echo $res['t_name'],":", $res['dept_name'];?></option>
	<?php 
	} 
	?>
	</select>
	</div><br>
	    
	 <div id = "inputbox">
	 <input type="submit" name="submit1" class="button" value ="Remove">
	</div><br>
</div>   
</form>
   
<a href="admin.php">Go Back</a></br>

<?php
  if(isset($_POST['submit1']))
  {
    $cteach = $_POST['cteach'];  
    if($link)
    {   	   
	    $query1 = mysqli_query($link,"delete from teacher where teacher_id = '".$cteach."'");	
        $query2= mysqli_query($link,"update course set c_teach=NULL where c_teach = '".$cteach."'");			
		$msg = "Teacher Removed Successfully";
	    header('refresh:2;url=admin.php');
    }
    else
    {   
       echo $link->error;
	   $msg = "Query did not execute";
    }  
    if(isset($msg))
    {
       echo '<div id="msgdiv"><h3>'.$msg.'</h3></div>';
    }
  }
?>

</body>
</html>

