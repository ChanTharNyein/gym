<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
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
        $package = Package::all();
        return view('Admin.Package.package',compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Package.createpackage');
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
            "title" => 'required|min:3',
            "price" => 'required|min:1',
            "serviceid1" => 'required|min:3',
            "serviceid2" => 'required|min:3',
            "serviceid3" => 'required|min:3',
            "serviceid4" => 'required|min:3',
            "serviceid5" => 'required|min:3'
        ]);
        $package = new Package;
        //dd($package);
        $package->title =  request('title');
        $package->price = request('price');
        $package->service1 = request('serviceid1');
        $package->service2 = request('serviceid2');
        $package->service3 = request('serviceid3');
        $package->service4 = request('serviceid4');
        $package->service5 = request('serviceid5');
        $package->save();
        return redirect()->route('package.index');
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
        $package = Package::find($id);
        return view('Admin.Package.edit_package',compact('package'));
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
            "title" => 'required|min:3',
            "price" => 'required|min:1',
            "serviceid1" => 'required|min:3',
            "serviceid2" => 'required|min:3',
            "serviceid3" => 'required|min:3',
            "serviceid4" => 'required|min:3',
            "serviceid5" => 'required|min:3'
        ]);
        $package = Package::find($id);
        //dd($package);
        $package->title =  request('title');
        $package->price = request('price');
        $package->service1 = request('serviceid1');
        $package->service2 = request('serviceid2');
        $package->service3 = request('serviceid3');
        $package->service4 = request('serviceid4');
        $package->service5 = request('serviceid5');
        $package->save();
        return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();
        return redirect()->route('package.index');
    }

}
