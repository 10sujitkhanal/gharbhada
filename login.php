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
    <h1 class="text-center col">Find Your RealHome</h1>
	<div class="col-md-12 sign-up" style="text-align: center;">
                <button type="submit" class="btn btn-lg"  onclick="window.location.href='renter-login.php'" style="width:200px;">Renter Login</button>
                <button type="submit" class="btn btn-lg"  onclick="window.location.href='owner-login.php'" style="width:200px;">Owner Login</button>
                <button type="submit" class="btn btn-lg"  onclick="window.location.href='admin-login.php'" style="width:200px;">Admin Login</button>
            </div> 
   </div>
  </div>
 </div>
</div>
</section>

