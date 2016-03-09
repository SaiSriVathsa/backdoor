<?php
$con=mysql_connect("localhost","root","hello","sample");

   if(! $con ) {
      die('Could not connect: ' . mysql_error());
   }
   if(isset($_POST['submit']))
   {
   	$username=$_POST['user'];
   	$password=$_POST['password'];
   	echo $username."<br>";
   	echo $password."<br>";
   	$sql="select * from users where name='$username'"
   	
   }
   else
   	echo "problem with submit";
?>