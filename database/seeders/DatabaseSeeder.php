<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'Alexandro Suciu Peici',
            'email' => 'Alexsuccyh@gmail.com',
            'password' => '1283712370109273'
        ]);

        Profile::create([
            'user_id' => $user->id,
            'bio' => 'Este es el perfil de Alex.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'title' => 'Primer Post',
            'content' => 'Yea bro activo.'
        ]);
    }
}
