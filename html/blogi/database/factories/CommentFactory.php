<?php

namespace Database\Factories;

use App\Models\Comment;
use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->sentence(),
            //'user_id'=> rand(1,10),
            'user_id'=>  DB::table('users')
                ->inRandomOrder()
                ->first()
                ->id,
        ];
    }
}
