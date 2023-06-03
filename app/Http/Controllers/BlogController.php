<?php

namespace App\Http\Controllers;
use Illuminate\Http\File;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs =  Blog::latest()->simplePaginate(5);
        return view('blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required:max:10',
            'description' => 'required',
            'blogImage' => 'required|mimes:jpeg,png,jpg|max:2048',

        ]);
        
         $blogImage = time() . '.' . $request->blogImage->extension();
        // $request->image->move(public_path('images'), $imageName);
        $request->blogImage->storeAs('public/images', $blogImage);
          Blog::create($request->all());
         return redirect()->route('blogs.index')->with('success','One item has been added');
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $blog = Blog::findOrFail($id);
        return view('blogs.show',compact('blog'));
    }
 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit',compact('blog'));
    }

   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        request()->validate(array(
            'title' => 'required',
            'blogImage' => 'required',
            'description' => 'required',

        ));
        $blogImage = '';
     if ($request->hasFile('file')) {
         $blogImage = time() . '.' . $request->file->extension();
         $request->file->storeAs('public/images', $blogImage);
        if ($post->image) {
        Storage::delete('public/images/' . $post->image);
      }
    } else {
      $blogImage = $blog->image;
    }
    $blog->update();
    return redirect()->route('blogs.index')->with('success','One item has been updated');


     }

     

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with('success','One item has been deleted');

    }
}
