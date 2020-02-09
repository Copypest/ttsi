<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
            <i class="fa fa-user"></i> <?=@$membership_name?>
            <small><?=@$membership_no?></small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-6 text-left">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url('patient/addTest/'.$patient_id); ?>"><i class="fa fa-plus"></i> Add New Test Report</a>
                </div>
            </div>
            <div class="col-xs-6 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url('patient'); ?>"><i class="fa fa-fw fa-backward"></i> Back</a>
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
                    <h3 class="box-title">Patient Test report List</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  
                    
                    <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th>Date</th>
                                  <th>Action</th>
                                </tr>
                                </thead>
                            
                                <tbody>
                                    <?php 
                                    foreach($reports as $val): 
                                    ?>
                                    <tr>
                                         <td><?php echo showDate($val['created_on'],'d/m/Y');?></td>
                                        
                                        
                                        <td>
                                            <a title="Details" href="<?php echo base_url('patient/addTest/'.$patient_id.'/'.$val['id']);?>"><i class="fa fa-fw fa-info-circle"></i></a>
                                          <!--
                                            <a title="Edit" href="<?php echo base_url('patient/edit/').$customer['id'];?>"><i class="fa fa-fw fa-edit"></i></a>
                                            -->
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
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Patients Details</h4>
      </div>
      <div class="modal-body">
          <table class="table table-bordered">
              <tr>
                  <th>Membership No.</th>
                  <td id="membership_no"></td>
              </tr>
              <tr>
                  <th>Name</th>
                  <td id="name"></td>
              </tr>
              <tr>
                  <th>Gender</th>
                  <td id="gender"></td>
              </tr>
              <tr>
                  <th>Blood Group</th>
                  <td id="blood_group"></td>
              </tr>
              <tr>
                  <th>Address</th>
                  <td id="address"></td>
              </tr>
              <tr>
                  <th>Monthly Income</th>
                  <td id="monthly_income"></td>
              </tr>
              <tr>
                  <th>Membership Date</th>
                  <td id="membership_date"></td>
              </tr>
              <tr>
                  <th>DOB</th>
                  <td id="dob"></td>
              </tr>
              <tr>
                  <th>Type of Thalassaemia</th>
                  <td id="type_of_thalassaemia"></td>
              </tr>
              <tr>
                  <th>Gurdian</th>
                  <td id="gurdian"></td>
              </tr>
              <tr>
                  <th>Contact No</th>
                  <td id="contact_no"></td>
              </tr>
              
              
              <tr>
                  <th>Treatment Started From Date</th>
                  <td id="treatment_started_date"></td>
              </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
<!--        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>

<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css');?>">
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/swal/sweetalert.min.js');?>"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        $('#example1').DataTable();
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


    //$('#example1').DataTable();
      
    $('.deleteRow').click(function(){
        console.log('hello');
        var id = $(this).attr('id');
        deleteRow(id,$(this));
    });
  })
    
  function details(detail){
        
        $("#membership_no").html(detail.membership_no);
        $("#name").html(detail.name);
        $("#gender").html(detail.gender);
        $("#blood_group").html(detail.blood_group);
        $("#address").html(detail.address);
        $("#monthly_income").html(detail.monthly_income);
        $("#membership_date").html(detail.membership_date);
        $("#dob").html(detail.dob);
        $("#type_of_thalassaemia").html(detail.type_of_thalassaemia);
        $("#gurdian").html(detail.gurdian);
        
        $("#contact_no").html(detail.contact_no);        
        $("#treatment_started_date").html(detail.treatment_started_date);
                
    }
    
    function deleteRow(id,thisObj){
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $.ajax({
                  url : "<?php echo base_url('patient/deleteRow');?>",
                  type : "post",
                  data :{ 'id' : id},
                  success : function(){
                      thisObj.parent().parent().remove();
                      swal("Poof! Your contact has been deleted!", {
                          icon: "success",
                        });
                  }
                     
              })
            
          }
        });
    }
</script>
