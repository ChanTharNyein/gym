@extends('Admin.template')
@section('title','Category')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-3">
                <?php $no=1; ?>
                <table class="table">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <h3 class="text-capitalize">Categories Table</h3>
                    <thead class="text-dark">
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $cate)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$cate->name}}</td>
                        <td>
                            <a href="{{route('category.edit',$cate->id)}}" class="btn btn-info">Update</a>
                            <form action="{{route('category.destroy',$cate->id)}}" method="post" onsubmit="return fu(event)" class="d-inline-block">
                                @csrf
                                @method("DELETE")
                                <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">

                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <script>
                    function fu(a) {
                        if(!(window.confirm('Are You Sure To Delete This Category'))){
                            a.returnValue = false;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
@endsection
