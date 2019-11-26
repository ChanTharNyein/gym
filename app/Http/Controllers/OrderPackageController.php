<?php

namespace App\Http\Controllers;
use App\Package;
use App\Trainer;
use App\Http\Resources\OrderPackageResource as OrderPackageResource;
use App\OrderPackage;
use Carbon\Carbon;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderpackages = OrderPackage::all();
        return view('Admin.OrderPackage.orderpackage', compact('orderpackages'));
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

        $request->validate([
            'name' => 'required|min:2',
            'phone' => 'required'
        ]);
        $order=new OrderPackage;
        $order->user_id = Auth::id();
        $order->phone=request('phone');
        $order->package_id=request('package_id');
        $order->trainer_id=request('trainer_id');
        $order->appointment_date=Carbon::parse(request('appointdate'));
        $order->save();
        $packages = Package::all();
        $trainer = Trainer::all();
        return view('index',compact('trainer','packages'));
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
        $orderpackage = OrderPackage::find($id);
        $trainers = Trainer::all();
        $packages = Package::all();
        return view('Admin.OrderPackage.update',compact('trainers','packages','orderpackage'));
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
        $orderpackage = OrderPackage::find($id);
        $orderpackage->delete();
        return redirect()->route('orderpackage.index');
    }
}
