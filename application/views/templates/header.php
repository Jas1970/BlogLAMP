<!DOCTYPE html>
<html>
<head>
	<title> BlogLAMP </title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/Bootstrap.min.css'); ?>">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary nav-fill w-80">
  <a class="navbar-brand" href="#">Navbar</a>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>posts">Posts</a>
      </li>
    </ul>
  </div>
</nav>
