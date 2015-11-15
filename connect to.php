<?php

$hostname = "br-cdbr-azure-south-a.cloudapp.net";
$username = "b3a61b90106eaa";
$password = "a7680126";
$database_name = "Princess_Febrianys";

$conn = mysql_connect($hostname, $username, $pssword)
	or die ("Error menghubungkan ke host database");
$db = mysql_select_db($database_name)
	or die ("Error menghubungkan ke database")
?>