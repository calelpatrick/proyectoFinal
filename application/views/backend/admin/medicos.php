        <div class="content-w">
          <div class="content-i">
            <div class="content-box">
              <div class="row">
                <div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">Manejar medicos</h6>
                    <div class="element-box">
                    <div class="row">
                      <a href="<?php echo base_url();?>admin/nuevo_medico/"><button class="btn btn-primary pull-right">Nuevo médico</button></a><hr>
                    </div>
                      <div class="table-responsive">
                        <table class="table table-lightborder">
                          <thead>
                            <tr>
                              <th style="text-align: center;">ID</th>
                              <th style="text-align: center;">Nombre</th>
                              <th style="text-align: center;">Apellido</th>
                              <th style="text-align: center;">Especialidad</th>
                              <th style="text-align: center;">Telefono</th>
                              <th style="text-align: center;">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $this->db->limit(10);
                                $this->db->order_by('id','asc');
                                $medico = $this->db->get_where('medico')->result_array();
                                foreach($medico as $row):
                              ?>  
                              <tr>
                                  <td style="text-align: center;">#<?php echo $row['id'];?></td>
                                  <td style="text-align: center;"><?php echo $row['nombre'];?></td>
                                  <td style="text-align: center;"><?php echo $row['apellido'];?></td>
                                  <td style="text-align: center;"><span class="badge badge-success"><?php echo $row['especialidad'];?></span></td>
                                  <td style="text-align: center;"><?php echo $row['telefono'];?></td>
                                  <td style="text-align: center;"> <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/editar_medico/<?php echo $row['id'];?>');"><button class="btn btn-sm btn-success">Editar</button> <a onClick="return confirm('Seguro que desea eliminar al medico?')" href="<?php echo base_url();?>admin/medicos/delete/<?php echo $row['id'];?>"><button class="btn btn-sm btn-danger">Eliminar</button></a></td>
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