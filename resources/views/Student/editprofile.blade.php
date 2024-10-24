@extends('Student.master')

@section('student-content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-header bg-success font-weight-bolder text-center text-white rounded">
                        <h2 class="text-white">Profile</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('student.edit.profile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $student->id }}" name="student_id">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row pt-3">
                                            <div class="col-lg-4">
                                                <label for="student_name">Student Name</label>
                                                <input type="text" name="student_name" value="{{$student->student_name}}" class="form-control rounded" id="student_name" placeholder="Enter your name">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="contact_number">Phone No:</label>
                                                <input type="text" name="contact_number" value="{{$student->contact_number}}" class="form-control rounded" id="contact_number" placeholder="Enter your Phone number" disabled>
                                            </div>
                                            <div class="col-lg-4
                                                <label for="email">Email</label>
                                                <input type="email" name="email" value="{{$student->email}}" class="form-control rounded" id="email" placeholder="Enter your mobile number" disabled>
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-lg-4">
                                                <label for="present_address">Present Address</label>
                                                <input type="text" name="address" value="{{$student->address}}" class="form-control rounded" id="present_address" placeholder="Enter your present address">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="student_id">Student Id</label>
                                                <input type="text" class="form-control rounded" name="student_id" value="{{$student->student_id}}" id="student_id" disabled>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="date_of_birth">Date of Birth</label>
                                                <input type="date" name="date_of_birth" value="{{$student->date_of_birth}}" class="form-control rounded" id="date_of_birth" required>
                                            </div>

                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-lg-6">
                                                <label for="height">Height:</label>
                                                <input type="number" name="height" value="{{$student->height}}" class="form-control rounded" step="0.01" id="height" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="weight">Weight:</label>
                                                <input type="number" name="weight" value="{{$student->weight}}" class="form-control rounded" id="weight" required>
                                            </div>

                                        </div>
                                        {{-- <div class="row pt-3">

                                            <div class="col-lg-6">
                                                <label for="batch">Batch:</label>
                                                <select name="batch_id" id="batch_id" class="form-control">
                                                    <option value="">Select One</option>
                                                    <option value="demo_batch">Demo Batch</option>
                                                    @foreach ($batches as $batch )
                                                        <option value="{{ $batch->id }}">{{ $batch->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="row pt-3">
                                            <div class="col-lg-4">
                                                <label for="admissionFees">Admission Fees:</label>
                                                <input type="number" class="form-control rounded" id="admissionFees" name="admissionFees" oninput="updatePayableMoney()" required>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="realFees">Real Fees:</label>
                                                <input type="number" class="form-control rounded" id="realFees" name="realFees" oninput="updatePayableMoney()" required>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="discount">Discount:</label>
                                                <input type="number" class="form-control rounded" id="discount" name="discount" oninput="updatePayableMoney()" required>
                                            </div> --}}

                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-lg-6">
                                                <label for="prev_image">Image</label>
                                                @if ($student->image != null)
                                                    <img src="{{ url($student->image) }}" alt=" " class="img-fluid" height="250">
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Image:</label>
                                                <input type="file"  name="image" id="image" onchange="document.getElementById('bah').src = window.URL.createObjectURL(this.files[0])" class="form-control">
                                                <img id="bah" class="img-fluid mt-1" height="250">
                                            </div>



                                        </div>
                                    </div>


                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" value="Edit Profile" class="btn btn-success rounded">
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function updatePayableMoney() {
            var admissionFees = parseInt(document.getElementById('admissionFees').value) || 0;
            var realFees = parseInt(document.getElementById('realFees').value) || 0;
            var discount = parseInt(document.getElementById('discount').value) || 0;

            var payableFees = (admissionFees + realFees) - discount;

            document.getElementById('payableFees').value = payableFees;
        }
    </script>
@endsection






