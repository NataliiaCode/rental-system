<?php

namespace App\Http\Controllers;

use App\Models\PropertyType;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index() {}
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
        //
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
        //
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
    }

    public function house()
    {
        // dd('Запит обробляється');
        $houses = PropertyType::where('id', 1)->first()->properties;
        return view('properties.house', compact('houses'));
    }

    public function apartments()
    {
        $apartments = PropertyType::where('id', 3)->first()->properties;
        return view('properties.apartments', compact('apartments'));
    }

    public function flats()
    {
        $flats = PropertyType::where('id', 2)->first()->properties;
        return view('properties.flats', compact('flats'));
    }

    public function twolevels()
    {
        $twolevels = PropertyType::where('id', 5)->first()->properties;
        return view('properties.twolevels', compact('twolevels'));
    }

    public function cottages()
    {
        $cottages = PropertyType::where('id', 20)->first()->properties;
        return view('properties.cottages', compact('cottages'));
    }
}
