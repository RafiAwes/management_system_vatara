@extends('admin.master')

@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-header bg-success font-weight-bolder text-center text-white rounded">
                        <h2 class="text-white">Admission Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('student.register')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row pt-3">
                                            <div class="col-lg-4">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control rounded" id="name" placeholder="Enter your name">
                                            </div>
                                            {{-- <div class="col-lg-4">
                                                    <label for="father_name">Father's Name</label>
                                                    <input type="text" name="father_name" class="form-control rounded" id="father_name" placeholder="Enter your father's name">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="mother_name">Mother's Name</label>
                                                <input type="text" name="mother_name" class="form-control rounded" id="mother_name" placeholder="Enter your mother's name">
                                            </div> --}}
                                            <div class="col-lg-4">
                                                <label for="contact_number">Phone No:</label>
                                                <input type="text" name="contact_number" class="form-control rounded" id="contact_number" placeholder="Enter your Phone number" required>
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control rounded" id="email" placeholder="Enter your mobile number" required>
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-lg-4">
                                                <label for="present_address">Present Address</label>
                                                <input type="text" name="address" class="form-control rounded" id="present_address" placeholder="Enter your present address">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="nid_or_birth_cert_no">NID/Birth Cert. no.:</label>
                                                <input type="text" class="form-control rounded" name="date_of_birth" id="nid_or_birth_cert_no" placeholder="Enter your NID or birth certificate number">
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="date_of_birth">Date of Birth</label>
                                                <input type="date" name="date_of_birth" class="form-control rounded" id="date_of_birth" required>
                                            </div>

                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-lg-6">
                                                <label for="height">Height:</label>
                                                <input type="number" name="height" class="form-control rounded" step="0.01" id="height" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="weight">Weight:</label>
                                                <input type="number" name="weight" class="form-control rounded" id="weight" required>
                                            </div>

                                        </div>
                                        <div class="row pt-3">

                                            <div class="col-lg-6">
                                                <label for="gender">Gender</label>
                                                {{-- <input type="text" class="form-control rounded" id="gender" placeholder="Enter your mobile number"> --}}
                                                <select class="form-control" name="gender" id="gender" required>
                                                    <option value="">Select One</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="custom">Custom</option>
                                                </select>
                                            </div>
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
                                        </div>
                                        <div class="row pt-3">
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
                                            </div>
                                            <div class="col-lg-4">
                                                <label for="payableFees">Payable Fees:</label>
                                                <input type="number" class="form-control rounded" id="payableFees" name="payableFees" readonly>
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-lg-6">
                                                <label>Image:</label>
                                                <input type="file"  name="image" id="image" onchange="document.getElementById('bah').src = window.URL.createObjectURL(this.files[0])" class="form-control">
                                                <img id="bah" class="img-fluid mt-1">
                                            </div>



                                        </div>
                                    </div>


                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" value="Admit" class="btn btn-success rounded">
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






