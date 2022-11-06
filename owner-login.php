<?php

include("navbar.php");

if(isset($_SESSION["email"])){
  header("Location:owner/index.php");
}


include("owner-auth.php");

 ?>

<section id="login" class="center_about">
 <div class="container clearfix">
  <div class="row">
   <div class="login_1 clearfix">
	  <div class="account-box">
            
                <form class="form-signin" method="POST">
                <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email" required="" autofocus="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required="">
                </div>
                
                <input class="btn btn-lg btn-block purple-bg" type="submit" id="submit" name="owner_login">
                </form>
                <div class="or-box row-block">
                    <div class="row">
                        <div class="col-md-12 row-block">
                            <a href="#" class="btn btn-primary btn-block">Create New Account</a>
                        </div>
                    </div>
                </div>
            </div>
   </div>
  </div>
 </div>
</section>