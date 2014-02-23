<?php /* ?>
<link href="<?php echo base_url();?>public/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>public/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

<div id="content">
<div class="reg_form">
<div class="form_title">Sign Up</div>
<div class="form_sub_title">It's free and anyone can join</div>
 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("user/registration"); ?>
  <p>
  <label for="user_name">User Name:</label>
  <input type="text" id="username" name="username" value="<?php echo set_value('username'); ?>" />
  </p>
  <p>
  <label for="email_address">Your Email:</label>
  <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
  </p>
  <p>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
  </p>
  <p>
  <label for="con_password">Confirm Password:</label>
  <input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
  </p>
  <p>
  <input type="submit" class="btn" value="Submit" />
  
  </p>
 <?php echo form_close(); ?>
</div><!--<div class="reg_form">-->
</div><!--<div id="content">-->

<script type="text/javascript" src="<?php echo base_url();?>public/bootstrap/js/bootstrap.js" ></script>
<?php */ ?>

<div class="container login">
    <div class="row ">
        <div class="center span4 well">
            <legend>Register</legend>
            <?php if(validation_errors()){?>
			<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a> <?php echo validation_errors(); ?>
            </div>
               <? } ?>
			   <?php echo form_open('user/registration'); ?>
			
			<input type="text" class="input-xlarge" id="firstname" name="firstname" placeholder="First Name" value="<?php echo set_value('firstname'); ?>" />
			
			<input type="text" class="input-xlarge" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo set_value('lastname'); ?>" />
			
			<input type="text" class="input-xlarge" id="email" name="email_address" placeholder="Email" value="<?php echo set_value('email_address'); ?>" />
			
			<input type="text" class="input-xlarge" id="username" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" />

			<input type="password" class="input-xlarge" id="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" />
  
		   <input type="password" class="input-xlarge" id="con_password" name="con_password" placeholder="Confirm-password" value="<?php echo set_value('con_password'); ?>" />
           
            <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
            </form>
        </div>
    </div>
</div>
<p class="text-center muted ">&copy; Copyright 2013 - Application Name</p>
