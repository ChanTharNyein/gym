@extends('Admin.template')
@section('title','Category')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-3">
                <table class="table">
                    <h3 class="text-capitalize">Categories Table</h3>
                    <thead class="text-dark">
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-info">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
