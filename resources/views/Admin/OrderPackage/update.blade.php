@extends('Admin.template')
@section('title','Create Class')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{route('orderpackage.update',$package->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h3 class="text-center text-capitalize">Edit Package</h3>
                    <div class="form-group">
                        <label for="user_name">User Name</label>
                        <input type="text" value="{{$package->title}}" name="title" id="user_name" class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="price">Trainer Name</label>
                        <input type="text" value="{{$package->price}}" name="trainer_name" id="trainer_name" class="form-control @error('price') is-invalid @enderror">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" value="{{$package->service1}}" name="phone" id="phone" class="form-control @error('serviceid1') is-invalid @enderror">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="package_name">Package Name</label>
                        <input type="text" value="{{$package->service2}}" name="package_name" id="package_name" class="form-control @error('serviceid2') is-invalid @enderror">
                        @error('package_name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="serviceid3">Service Three</label>
                        <input type="text" value="{{$package->service3}}" name="serviceid3" id="serviceid3" class="form-control @error('serviceid3') is-invalid @enderror">
                        @error('serviceid3')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="serviceid4">Service Four</label>
                        <input type="text" value="{{$package->service4}}" name="serviceid4" id="serviceid4" class="form-control @error('serviceid4') is-invalid @enderror">
                        @error('serviceid4')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="serviceid5">Service Five</label>
                        <input type="text" value="{{$package->service5}}" name="serviceid5" id="serviceid5" class="form-control @error('serviceid5') is-invalid @enderror">
                        @error('serviceid5')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group " >
                        <input type="submit" name="create_package" value="Update" class="btn btn-info w-25" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


