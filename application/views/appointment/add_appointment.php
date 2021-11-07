<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="navbar navbar-light bg-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><h1>Book Appointment</h1></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">See all your bookings</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link text-success" aria-current="page" href="<?php echo base_url(); ?>/user/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-warning" aria-current="page" href="<?php echo base_url(); ?>/user/register">Register</a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-10 form-wrap">
            
            <?php if(!empty(validation_errors())){?>
                        <div class="alert alert-danger"> <?php echo validation_errors(); ?></div>
            <?php }?>
         <?php if(!empty( $this->session->flashdata('Success'))){ ?>
      <div class="alert alert-success"><?php echo    $this->session->flashdata('Success'); ?></div>  

<?php }?>
            <div class="card">
                <div class="card-body">
                <?php echo form_open_multipart('appointment/add'); ?>
                      <div class="row">
                       
                          <h5>Personal Detail</h5>
                    <div class="mb-3 col-md-6">
                            <label for="nameField" class="form-label">Name</label>
                            <input type="name" class="form-control" value="<?php echo set_value('nameField'); ?>" id="nameField" placeholder="Sumit Maharjan" name="nameField">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="genderField" class="form-label">Gender</label>
                          <select name="genderField" id="genderField" class="form-select" value="<?php echo set_value('genderField'); ?>">
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="other">Other</option>
                          </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="emailField" class="form-label">Email</label>
                            <input type="email" name="emailField" class="form-control" id="emailField" placeholder="timusumit@gmail.com" value="<?php echo set_value('emailField'); ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="phoneField" class="form-label">Phone</label>
                            <input type="number" name="phoneField" class="form-control" id="phoneField" placeholder="9841361466" value="<?php echo set_value('phoneField'); ?>">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="addressField" class="form-label">Address</label>
                            <input type="text" name="addressField" class="form-control" id="addressField" placeholder="Kirtipur-3" value="<?php echo set_value('addressField'); ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="messageField" class="form-label">Message</label>
                           <textarea name="messageField" class="form-control" name="message" id="messageField" value="<?php echo set_value('messageField'); ?>"></textarea>
                        </div>
                        <div class="clearfix"></div>
                       
                        <h5>Appointment Detail</h5>

                        <div class="mb-3 col-md-6">
                            <label for="dateField" class="form-label">Date</label>
                            <input name="dateField" type="date" class="form-control" id="dateField" value="<?php echo set_value('dateField'); ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="timeField" class="form-label">Time Slot</label>
                            <select name="timeField" id="timeField" class="form-select" value="<?php echo set_value('timeField'); ?>">
                              <option value="10:00AM-10:30AM">10:00AM-10:30AM</option>
                              <option value="10:30AM-11:00AM">10:30AM-11:00AM</option>
                              <option value="11:00AM-11:30AM">11:00AM-11:30AM</option>
                              <option value="11:30AM-12:00AM">11:30AM-12:00AM</option>
                              <option value="12:00AM-12:30AM">12:00AM-12:30AM</option>
                              <option value="12:30AM-01:00AM">12:30AM-01:00AM</option>
                              <option value="01:00AM-01:30AM">01:00AM-01:30AM</option>
                              <option value="01:30AM-02:00AM">01:30AM-02:00AM</option>
                              <option value="02:00AM-02:30AM">02:00AM-02:30AM</option>
                              <option value="02:30AM-03:00AM">02:30AM-03:00AM</option>
                              <option value="03:00AM-03:30AM">03:00AM-03:30AM</option>
                              <option value="03:30AM-04:00AM">03:30AM-04:00AM</option>
                              <option value="04:00AM-04:30AM">04:00AM-04:30AM</option>
                              <option value="04:30AM-05:00AM">04:30AM-05:00AM</option>
                            
                          </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="branchField" class="form-label">Bank Branch</label>
                            <select name="branchField" id="branchField" class="form-select" value="<?php echo set_value('branchField'); ?>">
                              <option value="KTM">Kathmandu</option>
                              <option value="PKR">Pokhara</option>
                              <option value="BKT">Bhaktapur</option>
                              <option value="LLT">Lalitpur</option>
                          </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="fileField" class="form-label">Attachment (Optional)</label>
                            <input type="file" name="fileField" class="form-control" id="fileField" value="<?php echo set_value('fileField'); ?>">
                            <small><b>File Types</b> :image annd documents only</small>
                        </div>
                        <div class="mb-3 col-md-6">
                        <input type="checkbox"  id="termsField" name="termsField">&nbsp;<label for="termsField" class="form-label">I agree terms and conditions.</label>       
                        </div>
                        <div class="mb-3 col-md-6">
                            <button class="btn btn-success" type="submit">Book an appointment</button>
                            <button class="btn btn-secondary" type="reset">Cancel</button>
                        </div> 
                        </div> 
                        <?php echo form_close(); ?>
                </div>
            </div> 
        </div>
    </div>
</div>