<div class="container login">
    <div class="row ">
        <div class="center span4 well">
            <legend>Please Sign In</legend>
            <?php if(validation_errors()){?>
			<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a> <?php echo validation_errors(); ?>
            </div>
               <? } ?>
			   <?php echo form_open('verifylogin'); ?>
            <input type="text" id="username" class="span4" name="username" placeholder="Username" />
            <input type="password" id="password" class="span4" name="password" placeholder="Password" />
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1" /> Remember Me
            </label>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
    </div>
</div>
<p class="text-center muted ">&copy; Copyright 2013 - Application Name</p>
