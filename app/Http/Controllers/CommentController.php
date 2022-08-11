<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
        public function store(Request $request)
    {
        $request->validate([
            'comment' => ['required', 'string', 'max:255'],
           
        ]);

        $user = Post::create([
            'comment' => $request->comment,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect('/');
    }
}
