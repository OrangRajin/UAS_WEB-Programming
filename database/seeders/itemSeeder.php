<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
        	'item_name' => 'Pisang',
        	'item_desc' => 'Pisang sangatlah enak, manis, dan sehat.',
        	'price' => 20000,
        ]);
    }
}
