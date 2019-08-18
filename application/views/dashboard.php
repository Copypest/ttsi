<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>New Tasks</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Completed Tasks</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>New User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url(); ?>userListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Reopened Issue</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
        
            
        
        <div class="row">
            
            <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Today transfusions</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Haemoglobin Before (P)</th>
                  <th>Haemoglobin After (P)</th>
                  <th>Haemoglobin Before (C)</th>                  
                  <th>Done</th>
                  <th>Next Date</th>

                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td><span class="badge bg-yellow">76</span></td>
                  <td><span class="badge bg-yellow">78</span></td>
                  <td><input type="text" class="form-control" name=""></td>
                  <td><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"></td>
                    <td><input type="text" class="form-control datepicker" name=""></td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td><span class="badge bg-red">50</span></td>
                  <td><span class="badge bg-red">55</span></td>
                  <td><input type="text" class="form-control" name=""></td>
                  <td><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"></td>
                    <td><input type="text" class="form-control datepicker" name=""></td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td><span class="badge bg-green">100</span></td>
                  <td><span class="badge bg-green">110</span></td>
                  <td><input type="text" class="form-control" name=""></td>
                    <td><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"></td>
                    <td><input type="text" class="form-control datepicker" name=""></td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td><span class="badge bg-danger">80</span></td>
                  <td><span class="badge bg-danger">90</span></td>
                  <td><input type="text" class="form-control" name=""></td>
                    <td><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"></td>
                    <td><input type="text" class="form-control datepicker" name=""></td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
                
        </div>
    </section>
</div>

<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')?>">
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/all.css')?>">
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js')?>"></script>
<script>
    $(function () {
            
        $('.datepicker').datepicker({
          autoclose: true
        })

          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
              checkboxClass: 'icheckbox_minimal-blue',
              radioClass   : 'iradio_minimal-blue'
            })
      })
</script>