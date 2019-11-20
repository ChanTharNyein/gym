@extends('Admin.template')
@section('title','Trainer')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-11 offset-1">
                <table class="table">
                    <h3 class="text-capitalize">Trainers Table</h3>
                    <thead class="text-dark">
                    <tr>
                        <th>No</th>
                        <th>Trainer Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Facebook</th>
                        <th>Gmail</th>
                        <th>Instagram</th>
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


