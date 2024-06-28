

<?php $__env->startSection('title', 'Teacher edit'); ?>

<?php $__env->startSection('content'); ?>

    <h1><u><p>Hola, <?php echo e($teacher->name); ?>. Acá podrás editar tu perfil</u></p></h1>

    <form action="<?php echo e(route('teachers.update', $teacher ->teacherId)); ?>" method="POST" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <?php echo method_field('put'); ?>

        <label>
            
            Nombre: 
            <br>

            <input type="text" name="name" value="<?php echo e(old('name', $teacher->name)); ?>">

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

            Contraseña:
            <br>

            <input type="password" name="password" value="########">

        </label>

        <?php $__errorArgs = ['password'];
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

            Repetir contraseña: 
            <br>

            <input type="password" name="password_confirmation">

        </label>

        <br>

        <label>

            Rama 
            <br>

            <input type="text" name="branch" value="<?php echo e(old('branch', $teacher->branch)); ?>">

        </label>

        <?php $__errorArgs = ['branch'];
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

            Foto de perfil
            <br>

            <input type="file" name="photo">

        </label>

        <br>

        <button type="submit">Actualizar usuario</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi proyecto\escuelaLaravel\escuelaLaravel\resources\views/teachers/edit.blade.php ENDPATH**/ ?>