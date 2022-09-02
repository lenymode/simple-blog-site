<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use App\Models\Post;
use App\Models\Comment;


use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index()
    {
        $posts = Post::all();
        return view('front.index',compact('posts'));
    }

    public function about()
    {
       return view('front.about');
    }

    
    public function contact()
    {
       return view('front.contact');
    }

 
    public function blog($id)
    { 
      $posts= Post::findOrFail($id);
       return view('front.blog', compact('posts'));
    }

   
   //  userlist 
    public function users()
    { 
       $users=User::all();
       return view('front.users', compact('users'));
    }


   
    

   //  comment
  
}
