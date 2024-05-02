

<?php $__env->startSection('title', 'docentes'); ?>

<style>

    #myTable {

        width: 100%;
        
    }

</style>

<?php $__env->startSection('content'); ?>

    <table class="table table-striped table-dark table-responsive" id="myTable">

        <thead>

            <h1 align="center">Administrador <?php echo e(session()->get('name')); ?>: acá podrás ver el listado de docentes.</h1>

            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Rama</th>
                <th scope="col">Rol</th>
                <th scope="col">Fecha de creación</th>
                <th scope="col"><i class="bi bi-brush" style="color:yellow">EDITAR</i></th>
                <th scope="col"><i class="bi bi-x-octagon-fill" style="color:red">ELIMINAR</i></th>
            </tr>

        </thead>

        <tbody>

            <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <tr>

                    <th scope="row">1</th>
                    <td> <?php echo e($teacher->teacherId); ?> </td>
                    <td><?php echo e($teacher->name); ?></td>
                    <td><?php echo e($teacher->email); ?></td>
                    <td><?php echo e($teacher->branch); ?></td>
                    <td><?php echo e($teacher->rol); ?></td>
                    <td><?php echo e($teacher->created_at); ?></td>
                    <td>edit</td>
                    <td> <a href="<?php echo e(route('teachers.destroy', $teacher->teacherId)); ?>" style="color:red"> Eliminar </a> </td>
        
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
        
      </table>

    <?php echo e($teachers->links()); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi proyecto\escuelaLaravel\escuelaLaravel\resources\views/teachers/index.blade.php ENDPATH**/ ?>