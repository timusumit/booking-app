<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title"> <a href="<?php echo base_url(); ?>admin">Dashboard</a> </h4>
                        <div class="ml-auto text-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Appointment</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">List/Update</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->

    <div class="row">
        <div class="col-lg-12">
        <div class="col-lg-12">
        <div class="card">
                            
            <div class="card-body">
            <div class="form-wrap">
                <table class="table table-bordered table-hover table-minified">
                    <tr>
                        <th>Name</th><th>Gender</th><th>Email</th><th>Phone</th><th>Bank Branch</th><th>Address</th><th>Message</th><th>Date</th><th>Time</th><th>Action</th>
                     </tr>
                     <?php foreach($package_book as $key=>$app): ?>
                     <tr>
                         <td><?php echo $app['name']?></td>
                         <td><?php echo $app['gender']?></td>
                         <td><?php echo $app['email']?></td>
                         <td><?php echo $app['phone']?></td>
                         <td><?php echo $app['branch']?></td>
                         <td><?php echo $app['address']?></td>
                         <td><?php echo $app['message']?></td>
                         <td><?php echo $app['date']?></td>
                         <td><?php echo $app['time_slots']?></td>
                         <td>
                             <a data-toggle="modal" data-target="#appointmentModal" href="" class="btn btn-info btn-sm editAppointment"
                             
                             data-appointment_id="<?php echo $app['appointment_id']; ?>"
                             data-name="<?php echo $app['name']; ?>"
                             data-gender="<?php echo $app['gender']; ?>"
                             data-email="<?php echo $app['email']; ?>"
                             data-phone="<?php echo $app['phone']; ?>"
                             data-branch="<?php echo $app['branch']; ?>"
                             data-address="<?php echo $app['address']; ?>"
                             data-message="<?php echo $app['message']; ?>"
                             data-date="<?php echo $app['date']; ?>"
                             data-time_slots="<?php echo $app['time_slots']; ?>"
                             

                             >Update</a>
                             
                             
                             &nbsp;<a href="<?php echo base_url('appointment/delete/'.$app['appointment_id']); ?>" class="btn btn-danger btn-sm " onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                     </tr>
                     <?php endforeach;?>
                </table>
            </div>
                     </div>
                     </div>
        </div>
        </div>
    </div>


    <script>
$(function(){
        $(document).on("click", ".editAppointment", function () {
        

            var appointment_id =$(this).data('appointment_id');
            var name= $(this).data('name');
            var gender=$(this).data('gender');
            var email =$(this).data('email');
            var phone =$(this).data('phone');
            var branch =$(this).data('branch');
            var address =$(this).data('address');
            var message =$(this).data('message');
            var date =$(this).data('date');
            var time_slots =$(this).data('time_slots');

            

            $(".modal-body .form-group #nameField").val(name);
            $(".modal-body .form-group #genderField").val(gender);
            $(".modal-body .form-group #emailField").val(email);
            $(".modal-body .form-group #phoneField").val(phone);
            $(".modal-body .form-group #branchField").val(branch);
            $(".modal-body .form-group #addressField").val(address);
            $(".modal-body .form-group #messageField").val(message);
            $(".modal-body .form-group #dateField").val(date);
            $(".modal-body .form-group #timeField").val(time_slots);




            $("#appointmentModal form").attr('action','../appointment/edit/'+appointment_id);            
            $('#appointmentModal').modal('show');
        });
});
</script>



    <div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
  <?php echo form_open_multipart(); ?>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="appointmentModalLabel">Edit Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
                      <div class="row">
                       
                       
                    <div class="form-group mb-3 col-md-6">
                            <label for="nameField" class="form-label">Name</label>
                            <input type="name" class="form-control" value="<?php echo set_value('nameField'); ?>" id="nameField" placeholder="Sumit Maharjan" name="nameField">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="genderField" class="form-label">Gender</label>
                          <select name="genderField" id="genderField" class="form-control">
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="other">Other</option>
                          </select>
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label for="emailField" class="form-label">Email</label>
                            <input type="email" name="emailField" class="form-control" id="emailField" placeholder="timusumit@gmail.com">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="phoneField" class="form-label">Phone</label>
                            <input type="number" name="phoneField" class="form-control" id="phoneField" placeholder="9841361466">
                        </div>

                        <div class="form-group mb-3 col-md-6">
                            <label for="addressField" class="form-label">Address</label>
                            <input type="text" name="addressField" class="form-control" id="addressField" placeholder="Kirtipur-3">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="messageField" class="form-label">Message</label>
                           <textarea name="messageField" class="form-control" name="message" id="messageField"></textarea>
                        </div>
                       
                       

                        <div class="form-group mb-3 col-md-6">
                            <label for="dateField" class="form-label">Date</label>
                            <input name="dateField" type="date" class="form-control" id="dateField" >
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="timeField" class="form-label">Time Slot</label>
                            <select name="timeField" id="timeField" class="form-control">
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

                        <div class="form-group mb-3 col-md-6">
                            <label for="branchField" class="form-label">Bank Branch</label>
                            <select name="branchField" id="branchField" class="form-control">
                              <option value="KTM">Kathmandu</option>
                              <option value="PKR">Pokhara</option>
                              <option value="BKT">Bhaktapur</option>
                              <option value="LLT">Lalitpur</option>
                          </select>
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="fileField" class="form-label">Attachment (Optional)</label>
                            <input type="file" name="fileField" class="form-control" id="fileField" >
                            <small><b>File Types</b> :image annd documents only</small>
                        </div>
                     
                      
                        </div> 
                       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>