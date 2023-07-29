<?php

namespace App\Http\Controllers;
use App\Models\Logo;
use Illuminate\Support\Facades\Storage;
use DB;
use Auth;
use Illuminate\Http\Request;

class LogoController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth')->except(['index']);

    }

    public function index()
    {
    $logos =  Logo::latest()->simplePaginate(5);
       if(Auth::check()){
        return view('backend.logos.index', compact('logos'));
       }
       else{
        return view('frontend.logos.index', compact('logos'));
       }
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
        return view('backend.logos.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required:',
          

        ],
     [
        'logo.required' => 'Ladda upp ett logo',

    ]);

      $img = $request->logo;
        $img_name = $img->getClientOriginalName();
        $logo = new Logo();

        $logo->logo = $img_name;
        Storage::disk('public')->put('images/' .$img_name, file_get_contents($img));
        $logo->save();
       
    //    Logo::create($request->all());
    return redirect()->route('logos.index')->with('success','Logo har laddats upp');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $logo = Logo::findOrFail($id);
        return view('backend.logos.show',compact('logo'));
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $logo = Logo::findOrFail($id);
        return view('backend.logos.edit',compact('logo'));
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
       $request->validate([
            'logo' => 'required',
          

        ],
    
        [
        'logo.required' => 'Ladda upp ett logo',

    ]
    );
      $img = $request->logo;
        $img_name = $img->getClientOriginalName();
        $logo = new Logo();

        $logo->logo = $img_name;
        Storage::disk('public')->put('images/' .$img_name, file_get_contents($img));

            $logo->update($request->all());
             return redirect()->route('logos.index')->with('danger','Ett logo uppdaterades');
     }

     

    public function destroy($id)
    {
        $logo = Logo::findOrFail($id);
        $logo->delete();
        return redirect()->route('logos.index')->with('danger','En logo har nu raderats');

    }
}
