        <div class="content-w">
          <div class="content-i">
            <div class="content-box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">Manejar pacientes</h6>
                    <div class="element-box">
                    <div class="row">
                      <a href="<?php echo base_url();?>admin/nuevo_paciente/"><button class="btn btn-primary pull-right">Nuevo paciente</button></a><hr>
                    </div>
                      <div class="table-responsive">
                        <table class="table table-lightborder">
                          <thead>
                            <tr>
                              <th style="text-align: center;">ID</th>
                              <th style="text-align: center;">Nombre</th>
                              <th style="text-align: center;">Apellido</th>
                              <th style="text-align: center;">Edad</th>
                              <th style="text-align: center;">Género</th>
                              <th style="text-align: center;">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $this->db->limit(10);
                                $this->db->order_by('id','asc');
                                $medico = $this->db->get_where('paciente')->result_array();
                                foreach($medico as $row):
                              ?>  
                              <tr>
                                  <td style="text-align: center;">#<?php echo $row['id'];?></td>
                                  <td style="text-align: center;"><?php echo $row['nombre'];?></td>
                                  <td style="text-align: center;"><?php echo $row['apellido'];?></td>
                                  <td style="text-align: center;"><span class="badge badge-success"><?php echo $row['edad'];?></span></td>
                                  <td style="text-align: center;"><?php echo $row['genero'];?></td>
                                  <td style="text-align: center;"><a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/editar_paciente/<?php echo $row['id'];?>');"><button class="btn btn-sm btn-success">Editar</button></a> <a onClick="return confirm('Seguro que desea eliminar al paciente?')" href="<?php echo base_url();?>admin/pacientes/delete/<?php echo $row['id'];?>"><button class="btn btn-sm btn-danger">Eliminar</button></a></td>
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