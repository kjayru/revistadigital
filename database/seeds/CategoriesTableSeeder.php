<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Categories::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'description' => 'Administrador general',
        ]);

        App\Categories::create([
            'name' => 'Cordinador',
            'slug' => 'cordinador',
            'description' => 'Cordinadores',
        ]);
    }
}
