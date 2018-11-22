<div class="content-w">

     <div class="content-i">
      <div class="content-box">      
      <div class="tab-content">
      <div class="tab-pane active" id="students">
      <div class="col-lg-12">
      <div class="element-wrapper">
      <h5 class="form-header">Agregar nuevo paciente</h5><br>
        <div class="element-box">
         <?php echo form_open(base_url() . 'admin/pacientes/nuevo/' , array('class' => 'panel-body form-horizontal form-padding', 'enctype' => 'multipart/form-data'));?>
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
            <label class="col-form-label col-sm-3" for=""> Edad</label>
            <div class="col-sm-9">
               <div class="input-group">
                  <input class="form-control"  name="edad" type="text">
              </div>
            </div>
           </div>
           <div class="form-group row">
              <label class="col-sm-3 col-form-label" for="">Género</label>
              <div class="col-sm-9">
               <div class="input-group">
                  <input class="form-control" name="genero" type="text" value="">
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
