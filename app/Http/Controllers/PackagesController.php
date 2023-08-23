<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Packages::all();
        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $package = new Packages();
        $package->name = $request->name;
        $package->duration = $request->duration;
        $package->fee = $request->fee;
        $package->vehicle = $request->vehicle;
        $package->save();
        return redirect()->route('admin.packages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Packages $packages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Packages $packages, $id)
    {
        $package = Packages::all()->where('id', $id)->first();
        return view('admin.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Packages $packages, $id)
    {
        $package = Packages::all()->where('id', $id)->first();
        $package->name = $request->name;
        $package->duration = $request->duration;
        $package->fee = $request->fee;
        $package->vehicle = $request->vehicle;
        $package->save();
        return redirect()->route('admin.packages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Packages $packages, $id)
    {
        $package = Packages::all()->where('id', $id)->first();
        $package->delete();
        return redirect()->route('admin.packages.index');
    }
}
