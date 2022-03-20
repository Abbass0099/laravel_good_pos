<?php $__env->startSection('title'); ?>
    Categories
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<div class="row">
		<div class="col-md-8">
			<profile></profile>
		</div>

		<div class="col-md-4">
			<password></password>
		</div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('laravel_dashboard.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>