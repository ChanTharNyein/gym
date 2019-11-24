@extends('Admin.template')
@section('title','Class')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-2">
                <?php $no=1; ?>
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
                    @foreach($classes as $class)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$class->name}}</td>
                            <td>{{$class->image}}</td>
                            <td>{{$class->description}}</td>
                            <td>{{$class->price}}</td>
                            <td>{{$class->trainer_id}}</td>
                            <td>
                                <a href="{{route('class.edit',$class->id)}}" class="btn btn-info">Update</a>
                                <form action="{{route('class.destroy',$class->id)}}" method="post" onsubmit="return fu(event)" class="d-inline-block">
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
                        if(!(window.confirm('Are You Sure To Delete This Aritcle'))){
                            a.returnValue = false;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
@endsection
