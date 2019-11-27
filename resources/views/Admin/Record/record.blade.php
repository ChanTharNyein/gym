@extends('Admin.template')
@section('title','Record')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-2 my-5">
                <form action="{{route('bydate')}}" method="post">
                    @csrf
                    @method('POST')
                    <h3 class="text-info">Must Choose Date</h3>
                    <div class="form-group">
                        <label for="" class="mr-2">Start Date:</label>
                        <input type="date"  name="start">
                        <label for="" class="ml-2">End Date:</label>
                        <input type="date" class="ml-3" name="end">
                        <input type="hidden" name="name" value="{{$table}}">
                        <input type="hidden" name="class" value="{{$checkclass}}">
                        <input type="hidden" name="package" value="{{$checkpackage}}">
                    </div>
                    <h3 class="text-info mt-3">Choose One You Want To Check</h3>
                   <div class="row my-1">
                       <div class="col-lg-6">
                           <div class="form-group">
                               <label for="class_id_id">Classes</label>

                               <select name="class_id" id="class_id" class="custom-select">
                                   <option value="all" >All</option>
                                   @foreach($classes as $class)
                                       <option value="{{$class->id}}">{{$class->name}}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                       <div class="col-lg-6">
                           <div class="form-group">
                               <label for="trainer_id">Packages</label>

                               <select name="package_id" id="package_id" class="custom-select">
                                   <option value="all" >All</option>
                                   @foreach($packages as $package)
                                       <option value="{{$package->id}}">{{$package->title}}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                   </div>
                    <div class="form-group">
                        <input type="submit" value="Search" class="ml-3 btn btn-info text-white w-25 align-center" name="submit">
                    </div>
            </div>
            </form>
            <div class="col-lg-12 offset-0">
                <?php $no=1; ?>
                <?php $total=0; ?>
                <?php $nu=1; ?>
                    <ul class="nav nav-tabs">
                        <li>
                            <a class="nav-link @if($table == 'All'){{'
                                active'}}@endif " href="{{route('record.index')}}">Total List</a>
                        </li>
                        <li><a class="nav-link @if($table == 'Package'){{'
                                active'}}@endif" href="{{route('onlypackage')}}">Package List</a></li>
                        <li><a class="nav-link @if($table == 'Class'){{'
                                active'}}@endif" href="{{route('onlyclass')}}">Class List</a></li>
                    </ul>
                <table class="table" id="package">
                    <h3 class="text-capitalize mt-5">{{$table}} Record Table</h3>
                    <thead class="text-dark">
                    <tr>
                        <th>No</th>
                        <th>User Name</th>
                        <th>Order Name</th>
                        <th>Start Date</th>
                        <th>Month</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($pid=="all")
                    @if ($checkpackage)
                    @foreach($orderpackages as $orderpackage)
                        @if ($orderpackage->status)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$orderpackage->user->name}}</td>
                            <td>{{$orderpackage->package->title}}</td>
                            <td>{{$orderpackage->start_date}}</td>
                            <td>{{$orderpackage->month}}</td>
                            <td>{{$orderpackage->package->price}}</td>
                            <td>{{$orderpackage->package->price *$orderpackage->month }}</td>
                            @php
                                {{
                                $sum=$orderpackage->package->price *$orderpackage->month;
                                $total+=$sum;
                                 }}
                            @endphp


                        </tr>
                        @endif
                      @endforeach
                    @endif
                    @endif
                    @if ($cid=="all")
                    @if ($checkclass)
                    @foreach($orderclasss as $orderclass)
                        @if ($orderclass->status)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$orderclass->user->name}}</td>
                            <td>{{$orderclass->class->name}}</td>
                            <td>{{$orderclass->start_date}}</td>
                            <td>{{$orderclass->month}}</td>
                            <td>{{$orderclass->class->price}}</td>
                            <td>{{$orderclass->class->price *$orderclass->month }}</td>
                            @php
                                {{
                                $sum=$orderclass->class->price * $orderclass->month;
                                $total+=$sum;
                                 }}
                            @endphp


                        </tr>
                        @endif
                    @endforeach
                        @endif
                    @endif

                        @if ($checkpackage)
                            @foreach($orderpackages as $orderpackage)
                                @if ($pid==$orderpackage->package_id)
                                @if ($orderpackage->status)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$orderpackage->user->name}}</td>
                                        <td>{{$orderpackage->package->title}}</td>
                                        <td>{{$orderpackage->start_date}}</td>
                                        <td>{{$orderpackage->month}}</td>
                                        <td>{{$orderpackage->package->price}}</td>
                                        <td>{{$orderpackage->package->price *$orderpackage->month }}</td>
                                        @php
                                            {{
                                            $sum=$orderpackage->package->price *$orderpackage->month;
                                            $total+=$sum;
                                             }}
                                        @endphp


                                    </tr>
                                @endif
                                @endif
                            @endforeach
                        @endif


                        @if ($checkclass)
                            @foreach($orderclasss as $orderclass)
                                @if ($cid==$orderclass->class_id)
                                @if ($orderclass->status)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$orderclass->user->name}}</td>
                                        <td>{{$orderclass->class->name}}</td>
                                        <td>{{$orderclass->start_date}}</td>
                                        <td>{{$orderclass->month}}</td>
                                        <td>{{$orderclass->class->price}}</td>
                                        <td>{{$orderclass->class->price *$orderclass->month }}</td>
                                        @php
                                            {{
                                            $sum=$orderclass->class->price * $orderclass->month;
                                            $total+=$sum;
                                             }}
                                        @endphp


                                    </tr>
                                @endif
                                @endif
                            @endforeach
                        @endif

                    </tbody>
                    <tfoot>
                    <tr>
                        <th colspan="6">Month Total</th>
                        <th><?php  echo ($total);?></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection


