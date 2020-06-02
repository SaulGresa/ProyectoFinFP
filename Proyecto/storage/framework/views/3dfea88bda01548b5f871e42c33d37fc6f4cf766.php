<?php $__env->startSection("contenido"); ?>
<h3>Datos del producto</h3>
<div class="container">
    Codigo <?php echo e($producto->cod); ?><br />
    Nombre <?php echo e($producto->nombre_corto); ?><br />
    Precio <?php echo e($producto->PVP); ?><br />
    Descripcion <?php echo e($producto->descripcion); ?><br />
    Familia <?php echo e($producto->familia); ?><br />
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/saul/prueba1/resources/views/tienda/editar.blade.php ENDPATH**/ ?>