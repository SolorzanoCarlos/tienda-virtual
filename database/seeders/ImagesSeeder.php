<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Image::factory(50)->create(); */
        $faker = Faker::create();
        DB::table('images')->insert([
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://images.samsung.com/is/image/samsung/latin-t35f-lf24t350fhlxzp-frontblack-301443711?$684_547_PNG$',
                'product_id' => 1
            ],
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://i.ytimg.com/vi/eq03JGrMZQM/maxresdefault.jpg',
                'product_id' => 1
            ],  
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://villarreal.com.co/591-large_default/reloj-casio-edifice-cronografo-analogo-efr549.jpg',
                'product_id' => 2
            ], 
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://www.privun.com/pub/media/catalog/product/cache/75eed2686e01eb22cb4050b2f40ddf97/h/t/httpsstorage.googleapis.comfotos-novaventaprivun2011848-reloj-casio-1.jpg',
                'product_id' => 2
            ], 
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://redragonla.com/wp-content/uploads/2020/08/M601-RGB_PNGWEB_5.png',
                'product_id' => 3
            ],
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://images-na.ssl-images-amazon.com/images/I/61okxuhfKBL._AC_SL1500_.jpg',
                'product_id' => 3
            ],  
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://assets2.razerzone.com/images/og-image/razer-blackwidow-v3-tenkeyless-1200x630-OG.jpg',
                'product_id' => 4
            ], 
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://www.profesionalreview.com/wp-content/uploads/2017/10/Razer-Cynosa-Chroma-y-Cynosa-Chroma-Pro.jpg',
                'product_id' => 4
            ], 
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://www.sony.com.co/image/5d02da5df552836db894cead8a68f5f3?fmt=pjpeg&wid=330&bgcolor=FFFFFF&bgc=FFFFFF',
                'product_id' => 5
            ],
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://panamericana.vteximg.com.br/arquivos/ids/372935-600-690/audifono-sony-tipo-diadema-wh1000xm4-negro-27242919419.jpg?v=637432258144370000',
                'product_id' => 5
            ],
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://http2.mlstatic.com/D_NQ_NP_862130-MCO44750501762_012021-O.jpg',
                'product_id' => 6
            ], 
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://todocali.com/wp-content/uploads/2020/06/7370230_1.jpg',
                'product_id' => 6
            ], 
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://i.blogs.es/c8c081/xiaomi-mi-band-5-05/450_1000.jpg',
                'product_id' => 7
            ], 
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://servisistemas.com.co/informatica-y-tecnologia/7170-superlarge_default/reloj-pulsera-inteligente-de-xiaomi-band-5-negro-bhr4215gl.jpg',
                'product_id' => 7
            ], 
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://todo-fotografia.com/wp-content/uploads/2020/02/Canon-eos-850d.jpg',
                'product_id' => 8
            ],
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://i.pinimg.com/736x/c4/09/bd/c409bd6c19084dc969cb486f26c47682.jpg',
                'product_id' => 8
            ],
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://www.panasonic.com/content/dam/pim/co/es/SC/SC-AKX/SC-AKX910PU/SC-AKX910PU-Variation_Image_for_See_All_1Global-1_co_es.png',
                'product_id' => 9
            ],
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://www.panasonic.com/content/dam/pim/co/es/SC/SC-AKX/SC-AKX910PU/SC-AKX910PU-Variation_Image_for_See_All_1Global-1_co_es.png',
                'product_id' => 9
            ],
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/a5/RCA_RCU403.jpg',
                'product_id' => 10
            ],    
            [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url' => 'https://sc04.alicdn.com/kf/HTB1S0ulawaH3KVjSZFjq6AFWpXaU.jpg',
                'product_id' => 10
            ]


        ]);
    }

    
}
