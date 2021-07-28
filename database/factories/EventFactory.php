<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organizer'         => $this -> faker -> name(),
            'title'             => $this -> faker -> sentence(),
            'content'           => $this -> faker -> paragraph(),
            'adress'            => $this -> faker -> address(),
            'city'              => $this -> faker -> city(),
            'start_time'        => $this -> faker -> time(),
            'end_time'          => $this -> faker -> time(),
            'event_date'        => $this -> faker -> date(),
            'end_event_date'    => $this -> faker -> date(),
            'visibility'        => $this -> faker -> boolean(100)    
        ];
    }
}
