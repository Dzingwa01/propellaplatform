<?php

namespace App\Http\Controllers;

use App\Incubatee;
use Illuminate\Http\Request;

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
    }
}
