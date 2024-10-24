@extends('admin.master')
@section('admin-content')
<div class="container">
    @foreach ($feedbacks as $feedback)
    <div class="card mt-3">
        <div class="card-header bg-success text-center">
            <h1 class="text-white font-bold">feedback</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                           <h2><strong>Title: </strong>{{$feedback->title}}</h2>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <h2><strong>Content:</strong></h2>
                            <h2><p>{{$feedback->content}}</p></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection
