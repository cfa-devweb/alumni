<?php

namespace Database\Factories;

use App\Models\Conversation;
use App\Models\Promotion_year;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConversationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conversation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'promotions_id' => Promotion::all('id') -> random()
        ];
    }
}
