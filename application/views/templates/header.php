<html>

	<head>
		<title>CodeIgnitor Blog</title>
		<link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
		<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
	</head>	

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="<?php echo base_url(); ?>">CodeIgnitor Blog</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarColor01">
		      <ul class="navbar-nav me-auto">
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>">Home
		            <!--<span class="visually-hidden">(current)</span>-->
		          </a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
		        </li>
		      </ul>
		      
		      <ul class="nav navbar-nav navbar-right">
		      	<li class="nav-item">
		      		<a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
		      	</li>
		      	<li class="nav-item">
		      		<a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
		      	</li>
		      </ul>
		    
		    </div>
		  </div>
		</nav>
		<br>
		<div class="container">


				