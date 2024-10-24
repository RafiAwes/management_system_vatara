@extends('Student.master')
@section('student-content')
<div class="container">
    @foreach ($events as $event)
    <div class="card mt-3">
        <div class="card-header bg-success text-center">
            <h1 class="text-white font-bold">Events</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                           <h3><strong>Title: </strong>  {{$event->title}}</h3>
                        </div>
                        <div class="col-lg-4">
                            @php
                                $days = explode(',', $event->days);
                            @endphp
                            <h3><strong>Days: </strong></h3>
                            @foreach ($days as $day)
                                {{$day}}
                            @endforeach

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h3><strong>Description:</strong></h3>
                            <h2><p>{{$event->description}}</p></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                           <h3><strong>Date: </strong> {{$event->date}}</h3>
                        </div>
                        <div class="col-lg-4">
                           <h3><strong>Time: </strong> {{$event->time}}</h3>
                        </div>
                        <div class="col-lg-4">
                            <h3><strong>Registration Fees: </strong> {{$event->registration_fees}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection
