@extends('admin.master')
@section('admin-content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header bg-success text-center rounded">
            <h1 class="text-white bg-success fw-bolder">Send Mail</h1>
        </div>
        <div class="card-body">
            <div class="container">
                <form action="{{route('notice.send')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <label for="title" class="form-label"><strong>Title</strong></label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label><strong>Body:</strong></label>
                            <textarea class="ckeditor form-control" name="body" id="body"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 text-center">
                        <input type="submit" value="Send" class="btn btn-success text-center">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
