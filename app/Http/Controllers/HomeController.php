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
//        $this->middleware('auth');
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

        $ict_count = count(Incubatee::where('hub','ICT')->get());
        $ind_count = count(Incubatee::where('hub','Industrial')->get());

        $ict_stage_1 = count(Incubatee::where('hub','ICT')->where('stage','Stage 1')->get());
        $ict_stage_2 = count(Incubatee::where('hub','ICT')->where('stage','Stage 2')->get());
        $ict_stage_3 = count(Incubatee::where('hub','ICT')->where('stage','Stage 3')->get());

        $ind_stage_1 = count(Incubatee::where('hub','Industrial')->where('stage','Stage 1')->get());
        $ind_stage_2 = count(Incubatee::where('hub','Industrial')->where('stage','Stage 2')->get());
        $ind_stage_3 = count(Incubatee::where('hub','Industrial')->where('stage','Stage 3')->get());

       if($user->roles[0]->name=='app-admin'){
            return view('admin-home',compact('users','incubatees','ict_count','ind_count','ict_stage_1','ict_stage_2','ict_stage_3','ind_stage_1','ind_stage_2','ind_stage_3'));
        }else{
            return view('clerk-home',compact('incubatees','ict_count','ind_count','ict_stage_1','ict_stage_2','ict_stage_3','ind_stage_1','ind_stage_2','ind_stage_3'));
        }
    }

    public function getIncubatees(){
        $incubatees = Incubatee::with('user')->where('hub','ICT')->get();
        return view('home.Incubatees',compact('incubatees'));
    }

    public function getIndustrial(){
        $incubatees = Incubatee::with('user')->where('hub','Industrial')->get();
        return view('home.Industrial',compact('incubatees'));
    }

    public function getFounder(Incubatee $incubatee){

        return view('home.founders',compact('incubatee'));
    }

    public function getSmartCity(){
        $incubatees = Incubatee::all();
        return view('home.smart_city',compact('incubatees'));
    }
}
