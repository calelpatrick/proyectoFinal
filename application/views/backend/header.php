        <header id="navbar">
            <div id="navbar-container" class="boxed">
                <div class="navbar-header">
                    <a href="<?php echo base_url();?>admin/tablero/" class="navbar-brand">
                        <img src="<?php echo base_url();?>backend/img/logo.png" alt="Mr Cell" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">Mr Cell</span>
                        </div>
                    </a>
                </div>
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-view-list"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="demo-pli-bell"></i>
                                <span class="badge badge-header badge-danger"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md">
                                <div class="pad-all bord-btm">
                                    <p class="text-semibold text-main mar-no">Notificaciones.</p>
                                </div>
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">
                                            <li>
                                                <a class="media" href="#">
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x text-main"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="mar-no text-nowrap text-main text-semibold">El producto XXXXX esta agotado</h5>
                                                        <small>Se debería agregar más o archivar el producto.</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-top-links pull-right">
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <i class="demo-pli-male"></i>
                                </span>
                                <div class="username hidden-xs"><?php echo $this->db->get_where('admin', array('admin_id' => $this->session->userdata('login_user_id')))->row()->name;?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li>
                                        <a href="<?php echo base_url();?>admin/perfil/">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> Mi cuenta
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>admin/ajustes/">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Ajustes
                                        </a>
                                    </li>
                                </ul>
                                <div class="pad-all text-right">
                                    <a href="<?php echo base_url();?>login/logout" class="btn btn-primary">
                                        <i class="demo-pli-unlock"></i> Salir
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>