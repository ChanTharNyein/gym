@extends('Admin.template')
@section('title','Package')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-0">
                <?php $no=1; ?>
                <table class="table">
                    <h3 class="text-capitalize">OrderClasses Table</h3>
                    <thead class="text-dark">
                    <tr>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Phone</th>
                        <th>Class Name</th>
                        <th>Appointment Date</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>



                    @foreach($orderclasses as $orderclass)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$orderclass->user->name}}</td>
                            <td>{{$orderclass->phone}}</td>
                            <td>{{$orderclass->class->name}}</td>
                            <td>{{$orderclass->appointment_date}}</td>
                            <td>{{$orderclass->start_date}}</td>
                            <td>{{$orderclass->end_date}}</td>
                            <td>{{$orderclass->status}}</td>
                            <td>
                                <a href="{{route('orderclass.edit',$orderclass->id)}}" class="btn btn-info">Update</a>
                                <form action="{{route('orderclass.destroy',$orderclass->id)}}" method="post" class="d-inline-block" onsubmit="return fu(event)">
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
                        if(!(window.confirm('Are You Sure To Delete This Order Class'))){
                            b.returnValue = false;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
@endsection


