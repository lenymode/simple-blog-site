<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('slug','admin')->first();
        // Create admin
        User::updateOrCreate([
            'role_id' => $adminRole->id,
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'is_admin' =>'1',
            'password' => Hash::make('password'),
        ]);
        // Create user
        $userRole = Role::where('slug','user')->first();
        User::updateOrCreate([
            'role_id' => $userRole->id,
            'name' => 'User Thin',
            'email' => 'user@mail.com',
            'password' => Hash::make('password'),
        ]);
        $userRole = Role::where('slug','editor')->first();
        User::updateOrCreate([
            'role_id' => $userRole->id,
            'name' => 'Editor Thin',
            'email' => 'editor@mail.com',
            'password' => Hash::make('password'),
        ]);
        $userRole = Role::where('slug','author')->first();
        User::updateOrCreate([
            'role_id' => $userRole->id,
            'name' => 'Author Thin',
            'email' => 'author@mail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
