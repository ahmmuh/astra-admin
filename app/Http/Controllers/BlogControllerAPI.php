<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
{
    $this->middleware('auth');
}
    public function index()
    {
        $blogs =  Blog::latest()->simplePaginate(3);
        return $blogs;
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required:max:10',
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
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->bodyText = $request->bodyText;
        $blog->description = $request->description;
        $blog->blogImage = $img_name;
        Storage::disk('public')->put('images/'.$img_name, file_get_contents($img));
        $blog->save();
         return $blog;
    }


    public function show($id)
    {   
        $blog = Blog::findOrFail($id);
        return $blog;
    }
 
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return $blog;
    }

    public function update(Request $request, Blog $blog)
    {
       $request->validate([
            'title' => 'required:max:10',
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
    return $blog;

     }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return $blog;

    }
}
