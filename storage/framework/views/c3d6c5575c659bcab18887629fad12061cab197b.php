<?php $__env->startSection('title'); ?>
    Inventory  <span style="font-size: 16px;margin-left: 30%;">{{ today }}</span>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	<stocks></stocks>
</div>
	

<?php $__env->stopSection(); ?>



<?php echo $__env->make('laravel_dashboard.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>