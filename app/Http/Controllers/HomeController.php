<?php

namespace App\Http\Controllers;

use App\Incubatee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('home');
        $user = Auth::user()->load('roles');
        $users = User::all();
        $incubatees = User::whereHas('roles',function($query){
            $query->where('name','incubatee');
        })->get();

       if($user->roles[0]->name=='app-admin'){
            return view('admin-home',compact('users','incubatees'));
        }else{
            return view('clerk-home',compact('incubatees'));
        }
    }

    public function getIncubatees(){
        $incubatees = Incubatee::all();
        return view('home.Incubatees',compact('incubatees'));
    }

    public function getFounder(Incubatee $incubatee){

        return view('home.founders',compact('incubatee'));
    }

    public function getSmartCity(){
        $incubatees = Incubatee::all();
        return view('home.smart_city',compact('incubatees'));
    }
}
