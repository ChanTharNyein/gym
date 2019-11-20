@extends('Admin.template')
@section('title','Create Class')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="#" method="post" enctype="multipart/form-data">
                    <h3 class="text-center text-capitalize">Create Package</h3>
                    <div class="form-group">
                        <label for="package_name">Package Name</label>
                        <input type="text" name="package_name" id="package_name" class="form-control">
                        <label for="package_price">Package Price</label>
                        <input type="number" name="package_price" id="package_price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="service_id">Service ID</label>
                        <select name="service_id" id="service_id" class="custom-select">
                            <option value="1">One</option>
                        </select>
                    </div>
                    <div class="form-group " >
                        <input type="submit" name="create_package" value="Save" class="btn btn-info w-25" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

