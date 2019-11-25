<?php

namespace App\Http\Controllers;

use App\Post;
use App\Trainer;
use Illuminate\Http\Request;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $trainer = Trainer::all();
        return view('Admin.Trainer.trainer',compact('trainer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Trainer.addtrainer');
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
           "trainer_name" => 'required|min:3',
            "trainer_image" => 'required|mimes:jpeg,jpg,png',
            "trainer_desc" => 'required|min:3',
            "trainer_facebook" => 'required',
            "trainer_gmail" => 'required',
            "trainer_instagram" => 'required'
        ]);
        if($request->hasFile('trainer_image')){
            $tphoto = $request->file('trainer_image');
            $tname = time(). '.' .$tphoto->getClientOriginalExtension();
            $tphoto -> move(public_path().'/storage/post_img/',$tname);
            $tphoto = '/storage/post_img/'.$tname;
        }
        else{
        $tphoto = '';
    }
        $trainer = new Trainer;
        $trainer->name = request('trainer_name');
        $trainer->image = $tphoto;
        $trainer->description = request('trainer_desc');
        $trainer->facebook = request('trainer_facebook');
        $trainer->gmail = request('trainer_gmail');
        $trainer->instagram = request('trainer_instagram');
        $trainer->save();
        return redirect()->route('trainer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainer = Trainer::find($id);
        return $trainer;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainer = Trainer::find($id);
        return view('Admin.Trainer.edit_trainer',compact('trainer'));
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
        //$trainer = Trainer::find($id);
        //dd($trainer);
        //dd($request);
        $request->validate([
            "trainer_name" => 'required|min:3',
            "trainer_image" => 'sometimes|mimes:jpeg,png,jpg',
            "trainer_desc" => 'required|min:5',
            "trainer_facebook" => 'required',
            "trainer_gmail" => 'required',
            "trainer_instagram" => 'required'
        ]);
        if($request->hasFile('trainer_image')){
            $photo = $request->file('trainer_image');
            $name = time(). '.' .$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/post_img/',$name);
            $photo = '/storage/post_img/'.$name;
        }
        else{
            $photo = request('old_img');
        }
        $trainer = Trainer::find($id);
        //dd($trainer);
        $trainer->name = request('trainer_name');
        $trainer->image = $photo;
        $trainer->description = request('trainer_desc');
        $trainer->facebook = request('trainer_facebook');
        $trainer->gmail = request('trainer_gmail');
        $trainer->instagram = request('trainer_instagram');
        $trainer->save();
        return redirect()->route('trainer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer = Trainer::find($id);
        $posts = Post::where('trainer_id',$trainer->id)->get();
        $trainer->posts()->delete();
        $trainer->delete();
        return redirect()->route('trainer.index');
    }
    public function ourtrainer()
    {
        $trainer = Trainer::all();
        return view('trainers',compact('trainer'));
    }
}
