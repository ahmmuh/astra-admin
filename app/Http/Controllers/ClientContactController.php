<?php

namespace App\Http\Controllers;

use App\Models\ClientContact;
use Illuminate\Http\Request;

class ClientContactController extends Controller
{
   public function index()
    {
        $clients =  ClientContact::latest()->simplePaginate(5);
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
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
            'telefon' => 'required',
            'description' => 'required',

        ]);
          ClientContact::create($request->all());
         return redirect()->route('clients.index')->with('success','One item has been added');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $client = ClientContact::findOrFail($id);
        return view('clients.show',compact('client'));
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $clients = ClientContact::findOrFail($id);
        return view('clients.edit',compact('clients'));
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientContact $client)
    {$request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'telefon' => 'required',
            'description' => 'required',

        ]);
    
    $client->update();
    return redirect()->route('clients.index')->with('success','One item has been updated');
     }

     

    public function destroy($id)
    {
        $client = ClientContact::findOrFail($id);
        $client->delete();
        return redirect()->route('clients.index')->with('success','One item has been deleted');

    }
}
