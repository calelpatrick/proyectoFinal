<!DOCTYPE html>  
<html lang="en">
<head><?php
    $system_title   =   $this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EduAppGT - School Management System" />
    <meta name="author" content="Web Studio Guatemala" />
    <title><?php echo get_phrase('Login'); ?> | <?php echo $system_title;?></title>
    <link href="backend/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">
    <link rel="icon" type="ico" sizes="16x16" href="style/images/favicon.ico">
    <link href="backend/css/colors/blue.css" id="theme"  rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
</head>
<body>
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<script type="text/javascript">var baseurl = '<?php echo base_url();?>';</script>


<section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
    <div class="white-box" id="login">
    <form class="form-horizontal form-material" method="post" role="form" id="form_login">
    <br><br><br><br><br>
    <br><br>
    <a href="<?php echo base_url();?>" class="text-center db"><img src="<?php echo base_url();?>uploads/log.png" alt="Home" /> <hr></a>

        <div class="form-group ">
          <div class="col-xs-12">
            <input type="text" class="form-control" name="user" id="email" placeholder="<?php echo get_phrase('email'); ?>" autocomplete="off" >
          </div>
        </div>

         <div class="form-group">
          <div class="col-xs-12">
            <input type="password" class="form-control" name="password" id="password" placeholder="<?php echo get_phrase('password'); ?>" autocomplete="off">
          </div>
        </div>

        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit"><?php echo get_phrase('login'); ?></button>
          </div>
        </div>

         <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Or <a href="<?php echo base_url();?>index.php?login/create_new_account/" class="text-primary m-l-5"><b><?php echo get_phrase('create_account'); ?></b></a></p>
          </div>
        </div>
</form>
</div>
</div>
</section>


<script src="assets/js/gsap/main-gsap.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/neon-login.js"></script>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<script src="backend/bower_components/jquery/dist/jquery.min.js"></script>
<script src="backend/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="backend/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<script src="backend/js/jquery.slimscroll.js"></script>
<script src="backend/js/waves.js"></script>
<script src="backend/js/custom.min.js"></script>
<script src="backend/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>