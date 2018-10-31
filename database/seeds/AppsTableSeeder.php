<?php

use Illuminate\Database\Seeder;

class AppsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\App::truncate();

        \App\App::create(['name' => 'App ABC', 'bundle_id' => 'app_abc']);
    }
}
