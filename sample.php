<?php
$con=mysql_connect("localhost","root","hello","sample");

   if(! $con ) {
      die('Could not connect: ' . mysql_error());
   }
   else {
   	echo "connection successful";
   }
   if(isset($_post['submit']))
   {
   	$username=$_post['user'];
   	$password=$_POST['password'];
   	echo $username;
   	echo $password;
   }
?>