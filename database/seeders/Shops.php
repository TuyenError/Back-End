<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Shops extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert([
            [
                'id' => 1,
                'name' => 'Cơm Gà Nam Chợ Mới - Hoàng Diệu',
                'location' => '589 Hoàng Diệu, P. Hòa Thuận Đông, Quận Hải Châu, Đà Nẵng',
                'description' => "Quán ăn, Giao cơm văn phòng-Món Việt- Sinh viên, Gia đình \n Chưa mở cửa  06:00 - 21:30 \n 15.000đ - 45.000đ",
                'tag' => "#MÓN ĐANG GIẢM\n#CƠM\n#NƯỚC UỐNG\n#MỲ - MIẾN\n#COMBO HỘP NHÔM CAO CẤP\n#FLASH SALE\n#DEAL HỨNG KHỞI - GIẢM 25K\n#DEAL RỘN RÀNG - GIẢM 40K",
                'user_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Trà Sữa Money - Nguyễn Du',
                'location' => '19 Nguyễn Du, P. Thạch Thang, Quận Hải Châu, Đà Nẵng',
                'description' => "Café/Dessert-Món Việt- Sinh viên, Cặp đôi \n 09:00 - 23:00 \n 15.000đ - 25.000đ",
                'tag' => "SIÊU HOT \nMÓN MỚI \nMÓN LẠNH \nĐỒ UỐNG NÓNG \nTRÀ ĐÓNG CHAI(500ML) \nCAFE \nTRÀ SỮA \nTRÀ SỮA THÁI XANH \nTRÀ KEM SỮA \nTRÀ TRÁI CÂY \nSỮA TƯƠI \nSỮA CHUA \n SỮA LẮC 3 TẦNG \nSODA (KHÔNG THẠCH) \nSODA (THẠCH - HẠT NHỎ) \nCACAO \nTHỨC UỐNG KHÁC \nĐỒ ĂN VẶT",
                'user_id' => 2,
            ],
            [
                'id' => 3,
                'name' => 'XIU Milk - Lê Đình Lý',
                'location' => '173 Lê Đình Lý, P. Hòa Thuận Nam, Quận Hải Châu, Đà Nẵng',
                'description' => "Café/Dessert-Món Việt- Cặp đôi, Gia đình \n 08:30 - 22:30 \n 20,000 - 50,000",
                'tag' => "KHUYẾN MÃI THÁNG 6 \n MÈO KM (ĐƠN >10LY IB PAGE ĐỂ NHẬN GIẢM GIÁ)\n SỮA TƯƠI TCĐĐ (ĐƠN >10LY IB PAGE ĐỂ NHẬN GIẢM GIÁ)\n SỮA TƯƠI TCĐĐ KEM (ĐƠN >10LY IB PAGE ĐỂ NHẬN GIẢM GIÁ)\n TRÀ SỮA (ĐƠN >10LY IB PAGE ĐỂ NHẬN GIẢM GIÁ)\n MILO DẦM (ĐƠN >10LY IB PAGE ĐỂ NHẬN GIẢM GIÁ)\n TRÀ TRCAY (ĐƠN >10LY IB PAGE ĐỂ NHẬN GIẢM GIÁ)\n CF (ĐƠN >10LY IB PAGE ĐỂ NHẬN GIẢM GIÁ)\n SỮA CHUA (ĐƠN >10LY IB PAGE ĐỂ NHẬN GIẢM GIÁ)\n ĂN VẶT (IB PAGE ĐỂ NHẬN GIẢM GIÁ",
                'user_id' => 3,
            ],
            [
                'id' => 4,
                'name' => 'Tiệm Bánh Bò Sữa - Bánh Mì Phô Mai Bơ Tỏi - Hải Phòng',
                'location' => '322/3 Hải Phòng, P. Chính Gián, Quận Thanh Khê, Đà Nẵng',
                'description' => "Shop Online-Món Hàn- Sinh viên, Gia đình \n 08:00 - 20:00 \n 7.000đ - 21.000đ",
                'tag' => "GIẢM 40K - ĐÃÃ QUÁ PEPSI ƠI! \n BOGO \n SIGNATURE \n COMBO BÁNH VÀ TRÀ \n TRÀ SỮA \n TRÀ GIẢI NHIỆT \n CÀ PHÊ RANG XAY (SẠCH)",
                'user_id' => 4,
            ],
            [
                'id' => 5,
                'name' => 'Bún Đậu Mắm Tôm - Bếp Tiên',
                'location' => '278 Tô Hiến Thành, Quận Sơn Trà, Đà Nẵng',
                'description' => "Quán ăn, Giao cơm văn phòng-Món Việt- Sinh viên, Cặp đôi, Nhóm hội, Giới văn phòng, Khách du lịch \n 10:00 - 22:00  \n 25.000đ - 40.000đ",
                'tag' => "MÓN ĐANG GIẢM \n DEAL HỨNG KHỞI - GIẢM 25K \n DEAL RỘN RÀNG - GIẢM 40K \n BÚN ĐẬU \n COMBO COCACOLA \n SIÊU HOT \n NÊN THỬ \n COMBO \n MÓN ĂN VẶT \n MÓN ĂN THÊM \n NƯỚC GIẢI KHÁT \n SỮA CHUA \n SỮA - CACAO - CHOCOLATE",
                'user_id' => 5,
            ],
            [
                'id' => 6,
                'name' => 'Gà rán và Mì Ý - Jollibee - Ngô Quyền',
                'location' => 'Tầng 4, Tầng 4, Vincom Center, 910A Ngô Quyền, P. An Hải Bắc, Quận Sơn Trà, Đà Nẵng',
                'description' => "Nhà hàng-Philippines- Cặp đôi, Gia đình, Nhóm hội \n 09:00 - 21:00  \n 25.000đ - 150.000đ",
                'tag' => "ƯU ĐÃI ĐỘC QUYỀN SHOPEEFOOD \n CẶP ĐÔI ĂN Ý \n PHẦN ĂN GIA ĐÌNH \n GÀ GIÒN \n GÀ SỐT CAY \n MÌ Ý \n BƠ GƠ \n MÓN ĂN PHỤ \n NƯỚC UỐNG",
                'user_id' => 6,
            ],
            [
                'id' => 7,
                'name' => 'Cafe & Trà Sữa BandB - Hà Huy Tập',
                'location' => '160 Hà Huy Tập, P. Hòa Khê,  Quận Thanh Khê, Đà Nẵng',
                'description' => "Café/Dessert-Món Việt- Cặp đôi, Gia đình, Nhóm hội- Chi nhánh \n 06:00 - 23:00  \n 10.000đ - 29.000đ",
                'tag' => "TOPPING \n MÓN MỚI \n MILK TEA (BÁN TỪ 6H - 23H) \n TEA (BÁN TỪ 6H - 23H) \n OTHER (BÁN TỪ 6H - 23H) \n CÀ PHÊ TRUYỀN THỐNG \n CÀ PHÊ TRUYỀN THỐNG (BÁN TỪ 6H - 22H) \n CÀ PHÊ RANG XAY (BÁN TỪ 6H - 22H) \n NƯỚC ÉP (BÁN TỪ 6H - 22H) \n SINH TỐ (BÁN TỪ 6H - 22H) \n NƯỚC ĐÓNG CHAI / SOFT DRINK \n ĐÁ XAY KEM \n ĐÁ XAY KEM (BÁN TỪ 6H - 22H) \n SODA Ý (BÁN TỪ 6H - 22H) \n GIẢI KHÁT (BÁN TỪ 6H - 23H) \n ĂN VẶT ( BÁN TỪ 15H15- 22H) \n ĂN VẶT ( PHỤC VỤ 06H - 22H)",
                'user_id' => 7,
            ],
            [
                'id' => 8,
                'name' => 'Trà Sữa Ông Thọ - Trịnh Công Sơn',
                'location' => '96 Trịnh Công Sơn, P. Hòa CƯờng Nam,  Quận Hải Châu, Đà Nẵng',
                'description' => "Ăn vặt/vỉa hè-Món Việt- Sinh viên, Cặp đôi, Nhóm hội- Chi nhánh \n 09:30 - 23:00  \n 10.000đ - 25.000đ",
                'tag' => "TRÀ TRÁI  CÂY TƯƠI  SIÊU HOT 25K \n TOPPING \n TRÀ SỮA KHÔNG THẠCH \n TRÀ SỮA \n LATTE - SỮA TƯƠI \n TRÀ TRÁI CÂY \n TRÀ KEM CHEESE \n ĐÁ XAY \n YOGURT \n CAFE - NƯỚC ÉP \n TRÀ SỮA CHAI & TOPPING \n ĂN VẶT (BÁN TỪ 8H30-10H30)",
                'user_id' => 8,
            ],
            [
                'id' => 9,
                'name' => 'My Love - Kem & Trà Sữa',
                'location' => '75 Bùi Dương Lịch, P. Nại Hiên Đông,  Quận Sơn Trà, Đà Nẵng',
                'description' => "Café/Dessert-Món Việt- Sinh viên, Nhóm hội \n 10:30 - 23:00  \n 8.000đ - 20.000đ",
                'tag' => "KEM ĐẶC BIỆT NHÀ LÀM \n GIẢI KHÁT \n ĂN VẶT",
                'user_id' => 9,
            ],
            [
                'id' => 10,
                'name' => 'Mai Coffee & Beer',
                'location' => 'Lô 1 09 Phạm Văn Đồng, P. An Hải Bắc,  Quận Sơn Trà, Đà Nẵng',
                'description' => "Nhà hàng-Món Việt- Cặp đôi, Gia đình, Nhóm hội \n 08:00 - 22:30  \n 30.000đ - 90.000đ",
                'tag' => "CÀ PHÊ / COFFEE \n NƯỚC ÉP / JUICE \n TRÀ / TEA \n SỮA CHUA / YOGURT \n SỮA LẮC / MILK SHAKE",
                'user_id' => 10,
            ],
            [
                'id' => 11,
                'name' => 'TRÀ SỮA GONG CHA KHAI TRƯƠNG',
                'location' => '1 Nguyễn Văn Linh, P. Bình Hiên,  Quận Hải Châu, Đà Nẵng',
                'description' => "Café/Dessert-Đài Loan- Cặp đôi, Gia đình, Giới văn phòng- \n 09:00 - 19:00  \n 20.000đ - 50.000đ",
                'tag' => "MÓN ĐANG GIẢM \n DEAL ĐỘC QUYỀN SHOPEEFOOD \n ĐÀO HOÀNG KIM SERIES \n COFFEE SERIES \n LATTE \n NEW MINT CHOCOLATE \n NEW COFFEE SERIES \n GONG CHA HAPPY DAYS \n CRÈME BRULEE SERIES - GONG CHA BIRTHDAY DRINK \n WHITE XMAS SERIES \n D. THỨC UỐNG VỊ TRÁI CÂY \n CRÈME BRULEE SERIES \n TRÀ TRÁI CÂY \n A. TRÀ KEM SỮA GONG CHA \n MÓN MỚI \n OKINAWA SERIES \n B. TRÀ NGUYÊN CHẤT \n C. TRÀ SỮA \n E. THỨC UỐNG ĐÁ XAY",
                'user_id' => 11,
            ],
            [
                'id' => 12,
                'name' => 'Phúc Long Nguyễn Văn Linh Đà Nẵng',
                'location' => '59 - 61 Nguyễn Văn Linh, P. Bình Hiên,  Quận Hải Châu, Đà Nẵng',
                'description' => "Café/Dessert-Món Việt- Cặp đôi, Gia đình, Giới văn phòng \n 08:00 - 21:30  \n 35.000đ - 65.000đ",
                'tag' => "MÓN MỚI CHÀO HÈ \n TRÀ NGUYÊN BẢN \n TRÀ SỮA NGUYÊN BẢN \n CÀ PHÊ \n ĐÁ XAY \n BÁNH PHÚC LONG \n TEA & COFFEE",
                'user_id' => 12,
            ],
            [
                'id' => 13,
                'name' => 'KOI Thé - Nguyễn Văn Linh',
                'location' => '87 Nguyễn Văn Linh, P. Nam Dương,  Quận Hải Châu, Đà Nẵng',
                'description' => " \n Café/Dessert-Món Việt- Cặp đôi, Gia đình, Nhóm hội \n Chưa mở cửa  09:00 - 22:00  \n 30.000đ - 70.000đ",
                'tag' => "DARK LAVA (S) \n DARK LAVA (M) \n DARK LAVA (L) \n NEW DRINKS - LYCHEE SERIES (S) \n NEW DRINKS- LYCHEE SERIES (M) \n NEW DRINKS - LYCHEE SERIES (L) \n OOLONG TEA SERIES (S) \n OOLONG TEA SERIES (M) \n OOLONG TEA SERIES (L) \n SIGNATURE MACCHIATO (S) \n SIGNATURE MACCHIATO (M) \n SIGNATURE MACCHIATO (L) \n MILK TEA (S) \n MILK TEA (M) \n MILK TEA (L) \n FLAVORED TEA (S) \n FLAVORED TEA (M) \n FLAVORED TEA (L) \n TEA LATTE / FRESH MILK (S)",
                'user_id' => 13,
            ],
            [
                'id' => 14,
                'name' => 'Highlands Coffee - Điện Biên Phủ',
                'location' => '239 Điện Biên Phủ, P. Hoà Khê,  Quận Thanh Khê, Đà Nẵng',
                'description' => " \n Café/Dessert-Món Việt- Cặp đôi, Gia đình, Nhóm hội, Giới văn phòng \n 07:00 - 21:00  \n 9.000đ - 65.000đ",
                'tag' => "MÓN ĐANG GIẢM \n COMBO \n TRÀ \nE \n PHINDI \n BÁNH MÌ QUE \n CÀ PHÊ \n BÁNH NGỌT \n CÀ PHÊ ESPRESSO \n THỨC UỐNG KHÁC",
                'user_id' => 14,
            ],
            [
                'id' => 15,
                'name' => 'Trà Sữa Xingfu Cha - Ngô Gia Tự',
                'location' => '107 Ngô Gia Tự, P. Hải Châu 1,  Quận Hải Châu, Đà Nẵng',
                'description' => "Quán ăn - Chi nhánh \n 08:00 - 22:30  \n 10.000đ - 60.000đ",
                'tag' => "MÓN ĐANG GIẢM \n TRÀ MẬN GIẢI NHIỆT \n DEAL \n TRÀ THANH NHIỆT \n MÓN MỚI \n TRÀ SỮA DEAL TO \n DEAL KHAI TRƯƠNG \n COMBO SIÊU HOT \n FLASHSALE \n TRÀ SỮA FULL TOPPING \n SỮA TƯƠI SƯƠNG SÁO \n TRÂN CHÂU ĐƯỜNG ĐEN \n TRÂN CHÂU HOÀNG KIM \n TRÀ SỮA \n TRÀ SỮA KEM CHEESE/ KEM TRỨNG \n SỮA CHUA LẮC \n ĐÁ XAY \n COFFEE \n CHAI BEARBRICK",
                'user_id' => 15,
            ],
            [
                'id' => 16,
                'name' => 'Tiệm Nhà Nhung - Chân Gà Sốt Thái - Hoàng Dư Khương',
                'location' => '106 Hoàng Dư Khương, P. Khuê Trung,  Quận Cẩm Lệ, Đà Nẵng',
                'description' => "Shop Online-Món Việt- Sinh viên, Cặp đôi, Gia đình, Nhóm hội 09:00 - 22:00  \n 8.000đ - 150.000đ",
                'tag' => "MENU NGÀY TẾT \n TRÀ TRÁI CÂY TƯƠI 100% \n CHÂN GÀ SỐT THÁI BEST SELLER \n CÁ VIÊN CHIÊN NƯỚC MẮM ( MUST TRY ) \n GÀ Ủ MUỐI THẢO MỘC \n CHÂN GÀ Ủ MUỐI ( MÓN MỚI ) \n ĐỒ UỐNG ĐẶC BIỆT \n ĂN VẶT \n CHẤM MÚT \n MÓN CHIÊN \n TRÀ SỮA ĐÓNG CHAI \n SHOPEEFOOD",
                'user_id' => 16,
            ],
            [
                'id' => 17,
                'name' => 'Milano Coffee - Mẹ Thứ',
                'location' => '318 Mẹ Thứ,  Quận Cẩm Lệ, Đà Nẵng',
                'description' => "Café/Dessert-Món Việt- Sinh viên, Nhóm hội, Giới văn phòng \n 06:00 - 22:00  \n 12.000đ - 29.000đ",
                'tag' => "CÀ PHÊ KHÁC PHA PHIN \n CÀ PHÊ PHA PHIN \n CÀ PHÊ PHA MÁY \n TRÀ SỮA \n TRÀ GIẢI NHIỆT \n NƯỚC ÉP \n ĐÁ XAY \n YOGURT \n SODA \n CÀ PHÊ & TRÀ SỮA CHAI MANG VỀ \n NƯỚC ĐÓNG CHAI \n SHOPEEFOOD",
                'user_id' => 17,
            ],
            [
                'id' => 18,
                'name' => 'Bông Food & Drink - Điện Biên Phủ',
                'location' => '559 Điện Biên Phủ,  Quận Thanh Khê, Đà Nẵng',
                'description' => " Café/Dessert-Món Việt- Cặp đôi, Gia đình, Nhóm hội \n 08:00 - 23:00  \n 12.000đ - 20.000đ",
                'tag' => "TOPPING \n TRÀ SỮA \n SỮA TƯƠI \n TRÀ TRÁI CÂY \n MACCHIATO \n ĐÁ XAY \n CÁC MÓN KHÁC \n SODA \n CÀ PHÊ \n ĂN VẶT \n MILO - CACAO \n MÓN NÓNG \n SODA",
                'user_id' => 18,
            ],
            [
                'id' => 19,
                'name' => 'Trà Sữa Royaltea - Phạm Văn Đồng',
                'location' => '168 Phạm Văn Đồng, P. An Hải Bắc,  Quận Sơn Trà, Đà Nẵng',
                'description' => "Café/Dessert-Món Trung Hoa- Cặp đôi, Gia đình, Nhóm hội \n 12:00 - 23:00  \n 30.000đ - 45.000đ",
                'tag' => "TRÀ SỮA \n TRÀ TRÁI CÂY \n TRÀ TRÁI CÂY THEO MÙA \n TRÀ NGUYÊN CHẤT ROYAL \n DEAL SỐC \n MUA 1 TẶNG 1 \n CAKE CREAM \n THỨC UỐNG SÁNG TẠO \n CÀ PHÊ \n THỨC UỐNG NÓNG",
                'user_id' => 19,
            ],
            [
                'id' => 20,
                'name' => 'Kimbap Đà Nẵng - Shop Online',
                'location' => '27/11 Nguyễn Trường Tộ, P. Bình Hiên,  Quận Hải Châu, Đà Nẵng',
                'description' => "Shop Online-Món Việt, Món Hàn- Gia đình, Nhóm hội, Giới văn phòng \n 09:00 - 22:00  \n 18.000đ - 25.000đ",
                'tag' => "DEAL HOT \n KIMBAP \n COMBO \n SASHIMI \n SUSHI \n KHAI VỊ \n CƠM CUỘN \n NƯỚC",
                'user_id' => 20,
            ],
            
        ]);
    }
}
