<?php

namespace App\Http\Controllers;

use App\Models\Enquiries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth::user()->id;
        $enquiries = Enquiries::where('user_id' , $user_id)->get();
        return view('user.enquiries', compact('enquiries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.enquiry_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enquiry = new Enquiries();
        $enquiry->user_id = Auth::user()->id;
        $enquiry->subject = $request->subject;
        $enquiry->description = $request->description;
        $enquiry->save();
        return redirect()->route('enquiries.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enquiries $enquiries)
    {
        $enquiries = Enquiries::all();
        return view('admin.enquiries.index', compact('enquiries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enquiries $enquiries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $enquiry = Enquiries::find($id);
        $enquiry->status = 'read';
        $enquiry->save();
        return redirect()->route('enquiries.all');
    }

    /**
     * Remove the specified resource from storage.
     */

}
