<html>
  <body>
  <?php include 'navbar.php'; ?>
<section id="center" class="center_home clearfix">
<div class="center_home_m clearfix">
 <div class="container">
  <div class="row">
   <div class="center_home_1 clearfix">
    <h1 class="text-center col">Find Your RealHome</h1>
	<div class="center_home_1i clearfix">
	<form action="search-property.php" method="POST">
	<div class="col-sm-2">
	</div>
	 <div class="col-sm-8">
	  <div class="center_home_1i1 clearfix">
	    <input placeholder="Enter Property Type, Location (zone,district,province,city,tole,property_type,country)" name="search_property" class="form-control" type="text">
	  </div>
	 </div>
	</div>
	<div class="center_home_1i clearfix">
	 <div class="col-sm-10">
	  <div class="center_home_1i1 clearfix pull-right">
	    <h5 class="mgt text-center"><button class="button_1 block mgt" type="submit">Search Properties</button></h5>
	  </div>
	 </div>
	 <div class="col-sm-2">
	</div>
	</form>
	</div>
   </div>
  </div>
 </div>
</div>
</section>

<?php 

include("property-list.php");

 ?>


<section id="footer">
 <div class="container">
  <div class="row">
   <div class="footer_1 clearfix">
    <div class="col-sm-3">
	 <div class="footer_1i1 clearfix">
	  <h4 class="mgt col">About Us</h4>
	  <p class="col_2">This My Template is a team of young professionals that has been successfully creating Creative Website templates already for several years.</p>
	  <h5><a class="button col_2" href="#"><i class="fa fa-android"></i> Google Store</a></h5>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_1i1 clearfix">
	  <h4 class="mgt col">Useful Links</h4>
	  <ul>
	   <li><a class="col_2" href="#">About Us</a></li>
	   <li><a class="col_2" href="#">FAQs Page</a></li>
	   <li><a class="col_2" href="#">Checkout</a></li>
	   <li><a class="col_2" href="#">Services</a></li>
	   <li><a class="col_2" href="#">Contact Us</a></li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_1i1 clearfix">
	  <h4 class="mgt col">Get In Touch</h4>
	  <h6 class="col_2"><i class="fa fa-map-marker"></i> 65 North Park Avenue, USA</h6>
	  <h6 class="col_2"><i class="fa fa-envelope"></i> <a class="col_2" href="#">info@gmail.com</a></h6>
	  <h6 class="col_2"><i class="fa fa-phone"></i> +91 123 456 7890</h6>
	  <h6 class="col_2"><i class="fa fa-fax"></i> +91 123 456 7890</h6>
	  <h6 class="col_2"><i class="fa fa-globe"></i> All Country Realhome</h6>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_1i1 clearfix">
	  <h4 class="mgt col">Follow Us</h4>
      <p class="col_2">Follow & Subscribe your email to get new business tips.</p>
	  <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
      </ul>
	  <input class="form-control" placeholder="Your Email" type="text">
	 </div>
	</div>
   </div>
   <div class="footer_2 text-center clearfix">
	 <div class="col-sm-12">
	  <p class="col_2 mgt">© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_1" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
	 </div>
   </div>
  </div>
 </div>
</section>

<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

</body>
 
</html>