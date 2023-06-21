<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'User',
                'description' => 'Trải nghiệm trang web và đặt hàng',
            ],
            [
                'id' => 2,
                'name' => 'Shoper',
                'description' => 'Đăng bài lên và buôn bán sản phẩm của mình, ngoài ra cũng có thể mua sản phẩm',
            ],
            [
                'id' => 3,
                'name' => 'Administrator',
                'description' => 'Quản lí các đơn hàng, người dùng, chủ shop và sản phẩm',
            ],
            [
                'id' => 4,
                'name' => 'Owner',
                'description' => 'Quản lí tất cả mọi thứ kể cả nhân viên quản trị',
            ],
        ]);
    }
}
