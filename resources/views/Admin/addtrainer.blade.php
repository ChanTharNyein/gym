@extends('Admin.template')
@section('title','Add Trainer')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="#" method="post" enctype="multipart/form-data">
                    <h3 class="text-center text-capitalize">Add Trainer</h3>
                    <div class="form-group">
                        <label for="trainer_name">Trainer Name</label>
                        <input type="text" name="trainer_name" id="trainer_name" class="form-control">
                        <label for="trainer_image">Image</label>
                        <input type="file" name="trainer_image" id="trainer_image" class="form-control-file">
                        <label for="trainer_desc">Description</label>
                        <input type="text" name="trainer_desc" id="trainer_desc" class="form-control">
                        <label for="trainer_facebook">Facebook</label>
                        <input type="text" name="trainer_facebook" id="trainer_facebook" class="form-control">
                        <label for="trainer_gmail">Gmail</label>
                        <input type="text" name="trainer_gmail" id="trainer_gmail" class="form-control">
                        <label for="trainer_instagram">Instagram</label>
                        <input type="text" name="trainer_instagram" id="trainer_instagram" class="form-control">
                    </div>
                    <div class="form-group " >
                        <input type="submit" name="add_trainer" value="Save" class="btn btn-info w-25" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

