<?php 

$db = new mysqli('localhost','root','','gharbhada');

if($db->connect_error){
	echo "Error connecting database";
}

 ?>