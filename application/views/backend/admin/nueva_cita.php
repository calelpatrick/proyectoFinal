<div class="content-w">

     <div class="content-i">
      <div class="content-box">      
      <div class="tab-content">
      <div class="tab-pane active" id="students">
      <div class="col-lg-12">
      <div class="element-wrapper">
      <h5 class="form-header">Agregar nueva cita</h5><br>
        <div class="element-box">
         <?php echo form_open(base_url() . 'admin/citas/nueva/' , array('class' => 'panel-body form-horizontal form-padding', 'enctype' => 'multipart/form-data'));?>
           <div class="form-group row">
              <label class="col-sm-3 col-form-label" for=""> Médico</label>
              <div class="col-sm-9">
              <div class="input-group">
               <select class="form-control" required="" name="medico">
                 <option>Seleccionar médico</option>
                 <?php 
                  $medicos = $this->db->get('medico')->result_array();
                  foreach($medicos as $row):
                  ?>
                  <option value="<?php echo $row['id'];?>"><?php echo $row['nombre']. " ".$row['apellido'];?></option>
                <?php endforeach;?>
               </select>
               </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="">Paciente</label>
              <div class="col-sm-9">
               <div class="input-group">
                  <select class="form-control" required="" name="paciente">
                 <option>Seleccionar paciente</option>
                 <?php 
                  $medicos = $this->db->get('paciente')->result_array();
                  foreach($medicos as $row):
                  ?>
                  <option value="<?php echo $row['id'];?>"><?php echo $row['nombre']. " ".$row['apellido'];?></option>
                <?php endforeach;?>
               </select>
               </div>
              </div>
            </div>
           <div class="form-group row">
            <label class="col-form-label col-sm-3" for=""> Fecha</label>
            <div class="col-sm-9">
               <div class="input-group">
                  <input class="form-control single-daterange" name="fecha" type="text">
              </div>
            </div>
           </div>
            <div class="form-group row">
            <label class="col-form-label col-sm-3" for=""> Observaciones</label>
            <div class="col-sm-9">
               <div class="input-group">
              <textarea class="form-control" name="observaciones" id="ckeditor1"></textarea>
              </div>
            </div>
           </div>
            <div class="form-buttons-w">
              <button class="btn btn-primary" type="submit"> Agregar</button>
           </div>
           </div>
         <?php echo form_close();?>
        </div>
      </div>
      </div>
      
      </div>
      
      </div>
      </div>
      </div>
