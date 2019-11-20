@extends('Admin.template')
@section('title','Package')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-2">
                <table class="table">
                    <h3 class="text-capitalize">Packages Table</h3>
                    <thead class="text-dark">
                    <tr>
                        <th>No</th>
                        <th>Package Name</th>
                        <th>Price</th>
                        <th>Service ID</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
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

