<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $propertyTypes = PropertyType::all();
    //     return view('admin.propertyTypes.index', compact('propertyTypes'));
    // }

    public function index()
    {
        $propertyTypes = PropertyType::with('properties')->get();
        return view('admin.propertyTypes.index', compact('propertyTypes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('admin.propertyTypes.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        PropertyType::create($request->all());

        return redirect()->route('admin.propertyTypes.index')->with('success', 'Тип нерухомості створено.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(PropertyType $propertyType)
    // {
    //     return view('propertyTypes.show', compact('propertyType'));
    // }

    public function show(PropertyType $propertyType)
    {
        return view('admin.propertyTypes.show', compact('propertyType')); // Corrected view name
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit(PropertyType $propertyType)
    {
        return view('admin.propertyTypes.edit', compact('propertyType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyType $propertyType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $propertyType->update($request->all());

        return redirect()->route('admin.propertyTypes.index')->with('success', 'Тип нерухомості оновлено.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(PropertyType $propertyType)
    {
        $propertyType->delete();

        return redirect()->route('admin.propertyTypes.index')->with('success', 'Тип нерухомості видалено.');
    }
}
