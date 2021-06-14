<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::all()->each(function ($post, $user) {
           Comment::factory(rand(0,5))->create(['post_id' => $post->id, 'user_id' => rand(1,10)]);

            //'user_id' => $user->id
        });


    }
}
