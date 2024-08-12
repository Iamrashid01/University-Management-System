<?php
 
  function connect()
  {
 $user = "root";
 $pass = "";
 $link = mysqli_connect('localhost',$user,$pass,'ums');
 if($link)
 {   
	 return $link;
 }
 else
 {   return 0;
	 exit();
 }
  }
?>