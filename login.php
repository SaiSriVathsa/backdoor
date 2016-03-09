<?php
$con=mysql_connect("localhost","root","hello");
$db_selected = mysql_select_db('sample', $con);
$servername = "localhost";
$username = "root";
$password = "hello";
$dbname = "sample";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
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
	$sql = "UPDATE users SET rand='$username' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating records: " . mysqli_error($conn);
}

	}	
}
 
mysql_close($con);
	?> 
