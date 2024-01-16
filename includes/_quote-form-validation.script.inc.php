    <script>
        $(".product__enquiry__modal").on('click', function(e){
            var val = $(this).val();
            $("#quoteModal").modal('show');
            $("#product_name").val(val);
        });


        // Modal Quick Enquery Form Validation Script
    $("#modalEnquireForm").submit(function () {
        if (validatecontactForm()) {
            return true;
        }
        else {
            return false;
        }
    });
    function validatecontactForm() {
        var valid = true;	
        $(".form-control").css('border-color','');
        $(".error").html('');
        
        // User name validation
        if(!$("#fullName").val()) {
            $("#fullName-error").html("Name required");
            $("#fullName").css('border-color','#dc3545');
            valid = false;
        } else {
            $("#fullName-error").html("");
            $("#fullName").css('border-color','green');
        } 

        // User email validation
        if(!$("#emailAddress").val()) {
            $("#emailAddress-error").html("Email is required");
            $("#emailAddress").css('border-color','#dc3545');
            valid = false;
        } else if(!$("#emailAddress").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#emailAddress-error").html("Invalid email");
            $("#emailAddress").css('border-color','#dc3545');
            valid = false;
        } else {
            $("#emailAddress-error").html("");
            $("#emailAddress").css('border-color','green');
        } 
    
        // User phone number validation
        var phno = $.trim($('#contactNumber').val());
        var che_phno = /^[0-9]{7,8}$/;
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
        if(!$("#subject").val()) {
            $("#subject-error").html("Subject required");
            $("#subject").css('border-color','#dc3545');
            valid = false;
        } else {
            $("#subject-error").html("");
            $("#subject").css('border-color','green');
        }
     

        return valid;
    }

    // Modal Quick Enquery Form Set Blank When Modal Is Close
    var enquirModal = document.getElementById("quoteModal");
    enquirModal.addEventListener('hidden.bs.modal', function (e) {
        $("#fullName, #subject, #emailAddress, #contactNumber").val('');
        $("#fullName, #subject, #emailAddress, #contactNumber").css('border-color', '#ced4da');
        $("#fullName-error, #subject-error, #emailAddress-error, #contactNumber-error").html('');
    });


 
    </script>