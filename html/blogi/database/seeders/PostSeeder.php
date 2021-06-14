<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Post::factory(10)->create();

        User::all()->each(function ($user) {
            Post::factory(rand(0,3))->create(['user_id' => $user->id]);
        });
    }
}
