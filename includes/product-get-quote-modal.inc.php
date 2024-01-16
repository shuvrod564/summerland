<!-- Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:600px;">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <p class="modal-title h4 mb-0 fw-medium text-dark" id="quoteModalLabel">Get A Quote</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-sm-4">
                    <form action="<?php echo $base_url;?>submit-quote-form-submit.php" id="modalEnquireForm" class="form__wrapp row gy-3 gx-4">
                        <input type="hidden" name="product_name" id="product_name">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small" for="fullName">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="fullName" id="fullName" class="form-control">
                                <div class="small text-danger fw-light error" id="fullName-error"></div>
                            </div> 
                        </div><!--.//col-->  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small" for="emailAddress">Email <span class="text-danger">*</span></label>
                                <input type="text" name="emailAddress" id="emailAddress" class="form-control">
                                <div class="small text-danger fw-light error" id="emailAddress-error"></div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small" for="contactNumber">Phone Number <span class="text-danger">*</span></label>
                                <input type="text" name="contactNumber" id="contactNumber" class="form-control">
                                <div class="small text-danger fw-light error" id="contactNumber-error"></div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="small" for="subject">Subject <span class="text-danger">*</span></label>
                                <input type="text" name="subject" id="subject" class="form-control">
                                <div class="small text-danger fw-light error" id="subject-error"></div>
                            </div>
                        </div><!--.//col-->
                        <div class="col-12"> 
                            <div class="form-group">
                                <label class="small" for="userMessage">Message <span class="text-danger">*</span></label>
                                <textarea type="text" name="userMessage" id="userMessage" class="form-control"></textarea>
                                <div class="small text-danger fw-light error" id="userMessage-error"></div>
                            </div>
                        </div> 
                        <div class="col-12"> 
                            <div class="form-group text-center mt-2">
                                <button type="submit" class="btn btn-primary px-4 px-md-5">Submit</button> 
                            </div>
                        </div>
                    </form> 
                </div><!--./modal-body-->
            </div>
        </div>
    </div>