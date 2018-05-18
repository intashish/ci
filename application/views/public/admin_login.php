<?php include('public_headers.php');?>

<div class="container">
<?php echo form_open('login/admin_login',['class'=> 'form-horizontal']); ?>
<form>
  <fieldset>
    <legend>Admin Login</legend>
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<?php echo form_input(['name'=>'username', 'id'=>'exampleInputEmail1', 'class'=>'form-control', 'placeholder'=>'username']);?>
			</div>
		</div>
		<div class="col-lg-6">
			<?php echo form_error('username'); ?>
		</div>
	</div>
    
	<div class="row">
		<div class="col-lg-6">
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<?php echo form_password(['name'=>'password', 'class'=>'form-control', 'placeholder'=>'Password']);?>
			</div>
		</div>
		<div class="col-lg-6">
				<?php echo form_error('password'); ?>
		</div>
	</div>
    
    
	<?php echo form_submit(['name'=>'submit', 'value'=>'Login', 'class'=>'btn btn-primary']); 
		  echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-primary']);
	?>
  </fieldset>
</form>
</div>
<?php include('public_footer.php'); ?>