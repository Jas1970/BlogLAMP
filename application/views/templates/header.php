<!DOCTYPE html>
<html>
<head>
  <title> BlogLAMP </title>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/Bootstrap.min.css'); ?>">

  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

</head>
<body>
<div class="container">
<nav class="navbar navbar-expand navbar-dark bg-primary">
      <div class="navbar-brand">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">ciBlog</a>
      </div>
      <div>
          <ul class="navbar-nav mr-auto">
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
        </div>
          <div>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a></li>

            <li><a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
            <li><a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
          </ul>
        </div>
   </nav>
   <!-- Flash messages -->
   <?php if($this->session->flashdata('user_registered')): ?>
    <?php echo '<p class= "alert alert-sucess">'.$this->session->flashdata('user_registered').'</p>'; ?>      
   <?php endif; ?>

   <?php if($this->session->flashdata('post_created')): ?>
    <?php echo '<p class= "alert alert-sucess">'.$this->session->flashdata('post_created').'</p>'; ?>      
   <?php endif; ?>

   <?php if($this->session->flashdata('post_updated')): ?>
    <?php echo '<p class= "alert alert-sucess">'.$this->session->flashdata('post_updated').'</p>'; ?>      
   <?php endif; ?>


   <?php if($this->session->flashdata('category_created')): ?>
    <?php echo '<p class= "alert alert-sucess">'.$this->session->flashdata('category_created').'</p>'; ?>      
   <?php endif; ?>

   <?php if($this->session->flashdata('post_deleted')): ?>
    <?php echo '<p class= "alert alert-sucess">'.$this->session->flashdata('post_deleted').'</p>'; ?>      
   <?php endif; ?>


