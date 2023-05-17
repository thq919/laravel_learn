<?php

namespace Database\Factories;

use App\Models\news;
use Illuminate\Database\Eloquent\Factories\Factory;


 
class NewsFactory extends Factory
{ 
    protected $model = news::class;
    
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'title' => fake()->title(),
            'my_description' => fake()->text(),
            'body' => fake()->text(),
            'published_at' => fake()->dateTimeThisMonth(),
        ];
    }
}
