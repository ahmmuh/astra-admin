<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsControllerAPI extends Controller
{
     /**
  */

  public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
    $jobs =  Job::latest()->simplePaginate(5);
       return $jobs;
    }

    public function store(Request $request)
    {
        $request->validate([
            'jobTitle' => 'required:max:10',
            'jobDescription' => 'required',
            'location' => 'required',
            'publiceradDatum' => 'required',
            'slutDatum' => 'required',

        ],
     [
        'jobTitle.required' => 'Du måste ha titel',
        'jobDescription.required' => 'Tjänsten måste ha beskrivning',
        'location.required' => 'Vilken ort?',
        'publiceradDatum.required' => 'Välj publiceringsdatum',
        'slutDatum.required' => 'Sista ansökninsgdatum saknas',
    ]);
        
       
          Job::create($request->all());
         return $job;
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $job = Job::findOrFail($id);
        return $job;
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return $job;
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
       $request->validate([
            'jobTitle' => 'required',
            'jobDescription' => 'required',
            'location' => 'required',
            'publiceradDatum' => 'required',
            'slutDatum' => 'required',

        ],
    
        [
        'jobTitle.required' => 'Du måste ha titel',
        'jobDescription.required' => 'Tjänsten måste ha beskrivning',
        'location.required' => 'Vilken ort?',
        'publiceradDatum.required' => 'Välj publiceringsdatum',
        'slutDatum.required' => 'Sista ansökninsgdatum saknas',
    ]
    );

    $job->update($request->all());
    return $job;
     }

     

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return $job;

    }
}
