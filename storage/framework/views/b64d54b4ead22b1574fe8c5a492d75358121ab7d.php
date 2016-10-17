
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog - <?php echo $__env->yieldContent('title'); ?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

</head>

<body style="padding-top: 50px;">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/news">Home</a></li>
                <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                <li><a href="<?php echo e(route('news.create')); ?>">Create post</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template" style="padding-top: 40px;">
        <div class="row">
            <div class="col-sm-8">
                <h1><?php echo $__env->yieldContent('title'); ?></h1>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <div class="col-sm-4">
                <?php $__env->startSection('sidebar'); ?>
                    <h3>Template sidebar</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, deleniti ex facilis iure nostrum odit qui suscipit velit! Ab accusantium impedit incidunt inventore maxime officia pariatur qui quia quisquam quod!</p>
                <?php echo $__env->yieldSection(); ?>
            </div>
        </div>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->

</body>
</html>
