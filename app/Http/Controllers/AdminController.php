<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    /**
     * Show the admin creation form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewstaffs()
    {
        Auth::user()->can('view staff');
        return view('admin.managestaff');
    }
    /**
     * Show the admin creation form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createstaff()
    {
        return view('admin.createstaff');
    }
    /**
     * Store the staff
     *
     * @param \Illuminate\Http\Request;
     * @return Response
     */
    public function storestaff(Request $request)
    {   
        Auth::user()->can('add staff');
        
        //validating data
        $validatedData = $request->validate([
            'name'=>'required|string|min:3',
            'email' => 'required|unique:users|max:30|email:rfc',
            'password' => 'required|confirmed',
            'avtar' =>  'string'
        ]);
        $validatedData['password'] = Hash::make($request->password);
        $user=User::create($validatedData);
        $user->assignRole('staff');
        return redirect()->back()->with('success', 'Staff Added Sucessfully!');
    }
    /**
     * Return the data table for the student
     *
     * @param \Illuminate\Http\Request;
     * @return Response
     */
    public function fetchAllStaff()
    {
        $staff=User::role('staff')->get();
        return DataTables::of($staff)
            ->addColumn('status', function (User $staff) {
                if($staff->is_fully_registred == false){
                return 'Incomplete';
                }
                else {
                return 'Complete';
                }
            return 'Incomplete';
            })
            ->addColumn('delete', function (User $staff) {
                return '<button id="' . $staff->id . '" class="delete btn-sm" data-toggle="modal" data-target="#deleteModal"><img src="https://img.icons8.com/flat_round/24/000000/delete-sign.png"></button>';
            })
            ->addColumn('view', function (User $staff) {
                return '<a  class="view " href="/admin/staff/' . $staff->id . '"><img src="https://img.icons8.com/material-outlined/24/000000/view-file.png"></a>';            })
            ->rawColumns(['status','delete',  'view'])
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
     * Store the student
     *
     * @param \Illuminate\Http\Request;
     * @return Response
     */
    public function storestudent(Request $request)
    {
        Auth::user()->can('add student');

        //validating data
        $validatedData = $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|unique:users|max:30|email:rfc',
            'password' => 'required|confirmed',
            'roll_no'  => 'nullable|int',
            'avtar' =>  'string'
        ]);
        $validatedData['password']=Hash::make($request->password);
        $user = User::create($validatedData);
        $user->assignRole('student');
        return redirect()->back()->with('success', 'Student Added Sucessfully!');
    }
    /**
     * Return the data table for the student
     *
     * @param \Illuminate\Http\Request;
     * @return Response
     */
    public function fetchAllstudent()
    {
        $student = User::role('student')->get();
        return DataTables::of($student)
            ->addColumn('status', function (User $student) {
                if ($student->is_fully_registred == false) {
                    return 'Incomplete';
                } else {
                    return 'Complete';
                }
                return 'Incomplete';
            })
            ->addColumn('delete', function (User $student) {
                return '<button id="'. $student->id .'" class="delete btn-sm" data-toggle="modal" data-target="#deleteModal"><img src="https://img.icons8.com/flat_round/24/000000/delete-sign.png"></button>';
            })
            ->addColumn('view', function (User $student) {
                return '<a  class="view " href="/admin/student/'. $student->id .'"><img src="https://img.icons8.com/material-outlined/24/000000/view-file.png"></a>';
            })
            ->rawColumns(['status', 'delete',  'view'])
            ->make(true);
    }
    public function deletestudent(Request $request){
        Auth::user()->can('delete student');//checking permission
        $id=$request->id;//requesting id from user
        $user=User::findorfail($id);//taking user id
        $user->delete();//delete user instance
        return redirect()->back()->with('warning', 'Student Deleted Sucessfully!');//redirect back
    }
}
