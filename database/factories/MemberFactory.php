<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'           => User::all('id')->random(),
            'last_name'         => $this -> faker -> lastName(),
            'first_name'        => $this -> faker -> firstName(),
            'birth_date'        => $this -> faker -> date(),
            'avatar'            => $this -> faker -> imageUrl(),
            'description'       => $this -> faker -> paragraph(),
            'business'          => $this -> faker -> company(),
            'city'              => $this -> faker -> city(),
            'worker'            => $this -> faker -> boolean(),
        ];
    }
}
