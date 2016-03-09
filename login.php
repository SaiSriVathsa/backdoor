<?php
$con=mysql_connect("localhost","root","hello");
$db_selected = mysql_select_db('sample', $con);
if (isset($_POST['submit']))
{
	$username=$_POST['user'];
	$password=$_POST['password'];
	if(!$_POST['user']|!$_POST['password'])
	{
		echo "login unsuccesful";
	}
	else
	{
	$query="select * from users where name='$username'";
	echo $query;
	$sql=mysql_query($query,$con);
	while($row=mysql_fetch_array($sql))
	{
		$n=count($row);
		for ($i=0;$i<$n;$i++)
			echo $row[$i]."       ";
	};
	
	}	
}
 
mysql_close($con);
	?> 
