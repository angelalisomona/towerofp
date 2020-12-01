<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Taz Project</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/jquery1.11.3.min.js')); ?>"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Taz Project
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#submit').click(function () {
                let keyWord = $('#search').val();
                load_form(keyWord);
            });

            function load_form(targetId = '') {
                $.ajax({
                    url:"<?php echo e(url('/search-farmer')); ?>",
                    method:"GET",
                    data:{targetId:targetId},
                    dataType:"json",
                    success:function (data) {
                        console.log(data);

                        let form = "";

                        if (data != null){
                            form += '<p>Nrc: ';
                            form += '<input type="text" placeholder="nrc" value="'+data.nrc+'">';
                            form += '</p>';

                            form += '<p>Name: ';
                            form += '<input type="text" placeholder="name" value="'+data.name+'">';
                            form += '</p>';

                            form += '<p>Merchant: ';
                            form += '<input type="text" placeholder="merchant" value="'+data.merchant+'">';
                            form += '</p>';

                            form += '<p>VZ: ';
                            form += '<input type="text" placeholder="vz" value="'+data.vz+'">';
                            form += '</p>';

                            form += '<input type="submit" name="save" value="Submit">';
                        } else {
                            form += '<p>No Match Found.</p>';
                        }

                        $('#form-block').html(form);
                    }
                });
            }
        });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\taz-project\resources\views/layouts/app.blade.php ENDPATH**/ ?>