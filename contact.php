<?php include_once('includes/url.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> 
    <title>CONTACT US</title>
 
    <!-- All Stylesheets -->
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <!-- Header Wrapper Start -->
    <header class="page__header d-flex align-items-center" style="background-image: url('images/global/page-header-bg-image.webp');">
        <div class="container">
            <h1 class="h1 text-uppercase text-white text-center mb-0">Contact Us</h1>
        </div>
    </header>
    <!-- Header Wrapper End -->  
    
    <!-- Contact Wrapper Start -->  
    <section class="py-5 contact__wrapper">
        <div class="container">
            <h2 class="h2">Send Us A Message</h2>
            <div class="form__wrapp row gy-2 gx-4 gx-md-5 mt-3">
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small" for="fName">First Name <span class="text-danger">*</span></label>
                        <input type="text" name="fName" id="fName" class="form-control">
                        <div class="small text-danger fw-light error" id="fName-error"></div>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group mb-3 mb-lg-4">
                        <label class="fw-medium small" for="lName">Last Name <span class="text-danger">*</span></label>
                        <input type="text" name="lName" id="lName" class="form-control">
                        <div class="small text-danger fw-light error" id="lName-error"></div>
                    </div> 
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small" for="currentlyBased">Where are you currently based? <span class="text-danger">*</span></label>
                        <input type="text" name="currentlyBased" id="currentlyBased" class="form-control">
                        <div class="small text-danger fw-light error" id="currentlyBased-error"></div>
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small" for="userEmail">Email <span class="text-danger">*</span></label>
                        <input type="text" name="userEmail" id="userEmail" class="form-control">
                        <div class="small text-danger fw-light error" id="userEmail-error"></div>
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small" for="contactNumber">Phone Number <span class="text-danger">*</span></label>
                        <input type="text" name="contactNumber" id="contactNumber" class="form-control">
                        <div class="small text-danger fw-light error" id="contactNumber-error"></div>
                    </div>
                </div><!--.//col-->
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <label class="fw-medium small" for="address">Address <span class="text-danger">*</span></label>
                        <input type="text" name="address" id="address" class="form-control">
                        <div class="small text-danger fw-light error" id="address-error"></div>
                    </div>
                </div><!--.//col-->
                <div class="col-12"> 
                    <div class="form-group">
                        <label class="fw-medium small" for="userMessage">Message <span class="text-danger">*</span></label>
                        <textarea type="text" name="userMessage" id="userMessage" class="form-control"></textarea>
                        <div class="small text-danger fw-light error" id="userMessage-error"></div>
                    </div>
                </div> 
                <div class="col-12"> 
                    <div class="form-group">
                        <button onclick="submitContactForm()" class="btn btn-primary px-4 px-md-5 mt-4">Submit</button> 
                    </div>
                </div>
            </div> 
        </div><!--.//container-->
    </section>
    <!-- Contact Wrapper End -->

    <!-- Map Wrapper Start -->
    <div class=""> 
        <div class="container-fluid full-width px-0">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4016616.7281605517!2d73.89384554691179!3d10.541775031101354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0812ffd49cf55b%3A0x64bd90fbed387c99!2sKerala%2C%20India!5e0!3m2!1sen!2sbd!4v1669655546120!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div> 
    </div>
    <!-- Map Wrapper End -->
 
    <!-- Footer and Script List --> 
    <?php $folder='root'; include_once('includes/footer.inc.php'); ?>

    <script>
        function submitContactForm() { 
            var valid;	
            valid = validateContactForm();
            if(valid) {
                jQuery.ajax({
                    url: "__contact-form-submit.php",
                    data:'fName='+$("#fName").val()+
                         '&lName='+$("#lName").val()+
                         '&currentlyBased='+$("#currentlyBased").val()+
                         '&userEmail='+$("#userEmail").val()+
                         '&contactNumber='+$("#contactNumber").val()+
                         '&address='+$("#address").val()+
                         '&userMessage='+$("#userMessage").val(),
                    type: "POST",
                    success:function(data){ 
                        if(data.response == 'true') { 
                            window.location.href = "success.php"; 
                        } else {
                            alert('Someting went worng!');
                        }
                    }, 
                });
            }
        }
        function validateContactForm() {
            var valid = true;	
            $(".form-control").css('border-color','');
            $(".error").html('');
            
            // User name validation
            if(!$("#fName").val()) {
                $("#fName-error").html("First name required");
                $("#fName").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#fName-error").html("");
                $("#fName").css('border-color','green');
            }
            // User name validation
            if(!$("#lName").val()) {
                $("#lName-error").html("Last name required");
                $("#lName").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#lName-error").html("");
                $("#lName").css('border-color','green');
            }
            // User name validation
            if(!$("#currentlyBased").val()) {
                $("#currentlyBased-error").html("Field is required");
                $("#currentlyBased").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#currentlyBased-error").html("");
                $("#currentlyBased").css('border-color','green');
            }

            // User email validation
            if(!$("#userEmail").val()) {
                $("#userEmail-error").html("Email is required");
                $("#userEmail").css('border-color','#dc3545');
                valid = false;
            } else if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#userEmail-error").html("Invalid email");
                $("#userEmail").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#userEmail-error").html("");
                $("#userEmail").css('border-color','green');
            } 
        
            // User phone number validation
            var phno = $.trim($('#contactNumber').val());
            var che_phno = /^[0-9]{7,15}$/;
            if(!$("#contactNumber").val()) {
                $("#contactNumber-error").html("Phone number required");
                $("#contactNumber").css('border-color','#dc3545');
                valid = false;
            } if (!che_phno.test(phno)) {
                $("#contactNumber").css('border-color','#dc3545');
                $("#contactNumber-error").html('Please enter valid phone no'); 
                valid = false;
            } else if (phno.length < 7 || phno.length > 15) {
                $("#contactNumber").css('border-color','#dc3545');
                $("#contactNumber-error").html('Phone no. must be greater than or equals to 7 and less than or equals to 15 digits!!');
                // $("#dash_phone_error").css("color", "#FC0000"); 
                valid = false;
            } else {
                $("#contactNumber-error").html("");
                $("#contactNumber").css('border-color','green');
            }

            // Address validation
            if(!$("#address").val()) {
                $("#address-error").html("Address required");
                $("#address").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#address-error").html("");
                $("#address").css('border-color','green');
            }
          

            return valid;
        }

    </script>
    
</body>
</html>