<br><br><br><br><br>
<?php $mantenimiento = $this->db->get_where('settings' , array('type' =>'mant'))->row()->description;?>
<div class="row">
              <div class="col-lg-12">
                  <div class="panel">
                      <div class="panel-heading">

                      </div><br><br>
          
 <?php echo form_open(base_url() . 'admin/ajustes/do_update/' , array('class' => 'panel-body form-horizontal form-padding', 'enctype' => 'multipart/form-data'));?>
          
                          <div class="form-group">
                              <label class="col-md-2 control-label" for="demo-text-input">Nombre del sistema</label>
                              <div class="col-md-4">
                                  <input type="text" class="form-control" name="system_name" value="<?php echo $this->db->get_where('settings' , array('type' =>'system_name'))->row()->description;?>" required>
                              </div>

                              <label class="col-md-2 control-label" for="demo-email-input">Título del sistema</label>
                              <div class="col-md-4">
                                  <input type="text" required name="system_title" value="<?php echo $this->db->get_where('settings' , array('type' =>'system_title'))->row()->description;?>" class="form-control">
                              </div>
                          </div>
          
                            <div class="form-group">
                              <label class="col-md-2 control-label" for="demo-text-input">Teléfonos</label>
                              <div class="col-md-4">
                                  <input type="text" class="form-control" name="phone" value="<?php echo $this->db->get_where('settings' , array('type' =>'system_phone'))->row()->description;?>" required>
                              </div>

                              <label class="col-md-2 control-label" for="demo-email-input">Dirección</label>
                              <div class="col-md-4">
                                  <input type="text" required value="<?php echo $this->db->get_where('settings' , array('type' =>'address'))->row()->description;?>" class="form-control" name="address">
                              </div>
                          </div>
          

<div class="form-group pad-ver">
					                    <label class="col-md-5 control-label">Activar modo mantenimiento?</label>
					                    <div class="col-md-5"> 
					                        <div class="radio">
					
					                            <input <?php if($mantenimiento == 1) echo 'checked';?> id="demo-inline-form-radio-2" class="magic-radio" type="radio" name="mant" value="1">
					                            <label for="demo-inline-form-radio-2">Sí</label>
					
					                            <input <?php if($mantenimiento == 0) echo 'checked';?> id="demo-inline-form-radio-3" class="magic-radio" type="radio" name="mant" value="0">
					                            <label for="demo-inline-form-radio-3">No</label>
					
					
					                        </div>
					                    </div>
					                </div>

                      
    </div>
<center><button type="submit" class="btn btn-primary">Actualizar</button></center>
     <?php echo form_close();?>
   </div>
</div>
<br><br><br><br><br><br><br><br><br>