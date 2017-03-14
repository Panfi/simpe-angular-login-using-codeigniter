<!DOCTYPE html>
<html ng-app="app">
<head>
    <meta charset="utf-8" />
    <title>Codeigniter Demo work</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>assets/css/core.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>assets/css/pages.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css" />
</head>
<body>        
                
           
 <div ng-view></div>





<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php  echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php  echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php  echo base_url();?>assets/js/detect.js"></script>
<script src="<?php  echo base_url();?>assets/js/fastclick.js"></script>
<script src="<?php  echo base_url();?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php  echo base_url();?>assets/js/jquery.blockUI.js"></script>
<script src="<?php  echo base_url();?>assets/js/waves.js"></script>
<script src="<?php  echo base_url();?>assets/js/wow.min.js"></script>
<script src="<?php  echo base_url();?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php  echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>

<script src="<?php  echo base_url();?>assets/js/jquery.core.js"></script>
<script src="<?php  echo base_url();?>assets/js/jquery.app.js"></script>


</body>



<!-- Angular JS  -->
<script type="text/javascript">
    var BASE_URL = '<?php echo base_url();?>';
</script>    
    <script src="<?php echo base_url();?>ng/js/angular.min.js"></script>
    <script src="<?php echo base_url();?>ng/js/angular-route.min.js"></script>
    <script src="<?php echo base_url();?>ng/js/angular-cookies.min.js"></script>

    <script src="<?php echo base_url();?>ng/app.js"></script>
    <script src="<?php echo base_url();?>ng/app-services/authentication.service.js"></script>
    <script src="<?php echo base_url();?>ng/app-services/flash.service.js"></script>

    <!-- Real user service that uses an api -->
    <script src="<?php echo base_url();?>ng/app-services/user.service.js"></script>

    <!-- Fake user service for demo that uses local storage -->
   <!--  <script src="<?php echo base_url();?>ng/app-services/user.service.local-storage.js"></script> -->

    <script src="<?php echo base_url();?>ng/controllers/home_controller.js"></script>
    <script src="<?php echo base_url();?>ng/controllers/login_controller.js"></script>
    <script src="<?php echo base_url();?>ng/controllers/register_controller.js"></script>
    <script src="<?php echo base_url();?>ng/controllers/form_controller.js"></script>
</body>
</html>