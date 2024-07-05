<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_category' => fake()->randomElement(['Furniture', 'Cutlery', 'Kitchen Appliances', 'Home Decor', 'Electronics', 'Bedding', 'Outdoor Gear', 'Personal Care']),
            'product_name' => fake()->randomElement(['Edenburg Toaster', '14 pcs Tornado Sufurias', 'Alyons 2 in 1 Blender', 'Galaxy 5-Speed Hand Mixer', 'Sterling Non-Stick Cookware Set', 'Prestige Electric Kettle', 'ProChef Digital Air Fryer', 'UltraChef Stainless Steel Pressure']),
            'product_price' =>  fake()->numberBetween(1000, 7000),
            'product_discount_percentage' => fake()->randomElement(["-22%", "-30%", "-33%", "-20%"]),
            'product_discounted_price' => fake()->numberBetween(900, 6000),
        ];
    }
}
