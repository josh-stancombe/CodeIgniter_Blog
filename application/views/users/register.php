<?php echo validation_errors();?>

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-6 offset-3">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<br>
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name">
				<br>

				<label>Postcode</label>
				<input type="text" class="form-control" name="postcode" placeholder="Postcode">
				<br>
				
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
				<br>

				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Userame">
				<br>

				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
				<br>

				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
				<br><br>

				<button type="submit" class="btn btn-primary col-12">Submit</button>
			</div>
		</div>
	</div>

<?php echo form_close(); ?> 