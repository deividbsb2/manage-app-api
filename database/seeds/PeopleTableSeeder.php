<?php

use Illuminate\Database\Seeder;
use App\Person;
use App\App;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::truncate();
        /** @var $faker \Faker\Generator */
        $faker = \Faker\Factory::create();

        $person = Person::create([
            'name' => $faker->name,
            'cpf' => $faker->numerify('###########'),
            'rg' => $faker->text(10),
            'birthday' => $faker->date(),
            'profile_id' => 1
        ]);
        $apps = App::find([1]);
        $person->apps()->attach($apps);
    }
}
