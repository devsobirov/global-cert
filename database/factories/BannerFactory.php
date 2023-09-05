<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    public static int $order = 0;

    public function definition(): array
    {
        self::$order++;

        return [
            'title' => ['uz' => $this->faker->realText(rand(30,200))],
            'intro' => ['uz' => $this->faker->realText(rand(20,40))],
            'order' => self::$order,
            'image' => 'assets/images/slides/slider-mainbg-01'.self::$order.'.jpg',
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
