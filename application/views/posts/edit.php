<h2><?= $title; ?></h2><br>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>

  <input type="hidden" name="id" value="<?php echo $post['id']; ?>">

  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" value="<?php echo $post['title']?>">
  </div>
  
  <br>
  
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor"class="form-control" name="body"><?php echo $post['body']?></textarea>
  </div>

  <br>

  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option> 
      <?php endforeach; ?>
    </select>
  </div>

  <br>
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>