<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Auth;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function __construct()
    {
        $this->middleware('auth')->except(['index']);

    }
   public function index()
    {
    $contacts = Contact::latest()->get();

             if(Auth::check()){
            return view('backend.contacts.index', compact('contacts'));

        }
        else{
         return view('frontend.contacts.index',compact('contacts'));

        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $request->validate([
            'telefon' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'postNummer' => 'required',
            'ort' => 'required',

        ],
     [
        'telefon.required' => 'Skriv telefonnummer',
        'email.required' => 'E-postadress saknas',
        'adress.required' => 'Vilken address?',
        'postNummer.required' => 'Postnummer?',
        'ort.required' => 'Vilken ort',
    ]);
        
       $contacts = Contact::create($request->all());
        return view('backend.contacts.index');
    }

    /**
     * Display the specified resource.
     */
  public function show($id)
    {   
        $contact = Contact::findOrFail($id);
        return view('backend.contacts.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $contact = Contact::findOrFail($id);
        return view('backend.contacts.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'telefon' => 'required',
            'email' => 'required',
            'adress' => 'required',
            'postNummer' => 'required',
            'ort' => 'required',

        ],
     [
        'telefon.required' => 'Skriv telefonnummer',
        'email.required' => 'E-postadress saknas',
        'adress.required' => 'Vilken address?',
        'postNummer.required' => 'Postnummer?',
        'ort.required' => 'Vilken ort',
    ]);
        
       $contact->update($request->all());
             return redirect()->route('contacts.index')->with('success','Ny kontaktuppgift har sparats');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('danger','Kontaktuppgifter raderades');
    }
}
