<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'role_id' => '1',
        	'role_name' => 'Admin',
        ],
        [
        	'role_id' => '2',
        	'role_name' => 'User',
        ]
    );
}
}
