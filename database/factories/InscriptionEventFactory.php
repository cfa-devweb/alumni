<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\InscriptionEvent;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class InscriptionEventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InscriptionEvent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_id' => Event::all('id') -> random(),
            'member_id' => Member::all('id') -> random()
        ];
    }
}
