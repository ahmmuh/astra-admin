<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationControllerAPI extends Controller
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
        $applications = Application::orderBy('id', 'DESC')->get();
      return $applications;
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'telefon' => 'required|numeric',
            'description' => 'required',
            'jobType' => 'required',
            'location' => 'required',
        ],
        [
        'firstName.required' => 'Detta fält är obligatoriskt (Förnamn)',
        'lastName.required' => 'Detta fält är obligatoriskt (Efternamn)',
        'email.required' => 'Detta fält är obligatoriskt (E-post)',
        'telefon.required' => 'Detta fält är obligatoriskt, siffror (Telefon)',
        'description.required' => 'Detta fält är obligatoriskt (kort beskrivning om dig)',
        'jobType.required' => 'Detta fält är obligatoriskt (Vad är det för jobb du söker?)',
        'location.required' => 'Detta fält är obligatoriskt (Ort)',
    ]
    );
        Application::create($request->all());
        return $application;
        
    }

 

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $application = Application::findOrFail($id);
        return $application;
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $application = Application::findOrFail($id);
        return $application;
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
       $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'telefon' => 'required|numeric',
            'description' => 'required',
            'jobType' => 'required',
            'location' => 'required',

        ],
        [
        'firstName.required' => 'Detta fält är obligatoriskt (Förnamn)',
        'lastName.required' => 'Detta fält är obligatoriskt (Efternamn)',
        'email.required' => 'Detta fält är obligatoriskt (E-post)',
        'telefon.required' => 'Detta fält är obligatoriskt, siffror (Telefon)',
        'description.required' => 'Detta fält är obligatoriskt (kort beskrivning om dig)',
        'jobType.required' => 'Detta fält är obligatoriskt (Vad är det för jobb du söker?)',
        'location.required' => 'Detta fält är obligatoriskt (Ort)',
    ]);

            $application->update($request->all());
             return $application;
     }

     

    public function destroy($id)
    {
        $application = Application::findOrFail($id);
        $application->delete();
        return $application;

    }
}
