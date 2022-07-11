
<?php $__env->startSection('titulo','Inicio'); ?>
<?php $__env->startSection('contenido'); ?>
	<a href="<?php echo e(route('venta.create')); ?>">Nueva materia</a>
	<table border='1' style='border-collapse:collapse'>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Producto</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
			<?php $__currentLoopData = $listaVentas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($venta->id); ?></th>
                    <td><?php echo e($venta->producto); ?></td>
                    <td><?php echo e($venta->cantidad); ?></td>
                    <td><?php echo e($venta->precio); ?></td>
                    <td><?php echo e($venta->total); ?></td>
					<td>
						<a href="#" class="btn">Modificar</a>
						<a href="#" class="btn">Eliminar</a>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>			
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.miPlantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\DSS\EjemploLaravel\resources\views/venta/index.blade.php ENDPATH**/ ?>