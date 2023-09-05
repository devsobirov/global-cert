<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    #[ArrayShape(['title' => "array", 'content' => "array", 'image' => "string", 'created_at' => "\Illuminate\Support\Carbon", 'updated_at' => "\Illuminate\Support\Carbon"])]
    public function definition(): array
    {
        return [
            'title' => ['uz' => $this->faker->realText(rand(30,200))],
            'content' => ['uz' => $this->faker->randomHtml(4, 20)],
            'image' => 'assets/images/blog/'.rand(1,17).'.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
