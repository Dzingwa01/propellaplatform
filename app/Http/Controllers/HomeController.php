<?php

namespace App\Http\Controllers;

use App\Incubatee;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getIncubatees(){
        $incubatees = Incubatee::all();
        return view('home.Incubatees',compact('incubatees'));
    }

    public function getFounder(Incubatee $incubatee){

        return view('home.founders',compact('incubatee'));
    }
}
