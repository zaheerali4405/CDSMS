<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Enquiries;
use App\Models\Packages;
use App\Models\PagesInfo;
use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('role' , '0')->count();
        $packages = Packages::count();
        $active_students = Students::where('status', 'active')->count();
        $inactive_students = Students::where('status', 'inactive')->count();
        $unread_enquiries = Enquiries::where('status', 'unread')->count();
        $read_enquiries = Enquiries::where('status', 'read')->count();
        $pending_applications = Applications::where('status' , 'pending')->count();
        $confirmed_applications = Applications::where('status' , 'confirmed')->count();
        return view('admin.dashboard', compact('users', 'packages', 'active_students', 'inactive_students', 'unread_enquiries', 'read_enquiries', 'pending_applications', 'confirmed_applications'));
    }

    public function updateProfile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('admin.update_profile', compact('user'));
    }

    public function store(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.home');
    }
}
