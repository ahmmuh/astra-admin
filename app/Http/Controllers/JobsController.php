<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use DB;
class JobsController extends Controller
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
         return redirect()->route('jobs.index')->with('success','Tjänsten utannonserats');
        
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
             return redirect()->route('jobs.index')->with('danger','Ett jobb uppdaterades');
     }

     

    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('jobs.index')->with('danger','En tjänst har nu raderats');

    }
}
