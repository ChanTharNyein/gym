@extends('Admin.template')
@section('title','Create Class')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{route('bloghome.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center text-capitalize">Create Post</h3>
                    <div class="form-group">
                        <label for="post_title">Post Title</label>
                        <input type="text" name="post_title" id="post_title" class="form-control @error('post_title') is-invalid @enderror">
                        @error('post_title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="post_image">Image</label>
                        <input type="file" name="post_image" id="post_image" class="form-control-file @error('post_image') is-invalid @enderror">
                        @error('post_image')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="post_desc">Description</label>
                        <textarea type="text" name="post_desc" id="post_desc" class="form-control @error('post_desc') is-invalid @enderror"></textarea>
                        @error('post_desc')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="trainer_id">Trainer Name</label>
                        <select name="trainer_id" id="trainer_id" class="custom-select">
                            @foreach($trainer as $trainers)
                                <option value="{{$trainers->id}}">{{$trainers->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" id="category_id" class="custom-select">
                            @foreach($category as $cates)
                                <option value="{{$cates->id}}">{{$cates->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group " >
                        <input type="submit" name="add_post" value="Save" class="btn btn-info w-25" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


