        <div class="content-w">
          <div class="content-i">
            <div class="content-box">
            <div class="content-w">
 
  <div class="content-i">
    <div class="content-box">
<div class="row">
                        <div class="col-sm-4">
                          <a href="<?php echo base_url();?>admin/nueva_cita/">
                            <div class="element-box infodash primary centered padded">
                              <div class="label">Nueva cita</div>
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-4">
                          <a href="<?php echo base_url();?>admin/nuevo_medico/">
                            <div class="element-box infodash secondary centered padded">
                              <div class="label">Nuevo medico</div>
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-4">
                          <a href="<?php echo base_url();?>admin/nuevo_paciente/">
                            <div class="element-box infodash green centered padded">                            
                              <div class="label">Nuevo paciente</div>
                            </div>
                          </a>
                        </div>
                      </div>
    </div>
  </div>
</div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">Citas agregadas recientemente</h6>
                    <div class="element-box">
                      <div class="table-responsive">
                 
                        <table class="table table-lightborder">
                          <thead>
                            <tr>
                              <th style="text-align: center;">ID</th>
                              <th style="text-align: center;">Fecha</th>
                              <th style="text-align: center;">Doctor</th>
                              <th style="text-align: center;">Paciente</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $this->db->limit(10);
                                $this->db->order_by('id','asc');
                                $productos = $this->db->get_where('cita')->result_array();
                                foreach($productos as $row):
                              ?>  
                              <tr>
                                  <td style="text-align: center;">#<?php echo $row['id'];?></td>
                                  <td style="text-align: center;"><?php echo $row['fecha'];?></td>
                                  <td style="text-align: center;"><span class="badge badge-success"><?php echo $this->db->get_where('medico', array('id' => $row['id_medico']))->row()->nombre. " ".$this->db->get_where('medico', array('id' => $row['id_medico']))->row()->apellido;?></span></td>
                                  <td style="text-align: center;"><span class="badge badge-primary"><?php echo $this->db->get_where('paciente', array('id' => $row['id_paciente']))->row()->nombre. " ".$this->db->get_where('paciente', array('id' => $row['id_paciente']))->row()->apellido;?></span></td>
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