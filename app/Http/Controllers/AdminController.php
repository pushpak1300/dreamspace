<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{

    /**
     * Show the admin creation form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function viewstaff()
    {
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
            'roll_no'  => 'nullable|int',
            'avtar' =>  'string'
        ]);
        $user=User::create($validatedData);
        $user->assignRole('staff');
        return redirect()->back()->with('success', 'Staff Added Sucessfully!');
    }
    public function getRegisteredStaffDatatable()
    {
        return User::where('is_fully_registered', true)->orderBy('created_at', 'desc');
    }
    public function getUnRegisteredStaffDatatable()
    {
        return User::where('is_fully_registered', false)->orderBy('created_at', 'desc');
    }
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
}
