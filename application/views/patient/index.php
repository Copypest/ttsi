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
                    <a class="btn btn-primary" href="<?php echo base_url('patient/addNew'); ?>"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                
                <?php
                if($this->session->flashdata('success')):
                ?>                
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>Success !</h4>
                    <?php echo $this->session->flashdata('success');?>.
                </div>
                <?php
                endif;
                ?>
                
              <div class="box">
                  
                  
                  
                <div class="box-header">
                    <h3 class="box-title">Patients List</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  
                    
                    <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th>Membership No.</th>
                                  <th>Name</th>
                                  <th>Type Of Thalassaemia</th>
                                  <th>Blood Group</th>
                                  <th>Contact</th>
                                  <th>DOB</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                            
                                <tbody>
                                    <?php 
                                    foreach($customers as $customer): 
                                    ?>
                                    <tr>
                                        <td><?php echo $customer['membership_no'];?></td>
                                        <td><?php echo $customer['name'];?></td>
                                        <td><?php echo $customer['type_of_thalassaemia'];?></td>
                                        <td><?php echo $customer['blood_group'];?></td>
                                        <td><?php echo $customer['contact_no']?></td>
                                        <td><?php echo showDate($customer['dob'],'d/m/Y');?></td>
                                        <td>
                                            <a title="Details" href="javascript:void(0)" data-toggle="modal" data-target="#modal-default" onclick='details(<?php echo json_encode($customer);?>)'><i class="fa fa-fw fa-info-circle"></i></a>
                                            <a title="Edit" href="<?php echo base_url('patient/edit/').$customer['id'];?>"><i class="fa fa-fw fa-edit"></i></a>
                                            <a title="Delete" href="javascript:void(0)" class="deleteRow" id="<?php echo $customer['id'];?>"><i class="fa fa-fw fa-trash-o"></i></a>
                                            <a href="<?php echo base_url('patient/addTest/').$customer['id'];?>" title="Add test report"><i class="fa fa-fw fa-plus-circle"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                        </table>    
                    
                    
                    
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
