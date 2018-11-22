<?php $title = $this->db->get_where('settings' , array('type'=>'system_title'))->row()->description; ?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <title><?php echo get_phrase('login');?> | <?php echo $title;?></title>
    
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="style/cms/favicon.png" rel="shortcut icon">
    <link href="<?php echo base_url();?>style/cms/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>style/cms/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/cms/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/cms/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/cms/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/cms/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/cms/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/cms/icon_fonts_assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/cms/icon_fonts_assets/picons-thin/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/cms/css/main.css?version=3.1" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js"></script>
  </head>
    <body class="auth-wrapper login" style="background: url('https://image.freepik.com/free-photo/scandinavian-christmas-interior-empty-wall-art-background_1961-78.jpg');background-size: cover;background-repeat: no-repeat;">
  <script type="text/javascript">var baseurl = '<?php echo base_url();?>';</script>
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="<?php echo base_url();?>"><img alt="" src="<?php echo base_url();?>uploads/logo.jpg" width="40%"></a>
        </div>
        <h4 class="auth-header">Acceder</h4>
        <div id="errorss">
          <div class="form-login-error">
            <center><a class="btn btn-sm btn-rounded btn-danger" style="color:white">Datos incorrectos</a></center>
          </div>
        </div>
        <form method="post" role="form" id="form_login">
          <div class="form-group">
            <label for="">Usuario</label><input class="form-control" id="username" placeholder="Nombre de usuario" required type="text">
            <div class="pre-icon icon-user"></div>
          </div>
          <div class="form-group">
            <label for="">Contraseña</label><input class="form-control" name="password" id="password" value="" placeholder="Contraseña" required type="password">
            <div class="pre-icon icon-lock"></div>
          </div>
          <div class="buttons-w logs row">
            <div class="col-sm-6"><button class="btn btn-rounded btn-primary">Acceder</button></div>          </div>
        </form>
      </div>
       <script src="<?php echo base_url();?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url();?>uploads/login/admin_login.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
       <script src="<?php echo base_url();?>style/cms/js/toastr.js"></script>
  </body>
  <script type="text/javascript">
    $('#errorss').hide();
  </script>
  <?php if ($this->session->flashdata('flash_message') != ""):?>

<script type="text/javascript">
  toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
</script>

<?php endif;?>

<?php if ($this->session->flashdata('error_message') != ""):?>

<script type="text/javascript">
  toastr.error('<?php echo $this->session->flashdata("error_message");?>');
</script>

<?php endif;?>
</html>