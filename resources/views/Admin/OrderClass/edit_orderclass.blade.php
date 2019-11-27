@extends('Admin.template')
@section('title','OrderClass')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{route('orderclass.update',$orderclass->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h3 class="text-center text-capitalize">Confrim Order Class</h3>
                    <div class="form-group">
                        <label for="class_name">Class Name</label>
                        <select name="class_name" id="class_name" class="custom-select">
                            @foreach($class as $classes)
                                <option value="{{$classes->id}}" @if($orderclass->class_id == $classes->id){{'
                                selected'}}@endif>{{$classes->name}}</option>
                            @endforeach
                        </select>
                        <label for="start">Start Date</label>
                        <input type="date" value="{{$orderclass->start_date}}" name="start" id="start" class="form-control @error('start') is-invalid @enderror">
                        @error('start')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="end">End Date</label>
                        <input type="date" value="{{$orderclass->end_date}}" name="end" id="end" class="form-control @error('end') is-invalid @enderror">
                        @error('end')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="month">Month</label>
                        <input type="number" value="{{$orderclass->end_date}}" name="month" id="month" class="form-control @error('month') is-invalid @enderror">
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


