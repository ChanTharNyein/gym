<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
use App\Classes;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $trainer=Trainer::all();
        return view('Admin.Class.createclass',compact('trainer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            "class_name" => 'required|min:3' ,
            "class_price" =>'required'  ,
            "class_image" => 'required|mimes:jpeg,jpg,png',
            "class_desc" => 'required',
            "trainer_id" => 'required'

        ]);

        if($request->hasFile('class_image')){
            $photo = $request->file('class_image');
            $name = time() . '.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/class_img/',$name);
            $photo = '/storage/class_img/'.$name;
        }
        else{
            $photo = '';
        }
        $class = new Classes;
        $class->name = request('class_name');
        $class->description = request('class_desc');
        $class->image = $photo;
        $class->price = request('class_price');
        $class->trainer_id = request('trainer_id');
        $class->save();
        return redirect()->route('tableclass');
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
        $class = Classes::find($id);
        $trainer=Trainer::all();
        return view('Admin.Class.update',compact('class','trainer'));
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
        $request->validate([
            "class_name" => 'required|min:3' ,
            "class_price" =>'required'  ,
            "class_image" => 'sometimes|mimes:jpeg,jpg,png',
            "class_desc" => 'required',
            "trainer_id" => 'required'

        ]);

        if($request->hasFile('class_image')){
            $photo = $request->file('class_image');
            $name = time() . '.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/class_img/',$name);
            $photo = '/storage/class_img/'.$name;
        }
        else{
            $photo = request('oldimg');
        }
        $class = Classes::find($id);
        $class->name = request('class_name');
        $class->description = request('class_desc');
        $class->image = $photo;
        $class->price = request('class_price');
        $class->trainer_id = request('trainer_id');
        $class->save();
        return redirect()->route('tableclass');
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
        $class = Classes::find($id);
        $class->delete();
        return redirect()->route('tableclass');
    }
    public function showclass()
    {
        //
        $trainer=Trainer::all();
        $classes=Classes::all();
        //dd($post);
        return view('Admin.Class.class',compact('trainer','classes'));
    }
}
