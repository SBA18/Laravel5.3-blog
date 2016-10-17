<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <h3><a href="<?php echo e(route('news.show', $post)); ?>"><?php echo e($post->title); ?></a></h3>
        <p><em>create by : Sawers at <?php echo e($post->created_at->diffForHumans()); ?></em></p>
        <?php if($post->category): ?>
            <p><em><?php echo e($post->category->name); ?></em></p>
         <?php endif; ?>

        <p><?php echo e($post->content); ?></p>
        <p><a href="<?php echo e(route('news.edit', $post)); ?>" class="btn btn-primary">Edit</a></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.default.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>