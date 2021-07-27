<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Promotion_year;
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
            'avatar'            => $this -> faker -> imageUrl(),
            'promotion_year_id' => Promotion_year::all('id') ->random(),
            'description'       => $this -> faker -> paragraph(),
            'business'          => $this -> faker -> company(),
            'city'              => $this -> faker -> city(),
            'worker'            => $this -> faker -> boolean(),
            'certificate'       => $this -> faker -> boolean()
        ];
    }
}
