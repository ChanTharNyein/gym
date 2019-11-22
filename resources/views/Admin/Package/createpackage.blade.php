@extends('Admin.template')
@section('title','Create Class')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{route('package.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center text-capitalize">Create Package</h3>
                    <div class="form-group">
                        <label for="package_name">Package Name</label>
                        <input type="text" name="title" id="package_name" class="form-control">
                        <label for="price">Package Price</label>
                        <input type="number" name="price" id="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="serviceid1">Service ID One</label>
                        <input type="text" name="serviceid1" id="serviceid1" class="form-control">
                        <label for="serviceid2">Service Two</label>
                        <input type="text" name="serviceid2" id="serviceid2" class="form-control">
                        <label for="serviceid3">Service Three</label>
                        <input type="text" name="serviceid3" id="serviceid3" class="form-control">
                        <label for="serviceid4">Service Four</label>
                        <input type="text" name="serviceid4" id="serviceid4" class="form-control">
                        <label for="serviceid5">Service Five</label>
                        <input type="text" name="serviceid5" id="serviceid5" class="form-control">
                    </div>
                    <div class="form-group " >
                        <input type="submit" name="create_package" value="Save" class="btn btn-info w-25" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

