<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla básica</title>
</head>
<body>
    <h2><?php echo e($titulo); ?></h2>
    <p><?php echo e(time()); ?></p>
    <p><?php echo e($edad); ?> años</p>
    <?php if($edad >= 18): ?>
    <p>Contenido para adultos</p>
    <?php else: ?>
    <p>Viva Spunch bop</p>
    <ul>
    <?php endif; ?>
    <?php for($i = 0; $i<=$maximo; $i++): ?>
        <li><?php echo e($i); ?></li>
    <?php endfor; ?>
    </ul>
    <ol>
        <?php $__currentLoopData = $aficiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aficion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($aficion); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</body>
</html><?php /**PATH /var/www/bladeProject/views/plantilla1.blade.php ENDPATH**/ ?>