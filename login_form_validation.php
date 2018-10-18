<?php include_once 'header.php';?>
<div class = "container">
	<div class="wrapper">
		
		<form action="<?php echo base_url('login_controller/login_next');?>" method="post" name="Login_Form" 
			class="form-signin">     
			
		    <h3 class="form-signin-heading" style="color:orange">Admin Login Page</h3>
			  <hr class="colorgraph"><br>

			  <input type="text" class="form-control" name="Login" placeholder="Username or Email" />
	  			<?php echo form_error('Login')?>

			 <input type="password" class="form-control" name="Password" placeholder="Password"/>     		  
			 	<?php echo form_error('Password')?>

			  <button class="btn btn-lg btn-primary btn-block"  style="color:yellow" name="Submit" value="Login" 
			  type="Submit">Login</button> 
        </form>			
	</div>
</div>

<?php include_once 'footer.php';?>
