<h2><?php echo $post['title'];?></h2>
<br>

<div class="row">
	<div class="col-md-3">
		<img class="postImg thumbnail" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
	</div>
	
	<div class="col-md-9">
		
		<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
		
		<div class="post-body">
			<?php echo $post['body']; ?>
		</div>
	</div>
</div>


<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
	<hr>
	<?php echo form_open('/posts/delete/' .$post['id']); ?>
		
		<!-- Should this anchor be within the form ?! -->
		<a class="btn btn-secondary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>">Edit</a>

		<input type="submit" value="Delete" class="btn btn-danger">

	</form>
	
<?php endif; ?>


<hr>
<h3>Comments</h3>
<br>
<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="card card-body bg-light">
			<h6><?php echo $comment['body']; ?></h6>
			<br>
			<strong><?php echo $comment['name']; ?></strong>
			<em><?php echo $comment['created_at']; ?></em>
		</div>
		<br>
	<?php endforeach; ?>

<?php else : ?>
	<p>No comments to display</p>

<?php endif; ?>



<hr>
<h3>Add Comment</h3>
<br>

<?php echo validation_errors(); ?>

<?php echo form_open('comments/create/'.$post['id']); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea name="body" class="form-control"></textarea>
	</div>
	<input type="hidden" name="slug" value ="<?php echo $post['slug']; ?>">
	<br>
	<button class="btn btn-primary" type="submit">Submit</button>
</form>