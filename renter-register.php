<?php 

include("navbar.php");

 ?>
<section id="login" class="center_about">
    <div class="container clearfix">
        <div class="row">
            <div class="login_1 clearfix">
                <div class="account-box">

                    <form method="POST" action="renter-backend.php" enctype="multipart/form-data">
                        <h3>Register</h3><br>
                        <div class="form-group">
                            <label for="full_name">Full Name:</label>
                            <input type="text" class="form-control" id="full_name" placeholder="Enter Full Name"
                                name="full_name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="password1">Password:</label>
                            <input type="password" class="form-control" id="password1" placeholder="Enter Password"
                                name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirm Password:</label>
                            <input type="password" class="form-control" id="password2"
                                placeholder="Enter Password Again" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_no">Phone No.:</label>
                            <input type="text" class="form-control" id="phone_no" placeholder="Enter Phone No."
                                name="phone_no" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter Address"
                                name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="card_photo">Upload your Selected Card:</label>
                            <input type="file" class="form-control" placeholder="Upload id photo" name="id_photo"
                                accept="image/*" onchange="preview_image(event)" required>
                        </div>
                        <div class="form-group">
                            <label>Your selected File:</label><br>
                            <img src="" id="output_image" height="200px" required>
                        </div>
                        <hr>
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



<script type='text/javascript'>
function preview_image(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('output_image');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>
<script type="text/javascript">
function Validate() {
    var password = document.getElementById("password1").value;
    var confirmPassword = document.getElementById("password2").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
}
</script>