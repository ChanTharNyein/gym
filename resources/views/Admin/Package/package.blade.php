@extends('Admin.template')
@section('title','Package')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-0">
                <?php $no=1; ?>
                <table class="table">
                    <h3 class="text-capitalize">Packages Table</h3>
                    <thead class="text-dark">
                    <tr>
                        <th>No</th>
                        <th>Package Name</th>
                        <th>Price</th>
                        <th>Service One</th>
                        <th>Service Two</th>
                        <th>Service Three</th>
                        <th>Service Four</th>
                        <th>Service Five</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($package as $pack)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$pack->title}}</td>
                        <td>{{$pack->price}}</td>
                        <td>{{$pack->service1}}</td>
                        <td>{{$pack->service2}}</td>
                        <td>{{$pack->service3}}</td>
                        <td>{{$pack->service4}}</td>
                        <td>{{$pack->service5}}</td>
                        <td>
                            <a href="{{route('package.edit',$pack->id)}}" class="btn btn-info mb-2">Update</a>
                            <form action="{{route('package.destroy',$pack->id)}}" method="post" class="d-inline-block" onsubmit="return fu(event)">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete" name="delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <script>
                    function fu(b) {
                        if(!(window.confirm('Are You Sure To Delete This Package'))){
                            b.returnValue = false;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
@endsection

