<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\student_detail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Show Complete profile form to user
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function filldetails(){
        if(Auth::user()->is_fully_registered==false){
            return view('fill-details');
        }
        else{
            abort('404');
        }
    }
    /**
     * Show Complete profile form to user
     * 
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function storestudentdetails(Request $request)
    {
        $validatedData = $request->validate([
            'branch' => 'max:10|required',
            'passing_year' => 'required|digits:4',
            'twitter_id' => 'active_url|nullable',
            'github_id' => 'active_url|nullable'
        ]);
        $validatedData['user_id']=Auth::id();
        $student=student_detail::create($validatedData);
        $student->user->is_fully_registered=true;
        $student->user->save();
        return redirect()->route('home');
    }

}
