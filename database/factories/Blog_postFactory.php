<?php

namespace Database\Factories;

use App\Models\Blog_post;
use App\Models\Categorie;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class Blog_postFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog_post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'member_id' => Member::all('id') ->random(),
            'title' => $this -> faker -> sentence(),
            'content' => $this -> faker -> paragraph(6),
            'categorie_id' => Categorie::all('id') -> random(),
        ];
    }
}
