<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        category::create([
            'name' =>'Ca1',
             ],
            [
                'name' =>'Ca2',
            ],
            [
                'name' =>'Ca3',
            ],
            [
                'name' =>'Ca4',
            ],
        );

    }
}
