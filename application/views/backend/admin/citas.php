        <div class="content-w">
          <div class="content-i">
            <div class="content-box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">Citas</h6>
                    <div class="element-box">
                    <div class="row">
                      <a href="<?php echo base_url();?>admin/nueva_cita/"><button class="btn btn-primary pull-right">Nueva cita</button></a><hr>
                    </div><hr>
                      <div class="table-responsive">
                      <?php echo form_open(base_url().'admin/citas');?>
                      <label>Filtrar por médico</label>
                        <select class="form-control" required="" name="doc" onchange="submit();">
                          <option value="">Seleccionar médico</option>
                          <?php 
                            $medicos = $this->db->get('medico')->result_array();
                            foreach($medicos as $row):
                          ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['nombre']. " ".$row['apellido'];?></option>
                          <?php endforeach;?>
                        </select>
                        <?php echo form_close();?>
                        <hr>
                        <table class="table table-lightborder">
                          <thead>
                            <tr>
                              <th style="text-align: center;">ID</th>
                              <th style="text-align: center;">Detales</th>
                              <th style="text-align: center;">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $this->db->order_by('id','asc');
                                if($doc != "")
                                {
                                  $productos = $this->db->get_where('cita', array('id_medico' => $doc))->result_array();
                                }else{
                                  $productos = $this->db->get_where('cita')->result_array();
                                }
                                foreach($productos as $row):
                              ?>  
                              <tr>
                                  <td style="text-align: center;">#<?php echo $row['id'];?></td>
                                  <td style="text-align: left;">Médico: <span class="badge badge-success"><?php echo $this->db->get_where('medico', array('id' => $row['id_medico']))->row()->nombre. " ".$this->db->get_where('medico', array('id' => $row['id_medico']))->row()->apellido;?></span>
                                  <br>
                                  Paciente: <span class="badge badge-primary"><?php echo $this->db->get_where('paciente', array('id' => $row['id_paciente']))->row()->nombre. " ".$this->db->get_where('paciente', array('id' => $row['id_paciente']))->row()->apellido;?></span>
                                  <br>
                                  Fecha: <?php echo $row['fecha'];?><br>
                                  Observaciones: <?php echo $row['observaciones'];?>
                                  </td>
                                   <td style="text-align: center;"><a onClick="return confirm('Seguro que desea eliminar la cita?')" href="<?php echo base_url();?>admin/citas/delete/<?php echo $row['id'];?>"><button class="btn btn-sm btn-danger">Eliminar</button></a></td>
                              </tr>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>