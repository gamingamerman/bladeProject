<?php $__env->startSection('titulo', ''); ?>
    
<?php $__env->startSection('menu'); ?>
##parent-placeholder-252a25667dc7c65fe0e9bf62d474bbab9bab4068##
<ul>
    <li><a href="#">Proveedores</a></li>
    <li><a href="#">Sección 2</a></li>
</ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <?php $__empty_1 = true; $__currentLoopData = $frutas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <?php echo $__env->make('layouts.fruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php echo $__env->make('layouts.vacio', ['elementos' => 'frutas'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php if ($__env->exists('layouts.nohay', ['elementos' => 'verdura'])) echo $__env->make('layouts.nohay', ['elementos' => 'verdura'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->renderWhen($boolean, 'view.name', ['some' => 'data'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
        @includeUnless($boolean, 'view.name', ['some' => 'data'])
        <?php echo $__env->first(['view.name', 'variable'], ['some' => 'data'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/bladeProject/views/layouts/child2.blade.php ENDPATH**/ ?>