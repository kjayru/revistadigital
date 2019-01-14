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
        App\Category::create([
            'name' => 'Productos mobiles',
            'slug' => 'productos-mobiles',
            'description' => 'productos mobiles',
            'cover'=> '/category/'.\Faker\Provider\Image::image(storage_path().'/app/public/category',600,350,'business',false),
            'status' => 1
        ]);

        App\Category::create([
            'name' => 'Equipos',
            'slug' => 'equipos',
            'description' => 'equipos en stock',
            'cover'=> '/category/'.\Faker\Provider\Image::image(storage_path().'/app/public/category',600,350,'business',false),
            'status' => 1
        ]);

        App\Category::create([
            'name' => 'Olo',
            'slug' => 'olo',
            'description' => 'equipos en olo',
            'cover'=> '/category/'.\Faker\Provider\Image::image(storage_path().'/app/public/category',600,350,'business',false),
            'status' => 1
        ]);

        App\Category::create([
            'name' => 'Claro hogar',
            'slug' => 'claro-hogar',
            'description' => 'equipos claro hogar',
            'cover'=> '/category/'.\Faker\Provider\Image::image(storage_path().'/app/public/category',600,350,'business',false),
            'status' => 1
        ]);

        App\Category::create([
            'name' => 'Claro negocio',
            'slug' => 'claro-negocio',
            'description' => 'equipos claro negocio',
            'cover'=> '/category/'.\Faker\Provider\Image::image(storage_path().'/app/public/category',600,350,'business',false),
            'status' => 1
        ]);
    }
}
