<?php

namespace App\Http\Controllers;
use App\FreeForm;
use App\User;
use App\Package;
use App\Review;
use App\Trainer;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $review = Review::all();
        $user = User::all();
        $trainer = Trainer::all();
        $packages = Package::all();
        return view('index',compact('packages','trainer','user','review'));
    }
    public function home()
    {
        $review = Review::all();
        $user = User::all();
        $trainer = Trainer::all();
        $packages = Package::all();
        return view('index',compact('packages','trainer','user','review'));
    }
    public function freeform(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        $freeform = new FreeForm;
        $freeform->name = request('name');
        $freeform->email = request('email');
        $freeform->phone = request('phone');
        $freeform->save();
        return redirect()->route('home');
    }

}
