<!DOCTYPE html>
<html>
<head>
	<title> BlogLAMP </title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/Bootstrap.min.css'); ?>">

	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-primary">
<div class="container">
      <div class="navbar-brand">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
        <div id="navbar">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
               <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
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
        	<li><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
         	 <li><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
        </ul>
      </div>
    </div>
  </div>  
 </nav>





