<?php $edit_data	=	$this->db->get_where('paciente' , array('id' => $param2))->result_array();
    foreach ($edit_data as $row):
    ?>
    <div class="element-box">
         <?php echo form_open(base_url() . 'admin/pacientes/update/'.$param2 , array('class' => 'panel-body form-horizontal form-padding', 'enctype' => 'multipart/form-data'));?>
           <div class="form-group row">
              <label class="col-sm-3 col-form-label" for=""> Nombre</label>
              <div class="col-sm-9">
              <div class="input-group">
               <input class="form-control" placeholder="Nombre" name="nombre" type="text" value="<?php echo $row['nombre'];?>">
               </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="">Apellido</label>
              <div class="col-sm-9">
               <div class="input-group">
                 <input class="form-control" name="apellido" type="text" value="<?php echo $row['apellido'];?>">
               </div>
              </div>
            </div>
           <div class="form-group row">
            <label class="col-form-label col-sm-3" for=""> Edad</label>
            <div class="col-sm-9">
               <div class="input-group">
                  <input class="form-control"  name="edad" type="text" value="<?php echo $row['edad'];?>">
              </div>
            </div>
           </div>
           <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="">Género</label>
              <div class="col-sm-9">
               <div class="input-group">
                  <input class="form-control" name="genero" type="text" value="<?php echo $row['genero'];?>">
               </div>
              </div>
            </div>    
            <div class="form-buttons-w">
              <button class="btn btn-primary" type="submit"> Actualizar</button>
           </div>
           </div>
         <?php echo form_close();?>
<?php endforeach;?>