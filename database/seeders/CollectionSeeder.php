<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::create([
            'id'=> '1',
            'collection_name'=> 'WORLD CHAMPION JR GP'
        ]);

        Collection::create([
            'id'=> '2',
            'collection_name'=> 'KTM AJO'
        ]);

        Collection::create([
            'id'=> '3',
            'collection_name'=> 'RedBulll Roockies Cup'
        ]);

        Collection::create([
            'id'=> '4',
            'collection_name'=> 'Moto 3'
        ]);

        Collection::create([
            'id'=> '5',
            'collection_name'=> 'Moto GP'
        ]);

    }
}
