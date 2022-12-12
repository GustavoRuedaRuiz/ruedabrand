<?php

namespace Database\Seeders;

use App\Models\Clothe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClotheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clothe::create([
            'id'=> '1',
            'collection_id'=> '1',
            'clothe_name'=> 'Camiseta WORLD CHAMPION',
            'price'=>'11.99',
            'description'=>'Cómodo, suave, sencillo y práctico. No incluimos la bandolera. El toque cani ya es cosa tuya, no nuestra.',
        ]);

        Clothe::create([
            'id'=> '2',
            'collection_id'=> '2',
            'clothe_name'=> 'Camiseta KTM AJO',
            'price'=>'14.99',
            'description'=>'Cómodo, suave, sencillo y práctico. No incluimos la bandolera. El toque cani ya es cosa tuya, no nuestra.',
        ]);
    }
}
