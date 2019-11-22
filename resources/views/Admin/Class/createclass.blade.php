@extends('Admin.template')
@section('title','Create Class')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="#" method="post" enctype="multipart/form-data">
                    <h3 class="text-center text-capitalize">Create Class</h3>
                    <div class="form-group">
                        <label for="class_name">Class Name</label>
                        <input type="text" name="class_name" id="class_name" class="form-control">
                        <label for="class_price">Class Price</label>
                        <input type="number" name="class_price" id="class_price" class="form-control">
                        <label for="class_image" >select image</label>
                        <input type="file" class="form-control-file" name="class_image" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="class_desc">Class Description</label>
                        <textarea  name="class_desc" id="class_desc" class="form-control"></textarea>
                        <label for="trainer_id">Trainer ID</label>
                        <select name="trainer_id" id="trainer_id" class="custom-select">
                            <option value="1">One</option>
                        </select>
                    </div>
                    <div class="form-group " >
                        <input type="submit" name="create_class" value="Save" class="btn btn-info w-25" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
