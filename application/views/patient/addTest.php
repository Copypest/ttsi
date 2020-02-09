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
          
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url('patient/testReports/'.$patient_id); ?>"><i class="fa fa-fw fa-backward"></i> Back</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add / Edit Test Report</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">


<!--
                        <?php foreach($formArray as $key=>$values):?>
                        <div class="form-group">
                            <?php echo $key;?>
                        </div>
                        <?php if(!empty($values['type'])):?>
                        <div class="form-group">
                        </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
-->
                        <?php echo form_open();?>
                        
                        <div class="col-sm-12">
                            
                            <div class="box box-default collapsed-box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Blood</h3>

                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                  </div>
                                  <!-- /.box-tools -->
                                </div>
                                <div class="box-body" style="">
                                    
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Haemoglobin :</label>
                                        <input type="text" name="blood[haemoglobin][value]" value="<?=@$blood['haemoglobin']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="blood[haemoglobin][date]" value="<?=@$blood['haemoglobin']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Ferritin :</label>
                                        <input type="text" name="blood[ferritin][value]" value="<?=@$blood['ferritin']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="blood[ferritin][date]" value="<?=@$blood['ferritin']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <label>Sugar</label>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Fasting :</label>
                                        <input type="text" name="blood[sugar][fasting][value]" value="<?=@$blood['sugar']['fasting']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>PP :</label>
                                        <input type="text" name="blood[sugar][pp][value]" value="<?=@$blood['sugar']['pp']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="blood[sugar][date]" value="<?=@$blood['sugar']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Calcium :</label>
                                        <input type="text" name="blood[calcium][value]" value="<?=@$blood['calcium']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="blood[calcium][date]" value="<?=@$blood['calcium']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Creatinine :</label>
                                        <input type="text" name="blood[creatinine][value]" value="<?=@$blood['creatinine']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="blood[creatinine][date]" value="<?=@$blood['creatinine']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>T3 :</label>
                                        <input type="text" name="blood[t][t3][value]" value="<?=@$blood['t']['t3']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>T4 :</label>
                                        <input type="text" name="blood[t][t4][value]" value="<?=@$blood['t']['t4']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>TSH :</label>
                                        <input type="text" name="blood[t][tsh][value]" value="<?=@$blood['t']['tsh']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="blood[t][date]" value="<?=@$blood['t']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    
                                </div></div>
                            
                            <!-- #####################  LTF start ##################### -->
                            
                            <div class="box box-default collapsed-box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title">LFT</h3>

                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                  </div>
                                  <!-- /.box-tools -->
                                </div>
                                <div class="box-body" style="">
                                        
                            <div class="row"> 
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>TB :</label>
                                        <input type="text" name="lft[tb][value]" value="<?=@$lft['tb']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="lft[tb][date]" value="<?=@$lft['tb']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Direct :</label>
                                        <input type="text" name="lft[direct][value]" value="<?=@$lft['direct']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="lft[direct][date]" value="<?=@$lft['direct']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>TP :</label>
                                        <input type="text" name="lft[tp][value]" value="<?=@$lft['tp']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="lft[tp][date]" value="<?=@$lft['tp']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>ALB :</label>
                                        <input type="text" name="lft[alb][value]" value="<?=@$lft['alb']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="lft[alb][date]" value="<?=@$lft['alb']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>GB :</label>
                                        <input type="text" name="lft[gb][value]" value="<?=@$lft['gb']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="lft[gb][date]" value="<?=@$lft['gb']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>ALK Po4 :</label>
                                        <input type="text" name="lft[alkpo4][value]" value="<?=@$lft['alkpo4']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="lft[alkpo4][date]" value="<?=@$lft['alkpo4']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>SGP :</label>
                                        <input type="text" name="lft[sgp][value]" value="<?=@$lft['sgp']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="lft[sgp][date]" value="<?=@$lft['sgp']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>SGOT :</label>
                                        <input type="text" name="lft[sgot][value]" value="<?=@$lft['sgot']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="lft[sgot][date]" value="<?=@$lft['sgot']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                                        
                                        
                                </div></div>
                            
                            <!-- #####################  OTHERS start ##################### -->
                            
                            <div class="box box-default collapsed-box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title">OTHERS</h3>

                                  <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                                  </div>
                                  <!-- /.box-tools -->
                                </div>
                                <div class="box-body" style="">
                                        
                            <div class="row"> 
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Bone Mineral Density :</label>
                                        <input type="text" name="other[bone_mineral_density][value]" value="<?=@$other['bone_mineral_density']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="other[bone_mineral_density][date]" value="<?=@$other['bone_mineral_density']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>ECG :</label>
                                        <input type="text" name="other[ecg][value]" value="<?=@$other['ecg']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="other[ecg][date]" value="<?=@$other['ecg']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Echocardio :</label>
                                        <input type="text" name="other[echocardio][value]" value="<?=@$other['echocardio']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="other[echocardio][date]" value="<?=@$other['echocardio']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>USG :</label>
                                        <input type="text" name="other[usg][value]" value="<?=@$other['usg']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="other[usg][date]" value="<?=@$other['usg']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>X-Ray :</label>
                                        <input type="text" name="other[x_ray][value]" value="<?=@$other['x_ray']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Date :</label>
                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            <input type="text" name="other[x_ray][date]" value="<?=@$other['x_ray']['date']?>" class="form-control datemask datepicker" data-inputmask="'alias': 'dd/mm/yyyy'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Medicines :</label>
                                        <input type="text" name="other[medicines][value]" value="<?=@$other['medicines']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Specific History :</label>
                                        <div class="radio">
                                            <label>
                                              <input type="radio" name="other[specific_history][value]" id="optionsRadios1" value="option1" <?php if(isset($other['specific_history']['value']) && $other['specific_history']['value']=="option1"){?> checked="checked" <?php }?>  >
                                              Splenectomised
                                            </label>
                                          </div>
                                          <div class="radio">
                                            <label>
                                              <input type="radio" name="other[specific_history][value]" id="optionsRadios2" value="option2" <?php if(isset($other['specific_history']['value']) && $other['specific_history']['value']=="option2"){?> checked="checked" <?php }?> >
                                              Non-splenectomised
                                            </label>
                                          </div>
                                    </div>
                                </div>
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3"></div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Medicines :</label>
                                        <input type="text" name="other[medicines_1][value]" value="<?=@$other['medicines_1']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Screening to aquired diseases :</label>
                                        <input type="text" name="other[screening_to_aquired_diseases][value]" value="<?=@$other['screening_to_aquired_diseases']['value']?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Steps Taken :</label>
                                        <input type="text" name="other[steps_taken][value]" value="<?=@$other['steps_taken']['value']?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                                        
                                        
                                </div></div>
                            
                            <button class="btn btn-success pull-right"> <i class="fa fa-fw fa-save"></i> Save</button>
                            
                            
                            
                        </div>

                        <?php echo form_close();?>
                        
                    </div>
                </div>
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
    jQuery(document).ready(function() {

        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })

        $('.datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
        });

        jQuery('ul.pagination li a').click(function(e) {
            e.preventDefault();
            var link = jQuery(this).get(0).href;
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });

</script>

<style>
    .roomTypes {
        margin: 5px;
    }

</style>
