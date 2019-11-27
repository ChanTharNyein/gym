<?php

namespace App\Http\Controllers;

use App\Classes;
use Carbon\Carbon;
use App\OrderClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderClassController extends Controller
{
    public function __construct()
    {
        $this->middleware ('role:admin',['except'=>['store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderclasses = OrderClass::all();
        return view('Admin.OrderClass.orderclass',compact('orderclasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$datetime=request('appointment_date');
        //$datetime
        //dd($datetime);
        $request->validate([
            'name' => 'required|min:2',
            'phone' => 'required'
        ]);
        $order=new OrderClass;
        $order->user_id = Auth::id();
        $order->phone=request('phone');
        $order->class_id=request('class_id');
        $order->appointment_date=Carbon::parse(request('appointment_date'));
        $order->save();
        return redirect()->action('ClassController@index')->with('alert','Your Order is success.We Will Contact You in Shortly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderclass = OrderClass::find($id);
        $class = Classes::all();
        return view('Admin.OrderClass.edit_orderclass',compact('orderclass','class'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'start' => 'required|min:2',
            'end' => 'required'
        ]);
        $order= OrderClass::find($id);
        $order->class_id = request('class_name');
        $order->start_date = request('start') ;
        $order->end_date = request('end') ;
        $order->status=request('status');
        $order->save();
        return redirect()->route('orderclass.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderclass = OrderClass::find($id);
        $orderclass->delete();
        return redirect()->route('orderclass.index');
    }
}
