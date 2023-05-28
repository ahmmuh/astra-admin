<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
  */
    public function index()
    {
    $jobs =  Job::latest()->simplePaginate(5);
       return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
        return view('jobs.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jobtitle' => 'required:max:10',
            'jobDescription' => 'required',
            'location' => 'required',
            'publiceradDatum' => 'required',
            'slutDatum' => 'required',

        ]);
        
       
          Job::create($request->all());
         return redirect()->route('jobs.index')->with('success','One item has been added');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $job = Job::findOrFail($id);
        return view('jobs.show',compact('job'));
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.edit',compact('job'));
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
       $request->validate([
            'jobtitle' => 'required:max:10',
            'jobDescription' => 'required',
            'location' => 'required',
            'publiceradDatum' => 'required',
            'slutDatum' => 'required',

        ]);
     
    $job->update();
    return redirect()->route('jobs.index')->with('success','One item has been updated');
     }

     

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('jobs.index')->with('success','One item has been deleted');

    }
}
