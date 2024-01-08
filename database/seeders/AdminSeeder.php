<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin App',
                'email' => 'admin@example.com',
                'active' => 1,
                'is_admin' => 1,
                'password' => Hash::make('admin123'),
                // Add other admin fields if necessary
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User App',
                'email' => 'user@example.com',
                'active' => 1,
                'is_admin' => 0,
                'password' => Hash::make('user123'),
                // Add other admin fields if necessary
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
