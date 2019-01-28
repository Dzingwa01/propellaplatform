<?php

namespace App\Http\Controllers;

use App\Incubatee;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class IncubateeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.incubatees.create');
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
        DB::beginTransaction();
        try{
            $input = $request->all();
            $incubatee_role = Role::where('name','incubatee')->first();

            $user = User::create(['name'=>$input['name'],'surname'=>$input['surname'],'contact_number'=>$input['contact_number'],'email'=>$input['email'],'password'=>Hash::make('secret')]);
            $user->roles()->attach($incubatee_role->id);
            $path = $request->file('profile_picture_url')->store('incubatees');
            $incubatee = Incubatee::create(['user_id'=>$user->id,'short_bio'=>$input['short_bio'],'elevator_pitch'=>$input['elevator_pitch'],'facebook'=>$input['facebook'],'linked_in'=>$input['linked_in'],'twitter'=>$input['twitter'],'profile_picture_url'=>$path]);
            DB::commit();
            return response()->json(['message'=>'Incubatee has been successfully saved, please proceed to enter start up information','user'=>$user,'incubatee'=>$incubatee]);
        }catch(Exception $e){
            DB::rollback();
            return response()->json(['message'=>'An error occured, please contact your IT Admin '.$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Incubatee  $incubatee
     * @return \Illuminate\Http\Response
     */
    public function show(Incubatee $incubatee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Incubatee  $incubatee
     * @return \Illuminate\Http\Response
     */
    public function edit(Incubatee $incubatee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Incubatee  $incubatee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Incubatee $incubatee)
    {
        //
        DB::beginTransaction();
        try{
            $input = $request->all();
            $path = $request->file('logo_url')->store('incubatees');
            $incubatee->update(['stage'=>$input['stage'],'cohort'=>$input['cohort'],'logo_url'=>$path,'startup_name'=>$input['startup_name'],'hub'=>$input['hub'],'smart_city_tags'=>$input['smart_city_tags'],'b_type'=>$input['b_type'],'company_website'=>$input['company_website'],'product_platform'=>$input['product_platform']]);
            $incubatee->save();
            DB::commit();
            return response()->json(['message'=>'Incubatee has been successfully saved.','incubatee'=>$incubatee]);
        }catch(Exception $e){
            DB::rollback();
            return response()->json(['message'=>'An error occured, please contact your IT Admin '.$e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Incubatee  $incubatee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incubatee $incubatee)
    {
        //
        DB::beginTransaction();
        try{
            $user = $incubatee->user;
//            dd($user);
            $incubatee->delete();
            $user->delete();
        DB::commit();
        return redirect('incubatees');

        }catch(Exception $e){
            DB::rollback();
            return response()->json(['message'=>'An error occured, please contact your IT Admin '.$e->getMessage()]);
        }
    }
}
