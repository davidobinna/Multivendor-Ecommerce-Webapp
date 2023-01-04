<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'       => $this->faker->word,
            'slug'        => $this->faker->unique()->slug,
            'summary'     => $this->faker->text,
            'description' => $this->faker->text,
            'stock'       => $this->faker->numberBetween(2,10),
            'brand_id'    => $this->faker->randomElement(Brand::pluck('id')->toArray()),
            'cat_id'      => $this->faker->randomElement(Category::where('is_parent',1)->pluck('id')->toArray()),
            'child_cat_id'=> $this->faker->randomElement(Category::where('is_parent',0)->pluck('id')->toArray()),
            'photo'       => $this->faker->imageUrl('400','200'),
            'price'       => $this->faker->numberBetween(100,1000),
            'offer_price' => $this->faker->numberBetween(100,1000),
            'discount'    => $this->faker->numberBetween(0,100),
            'size'        => $this->faker->randomElement(['S','M','L','XL']),
            'conditions'  => $this->faker->randomElement(['new','popular','winter']),
            'status'      => $this->faker->randomElement(['active','inactive']),
        ];
    }
}
