<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega usuarios',
        ]);

        Permission::create([
            'name' => 'ver detalle',
            'slug' => 'users.show',
            'description' => 'ver detalle usuarios',
        ]);

        Permission::create([
            'name' => 'crear usuario',
            'slug' => 'users.create',
            'description' => 'crear usuarios',
        ]);

        Permission::create([
            'name' => 'Edicion usuarios',
            'slug' => 'users.edit',
            'description' => 'editar detalle usuarios',
        ]);

        Permission::create([
            'name' => 'Eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Elimnar usuarios',
        ]);


        //Roles
        Permission::create([
            'name' => 'Navegar rol',
            'slug' => 'roles.index',
            'description' => 'Lista y navega rol',
        ]);

        Permission::create([
            'name' => 'ver detalle rol',
            'slug' => 'roles.show',
            'description' => 'ver detalle rol',
        ]);

        Permission::create([
            'name' => 'crear  rol',
            'slug' => 'roles.create',
            'description' => 'ver detalle rol',
        ]);

        Permission::create([
            'name' => 'Edicion rol',
            'slug' => 'roles.edit',
            'description' => 'editar detalle rol',
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Elimnar rol',
        ]);



        //categories
        Permission::create([
            'name' => 'Navegar categoria',
            'slug' => 'categories.index',
            'description' => 'Lista y navega categoria',
        ]);

        Permission::create([
            'name' => 'ver detalle categoria',
            'slug' => 'categories.show',
            'description' => 'ver detalle categoria',
        ]);

        Permission::create([
            'name' => 'crear  categoria',
            'slug' => 'categories.create',
            'description' => 'ver detalle categoria',
        ]);

        Permission::create([
            'name' => 'Edicion categoria',
            'slug' => 'categories.edit',
            'description' => 'editar detalle categoria',
        ]);

        Permission::create([
            'name' => 'Eliminar categoria',
            'slug' => 'categories.destroy',
            'description' => 'Elimnar categoria',
        ]);


         //contents
         Permission::create([
            'name' => 'Navegar contenidos',
            'slug' => 'contents.index',
            'description' => 'Lista y navega contenidos',
        ]);

        Permission::create([
            'name' => 'ver detalle contenidos',
            'slug' => 'contents.show',
            'description' => 'ver detalle contenidos',
        ]);

        Permission::create([
            'name' => 'crear  contenidos',
            'slug' => 'contents.create',
            'description' => 'ver detalle contenidos',
        ]);

        Permission::create([
            'name' => 'Edicion contenidos',
            'slug' => 'contents.edit',
            'description' => 'editar detalle contenidos',
        ]);

        Permission::create([
            'name' => 'Eliminar contenidos',
            'slug' => 'contents.destroy',
            'description' => 'Elimnar contenidos',
        ]);



         //revista
         Permission::create([
            'name' => 'Navegar revista',
            'slug' => 'magazines.index',
            'description' => 'Lista y navega revista',
        ]);

        Permission::create([
            'name' => 'ver detalle revista',
            'slug' => 'magazines.show',
            'description' => 'ver detalle revista',
        ]);

        Permission::create([
            'name' => 'crear  revista',
            'slug' => 'magazines.create',
            'description' => 'ver detalle revista',
        ]);

        Permission::create([
            'name' => 'Edicion revista',
            'slug' => 'magazines.edit',
            'description' => 'editar detalle revista',
        ]);

        Permission::create([
            'name' => 'Eliminar revista',
            'slug' => 'magazines.destroy',
            'description' => 'Elimnar revista',
        ]);

     //historico
     Permission::create([
        'name' => 'Navegar historico',
        'slug' => 'historials.index',
        'description' => 'Lista y navega historico',
    ]);

    Permission::create([
        'name' => 'ver detalle historico',
        'slug' => 'historials.show',
        'description' => 'ver detalle historico',
    ]);

    Permission::create([
        'name' => 'crear  historico',
        'slug' => 'historials.create',
        'description' => 'ver detalle historico',
    ]);

    Permission::create([
        'name' => 'Edicion historico',
        'slug' => 'historials.edit',
        'description' => 'editar detalle historico',
    ]);

    Permission::create([
        'name' => 'Eliminar historico',
        'slug' => 'historials.destroy',
        'description' => 'Elimnar historico',
    ]);


     //pages
     Permission::create([
        'name' => 'Navegar pagina',
        'slug' => 'pages.index',
        'description' => 'Lista y navega pagina',
    ]);

    Permission::create([
        'name' => 'ver detalle pagina',
        'slug' => 'pages.show',
        'description' => 'ver detalle pagina',
    ]);

    Permission::create([
        'name' => 'crear  pagina',
        'slug' => 'pages.create',
        'description' => 'ver detalle pagina',
    ]);

    Permission::create([
        'name' => 'Edicion pagina',
        'slug' => 'pages.edit',
        'description' => 'editar detalle pagina',
    ]);

    Permission::create([
        'name' => 'Eliminar pagina',
        'slug' => 'pages.destroy',
        'description' => 'Elimnar pagina',
    ]);


    //sliders
    Permission::create([
        'name' => 'Navegar slider',
        'slug' => 'sliders.index',
        'description' => 'Lista y navega slider',
    ]);

    Permission::create([
        'name' => 'ver detalle slider',
        'slug' => 'sliders.show',
        'description' => 'ver detalle slider',
    ]);

    Permission::create([
        'name' => 'crear  slider',
        'slug' => 'sliders.create',
        'description' => 'ver detalle slider',
    ]);

    Permission::create([
        'name' => 'Edicion slider',
        'slug' => 'sliders.edit',
        'description' => 'editar detalle slider',
    ]);

    Permission::create([
        'name' => 'Eliminar slider',
        'slug' => 'sliders.destroy',
        'description' => 'Elimnar slider',
    ]);

    //videos
    Permission::create([
        'name' => 'Navegar video',
        'slug' => 'videos.index',
        'description' => 'Lista y navega video',
    ]);

    Permission::create([
        'name' => 'ver detalle video',
        'slug' => 'videos.show',
        'description' => 'ver detalle video',
    ]);

    Permission::create([
        'name' => 'crear  video',
        'slug' => 'videos.create',
        'description' => 'ver detalle video',
    ]);

    Permission::create([
        'name' => 'Edicion video',
        'slug' => 'videos.edit',
        'description' => 'editar detalle video',
    ]);

    Permission::create([
        'name' => 'Eliminar video',
        'slug' => 'videos.destroy',
        'description' => 'Elimnar video',
    ]);


    //front
    Permission::create([
        'name' => 'Navegar front',
        'slug' => 'fronts.index',
        'description' => 'Lista y navega front',
    ]);

    Permission::create([
        'name' => 'ver detalle front',
        'slug' => 'fronts.download',
        'description' => 'ver detalle front',
    ]);





    }
}
