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
       $services = Service::paginate(3);
             if (Auth::check()) {
       
                return view('backend.services.index',compact('services'));


     } else {
            $test = "Ahmed";

        return view('frontend.services.index',compact(['services']));

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
            'title' => 'required|max:100',
            'title2' => 'required|max:100',
            'menyNamn' => 'required|max:10',
            'bodyText' => 'required|min:250|max:400',
            'description' => 'required|min:400|max:550',
            'descriptionImage' => 'required|mimes:png,jpg,jpeg',
            'serviceType' => 'required',
            'extra' => 'required',
            'serviceImage' => 'required|mimes:png,jpg,jpeg',

        ],
     [
        'title.required' => 'Titlen måste vara max 100 tecken',
        'title2.required' => 'Titlen måste vara max 100 tecken',
        'menyNamn.required' => 'Titlen måste vara max 12 tecken',
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
        $service->title2 = $request->title2;
        $service->startsida = $request->startsida;
        $service->menyNamn = $request->menyNamn;
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
     $data = $service['extra'];

     if(Auth::check()){
      return view('backend.services.show',compact('service','data'));

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
            'title' => 'required|max:100',
            'title2' => 'required|max:100',
            'menyNamn' => 'required|max:10',
            'startsida' => 'required',
            'bodyText' => 'required|min:250|max:400',
            'description' => 'required|min:400|max:550',
            'descriptionImage' => 'required|mimes:png,jpg,jpeg',
            'serviceType' => 'required',
            'extra' => 'required',
            'serviceImage' => 'required|mimes:png,jpg,jpeg',

        ],
     [
        'title.required' => 'Titlen måste vara max 100 tecken',
        'title2.required' => 'Titlen måste vara max 100 tecken',
        'startsida.required' => 'Titlen måste vara max 10 tecken',
        'menyNamn.required' => 'Titlen måste vara max 10 tecken',
        'bodyText.required' => 'Tjänsten måste ha beskrivning, 250 tecken',
        'description.required' => 'En beskrivning med 400 tecken (min)',
        'descriptionImage.required' => 'Bara png, jpeg jpg format',
        'serviceType.required' => 'Namn på servicen ',
        'extra.required' => 'Vad är som ingår i denna tjänst?',
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
        $service->title2 = $request->title2;
        $service->startsida = $request->startsida;
        $service->menyNamn = $request->menyNamn;
        $service->bodyText = $request->bodyText;
        $service->serviceType = $request->serviceType;
        $service->description = $request->description;
 

        $result = DB::table('services')
        ->where('id', $service->id)
        ->update([
        'title' => $service->title,
        'title2' => $service->title2,
        'startsida' => $service->startsida,
        'menyNamn' => $service->menyNamn,
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
