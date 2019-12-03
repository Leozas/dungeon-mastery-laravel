<?php

namespace App\Http\Controllers;

use App\Weapons;
use Illuminate\Http\Request;

class WeaponsController extends Controller
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
     * @param  \App\Weapons  $weapons
     * @return \Illuminate\Http\Response
     */
    public function show(Weapons $weapons)
    {
        return Weapons::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Weapons  $weapons
     * @return \Illuminate\Http\Response
     */
    public function edit(Weapons $weapons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Weapons  $weapons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weapons $weapons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Weapons  $weapons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weapons $weapons)
    {
        //
    }
}
