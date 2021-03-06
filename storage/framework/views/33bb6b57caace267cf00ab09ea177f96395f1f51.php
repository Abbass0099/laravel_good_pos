<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>" data-parsley-validate>
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>"
                                           required
                                           autofocus
                                           data-parsley-required-message="Name is required"
                                           data-parsley-minLength="5"
                                           data-parsley-minLength-message="Name cannot be less than 5 characters."
                                           data-parsley-maxLength="20"
                                           data-parsley-pattern="\w+[a-zA-Z] \w+[a-zA-Z]"
                                           data-parsley-pattern-message="Name must be 2 words long without any digits "
                                           data-parsley-maxLength-message="Name cannot be more than 20 characters."
                                           data-parsley-trigger="change focusout"
                                    >

                                    <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                                           required
                                           data-parsley-required-message="Email is required"
                                           data-parsley-trigger="change focusout"
                                    >

                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password"
                                           required
                                           data-parsley-minLength="8"
                                           data-parsley-required-message="Password field required."
                                           data-parsley-minLength-message="Minimum password length is 8 characters."
                                           data-parsley-trigger="change focusout"
                                    >

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                           required
                                           data-parsley-equalto="#password"
                                           data-parsley-required-message="Confirm Password is required."
                                           data-parsley-equalto-message="Confirm Password not equal to Password"
                                           data-parsley-trigger="change focusout"
                                    >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-sign-in"></i>
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>