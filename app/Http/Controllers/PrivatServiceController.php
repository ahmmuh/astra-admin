<?php

namespace App\Http\Controllers;
use App\Models\PrivateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;
class PrivatServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);

    }
    
    public function index()
    {
        $services = PrivateService::all();
        if (Auth::check()) {
       
                return view('backend.privateservice.index',compact('services'));


     } else {
        # code...
        return view('frontend.privateservice.index',compact('services'));

     }
     
    }

  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.privateservice.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'title' => 'required:max:10',
            'bodyText' => 'required|max:250',
            'description' => 'required|min:250',
            'serviceType' => 'required',
            'serviceImage' => 'required|mimes:png,jpg,jpeg',

        ],
     [
        'title.required' => 'Titlen måste vara max 10 tecken',
        'bodyText.required' => 'Tjänsten måste ha beskrivning, 250 tecken',
        'description.required' => 'En beskrivning med 250 tecken (min)',
        'serviceType.required' => 'Namn på servicen ',
        'serviceImage.required' => 'Bara png, jpeg jpg format',
    ]);
        
        $img = $request->serviceImage;
        $img_name = $img->getClientOriginalName();
        $service = new PrivateService();
        $service->title = $request->title;
        $service->bodyText = $request->bodyText;
        $service->description = $request->description;
        $service->serviceType = $request->serviceType;
        $service->serviceImage = $img_name;
        Storage::disk('public')->put('images/'.$img_name, file_get_contents($img));
         $service->save();
        return redirect()->route('privateservices.index')->with('success','En tjänst har lagts till på hemsidan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
     $service = PrivateService::findOrFail($id);
        return view('frontend.privateservice.show',compact('service'));

     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $service = PrivateService::findOrFail($id);
        return view('backend.privateservice.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrivateService $service)
    {
           $request->validate([
            'title' => 'required:max:10',
            'bodyText' => 'required|min:110|max:120',
            'description' => 'required|max:300|min:250',
            'serviceType' => 'required|max:10',
            'serviceImage' => 'required|mimes:png,jpg,jpeg',

        ],
     [
        'title.required' => 'Titlen måste vara max 10 tecken',
        'bodyText.required' => 'Tjänsten måste ha beskrivning, max 120 tecken',
        'description.required' => 'En beskrivning med 300 tecken max och 250 tecken min',
        'serviceType.required' => 'Namn på servicen med 10 tecken max',
        'serviceImage.required' => 'Bara png, jpeg jpg format',
    ]);

       $img = $request->serviceImage;
        $img_name = $img->getClientOriginalName();
        $img = $request->serviceImage;
        $service->title = $request->title;
        $service->bodyText = $request->bodyText;
        $service->serviceType = $request->serviceType;
        $service->description = $request->description;
        $service->serviceImage = $img_name;
        Storage::disk('public')->put('images/'.$img_name, file_get_contents($img));

        $result = DB::table('services')
        ->where('id', $service->id)
        ->update([
        'title' => $service->title,
        'bodyText' => $service->bodyText,
        'description' => $service->description,
        'serviceType' => $service->serviceType,
        'serviceImage' => $service->serviceImage,
    ]);
      
        // $service->update($request->all());
     return redirect()->route('privateservices.index')->with('success' ,'Tjänsten har uppdaterats');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
          $service = PrivateService::findOrFail($id);
        $service->delete();
        return redirect()->route('privateservices.index')->with('danger','En tjänst har nu raderats');
    }
}
