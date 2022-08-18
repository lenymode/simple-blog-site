<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function postindex()
    {
        $posts = Post::all();
        return view('front.index',compact('posts'));
    }

    



    public function create()
    {
        return view('front.createblog');
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'short' => 'required',
            'text'  => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Post::create([
            'name' => $request->name,
            'short' => $request->short,
            'text' => $request->text,
            
        ]);
        
        // $imageName = time().'.'.$request->image->extension();  
        // $request->image->move(public_path('images'), $imageName);

        // Auth::check();
        return redirect()->route('/')->with('success','Post created successfully.');
    }

     


    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    } 


     

    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }



    public function update(Request $request, Post $post)
    {
        $request->validate([

            'name' => 'required',
        ]);
        $post->update($request->all());

        return redirect()->route('posts.index')->with('success','Post updated successfully');
    }


    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success','Post deleted successfully');

    }
}
