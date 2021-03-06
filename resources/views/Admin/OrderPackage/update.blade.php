@extends('Admin.template')
@section('title','Update Package')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{route('orderpackage.update',$orderpackage->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h3 class="text-center text-capitalize">Confrim Order Package</h3>
                    <div class="form-group">
                        <label for="trainer_name">Trainer Name</label>
                        <select name="trainer_name" id="trainer_name" class="custom-select">
                            @foreach($trainers as $trainer)
                                <option value="{{$trainer->id}}" @if($orderpackage->trainer_id == $trainer->id){{'
                                selected'}}@endif>{{$trainer->name}}</option>
                            @endforeach
                        </select>
                        <label for="package_name">Package Name</label>
                        <select name="package_name" id="package_name" class="custom-select">
                            @foreach($packages as $package)
                                <option value="{{$package->id}}" @if($orderpackage->package_id == $package->id){{'
                                selected'}}@endif>{{$package->title}}</option>
                            @endforeach
                        </select>
                        <label for="start">Start Date</label>
                        <input type="date" value="{{$orderpackage->start_date}}" name="start" id="start" class="form-control @error('start') is-invalid @enderror">
                        @error('start')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="end">End Date</label>
                        <input type="date" value="{{$orderpackage->end_date}}" name="end" id="end" class="form-control @error('end') is-invalid @enderror">
                        @error('end')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="month">Month</label>
                        <input type="number" value="{{$orderpackage->end_date}}" name="month" id="month" class="form-control @error('month') is-invalid @enderror">
                        @error('month')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="status">Status</label>
                        <select name="status" id="status" class="custom-select">
                            <option value="0">False</option>
                            <option value="1">True</option>
                        </select>
                    </div>
                    <div class="form-group " >
                        <input type="submit" name="update_orderclass" value="Update" class="btn btn-info w-25" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


