<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<!--<script language="javascript" src="https://raw.github.com/documentcloud/backbone/master/backbone.js"></script>-->
    <script language="javascript" src="https://raw.github.com/documentcloud/underscore/master/underscore-min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
	<?php get_style_sheets(); ?>
    <style>
    body{ margin-top:60px; }
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="public/favicon/ico/favicon.ico">

  </head>

  <body>

	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Custom PHP MVC Framework</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="http://www.mvc.albrowndesign.com">Home</a></li>
              <li><a href="http://www.github.com/stump201">About</a></li>
              <li><a href="http://www.albrowndesign.com/contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">


