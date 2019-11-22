@extends('Admin.template')
@section('title','Create Category')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{route('category.update',$category->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="category_name"><strong>Category Name</strong></label>
                        <input type="text" value="{{$category->name}}" name="category_name" id="category_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="create_category" value="Update" class="btn btn-info w-25">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

