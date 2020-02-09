<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Patient Management
        <small></small>
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
                    <h3 class="box-title">Patient Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $patient['id'];?>">
                        <div class="controls">
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Membership / Registration No :</label>
                                    <?php echo set_value('membership_no',$patient['membership_no']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Membership Date :</label>
                                    <?php echo set_value('membership_date',$patient['membership_date']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Patient Name :</label>
                                    <?php echo set_value('name',$patient['name']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>DOB :</label>
                                    <?php echo set_value('dob',$patient['dob']);?>
                                </div>
                            </div>
                            
                           <!--<div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Name :</label>
                                    <input type="text" name="type_of_thalassaemia" value="<?php echo set_value('type_of_thalassaemia',$patient['type_of_thalassaemia']);?>" class="form-control">
                                </div>
                            </div>-->
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Gender :</label>
                                    <?php echo $patient['gender'];?>
                                                                      
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Type of Thalassaemia :</label>
                                   <?php echo set_value('type_of_thalassaemia',$patient['type_of_thalassaemia']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Blood Group :</label>
                                    <?php echo set_value('blood_group',$patient['blood_group']);?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Life Member :</label>
                                    <?php echo set_value('blood_group',$patient['life_member']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Member (Gurdian / Parent ) Name :</label>
                                    <?php echo set_value('gurdian',$patient['gurdian']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Address :</label>
                                    <?php echo set_value('address',$patient['address']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Contact No. :</label>
                                   <?php echo set_value('contact_no',$patient['contact_no']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Monthly Income :</label>
                                    <?php echo set_value('monthly_income',$patient['monthly_income']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Treatment Started From Date :</label>
                                    <?php echo set_value('treatment_started_date',$patient['treatment_started_date']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Date Expired :</label>
                                   <?php echo set_value('date_expired',$patient['date_expired']);?>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label>Date Left :</label>
                                   <?php echo set_value('date_left',$patient['date_left']);?>
                                </div>
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

<script type="text/javascript">
    jQuery(document).ready(function(){
        
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
