<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Orders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_orders')->insert([
            [
                'id' => 9930227652,
                'user_id' => 1,
                'cart_id' => 32,
            ],
            [
                'id' => 2388765822,
                'user_id' => 1,
                'cart_id' => 34,
            ],
            [
                'id' => 1833329843,
                'user_id' => 1,
                'cart_id' => 33,
            ],
            [
                'id' => 2745422219,
                'user_id' => 1,
                'cart_id' => 32,
            ],
        ]);
    }
}
