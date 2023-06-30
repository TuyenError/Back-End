<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        DB::table('products')->insert([
                    [
                        "id" => "1",
                        "name" => "Cơm Hộp Nhôm Gà xối mỡ + Chanh Dây Tươi",
                        "price" => "44000",
                        "image" => "Gà xoi mo.jpg",
                        "promotion_price" => "37000",
                        "isActive" => true,
                        "category_id" => "7",
                        "shop_id" => "1" 
                    ],
                    [
                        "id" => "2",
                        "name" => "Cơm Hộp Nhôm Gà xé + Chanh Dây Tươi",
                        "price" => "44000",
                        "image" => "Gà xé.jpg",
                        "promotion_price" => "37000",
                        "isActive" => true,
                        "category_id" => "7",
                        "shop_id" => "1" 
                    ],
                    [
                        "id" => "3",
                        "name" => "Cơm Ba Chỉ Giòn Da",
                        "price" => "30000",
                        "image" => "Cơm Ba Chỉ Giòn Da.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "7",
                        "shop_id" => "1" 
                    ],
                    [
                        "id" => "4",
                        "name" => "Nước mía",
                        "price" => "10000",
                        "image" => "nước mía.jpg",
                        "promotion_price" => "7000",
                        "isActive" => true,
                        "category_id" => "18",
                        "shop_id" => "1" 
                    ],
                    [
                        "id" => "5",
                        "name" => "Chanh dây tươi",
                        "price" => "15000",
                        "image" => "chanh dây tươi .png",
                        "promotion_price" => "10000",
                        "isActive" => true,
                        "category_id" => "18",
                        "shop_id" => "1" 
                    ],
                    [
                        "id" => "6",
                        "name" => "Mì xíu",
                        "price" => "25000",
                        "image" => "Mỳ xíu.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "15",
                        "shop_id" => "1" 
                    ],
                    [
                        "id" => "7",
                        "name" => "Mỳ Xào Mềm Hải Sản",
                        "price" => "30000",
                        "image" => "Mỳ Xào Mềm Hải Sản.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "15",
                        "shop_id" => "1" 
                    ],
                    [
                        "id" => "8",
                        "name" => "Trà ô long ",
                        "price" => "12000",
                        "image" => "trà ô long.png",
                        "promotion_price" => "12000",
                        "isActive" => true,
                        "category_id" => "18",
                        "shop_id" => "1" 
                    ],
                    [
                        "id" => "9",
                        "name" => "My Xào Giòn Bò",
                        "price" => "30000",
                        "image" => "My Xào Giòn Bò.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "15",
                        "shop_id" => "1" 
                    ],
                    [
                        "id" => "10",
                        "name" => "Miến gà",
                        "price" => "27000",
                        "image" => "miến gà.jpg",
                        "promotion_price" => "27000",
                        "isActive" => true,
                        "category_id" => "15",
                        "shop_id" => "1" 
                    ],
                    [
                        "id" => "11",
                        "name" => "Cà phê muối",
                        "price" => "35000",
                        "image" => "cà phê muối.jpg",
                        "promotion_price" => "35000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "2" 
                    ],
                    [
                        "id" => "12",
                        "name" => "Cà phê kem bơ trứng",
                        "price" => "35000",
                        "image" => "Cà phê kem bơ trứng.jpg",
                        "promotion_price" => "35000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "2" 
                    ],
                    [
                        "id" => "13",
                        "name" => "Trà sữa không thạch",
                        "price" => "17000",
                        "image" => "Trà sữa không thạch.jpg",
                        "promotion_price" => "17000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "2"
                    ],
                    [
                        "id" => "14",
                        "name" => "Sữa tươi trân châu đường đen kem bơ trứng",
                        "price" => "38000",
                        "image" => "Sữa tươi trân châu đường đen kem bơ trứng.jpg",
                        "promotion_price" => "38000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "2" 
                    ],
                    [
                        "id" => "15",
                        "name" => "Soda việt quất",
                        "price" => "20000",
                        "image" => "Soad việt quất.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "21",
                        "shop_id" => "2" 
                    ],
                    [
                        "id" => "16",
                        "name" => "Soda táo",
                        "price" => "20000",
                        "image" => "Soda táo.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "21",
                        "shop_id" => "2" 
                    ],
                    [
                        "id" => "17",
                        "name" => "Soda kiwi full thạch",
                        "price" => "30000",
                        "image" => "Soda kiwi full thạch.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "21",
                        "shop_id" => "2" 
                    ],
                    [
                        "id" => "18",
                        "name" => "Khúc bạch phô mai(6 viên)",
                        "price" => "8000",
                        "image" => "Khúc bạch phô mai(6 viên).jpg",
                        "promotion_price" => "8000",
                        "isActive" => true,
                        "category_id" => "24",
                        "shop_id" => "2" 
                    ],
                    [
                        "id" => "19",
                        "name" => "Flan",
                        "price" => "8000",
                        "image" => "Flan.jpg",
                        "promotion_price" => "8000",
                        "isActive" => true,
                        "category_id" => "24",
                        "shop_id" => "2" 
                    ],
                    [
                        "id" => "20",
                        "name" => "Thạch nhà làm (pudding - rau câu - khúc bạch)",
                        "price" => "18000",
                        "image" => "Thạch nhà làm (pudding - rau câu - khúc bạch).jpg",
                        "promotion_price" => "18000",
                        "isActive" => true,
                        "category_id" => "24",
                        "shop_id" => "2"
                    ],
                    [
                        "id" => "21",
                        "name" => "Truyền thống trân châu",
                        "price" => "22000",
                        "image" => "trà sữa truyền thống trân châu.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "3" 
                    ],
                    [
                        "id" => "22",
                        "name" => "Thái xanh full thạch (Có Flan)",
                        "price" => "32000",
                        "image" => "Thái xanh full thạch (Có Flan).jpg",
                        "promotion_price" => "32000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "3" 
                    ],
                    [
                        "id" => "23",
                        "name" => "Than tre trân châu",
                        "price" => "22000",
                        "image" => "Than tre trân châu.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "3" 
                    ],
                    [
                        "id" => "24",
                        "name" => "Trà đào",
                        "price" => "25000",
                        "image" => "Trà đào.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "27",
                        "shop_id" => "3"
                    ],
                    [
                        "id" => "25",
                        "name" => "Trà đào hoàng kim",
                        "price" => "32000",
                        "image" => "Trà đào hoàng kim.jpg",
                        "promotion_price" => "32000",
                        "isActive" => true,
                        "category_id" => "27",
                        "shop_id" => "3" 
                    ],
                    [
                        "id" => "26",
                        "name" => "Milo đặc biệt (Free up lên size L)",
                        "price" => "38000",
                        "image" => "Milo đặc biệt (Free up lên size L）.jpg",
                        "promotion_price" => "38000",
                        "isActive" => true,
                        "category_id" => "17",
                        "shop_id" => "3" 
                    ],
                    [
                        "id" => "27",
                        "name" => "Milo dầm flan",
                        "price" => "30000",
                        "image" => "Milo dầm flan.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "17",
                        "shop_id" => "3" 
                    ],
                    [
                        "id" => "28",
                        "name" => "Milo dầm kem chese",
                        "price" => "30000",
                        "image" => "Milo dầm kem chese.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "17",
                        "shop_id" => "3" 
                    ],
                    [
                        "id" => "29",
                        "name" => "Milo 1lit flan khổng lồ",
                        "price" => "47000",
                        "image" => "Milo 1lit flan khổng lồ.jpg",
                        "promotion_price" => "47000",
                        "isActive" => true,
                        "category_id" => "17",
                        "shop_id" => "3" 
                    ],
                    [
                        "id" => "30",
                        "name" => "Milo dầm kem trứng",
                        "price" => "30000",
                        "image" => "Milo dầm kem trứng.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "17",
                        "shop_id" => "3"
                    ],
                    [
                        "id" => "31",
                        "name" => "Bánh Mì Phô Mai Bơ Tỏi",
                        "price" => "34000",
                        "image" => "Bánh Mì Phô Mai Bơ Tỏi.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "2",
                        "shop_id" => "4" 
                    ],
                    [
                        "id" => "32",
                        "name" => "Bánh Tart Trứng Sữa Tươi",
                        "price" => "16000",
                        "image" => "Bánh Tart Trứng Sữa Tươi.jpg",
                        "promotion_price" => "12000",
                        "isActive" => true,
                        "category_id" => "2",
                        "shop_id" => "4" 
                    ],
                    [
                        "id" => "33",
                        "name" => "Bánh Mì Phô Mai Chocolate Bơ Tỏi",
                        "price" => "38000",
                        "image" => "Bánh Mì Phô Mai Chocolate Bơ Tỏi.jpg",
                        "promotion_price" => "28000",
                        "isActive" => true,
                        "category_id" => "2",
                        "shop_id" => "4" 
                    ],
                    [
                        "id" => "34",
                        "name" => "Trà Chanh Mật Ong x Bánh Mì Phô Mai Bơ Tỏi",
                        "price" => "52000",
                        "image" => "Trà Chanh Mật Ong x Bánh Mì Phô Mai Bơ Tỏi.jpg",
                        "promotion_price" => "39000",
                        "isActive" => true,
                        "category_id" => "8",
                        "shop_id" => "4" 
                    ],
                    [
                        "id" => "35",
                        "name" => "Trà Sữa Trân Châu Đen x Bánh Mì Phô Mai Bơ Tỏi",
                        "price" => "57000",
                        "image" => "Trà Sữa Trân Châu Đen x Bánh Mì Phô Mai Bơ Tỏi.jpg",
                        "promotion_price" => "43000",
                        "isActive" => true,
                        "category_id" => "8",
                        "shop_id" => "4" 
                    ],
                    [
                        "id" => "36",
                        "name" => "Đường Nâu Trân Châu Sữa x Phô Mai Bơ Tỏi",
                        "price" => "60000",
                        "image" => "Đường Nâu Trân Châu Sữa x Phô Mai Bơ Tỏi.jpg",
                        "promotion_price" => "45000",
                        "isActive" => true,
                        "category_id" => "8",
                        "shop_id" => "4" 
                    ],
                    [
                        "id" => "37",
                        "name" => "Đường Nâu Trân Châu Sữa",
                        "price" => "31000",
                        "image" => "Đường Nâu Trân Châu Sữa.jpg",
                        "promotion_price" => "23000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "4" 
                    ],
                    [
                        "id" => "38",
                        "name" => "Trà Sữa Trân Châu Trắng",
                        "price" => "28000",
                        "image" => "Trà Sữa Trân Châu Trắng.jpg",
                        "promotion_price" => "21000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "4" 
                    ],
                    [
                        "id" => "39",
                        "name" => "Trà Sữa Đào",
                        "price" => "31000",
                        "image" => "Trà Sữa Đào.jpg",
                        "promotion_price" => "23000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "4" 
                    ],
                    [
                        "id" => "40",
                        "name" => "Trà Sữa Thạch Trái Cây",
                        "price" => "28000",
                        "image" => "Trà Sữa Thạch Trái Cây.jpg",
                        "promotion_price" => "21000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "4" 
                    ],
                    [
                        "id" => "41",
                        "name" => "Bún đậu lớn",
                        "price" => "60000",
                        "image" => "Bún đậu lớn.jpg",
                        "promotion_price" => "60000",
                        "isActive" => true,
                        "category_id" => "3",
                        "shop_id" => "5" 
                    ],
                    [
                        "id" => "42",
                        "name" => "Bún đậu nhỏ",
                        "price" => "30000",
                        "image" => "Bún đậu nhỏ.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "3",
                        "shop_id" => "5" 
                    ],
                    [
                        "id" => "43",
                        "name" => " Bún đậu đặc biệt",
                        "price" => "125000",
                        "image" => "Bún đậu đặc biệt.jpg",
                        "promotion_price" => "125000",
                        "isActive" => true,
                        "category_id" => "3",
                        "shop_id" => "5" 
                    ],
                    [
                        "id" => "44",
                        "name" => "Nem Chua Rán Hà Nội",
                        "price" => "25000",
                        "image" => "Nem Chua Rán Hà Nội.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "5" 
                    ],
                    [
                        "id" => "45",
                        "name" => "Ốc nhồi",
                        "price" => "25000",
                        "image" => "Ốc nhồi.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "5"
                    ],
                    [
                        "id" => "46",
                        "name" => "Chân gà sả tắc",
                        "price" => "60000",
                        "image" => "Chân gà sả tắc.jpg",
                        "promotion_price" => "60000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "5" 
                    ],
                    [
                        "id" => "47",
                        "name" => "Nem Chua Rán Hà Nội(Lớn)",
                        "price" => "45000",
                        "image" => "Nem Chua Rán Hà Nội(Lớn).jpg",
                        "promotion_price" => "45000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "5" 
                    ],
                    [
                        "id" => "48",
                        "name" => "Sâm Bí Đao Hạt Chia",
                        "price" => "12000",
                        "image" => "Sâm Bí Đao Hạt Chia.jpg",
                        "promotion_price" => "12000",
                        "isActive" => true,
                        "category_id" => "18",
                        "shop_id" => "5" 
                    ],
                    [
                        "id" => "49",
                        "name" => "Chanh dây",
                        "price" => "12000",
                        "image" => "Chanh dây.jpg",
                        "promotion_price" => "12000",
                        "isActive" => true,
                        "category_id" => "18",
                        "shop_id" => "5" 
                    ],
                    [
                        "id" => "50",
                        "name" => "Coca-Cola",
                        "price" => "15000",
                        "image" => "Coca-Cola.jpg",
                        "promotion_price" => "15000",
                        "isActive" => true,
                        "category_id" => "18",
                        "shop_id" => "5" 
                    ],
                    [
                        "id" => "51",
                        "name" => "1 Miếng Gà Giòn Vui Vẻ",
                        "price" => "30000",
                        "image" => "1 Miếng Gà Giòn Vui Vẻ.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "11",
                        "shop_id" => "6" 
                    ],
                    [
                        "id" => "52",
                        "name" => "2 Miếng Gà Giòn Vui Vẻ + 1 Khoai tây chiên vừa + 1 Nước ngọt lớn",
                        "price" => "91000",
                        "image" => "2 Miếng Gà Giòn Vui Vẻ + 1 Khoai tây chiên vừa + 1 Nước ngọt lớn.jpg",
                        "promotion_price" => "91000",
                        "isActive" => true,
                        "category_id" => "11",
                        "shop_id" => "6"
                    ],
                    [
                        "id" => "53",
                        "name" => "1 Miếng Gà Giòn Vui Vẻ + 1 Khoai tây chiên vừa + 1 Bánh xoài đào + 1 Nước ngọt lớn",
                        "price" => "78000",
                        "image" => "1 Miếng gà sốt cay.jpg",
                        "promotion_price" => "78000",
                        "isActive" => true,
                        "category_id" => "11",
                        "shop_id" => "6" 
                    ],
                    [
                        "id" => "54",
                        "name" => "1 Miếng gà sốt cay",
                        "price" => "35000",
                        "image" => "1 Miếng Gà Giòn Vui Vẻ + 1 Khoai tây chiên vừa + 1 Bánh xoài đào + 1 Nước ngọt lớn.jpg",
                        "promotion_price" => "35000",
                        "isActive" => true,
                        "category_id" => "12",
                        "shop_id" => "6" 
                    ],
                    [
                        "id" => "55",
                        "name" => "2 Miếng gà sốt cay + 1 Nước ngọt lớn",
                        "price" => "85000",
                        "image" => "2 Miếng gà sốt cay + 1 Nước ngọt lớn.jpg",
                        "promotion_price" => "85000",
                        "isActive" => true,
                        "category_id" => "12",
                        "shop_id" => "6" 
                    ],
                    [
                        "id" => "56",
                        "name" => "1 Miếng gà sốt cay + 1 Khoai tây lắc vị thịt nướng BBQ vừa + 1 Trà đào vừa",
                        "price" => "65000",
                        "image" => "1 Miếng gà sốt cay + 1 Khoai tây lắc vị thịt nướng BBQ vừa + 1 Trà đào vừa.jpg",
                        "promotion_price" => "65000",
                        "isActive" => true,
                        "category_id" => "12",
                        "shop_id" => "6" 
                    ],
                    [
                        "id" => "57",
                        "name" => "1 Mì ý sốt bò bằm vừa + 1 Miếng Gà Giòn Vui Vẻ + 1 Nước ngọt lớn",
                        "price" => "78000",
                        "image" => "1 Mì ý sốt bò bằm vừa + 1 Miếng Gà Giòn Vui Vẻ + 1 Nước ngọt lớn.jpg",
                        "promotion_price" => "78000",
                        "isActive" => true,
                        "category_id" => "16",
                        "shop_id" => "6" 
                    ],
                    [
                        "id" => "58",
                        "name" => "1 Mì Ý sốt bò bằm + 1 Khoai tây chiên vừa + 1 Nước ngọt lớn",
                        "price" => "60000",
                        "image" => "1 Mì ý sốt bò bằm vừa + 1 Miếng Gà Giòn Vui Vẻ + 1 Nước ngọt lớn.jpg",
                        "promotion_price" => "60000",
                        "isActive" => true,
                        "category_id" => "16",
                        "shop_id" => "6" 
                    ],
                    [
                        "id" => "59",
                        "name" => "1 Mì ý sốt bò bằm lớn + 1 Miếng Gà Giòn Vui Vẻ + 1 Khoai tây chiên vừa + 1 Nước ngọt lớn",
                        "price" => "103000",
                        "image" => "1 Mì Ý sốt bò bằm + 1 Khoai tây chiên vừa + 1 Nước ngọt lớn.jpg",
                        "promotion_price" => "103000",
                        "isActive" => true,
                        "category_id" => "16",
                        "shop_id" => "6"
                    ],
                    [
                        "id" => "60",
                        "name" => "1 Mì Ý sốt bò bằm vừa + 2 Miếng Gà Giòn Vui Vẻ không xương + 1 Khoai tây chiên vừa + 1 Nước ngọt lớn",
                        "price" => "80000",
                        "image" => "1 Mì ý sốt bò bằm lớn + 1 Miếng Gà Giòn Vui Vẻ + 1 Khoai tây chiên vừa + 1 Nước ngọt lớn.jpg",
                        "promotion_price" => "80000",
                        "isActive" => true,
                        "category_id" => "16",
                        "shop_id" => "6" 
                    ],
                    [
                        "id" => "61",
                        "name" => "Trà Sữa Kem Cheese",
                        "price" => "22000",
                        "image" => "Trà Sữa Kem Cheese.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "7" 
                    ],
                    [
                        "id" => "62",
                        "name" => "Trà sữa thái xanh thập cẩm",
                        "price" => "30000",
                        "image" => "Trà sữa thái xanh thập cẩm.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "7" 
                    ],
                    [
                        "id" => "63",
                        "name" => "Cafe Sữa BandB",
                        "price" => "16000",
                        "image" => "Cafe Sữa BandB.jpg",
                        "promotion_price" => "16000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "7" 
                    ],
                    [
                        "id" => "64",
                        "name" => "Bạc Xỉu",
                        "price" => "20000",
                        "image" => "Bạc Xỉu.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "7" 
                    ],
                    [
                        "id" => "65",
                        "name" => "Cafe dừa",
                        "price" => "27000",
                        "image" => "Cafe dừa.jpg",
                        "promotion_price" => "27000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "7"
                    ],
                    [
                        "id" => "66",
                        "name" => "Ép cà rốt",
                        "price" => "25000",
                        "image" => "Ép cà rốt.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "19",
                        "shop_id" => "7" 
                    ],
                    [
                        "id" => "67",
                        "name" => "Ép chanh dây",
                        "price" => "25000",
                        "image" => "Ép chanh dây.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "19",
                        "shop_id" => "7" 
                    ],
                    [
                        "id" => "68",
                        "name" => "Nước chanh cam sả",
                        "price" => "25000",
                        "image" => "Nước chanh cam sả.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "19",
                        "shop_id" => "7" 
                    ],
                    [
                        "id" => "69",
                        "name" => "Bánh tráng trộn",
                        "price" => "28000",
                        "image" => "Bánh tráng trộn.jpg",
                        "promotion_price" => "28000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "7" 
                    ],
                    [
                        "id" => "70",
                        "name" => "Mẹt gia đình ",
                        "price" => "80000",
                        "image" => "Mẹt gia đình.jpg",
                        "promotion_price" => "80000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "7" 
                    ],
                    [
                        "id" => "71",
                        "name" => "Trà sữa khoai môn",
                        "price" => "19000",
                        "image" => "Trà sữa khoai môn.jpg",
                        "promotion_price" => "19000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "8" 
                    ],
                    [
                        "id" => "72",
                        "name" => "Trà sữa xoài",
                        "price" => "20000",
                        "image" => "Trà sữa xoài.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "8" 
                    ],
                    [
                        "id" => "73",
                        "name" => "Matcha đá xay",
                        "price" => "32000",
                        "image" => "Matcha đá xay.jpg",
                        "promotion_price" => "32000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "8"
                    ],
                    [
                        "id" => "74",
                        "name" => "Kiwi đá xay",
                        "price" => "32000",
                        "image" => "Kiwi đá xay.jpg",
                        "promotion_price" => "32000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "8" 
                    ],
                    [
                        "id" => "75",
                        "name" => "Yogurt xoài",
                        "price" => "22000",
                        "image" => "Yogurt xoài.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "22",
                        "shop_id" => "8" 
                    ],
                    [
                        "id" => "76",
                        "name" => "Yogurt thạch thập cẩm",
                        "price" => "27000",
                        "image" => "Yogurt thạch thập cẩm.jpg",
                        "promotion_price" => "27000",
                        "isActive" => true,
                        "category_id" => "22",
                        "shop_id" => "8" 
                    ],
                    [
                        "id" => "77",
                        "name" => "Caffe muối",
                        "price" => "25000",
                        "image" => "Caffe muối.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "8" 
                    ],
                    [
                        "id" => "78",
                        "name" => "Cafe sữa sài gòn",
                        "price" => "20000",
                        "image" => "Cafe sữa sài gòn.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "8" 
                    ],
                    [
                        "id" => "79",
                        "name" => "Bánh tráng xii ke cay",
                        "price" => "13000",
                        "image" => "Bánh tráng xii ke cay.jpg",
                        "promotion_price" => "13000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "8" 
                    ],
                    [
                        "id" => "80",
                        "name" => "Bánh tráng cuộn thập cẩm",
                        "price" => "13000",
                        "image" => "Bánh tráng cuộn thập cẩm.jpg",
                        "promotion_price" => "13000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "8" 
                    ],
                    [
                        "id" => "81",
                        "name" => "Kem xôi",
                        "price" => "20000",
                        "image" => "Kem xôi.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "13",
                        "shop_id" => "9" 
                    ],
                    [
                        "id" => "82",
                        "name" => "Kem ký",
                        "price" => "70000",
                        "image" => "Kem ký.jpg",
                        "promotion_price" => "70000",
                        "isActive" => true,
                        "category_id" => "13",
                        "shop_id" => "9" 
                    ],
                    [
                        "id" => "83",
                        "name" => "Kem trứng sữa dừa",
                        "price" => "20000",
                        "image" => "Kem trứng sữa dừa.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "13",
                        "shop_id" => "9" 
                    ],
                    [
                        "id" => "84",
                        "name" => "Trà sữa caramen +flan",
                        "price" => "25000",
                        "image" => "Trà sữa caramen +flan.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "9" 
                    ],
                    [
                        "id" => "85",
                        "name" => "Trà sữa vị trái cây các loại",
                        "price" => "20000",
                        "image" => "Trà sữa vị trái cây các loại.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "9" 
                    ],
                    [
                        "id" => "86",
                        "name" => "Cam vắt",
                        "price" => "25000",
                        "image" => "Cam vắt.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "9" 
                    ],
                    [
                        "id" => "87",
                        "name" => "Gỏi bò khô trộn",
                        "price" => "25000",
                        "image" => "Gỏi bò khô trộn.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "9" 
                    ],
                    [
                        "id" => "88",
                        "name" => "Xoài mắm ruốc",
                        "price" => "25000",
                        "image" => "Xoài mắm ruốc.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "9"
                    ],
                    [
                        "id" => "89",
                        "name" => "Kem flan 2 cái",
                        "price" => "18000",
                        "image" => "Kem flan 2 cái.jpg",
                        "promotion_price" => "18000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "9"
                    ],
                    [
                        "id" => "90",
                        "name" => "Sữa chua nếp cẩm",
                        "price" => "20000",
                        "image" => "Sữa chua nếp cẩm.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "9" 
                    ],
                    [
                        "id" => "91",
                        "name" => "Bạc Xỉu",
                        "price" => "18000",
                        "image" => "Bạc Xỉu.jpg",
                        "promotion_price" => "18000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "10"
                    ],
                    [
                        "id" => "92",
                        "name" => "Sinh Tố Cà Phê Dừa / Coconut Smoothies Coffee",
                        "price" => "48000",
                        "image" => "Sinh Tố Cà Phê Dừa - Coconut Smoothies Coffee.jpg",
                        "promotion_price" => "48000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "10"
                    ],
                    [
                        "id" => "93",
                        "name" => "Nước dứa ép",
                        "price" => "33000",
                        "image" => "nước dứa ép.jpg",
                        "promotion_price" => "33000",
                        "isActive" => true,
                        "category_id" => "19",
                        "shop_id" => "10"
                    ],
                    [
                        "id" => "94",
                        "name" => "Nước Ổi Ép",
                        "price" => "33000",
                        "image" => "Nước Ổi Ép.jpg",
                        "promotion_price" => "33000",
                        "isActive" => true,
                        "category_id" => "19",
                        "shop_id" => "10"
                    ],
                    [
                        "id" => "95",
                        "name" => "Nước Ép Dưa Hấu",
                        "price" => "30000",
                        "image" => "Nước Ép Dưa Hấu.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "19",
                        "shop_id" => "10"
                    ],
                    [
                        "id" => "96",
                        "name" => "Trà Chanh",
                        "price" => "33000",
                        "image" => "Trà Chanh.jpg",
                        "promotion_price" => "33000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "10"
                    ],
                    [
                        "id" => "97",
                        "name" => "Trà Gừng ",
                        "price" => "25000",
                        "image" => "Trà Gừng .jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "10"
                    ],
                    [
                        "id" => "98",
                        "name" => "Hoa Quả Dầm Sữa Chua",
                        "price" => "47000",
                        "image" => "Hoa Quả Dầm Sữa Chua.jpg",
                        "promotion_price" => "47000",
                        "isActive" => true,
                        "category_id" => "22",
                        "shop_id" => "10"
                    ],
                    [
                        "id" => "99",
                        "name" => "Sữa Chua Đánh Đá",
                        "price" => "27000",
                        "image" => "Sữa Chua Đánh Đá.jpg",
                        "promotion_price" => "27000",
                        "isActive" => true,
                        "category_id" => "22",
                        "shop_id" => "10"
                    ],
                    [
                        "id" => "100",
                        "name" => "Sữa Chua Dừa ",
                        "price" => "37000",
                        "image" => "Sữa Chua Dừa .jpg",
                        "promotion_price" => "37000",
                        "isActive" => true,
                        "category_id" => "22",
                        "shop_id" => "10"
                    ],
                    [
                        "id" => "101",
                        "name" => "Bạc xỉu kem mặn",
                        "price" => "63000",
                        "image" => "Bạc xỉu kem mặn.jpg",
                        "promotion_price" => "63000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "11"
                    ],
                    [
                        "id" => "102",
                        "name" => "Cà phê sữa kem mặn",
                        "price" => "63000",
                        "image" => "Cà phê sữa kem mặn.jpg",
                        "promotion_price" => "63000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "11"
                    ],
                    [
                        "id" => "103",
                        "name" => "Trà Bí Đao",
                        "price" => "65000",
                        "image" => "Trà Bí Đao.jpg",
                        "promotion_price" => "65000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "11"
                    ],
                    [
                        "id" => "104",
                        "name" => "Trà Alisan",
                        "price" => "48000",
                        "image" => "Trà Alisan.jpg",
                        "promotion_price" => "48000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "11"
                    ],
                    [
                        "id" => "105",
                        "name" => "Xoài đá xay",
                        "price" => "71000",
                        "image" => "Xoài đá xay.jpg",
                        "promotion_price" => "70000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "11"
                    ],
                    [
                        "id" => "106",
                        "name" => "Yakult Đào Đá Xay",
                        "price" => "72000",
                        "image" => "Yakult Đào Đá Xay.jpg",
                        "promotion_price" => "72000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "11"
                    ],
                    [
                        "id" => "107",
                        "name" => "Dâu Oreo Đá Xay",
                        "price" => "71000",
                        "image" => "Dâu Oreo Đá Xay.jpg",
                        "promotion_price" => "71000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "11"
                    ],
                    [
                        "id" => "108",
                        "name" => "Mint Chocolate Milk Tea",
                        "price" => "62000",
                        "image" => "Mint Chocolate Milk Tea.jpg",
                        "promotion_price" => "62000",
                        "isActive" => true,
                        "category_id" => "6",
                        "shop_id" => "11"
                    ],
                    [
                        "id" => "109",
                        "name" => "Mint Chocolate Smoothie",
                        "price" => "70000",
                        "image" => "Mint Chocolate Smoothie.jpg",
                        "promotion_price" => "70000",
                        "isActive" => true,
                        "category_id" => "6",
                        "shop_id" => "11"
                    ],
                    [
                        "id" => "110",
                        "name" => "Mint Cookie Smoothie",
                        "price" => "70000",
                        "image" => "Mint Cookie Smoothie.jpg",
                        "promotion_price" => "70000",
                        "isActive" => true,
                        "category_id" => "6",
                        "shop_id" => "11"
                    ],
                    [
                        "id" => "111",
                        "name" => "Trà Vải Lài",
                        "price" => "50000",
                        "image" => "Trà Vải Lài.jpg",
                        "promotion_price" => "50000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "12"
                    ],
                    [
                        "id" => "112",
                        "name" => "Trà Oolong Dâu",
                        "price" => "50000",
                        "image" => "Trà Oolong Dâu.jpg",
                        "promotion_price" => "50000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "12"
                    ],
                    [
                        "id" => "113",
                        "name" => "Trà Nhãn Lài",
                        "price" => "50000",
                        "image" => "Trà Nhãn Lài.jpg",
                        "promotion_price" => "50000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "12"
                    ],
                    [
                        "id" => "114",
                        "name" => "Sữa chua phúc bồn tử đác cam",
                        "price" => "70000",
                        "image" => "Sữa chua phúc bồn tử đác cam.jpg",
                        "promotion_price" => "70000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "12"
                    ],
                    [
                        "id" => "115",
                        "name" => "Oreo Cà Phê Sữa Đá Xay",
                        "price" => "60000",
                        "image" => "Oreo Cà Phê Sữa Đá Xay.jpg",
                        "promotion_price" => "60000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "12"
                    ],
                    [
                        "id" => "116",
                        "name" => "Hồng Trà Đào Đá Xay",
                        "price" => "65000",
                        "image" => "Hồng Trà Đào Đá Xay.jpg",
                        "promotion_price" => "65000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "12"
                    ],
                    [
                        "id" => "117",
                        "name" => "Hoa Tuyết Berry Berry",
                        "price" => "70000",
                        "image" => "Hoa Tuyết Berry Berry.jpg",
                        "promotion_price" => "70000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "12"
                    ],
                    [
                        "id" => "118",
                        "name" => "Tiramisu",
                        "price" => "35000",
                        "image" => "Tiramisu.jpg",
                        "promotion_price" => "35000",
                        "isActive" => true,
                        "category_id" => "2",
                        "shop_id" => "12"
                    ],
                    [
                        "id" => "119",
                        "name" => "Bánh quy Việt Quất",
                        "price" => "35000",
                        "image" => "Bánh quy Việt Quất.jpg",
                        "promotion_price" => "35000",
                        "isActive" => true,
                        "category_id" => "2",
                        "shop_id" => "12"
                    ],
                    [
                        "id" => "120",
                        "name" => "Bánh Butter Chocolate Croissant",
                        "price" => "22000",
                        "image" => "Bánh Butter Chocolate Croissant.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "2",
                        "shop_id" => "12"
                    ],
                    [
                        "id" => "121",
                        "name" => "Trà Sữa Trân Châu Hoàng Kim",
                        "price" => "45000",
                        "image" => "Trà Sữa Trân Châu Hoàng Kim.jpg",
                        "promotion_price" => "45000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "13"
                    ],
                    [
                        "id" => "122",
                        "name" => "Sữa Tươi Trân Châu Đường Đen",
                        "price" => "62000",
                        "image" => "Sữa Tươi Trân Châu Đường Đen.jpg",
                        "promotion_price" => "62000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "13"
                    ],
                    [
                        "id" => "123",
                        "name" => "Trà Sữa Sương Sáo",
                        "price" => "63000",
                        "image" => "Trà Sữa Sương Sáo.jpg",
                        "promotion_price" => "63000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "13"
                    ],
                    [
                        "id" => "124",
                        "name" => "Trà Sữa Dark Lava",
                        "price" => "55000",
                        "image" => "Trà Sữa Dark Lava.jpg",
                        "promotion_price" => "50000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "13"
                    ],
                    [
                        "id" => "125",
                        "name" => "Trà Sữa Oolong Dark Lava",
                        "price" => "55000",
                        "image" => "Trà Sữa Oolong Dark Lava.jpg",
                        "promotion_price" => "55000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "13"
                    ],
                    [
                        "id" => "126",
                        "name" => "Dark Lava Milo O Latte",
                        "price" => "60000",
                        "image" => "Dark Lava Milo O Latte.jpg",
                        "promotion_price" => "60000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "13"
                    ],
                    [
                        "id" => "127",
                        "name" => "Trà Sữa Vải",
                        "price" => "50000",
                        "image" => "Trà Sữa Vải.jpg",
                        "promotion_price" => "50000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "13"
                    ],
                    [
                        "id" => "128",
                        "name" => "Trà Ô Long Macchiato",
                        "price" => "45000",
                        "image" => "Trà Ô Long Macchiato.jpg",
                        "promotion_price" => "45000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "13"
                    ],
                    [
                        "id" => "129",
                        "name" => "Trà Ô Long Latte",
                        "price" => "50000",
                        "image" => "Trà Ô Long Latte.jpg",
                        "promotion_price" => "50000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "13"
                    ],
                    [
                        "id" => "130",
                        "name" => "Trà Đào Macchiato",
                        "price" => "59000",
                        "image" => "Trà Đào Macchiato.jpg",
                        "promotion_price" => "59000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "13"
                    ],
                    [
                        "id" => "131",
                        "name" => "Trà Sen Vàng (Củ Năng)",
                        "price" => "45000",
                        "image" => "Trà Sen Vàng (Củ Năng).jpg",
                        "promotion_price" => "45000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "14"
                    ],
                    [
                        "id" => "132",
                        "name" => "Trà Thạch Đào",
                        "price" => "40000",
                        "image" => "Trà Thạch Đào.jpg",
                        "promotion_price" => "40000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "14"
                    ],
                    [
                        "id" => "133",
                        "name" => "Trà Xanh Đậu Đỏ",
                        "price" => "45000",
                        "image" => "Trà Xanh Đậu Đỏ.jpg",
                        "promotion_price" => "45000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "14"
                    ],
                    [
                        "id" => "134",
                        "name" => "Phin Sữa Đá - Coffee",
                        "price" => "30000",
                        "image" => "Phin Sữa Đá - Coffee.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "14"
                    ],
                    [
                        "id" => "135",
                        "name" => "Phin Sữa Nóng - Coffee",
                        "price" => "30000",
                        "image" => "Phin Sữa Nóng - Coffee.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "14"
                    ],
                    [
                        "id" => "136",
                        "name" => "Bạc Xỉu",
                        "price" => "30000",
                        "image" => "Bạc Xỉu.jpg",
                        "promotion_price" => "30000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "14"
                    ],
                    [
                        "id" => "137",
                        "name" => "Tiramisu",
                        "price" => "35000",
                        "image" => "Tiramisu.jpg",
                        "promotion_price" => "35000",
                        "isActive" => true,
                        "category_id" => "2",
                        "shop_id" => "14"
                    ],
                    [
                        "id" => "138",
                        "name" => "Bánh Phô Mai Trà Xanh",
                        "price" => "35000",
                        "image" => "Bánh Phô Mai Trà Xanh.jpg",
                        "promotion_price" => "35000",
                        "isActive" => true,
                        "category_id" => "2",
                        "shop_id" => "14"
                    ],
                    [
                        "id" => "139",
                        "name" => "Bánh Sô Cô La Highlands",
                        "price" => "35000",
                        "image" => "Bánh Sô Cô La Highlands.jpg",
                        "promotion_price" => "35000",
                        "isActive" => true,
                        "category_id" => "2",
                        "shop_id" => "14"
                    ],
                    [
                        "id" => "140",
                        "name" => "Bánh Sữa Chua Phô Mai",
                        "price" => "39000",
                        "image" => "Bánh Sữa Chua Phô Mai.jpg",
                        "promotion_price" => "39000",
                        "isActive" => true,
                        "category_id" => "2",
                        "shop_id" => "14"
                    ],
                    [
                        "id" => "141",
                        "name" => "Trà sữa thái xanh",
                        "price" => "15000",
                        "image" => "Trà sữa thái xanh.jpg",
                        "promotion_price" => "15000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "15"
                    ],
                    [
                        "id" => "142",
                        "name" => "Trà sữa than tre",
                        "price" => "23000",
                        "image" => "Trà sữa than tre.jpg",
                        "promotion_price" => "23000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "15"
                    ],
                    [
                        "id" => "143",
                        "name" => "Trà sữa khoai môn đặc biệt ",
                        "price" => "27000",
                        "image" => "Trà sữa khoai môn đặc biệt .jpg",
                        "promotion_price" => "27000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "15"
                    ],
                    [
                        "id" => "144",
                        "name" => "Sữa chua nha đam lắc mứt xoài",
                        "price" => "25000",
                        "image" => "Sữa chua nha đam lắc mứt xoài.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "22",
                        "shop_id" => "15"
                    ],
                    [
                        "id" => "145",
                        "name" => "Sữa chua lắc mứt dâu",
                        "price" => "25000",
                        "image" => "Sữa chua lắc mứt dâu.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "22",
                        "shop_id" => "15"
                    ],
                    [
                        "id" => "146",
                        "name" => "sữa chua chanh dây",
                        "price" => "25000",
                        "image" => "sữa chua chanh dây.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "22",
                        "shop_id" => "15"
                    ],
                    [
                        "id" => "147",
                        "name" => "Milo dầm bấnh Flan",
                        "price" => "25000",
                        "image" => "Milo dầm bấnh Flan.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "15"
                    ],
                    [
                        "id" => "148",
                        "name" => "Smoothie dừa",
                        "price" => "27000",
                        "image" => "Smoothie dừa.jpg",
                        "promotion_price" => "27000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "15"
                    ],
                    [
                        "id" => "149",
                        "name" => "Smoothie việt quốc",
                        "price" => "27000",
                        "image" => "Smoothie việt quốc.jpg",
                        "promotion_price" => "27000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "15"
                    ],
                    [
                        "id" => "150",
                        "name" => "Smoothie Xoài",
                        "price" => "28000",
                        "image" => "Smoothie Xoài.jpg",
                        "promotion_price" => "28000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "15"
                    ],
                    [
                        "id" => "151",
                        "name" => "Chân gà xương sốt thái dầm cóc/xoài ( còn xương)",
                        "price" => "55000",
                        "image" => "Chân gà xương sốt thái dầm cóc,xoài ( còn xương).jpg",
                        "promotion_price" => "55000",
                        "isActive" => true,
                        "category_id" => "5",
                        "shop_id" => "16"
                    ],
                    [
                        "id" => "152",
                        "name" => "Chân Gà rút xương sốt thái dầm cóc,xoài ( must try)",
                        "price" => "75000",
                        "image" => "Chân Gà rút xương sốt thái dầm cóc,xoài ( must try).jpg",
                        "promotion_price" => "75000",
                        "isActive" => true,
                        "category_id" => "5",
                        "shop_id" => "16"
                    ],
                    [
                        "id" => "153",
                        "name" => "Khoai lang kén chiên",
                        "price" => "22000",
                        "image" => "Khoai lang kén chiên.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "10",
                        "shop_id" => "16"
                    ],
                    [
                        "id" => "154",
                        "name" => "Tôm viên chiên",
                        "price" => "22000",
                        "image" => "Tôm viên chiên.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "10",
                        "shop_id" => "16"
                    ],
                    [
                        "id" => "155",
                        "name" => "Cá Viên Chiên Nước Mắm Bơ Tỏi",
                        "price" => "70000",
                        "image" => "Cá Viên Chiên Nước Mắm Bơ Tỏi.jpg",
                        "promotion_price" => "70000",
                        "isActive" => true,
                        "category_id" => "10",
                        "shop_id" => "16"
                    ],
                    [
                        "id" => "156",
                        "name" => "Cá Viên Chiên Mắm Bơ Tỏi ",
                        "price" => "90000",
                        "image" => "Cá Viên Chiên Mắm Bơ Tỏi .jpg",
                        "promotion_price" => "900000",
                        "isActive" => true,
                        "category_id" => "10",
                        "shop_id" => "16"
                    ],
                    [
                        "id" => "157",
                        "name" => "Cá Viên Chiên Sốt Thái ( Đặc Biệt )",
                        "price" => "95000",
                        "image" => "Cá Viên Chiên Sốt Thái ( Đặc Biệt ).jpg",
                        "promotion_price" => "95000",
                        "isActive" => true,
                        "category_id" => "10",
                        "shop_id" => "16"
                    ],
                    [
                        "id" => "158",
                        "name" => "Trà tắc xí muội khổng lồ",
                        "price" => "22000",
                        "image" => "Trà tắc xí muội khổng lồ.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "16"
                    ],
                    [
                        "id" => "159",
                        "name" => "Trà đào đặc biệt",
                        "price" => "20000",
                        "image" => "Trà đào đặc biệt.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "16"
                    ],
                    [
                        "id" => "160",
                        "name" => "Trà vải đặc biệt",
                        "price" => "22000",
                        "image" => "Trà vải đặc biệt.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "16"
                    ],
                    [
                        "id" => "161",
                        "name" => "Cà Phê Muối",
                        "price" => "20000",
                        "image" => "Cà Phê Muối.jpg",
                        "promotion_price" => "20000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "17"
                    ],
                    [
                        "id" => "162",
                        "name" => "Cà Phê Dừa",
                        "price" => "22000",
                        "image" => "Cà Phê Dừa.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "17"
                    ],
                    [
                        "id" => "163",
                        "name" => "Cà Phê Sữa Phô Mai",
                        "price" => "22000",
                        "image" => "Cà Phê Sữa Phô Mai.jpg",
                        "promotion_price" => "22000",
                        "isActive" => true,
                        "category_id" => "4",
                        "shop_id" => "17"
                    ],
                    [
                        "id" => "164",
                        "name" => "Trà đào cam sả hạt chia",
                        "price" => "25000",
                        "image" => "Trà đào cam sả hạt chia.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "17"
                    ],
                    [
                        "id" => "165",
                        "name" => "Trà gừng xí muội",
                        "price" => "18000",
                        "image" => "Trà gừng xí muội.jpg",
                        "promotion_price" => "18000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "17"
                    ],
                    [
                        "id" => "166",
                        "name" => "Trà Chanh Vải",
                        "price" => "18000",
                        "image" => "Trà Chanh Vải.jpg",
                        "promotion_price" => "18000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "17"
                    ],
                    [
                        "id" => "167",
                        "name" => "Đá xay chocolate dừa",
                        "price" => "27000",
                        "image" => "Đá xay chocolate dừa.jpg",
                        "promotion_price" => "27000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "17"
                    ],
                    [
                        "id" => "168",
                        "name" => "Xoài Cốt Dừa Đá Xay",
                        "price" => "25000",
                        "image" => "Xoài Cốt Dừa Đá Xay.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "17"
                    ],
                    [
                        "id" => "169",
                        "name" => "Hoàng Đào Đá Xay",
                        "price" => "25000",
                        "image" => "Hoàng Đào Đá Xay.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "17"
                    ],
                    [
                        "id" => "170",
                        "name" => "Tắc Đá Xay",
                        "price" => "25000",
                        "image" => "Tắc Đá Xay.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "17"
                    ],
                    [
                        "id" => "171",
                        "name" => "Trà sữa đặc biệt",
                        "price" => "27000",
                        "image" => "Trà sữa đặc biệt.jpg",
                        "promotion_price" => "27000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "18"
                    ],
                    [
                        "id" => "172",
                        "name" => "Trà sữa Bông",
                        "price" => "35000",
                        "image" => "Trà sữa Bông.jpg",
                        "promotion_price" => "35000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "18"
                    ],
                    [
                        "id" => "173",
                        "name" => "Trà Sữa Kem Trứng Trân Châu Dừa Non",
                        "price" => "32000",
                        "image" => "Trà Sữa Kem Trứng Trân Châu Dừa Non.jpg",
                        "promotion_price" => "32000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "18"
                    ],
                    [
                        "id" => "174",
                        "name" => "Socola bạc hà đá xay",
                        "price" => "32000",
                        "image" => "Socola bạc hà đá xay.jpg",
                        "promotion_price" => "32000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "18"
                    ],
                    [
                        "id" => "175",
                        "name" => "Sữa Tuyết Dâu Tây",
                        "price" => "32000",
                        "image" => "Sữa Tuyết Dâu Tây.jpg",
                        "promotion_price" => "32000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "18"
                    ],
                    [
                        "id" => "176",
                        "name" => "Cookie bạc hà đá xay",
                        "price" => "32000",
                        "image" => "Cookie bạc hà đá xay.jpg",
                        "promotion_price" => "32000",
                        "isActive" => true,
                        "category_id" => "9",
                        "shop_id" => "18"
                    ],
                    [
                        "id" => "177",
                        "name" => "Bánh sữa tươi",
                        "price" => "7000",
                        "image" => "Bánh sữa tươi.jpg",
                        "promotion_price" => "7000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "18"
                    ],
                    [
                        "id" => "178",
                        "name" => "Khoai tây lắc phomai",
                        "price" => "17000",
                        "image" => "Khoai tây lắc phomai.jpg",
                        "promotion_price" => "17000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "18"
                    ],
                    [
                        "id" => "179",
                        "name" => "Nem chua rán",
                        "price" => "25000",
                        "image" => "Nem chua rán (nhỏ).jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "18"
                    ],
                    [
                        "id" => "180",
                        "name" => "Ốc nhồi basa",
                        "price" => "14000",
                        "image" => "Ốc nhồi basa.jpg",
                        "promotion_price" => "14000",
                        "isActive" => true,
                        "category_id" => "1",
                        "shop_id" => "18"
                    ],
                    [
                        "id" => "181",
                        "name" => "Trà Alisan trái cây nhiệt đới",
                        "price" => "59000",
                        "image" => "Trà Alisan trái cây nhiệt đới.jpg",
                        "promotion_price" => "59000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "19"
                    ],
                    [
                        "id" => "182",
                        "name" => "Trà lựu đỏ bốn mùa",
                        "price" => "59000",
                        "image" => "Trà lựu đỏ bốn mùa.jpg",
                        "promotion_price" => "59000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "19"
                    ],
                    [
                        "id" => "183",
                        "name" => "Trà cam vàng quế vương",
                        "price" => "52000",
                        "image" => "Trà cam vàng quế vương.jpg",
                        "promotion_price" => "52000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "19"
                    ],
                    [
                        "id" => "184",
                        "name" => "Hồng trà chanh",
                        "price" => "59000",
                        "image" => "Hồng trà chanh.jpg",
                        "promotion_price" => "59000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "19"
                    ],
                    [
                        "id" => "185",
                        "name" => "Hồng trà dứa",
                        "price" => "57000",
                        "image" => "Hồng trà dứa.jpg",
                        "promotion_price" => "57000",
                        "isActive" => true,
                        "category_id" => "25",
                        "shop_id" => "19"
                    ],
                    [
                        "id" => "186",
                        "name" => "Trà sữa kem cheese",
                        "price" => "45000",
                        "image" => "Trà sữa kem cheese.jpg",
                        "promotion_price" => "45000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "19"
                    ],
                    [
                        "id" => "187",
                        "name" => "Sữa tươi trân châu đường đen",
                        "price" => "49000",
                        "image" => "Sữa tươi trân châu đường đen.jpg",
                        "promotion_price" => "49000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "19"
                    ],
                    [
                        "id" => "188",
                        "name" => "Trà sữa cake cream",
                        "price" => "45000",
                        "image" => "Trà sữa cake cream.jpg",
                        "promotion_price" => "45000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "19"
                    ],
                    [
                        "id" => "189",
                        "name" => "Trà sữa đậu đỏ pudding trứng",
                        "price" => "49000",
                        "image" => "Trà sữa đậu đỏ pudding trứng.jpg",
                        "promotion_price" => "49000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "19"
                    ],
                    [
                        "id" => "190",
                        "name" => "Trà sữa matcha",
                        "price" => "42000",
                        "image" => "Trà sữa matcha.jpg",
                        "promotion_price" => "42000",
                        "isActive" => true,
                        "category_id" => "26",
                        "shop_id" => "19"
                    ],
                    [
                        "id" => "191",
                        "name" => "Sashimi cá hồi",
                        "price" => "129000",
                        "image" => "Sashimi cá hồi.jpg",
                        "promotion_price" => "116000",
                        "isActive" => true,
                        "category_id" => "20",
                        "shop_id" => "20"
                    ],
                    [
                        "id" => "192",
                        "name" => "Sashimi cá trích",
                        "price" => "129000",
                        "image" => "Sashimi cá trích.jpg",
                        "promotion_price" => "116000",
                        "isActive" => true,
                        "category_id" => "20",
                        "shop_id" => "20"
                    ],
                    [
                        "id" => "193",
                        "name" => "Sashimi bạch tuộc",
                        "price" => "129000",
                        "image" => "Sashimi bạch tuộc.jpg",
                        "promotion_price" => "116000",
                        "isActive" => true,
                        "category_id" => "20",
                        "shop_id" => "20"
                    ],
                    [
                        "id" => "194",
                        "name" => "SUSHI TRỨNG TÔM",
                        "price" => "38000",
                        "image" => "SUSHI TRỨNG TÔM.jpg",
                        "promotion_price" => "34000",
                        "isActive" => true,
                        "category_id" => "23",
                        "shop_id" => "20"
                    ],
                    [
                        "id" => "195",
                        "name" => "SUSHI TÔM",
                        "price" => "28000",
                        "image" => "SUSHI TÔM.jpg",
                        "promotion_price" => "25000",
                        "isActive" => true,
                        "category_id" => "23",
                        "shop_id" => "20"
                    ],
                    [
                        "id" => "196",
                        "name" => "SUSHI CÁ TRÍCH VÀNG",
                        "price" => "38000",
                        "image" => "SUSHI CÁ TRÍCH VÀNG.jpg",
                        "promotion_price" => "34000",
                        "isActive" => true,
                        "category_id" => "23",
                        "shop_id" => "20"
                    ],
                    [
                        "id" => "197",
                        "name" => "SALAD CÁ HỒI VÀ BƠ",
                        "price" => "119000",
                        "image" => "SALAD CÁ HỒI VÀ BƠ.jpg",
                        "promotion_price" => "107000",
                        "isActive" => true,
                        "category_id" => "14",
                        "shop_id" => "20"
                    ],
                    [
                        "id" => "198",
                        "name" => "BÁNH BẠCH TUỘC",
                        "price" => "58000",
                        "image" => "BÁNH BẠCH TUỘC.jpg",
                        "promotion_price" => "52000",
                        "isActive" => true,
                        "category_id" => "14",
                        "shop_id" => "20"
                    ],
                    [
                        "id" => "199",
                        "name" => "SALAD THANH CUA",
                        "price" => "85000",
                        "image" => "SALAD THANH CUA.jpg",
                        "promotion_price" => "76000",
                        "isActive" => true,
                        "category_id" => "14",
                        "shop_id" => "20"
                    ],
                    [
                        "id" => "200",
                        "name" => "Rong Biển Muối",
                        "price" => "59000",
                        "image" => "Rong Biển Muối.jpg",
                        "promotion_price" => "53000",
                        "isActive" => true,
                        "category_id" => "14",
                        "shop_id" => "20"
                    ]
                    
        ]);
    }
}
