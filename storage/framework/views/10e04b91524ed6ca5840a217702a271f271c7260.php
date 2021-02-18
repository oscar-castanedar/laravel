<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Librería Castañeda</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('books.create')); ?>">Agregar nuevo libro</a>
            </div>
        </div>
    </div>
    <hr>
    
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>


    <table class="table table-striped table-dark">
        <tr>
            <th>No</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Copias</th>
            <th>Editora</th>
            <th>Detalles</th>
            <th width="280px">Acción</th>
        </tr>
	    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <tr>
	        <td><?php echo e(++$i); ?></td>
	        <td><?php echo e($book->name); ?></td>
            <td><?php echo e($book->autor); ?></td>
            <td><?php echo e($book->anio); ?></td>
            <td><?php echo e($book->copy); ?></td>
            <td><?php echo e($book->editora); ?></td>
	        <td><?php echo e($book->detail); ?></td>
	        <td>
                <form action="<?php echo e(route('books.destroy',$book->id)); ?>" method="POST">
                    <a class="btn btn-info" href="<?php echo e(route('books.show',$book->id)); ?>">Ver</a>
                    <a class="btn btn-primary" href="<?php echo e(route('books.edit',$book->id)); ?>">Editar</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
	        </td>
	    </tr>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inicio\resources\views/books/index.blade.php ENDPATH**/ ?>