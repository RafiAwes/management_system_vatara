@extends('Trainer.master')
@section('trainer-content')
<div class="container">
    <div class="text-center">
        <div class="row">
            @foreach ($batches as $batch)
                <div class=" mt-5 col-sm-6">
                    <div class="card rounded">
                        <div class="card-body rounded">
                            <h5 class="card-title">{{$batch->name}}</h5>
                            <p class="card-text">Time: {{$batch->starting_time}} Session done:  {{$batch->classes_done}}</p>
                            <a href="{{url('/attendance/take') }}/{{ $batch->id }}" class="btn btn-primary rounded">Attendance</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
