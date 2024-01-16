 
<!-- Modal -->
<div class="modal fade" id="productEnquirModal" tabindex="-1" role="dialog" aria-labelledby="productEnquirModal" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 800px;">
        <div class="modal-content">
                <div class="modal-header border-0 ps-lg-5 ps-md-4">
                    <p class="h3 mb-0" id="productEnquirModal">Qet A Free Quote</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body p-md-4 p-lg-5 pt-lg-4">
                <form method="post" action="<?php echo $base_url;?>submit-product-enquir-form.php" id="enquirForm" class="row gx-4 gy-4  contact__form">
                    <div class="col-md-6">
                        <label for="e_name" class="d-block fw-semibold mb-1">Name</label>
                        <input type="text" name="name" id="e_name" class="form-control rounded-0 text-dark fw-medium">
                        <div class="e_error text-danger small" id="e_name_error"></div>
                    </div> 
                    <div class="col-md-6">
                        <label for="e_phone" class="d-block fw-semibold mb-1">Phone No</label>
                        <input type="text" name="phone" id="e_phone" class="form-control rounded-0 text-dark fw-medium">
                        <div class="e_error text-danger small" id="e_phone_error"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="e_email" class="d-block fw-semibold mb-1">Email Address</label>
                        <input type="text" name="email" id="e_email" class="form-control rounded-0 text-dark fw-medium">
                        <div class="e_error text-danger small" id="e_email_error"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="hear_about_us" class="d-block fw-semibold mb-1">Product</label>
                        <input type="text" name="product_name" id="enquire__pro__name" class="form-control" readonly>
                    </div>
                    <div class="col-12">
                        <label for="message" class="d-block fw-semibold mb-1">Message</label>
                        <textarea name="message" id="message" cols="40" rows="4" class="form-control rounded-0 text-dark fw-medium"></textarea> 
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary height small">GET A QUOTE</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        // Set Product name on form
        $(".productEnquirBtn").on('click', function(){
            var proName = $(this).val(); 
            $("#productEnquirModal").modal('show');
            $("#enquire__pro__name").val(proName);
        });

        // Validate the form and submit
        $("#enquirForm").submit(function() {
            if (validateEnquireForm()) {
                return true;
            }
            else {
                return false;
            }
        }); 

        function validateEnquireForm() {
            var valid = true;	
            $(".form-control").css('border-color','');
            $(".e_error").html('');
             
            if(!$("#e_name").val()) {
                $("#e_name_error").html("Name required");
                $("#e_name").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#e_name_error").html("");
                $("#e_name").css('border-color','#099f1a');
            }
           
            //  
            var phno = $.trim($('#e_phone').val());
            var che_phno = /^[0-9]{7,15}$/;
            if(!$("#e_phone").val()) {
                $("#e_phone_error").html("Phone number required");
                $("#e_phone").css('border-color','#dc3545');
                valid = false;
            } if (!che_phno.test(phno)) {
                $("#e_phone").css('border-color','#dc3545');
                $("#e_phone_error").html('Please enter valid phone no'); 
                valid = false;
            } else if (phno.length < 7 || phno.length > 15) {
                $("#e_phone").css('border-color','#dc3545');
                $("#e_phone_error").html('Phone no. must be greater than or equals to 7 and less than or equals to 15 digits!!'); 
                valid = false;
            } else {
                $("#e_phone_error").html("");
                $("#e_phone").css('border-color','#099f1a');
            } 
            //  
            if(!$("#e_email").val()) {
                $("#e_email_error").html("Email is required");
                $("#e_email").css('border-color','#dc3545');
                valid = false;
            } else if(!$("#e_email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#e_email_error").html("Invalid email");
                $("#e_email").css('border-color','#dc3545');
                valid = false;
            } else {
                $("#e_email_error").html("");
                $("#e_email").css('border-color','#099f1a');
            }  

            return valid;
        }


    });

    // Reset form field after modal close
    var modalId = document.getElementById('productEnquirModal'); 
    modalId.addEventListener('hidden.bs.modal', function (event) {
        $("#e_name_error, #e_phone_error, #e_email_error").html('');
        $("#e_name, #e_phone, #e_email").css('border-color', '#ced4da');
        $("#e_name, #e_phone, #e_email").val('');
    });
</script>
