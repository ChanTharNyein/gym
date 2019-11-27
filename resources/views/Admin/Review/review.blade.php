@extends('Admin.template')
@section('title','Add Review')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{route('review.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="desc"><strong>Description</strong></label>
                        <input type="text" name="desc" id="desc" class="form-control @error('desc') is-invalid @enderror">
                        @error('desc')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                        <label for="user_id"><strong>User ID</strong></label>
                        <input type="number" name="user_id" id="user_id" class="form-control @error('user_id') is-invalid @enderror">
                        @error('user_id')
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
