<?php

namespace Database\Factories;

use App\Models\Cci;
use Illuminate\Database\Eloquent\Factories\Factory;

class CciFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cci::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this -> faker -> lastName(),
            'first_name' => $this -> faker -> firstName(),
            'birth_date' => $this -> faker -> date()
        ];
    }
}
