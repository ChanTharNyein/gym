@extends('Admin.template')
@section('title','Create Class')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{route('class.update',$class->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h3 class="text-center text-capitalize">Create Class</h3>
                    <div class="form-group">
                        <label for="class_name">Class Name</label>
                        <input value="{{$class->name}}" type="text" name="class_name" id="class_name" class="form-control">
                        <label for="class_price">Class Price</label>
                        <input value="{{$class->price}}" type="number" name="class_price" id="class_price" class="form-control">
                        <label for="class_image" >select image</label>
                        <input type="file" class="form-control-file" name="class_image" accept="image/*">
                        <input type="hidden" value="{{$class->image}}" name="oldimg" >
                    </div>
                    <div class="form-group">
                        <label for="start_time" >Start Time</label>
                        <input type="text" value="{{$class->start}}" class="form-control" name="start_time" id="start_time">
                        <label for="end_time" >End Time</label>
                        <input type="text" value="{{$class->end}}" class="form-control" name="end_time" id="end_time">
                        <label for="class_desc">Class Description</label>
                        <textarea  name="class_desc" id="class_desc" class="form-control">{{$class->description}}</textarea>
                        <label for="trainer_id">Trainer ID</label>
                        <select name="trainer_id" id="trainer_id" class="custom-select">
                            @foreach($trainer as $trainers)
                                <option value="{{$trainers->id}}"@if($class->trainer_id == $trainers->id){{'
                                selected'}}@endif>{{$trainers->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group " >
                        <input type="submit" name="create_class" value="update" class="btn btn-info w-25" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
