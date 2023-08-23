<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Packages;
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
        return view('user/home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packages = Packages::all();
        return view('user.student_create', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Students::where('user_id', Auth::user()->id)->first();
        if ($student)
        {
            $message = 'You have Already applied for training for one program';
            return redirect()->route('student.create')->with('message' , 'You have Already applied for training for one program');
        }
        else
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

        $application = new Applications();
        $application->user_id = Auth::user()->id;
        $application->program_id = $request->program_id;
        $application->time_slot = $request->time_slot;
        $application->save();

        return redirect()->route('student.home');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        $students = Students::all();
        return view('admin.students.index', compact('students'));
    }

    public function dashboard(Students $students)
    {
        return view('user.dashboard');
    }

    public function application_status(Students $students)
    {
        $user_id = Auth::user()->id;
        $user = Students::all()->where('user_id', $user_id)->first();
        if($user)
            {
                if ($user->status == 'active')
                    $status = '1';
                else
                    $status = '0';
            }
        else
            {
                $status = '2';
            }
        return view('user.application_status', compact('status') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Students $students, $id)
    {
        $student = Students::find($id);
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Students $students, $id)
    {
        $student = Students::find($id);
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->age = $request->age;
        $student->gender = $request->gender;
        $student->time_slot = $request->time_slot;
        $student->program_id = $request->program_id;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students, $id)
    {
        $student = Students::find($id);
        $student->delete();
        return redirect()->route('students.index');
    }
}
