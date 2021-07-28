<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Member;
use App\Models\message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content'            => $this -> faker -> sentence(),
            'from_member_id'     => Member::all('id') -> random(),
            'to_id'              => Group::all('id') -> random(),
            'type_message'  => $this -> faker -> randomElement(array('group','member')),
            'visibility'    => $this -> faker -> boolean()  
        ];
    }
}
