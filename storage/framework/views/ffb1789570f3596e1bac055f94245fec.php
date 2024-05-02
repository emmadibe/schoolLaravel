

<?php $__env->startSection('title', 'contactUs'); ?>

<?php $__env->startSection('content'); ?>

    <h1 align="center">Dejanos un mensaje</h1>

    <div class="row">

        <div class ="col-4">

            &nbsp;

        </div>

        <div class="col-4">

            <form action="<?php echo e(route('contactUs.store')); ?>" method="POST">
                
                <?php echo csrf_field(); ?>

                <div class="form-group">

                    <label for="name">

                        Nombre: 

                        <br>

                        <input type="text" name="name" required placeholder="Pedro" value= <?php echo e(old('name')); ?>>

                    </label>    

                    <br>

                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                        <p><strong><?php echo e($message); ?></strong></p>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

                <div class="form-group">

                    <label for="mail">

                        Email: 

                        <br>

                        <input type="email" required name="mail" placeholder="ejemplo@gmail.com" value= <?php echo e(old('mail')); ?>>

                    </label>

                    <br>

                    <?php $__errorArgs = ['mail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        
                        <p><strong><?php echo e($message); ?></strong></p>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

                <div class="form-group">

                    <label for="message">

                        Mensaje: 

                        <br>

                        <textarea required name="message" >

                            <?php echo e(old('message')); ?>


                        </textarea>

                    </label>

                    <br>

                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                        <p><strong><?php echo e($message); ?></strong></p>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>

                <button type="submit" class="btn btn-success" name="button">Enviar mensaje</button>

            </form>

        </div>

        <div class="col-4">

            &nbsp;

        </div>

        <?php if(session('info')): ?>

            <script>

                alert("<?php echo e(session('info')); ?>")

            </script>

        <?php endif; ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi proyecto\escuelaLaravel\escuelaLaravel\resources\views/contactUs/index.blade.php ENDPATH**/ ?>