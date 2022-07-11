
<?php $__env->startSection('titulo','Crear'); ?>
<?php $__env->startSection('contenido'); ?>
	<a href="<?php echo e(route('venta.index')); ?>">Volver</a>
    <form method="post" action="<?php echo e(route('venta.store')); ?>">
        <?php echo csrf_field(); ?> <!--generacion automatica de token para peticiones de tipo POST -->
        Producto: </br>
        <input type="text" name="producto" /></br>
        Cantidad: </br>
        <input type="text" name="cantidad" /></br>
        Precio: </br>
        <input type="text" name="precio" /></br>
        Total: </br>
        <input type="text" name="total" /></br>
        <input type="submit" value="Enviar"/>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.miPlantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DSS\EjemploLaravel\resources\views/venta/create.blade.php ENDPATH**/ ?>