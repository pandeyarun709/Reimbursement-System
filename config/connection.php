<?php
  $server  		= "http://192.168.124.43/phpmyadmin/index.php";
  $username 	= "quikr_all";
  $password		= "qa#192124";
  $db			= "Reimbursement";
  $conn = mysqli_connect($server,$username,$password,$db);
  if (!$conn) {
  	die( "Connection failed : ". mysqli_connect_error());
  }
 
   echo "Connected successfully hello.";
 ?>