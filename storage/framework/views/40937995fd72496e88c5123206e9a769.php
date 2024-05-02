
<?php use App\Models\Student; ?>



<?php $__env->startSection('title', 'Curso'. $course->name); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-12">

            <h1><strong>Estás en el curso <?php echo e($course->name); ?> del colegio <?php echo e($course->school); ?></strong></h1><br>
            <p><u>Del colegio <?php echo e($course->school); ?></u></p><br>

            <a href="<?php echo e(route('courses.index')); ?>">Volver a cursos</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="<?php echo e(route('courses.edit', $course->courseId)); ?>">Editar curso</a>

        </div>

    </div>

    <div class="row">

        <div class="col-12">

            <table class="table">

                <thead>
        
                  <tr>
                    <th scope="col">Nombre alumno</th>
        
                    <?php for($i = 1; $i <= $course->numberGrades; $i++): ?>
        
                        <th scope="col"> Nº<?php echo e($i); ?> </th>
        
                    <?php endfor; ?>
        
                  </tr>
        
                </thead>
        
                <tbody>
        
                    <?php for($i = 0; $i < $course->numberStudents; $i++): ?>
                        
                        <tr>
        
                            <th scope="row">
        
                                <?php $student = Student::where(['courseId' => $course->courseId, 'teacherId' => session()->get('teacherId'), 'columnNumber' => $i])->first() ?>
                                <?php   
                                    try{
                                        
                                        echo ($student->name);
                                        
                                    }catch(Exception $e){
        
                                        echo("");
        
                                    }
                                ?>
        
                                <br>
                                
                                <form action="<?php echo e(route('students.update', [$course->courseId, $i])); ?>" method="POST">
        
                                    <?php echo csrf_field(); ?> 
        
                                    <?php echo method_field('put'); ?>
        
                                    <label>
                                        Nombre:
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
        
                                    <button type="submit" class="btn btn-info">Guardar</button>
        
                                </form>
        
                            </th>
                            
                            <?php for($j = 0; $j < $course->numberGrades; $j++): ?>
                                
                                <td> 
                                    
                                    <?php
        
                                        try{
          
                                            $deserializedArray = json_decode($student->grades); //Hay que deserializar
                                            $color = "red";
                                            if($deserializedArray[$j] > 6){
        
                                                $color = "green";
        
                                            }else if($deserializedArray[$j] < 4){
        
                                                $color = "red";
        
                                            }
        
                                    ?>
        
                                            <h6 style="color:<?php echo e($color); ?>">
                                                <?php  echo($deserializedArray[$j]); ?>
                                            </h6>
        
                                    <?php
        
                                        }catch(Exception $e){
        
                                            echo("");
        
                                        }
                                    ?>
        
                                    <form action="<?php echo e(route('students.updateGrades', [$course->courseId, $i,  $j])); ?>" method="POST">
        
                                        <?php echo csrf_field(); ?>
        
                                        <?php echo method_field('put'); ?>
        
                                        <label name="gradesArray">
        
                                            Nota
                                            
                                            <input type="number" name="grades">
        
                                        </label>
        
                                        <button type="submit" class="btn btn-secondary">Cargar</button>
                                    
                                    </form> 
                                
                                </td>
        
                            <?php endfor; ?>
        
                        </tr>
        
                    <?php endfor; ?>
                
                </tbody>
                
              </table>
        
        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mi proyecto\escuelaLaravel\escuelaLaravel\resources\views/courses/show.blade.php ENDPATH**/ ?>