<?php $__env->startSection('titulo', 'Mi titulo'); ?>
    
<?php $__env->startSection('menu'); ?>
##parent-placeholder-252a25667dc7c65fe0e9bf62d474bbab9bab4068##
<ul>
    <li><a href="#">Proveedores</a></li>
    <li><a href="#">Sección 2</a></li>
</ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <p>Hola</p>
    <p>Adios</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/bladeProject/views/layouts/child.blade.php ENDPATH**/ ?>