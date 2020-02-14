<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(mix('/css/bootstrap/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('/css/vendor.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(mix('/css/style.css')); ?>">
    <title>Jolitos</title>
</head>
<body>
<div class="site-wrap">
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
</div>
<?php echo $__env->make('skelbimai/_partials/admin_panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('skelbimai/_partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('skelbimai/_partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<script src="<?php echo e(mix('/js/app.js')); ?>"></script>
</html><?php /**PATH /home/vagrant/code/skelbimai/resources/views/skelbimai/main.blade.php ENDPATH**/ ?>