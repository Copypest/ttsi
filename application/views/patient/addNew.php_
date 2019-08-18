<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Patient Management
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url('patient'); ?>"><i class="fa fa-fw fa-backward"></i> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                
            <?php echo validation_errors('<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>','</div>'); ?>
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add New Patient</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  
                    <form action="" method="post">
                        <div class="controls">
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Membership / Registration No :</label>
                                    <input type="text" name="membership_no" value="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Membership Date :</label>
                                    <input type="text" name="Membership Date" value="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Name :</label>
                                    <input type="text" name="name" value="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>DOB :</label>
                                    <input type="text" name="dob" value="" class="form-control datemask" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Name :</label>
                                    <input type="text" name="" value="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Gender :</label><br>
                                    <span class="roomTypes">
                                    <label>
                                        <input type="radio" class="minimal" name="gender" value="male">
                                    </label>
                                    Male
                                    </span>
                                    <span class="roomTypes">
                                    <label>
                                        <input type="radio" class="minimal" name="gender" value="female">
                                    </label>
                                    Female
                                    </span>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Type of Thalassaemia :</label>
                                    <input type="text" name="type_of_thalassaemia" value="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Blood Group :</label>
                                    <input type="text" name="blood_group" value="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Gurdian :</label>
                                    <input type="text" name="gurdian" value="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Address :</label>
                                    <input type="text" name="address" value="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Contact No. :</label>
                                    <input type="text" name="contact_no" value="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Monthly Income :</label>
                                    <input type="text" name="monthly_income" value="" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Treatment Started From Date :</label>
                                    <input type="text" name="treatment_started_date" value="" class="form-control datepicker" readonly>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-12">
                                <input type="submit" class="btn btn-success btn-send pull-right" value="Save">
                            </div>
                            
                            
                        </div>
                    </form>
                    
                    
                    
                    
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php //echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>

<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/all.css'); ?>">
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js');?>"></script>

<script type="text/javascript">
    jQuery(document).ready(function(){
        
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass   : 'iradio_minimal-blue'
        })
        
        $('.datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });
        
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>

<style>
    .roomTypes{
        margin:5px;
    }
</style>
