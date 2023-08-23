<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Applications::all();
        return view('admin.applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.application_create');
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
    public function show(Applications $applications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applications $applications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Applications $applications, $id)
    {
        $application = Applications::find($id);
        $application->status = 'approved';
        $application->save();

        $user = User::where('id', $application->user_id)->first();
        $student = Students::where('user_id', $user->id)->first();
        $student->status = 'active';
        $student->save();

        return redirect()->route('applications.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applications $applications)
    {
        //
    }
}
