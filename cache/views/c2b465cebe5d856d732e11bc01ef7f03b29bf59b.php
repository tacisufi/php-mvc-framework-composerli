<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>merhaba</h1>
<h1><?php echo e($sayi); ?></h1>

<h1><?php echo e($deger); ?></h1>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e(print_r($row)); ?><br>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<hr>

<?php if($numara==2): ?>

    numara 1 eşitttir
    <?php endif; ?>
</body>
</html>