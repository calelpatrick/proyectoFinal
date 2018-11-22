<div class="content-w">

     <div class="content-i">
      <div class="content-box">      
      <div class="tab-content">
      <div class="tab-pane active" id="students">
      <div class="col-lg-12">
      <div class="element-wrapper">
      <h5 class="form-header">Agregar nuevo médico</h5><br>
         <?php echo form_open(base_url() . 'admin/medicos/nuevo/' , array('class' => 'panel-body form-horizontal form-padding', 'enctype' => 'multipart/form-data'));?>
         <div class="element-box">
           <div class="form-group row">
              <label class="col-sm-3 col-form-label" for=""> Nombre</label>
              <div class="col-sm-9">
              <div class="input-group">
               <input class="form-control" placeholder="Nombre" name="nombre" type="text">
               </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="">Apellido</label>
              <div class="col-sm-9">
               <div class="input-group">
                 <input class="form-control" name="apellido" type="text">
               </div>
              </div>
            </div>
           <div class="form-group row">
            <label class="col-form-label col-sm-3" for=""> Especialidad</label>
            <div class="col-sm-9">
               <div class="input-group">
                  <input class="form-control"  name="especialidad" type="text">
              </div>
            </div>
           </div>
           <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="">Teléfono</label>
              <div class="col-sm-9">
               <div class="input-group">
                  <input class="form-control" name="telefono" type="text" value="">
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
