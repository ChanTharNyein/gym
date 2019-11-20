@extends('Admin.template')
@section('title','Create Class')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="#" method="post" enctype="multipart/form-data">
                    <h3 class="text-center text-capitalize">Create Post</h3>
                    <div class="form-group">
                        <label for="post_title">Post Title</label>
                        <input type="text" name="post_title" id="post_title" class="form-control">
                        <label for="post_image">Image</label>
                        <input type="file" name="post_image" id="post_image" class="form-control-file">
                        <label for="post_desc">Description</label>
                        <textarea type="text" name="post_desc" id="post_desc" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="trainer_id">Trainer ID</label>
                        <select name="trainer_id" id="trainer_id" class="custom-select">
                            <option value="1">One</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category ID</label>
                        <select name="category_id" id="category_id" class="custom-select">
                            <option value="1">One</option>
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


