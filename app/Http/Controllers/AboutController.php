<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Storage;
class AboutController extends Controller
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
        $abouts =  about::latest()->simplePaginate(3);
        

     if (Auth::check()) {
       
        return view('backend.abouts.index',compact('abouts'));

     } else {
        # code...
        return view('frontend.abouts.index',compact('abouts'));

     }
     



    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.abouts.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'rubrik' => 'required|max:100',
            'text' => 'required|max:300',
            'logo' => 'required|mimes:png,jpg,jpeg',

        ],
        [ 
        'title.required' => 'Detta fält är obligatoriskt',
        'rubrik.required' => 'Detta fält är obligatoriskt',
        'text.required' => 'Detta fält är obligatoriskt',
        'logo.required' => 'Detta fält är obligatoriskt (bild format png, jpg eller jpeg)',
        ]);

        $img = $request->logo;
        $img_name = $img->getClientOriginalName();
        $about = new About();
        $about->title = $request->title;
        $about->rubrik = $request->rubrik;
        $about->text = $request->text;
        $about->logo = $img_name;
        Storage::disk('public')->put('images/'.$img_name, file_get_contents($img));
        $about->save();
         return redirect()->route('abouts.index')->with('success','Info om företaget');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $about = About::findOrFail($id);
        return view('backend.abouts.show',compact('about'));
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('backend.abouts.edit',compact('about'));
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|max:100',
            'rubrik' => 'required|max:100',
            'text' => 'required|max:300',
            'logo' => 'required|mimes:png,jpg,jpeg',

        ],
        [ 
        'title.required' => 'Detta fält är obligatoriskt',
        'rubrik.required' => 'Detta fält är obligatoriskt',
        'text.required' => 'Detta fält är obligatoriskt',
        'logo.required' => 'Detta fält är obligatoriskt (bild format png, jpg eller jpeg)',
        ]);
       $img = $request->logo;
        $img_name = $img->getClientOriginalName();
        $img = $request->logo;
        $about->title = $request->title;
        $about->rubrik = $request->rubrik;
        $about->text = $request->text;
        $about->logo = $img_name;
        Storage::disk('public')->put('images/'.$img_name, file_get_contents($img));
        $result = DB::table('abouts')
        ->where('id', $about->id)
        ->update([
        'title' => $about->title,
        'rubrik' => $about->rubrik,
        'text' => $about->text,
        'logo' => $about->logo,
    ]);
        return redirect()->route('abouts.index')->with('success','Nyheten har uppdaterats');

     }

     

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();
        return redirect()->route('abouts.index')->with('danger','En nyhet har nu raderats');

    }
}
