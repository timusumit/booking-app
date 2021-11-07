<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Bookings</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
           
 <div class="container-fluid">
            <div class="row">
            	<div class="col-lg-12">
            	<div class="card">
                <div class="card-body">
                 <!--    <div class="col-lg-12 pad_fix">
                      <div class="col-lg-4 pad_fix">  
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text wid130">
                                    List By:
                                </span>
                            </div>
                            <select class="form-control" type="text" name="book_status" id="book_status">
                               <?php foreach($package_book as $key=>$pb): ?>

                                <option value="<?php echo $pb['booking_status'] ?>"><?php echo ucfirst($pb['booking_status']) ?></option>
                               

                              <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    </div> -->
                	<table class="table table-bordered table-striped">
                		<tr><th>Client Name</th><th>Package Name</th><th>Client Number</th><th>Client Email</th><th>Requirements</th><th>Status</th></tr>
                		<?php foreach($package_book as $key=>$pb): ?>
                		<?php if($pb['booking_status']!="cancelled"){ ?>
                    <tr class="
                      <?php 
                          switch($pb['booking_status']){
                          case "confirmed":
                          echo "bg-success text-white";
                          break;
                          case "on_hold":
                          echo "bg-warning text-white";
                          break;
                          default:
                        }
                          ?>

                    "><td><?php echo $pb['name']; ?></td><td><?php echo $pb['package_name']; ?></td><td><?php echo $pb['phone']; ?></td><td><?php echo $pb['email']; ?></td><td><?php echo $pb['requirements']; ?></td><td>
                      <a href="<?php echo base_url('admin/bookings/book_status/'.$pb['booking_id'].'/confirmed'); ?>" class="book_confirm btn btn-success btn-xs 

                          <?php 
                          if($pb['booking_status']=="confirmed"){
                            echo "disabled";
                          }
                          

                          ?>
                        " >
                          <?php 
                          if($pb['booking_status']=="confirmed"){
                            echo "Confirmed";
                          }
                          else{
                            echo "Confirm";
                          }

                          ?>

                      </a>&nbsp;<a href="<?php echo base_url('admin/bookings/book_status/'.$pb['booking_id'].'/on_hold'); ?>" class="book_hold btn btn-warning btn-xs  <?php 
                          if($pb['booking_status']=="on_hold"){
                            echo "disabled";
                          }?>">
                        <?php 
                          if($pb['booking_status']=="on_hold"){
                            echo "On Hold";
                          }
                          else{
                            echo "Hold";
                          }

                          ?>
                      </a>&nbsp;<a href="<?php echo base_url('admin/bookings/book_status/'.$pb['booking_id'].'/cancelled'); ?>" class="book_cancel btn btn-danger btn-xs <?php 
                          if($pb['booking_status']=="cancelled"){
                            echo "disabled";
                          }?>">
                          <?php 
                          if($pb['booking_status']=="cancelled"){
                            echo "Cancelled";
                          }
                          else{
                            echo "Cancel";
                          }

                          ?>
                      </a>      
                        </td></tr>
                      <?php }?>
                		<?php endforeach; ?>
                	</table>
            	</div>
        		</div>
        	</div>
        </div>

 </div>

