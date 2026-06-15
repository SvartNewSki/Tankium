<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $itemsList = [
        'Огнемёт (Firebird)',
        'Фриз (Freeze)',
        'Изида (Isida)',
        'Рельса (Railgun)',
        'Гром (Thunder)',
        'Твинс (Twins)',
        'Рикошет (Ricochet)',
        'Смоки (Smoky)',
        'Вулкан (Vulcan)',
        'Молот (Hammer)',
        'Шахта (Shaft)',
        'Магнум (Magnum)',
        'Стрикер (Striker)'
    ];
        return [
            'name' => fake()->randomElement($itemsList),
            'description'=>fake()->text(50),
            'amount'=>fake()->numberBetween(0, 10),
        ];
    }
}
