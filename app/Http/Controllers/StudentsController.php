<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Packages;
use App\Models\Students;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Packages::all();
        return view('user/home', compact('packages'));
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

    //  Function for making a registration number
    public function RegistrationNo() {
        $createType = 'ST';
        $last = Students::query()->select('registration_number')->orderBy('id', 'DESC')->first();

        if($last) {
            $l = substr($last->registration_number, 4, 3);
            $n = substr($last->registration_number, -4);

            if ($n == 9999) {
                $n = 1;
                $l++;
            } else {
                $n++;
            }
        } else {
            $l = "AAA";
            $n = 1;
        }
        return $createType.date('y').$l.sprintf("%04d",$n);

        //return a registration number in format: ST23AAA0001

    }

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
        $student->registration_number = $this->RegistrationNo();
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->age = $request->age;
        $student->cnic = $request->cnic;
        $student->address = $request->address;
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


    public function updateProfile()
    {
        $user = User::find(Auth::user()->id);
        return view('user.update_profile', compact('user'));
    }

    public function updateProfileSave(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password){
        $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect(route('student.home'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students)
    {
        $students = Students::all();
        return view('admin.students.index', compact('students'));
    }

    public function application_status(Students $students)
    {
        $user_id = Auth::user()->id;
        $application = Applications::all()->where('user_id' , $user_id)->first();
        if ($application){
            $status = '1';
        }
        else{
            $status = '0';
        }
        return view('user.application_status', compact('application' , 'status') );
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


    public function search(Students $students, Request $request)
    {
        $reg = $request->reg;
        $students = Students::where('registration_number', 'LIKE', "%$reg%")->get();
        return view('admin.students.search', compact('students'));
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
