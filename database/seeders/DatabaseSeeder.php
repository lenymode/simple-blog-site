<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use App\Models\Comment;


use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BlogSeeder::class);

    }
}
