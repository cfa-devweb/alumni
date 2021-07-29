<?php

namespace Database\Factories;

use App\Models\Promotion;
use App\Models\Promotion_year;
use App\Models\Year;
use Illuminate\Database\Eloquent\Factories\Factory;

class Promotion_yearFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Promotion_year::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year'          => $this -> faker -> year(),
            'promotion_id'  => Promotion::all('id') -> random()
        ];
    }
}
