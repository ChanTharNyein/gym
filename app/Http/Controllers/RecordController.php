<?php

namespace App\Http\Controllers;

use App\Classes;
use App\OrderClass;
use App\OrderPackage;
use App\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecordController extends Controller
{
    public function __construct()
    {
        $this->middleware ('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        $classes = Classes::all();
        $orderpackages = OrderPackage::where('status', true)->get();
        $orderclasss = OrderClass::where('status', true)->get();
        $checkclass=true;
        $checkpackage=true;
        $pid= "all";
        $cid= "all";
        $table="All";
        return view('Admin.Record.record',compact('orderclasss','orderpackages','checkpackage','checkclass','table','packages','classes','pid','cid'));
    }
    public function orclass()
    {
        $packages = Package::all();
        $classes = Classes::all();
        $orderpackages = OrderPackage::where('status', true)->get();
        $orderclasss = OrderClass::where('status', true)->get();
        $checkclass=true;
        $checkpackage=false;
        $pid= "all";
        $cid= "all";
        $table="Class";
        return view('Admin.Record.record',compact('orderclasss','orderpackages','checkpackage','table','checkclass','packages','classes','pid','cid'));
    }
    public function orpackage()
    {
        $packages = Package::all();
        $classes = Classes::all();
        $orderpackages = OrderPackage::where('status', true)->get();
        $orderclasss = OrderClass::where('status', true)->get();
        $pid= "all";
        $cid= "all";
        $checkclass=false;
        $checkpackage=true;
        $table="Package";
        return view('Admin.Record.record',compact('orderclasss','table','orderpackages','checkpackage','checkclass','packages','classes','pid','cid'));
    }
    public function bydate(Request $request)
    {
        $packages = Package::all();
        $classes = Classes::all();
        //dd($request);
        $start=Carbon::parse(request('start'));
        $end=Carbon::parse(request('end'));
        $orderpackages = OrderPackage::whereBetween('start_date',[$start,$end])->get();
        $orderclasss = OrderClass::whereBetween('start_date',[$start,$end])->get();
        $pid= request('package_id');
        $cid= request('class_id');

        $checkclass= request('class');
        $checkpackage=request('package');
        $table=request('name');
        return view('Admin.Record.record',compact('orderclasss','table','orderpackages','checkpackage','checkclass','packages','classes','pid','cid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
