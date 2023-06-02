<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@laravel.com'
        ]);

        Photo::factory(20)->create([
            'user_id' => $user->id
        ]);
    }
}
