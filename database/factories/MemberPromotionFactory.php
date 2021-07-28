<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Model;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberPromotionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MemberPromotion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_id' => Member::all('id') -> random(),
            'promotion_year_id' => Promotion::all('id') -> random(),
        ];
    }
}
