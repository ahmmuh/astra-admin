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
        $blogs =  Blog::latest()->simplePaginate(2);
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
            'title' => 'required',
            'description' => 'required',
            'blogImage' => 'required',

        ]);

        $blogData = $request->all();
        $fileName = time().$request->file('blogImage')->getClientOriginalName();
        $path = $request->file('blogImage')->storeAs('images',$fileName,'public');
        $blogData['blogImage'] = '/storage/' .$path;
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

       public function test($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.test',compact('blog'));
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
        $fileName = '';
        if ($request->hasFile('blogImage')) {
          $fileName = time() . '.' . $request->blogImage->extension();
          $request->blogImage->storeAs('public/images', $fileName);
          if ($blog->blogImage) {
            Storage::delete('public/images/' . $blog->image);
          }
        } else {
          $fileName = $blog->blogImage;
        }
        // return json_decode($blog);
         $blog->update();

     }

    public function destroy(Blog $blog)
    {
        $blog->delete();
    }
}
