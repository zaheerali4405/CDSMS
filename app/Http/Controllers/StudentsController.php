<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $user = Students::all()->where('user_id', $user_id)->first();
        if ($user->status == 'active')
            $status = 'active';
        else
            $status = 'inactive';
        return view('user/home', compact('status') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.student_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Students();
        $student->user_id = Auth::user()->id;
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->time_slot = $request->time_slot;
        $student->program_id = $request->program_id;
        $student->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        //
    }

    public function dashboard(Students $students)
    {
        return view('user.dashboard');
    }

    public function application_status(Students $students)
    {
        $user_id = Auth::user()->id;
        $user = Students::all()->where('user_id', $user_id)->first();
        if ($user->status == 'active')
            $status = 'active';
        else
            $status = 'inactive';
        return view('user.application_status', compact('status') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students)
    {
        //
    }
}
