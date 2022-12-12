<?php

namespace Database\Seeders;

use App\Models\TypeSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeSize::create([
            'id'=> '1',
            'type_size_name'=> 'S',
        ]);

        TypeSize::create([
            'id'=> '2',
            'type_size_name'=> 'M',
        ]);

        TypeSize::create([
            'id'=> '3',
            'type_size_name'=> 'L',
        ]);

        TypeSize::create([
            'id'=> '4',
            'type_size_name'=> 'XL',
        ]);
    }
}
