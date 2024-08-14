<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>ebook landing page template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link href=<?php echo e(asset('css/bootstrap.min.css')); ?> rel="stylesheet">

    <link href=<?php echo e(asset('css/bootstrap-icons.css')); ?> rel="stylesheet">

    <link href=<?php echo e(asset('css/templatemo-ebook-landing.css')); ?> rel="stylesheet">
    <!--

TemplateMo 588 ebook landing

https://templatemo.com/tm-588-ebook-landing

-->
</head>

<body>
    <div id="app">
        <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <i class="navbar-brand-icon bi-book me-2"></i>
                    <span>ebook</span>
                </a>

                <div class="d-lg-none ms-auto me-3">
                    <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                        <i class="btn-icon bi-cloud-download"></i>
                        <span>Download</span><!-- duplicated another one below for mobile -->
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto me-lg-4">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">The Book</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Author</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>

                        <li>


                            <!-- Authentication Links -->
                            <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link  dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                



                                <div class="dropdown-menu dropdown nav-item d-none d-lg-block dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item dropdown nav-link d-lg-block " href=<?php echo e(route('logout')); ?>

                                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action=<?php echo e(route('logout')); ?> method="POST" class="d-none collapse navbar-collapse nav-link dropdown  nav-item">
                                        <?php echo csrf_field(); ?>
                                                                                            
                                                   
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                        </li>

                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Download</span><!-- duplicated above one for mobile -->
                        </a>
                    </div>
                </div>
            </div>
        </nav>

       
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <!-- JAVASCRIPT FILES -->
    <script src=<?php echo e(asset('js/jquery.min.js')); ?>></script>
    <script src=<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>></script>
    <script src=<?php echo e(asset('js/jquery.sticky.js')); ?>></script>
    <script src=<?php echo e(asset('js/click-scroll.js')); ?>></script>
    <script src=<?php echo e(asset('js/custom.js')); ?>></script>
</body>

</html>
<?php /**PATH C:\laravel\ebook\resources\views/layouts/app.blade.php ENDPATH**/ ?>