@extends('admin.master')
@section('admin-content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body rounded">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Trainer ID</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Position</th>
                            <th scope="col">Status</th>
                            <th scope="col">Password</th>
                            <th scope="col">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($trainers as $trainer)
                            <tr>
                                <td>{{$trainer->trainer_name}}</td>
                                <td>
                                    @if ($trainer->image != null)
                                        <img src="{{ url($trainer->image) }}" height="60" width="60">
                                    @endif
                                </td>
                                <td>{{$trainer->trainer_id}}</td>
                                <td>{{$trainer->contact_number}}</td>
                                <td>{{$trainer->email}}</td>
                                <td>{{$trainer->position}}</td>
                                <td>{{$trainer->status}}</td>
                                <td>{{$trainer->dec_pass}}</td>
                                <td><a href="{{url('trainer/details')}}/{{$trainer->id}}" class="btn btn-warning btn-sm rounded"><i class="fa fa-edit fa-alt"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a class="btn btn-warning float-end" href="{{ url('/students/list/download') }}">Export User Data</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
