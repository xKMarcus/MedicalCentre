<?php
# @Date:   2019-11-11T14:47:38+00:00
# @Last modified time: 2019-12-07T21:20:55+00:00




/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\InsuranceCompany;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(InsuranceCompany::class, function (Faker $faker) {
    return [
        'name' => $faker->company
    ];
});
