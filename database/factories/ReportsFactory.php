<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Reports;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reports::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content'           => $this -> faker -> paragraph(6),
            'from_member_id'    => Member::all('id') -> random(),
            'to_member_id'      => Member::all('id') -> random(),
            'visibility'        => $this -> faker -> boolean(100) 
        ];
    }
}
