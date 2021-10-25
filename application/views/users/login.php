<?php echo form_open('users/login'); ?>

<div class="row">
	<div class="col-md-4 offset-4">
		<br>
		<h1 class="text-center"><?php echo $title; ?></h1>
		<br>
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
		</div>
		<br>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
		</div>
		<br>
		<button type="submit" class="btn btn-primary col-12">Login</button>
	</div>
</div>	

<?php echo form_close(); ?>
