@extends('Admin.template')
@section('title','Trainer')
@section('content')
    <?php $no=1; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-0">
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
                    @foreach($trainer as $train)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$train->name}}</td>
                        <td>{{$train->image}}</td>
                        <td>{{$train->description}}</td>
                        <td>{{$train->facebook}}</td>
                        <td>{{$train->gmail}}</td>
                        <td>{{$train->instagram}}</td>
                        <td>
                            <a href="{{route('trainer.edit',$train->id)}}" class="btn btn-info">Update</a>
                            <form action="{{route('trainer.destroy',$train->id)}}" class="d-inline-block" method="post" onsubmit="return dele(event)">
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <script>
                    function dele(paing) {
                        if(!(window.confirm('Are You Sure Want To Delete This Trainer'))){
                            paing.returnValue=false;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
@endsection


