

<?php $__env->startSection('title', 'crearCursos'); ?>

<?php $__env->startSection('content'); ?>

<style>

    body{

        background: black;

    }

    h1{

        color: red;

    }

    label{

        color: red;

    }

    .error-message {

        color: red;
        /* Otros estilos personalizados */
    }

</style>

    <h1>Bienvenida, docente. En este formulario te crearás tu usuario.</h1>

    <form action="<?php echo e(route('teachers.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <label>

            Nombre: 
            <br>

            <input type="text" name="name" value="<?php echo e(old('name')); ?>">

        </label>

        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error-message">

                <br>
                <span>*<?php echo e($message); ?></span>
                <br>

            </div>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>

        <label>

            Rama a la que se dedica: 
            <br>

            <input type="text" name="branch" value="<?php echo e(old('branch')); ?>">

        </label>

        <?php $__errorArgs = ['branch'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

            <div class="error-message">

                <br>
                <span>*<?php echo e($message); ?></span>
                <br>

            </div>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>

        <label>

            Email: 
            <br>

            <input type="email" name="email" value="<?php echo e(old('email')); ?>">

        </label>

        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

            <div class="error-message">

                <br>
                <span>*<?php echo e($message); ?></span>
                <br>

            </div>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>

        <label>

            Contraseña: 
            <br>

            <input type="password" name="password">

        </label>

        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

            <div class="error-message">
                    
                <br>
                <span>*<?php echo e($message); ?></span>
                <br>

            </div>

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

        <button type="submit" style="color:red">Crear docente</button>

    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi proyecto\escuelaLaravel\escuelaLaravel\resources\views/teachers/create.blade.php ENDPATH**/ ?>