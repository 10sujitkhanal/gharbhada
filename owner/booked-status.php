<?php 
$property_id='';
include("../config/config.php");

if(isset($_GET['id']) && isset($_GET['status'])){
	status_property();
}


function status_property(){
	global $db,$property_id;
		
$id=$_GET['id'];
if($_GET['status'] == 'active'){
  $sql="UPDATE booking SET is_active = 1 WHERE id=$id";
}
elseif($_GET['status'] == 'inactive'){
  $sql="UPDATE booking SET is_active = 0 WHERE id=$id";
}

$query=mysqli_query($db,$sql);
if($query){

  header("Location: view-booked.php");

}}


 ?>