<?php

namespace App\Http\Controllers;
use App\Http\Resources\OrderPackageResource as OrderPackageResource;
use App\OrderPackage;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class OrderPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $packages = OrderPackage::all();
//        //dd($orderpackage);
//        $name=[];
//        foreach ($packages->user as $username){
//            $namepush=$username->name;
//            array_push($name,$namepush);
//
//        }
//        dd($name);
//
//        $orderpackage= OrderPackageResource::collection(OrderPackage::all());
//        //dd($orderpackage);
//        return view('Admin.OrderPackage.orderpackage',compact('orderpackage'));
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
