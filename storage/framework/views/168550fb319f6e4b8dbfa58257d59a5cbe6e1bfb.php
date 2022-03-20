<?php $__env->startSection('title'); ?>
    Sales
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<sales></sales>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('laravel_dashboard.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>