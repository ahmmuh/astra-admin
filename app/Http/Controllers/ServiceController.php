<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate(array(
            'title' => 'required',
            'description' => 'required',
            'serviceType' => 'required',
            'serviceImage' => 'required',
        ));
           Service::create($request->all());
         return redirect()->route('services.index')->with('success','One service has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
     $service = Service::findOrFail($id);
        return view('services.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $service = Service::findOrFail($id);
        return view('services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
      request()->validate(array(
            'title' => 'required',
            'description' => 'required',
            'serviceType' => 'required',
            'serviceImage' => 'required',
        ));
          $service->update();
    return redirect()->route('services.index')->with('success','One item has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
          $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('success','One item has been deleted');
    }
}
