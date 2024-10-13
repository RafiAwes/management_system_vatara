@extends('admin.master')
@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-5">
                <div class="card-header bg-warning font-weight-bolder text-center text-white rounded">
                    <h2 class="text-white">This is slot creating page</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('slot.create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="slot_name">Slot Name</label>
                                    <input type="text" class="form-control rounded" name="slot_name" id="slot_name" placeholder="Enter Slot Name">
                                </div>
                                <div class="col-lg-4">
                                    <label for="starting_time">Starting Time</label>
                                    <input type="time" class="form-control rounded" name="starting_time" id="starting_time">
                                </div>
                                <div class="col-lg-4">
                                    <label for="ending_time">Ending Time</label>
                                    <input type="time" class="form-control rounded" name="ending_time" id="ending_time">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="Days">Days of training</label>
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
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 text-center">
                                    <input type="submit" value="Create" class="btn btn-warning rounded">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
