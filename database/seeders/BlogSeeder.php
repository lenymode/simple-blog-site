<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use App\Models\Comment;

use Illuminate\Database\Seeder;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //  $userComment = Comment::where('name')->first();
         Post::updateOrCreate([
            // 'comment_id' => $userComment->id,
            'name' => 'Title',
            'short' => 'Short Description',
            'text' => 'This is the details',
            'image'=> 'this is image'
        ]);
       
    }
}
