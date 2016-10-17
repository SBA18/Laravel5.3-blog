<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('sidebar'); ?>
    @parent
    <h3> About Sidebar</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut beatae corporis ipsum minima nam neque vero voluptates? Alias, in tenetur. Accusamus accusantium doloribus explicabo hic iusto nemo possimus quae.</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1><?php echo e($title); ?></h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam consequuntur corporis, deleniti dolorem eius est fuga, ipsa laborum minima nihil nisi perspiciatis quasi qui quia quidem rerum voluptates voluptatum!
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A itaque maiores minus perspiciatis quo veniam vero. Accusamus at aut distinctio minima modi quibusdam repellat totam! Delectus molestiae obcaecati reprehenderit veniam?
    </p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>