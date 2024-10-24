@extends('admin.master')
@section('admin-content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-header bg-warning font-weight-bolder text-center text-white rounded">
                    <h2>Create New Batch</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('batch.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="name">Batch Name</label>
                                            <input type="text" name="batch_name" class="form-control rounded" id="name" placeholder="Enter your name">
                                        </div>
                                        <div class="col-lg-4">
                                                <label for="total_classes">Total classes</label>
                                                <input type="text" name="total_classes" class="form-control rounded" id="total_classes" placeholder="Enter total class number">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="starting_date">Starting Date</label>
                                            <input type="date" name="starting_date" class="form-control rounded" id="starting_date" placeholder="Enter starting date">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="numberOfStudents">number of students</label>
                                            <input type="int" name="numberOfStudents" class="form-control rounded" id="numberOfStudents" placeholder="Enter the number of students">
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="slot_id">Slot</label>
                                            <select class="form-control" name="slot_id" id="slot_id">
                                                <option value="">Insert Slot</option>
                                                @foreach ($slots as $slot)
                                                    <option value="{{$slot->id}}">{{$slot->slot_name}}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input type="time" class="form-control rounded" name="time" id="time" placeholder="Enter the training time: "> --}}
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="trainer_id">Trainer</label>
                                            <select name="trainer_id" id="trainer_id" class="form-control">
                                                <option value="">Select Trainer</option>
                                                @foreach ($trainers as $trainer)
                                                <option value="{{$trainer->id}}">{{$trainer->trainer_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

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
<script type="text/javascript">
    $(document).ready(function () {

        /*------------------------------------------
        --------------------------------------------
        Country Dropdown Change Event
        --------------------------------------------
        --------------------------------------------*/
        $('#time').on('change', function () {
            var time = this.value;
            $("#trainer-dropdown").html('');
            $.ajax({
                url: "{{url('/get/available/trainers')}}",
                type: "POST",
                data: {
                    time: time,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#trainer-dropdown').html('<option value="">-- Select Trainer --</option>');
                    $.each(result.trainers, function (key, value) {
                        $("#trainer-dropdown").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });

                }
            });
        });
    });
</script>
@endsection
