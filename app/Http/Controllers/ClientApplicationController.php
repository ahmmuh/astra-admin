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
//     public function __construct()
// {
//     $this->middleware('auth');
// }
    public function index()
    {
        $applications = Application::orderBy('id', 'DESC')->get();
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
        return redirect()->route('applications.index')->with('success','Din ansökan har nu skickats, Vi återkommer till dig inom kort');
        
    }

 

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $application = Application::findOrFail($id);
        return view('applications.show',compact('application'));
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $application = Application::findOrFail($id);
        return view('applications.edit',compact('applications'));
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
             return redirect()->route('application.index')->with('success','En ansökan uppdaterades');
     }

     

    public function destroy($id)
    {
        $application = Application::findOrFail($id);
        $application->delete();
        return redirect()->route('applications.index')->with('danger','En jobbansökan togs bort');

    }
 
   

}
