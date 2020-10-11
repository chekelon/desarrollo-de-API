<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\User;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'comment'   =>     $faker->text($maxNbChars =150 ),
        'user_id'   =>     App\Models\User::all()->random()->id,
        'product_id'=>     App\Models\Product::all()->random()->id,
    ];
});
