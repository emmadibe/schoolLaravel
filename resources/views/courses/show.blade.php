
<?php use App\Models\Student; ?>

@extends('layouts.plantilla')

@section('title', 'Curso'. $course->name)

@section('content')

    <div class="row">

        <div class="col-12">

            <h1><strong>Estás en el curso {{ $course->name }} del colegio {{ $course->school }}</strong></h1><br>
            <p><u>Del colegio {{ $course->school }}</u></p><br>

            <a href="{{route('courses.index')}}">Volver a cursos</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <a href="{{ route('courses.edit', $course->courseId) }}">Editar curso</a>

        </div>

    </div>

    <div class="row">

        <div class="col-12">

            <table class="table">

                <thead>
        
                  <tr>
                    <th scope="col">Nombre alumno</th>
        
                    @for($i = 1; $i <= $course->numberGrades; $i++)
        
                        <th scope="col"> Nº{{ $i }} </th>
        
                    @endfor
        
                  </tr>
        
                </thead>
        
                <tbody>
        
                    @for($i = 0; $i < $course->numberStudents; $i++)
                        
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
                                
                                <form action="{{ route('students.update', [$course->courseId, $i]) }}" method="POST">
        
                                    @csrf 
        
                                    @method('put')
        
                                    <label>
                                        Nombre:
                                        <input type="text" name="name" value="{{ old('name') }}">
        
                                    </label>
        
                                    @error('name')
                                        <div class="error-message">
                            
                                            <br>
                                            <span>*{{ $message }}</span>
                                            <br>
                            
                                        </div>
                                    @enderror
        
                                    <button type="submit" class="btn btn-info">Guardar</button>
        
                                </form>
        
                            </th>
                            
                            @for($j = 0; $j < $course->numberGrades; $j++)
                                
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
        
                                            <h6 style="color:{{ $color }}">
                                                <?php  echo($deserializedArray[$j]); ?>
                                            </h6>
        
                                    <?php
        
                                        }catch(Exception $e){
        
                                            echo("");
        
                                        }
                                    ?>
        
                                    <form action="{{ route('students.updateGrades', [$course->courseId, $i,  $j]) }}" method="POST">
        
                                        @csrf
        
                                        @method('put')
        
                                        <label name="gradesArray">
        
                                            Nota
                                            
                                            <input type="number" name="grades">
        
                                        </label>
        
                                        <button type="submit" class="btn btn-secondary">Cargar</button>
                                    
                                    </form> 
                                
                                </td>
        
                            @endfor
        
                        </tr>
        
                    @endfor
                
                </tbody>
                
              </table>
        
        </div>

    </div>

@endsection


