<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
    $contacts = Contact::latest()->get();

        return view('backend.contacts.index', compact('contacts'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
       $contact->update($request->all());
             return redirect()->route('backend.contacts.index')->with('success','Ny kontaktuppgift har sparats');
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
