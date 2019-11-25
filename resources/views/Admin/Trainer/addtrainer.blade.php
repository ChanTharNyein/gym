@extends('Admin.template')
@section('title','Add Trainer')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{route('trainer.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3 class="text-center text-capitalize">Add Trainer</h3>
                    <div class="form-group">
                        <label for="trainer_name">Trainer Name</label>
                        <input type="text" name="trainer_name" id="trainer_name" class="form-control @error('trainer_name') is-invalid @enderror">
                        @error('triner_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="trainer_image">Image</label>
                        <input type="file" name="trainer_image" id="trainer_image" class="form-control-file @error('trainer_image') is-invalid @enderror">
                        @error('trainer_image')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="trainer_desc">Description</label>
                        <textarea id="summernote" cols="30" rows="3"  name="trainer_desc" id="trainer_desc" class="form-control @error('trainer_desc') is-invalid @enderror"></textarea>
                        @error('trainer_desc')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="trainer_facebook">Facebook</label>
                        <input type="text" name="trainer_facebook" id="trainer_facebook" class="form-control @error('trainer_facebook') is-invalid @enderror">
                        @error('trainer_facebook')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="trainer_gmail">Gmail</label>
                        <input type="email" name="trainer_gmail" id="trainer_gmail" class="form-control @error('trainer_gmail') is-invalid @enderror">
                        @error('trainer_gmail')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                        <label for="trainer_instagram">Instagram</label>
                        <input type="text" name="trainer_instagram" id="trainer_instagram" class="form-control @error('trainer_instagram') is-invalid @enderror">
                        @error('trainer_instagram')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group " >
                        <input type="submit" name="add_trainer" value="Save" class="btn btn-info w-25" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

