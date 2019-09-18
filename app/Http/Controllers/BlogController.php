<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('viewblog',compact('blogs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog=Blog::create($this->Requestdata());
        $this->storeImage($blog);
        return redirect('/admin/blog/create')->with('message','Blog Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('editblog',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->update($this->Requestdata());
            $this->storeImage($blog);
            return redirect('/admin/blog')->with('message','Blog Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect('/admin/blog')->with('message','BLog Deleted');
    }

    private function Requestdata(){
        return request()->validate(
            [
                'BlogName'=> 'required|min:3',
                'BlogDesc'=> 'required',
                'BlogImage'=> 'required|file|image|max:5000',
            ]
            );
    } 

    private function storeImage($blog)
    {
        if (request()->has('BlogImage')) {
            $blog->update([
                'BlogImage' => request()->BlogImage->store('blog_images', 'public'),
            ]);

          
        }
    }
}
