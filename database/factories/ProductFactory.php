<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'p_name' => $faker->name,
        'p_price' => $faker->numberBetween($min = 100, $max = 9000),
        'p_tag' => $faker->name,
        'p_desc' => $faker->text,
        'p_mtitle' => $faker->name,
        'p_mdesc' => $faker->text,
        'p_addedby' => $faker->randomDigit,
        'C_id' => '1',
        
        
        // password
        //'remember_token' => Str::random(10),
        
        
        
            // $table->string('p_mtitle');
            // $table->text('p_mdesc');
            // $table->integer('p_addedby');
            // //$table->integer('img_id');
            // $table->unsignedBigInteger('C_id');
            // $table->foreign('C_id')->references('C_id')->on('categories');
            // //$table->unsignedBigInteger('C_id');
            // $table->timestamps();
    ];
});
