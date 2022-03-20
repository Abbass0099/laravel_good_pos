<?php $__env->startSection('title'); ?>
    Settings
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<upload-csv></upload-csv>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('laravel_dashboard.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>