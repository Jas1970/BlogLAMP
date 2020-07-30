<!DOCTYPE html>
<html>
<head>
	<title> BlogLAMP </title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/Bootstrap.min.css'); ?>">

	<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary nav-fill w-100">
<div class="container">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">Navbar</a>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
    </ul>

  </div>
</nav>
