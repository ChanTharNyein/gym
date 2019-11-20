@extends('Admin.template')
@section('title','Class')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-2">
                <table class="table">
                    <h3 class="text-capitalize">Classes Table</h3>
                    <thead class="text-dark">
                    <tr>
                        <th>No</th>
                        <th>Class Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Trainer ID</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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
