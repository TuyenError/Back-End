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
                'avatar' => 'hoangdieu.jpg',
                'password' => Hash::make('HoangDieu123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 2,
                'name' => 'Nguyễn Du',
                'phone' => '0944 362 782',
                'email' => 'nguyendu@gmail.com',
                'avatar' => 'nguyendu.jpg',
                'password' => Hash::make('Nguyendu555!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'Lê Đình Lý',
                'phone' => '0993 263 487',
                'email' => 'ledinhly@gmail.com',
                'avatar' => 'ledinhly.jpg',
                'password' => Hash::make('Ledinhly#@!111'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 4,
                'name' => 'Hải Phòng',
                'phone' => '0915 876 532',
                'email' => 'haiphong@gmail.com',
                'avatar' => 'haiphong.jpg',
                'password' => Hash::make('Haiphong222#'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 5,
                'name' => 'Bếp Tiên',
                'phone' => '0987 645 344',
                'email' => 'beptien@gmail.com',
                'avatar' => 'beptien.jpg',
                'password' => Hash::make('Beptien54@'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 6,
                'name' => 'Ngô Quyền',
                'phone' => '0945 227 639',
                'email' => 'ngoquyen@gmail.com',
                'avatar' => 'ngoquyen.jpg',
                'password' => Hash::make('ngoquyen123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 7,
                'name' => 'Hà Huy Tập',
                'phone' => '0912 378 663',
                'email' => 'hahuytap@gmail.com',
                'avatar' => 'hahuytap.jpg',
                'password' => Hash::make('hahuytap123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 8,
                'name' => 'Trịnh Công Sơn',
                'phone' => '0976 000 356',
                'email' => 'trinhcongson@gmail.com',
                'avatar' => 'trinhcongson.jpg',
                'password' => Hash::make('trinhcongson123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 9,
                'name' => 'My Love',
                'phone' => '0945 550 072',
                'email' => 'mylove@gmail.com',
                'avatar' => 'mylove.jpg',
                'password' => Hash::make('mylove123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 10,
                'name' => 'Mai',
                'phone' => '0989 955 502',
                'email' => 'mai@gmail.com',
                'avatar' => 'mai.jpg',
                'password' => Hash::make('mai123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 11,
                'name' => 'Lâm Nhật',
                'phone' => '0956 370 088',
                'email' => 'lamnhat@gmail.com',
                'avatar' => 'lamnhat.jpg',
                'password' => Hash::make('lamnhat123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 12,
                'name' => 'Phúc Long',
                'phone' => '0966 736 229',
                'email' => 'phuclong@gmail.com',
                'avatar' => 'phuclong.jpg',
                'password' => Hash::make('phuclong123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 13,
                'name' => 'Nguyễn Văn Linh',
                'phone' => '0988 222 002',
                'email' => 'nguyenvanlinh@gmail.com',
                'avatar' => 'nguyenvanlinh.jpg',
                'password' => Hash::make('nguyenvanlinh123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 14,
                'name' => 'Điện Biên Phủ',
                'phone' => '0944 466 601',
                'email' => 'dienbienphu@gmail.com',
                'avatar' => 'dienbienphu.jpg',
                'password' => Hash::make('dienbienphu123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 15,
                'name' => 'Ngô Gia Tự',
                'phone' => '0999 500 789',
                'email' => 'ngogiatu@gmail.com',
                'avatar' => 'ngogiatu.jpg',
                'password' => Hash::make('ngogiatu123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 16,
                'name' => 'Hoàng Dư Khương',
                'phone' => '0988 311 122',
                'email' => 'hoangdukhuong@gmail.com',
                'avatar' => 'hoangdukhuong.jpg',
                'password' => Hash::make('hoangdukhuong123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 17,
                'name' => 'Mẹ Thứ',
                'phone' => '0977 826 662',
                'email' => 'methu@gmail.com',
                'avatar' => 'methu.jpg',
                'password' => Hash::make('methu123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 18,
                'name' => 'Bông',
                'phone' => '0977 700 445',
                'email' => 'bong@gmail.com',
                'avatar' => 'bong.jpg',
                'password' => Hash::make('bong123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 19,
                'name' => 'Phạm Văn Đồng',
                'phone' => '0966 073 301',
                'email' => 'phamvandong@gmail.com',
                'avatar' => 'phamvandong.jpg',
                'password' => Hash::make('phamvandong123#@!'),
                'isActive' => true,
                'role_id' => 2
            ],
            [
                'id' => 20,
                'name' => 'Shop Online',
                'phone' => '0955 888 922',
                'email' => 'shoponline@gmail.com',
                'avatar' => 'shoponline.jpg',
                'password' => Hash::make('shoponline12345!'),
                'isActive' => true,
                'role_id' => 2
            ],
        ]);
    }
}
