<?php
$con=mysql_connect("localhost","root","hello");
mysql_select_db("sample") ;
	if(! $con ) {
      die('Could not connect: ' . mysql_error());
  	}
  	else
  	{
	if(isset($_POST['submit']))
   	{
   		$username=$_POST['user'];
   		$password=$_POST['password'];
   		$username=str_replace("=","=\ ",$username);
      $sql="select * from users where name='$username'";
   		if (!$_POST['user'] | !$_POST['password'])
   			echo "login unsuccesful";
   		else
   			{
   				if ($query=mysql_query($sql,$con) )
   					{
   						while($row=mysql_fetch_array($query) or die(mysql_error()))
	   						{
	   							echo $row['flag']."<br>";
   							}
   					}
   	    	}
    	}
    }
?>