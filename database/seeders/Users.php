<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Hoàng Diệu',
                'phone' => '09786 545 632',
                'email' => 'hoangdieu@gmail.com',
                'password' => Hash::make('HoangDieu123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            // [
            //     'id' => 2,
            //     'name' => 'Nguyễn Du',
            //     'phone' => '0944 362 782',
            //     'email' => 'nguyendu@gmail.com',
            //     'password' => 'Nguyendu555!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 3,
            //     'name' => 'Lê Đình Lý',
            //     'phone' => '0993 263 487',
            //     'email' => 'ledinhly@gmail.com',
            //     'password' => 'Ledinhly#@!111',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 4,
            //     'name' => 'Hải Phòng',
            //     'phone' => '0915 876 532',
            //     'email' => 'haiphong@gmail.com',
            //     'password' => 'Haiphong222#',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 5,
            //     'name' => 'Bếp Tiên',
            //     'phone' => '0987 645 344',
            //     'email' => 'beptien@gmail.com',
            //     'password' => 'Beptien54@',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 6,
            //     'name' => 'Ngô Quyền',
            //     'phone' => '0945 227 639',
            //     'email' => 'ngoquyen@gmail.com',
            //         'password' => 'ngoquyen123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 7,
            //     'name' => 'Hà Huy Tập',
            //     'phone' => '0912 378 663',
            //     'email' => 'hahuytap@gmail.com',
            //     'password' => 'hahuytap123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 8,
            //     'name' => 'Trịnh Công Sơn',
            //     'phone' => '0976 000 356',
            //     'email' => 'trinhcongson@gmail.com',
            //     'password' => 'trinhcongson123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 9,
            //     'name' => 'My Love',
            //     'phone' => '0945 550 072',
            //     'email' => 'mylove@gmail.com',
            //     'password' => 'mylove123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 10,
            //     'name' => 'Mai',
            //     'phone' => '0989 955 502',
            //     'email' => 'mai@gmail.com',
            //     'password' => 'mai123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 11,
            //     'name' => 'Lâm Nhật',
            //     'phone' => '0956 370 088',
            //     'email' => 'lamnhat@gmail.com',
            //     'password' => 'lamnhat123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 12,
            //     'name' => 'Phúc Long',
            //     'phone' => '0966 736 229',
            //     'email' => 'phuclong@gmail.com',
            //     'password' => 'phuclong123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 13,
            //     'name' => 'Nguyễn Văn Linh',
            //     'phone' => '0988 222 002',
            //     'email' => 'nguyenvanlinh@gmail.com',
            //     'password' => 'nguyenvanlinh123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 14,
            //     'name' => 'Điện Biên Phủ',
            //     'phone' => '0944 466 601',
            //     'email' => 'dienbienphu@gmail.com',
            //     'password' => 'dienbienphu123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 15,
            //     'name' => 'Ngô Gia Tự',
            //     'phone' => '0999 500 789',
            //     'email' => 'ngogiatu@gmail.com',
            //     'password' => 'ngogiatu123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 16,
            //     'name' => 'Hoàng Dư Khương',
            //     'phone' => '0988 311 122',
            //     'email' => 'hoangdukhuong@gmail.com',
            //     'password' => 'hoangdukhuong123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 17,
            //     'name' => 'Mẹ Thứ',
            //     'phone' => '0977 826 662',
            //     'email' => 'methu@gmail.com',
            //     'password' => 'methu123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 18,
            //     'name' => 'Bông',
            //     'phone' => '0977 700 445',
            //     'email' => 'bong@gmail.com',
            //     'password' => 'bong123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 19,
            //     'name' => 'Phạm Văn Đồng',
            //     'phone' => '0966 073 301',
            //     'email' => 'phamvandong@gmail.com',
            //     'password' => 'phamvandong123#@!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
            // [
            //     'id' => 20,
            //     'name' => 'Shop Online',
            //     'phone' => '0955 888 922',
            //     'email' => 'shoponline@gmail.com',
            //     'password' => 'shoponline12345!',
            //     'isActive' => true,
            //     'role_id' => 2
            // ],
        ]);
    }
}
