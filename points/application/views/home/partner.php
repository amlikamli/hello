<div class="container login">
    <div class="row ">
        <div class="center span4 well">
            <legend>Partner Sign in</legend>
            <?php //if(validation_errors()){?>
<!-- 			<div class="alert alert-error"> -->
                
<!--             </div> -->
               <? //} ?>
			<form class="form-signin" role="form" action="partner" name="partner" method="post">
            	<input type="text" id="username" class="span4" name="username" placeholder="Username" />
            	<input type="password" id="password" class="span4" name="password" placeholder="Password" />
            	<input type="hidden" id="url" class="span4" name="url" placeholder="<?php echo $tansfer['partner']?>" />
            	<input type="hidden" id="aa" name="sign_partner" value="yes" />
            	
           
            <button type="submit" name="submit" class="btn btn-primary btn-block">Go </button>
            </form>
        </div>
    </div>
</div>
<p class="text-center muted ">&copy; Copyright 2013 - Application Name</p>