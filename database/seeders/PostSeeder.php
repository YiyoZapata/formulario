<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'titulo' => Str::random(8),
            'email' => Str::random(8) . '@gmail.com',
            'comment' => Str::random(120),
            'caducable' => true,
            'comentable' => true,
            'Acceso' => true,
        ]);

        Post::factory(5)->create();
    }
}
