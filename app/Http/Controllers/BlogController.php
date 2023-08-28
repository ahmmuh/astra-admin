<?php

namespace App\Http\Controllers;
use Illuminate\Http\File;
use App\Models\Blog;
use DB;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
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
        $blogs = DB::table('blogs')->paginate(2);

        if(Auth::check()){
            return view('backend.blogs.index',compact('blogs'));

        }
        else{
      return view('frontend.blogs.index',compact('blogs'));

        }
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blogs.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required:max:60',
            'bodyText' => 'required|max:200',
            'description' => 'required|min:300',
            'blogImage' => 'required|mimes:png,jpg,jpeg',

        ],
        [ 
        'title.required' => 'Detta fält är obligatoriskt (titel, max 60 tecken)',
        'bodyText.required' => 'Detta fält är obligatoriskt (kort text, max 200 tecken)',
        'description.required' => 'Detta fält är obligatoriskt (Längre text, min 300 tecken)',
        'blogImage.required' => 'Detta fält är obligatoriskt (bild format png, jpg eller jpeg)',
        ]);

        $img = $request->blogImage;
        $img_name = $img->getClientOriginalName();
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->bodyText = $request->bodyText;
        $blog->description = $request->description;
        $blog->blogImage = $img_name;
        Storage::disk('public')->put('images/'.$img_name, file_get_contents($img));
        $blog->save();
         return redirect()->route('blogs.index')->with('success','Nyhet har nu publicerats');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $blog = Blog::findOrFail($id);
        return view('backend.blogs.show',compact('blog'));
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.blogs.edit',compact('blog'));
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
       $request->validate([
            'title' => 'required|max:10',
            'bodyText' => 'required|max:120',
            'description' => 'required|min:300',
            'blogImage' => 'required|mimes:png,jpg,jpeg',

        ],
        [ 
        'title.required' => 'Detta fält är obligatoriskt (titel, max 10 tecken)',
        'bodyText.required' => 'Detta fält är obligatoriskt (kort text, max 120 tecken)',
        'description.required' => 'Detta fält är obligatoriskt (Längre text, min 300 tecken)',
        'blogImage.required' => 'Detta fält är obligatoriskt (bild format png, jpg eller jpeg)',
        ]);
       $img = $request->blogImage;
        $img_name = $img->getClientOriginalName();
        $img = $request->blogImage;
        $blog->title = $request->title;
        $blog->bodyText = $request->bodyText;
        $blog->description = $request->description;
        $blog->blogImage = $img_name;
        Storage::disk('public')->put('images/'.$img_name, file_get_contents($img));
        $result = DB::table('blogs')
        ->where('id', $blog->id)
        ->update([
        'title' => $blog->title,
        'bodyText' => $blog->bodyText,
        'description' => $blog->description,
        'blogImage' => $blog->blogImage,
    ]);
    return redirect()->route('blogs.index')->with('success','Nyheten har uppdaterats');

     }

     

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('danger','En nyhet har nu raderats');

    }
}
