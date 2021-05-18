<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('products')->insert([
            [
                'name' => 'Monitor Samsung',
                'description' => 'Monitor de 24 pulgadas',
                'price' => 984000,
                'available' => true,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'discount' => 15,
                'stock' => 18,
                'urlVideo' => 'https://youtu.be/yaWKTNhWB9g',
            ],
            [
                'name' => 'Reloj Casio',
                'description' => 'Resistente al agua',
                'price' => 100000,
                'available' => true,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'discount' => 5,
                'stock' => 50,
                'urlVideo' => 'https://www.youtube.com/embed/SnhcwvyRHEs',
            ],
            [   
                'name' => 'Mouse Redragon',
                'description' => 'DPI 6000 RGB',
                'price' => 80000,
                'available' => true,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'discount' => 12,
                'stock' => 30,
                'urlVideo' => 'https://www.youtube.com/embed/PlIhnb9onxA',
            ],
            [   
                'name' => 'Teclado Razer',
                'description' => 'Teclado Mecanico',
                'price' => 300000,
                'available' => true,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'discount' => 8,
                'stock' => 10,
                'urlVideo' => 'https://youtu.be/y_GmNjuwfMM',
            ],
            [
                'name' => 'Audifonos Sony',
                'description' => 'Definicion de audio full',
                'price' => 50000,
                'available' => true,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'discount' => 30,
                'stock' => 50,
                'urlVideo' => 'https://youtu.be/0GobLH-Q11k',
            ],
            [
                'name' => 'Tv Lg',
                'description' => 'Televisor 4K de 50 pulgadas',
                'price' => 1500000,
                'available' => true,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'discount' => 25,
                'stock' => 20,
                'urlVideo' => 'https://youtu.be/dQ5I4EFLIeE',
            ],
            [
                'name' => 'Pulsera xiomi',
                'description' => 'Toma la tension arterial',
                'price' => 95000,
                'available' => true,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'discount' => 0,
                'stock' => 180,
                'urlVideo' => 'https://youtu.be/ol0v4OMAfWQ',
            ],
            [
                'name' => 'Camara Canon',
                'description' => 'Fabricada en Japon 100 mgpx',
                'price' => 800000,
                'available' => true,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'discount' => 16,
                'stock' => 9,
                'urlVideo' => 'https://youtu.be/a0c6lZusucc',
            ],
            [
                'name' => 'Equipo de sonido Panasonic',
                'description' => 'Con tres parlantes',
                'price' => 352000,
                'available' => true,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'discount' => 30,
                'stock' => 32,
                'urlVideo' => 'https://youtu.be/KEhoCexsLU0',
            ],
            [
                'name' => 'Control remoto',
                'description' => 'Control universal',
                'price' => 20000,
                'available' => true,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'discount' => 0,
                'stock' => 150,
                'urlVideo' => 'https://youtu.be/YdElBsh3bRw',
            ]
        ]);
    }
}
