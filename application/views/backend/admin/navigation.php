<div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            <div class="mm-buttons">
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
            <a class="mm-logo" href="<?php echo base_url();?>admin/tablero/"><img class="hidden-sm-down" src="<?php echo base_url();?>uploads/logo-icon.png" style="width:60px"><span><img src="http://lrhealthcare.com/wp-content/uploads/2015/04/IM-icon-white-trans.png"></span></a>
            <div class="logy-user">
                <div class="logged-user-i">
                  <div class="avatar-w">
                    <img alt="" src="<?php echo $this->crud_model->get_image_url($this->session->userdata('login_type'), $this->session->userdata('login_user_id'));?>">
                  </div>
                  <div class="logged-user-menu">
                    <div class="logged-user-avatar-info">
                      <div class="avatar-w">
                        <img alt="" src="<?php echo $this->crud_model->get_image_url($this->session->userdata('login_type'), $this->session->userdata('login_user_id'));?>">
                      </div>
                      <div class="logged-user-info-w">
                        <div class="logged-user-role">
                          Admin
                        </div>
                      </div>
                    </div>
                    <div class="bg-icon">
                      <i class="os-icon picons-thin-icon-thin-0710_business_tie_user_profile_avatar_man_male"></i>
                    </div>
                    <ul>
                        <li>
                          <a href="<?php echo base_url();?>login/logout"><i class="os-icon picons-thin-icon-thin-0040_exit_logout_door_emergency_outside"></i><span>Salir</span></a>
                        </li>
                  </ul>
                  </div>
                </div>
              </div>
          </div>
          <div class="menu-and-user">
          <div class="logy-user-m hidden-sm-down">
                <div class="logged-user-i">
                  <div class="avatar-w">
                    <img alt="" src="<?php echo $this->crud_model->get_image_url($this->session->userdata('login_type'), $this->session->userdata('login_user_id'));?>">
                  </div>
                  <div class="logged-user-menu">
                    <div class="logged-user-avatar-info">
                      <div class="avatar-w">
                        <img alt="" src="<?php echo $this->crud_model->get_image_url($this->session->userdata('login_type'), $this->session->userdata('login_user_id'));?>">
                      </div>
                      <div class="logged-user-info-w">
                        <div class="logged-user-name">
                          <?php echo $this->db->get_where($this->session->userdata('login_type'), array($this->session->userdata('login_type') . '_id' => $this->session->userdata('login_user_id')))->row()->name;?>
                        </div>
                        <div class="logged-user-role">
                          Admin
                        </div>
                      </div>
                    </div>
                    <div class="bg-icon">
                      <i class="os-icon picons-thin-icon-thin-0710_business_tie_user_profile_avatar_man_male"></i>
                    </div>
                    <ul>
                        <li>
                          <a href="<?php echo base_url();?>login/logout"><i class="os-icon picons-thin-icon-thin-0040_exit_logout_door_emergency_outside"></i><span>Salir</span></a>
                        </li>
                  </ul>
                  </div>
                </div>
              </div>
            <ul class="main-menu">
              <li class="main-menu <?php if($page_name == 'tablero') echo 'active';?>">
                <a href="<?php echo base_url();?>admin/tablero/">
                  <div class="icon-w">
                    <div class="os-icon picons-thin-icon-thin-0045_home_house"></div>
                  </div>
                  <span>Tablero</span></a>
              </li>
              <li class="main-menu <?php if($page_name == 'medicos') echo 'active';?>">
                <a href="<?php echo base_url();?>admin/medicos/">
                  <div class="icon-w">
                    <div class="os-icon picons-thin-icon-thin-0710_business_tie_user_profile_avatar_man_male"></div>
                  </div>
                  <span>Médicos</span></a>
              </li>
              <li class="main-menu <?php if($page_name == 'pacientes') echo 'active';?>">
                <a href="<?php echo base_url();?>admin/pacientes/">
                  <div class="icon-w">
                    <div class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></div>
                  </div>
                  <span>Pacientes</span></a>
              </li>
              <li class="main-menu <?php if($page_name == 'citas') echo 'active';?>">
                <a href="<?php echo base_url();?>admin/citas/">
                  <div class="icon-w">
                    <div class="picons-thin-icon-thin-0073_documents_files_paper_text_archive_copy"></div>
                  </div>
                  <span>Citas</span></a>
              </li>
            </ul>
          </div>
        </div>


        <div class="desktop-menu menu-side-w menu-activated-on-click color-scheme-dark">
          <div class="logo-w">
            <a class="logo" href="<?php echo base_url();?>admin/tablero/"><img src="http://lrhealthcare.com/wp-content/uploads/2015/04/IM-icon-white-trans.png"></a>          
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="logged-user-i">
                <div class="logged-user-info-w">
                  <div class="logged-user-name">
                    <?php echo $this->db->get_where($this->session->userdata('login_type'), array($this->session->userdata('login_type') . '_id' => $this->session->userdata('login_user_id')))->row()->name;?>
                  </div>
                  <div class="logged-user-role">
                    Admin
                  </div>
                </div>
                <div class="logged-user-menu">
                  <div class="logged-user-avatar-info">
                    <div class="avatar-w">
                      <img alt="" src="<?php echo $this->crud_model->get_image_url($this->session->userdata('login_type'), $this->session->userdata('login_user_id'));?>">
                    </div>
                    <div class="logged-user-info-w">
                      <div class="logged-user-name">
                        <?php echo $this->db->get_where($this->session->userdata('login_type'), array($this->session->userdata('login_type') . '_id' => $this->session->userdata('login_user_id')))->row()->name;?>
                      </div>
                      <div class="logged-user-role">
                        Admin
                      </div>
                    </div>
                  </div>
                  <div class="bg-icon">
                    <i class="os-icon picons-thin-icon-thin-0710_business_tie_user_profile_avatar_man_male"></i>
                  </div>
                  <ul>
                    <li>
                      <a href="<?php echo base_url();?>login/logout"><i class="os-icon picons-thin-icon-thin-0040_exit_logout_door_emergency_outside"></i><span>Salir</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <ul class="main-menu">
               <li class="main-menu <?php if($page_name == 'tablero') echo 'active';?>">
                <a href="<?php echo base_url();?>admin/tablero/">
                  <div class="icon-w">
                    <div class="os-icon picons-thin-icon-thin-0045_home_house"></div>
                  </div>
                  <span>Tablero</span></a>
              </li>
              <li class="main-menu <?php if($page_name == 'medicos' || $page_name == 'nuevo_medico') echo 'active';?>">
                <a href="<?php echo base_url();?>admin/medicos/">
                  <div class="icon-w">
                    <div class="os-icon picons-thin-icon-thin-0710_business_tie_user_profile_avatar_man_male"></div>
                  </div>
                  <span>Médicos</span></a>
              </li>
              <li class="main-menu <?php if($page_name == 'pacientes') echo 'active';?>">
                <a href="<?php echo base_url();?>admin/pacientes/">
                  <div class="icon-w">
                    <div class="os-icon picons-thin-icon-thin-0704_users_profile_group_couple_man_woman"></div>
                  </div>
                  <span>Pacientes</span></a>
              </li>
              <li class="main-menu <?php if($page_name == 'citas') echo 'active';?>">
                <a href="<?php echo base_url();?>admin/citas/">
                  <div class="icon-w">
                    <div class="picons-thin-icon-thin-0073_documents_files_paper_text_archive_copy"></div>
                  </div>
                  <span>Citas</span></a>
              </li>
            </ul>
          </div>
</div>