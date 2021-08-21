<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
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
//         \App\Models\User::factory(1)->create();
        User::query()->firstOrCreate([
            'name' => 'Admin ',
            'password' => Hash::make('123123'),
            'email' => '123123@gmail.com',
            'verified' => 1,
            'is_active' => 1,
        ]);
        Post::factory(500)->create();
    }
}
