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

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal">
                    <fieldset>
                        <legend class="text-center header">Ver libro</legend>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Título</span>
                            <div class="col-md-9">
                                <input type="text" name="name" value="<?php echo e($book->name); ?>" class="form-control" placeholder="Título" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Autor</span>
                            <div class="col-md-9">
                                <input type="text" name="autor" value="<?php echo e($book->autor); ?>" class="form-control" placeholder="Autor" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Año</span>
                            <div class="col-md-9">
                                <input type="text" name="anio" value="<?php echo e($book->anio); ?>" class="form-control" placeholder="Año" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Copias</span>
                            <div class="col-md-9">
                                <input type="text" name="copy" value="<?php echo e($book->copy); ?>" class="form-control" placeholder="Copias" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Editora</span>
                            <div class="col-md-9">
                                <input type="text" name="editora" value="<?php echo e($book->editora); ?>" class="form-control" placeholder="Editora" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-center"><i class="fa fa-user bigicon"></i>Detalles</span>
                            <div class="col-md-9">
                                <input type="text" name="detail" value="<?php echo e($book->detail); ?>" class="form-control" placeholder="Detalles" readonly>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inicio\resources\views/books/show.blade.php ENDPATH**/ ?>