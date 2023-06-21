<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Ăn vặt',
                'description' => 'Thức ăn nhẹ hay thức ăn vặt (tiếng Anh: snack) là các loại thức ăn phục vụ cho việc ăn giữa các bữa ăn và thường dưới hình thức thực phẩm đóng gói và chế biến sẵn cũng như mặt hàng làm từ nguyên liệu tươi được đóng gói ăn liền.',
            ],
            [
                'id' => 2,
                'name' => 'Bánh',
                'description' => 'Bánh một dạng thức ăn ngọt làm từ bột mì, đường và các thành phần khác, thường được nướng. Trong các hình thức lâu đời nhất của họ, bánh là sửa đổi từ bánh mì, nhưng hiện bao gồm một loạt các chế phẩm có thể đơn giản hoặc phức tạp, và chia sẻ các tính năng với các món tráng miệng khác như bánh pastry, bánh trứng đường, bánh trứng, bánh bông lan và bánh nướng',
            ],
            [
                'id' => 3,
                'name' => 'Bún đậu',
                'description' => 'Bún đậu mắm tôm là món ăn đơn giản, dân dã trong ẩm thực miền Bắc Việt Nam. Đây là món thường được dùng như bữa ăn nhẹ, ăn chơi. Thành phần chính gồm có bún tươi, đậu hũ chiên vàng, chả cốm, nem chua,dồi chó, mắm tôm pha chanh, ớt và ăn kèm với các loại rau thơm như tía tô, kinh giới, rau húng, xà lách, cà pháo...',
            ],
            [
                'id' => 4,
                'name' => 'Cà phê',
                'description' => 'Cà phê (bắt nguồn từ tiếng Pháp: café [/kafe/]) là một loại thức uống được ủ từ hạt cà phê rang, lấy từ quả của cây cà phê. Các giống cây cà phê được bắt nguồn từ vùng nhiệt đới châu Phi và các vùng Madagascar, Comoros, Mauritius và Réunion trên các khu vực thuộc đường xích đạo.',
            ],
            [
                'id' => 5,
                'name' => 'Chân gà',
                'description' => 'Chân gà là một món ăn được chế biến từ nguyên liệu là những chiếc chân gà bằng các phương pháp như nướng hay luộc. Chân gà nướng được tẩm ướp trước khi nướng và ăn kèm với các loại rau sống. Đây là một món đặc sản trong ẩm thực Việt Nam và là một trong những thức ăn đường phố mang tính bình dân khoái khẩu',
            ],
            [
                'id' => 6,
                'name' => 'CHOCOLATE',
                'description' => 'Sô-cô-la được làm từ những hạt của cây cacao được sấy khô và nghiền nhỏ. Nguồn gốc của cây cacao là từ México, những hạt cây cacao có mùi vị hơi đắng. Kết quả của quá trình đó được biết đến với tên gọi là "sô-cô-la".',
            ],
            [
                'id' => 7,
                'name' => 'Cơm',
                'description' => 'Cơm tấm, hay Cơm tấm Sài Gòn là một món ăn Việt Nam có nguyên liệu chủ yếu từ gạo tấm. Dù có nhiều tên gọi ở các vùng miền khác nhau, tuy nhiên nguyên liệu và cách thức chế biến của món ăn trên gần như là giống nhau',
            ],
            [
                'id' => 8,
                'name' => 'Comboo',
                'description' => 'So với các món lẻ, khi ghép vào combo, giá các món ăn thường được giảm từ 10-15%. Thậm chí, trong những ngày khuyến mãi, giá thành còn có thể thấp hơn nữa. Khi đó, khách hàng có thể tiết kiệm được một phần chi tiêu của mình.',
            ],
            [
                'id' => 9,
                'name' => 'Đá xay',
                'description' => 'Đồ uống đá xay (ice blended) hay còn gọi là thức uống đá xay có bắt nguồn từ nước Ý. Nguyên liệu của để làm đồ uống đá xay khá đa dạng và dễ biến tấu với cafe, trà xanh, ca cao... xay nhuyễn với đá rồi phủ một lớp kem tươi đánh bông đẹp mắt bên trên. Và món Chocolate Ice Blended được ưa chuộng hơn cả.',
            ],
            [
                'id' =>10,
                'name' => 'Đồ chiên',
                'description' => 'Địa chỉ khu ăn vặt cá viên chiên gắn liền với nhiều bạn học sinh – sinh viên với một thiên đường các món ngon mà menu còn đa dạng nữa. Không đâu khác chính là Ăn Vặt Sơn Ca, đến đây bạn có thể thưởng thức từ đồ chiên, phá lấu đến mì xào, các loại chè, đá me nữa nè.',
            ],
            [
                'id' => 11,
                'name' => 'Gà giòn',
                'description' => 'Gà giòn hay còn gọi là gà rán, là một món ăn xuất xứ từ miền Nam Hoa Kỳ; nguyên liệu chính là những miếng thịt gà đã được lăn bột rồi chiên trên chảo, chiên ngập dầu, chiên áp suất hoặc chiên không dầu. Lớp bột chiên xù sẽ giúp cho miếng gà có một lớp vỏ ngoài giòn rụm, còn phần thịt bên trong vẫn mềm và mọng nước. Nguyên liệu được sử dụng phổ biến nhất là gà thịt.',
            ],
            [
                'id' => 12,
                'name' => 'Gà sốt cay',
                'description' => 'Gà rán sốt cay kiểu Hàn Quốc đang là một món ăn được các bạn trẻ yêu thích hiện nay và đang làm mưa làm gió ở các cửa hàng ẩm thực Hàn Quốc. Linh hồn của món ăn này chính là lớp sốt phủ thơm ngon với vị cay đặc trưng của ớt Gochujang, chua chua ngọt ngọt, thơm ngon, màu sắc hấp dẫn đúng điệu.',
            ],
            [
                'id' => 13,
                'name' => 'Kem',
                'description' => 'Món này có thể được làm từ sữa hoặc kem và có hương vị với chất làm ngọt, đường hoặc chất tạo hương thay thế hoặc các phụ gia thực phẩm khác, chẳng hạn như ca cao hoặc vani. Chất tạo màu thường được thêm vào, ngoài các chất ổn định.',
            ],
            [
                'id' => 14,
                'name' => 'Khai vị',
                'description' => "Món khai vị (tiếng Pháp phân biệt hors d'œuvre và entrée, tiếng Anh: appetizer hoặc starter) là một món ăn nhỏ dùng trước bữa ăn. Một số món khai vị là lạnh, một số món khác lại nóng. Các món ăn khai vị có thể được phục vụ tại bàn ăn tối như một phần của bữa ăn, hoặc chúng có thể được phục vụ trước khi ngồi.",
            ],
            [
                'id' => 15,
                'name' => 'Mì-Miến',
                'description' => 'Miến hay bún tàu là loại thực phẩm dạng sợi khô, được chế biến từ bột khoai lang, bột dong, bột đậu xanh hoặc bột sắn, bán thành từng bó khoảng 1 lạng. Sợi miến làm từ bột dong thường ngon hơn: dai, trong, không "trương" lên trong lúc ăn.',
            ],
            [
                'id' => 16,
                'name' => 'Mì Ý',
                'description' => 'Mì Ý hay pasta là tên chung cho các loại mì hay nui được làm từ bột mì trộn với nước thành dạng bột nhào, sau đó được cán mỏng và định hình thành các dạng khác nhau. Pasta sau đó thường được nấu chín bằng cách luộc chín, bỏ lò hoặc chiên. Mì Ý được chia thành 2 loại chính là khô và tươi.',
            ],
            [
                'id' => 17,
                'name' => 'Milo dầm',
                'description' => 'Milo dầm thơm ngon, đậm vị với xốt cacao đắng nhẹ, sữa béo ngậy, trân châu đường đen giòn dai, thạch cacao dẻo thơm, tất cả hòa quyện hoàn hảo tạo nên một “bữa tiệc” hương vị trong khoang miệng của bạn.',
            ],
            [
                'id' => 18,
                'name' => 'Nước',
                'description' => 'Nước rất quan trọng đối với tất cả các dạng sống đã biết, mặc dù nó không cung cấp calo hoặc chất dinh dưỡng hữu cơ.',
            ],
            [
                'id' => 19,
                'name' => 'Nước ép',
                'description' => 'Nước rất quan trọng đối với tất cả các dạng sống đã biết, mặc dù nó không cung cấp calo hoặc chất dinh dưỡng hữu cơ.
                Nước ép là một dung dịch tự nhiên chứa các mô từ trái cây hoặc các loại rau. Nước ép được tạo ra một cách máy móc bằng cách ép hoặc vắt hoặc giầm trái cây hoặc rau tươi không dùng nhiệt độ hay dung môi. Ví dụ, nước cam là một dung dịch được chiết ra từ trái cam.',
            ],
            [
                'id' => 20,
                'name' => 'Sashimi',
                'description' => 'Sashimi là món thịt sống được chế biến từ các loại hải sản tươi ngon. Trong văn hoá ẩm thực Nhật Bản, người Nhật cho rằng Sashimi là món ăn tượng trưng cho sự tinh tế, may mắn và hạnh phúc, nên Sashimi thường là món khai vị trong các bữa ăn và cũng có thể được dùng làm món ăn chính ăn kèm với cơm và một chén súp Miso. Đặc biệt các thành phần trong món “gỏi sống” này rất tốt cho sức khoẻ của mọi người.',
            ],
            [
                'id' => 21,
                'name' => 'Soda',
                'description' => 'Soda là một loại đồ uống có gas, còn được gọi với tên là soft drink. Thành phần chính của nước soda gồm có nước khoáng chứa nhiều nguyên tố vi lượng như magie, canxi, kali; hương liệu và đường. Nước soda ra đời bắt nguồn từ nước Mỹ vào thế kỉ 17,18.',
            ],
            [
                'id' => 22,
                'name' => 'Sữa chua',
                'description' => 'Sữa chua còn có tên gọi khác là yaourt, là sản phẩm bơ sữa được tạo ra bởi vi khuẩn lên men của sữa. Sữa chua có màu trắng, dẻo; có vị sánh, chua do quá trình lên men lactic và vị ngọt từ sữa',
            ],
            [
                'id' => 23,
                'name' => 'Shushi',
                'description' => 'Sushi là sự kết hợp của chữ “su” và “meshi”. Trong tiếng Việt, chúng có nghĩa là giấm và gạo. Sushi ý chỉ món cơm ngọt nhẹ, nêm với giấm, còn gọi là shari, và được trang trí với neta, tức hải sản, trứng hoặc rau củ, đã được nấu chín hay để sống.',
            ],
            [
                'id' => 24,
                'name' => 'Topping',
                'description' => 'Vừa mang tính chất làm cho món ăn thêm phần hấp dẫn mà còn mang lại những hương vị thơm ngon, một số loại topping còn được xem là “linh hồn” của món ăn, thức uống. Bởi đơn giản nếu thiếu đi topping sẽ không còn đúng hương vị yêu thích của nhiều người, topping ngày càng được biết đến nhiều hơn nhờ vào sự phát triển nhanh chóng của trà sữa.',
            ],
            [
                'id' => 25,
                'name' => 'Trà',
                'description' => 'Tất cả các loại trà trên thế giới đều được làm từ một loại cây, gọi là cây trà (Cemellia Senensis), mọc trên các cao nguyên vùng nhiệt đới. Mặc dù là loài thân gỗ nhưng khi canh tác người ta thường trồng trà thành luống và liên tục đốn cắt để cây chỉ thấp ngang bụng, dễ thu hoạch búp và cho năng suất cao.',
            ],
            [
                'id' => 26,
                'name' => 'Trà sữa',
                'description' => 'Trà sữa là 1 loại thức uống kết hợp từ 2 nguyên liệu chính là trà và sữa. Mỗi loại trà sữa có sự khác nhau giữa nguồn gốc, nguyên liệu, tỷ lệ, cách pha, cũng như có bổ sung các thành phần phụ khác.',
            ],
            [
                'id' => 27,
                'name' => 'Trà trái cây',
                'description' => 'Trà trái cây là gì? Trà trái cây - với nguyên liệu chính là những là trà khô, kết hợp cùng với những loại trái cây nhiệt đới khác nhau (đào, xoài, dứa, vải, chanh…) để tạo thành loại trà có hương và vị trái cây thanh mát, dễ uống và giải nhiệt tốt.',
            ],

        ]);
    }
}
