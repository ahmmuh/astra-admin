<?php

namespace App\Http\Controllers;
use App\Models\Startsida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;

class StartsidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $homePages = Startsida::all();
        if (Auth::check()) {
        return view('backend.homepages.index',compact('homePages'));
     } 
     else {
        view('frontend.services.index',compact(['homePages']));

     }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.homepages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $request->validate([
            'title' => 'required|max:200',
            'title2' => 'required|max:200',
            'bodyText' => 'required|min:250|max:400',
            'welcomeImage' => 'required|mimes:png,jpg,jpeg',
            'description' => 'required|min:400|max:550',
            'descriptionImage' => 'required|mimes:png,jpg,jpeg',
        ],
     [
        'title.required' => 'rubrik 1 måste vara max 200 tecken',
        'title2.required' => 'rubrik 2 måste vara max 200 tecken',
        'bodyText.required' => 'Välkommen-text måste minst 250 tecken och 400 max',
        'welcomeImage.required' => 'Bara png, jpeg jpg format',
        'description.required' => 'En beskrivning med 250 tecken (min) 400 max',
        'descriptionImage.required' => 'Bara png, jpeg jpg format',
    ]);
        $startsida = new Startsida();
        
        $img = $request->welcomeImage;
        $img_name = $img->getClientOriginalName();
        $startsida->welcomeImage = $img_name;
        Storage::disk('public')->put('images/' .$img_name, file_get_contents($img));

          // second image till beskrivning
        $img2 = $request->descriptionImage;
        $imageName = $img2->getClientOriginalName();
        $startsida->descriptionImage = $imageName;
        Storage::disk('public')->put('images/'.$imageName, file_get_contents($img2));

        $startsida->title = $request->title;
        $startsida->title2 = $request->title2;
        $startsida->bodyText = $request->bodyText;
        $startsida->description = $request->description;
         $startsida->save();
         return redirect()->route('startsida.index')->with('success','Text har nu publicerats på hemsidan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $startsida = Startsida::findOrFail($id);

     if(Auth::check()){
      return view('backend.homepages.show',compact('startsida'));

     }
      else{
        return "ok";
        // view('frontend.services.show',compact('service'));
     }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $startsida = Startsida::findOrFail($id);

     if(Auth::check()){
      return view('backend.homepages.edit',compact('startsida'));

     }
      else{
        return "ok";
        // view('frontend.services.show',compact('service'));
     }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StartSida $startsida)
    {
  
     $request->validate([
            'title' => 'required|max:200',
            'title2' => 'required|max:200',
            'bodyText' => 'required|min:250|max:400',
            'welcomeImage' => 'required|mimes:png,jpg,jpeg',
            'description' => 'required|min:400|max:550',
            'descriptionImage' => 'required|mimes:png,jpg,jpeg',
        ],
     [
        'title.required' => 'rubrik 1 måste vara max 200 tecken',
        'title2.required' => 'rubrik 2 måste vara max 200 tecken',
        'bodyText.required' => 'Välkommen-text måste minst 250 tecken och 400 max',
        'welcomeImage.required' => 'Bara png, jpeg jpg format',
        'description.required' => 'En beskrivning med 250 tecken (min) 400 max',
        'descriptionImage.required' => 'Bara png, jpeg jpg format',
    ]);
        
        $img = $request->welcomeImage;
        $img_name = $img->getClientOriginalName();
        $startsida->welcomeImage = $img_name;
        Storage::disk('public')->put('images/' .$img_name, file_get_contents($img));

          // second image till beskrivning
        $img2 = $request->descriptionImage;
        $imageName = $img2->getClientOriginalName();
        $startsida->descriptionImage = $imageName;
        Storage::disk('public')->put('images/'.$imageName, file_get_contents($img2));

        $startsida->title = $request->title;
        $startsida->title2 = $request->title2;
        $startsida->bodyText = $request->bodyText;
        $startsida->description = $request->description;

        $result = DB::table('homepages')
        ->where('id', $startsida->id)
        ->update([
        'title' => $startsida->title,
        'title2' => $startsida->title2,
        'bodyText' => $startsida->bodyText,
        'description' => $startsida->description,
        'descriptionImage' => $startsida->descriptionImage,
        'welcomeImage' => $startsida->welcomeImage,
    ]);
 return redirect()->route('startsida.index')->with('success' ,'Texten har uppdaterats');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $startsida = Startsida::findOrFail($id);
        $startsida->delete();
        return redirect()->route('startsida.index')->with('danger','Text på startsida har nu raderats');
    }
}
