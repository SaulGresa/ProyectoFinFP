<?php $__env->startSection("contenido"); ?>

<h1>Estoy gestionando la empresa</h1>
<h3>Listado de productos</h3>
        
<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="editar" method="POST">
    <?php echo csrf_field(); ?>
    
    <?php echo e($producto->cod); ?> --- <?php echo e($producto->nombre_corto); ?> --- <?php echo e($producto->PVP); ?> Euros
    <input type="submit" value="Editar"><br />
    <input type="hidden" name="cod" value="<?php echo e($producto->cod); ?>"> 
</form>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saul/prueba1/resources/views/empresa/gestiona.blade.php ENDPATH**/ ?>