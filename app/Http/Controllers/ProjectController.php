<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\project;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\tag;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.viewproject');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staffs= User::role('staff')->get();
        return view('student.createproject',['staffs' => $staffs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'topic' => 'required|max:55|',
            'staff_id' => 'required|max:4',
            'domain'=>'required|string',
            'github_link'=>'nullable|active_url',
            'video' => 'nullable|active_url',
            'report'=> 'file|mimes:pdf',
            'presentation'=>'file|mimes:ppt,pptx,pptm,pot,potx,pdf',
        ]);
        $validatedData['user_id']=Auth::id();
        $project=Project::create($validatedData);
        if($request->exists('report')){
            $report=$request->file('report');
            $reportfilename=uniqid(Auth::id().'_report_').'.'.$report->getClientOriginalExtension();
            $path=Storage::putFileAs('public', $report, $reportfilename);
            $project->report=$path;
        }
        if($request->exists('presentation')){
            $presentation = $request->file('presentation');
            $presentationfilename = uniqid(Auth::id() . '_presentation_') . '.' . $presentation->getClientOriginalExtension();
            $path = Storage::putFileAs('public', $presentation, $presentationfilename);
            $project->presentation = $path;
        }
        if($request->is_paper_published=='1'){
            $project->is_research_published=1;            
            $project->research_paper=$request->research_paper; 
        }
        $project->save();
        if ($request->exists('tag')) {
         foreach ($request->tag as $k) {
             tag::create(['tag_name'=>$k,'project_id'=>$project->id]);
         }   
        }
    return redirect('/project/'.$project->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $project=Project::find($id);
    return view('project.project',['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
        return redirect()->back();
    }
    /**
     * Return Datatable of Projects
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewselfproject()
    {
        $id=Auth::id();
        $project=Project::where('user_id',$id)->get();
        // dd($project);
        return DataTables::of($project)
            ->addColumn('mentor',function ( Project $project){
                $staff=User::find($project->staff_id);
                return ''.$staff->name.'';
            })
            ->addColumn('delete', function (Project $project) {
                return '<button id="' . $project->id . '" class="delete text-white btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="nav-icon i-Close-Window font-weight-bold"></i></button>';
            })
            ->addColumn('view', function (Project $project) {
                return '<a  class="view text-primary " href="/project/' . $project->id . '"><i class="nav-icon i-Pen-2 font-weight-bold"></i></a>';
            })
            ->rawColumns(['mentor','delete',  'view'])
            ->make(true);
    }
}
