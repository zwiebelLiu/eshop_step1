<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProducktTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' =>'P1',
            'price'=>'1.22',
            'photo'=>'',
            'cate_id'=>1,
            'description'=>'',
        ],[
            'name' =>'P2',
            'price'=>'2.22',
            'photo'=>'',
            'cate_id'=>3,
            'description'=>'',

        ],
        [
        'name' =>'P3',
            'price'=>'1.2',
            'photo'=>'',
            'cate_id'=>2,
            'description'=>'',

        ],[
                'name' =>'P4',
                'price'=>'2.22',
                'cate_id'=>3,
                'photo'=>'',
                'description'=>'',

            ]);
    }
}
