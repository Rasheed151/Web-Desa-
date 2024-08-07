<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
            'name' => 'Ammer',
                'email' => 'mer@gmail.com.com',
                'password' => Hash::make('123'), // Encrypting the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Asid',
                'email' => 'asid@gmail.com',
                'password' => Hash::make('123'), // Encrypting the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'), // Encrypting the password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more users as needed
        ]);
    }
}
