<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use App\User;
use Faker\Generator as Faker;


$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'post_content' => $faker->text(),
        'post_name'=>$faker->name,
        'post_statut'=>$faker->state,
        'user_id' => factory('App\User')->create()->id,
    ];
});
