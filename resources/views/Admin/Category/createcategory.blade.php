@extends('Admin.template')
@section('title','Create Category')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category_name"><strong>Category Name</strong></label>
                        <input type="text" name="category_name" id="category_name" class="form-control @error('category_name') is-invalid @enderror">
                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" name="create_category" value="Save" class="btn btn-info w-25">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
