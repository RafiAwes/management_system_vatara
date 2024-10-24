@extends('admin.master')
@section('admin-content')

<div class="container">
    <div class="card mt-3">
        <div class="card-header text-center bg-warning rounded">
            <h1 class="text-white font-bold">Create Event</h1>
        </div>
        <div class="card-body rounded">
            <form action="{{route('event.create')}}" method="post" class="mt-3">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row pt-3">
                            <div class="col-lg-4">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control rounded" id="title" placeholder="Enter Title">
                            </div>
                            <div class="col-lg-4">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control rounded" id="date" placeholder="Date">
                            </div>
                            <div class="col-lg-4">
                                <label for="time">Time</label>
                                <input type="time" class="form-control rounded" name="time" id="time" placeholder="Time">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-lg-4">
                                <label for="day">Days</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="Saturday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Saturday</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="Sunday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Sunday</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="Monday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Monday</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="Tuesday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Tuesday</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="Wednesday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Wednesday</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="Thursday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Thursday</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" value="Friday" name="days[]" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Friday</label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="supervisor">Supervisor</label>
                                <select name="supervisor" id="supervisor" class="form-control">
                                    <option value="">Select Supervisor</option>
                                    @foreach ($trainers as $trainer)
                                    <option value="{{$trainer->id}}">{{$trainer->trainer_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label for="regfees">Registration Fees</label>
                                <input type="string" class="form-control rounded" name="regfees" id="regfees" placeholder="Enter Registration Fees">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <label for="description">Description</label>
                            <div class="col-lg-8">
                                <textarea name="description" id="description" cols="100" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <input type="submit" value="Create" class="btn btn-warning rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
