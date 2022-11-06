<style>

#pageMessages {
position: fixed;
top: 70px;
width: 400px;
right:0px;
float: right;
}
.align-right {
-webkit-box-pack: end;
justify-content: flex-end;
float: right;
}
.alert {
position: relative;
}

.alert .close {
position: absolute;
top: 5px;
right: 5px;
font-size: 1em;
}

.alert .fa {
margin-right:.3em;
}

</style>
<?php 

$tenant_id='';
$full_name='';
$email='';
$password='';
$phone_no='';
$address='';
$id_type='';
$id_photo='';

$errors=array();

$db = new mysqli('localhost','root','','gharbhada');

if($db->connect_error){
	echo "Error connecting database";
}


if(isset($_POST['tenant_register'])){
	tenant_register();
}

if(isset($_POST['tenant_login'])){
	tenant_login();
}

if(isset($_POST['tenant_update'])){
	tenant_update();
}

function tenant_register(){
	if(isset($_FILES['id_photo']))
	{
$id_photo='tenant-photo/'.$_FILES['id_photo']['name'];

// echo $_FILES['image']['name'].'<br>';

if(!empty($_FILES['id_photo'])){
    $path = "tenant-photo/";
    $path=$path. basename($_FILES['id_photo']['name']);
        if(move_uploaded_file($_FILES['id_photo']['tmp_name'], $path))
        {
            echo"The file ". basename($_FILES['id_photo']['name']). " has been uploaded";
        }

        else{
            echo "There was an error uploading the file, please try again!";
        }
}

	}
	global $tenant_id,$full_name,$email,$password,$phone_no,$address,$id_type,$id_photo,$errors,$db;
	$full_name=validate($_POST['full_name']);
	$email=validate($_POST['email']);
	$password=validate($_POST['password']);
	$phone_no=validate($_POST['phone_no']);
	$address=validate($_POST['address']);
	$password = md5($password);
		$sql = "INSERT INTO tenant(full_name,email,password,phone_no,address,id_photo) VALUES('$full_name','$email','$password','$phone_no','$address','$path')";
		if($db->query($sql)===TRUE){
			header("location:renter-login.php");
	}
}



function tenant_login(){
	global $email,$db;
	$email=validate($_POST['email']);
	$password=validate($_POST['password']);

		$password = md5($password); 
		$sql = "SELECT * FROM tenant where email='$email' AND password='$password' LIMIT 1";
		$result = $db->query($sql);
		if($result->num_rows==1){
			$data = $result-> fetch_assoc();
			$logged_user = $data['email'];
			session_start();
			$_SESSION['email']=$email;
			header('location:index.php');
    

		}
		else{
			




?>

<div class="pageMessages col-lg-4 col-sm-10 col-xs-10 col-md-6 align-right" style="z-index: 999;">
    <div class="alert animated flipInX alert-success alert-dismissible" id="pageMessagesAlert"><strong><i class="fa fa-thumbs-up"></i>Incorrect username or password<span class="close" data-dismiss="alert"><i class="fa fa-times-circle"></i></span></div>
</div>



<?php
		}
}



function tenant_update(){
	global $owner_id,$full_name,$email,$password,$phone_no,$address,$id_type,$id_photo,$errors,$db;
	$tenant_id=validate($_POST['tenant_id']);
	$full_name=validate($_POST['full_name']);
	$email=validate($_POST['email']);
	$phone_no=validate($_POST['phone_no']);
	$address=validate($_POST['address']);
	$id_type=validate($_POST['id_type']);
	$password = md5($password); // Encrypt password
		$sql = "UPDATE tenant SET full_name='$full_name',email='$email',phone_no='$phone_no',address='$address',id_type='$id_type' WHERE tenant_id='$tenant_id'";
		$query=mysqli_query($db,$sql);
		if(!empty($query)){
			?>


<script>
	window.setTimeout(function() {
    $(".pageMessages").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
<div class="pageMessages col-lg-4 col-sm-10 col-xs-10 col-md-6 align-right" style="z-index: 999;">
    <div class="alert animated flipInX alert-success alert-dismissible" id="pageMessagesAlert"><strong><i class="fa fa-thumbs-up"></i>Update Successfully<span class="close" data-dismiss="alert"><i class="fa fa-times-circle"></i></span></div>
</div>


<?php
	}
}


function validate($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



 ?>