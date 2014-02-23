<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application Name - Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
 
<!-- StyleSheet -->
<link href="<?php echo base_url();?>public/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>
 
<body>
<style>
body{background-color: #F7F7F6;}
.login{padding-top: 65px;}
.center{float: none; margin-left: auto; margin-right: auto;}
</style>

<!-- Navigation Bar -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
 
            </a>
 
    <a href="#" class="brand">Application Name</a>
 
    <div class="nav-collapse collapse pull-right">
        <ul class="nav">
            <li><a href="#forgot" data-toggle="modal"><i class="icon-user icon-white"></i> Forgot Password</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#contact" data-toggle="modal"><i class="icon-envelope icon-white"></i> Contact Us</a></li>
            <li class="divider-vertical"></li>
 
        </ul>
    </div>
 
    </div>
  </div>
</div>
<!-- Navigation Ends -->
 
<!-- Main Container -->
<section>
<?php $this->load->view($file); ?>

</section>
<!-- Main Container Ends -->
 
<!-- Forgot Password Model Box -->
<div id="forgot" class="modal hide fade in" style="display: none; ">
<div class="modal-header">
<a class="close" data-dismiss="modal">×</a>
<h3>Forgot Password</h3>
</div>
<div class="modal-body">
<p>Enter your username to reset the password</p>
<form>
      <div class="controls controls-row">
          <input id="name" name="name" type="text" class="span3" placeholder="Name" />
      </div>
 
</form>
</div>
<div class="modal-footer">
<a href="#" class="btn btn-primary">Submit</a>
<a href="#" class="btn" data-dismiss="modal">Close</a>
</div>
</div>
 
<!-- Contact Us Model Box -->
<div id="contact" class="modal hide fade in" style="display: none; ">
<div class="modal-header">
<a class="close" data-dismiss="modal">×</a>
<h3>Contact Us</h3>
</div>
<div class="modal-body">
<form>
      <div class="controls controls-row">
          <input id="name" name="name" type="text" class="span3" placeholder="Name" />
      </div>
 
       <div class="controls controls-row">
       <input id="email" name="email" type="email" class="span3" placeholder="Email address" />
       </div>
 
      <div class="controls">
          <textarea id="message" name="message" class="span5" placeholder="Your Message" rows="5"></textarea>
      </div>
 
  </form>
</div>
 
<div class="modal-footer">
<a href="#" class="btn btn-primary">Submit</a>
<a href="#" class="btn" data-dismiss="modal">Close</a>
</div>
</div>
 
<!-- JavaScript -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/bootstrap/js/bootstrap.js" ></script>
</body>
</html>

