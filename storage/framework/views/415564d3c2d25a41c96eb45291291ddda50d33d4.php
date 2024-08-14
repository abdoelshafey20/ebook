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
    <form class="custom-form ebook-download-form bg-white shadow  my-5"  action="<?php echo e(route('register')); ?>" method="post"
        role="form">
        <?php echo csrf_field(); ?>

        <div class="text-center mb-5">
            <h2 class="mb-1">Register</h2>
        </div>

        <div class="ebook-download-form-body">
            <div class="input-group mb-4">
             


                <input id="name" type="text" placeholder="Name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                <?php $__errorArgs = ['name'];
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
                        <i class="custom-form-icon bi-person"></i>
                    </span>

             
            </div>




            <div class="input-group mb-4">
               
                <input id="email" placeholder="E-Mail Address" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

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
                    <span class="input-group-text" id="basic-addon1">
                        <i class="custom-form-icon bi-envelope"></i>
                    </span>
            
            </div>


            <div class="input-group mb-4">
               
                <input id="password" placeholder="Password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

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

         
         

            <div class="input-group mb-4">
               
                <input id="password-confirm" placeholder="confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    <span class="input-group-text" id="basic-addon1">
                        <i class="custom-form-icon bi-eye"></i>
                    </span>
            
            </div>

         

            <div class="col-lg-8 col-md-10 col-8 mx-auto my-3">
                <button type="submit" class="form-control">Register</button>
            </div>


         

        </div>
    </form>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\ebook\resources\views/auth/register.blade.php ENDPATH**/ ?>