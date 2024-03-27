<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LaratrustSeeder::class);

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'address' => 'Home',
        ])->addRole('admin');

        // Dummy Data
        \App\Models\Publisher::create([
            'name' => 'Dummy Publisher',
            'desc' => 'Dummy Data',
        ]);

        \App\Models\Category::create([
            'name' => 'Dummy Category'
        ]);
    }
}
