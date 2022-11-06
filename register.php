<?php
if(isset($_SESSION["email"])){
  header("location:index.php");
}
include("navbar.php");

 ?>

<section >
<div class="center_home_m">
 <div class="container">
  <div class="row">
   <div class="center_home_1 clearfix">
    <h1 class="text-center col">Register</h1><br>
	<div class="col-md-12 sign-up" style="text-align: center;">
                <button type="submit" class="btn btn-lg"  onclick="window.location.href='renter-register.php'" style="width:200px;">Renter Register</button>
                <button type="submit" class="btn btn-lg"  onclick="window.location.href='owner-register.php'" style="width:200px;">Owner Register</button>
            </div> 
   </div>
  </div>
 </div>
</div>
</section>

