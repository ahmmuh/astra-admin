<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use Illuminate\Http\Request;
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
        $applications =  Job::all();
        return view('applications.index',compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs = Job::all();
        return view('applications.create',compact('jobs'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required:max:10',
            'description' => 'required',
            'blogImage' => 'required|mimes:jpeg,png,jpg|max:2048',

        ]);
        
         $blogImage = time() . '.' . $request->blogImage->extension();
        // $request->image->move(public_path('images'), $imageName);
        $request->blogImage->storeAs('public/images', $blogImage);
          Blog::create($request->all());
         return redirect()->route('applications.index')->with('success','One item has been added');
        
    }

 
 
   

}
