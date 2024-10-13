@extends('Trainer.master')
@section('trainer-content')
<div class="container">
    {{-- details of the batch --}}
   <div class="card mt-5">
    <div class="card-header bg-success text-center text-white rounded">
        <h1 class="display-4  font-weight-bolder">{{$batch->name}}</h1>
    </div>
    <div class="card-body rounded">
        <div class="row">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <h1>Started at: {{$batch->starting_date}}</h1>
                        </div>
                        <div class="col-lg-4">
                            <h1>Class Time: {{$batch->starting_time}}</h1>
                        </div>
                        <div class="col-lg-4">
                            <h1>Student seat: {{$batch->number_of_students}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        {{-- showing multiple values in a single attribute field --}}
                        @php
                            $days = explode(',', $batch->days);
                        @endphp
                        <div class="col-lg-12 mt-3">
                            <h1>Days:
                                @foreach ($days as $day)
                                    {{$day}},
                                @endforeach
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mt-3">
                           <h1>Total Classes: {{$batch->total_classes}}</h1>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <h1>Classes Done: {{$batch->classes_done}}</h1>
                         </div>
                        <div class="col-lg-4 mt-3">
                           <h1>Classes Left: {{$batch->total_classes - $batch->classes_done}}</h1>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
   </div>
   {{-- Student list of he batch --}}
   <div class="card mt-5">

        <div class="card-body rounded">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Name</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Position</th>
                    <th scope="col">Attended Classes</th>
                    {{-- <th scope="col">Drop</th> --}}
                    <th scope="col">Details</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($students as $index=>$student)
                    <tr>
                        <td scope="row">{{ $loop->index+1 }}</td>
                        <td>{{$student->student_name}}</td>
                        <td>{{$student->student_id}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->contact_number}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->position}}</td>
                        <td>{{$student->attended_class}}</td>
                        {{-- <td><a href="{{url('/students/drop-students/')}}/{{$student->id}}" class="btn btn-danger btn-sm rounded"><i class="fas fa-trash"></i></a></td> --}}
                        <td><a href="{{url('/student/details')}}/{{$student->id}}" class="btn btn-warning btn-sm rounded"><i class="fa fa-edit fa-alt"></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
