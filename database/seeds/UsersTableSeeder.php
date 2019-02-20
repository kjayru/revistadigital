<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,2)->create();

        Role::create([
            'name' => 'Administrador',
            'slug' => 'admin',
            'description' => 'Administrador general',
        ]);

        Role::create([
            'name' => 'Contenido',
            'slug' => 'contenido',
            'description' => 'entidades y contenido',
        ]);

        Role::create([
            'name' => 'fuerza de venta',
            'slug' => 'usuario',
            'description' => 'usuarios en general',
        ]);

    }
}
