<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\project;
use Yajra\DataTables\Facades\DataTables;
use App\User;

class ReportController extends Controller
{
    public function report(){
        if(!Auth::user()->hasRole('admin')){
             abort(403, 'Unauthorized action.');
        }
        return view('report.main');
    }
    public function reportform(Request $request){
      if(!Auth::user()->hasRole('admin')){
             abort(403, 'Unauthorized action.');
        } 
        // dd($request->all());
        if($request->report=='year'){
            $report="/yearreport";
        }
        if($request->report=='dep'){
            $report="/depreport";
        }
        if($request->report=='all'){
            $report="/allreport";
        }
        return view('report.report',['report'=>$report]);
    }
    public function yearreport(Project $project){

    }
    public function allreport(Project $project){
        $project = Project::all();

        return DataTables::of($project)
        ->addColumn('is_research_published', function (Project $project) {
                if($project->is_research_published==1){
                return 'Yes';
            }
            if($project->is_research_published==0){
                return 'No';
            }
            })
            ->addColumn('no', function (Project $project) {
                $user = User::find($project->user_id);

                return ''.$user->roll_no.'';
            })
            ->addColumn('name', function (Project $project) {
                $user = User::find($project->user_id);

                return ''.$user->name.'';
            })
            ->addColumn('department', function (Project $project) {
                $user = User::find($project->user_id);
                return strtoupper(''.$user->studentdetails->branch.'');
            })
            ->rawColumns(['no','name','department'])
            ->make(true);
    }
}
