<?php $__env->startSection('content'); ?>
<style>
    fieldset{
        background-color: #cdcdcd;
    }
</style>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Librería Castañeda</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('books.index')); ?>">Atrás</a>
            </div>
        </div>
    </div>
    <hr>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="<?php echo e(route('books.update',$book->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                    <fieldset>
                        <legend class="text-center header">Editar libro</legend>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Título</span>
                            <div class="col-md-9">
                                <input type="text" name="name" value="<?php echo e($book->name); ?>" class="form-control" placeholder="Título">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Autor</span>
                            <div class="col-md-9">
                                <input type="text" name="autor" value="<?php echo e($book->autor); ?>" class="form-control" placeholder="Autor">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Año</span>
                            <div class="col-md-9">
                                <input type="text" name="anio" value="<?php echo e($book->anio); ?>" class="form-control" placeholder="Año">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Copias</span>
                            <div class="col-md-9">
                                <input type="text" name="copy" value="<?php echo e($book->copy); ?>" class="form-control" placeholder="Copias">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Editora</span>
                            <div class="col-md-9">
                                <input type="text" name="editora" value="<?php echo e($book->editora); ?>" class="form-control" placeholder="Editora">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Detalles</span>
                            <div class="col-md-9">
                                <input type="text" name="detail" value="<?php echo e($book->detail); ?>" class="form-control" placeholder="Detalles">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inicio\resources\views/books/edit.blade.php ENDPATH**/ ?>