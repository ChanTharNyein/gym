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
                        <th>User Name</th>
                        <th>Trainer Name</th>
                        <th>Phone</th>
                        <th>Package Name</th>
                        <th>Appointment Date</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>



                    @foreach($orderpackages as $pack)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$pack->user->name}}</td>
                            <td>{{$pack->trainer->name}}</td>
                            <td>{{$pack->phone}}</td>
                            <td>{{$pack->package->title}}</td>
                            <td>{{$pack->appointment_date}}</td>
                            <td>{{$pack->start_date}}</td>
                            <td>{{$pack->end_date}}</td>
                            <td>{{$pack->status}}</td>
                            <td>
                                <a href="{{route('package.edit',$pack->id)}}" class="btn btn-info">Update</a>
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

