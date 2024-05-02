

<?php $__env->startSection('title', 'Cursos edit'); ?>

<?php $__env->startSection('content'); ?>

    <h1><u><p>Acá podrás editar cursos</u></p></h1>

    <form action="<?php echo e(route('courses.update', $course ->courseId)); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <?php echo method_field('put'); ?>

        <label>
            
            Nombre del curso : 
            <br>

            <input type="text" name="name" value="<?php echo e(old('name', $course->name)); ?>">

        </label>

        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <span>*<?php echo e($message); ?></span>
            <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>
        
        <label>

            Materia 
            <br>

            <input type="text" name="subject" value="<?php echo e(old('subject', $course->subject)); ?>">

        </label>

        <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <span>*<?php echo e($message); ?></span>
            <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>

        <label>

            Escuela: 
            <br>

            <input type="text" name="school" value="<?php echo e(old('school', $course->school)); ?>">

        </label>

        <?php $__errorArgs = ['school'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <span>*<?php echo e($message); ?></span>
            <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>

        <label>

            Cantidad de alumnos: 
            <br>

            <input type="number" name="numberStudents" value="<?php echo e(old('numberStudents', $course->numberStudents)); ?>">

        </label>

        <?php $__errorArgs = ['numberStudents'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <span>*<?php echo e($message); ?></span>
            <br>
         <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>

        <label>

            Cantidad de notas: 
            <br>

            <input type="number" name="numberGrades" value="<?php echo e(old('numberGrades', $course->numberGrades)); ?>">

        </label>

        <?php $__errorArgs = ['numberGrades'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <span>*<?php echo e($message); ?></span>
            <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>

        <button class="btn btn-success" type="submit">Actualizar formulario</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi proyecto\escuelaLaravel\escuelaLaravel\resources\views/courses/edit.blade.php ENDPATH**/ ?>