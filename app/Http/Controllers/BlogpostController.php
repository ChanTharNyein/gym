<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogpostController extends Controller
{
    public function __construct()
    {
        $this->middleware ('role:admin',['except'=>['index','postid','categoryid']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::all();
        //dd($posts);
        $category=Category::all();
        return view('bloghome',compact('post','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainer=Trainer::all();
        $category=Category::all();
        return view('Admin.BlogPost.addpost',compact('trainer','category'));
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
        //dd($request);
        $request->validate([
            "post_title" => 'required|min:3' ,
            "post_desc" =>'required|min:3'  ,
            "post_image" => 'required|mimes:jpeg,jpg,png',
            "trainer_id" => 'required',
            "category_id" => 'required'
        ]);

        if($request->hasFile('post_image')){
            $photo = $request->file('post_image');
            $name = time() . '.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/post_img/',$name);
            $photo = '/storage/post_img/'.$name;
        }
        else{
            $photo = '';
        }
        $post = new Post;
        $post->title = request('post_title');
        $post->description = request('post_desc');
        $post->image = $photo;
        $post->category_id = request('category_id');
        $post->trainer_id = request('trainer_id');
        $post->save();
        return redirect()->route('table');
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
        $post = Post::find($id);
        $trainer=Trainer::all();
        $category=Category::all();
        return view('Admin.BlogPost.updatepost',compact('post','trainer','category'));

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
            "post_title" => 'required|min:3',
            "post_desc" =>'required|min:3',
            "post_image" => 'sometimes|mimes:jpeg,jpg,png',
            "trainer_id" => 'required',
            "category_id" => 'required'
        ]);

        if($request->hasFile('post_image')){
            $photo = $request->file('post_image');
            $name = time() . '.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/post_img/',$name);
            $photo = '/storage/post_img/'.$name;
        }
        else{
            $photo = request('oldimg');
        }
        $post = Post::find($id);
        $post->title = request('post_title');
        $post->description = request('post_desc');
        $post->image = $photo;
        $post->category_id = request('category_id');
        $post->trainer_id = request('trainer_id');
        $post->save();
        return redirect()->route('table');
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
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('table');
    }
    public function showtable()
    {
        $posts=Post::all();

        return view('Admin.BlogPost.post',compact('posts'));
    }
    public function postid($id)
    {
        $post=Post::find($id);
        $name=$post->trainer_id;
        $cate=$post->category_id;
        $category=Category::where('id',$cate)->get();
        $trainer=Trainer::where ('id',$name)->get();

        return view('blogpost',compact('post','trainer','category'));
    }
    public function categoryid($id)
    {
        //dd($id);
        $post=Post::where('category_id',$id)->get();
        $category=Category::all();
        //dd($post);
        return view('bloghome',compact('post','category'));
    }
    /*public function trainerid($id)
    {
        //dd($id);
        $post=Post::where('trainer_id',$id)->get();
        $trainer=Trainer::all();
        //dd($post);
        return view('bloghome',compact('post','trainer'));
    }*/
}
