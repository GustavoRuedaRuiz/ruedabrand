<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
            'id'=> '1',
            'clothe_id'=> '1',
            'type_size_id'=> '1',
            'stock'=>'10',
        ]);

        Size::create([
            'id'=> '2',
            'clothe_id'=> '1',
            'type_size_id'=> '2',
            'stock'=>'20',
        ]);


        Size::create([
            'id'=> '3',
            'clothe_id'=> '1',
            'type_size_id'=> '3',
            'stock'=>'30',
        ]);

        Size::create([
            'id'=> '4',
            'clothe_id'=> '1',
            'type_size_id'=> '4',
            'stock'=>'1',
        ]);
    }
}
