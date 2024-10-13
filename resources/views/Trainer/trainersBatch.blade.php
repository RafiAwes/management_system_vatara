@extends('Trainer.master')
@section('trainer-content')
<div class="container">
    <div class="card mt-5">
         <div class="card-body rounded">
             <table class="table">
                 <thead class="thead-dark">
                 <tr>
                     <th scope="col">Sl</th>
                     <th scope="col">Name</th>
                     <th scope="col">Days</th>
                     <th scope="col">Starting Date</th>
                     <th scope="col">Number of Students</th>
                     <th scope="col">Starting TIme</th>
                     <th scope="col">Classes Done</th>
                     <th scope="col">Details</th>

                 </tr>
                 </thead>
                 <tbody>
                 @foreach ($batches as $index=>$batch)
                     <tr>
                         <td scope="row">{{ $loop->index+1 }}</td>
                         <td>{{$batch->name}}</td>
                         <td>{{$batch->days}}</td>
                         <td>{{$batch->starting_date}}</td>
                         <td>{{$batch->number_of_students}}</td>
                         <td>{{$batch->starting_time}}</td>
                         <td>{{$batch->classes_done}}</td>
                         <td><a href="{{url('/batch/details')}}/{{$batch->id}}" class="btn btn-warning btn-sm rounded"><i class="fa fa-edit fa-alt"></i></a></td>
                     </tr>
                 @endforeach
                 </tbody>
             </table>
         </div>
     </div>
 </div>
@endsection
