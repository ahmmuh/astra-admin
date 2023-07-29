<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class ServiceController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);

    }
    public function index()
    {
        
        $services = Service::latest()->paginate(6);

             if (Auth::check()) {
       
                return view('backend.services.index',compact('services'));


     } else {
        # code...
        return view('frontend.services.index',compact('services'));

     }
    }

  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'title' => 'required:max:10',
            'bodyText' => 'required|min:250|max:400',
            'description' => 'required|min:400|max:550',
            'descriptionImage' => 'required|mimes:png,jpg,jpeg',
            'serviceType' => 'required',
            'extra' => 'required',
            'serviceImage' => 'required|mimes:png,jpg,jpeg',

        ],
     [
        'title.required' => 'Titlen måste vara max 10 tecken',
        'bodyText.required' => 'Tjänsten måste ha beskrivning, 250 tecken',
        'description.required' => 'En beskrivning med 250 tecken (min)',
        'descriptionImage.required' => 'Bara png, jpeg jpg format',
        'serviceType.required' => 'Namn på servicen ',
        'extra.required' => 'Vad är som ingår i denna tjänst?',
        'serviceImage.required' => 'Bara png, jpeg jpg format',
    ]);
        $service = new Service();
        
        $img = $request->serviceImage;
        $img_name = $img->getClientOriginalName();
        $service->serviceImage = $img_name;
        Storage::disk('public')->put('images/' .$img_name, file_get_contents($img));

          // second image till beskrivning
        $img2 = $request->descriptionImage;
        $imageName = $img2->getClientOriginalName();
        $img2 = $request->descriptionImage;
       $service->descriptionImage = $imageName;
       Storage::disk('public')->put('images/'.$imageName, file_get_contents($img2));
        $service->extra = $request->extra;
        $service->title = $request->title;
        $service->bodyText = $request->bodyText;
        $service->description = $request->description;
        $service->serviceType = $request->serviceType;
         $service->save();
         return redirect()->route('services.index')->with('success','En tjänst har lagts till på hemsidan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
     $service = Service::findOrFail($id);
     if(Auth::check()){
     return view('backend.services.show',compact('service'));

     }
     else{
        return view('frontend.services.show',compact('service'));
     }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $service = Service::findOrFail($id);
        return view('backend.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
           $request->validate([
            'title' => 'required:max:10',
            'bodyText' => 'required|min:280|max:300',
            'description' => 'required|max:400|min:550',
            'descriptionImage' => 'required|mimes:png,jpg,jpeg',
            'serviceType' => 'required|max:10',
            'serviceImage' => 'required|mimes:png,jpg,jpeg',

        ],
     [
        'title.required' => 'Titlen måste vara max 10 tecken',
        'bodyText.required' => 'Tjänsten måste ha beskrivning, 300 tecken',
        'description.required' => 'En beskrivning med 300 tecken max och 250 tecken min',
        'descriptionImage.required' => 'Bara png, jpeg jpg format',
        'serviceType.required' => 'Namn på servicen med 10 tecken max',
        'serviceImage.required' => 'Bara png, jpeg jpg format',
    ]);

       $img = $request->serviceImage;
        $img_name = $img->getClientOriginalName();
        $img = $request->serviceImage;
       $service->serviceImage = $img_name;
       Storage::disk('public')->put('images/'.$img_name, file_get_contents($img));

        // second image till beskrivning
        $img2 = $request->descriptionImage;
        $imageName = $img2->getClientOriginalName();
        $img2 = $request->descriptionImage;
       $service->descriptionImage = $imageName;
       Storage::disk('public')->put('images/'.$imageName, file_get_contents($img2));

        $service->title = $request->title;
        $service->bodyText = $request->bodyText;
        $service->serviceType = $request->serviceType;
        $service->description = $request->description;
 

        $result = DB::table('services')
        ->where('id', $service->id)
        ->update([
        'title' => $service->title,
        'bodyText' => $service->bodyText,
        'description' => $service->description,
        'descriptionImage' => $service->descriptionImage,
        'serviceType' => $service->serviceType,
        'serviceImage' => $service->serviceImage,
    ]);
      
        // $service->update($request->all());
     return redirect()->route('services.index')->with('success' ,'Tjänsten har uppdaterats');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
          $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('danger','En tjänst har nu raderats');
    }
}
