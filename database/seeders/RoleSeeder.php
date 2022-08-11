<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use App\Models\Comment;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_permissions = Post::all();
        Role::updateOrCreate(['role' => 'admin', 'slug' => 'admin', 'deletable' => false]);
        Role::updateOrCreate(['role' => 'user', 'slug' => 'user', 'deletable' => false]);
        Role::updateOrCreate(['role' => 'editor', 'slug' => 'editor', 'deletable' => false]);
        Role::updateOrCreate(['role' => 'author', 'slug' => 'author', 'deletable' => false]);
    }
}
