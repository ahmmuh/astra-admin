<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Application;

class ApplyJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Apply job';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'telefon' => 'required|numeric',
            'description' => 'required',
            'location' => 'required',
            // 'jobType' => 'required',
        ],
        [
        'firstName.required' => 'Detta fält är obligatoriskt (Förnamn)',
        'lastName.required' => 'Detta fält är obligatoriskt (Efternamn)',
        'email.required' => 'Detta fält är obligatoriskt (E-post)',
        'telefon.required' => 'Detta fält är obligatoriskt, siffror (Telefon)',
        'description.required' => 'Detta fält är obligatoriskt (kort beskrivning om dig)',
        'location.required' => 'Vilken ort?'
        // 'jobType.required' => 'Detta fält är obligatoriskt (Vad är det för jobb du söker?)',
    ]
    );
       $applications = Application::create($request->all());
        return redirect()->route('jobs')->with('success','Din ansökan har nu skickats, Vi återkommer till dig inom kort');
    }

    /**
     * Display the specified resource.
     */
  public function show($id)
    {   
        $job = Job::findOrFail($id);
        return view('frontend.jobs.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
