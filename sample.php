<?php
$con=mysql_connect("localhost","root","hello");
mysql_select_db("sample") ;
	if(! $con ) {
      die('Could not connect: ' . mysql_error());
  	}
   	if(isset($_POST['submit']))
   	{
   		$username=$_POST['user'];
   		$password=$_POST['password'];
   		$sql="select * from users where name='$username'";
   		if ($query=mysql_query($sql,$con) or die(mysql_error()))
   		{
   			while($row=mysql_fetch_array($query) or die(mysql_error()))
	   			{
	   			echo $row['flag']."<br>";
   				}
   		}
   		else
   			echo "problem with query";
   	}
   
?>