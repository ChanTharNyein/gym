<?php

namespace App\Http\Controllers;

use App\Package;
use App\Trainer;
use Illuminate\Http\Request;

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
        $trainer = Trainer::all();
        $packages = Package::all();
        return view('index',compact('packages','trainer'));
    }
}
