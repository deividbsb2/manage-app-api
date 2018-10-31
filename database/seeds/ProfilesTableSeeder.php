<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::truncate();       

        Profile::create(['name' => 'Usuário Comum']);
        Profile::create(['name' => 'Gestor']);
        Profile::create(['name' => 'Administrador']);
    }
}
