<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Post::orderBy('id','desc')->paginate(20);
        $categories = Category::orderBy('id','desc')->get();
        return view('adminpages.post',['models'=>$model,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required|int',
            'title'=>'required|max:255',
            'description'=>'required|max:255',
            'body'=>'required',
            'image'=>'required|file|mimes:jpg,jpeg,png'
        ]);
        $model = $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date("y-m-d_h-i-s_"). time() .'.'. $extension;
            $file->move('images/',$filename);
            $model['image'] = 'images/'.$filename;
        }
        Post::create($model);
        return redirect()->route('post.index')->with([
            'message' => 'Post is successfully created',
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'category_id'=>'required|int',
            'title'=>'required|max:255',
            'description'=>'required|max:255',
            'body'=>'required',
            'image'=>'required|file|mimes:jpg,jpeg,png'
        ]);
        $model = $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date("y-m-d_h-i-s_"). time() .'.'. $extension;
            $file->move('images/',$filename);
            $model['image'] = 'images/'.$filename;
        }
        $post->update($model);
        return redirect()->route('post.index');
        // dd($request->all(),$post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
