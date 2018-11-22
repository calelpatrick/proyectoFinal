<?php $orden = $this->db->get_where('ordenes', array('id' => $id))->result_array();
foreach($orden as $row):

?>
        <div class="content-w">
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>

  <div class="content-i">
    <div class="content-box">
<div class="row">
 <div class="element-wrapper">
              <div class="col-lg-12">
                  <div class="panel">
                      <div class="panel-heading">
                          <h3 class="panel-title">Actualizar orden</h3>
                      </div><br><br>

                                    <div class="source-preview-wrapper">
                                        <div class="preview">
                                            <div class="preview-elements">
                                    <?php echo form_open(base_url() . 'admin/new_order/update/'.$id , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>


                              <div class="col-md-4">
                          <div class="form-group">
                              <label class="col-md-2 control-label" for="demo-text-input">Orden No.</label>
                                  <input type="text" class="form-control" name="codigo" readonly="" required value="<?php echo strtoupper($row['codigo']);?><?php $id = $this->db->count_all_results('ordenes')+1; if($id <= 9) echo "0".$id; else echo $id;?>">
                              </div>

                              <label class="col-md-2 control-label" for="demo-email-input">Fecha</label>
                              <div class="col-md-4">
                                  <div id="demo-dp-component">
					                                <div class="input-group date">
					                                    <input type="text" readonly value="<?php echo $row['garantia'];?>" class="form-control" name="garantia">
					                                    <span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>
					                                </div>
					                            </div>
                              </div>
                          </div><br><br>

                                            <center><b><---------------------------------------------- DATOS DEL CLIENTE -------------------------------------------------></b></center><br>
<br>
                                            <div class="form-group">
                              <label class="col-md-1 control-label" for="demo-text-input">Cliente</label>
                              <div class="col-md-3">
                                  <input type="text" class="form-control" value="<?php echo $this->db->get_where('clientes', array('id' => $row['client_id']))->row()->nombre;?>" name="cliente">
                              </div>

                              <label class="col-md-1 control-label" for="demo-email-input">Teléfono</label>
                              <div class="col-md-2">
                                  <input type="text" placeholder="Celular de contacto" name="celular" value="<?php echo $this->db->get_where('clientes', array('id' => $row['client_id']))->row()->celular;?>" class="form-control">
                              </div>

                               <label class="col-md-2 control-label" for="demo-email-input">Direccion</label>
                              <div class="col-md-3">
                                  <input type="text" placeholder="Dirección del Cliente" value="<?php echo $this->db->get_where('clientes', array('id' => $row['client_id']))->row()->direccion;?>" name="direccion" class="form-control">
                              </div>
                          </div>
<br><br>
                                            <center><b><---------------------------------------------- DATOS DEL SERVICIO A REALIZAR -------------------------------------------------></b></center><br><br>
                                                          <div class="form-group">
                              <label class="col-md-2 control-label" for="demo-text-input">Marca</label>
                              <div class="col-md-4">
                                  <select class="form-control" required name="soporte">
                                          <option value="">Seleccionar marca</option>
                                          <option value="Huawei" <?php if($row['soporte'] == "Huawei") echo "selected";?>>Huawei</option>
                                          <option value="Nokia" <?php if($row['soporte'] == "Nokia") echo "selected";?>>Nokia</option>
                                          <option value="iPhone" <?php if($row['soporte'] == "iPhone") echo "selected";?>>iPhone</option>
                                          <option value="Samsung" <?php if($row['soporte'] == "Samsung") echo "selected";?>>Samsung</option>
                                          <option value="Sony" <?php if($row['soporte'] == "Sony") echo "selected";?>>Sony</option>
                                          <option value="LG" <?php if($row['soporte'] == "LG") echo "selected";?>>LG</option>
                                          <option value="Alcatel" <?php if($row['soporte'] == "Alcatel") echo "selected";?>>Alcatel</option>
                                          <option value="Motorola" <?php if($row['soporte'] == "Motorola") echo "selected";?>>Motorola</option>
                                  </select>
                              </div>

 <label class="col-md-2 control-label" for="demo-text-input">Modelo</label>
                              <div class="col-md-4">
                                  <input type="text" class="form-control" name="modelo" value="<?php echo $row['modelo'];?>">
                              </div>
                          </div>

                               <input type="hidden" value="<?php echo $row['client_id'];?>" name="client">
                              <label class="col-md-2 control-label" for="demo-email-input">Precio</label>
                              <div class="col-md-4">
                                  <input type="text" value="<?php echo $row['precio'];?>" placeholder="Preio" required name="precio" class="form-control">
                              </div>
                          </div>


                           <div class="form-group">
                              <label class="col-md-2 control-label" for="demo-text-input">Servicio a realizar</label>
                              <div class="col-md-4">
                                  <select class="form-control" name="servicio" required>
                                       <option value="">Seleccionar servicio</option>
                                       <option value="Cambio de Pantalla" <?php if($row['servicio'] == "Cambio de Pantalla") echo "selected";?>>Cambio de Pantalla</option>
                                       <option value="Cambio de tapa" <?php if($row['servicio'] == "Cambio de tapa") echo "selected";?>>Cambio de tapa</option>
                                       <option value="Cambio de micrófono" <?php if($row['servicio'] == "Cambio de micrófono") echo "selected";?>>Cambio de micrófono</option>
                                       <option value="Cambio de auricular" <?php if($row['servicio'] == "Cambio de auricular") echo "selected";?>>Cambio de auricular</option>
                                       <option value="Cambio de speaker" <?php if($row['servicio'] == "Cambio de speaker") echo "selected";?>>Cambio de speaker</option>
                                       <option value="Cambio de puerto de carga" <?php if($row['servicio'] == "Cambio de puerto de carga") echo "selected";?>>Cambio de puerto de carga</option>
                                       <option value="Cambio de batería" <?php if($row['servicio'] == "Cambio de batería") echo "selected";?>>Cambio de batería</option>
                                       <option value="Cambio sensor de proximidad" <?php if($row['servicio'] == "Cambio sensor de proximidad") echo "selected";?>>Cambio sensor de proximidad</option>
                                       <option value="Cambio de cámara frontal" <?php if($row['servicio'] == "Cambio de cámara frontal") echo "selected";?>>Cambio de cámara frontal</option>
                                       <option value="Cambio de cámara trasera" <?php if($row['servicio'] == "Cambio de cámara trasera") echo "selected";?>>Cambio de cámara trasera</option>
                                       <option value="Cambio de vibrador" <?php if($row['servicio'] == "Cambio de vibrador") echo "selected";?>>Cambio de vibrador</option>
                                       <option value="Cambio de antena de WIFI" <?php if($row['servicio'] == "Cambio de antena de WIFI") echo "selected";?>>Cambio de antena de WIFI</option>
                                       <option value="Cambio de flex de volumen y vibrador" <?php if($row['servicio'] == "Cambio de flex de volumen y vibrador") echo "selected";?>>Cambio de flex de volumen y vibrador</option>
                                       <option value="Cambio de flex de power" <?php if($row['servicio'] == "Cambio de flex de power") echo "selected";?>>Cambio de flex de power</option>
                                       <option value="Cambio de botón home" <?php if($row['servicio'] == "Cambio de botón home") echo "selected";?>>Cambio de botón home</option>
                                       <option value="Cambio de carcasa" <?php if($row['servicio'] == "Cambio de carcasa") echo "selected";?>>Cambio de carcasa</option>
                                       <option value="Cambio de lens de cámara" <?php if($row['servicio'] == "Cambio de lens de cámara") echo "selected";?>>Cambio de lens de cámara</option>
                                       <option value="Software" <?php if($row['servicio'] == "Software") echo "selected";?>>Software</option>
                                       <option value="Liberación" <?php if($row['servicio'] == "Liberación") echo "selected";?>>Liberación</option>
                                       <option value="Cambio de glass" <?php if($row['servicio'] == "Cambio de glass") echo "selected";?>>Cambio de glass</option>
                                       <option value="Vidrio templado" <?php if($row['servicio'] == "Vidrio templado") echo "selected";?>>Vidrio templado</option>
                                       <option value="Diagnostico" <?php if($row['servicio'] == "Diagnostico") echo "selected";?>>Diagnostico</option>
                                       <option value="Limpieza de aparato mojado" <?php if($row['servicio'] == "Limpieza de aparato mojado") echo "selected";?>>Limpieza de aparato mojado</option>
                                       <option value="Limpieza de auricular" <?php if($row['servicio'] == "Limpieza de auricular") echo "selected";?>>Limpieza de auricular</option>
                                       <option value="Limpieza de speaker" <?php if($row['servicio'] == "Limpieza de speaker") echo "selected";?>>Limpieza de speaker</option>
                                       <option value="Limpieza de puerto de carga" <?php if($row['Limpieza de puerto de carga'] == "Huawei") echo "selected";?>>Limpieza de puerto de carga</option>
                                       <option value="Cambio de IC Touch" <?php if($row['servicio'] == "Cambio de IC Touch") echo "selected";?>>Cambio de IC Touch</option>
                                       <option value="Cambio de IC carga" <?php if($row['servicio'] == "Cambio de IC carga") echo "selected";?>>Cambio de IC carga</option>
                                  </select>
                              </div>

  <label class="col-md-2 control-label" for="demo-text-input">Descuento</label>
                              <div class="col-md-4">
                                  <input type="number" class="form-control" name="descuento" value="<?php echo $row['descuento'];?>">
                              </div>
                          </div>


                          <div class="form-group">


					                    <label class="col-md-2 control-label">Tarjeta SIM</label>
					                    <div class="col-md-1"> 
					                        <div class="radio">
					
					                            <input id="demo-inline-form-radio-2" <?php if($row['sim'] == 1) echo "checked";?> class="magic-radio" type="radio" name="sim" value="1">
					                            <label for="demo-inline-form-radio-2">Sí</label>
					
					                            <input id="demo-inline-form-radio-3" <?php if($row['sim'] == 0) echo "checked";?> class="magic-radio" type="radio" name="sim" value="0">
					                            <label for="demo-inline-form-radio-3">No</label>
					
					
					                        </div>
					                    </div>
					               
					                    <label class="col-md-1 control-label">Memoria SD</label>
					                    <div class="col-md-1"> 
					                        <div class="radio">
					
					                            <input id="demo-inline-form-radio-4" <?php if($row['memo'] == 1) echo "checked";?> class="magic-radio" type="radio" name="memo" value="1">
					                            <label for="demo-inline-form-radio-4">Sí</label>
					
					                            <input id="demo-inline-form-radio-5" <?php if($row['memo'] == 0) echo "checked";?> class="magic-radio" type="radio" name="memo" value="0">
					                            <label for="demo-inline-form-radio-5">No</label>
					
					
					                        </div>
					                    </div>



                              <label class="col-md-2 control-label" for="demo-email-input">Detalles</label>
                              <div class="col-md-5">
                                   <textarea class="form-control" id="exampleTextarea" name="nota" rows="10"><?php echo $row['nota'];?></textarea>
                              </div>
                          </div>

<br><br>

<center><b><---------------------------------------------- ADICIONAL -------------------------------------------------></b></center><br><br>

 <div class="form-group">
                              <label class="col-md-2 control-label" for="demo-text-input">Contraseña del dispositivo</label>
                              <div class="col-md-4">
                                  <input type="text" class="form-control" placeholder="En caso de tener" value="<?php echo $row['contra'];?>" name="contra">
                              </div>

                             
                              <label class="col-md-2 control-label" for="demo-text-input">IMEI</label>
                              <div class="col-md-4">
                                  <input type="text" class="form-control" value="<?php echo $row['imei'];?>" required name="imei">
                              </div><br>
</div>
                         

<br><br>
                                                    <center><button type="submit" class="btn btn-primary">Actualizar</button></center><br><br>
                                                <?php echo form_close();?>
                      </div>
                </div>
              </div>
        </div>
</div>
    </div>
</div>             
</div>
</div>
</div>
<?php endforeach;?>       