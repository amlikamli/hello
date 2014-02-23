<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Points System</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
 
<!-- StyleSheet -->
<link href="<?php echo base_url();?>public/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/bootstrap/css/dashboard.css" rel="stylesheet">
</head>
 
<body>
<!-- Navigation Bar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
 
            </a>
 
    <a href="#" class="brand">Points System</a>
 
    <div class="nav-collapse collapse pull-right">
        <ul class="nav">
			<li><a class="test" href="<?php echo base_url()?>home/transfer"><i class="icon-user icon-white"></i> Transfer points</a></li>
            <li class="divider-vertical"></li>
            <li><a href="<?php echo base_url()?>home/reports">><i class="icon-user icon-white"></i> Reports</a></li>
            <li class="divider-vertical"></li>
            <li><a href="home/logout"><i class="icon-envelope icon-white"></i>Logout</a></li>
            <li class="divider-vertical"></li>
 
        </ul>
    </div>
 
    </div>
  </div>
</div>
<!-- Navigation Ends -->
 
<?php $this->load->view($file); ?>

<!-- Main Container Ends -->
<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>public/bootstrap/js/bootstrap.js" ></script>
</body>
</html>

