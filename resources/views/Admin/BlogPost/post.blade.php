@extends('Admin.template')
@section('title','Post')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-0">
                <?php $no=1; ?>
                <table class="table">
                    <h3 class="text-capitalize">Blog Posts Table</h3>
                    <thead class="text-dark">
                    <tr>
                        <th>No</th>
                        <th>Post Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Trainer ID</th>
                        <th>Category ID</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($posts as $post)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->image}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->trainer_id}}</td>
                        <td>{{$post->category_id}}</td>
                        <td>
                            <a href="{{route('bloghome.edit',$post->id)}}" class="btn btn-info">Update</a>
                            <form action="{{route('bloghome.destroy',$post->id)}}" method="post" onsubmit="return fu(event)" class="d-inline-block">
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
                        if(!(window.confirm('Are You Sure To Delete This Post'))){
                            a.returnValue = false;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
@endsection
