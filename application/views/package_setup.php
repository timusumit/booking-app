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
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-8">
                        <div class="card">
                            
                                <div class="card-body">
                                    <h4 class="card-title">Add Package</h4>
                                    <?php if(!empty(validation_errors())){?>
                                    <div class="alert alert-danger"> <?php echo validation_errors(); ?></div>
                                   <?php }?>
                                    <?php echo form_open_multipart('admin/package_setup/add'); ?>
                                    <div class="form-group row">
                                        <label for="package_name" class="col-sm-3 text-left control-label col-form-label">Package Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Package Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package_features" class="col-sm-3 text-left control-label col-form-label">Package_features</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control ckeditor" id="package_features" name="package_features"></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package_price" class="col-sm-3 text-left control-label col-form-label">Package Price</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="package_price" id="package_price" placeholder="Price">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="package_offer_price" class="col-sm-3 text-left control-label col-form-label">Package Offer Price</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="package_offer_price" id="package_offer_price" placeholder="Offer Price">
                                        </div>
                                    </div>
                                       <div class="form-group row">
                                        <label for="best_for" class="col-sm-3 text-left control-label col-form-label">Best For</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="best_for" id="best_for" placeholder="Best For">
                                        </div>
                                    </div>
                                    
                                    
                                  
                                </div>
                                <div class="border-top">
                                    <div class="card-body text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                </div>


        </div>
       