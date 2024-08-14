<?php $__env->startSection('content'); ?>


<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

        

             

            </div>


        </div>
    </div>
</section>


<div class="col-lg-5 col-12 mx-auto">
    <form class="custom-form ebook-download-form bg-white shadow  my-5"  action="<?php echo e(route('login')); ?>" method="post"
        role="form">
        <?php echo csrf_field(); ?>

        <div class="text-center mb-5">
            <h2 class="mb-1">Login</h2>
        </div>

        <div class="ebook-download-form-body">
            <div class="input-group mb-4">
             


                    <input id="email"    type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="E-Mail Address" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <span class="input-group-text" id="basic-addon2">
                        <i class="custom-form-icon bi-envelope"></i>
                    </span>

             
            </div>

            <div class="input-group mb-4">
               

                    <input id="password" type="password" placeholder="Password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <span class="input-group-text" id="basic-addon1">
                        <i class="custom-form-icon bi-eye"></i>
                    </span>
            
            </div>

            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

            <label class="form-check-label" for="remember">
                <?php echo e(__('Remember Me')); ?>

            </label>

            <div class="col-lg-8 col-md-10 col-8 mx-auto my-3">
                <button type="submit" class="form-control">Login</button>
            </div>


            <?php if(Route::has('password.request')): ?>
            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                <?php echo e(__('Forgot Your Password?')); ?>

            </a>
        <?php endif; ?>

        </div>
    </form>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\ebook\resources\views/auth/login.blade.php ENDPATH**/ ?>