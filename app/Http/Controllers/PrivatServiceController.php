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
            'title' => 'required|min:150|max:300',
            'title2' => 'required|min:150|max:300',
            'menyNamn' => 'required',
            'bodyText' => 'required|min:250|max:400',
            'description' => 'required|min:400|max:550',
            'descriptionImage' => 'required|mimes:png,jpg,jpeg',
            'serviceType' => 'required',
            'extra' => 'required',
            'serviceImage' => 'required|mimes:png,jpg,jpeg',

        ],
     [
        'title.required' => 'Titlen måste vara max 300 och min 150 tecken ',
        'title2.required' => 'Titlen måste vara max 300 och min 150 tecken ',
        'menyNamn.required' => 'Manynamn är ett måste',
        'bodyText.required' => 'Tjänsten måste ha beskrivning, 250 tecken',
        'description.required' => 'En beskrivning med 250 tecken (min)',
        'descriptionImage.required' => 'Bara png, jpeg jpg format',
        'serviceType.required' => 'Namn på servicen ',
        'extra.required' => 'Vad är som ingår i denna tjänst?',
        'serviceImage.required' => 'Bara png, jpeg jpg format',
    ]);
        
        $service = new PrivateService();
        
        $img = $request->serviceImage;
        $img_name = $img->getClientOriginalName();
        $service->serviceImage = $img_name;
        Storage::disk('public')->put('images/' .$img_name, file_get_contents($img));
        
        $service->title = $request->title;
        $service->title2 = $request->title2;
        $service->menyNamn = $request->menyNamn;
        $service->bodyText = $request->bodyText;
        $service->description = $request->description;
        $service->extra = $request->extra;
        $service->serviceType = $request->serviceType;
        

        $img2 = $request->descriptionImage;
        $imageName = $img2->getClientOriginalName();
        $img2 = $request->descriptionImage;
       $service->descriptionImage = $imageName;
       Storage::disk('public')->put('images/'.$imageName, file_get_contents($img2));


         $service->save();
        return redirect()->route('privateservices.index')->with('success','En tjänst har lagts till på hemsidan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
     $service = PrivateService::findOrFail($id);
     if(Auth::check()){

         return view('backend.privateservice.show',compact('service'));
     }
     else{
         return view('frontend.privateservice.show',compact('service'));
     }
     
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
            'title' => 'required|max:180',
            'title2' => 'required|max:180',
            'menyNamn' => 'required|max:30',
            'bodyText' => 'required|min:250|max:400',
            'description' => 'required|min:400|max:550',
            'descriptionImage' => 'required|mimes:png,jpg,jpeg',
            'serviceType' => 'required',
            'extra' => 'required',
            'serviceImage' => 'required|mimes:png,jpg,jpeg',

        ],
     [
        'title.required' => 'Titlen måste vara max 180 tecken',
        'title2.required' => 'Titlen måste vara max 180 tecken',
        'menyNamn.required' => 'Titlen måste vara max 30 tecken',
        'bodyText.required' => 'Tjänsten måste ha beskrivning, 250 tecken',
        'description.required' => 'En beskrivning med 250 tecken (min)',
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


        $service->title = $request->title;
        $service->title2 = $request->title2;
        $service->menyNamn = $request->menyNamn;
        $service->bodyText = $request->bodyText;
        $service->serviceType = $request->serviceType;
        $service->description = $request->description;
        $service->extra = $request->extra;


        $img2 = $request->descriptionImage;
        $imageName = $img2->getClientOriginalName();
        $img2 = $request->descriptionImage;
       $service->descriptionImage = $imageName;
       Storage::disk('public')->put('images/'.$imageName, file_get_contents($img2));


        $result = DB::table('services')
        ->where('id', $service->id)
        ->update([
        'title' => $service->title,
        'title2' => $service->title2,
        'menyNamn' => $service->menyNamn,
        'bodyText' => $service->bodyText,
        'description' => $service->description,
        'descriptionImage' => $service->descriptionImage,
        'serviceType' => $service->serviceType,
        'extra' => $service->extra,
        'serviceImage' => $service->serviceImage,
    ]);
      
      $service->update($request->all());
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
