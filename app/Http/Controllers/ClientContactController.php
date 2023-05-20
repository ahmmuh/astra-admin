<?php

namespace App\Http\Controllers;

use App\Models\ClientContact;
use Illuminate\Http\Request;

class ClientContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = ClientContact::all();
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
        request()->validate(array(
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'description' => 'required',
        ));

        ClientContact::create($request->all());
    }
 
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('clients.show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientContact $clientContact)
    {
       return view('clients.edit',compact('clientContact'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientContact $clientContact)
    {
        request()->validate(array(
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'description' => 'required',
        ));
        $clientContact->update();
                return redirect()->route('clients.index')->with('success','One client contact has been added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientContact $clientContact)
    {
        $clientContact->delete();
    }
}
