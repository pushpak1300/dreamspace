<?php

namespace App\Http\Controllers;

use App\project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    /**
     * Show the admin creation form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewstaffs()
    {
        if (!Auth::user()->can('view-staffs')) {
            abort(403, 'Unauthorized action.');
        }

        return view('admin.managestaff');
    }

    /**
     * Show the admin creation form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createstaff()
    {
        if (!Auth::user()->can('add-staff')) {
            abort(403, 'Unauthorized action.');
        }

        return view('admin.createstaff');
    }

    /**
     * Store the staff.
     *
     * @param \Illuminate\Http\Request;
     *
     * @return Response
     */
    public function storestaff(Request $request)
    {
        if (!Auth::user()->can('add-staff')) {
            abort(403, 'Unauthorized action.');
        }

        //validating data
        $validatedData = $request->validate([
            'name'     => 'required|string|min:3',
            'email'    => 'required|unique:users|max:30|email:rfc',
            'password' => 'required|confirmed',
            'avtar'    => 'string',
        ]);
        $validatedData['password'] = Hash::make($request->password);
        $user = User::create($validatedData);
        $user->assignRole('staff');

        return redirect()->back()->with('success', 'Staff Added Sucessfully!');
    }

    /**
     * Return the data table for the student.
     *
     * @param \Illuminate\Http\Request;
     *
     * @return Response
     */
    public function fetchAllStaff()
    {
        $staff = User::role('staff')->get();

        return DataTables::of($staff)
            ->addColumn('status', function (User $staff) {
                if ($staff->is_fully_registered === 0) {
                    return '<span class="badge badge-pill badge-danger p-2 m-1">Incomplete</span>';
                } else {
                    return '<span class="badge badge-pill badge-success p-2 m-1">Complete</span>';
                }

                return '<span class="badge badge-pill badge-danger p-2 m-1">Incomplete</span>';
            })
            ->addColumn('delete', function (User $staff) {
                return '<button id="'.$staff->id.'" class="delete text-white btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="nav-icon i-Close-Window font-weight-bold"></i></button>';
            })
            ->addColumn('view', function (User $staff) {
                return '<a  class="view text-primary" href="/admin/staff/'.$staff->id.'"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>';
            })
            ->rawColumns(['status', 'delete',  'view'])
            ->make(true);
    }

    /**
     * Show the admin creation form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewstudents()
    {
        return view('admin.managestudent');
    }

    /**
     * Show the admin creation form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createstudent()
    {
        return view('admin.createstudent');
    }

    /**
     * Store the student.
     *
     * @param \Illuminate\Http\Request;
     *
     * @return Response
     */
    public function storestudent(Request $request)
    {
        Auth::user()->can('add student');

        //validating data
        $validatedData = $request->validate([
            'name'     => 'required|string|min:3',
            'email'    => 'required|unique:users|max:30|email:rfc',
            'password' => 'required|confirmed',
            'roll_no'  => 'nullable|int',
            'avtar'    => 'string',
        ]);
        $validatedData['password'] = Hash::make($request->password);
        $user = User::create($validatedData);
        $user->assignRole('student');

        return redirect()->back()->with('success', 'Student Added Sucessfully!');
    }

    /**
     * Return the data table for the student.
     *
     * @param \Illuminate\Http\Request;
     *
     * @return Response
     */
    public function fetchAllstudent()
    {
        $student = User::role('student')->get();

        return DataTables::of($student)
            ->addColumn('status', function (User $student) {
                if ($student->is_fully_registered === 0) {
                    return '<span class="badge badge-pill badge-danger p-2 m-1">Incomplete</span>';
                } else {
                    return '<span class="badge badge-pill badge-success p-2 m-1">Complete</span>';
                }

                return '<span class="badge badge-pill badge-danger p-2 m-1">Incomplete</span>';
            })
            ->addColumn('delete', function (User $student) {
                return '<button id="'.$student->id.'" class="delete text-white btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="nav-icon i-Close-Window font-weight-bold"></i></button>';
            })
            ->addColumn('view', function (User $student) {
                return '<a  class="view text-primary " href="/admin/student/'.$student->id.'"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>';
            })
            ->rawColumns(['status', 'delete',  'view'])
            ->make(true);
    }

    public function deletestudent(Request $request)
    {
        Auth::user()->can('delete student'); //checking permission
        $id = $request->id; //requesting id from user
        $user = User::findorfail($id); //taking user id
        $user->delete(); //delete user instance
        return redirect()->back()->with('warning', 'Student Deleted Sucessfully!'); //redirect back
    }

    public function fetchallproject()
    {
        $project = Project::all();

        return DataTables::of($project)
            ->addColumn('mentor', function (Project $project) {
                $staff = User::find($project->staff_id);

                return ''.$staff->name.'';
            })
            ->addColumn('owner', function (Project $project) {
                $user = User::find($project->user_id);

                return ''.$user->roll_no.'';
            })
            ->addColumn('delete', function (Project $project) {
                return '<button id="'.$project->id.'" class="delete text-white btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="nav-icon i-Close-Window font-weight-bold"></i></button>';
            })
            ->addColumn('view', function (Project $project) {
                return '<a  class="view text-primary " href="/project/'.$project->id.'"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>';
            })
            ->rawColumns(['mentor', 'owner', 'delete', 'view'])
            ->make(true);
    }

    public function viewproject()
    {
        return view('admin.project');
    }
}
