<?php

namespace App\Http\Controllers;

use App\Models\PagesInfo;
use Illuminate\Http\Request;

class PagesInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function manageHistory()
    {
        $record = PagesInfo::first();
        return view('admin.about_page', compact('record'));
    }

    public function updateHistory(Request $request , $id)
    {
        $record = PagesInfo::find($id);
        $record->history = $request->history;
        $record->save();
        return redirect()->route('admin.home');
    }

    public function contactPage()
    {
        $record = PagesInfo::first();
        return view('admin.contact_page', compact('record'));
    }

    public function updateContactPage(Request $request, $id)
    {
        $record = PagesInfo::find($id);
        $record->address = $request->address;
        $record->contact = $request->contact;
        $record->email = $request->email;
        $record->save();
        return redirect()->route('admin.home');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PagesInfo $pagesInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PagesInfo $pagesInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PagesInfo $pagesInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PagesInfo $pagesInfo)
    {
        //
    }
}
