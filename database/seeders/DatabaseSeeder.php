<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Role::create([
            'name'          => 'Admin',
            'slug'          => 'admin',
            'permission'    => json_encode([]) 
        ]);


        Admin::create([
            'role_id'       => 1, 
            'name'          => 'Super Admin', 
            'email'         => 'admin@admin.com',  
            'cell'          => '01717700811', 
            'username'      => 'super', 
            'password'      => Hash::make('1234567890') 
        ]);


    }
}
