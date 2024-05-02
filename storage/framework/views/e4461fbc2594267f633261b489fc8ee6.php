

<?php $__env->startSection('title', 'courses'); ?>

<?php $__env->startSection('content'); ?>

    <h1 align="center">Bienvenido a la página principal de cursos</h1>

    <a href="<?php echo e(route('courses.create')); ?>">Crear curso</a>
    <br><br>

    <table class="table table-borderless">

        <thead>

          <tr>

            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Cursp</th>
            <th scope="col">Escuela</th>
            <th scope="col">Materia</th>
            <th scope="col">Cantidad de alumnos</th>
            <th scope="col">Cantidad de notas</th>
            <th scope="col" style="color:green">Entrar</th>
            <th scope="col" style="color:yellowgreen">Editar</th>
            <th scope="col" style="color:red">Eliminar</th>

          </tr>

        </thead>

        <tbody>

            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>

                    <th scope="row">1</th>
                    <td><?php echo e($course->courseId); ?></td>
                    <td><?php echo e($course->name); ?></td>
                    <td><?php echo e($course->school); ?></td>
                    <td><?php echo e($course->subject); ?></td>
                    <td><?php echo e($course->numberStudents); ?></td>
                    <td><?php echo e($course->numberGrades); ?></td>
                    <td><a class="btn btn-success" href="<?php echo e(route('courses.show', $course->courseId)); ?>">IN</a></td>
                    <td><a class="btn btn-success" href="<?php echo e(route('courses.edit', $course->courseId)); ?>"><i class="bi bi-wrench-adjustable"></i></a></td>
                    <td><a class="btn btn-success" href="<?php echo e(route('courses.destroy', $course->courseId)); ?>"><i class="bi bi-x-octagon-fill"></i></a></td>
        
                </tr>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>

      </table>

    <?php echo e($courses->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi proyecto\escuelaLaravel\escuelaLaravel\resources\views/courses/index.blade.php ENDPATH**/ ?>