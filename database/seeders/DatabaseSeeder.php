<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rangga Adithia',
            'email' => 'rangga.adithia26@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
            'created_at' => now()
        ]);

        Category::create([
            'name' => 'full day',
            'created_at' => now()
        ]);
        Category::create([
            'name' => 'long trip',
            'created_at' => now()
        ]);

        Category::create([
            'name' => 'activity',
            'created_at' => now()
        ]);

        Category::create([
            'name' => 'half day',
            'created_at' => now()
        ]);
    }
}
