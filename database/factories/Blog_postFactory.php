<?php

namespace Database\Factories;

use App\Models\Blog_post;
use App\Models\Categorie;
use App\Models\Member;
use App\Models\User;
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
            'user_id' => User::all('id') ->random(),
            'title' => $this -> faker -> sentence(),
            'content' => $this -> faker -> paragraph(6),
            'sticky_post' => $this -> faker -> boolean(),
            'categorie_id' => Categorie::all('id') -> random(),
            'visibility'  => $this -> faker -> boolean(100)
        ];
    }
}
