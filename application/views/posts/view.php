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

<hr>

<?php echo form_open('/posts/delete/' .$post['id']); ?>
	
	<!-- Should this anchor be within the form ?! -->
	<a class="btn btn-secondary" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'];?>">Edit</a>

	<input type="submit" value="Delete" class="btn btn-danger">

</form>