<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'product_name' => 'Bánh tráng me',
                'price' => 8000,
                'product_image' => 'https://i.ibb.co/MhMQ0YP/b-nh-tr-ng-me.jpg',
                'description' => 'Nguyên liệu: bánh tráng tây ninh, hành, muối, nước me, đậu phộng...
Hương vị: mặn, ngọn, cay và có hương thơm của mỡ hành, chua của me
Hạn sử dụng: 1 tuần 
Bánh tráng me là sản phẩm được biến tấu từ bánh tráng muối, từ đây người Tây Ninh sẽ tạo ra những món mới từ nhiều nguyên liệu trộn lại nhưng muối là nguyên liệu chính. Bánh tráng me gồm bánh tráng phơi sương ăn kèm với các nguyên liệu và nước muối me tạo ra vị chua và cay khó tả.
Bánh tráng me là món Bánh Tráng Tây Ninh được các bạn trẻ ưa chuộng bởi sự thơm ngon và tính tiện dụng. Đây cũng là sản phẩm nằm trong top bán chạy nhất của shop. Sản phẩm thường được khách du lịch ưa chuộng và mua về làm quà cho người thân, bạn bè.',
                'id_category' => 1,
                "created_at"=> "2019-08-28 03:12:33",
                "updated_at"=> "2019-08-28 03:12:33"
            ],
            [
                'product_name' => 'Bánh tráng hủ',
                'price' => 8000,
                'product_image' => 'https://i.ibb.co/HhvDwNT/b-nh-tr-ng-h.jpg',
                'description' => 'Nguyên liệu: bánh tráng tây ninh, hành, muối,..
Hương vị: mặn, ngọn, cay và có hương thơm của mỡ hành
Hạn sử dụng: 1 tuần
Với công thức đơn giản nhưng siêu nghiền - nghiện - chắc chắn ăn 1 lần bạn sẽ muốn ăn nữa thôi. Bánh tráng gói nhỏ ăn lai rai có hành phô phi, sate, mối tôm và gia vị nêm nếm vừa vặn. Các bạn mở ra ăn ngay hoặc mix với xoài, rau răm, quất, chanh tuỳ khẩu vị nhé
Đảm bảo ăn 1 lần là nghiện luôn á. Vị cay cay thơm thơm ngọt ngọt của bánh tráng sẽ luôn làm ta nhớ đến bánh tráng đặc sản Tây Ninh.',
                'id_category' => 1,
                "created_at"=> "2019-08-28 03:12:34",
                "updated_at"=> "2019-08-28 03:12:34"
            ],
            [
                'product_name' => 'Xoài lắc',
                'price' => 12000,
                'product_image' => 'https://i.ibb.co/9YgbZ6k/xoailac.jpg',
                'description' => 'Nguyên liệu: xoài, muối, ớt, tôm khô,..
Hương vị: chua, cay, mặn, ngọt.
Hạn sử dụng: 1 ngày
Xoài Lắc là món ăn vặt gây sốt sình sịch có vị chua, cay, mặn, ngọt rất kích thích. Cách làm xoài lắc đơn giản, dùng loại xoài keo chín hường, trộn cùng muối tôm, đường, nước mắm, ớt bột theo một tỉ lệ ngon bất bại.
Cùng nhanh tay đặt cho mình ly xoài lắc thơm ngon khó cưỡng này ngay nhé!',
                'id_category' => 1,
                "created_at"=> "2019-08-28 03:12:35",
                "updated_at"=> "2019-08-28 03:12:35"
            ],
            [
                'product_name' => 'Rau câu dừa',
                'price' => 5000,
                'product_image' => 'https://i.ibb.co/JBsvf52/th-nh-rau-c-u.jpg',
                'description' => 'Nguyên liệu: nước dừa, nước cốt dừa, bột rau câu
Hương vị: ngọt thanh, thơm mát
Hạn sửa dụng: 2 ngày (4 ngày khi để lạnh)
Sản xuất: CTXH
Rau câu dừa béo là món tráng miệng và ăn vặt mát lạnh, giúp giải nhiệt mùa hè cực hấp dẫn. Cách làm rau câu dừa đơn giản với nguyên liệu rẻ và dễ tìm, rất thích hợp cho những bạn mới tập tành đổ rau câu tại nhà. Hãy tưởng tượng cắn một miếng thạch rau câu dừa tự làm, vị dẻo thơm và béo ngậy lan tỏa trong miệng, chắc chắn khiến bạn không thể nào ngừng.
Rau câu có 2 lớp: rau câu nước dừa và rau câu nước cốt dừa. Hương vị ngọt ngào, thơm mát hấp dẫn, còn cung cấp chất khoáng và vitamin thiết yếu cho cơ thể. Thiết kế hủ nhỏ xin, tiện lợi để thưởng thức.',
                'id_category' => 1,
                "created_at"=> "2019-08-28 03:12:36",
                "updated_at"=> "2019-08-28 03:12:36"
            ],
            [
                'product_name' => 'Cơm cháy',
                'price' => 8000,
                'product_image' => 'https://i.ibb.co/d5vT6rZ/C-m-ch-y.jpg',
                'description' => 'Nguồn nguyên liệu: Cơm, dầu, muối, ớt, mắm, đường, hành.
Hương vị: Giòn và ngon, vị cay cay của ớt, vị mằn mặn của nước mắm, vị ngọt của 1 ít đường và gia vị.
Hạn sử dụng: 3 tháng
Cơm cháy mỡ hành thơm ngon, có vị cay của ớt, vị mặn của nước mắm hòa quyện với vị thơm của hành là món ăn vặt rất dễ nghiện. Những tín đồ ăn vặt thì không nên bỏ qua món ăn siêu hấp dẫn này.',
                'id_category' => 1,
                "created_at"=> "2019-08-28 03:12:37",
                "updated_at"=> "2019-08-28 03:12:37"
            ],
            [
                'product_name' => 'Soda',
                'price' => 12000,
                'product_image' => 'https://i.ibb.co/B4LYcMK/soda.jpg',
                'description' => 'Nguyên liệu: soda, 7up, siro các loại
Hương vị: Ngọt mát, thơm hương trái cây
Loại siro: dâu, đào, mâm xôi, blue
Thời tiết Sòi Gòn nóng bức ư? Hay bạn đang cần một thứ giải tỏa cơn khát và lấp đầy năng lượng sống trong con người bạn. Soda CTXH là lựa chọn thật tốt của bạn rồi đấy. Với vị ngọt mát của soda và 7up, cùng hương thơm và vị trái cây của siro như dâu, mâm xôi, blue,... sẽ giúp đánh tan cơn nhiệt của mùa hè, lấy lại sức sống và năng lượng sau giờ học và làm việc căng thằng. Làm gì mà không đặt ngay một ly cho mình nào, hãy để CTXH giúp bạn luôn tươi mới và tràn đày năng lượng nhé.',
                'id_category' => 2,
                "created_at"=> "2019-08-28 03:12:38",
                "updated_at"=> "2019-08-28 03:12:38"
            ],
            [
                'product_name' => 'Trà đào',
                'price' => 15000,
                'product_image' => 'https://i.ibb.co/b7LgD3N/tr-o.jpg',
                'description' => 'Nguyên liệu: Đào, trà đào
Hương vị: Ngọt mát, thơm hương Đào
Topping: Đào trái
Thời tiết Sòi Gòn nóng bức ư? Hay bạn đang cần một thứ giải tỏa cơn khát và lấp đầy năng lượng sống trong con người bạn. Trà Đào là lựa chọn thật tốt của bạn rồi đấy. Với vị ngọt mát của Trà, cùng hương thơm của Đào và vị giòn giòn của đào trái,... sẽ giúp đánh tan cơn nhiệt của mùa hè, lấy lại sức sống và năng lượng sau giờ học và làm việc căng thằng. Làm gì mà không đặt ngay một ly cho mình nào, hãy để CTXH giúp bạn luôn tươi mới và tràn đày năng lượng nhé.',
                'id_category' => 2,
                "created_at"=> "2019-08-28 03:12:39",
                "updated_at"=> "2019-08-28 03:12:39"
            ],
            [
                'product_name' => 'Trà chanh',
                'price' => 12000,
                'product_image' => 'https://i.ibb.co/SXhvsns/901809-507900352600460-1869096785-o.jpg',
                'description' => 'Nguyên liệu: Chanh, trà chanh
Hương vị: Ngọt mát, thơm hương chanh
Thời tiết Sòi Gòn nóng bức ư? Hay bạn đang cần một thứ giải tỏa cơn khát và lấp đầy năng lượng sống trong con người bạn. Trà chanh với vị ngọt mát của Trà, cùng hương thơm của chanh và vị chua chua của lát chanh thái mỏng,... sẽ giúp đánh tan cơn nhiệt của mùa hè, lấy lại sức sống và năng lượng sau giờ học và làm việc căng thằng. Làm gì mà không đặt ngay một ly cho mình nào, hãy để CTXH giúp bạn luôn tươi mới và tràn đày năng lượng nhé.',
                'id_category' => 2,
                "created_at"=> "2019-08-28 03:12:40",
                "updated_at"=> "2019-08-28 03:12:40"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 1 màu đỏ',
                'price' => 35000,
                'product_image' => 'https://i.ibb.co/jywZcRw/mqdefault-1.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau.
Chất liệu: dây dù paracord có khả năng chịu lực cao, chắc.
Kích thước: theo kích thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Rất thời trang và phong cách, thích hợp với mọi dạng tay, nhất là người thích đi phượt, mạo hiểm. Vòng tay được làm thủ công bằng tay nên rất tinh tế, tỉ mỉ nhưng vẫn còn phong cách bụi bặm, cực chất nhé!',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:41",
                "updated_at"=> "2019-08-28 03:12:41"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 1 màu trắng đục',
                'price' => 35000,
                'product_image' => 'https://i.ibb.co/FHsvhVq/mqdefault.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau.
Chất liệu: dây dù paracord có khả năng chịu lực cao, chắc.
Kích thước: theo kích thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Rất thời trang và phong cách, thích hợp với mọi dạng tay, nhất là người thích đi phượt, mạo hiểm. Vòng tay được làm thủ công bằng tay nên rất tinh tế, tỉ mỉ nhưng vẫn còn phong cách bụi bặm, cực chất nhé!',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:41",
                "updated_at"=> "2019-08-28 03:12:41"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 1 màu xanh lá',
                'price' => 35000,
                'product_image' => 'https://i.ibb.co/FHsvhVq/mqdefault.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau.
Chất liệu: dây dù paracord có khả năng chịu lực cao, chắc.
Kích thước: theo kích thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Rất thời trang và phong cách, thích hợp với mọi dạng tay, nhất là người thích đi phượt, mạo hiểm. Vòng tay được làm thủ công bằng tay nên rất tinh tế, tỉ mỉ nhưng vẫn còn phong cách bụi bặm, cực chất nhé!',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:41",
                "updated_at"=> "2019-08-28 03:12:41"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 1 màu xám',
                'price' => 35000,
                'product_image' => 'https://i.ibb.co/Vjj1nC7/v-ng-tay-paracord-ki-u-1.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau.
Chất liệu: dây dù paracord có khả năng chịu lực cao, chắc.
Kích thước: theo kích thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Rất thời trang và phong cách, thích hợp với mọi dạng tay, nhất là người thích đi phượt, mạo hiểm. Vòng tay được làm thủ công bằng tay nên rất tinh tế, tỉ mỉ nhưng vẫn còn phong cách bụi bặm, cực chất nhé!',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:41",
                "updated_at"=> "2019-08-28 03:12:41"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 2 màu đỏ đen',
                'price' => 45000,
                'product_image' => 'https://i.ibb.co/VjZXxGW/images.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau
Chất liệu: dây dù paracord có khả năng chịu lực cao, bền.
Kích thước:theo kich thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Nếu bạn là một người muốn sỡ hữu phong cách "lạ" và " nổi bật" thì chiếc vòng tay đầy chất nghệ và bụi bặm này sẽ là lựa chọn đúng đắn nhất. Với một gu ăn mặc đẹp đẽ, chiếc vòng sẽ là phụ kiện tôn vinh phong cách cực chất của chủ nhân sở hữu nó. Vòng tay được làm thủ công bằng tay, rất tinh tế và tỉ mỉ, đẹp không thể nào chê nhé!',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:42",
                "updated_at"=> "2019-08-28 03:12:42"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 2 màu đen trắng',
                'price' => 45000,
                'product_image' => 'https://i.ibb.co/2kMvPrG/9ccbabee422fc85e0804970194f7bb54.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau
Chất liệu: dây dù paracord có khả năng chịu lực cao, bền.
Kích thước:theo kich thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Nếu bạn là một người muốn sỡ hữu phong cách "lạ" và " nổi bật" thì chiếc vòng tay đầy chất nghệ và bụi bặm này sẽ là lựa chọn đúng đắn nhất. Với một gu ăn mặc đẹp đẽ, chiếc vòng sẽ là phụ kiện tôn vinh phong cách cực chất của chủ nhân sở hữu nó. Vòng tay được làm thủ công bằng tay, rất tinh tế và tỉ mỉ, đẹp không thể nào chê nhé!',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:42",
                "updated_at"=> "2019-08-28 03:12:42"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 3 màu nâu',
                'price' => 35000,
                'product_image' => 'https://i.ibb.co/M6BZZ1W/v-ng-tay-paracord-ki-u-5.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau
Chất liệu: dây dù paracord có khả năng chịu lực cao, bền.
Kích thước:theo kich thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Vòng tay paracord đang rất hot trên thị trường hiện nay với mức giá rẻ hạn nhưng đầy phong cách và nhiều mẫu mã khác nhau. Nhanh tay sở hữu một chiếc vòng tay paracord được làm hoàn toàn bằng tay một cách tỉ mỉ và tinh tế, bạn sẽ trở thành con người thời thượng và phong cách. Và nếu là một dân phượt chính gốc, thì chiếc vòng tay này sẽ giup bạn rất nhiều trong những chuyến đi đấy.',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:43",
                "updated_at"=> "2019-08-28 03:12:43"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 3 màu trắng đen',
                'price' => 35000,
                'product_image' => 'https://i.ibb.co/ZBf5w6f/26992232-1577529675660654-6100414065674082210-n.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau
Chất liệu: dây dù paracord có khả năng chịu lực cao, bền.
Kích thước:theo kich thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Vòng tay paracord đang rất hot trên thị trường hiện nay với mức giá rẻ hạn nhưng đầy phong cách và nhiều mẫu mã khác nhau. Nhanh tay sở hữu một chiếc vòng tay paracord được làm hoàn toàn bằng tay một cách tỉ mỉ và tinh tế, bạn sẽ trở thành con người thời thượng và phong cách. Và nếu là một dân phượt chính gốc, thì chiếc vòng tay này sẽ giup bạn rất nhiều trong những chuyến đi đấy.',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:43",
                "updated_at"=> "2019-08-28 03:12:43"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 3 màu đen',
                'price' => 35000,
                'product_image' => 'https://i.ibb.co/hLqwLvy/1eb4d9e09a27963468a86f89d4c1eb6a-zimken.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau
Chất liệu: dây dù paracord có khả năng chịu lực cao, bền.
Kích thước:theo kich thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Vòng tay paracord đang rất hot trên thị trường hiện nay với mức giá rẻ hạn nhưng đầy phong cách và nhiều mẫu mã khác nhau. Nhanh tay sở hữu một chiếc vòng tay paracord được làm hoàn toàn bằng tay một cách tỉ mỉ và tinh tế, bạn sẽ trở thành con người thời thượng và phong cách. Và nếu là một dân phượt chính gốc, thì chiếc vòng tay này sẽ giup bạn rất nhiều trong những chuyến đi đấy.',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:43",
                "updated_at"=> "2019-08-28 03:12:43"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 4 màu đen',
                'price' => 35000,
                'product_image' => 'https://i.ibb.co/wcFK0vp/v-ng-tay-paracord-ki-u-4.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau.
Chất liệu: dây dù paracord có khả năng chịu lực cao, chắc.
Kích thước: theo kích thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Vòng paracord thích hợp cho cả bạn nam lẫn bạn nữ, tùy vào nhu cầu và sở thích của từng bạn chúng ta sẽ có sự lựa chọn màu sắc, kiểu dáng vòng khác nhau. Vòng paracord thể hiện cá tính mạnh mẽ cho các bạn nam đồng thời cũng tôn thêm nét duyên dáng cho bạn nữ. Chính vì thế cơn sốt vòng tay paracord đang được các bạn trẻ lan truyền nhanh chóng, mạnh mẽ trên thị trường. Không chỉ đơn thuần là phụ kiện khi kết hợp với trang phục, vòng tay paracord cặp đôi luôn được các bạn trao gửi cho nhau, thay lời yêu thương, ngọt ngào mà cả hai dành cho nhau. Sự gắn kết chắc chắn của chiếc vòng sẽ giúp tình yêu của đôi bạn trẻ thêm bền chặt. Đây sẽ là một món quà ý nghĩa dành tặng cho bạn trai ( bạn gái) của mình trong những dịp đặc biệt.',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:44",
                "updated_at"=> "2019-08-28 03:12:44"
            ],
            [
                'product_name' => 'Vòng tay paracord kiểu 4 phối màu đen xanh trắng',
                'price' => 35000,
                'product_image' => 'https://i.ibb.co/vdRpyxS/a784d9e7e3938b817f4fdd92914c8f7d.jpg',
                'description' => 'Vòng tay paracord chât lừ với nhiều lựa chọn màu sắc khác nhau.
Chất liệu: dây dù paracord có khả năng chịu lực cao, chắc.
Kích thước: theo kích thước cổ tay, tháo ra sẽ được sợi dây dài khoảng 1,5-2m
Màu: nhiều màu
Khóa: nhiều màu
Công dụng: làm vòng tay, khi mở ra dây dù rất chắc có thể thắt nút, cột lều trại,...
Vòng paracord thích hợp cho cả bạn nam lẫn bạn nữ, tùy vào nhu cầu và sở thích của từng bạn chúng ta sẽ có sự lựa chọn màu sắc, kiểu dáng vòng khác nhau. Vòng paracord thể hiện cá tính mạnh mẽ cho các bạn nam đồng thời cũng tôn thêm nét duyên dáng cho bạn nữ. Chính vì thế cơn sốt vòng tay paracord đang được các bạn trẻ lan truyền nhanh chóng, mạnh mẽ trên thị trường. Không chỉ đơn thuần là phụ kiện khi kết hợp với trang phục, vòng tay paracord cặp đôi luôn được các bạn trao gửi cho nhau, thay lời yêu thương, ngọt ngào mà cả hai dành cho nhau. Sự gắn kết chắc chắn của chiếc vòng sẽ giúp tình yêu của đôi bạn trẻ thêm bền chặt. Đây sẽ là một món quà ý nghĩa dành tặng cho bạn trai ( bạn gái) của mình trong những dịp đặc biệt.',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:44",
                "updated_at"=> "2019-08-28 03:12:44"
            ],
            [
                'product_name' => 'Vòng tay mặt đá',
                'price' => 25000,
                'product_image' => 'https://i.ibb.co/P9yN9bg/v-ng-tay-m-t.jpg',
                'description' => 'Chất liệu: dây cói
Màu: nâu nhạt
Kích thước: freesize, có thể điều chỉnh theo ý muốn
Phụ kiện: mặt đá có nhiều hình: vô diện, mèo, hoa anh đào, cúc họa mi,...
Vòng tay mặt đá với những hình ảnh dễ thương của hoa anh đào, cúc họa mi, vô diện… Tạo phong cách đơn giản nhưng rất đáng yêu cho các bạn gái. Vòng làm thủ công bằng tay đem đến sự tinh tế, tỉ mỉ. Ngoài ra, vòng tay còn dễ phối với những chiếc đàm trắng, kem,.. giúp các cô gái có những buổi đi chơi, du lịch tự tin hơn với những slot hình đẹp và chất.',
                'id_category' => 3,
                "created_at"=> "2019-08-28 03:12:45",
                "updated_at"=> "2019-08-28 03:12:45"
            ],
            [
                'product_name' => 'Móc khóa nỉ nhỏ hình chim cánh cụt',
                'price' => 10000,
                'product_image' => 'https://i.ibb.co/RjZpRNj/c-t.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ nhỏ hình hình thỏ con',
                'price' => 10000,
                'product_image' => 'https://i.ibb.co/M8rBthY/th.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ nhỏ hình gà con',
                'price' => 10000,
                'product_image' => 'https://i.ibb.co/HggCCkf/g.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ nhỏ hình heo xinh',
                'price' => 10000,
                'product_image' => 'https://i.ibb.co/F0vLc5M/l-n.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ nhỏ hình totoro',
                'price' => 10000,
                'product_image' => 'https://i.ibb.co/FhQ2pXv/totoro.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ nhỏ hình mèo dễ thương',
                'price' => 10000,
                'product_image' => 'https://i.ibb.co/3S8hwV1/m-o.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ nhỏ dễ thương',
                'price' => 10000,
                'product_image' => 'https://i.ibb.co/r6rzMKw/m-c-kh-a-n-1.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ to dễ thương',
                'price' => 15000,
                'product_image' => 'https://i.ibb.co/gTzxJyP/m-c-kh-a-n-l-n.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ to hình cáo',
                'price' => 15000,
                'product_image' => 'https://i.ibb.co/k8f5cGd/caos.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ đôi "LOVE"',
                'price' => 15000,
                'product_image' => 'https://i.ibb.co/sQRRP3x/love.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ đôi totoro',
                'price' => 15000,
                'product_image' => 'https://i.ibb.co/HdL7vL3/totorolove.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ to hình ếch',
                'price' => 15000,
                'product_image' => 'https://i.ibb.co/fFjZVBr/10953393-952868388103652-1518671234936171779-n.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nỉ to hình cỏ 4 lá',
                'price' => 15000,
                'product_image' => 'https://i.ibb.co/bQLfTbG/1116113-607879482602546-1403000270-o.jpg',
                'description' => 'Chất liệu: vải nỉ
Mẫu: đa dạng, nhiều hình thù dễ thương để bạn lựa chọn
Màu: nhiều màu:
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Chắc hẳn các bạn không còn lạ với các sản phẩm móc khóa vải dạ nỉ ngộ ngĩnh đáng yêu nữa nhỉ. Móc khóa vải nỉ sẽ là món quà ý nghĩa và đáng yêu cho người bạn yêu thương vào những dịp sinh nhật hay những ngày lễ đó. Với đa dạng mẫu mã và màu sắc, bạn chắc sẽ phải đau đầu để chọn cho mình một chiếc móc khóa thật vừa ý, nhưng đùng lo, cho dù là móc khóa nào cũng sẽ vô cùng xinh đẹp và đang yêu nhé. Móc khóa làm bằng tay rất tỉ mỉ và tính tế. Móc khóa nỉ rất ấm áp, mới lạ và vô cùng hot để làm quà tặng phải không nào.',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:46",
                "updated_at"=> "2019-08-28 03:12:46"
            ],
            [
                'product_name' => 'Móc khóa nút cườm',
                'price' => 15000,
                'product_image' => 'https://i.ibb.co/LxJtMxQ/m-c-kh-a-n-t-c-m2.jpg',
                'description' => 'Chất liệu: hạt cườm
Mẫu: hình búp bê
Màu: vàng đen
Công dụng: làm móc khóa, quà tặng
Kích thước: 5x6cm
Móc khóa gồm những hạt cườm handmade với thiết kế mới lạ kết hợp với những hạt gỗ nhỏ tạo thành những con búp bê siêu đáng yêu sẽ là một món quà ý nghĩa để trao tặng cho gia đình , bạn thân. Móc khóa xinh xin, chất lượng đảm bảo, móc vào túi xách, chìa khóa, hay điện thoại đều đẹp hết nè. Giá bèo nhèo hợp túi tiền sinh viên luôn. Hàng đẹp y chang hình nhé!',
                'id_category' => 4,
                "created_at"=> "2019-08-28 03:12:47",
                "updated_at"=> "2019-08-28 03:12:47"
            ],
            [
                'product_name' => 'Bookmark',
                'price' => 8000,
                'product_image' => 'https://i.ibb.co/RcSKvgG/bookmark.jpg',
                'description' => 'các mẫu: nhiều kiểu dáng
Chất liệu: giấy cứng
Công dụng: kẹp sách, đánh dấu trang sách
Bạn đang muốn sở hữu một chiếc bookmark theo ý tưởng riêng của mình, không đụng hàng với ai? Bạn có quá nhiều sách nhưng lại không đủ kẹp sách cho tất cả? Bạn muốn quyển sách của mình sinh động và hấp dẫn hơn? Bookmark handmade sẽ giải quyết hết tất cả những vấn đề này. Bạn chỉ cần gửi tấm hình muốn in bookmart bạn sẽ sở hửu ngay cho mình một chiếc kẹp sách đáng yêu, có một không hai với giá rẻ hạt luôn nhé. Hay làm mới những quyển sách bạn thích bằng những chiếc bookmark đáng yêu thôi nào',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:48",
                "updated_at"=> "2019-08-28 03:12:48"
            ],
            [
                'product_name' => 'Chì khắc',
                'price' => 15000,
                'product_image' => 'https://i.ibb.co/NVzjCtd/ch-kh-c.jpg',
                'description' => 'Mẫu khắc: theo chữ yêu cầu (không quá 20 kí tự)
Chất liệu: bút chì
Công dụng: Trang trí, quà tặng
Kích thước: dài từ 17-18cm
Lựa chọn một món quà độc đáo tặng người yêu, bạn bè, đồng nghiệp… trong những dịp đặc biệt không chỉ thể hiện sự tinh tế trong cách chọn quà mà còn nói lên tình cảm đặc biệt của bạn dành cho người ấy. Với mong muốn giới thiệu đến bạn thêm một gợi ý để bạn có thể mang đến cho những người mình thương yêu một món quà tinh thần đầy bất ngờ, chỉ với một số tiền nhỏ nhắn CTXH store sẽ mang về cho bạn một bút chì gỗ khắc 3D đầy độc đáo.
Thời gian qua, bút chì khắc là một trong những xu hướng quà tặng được nhiều bạn trẻ chọn lựa. Còn gì thú vị hơn được tặng một cây bút chì khắc có tên mình hay hình thú cưng mình yêu thích trên thân bút, phải vậy không? Vậy thì giờ đây, click MUA ngay bạn sẽ có cơ hội tặng cho người mình thương yêu một bút chì khắc đầy độc đáo như thế.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:49",
                "updated_at"=> "2019-08-28 03:12:49"
            ],
            [
                'product_name' => 'Love box màu đỏ đen',
                'price' => 80000,
                'product_image' => 'https://i.ibb.co/KwLJ4jJ/lovebox2.jpg',
                'description' => 'Màu: đen + đỏ hoặc xanh lá + trắng
Kích thước: 10x10, khi mở ra 30x30
Mục đích: album quà tặng
Chất liệu: giấy thủ công
Số ảnh: 15-25 ảnh
Hộp hoàn thành bao gồm: 8 thẻ +1 hộp nhỏ ở giữa.
 Love Box hay Exploding Box được biết đến như một cuốn album thu nhỏ. Nếu như trước đây, album ảnh được làm thành từng trang và đóng thành cuốn dày cộm thì giờ đây, tất cả chi tiết của nó đều được biến tấu nhỏ gọn vừa y trong một chiếc hộp. Bên ngoài thì có vẻ rất bình thường như bao hộp quà khác, nhưng... khi mở ra thì đảm bảo người nhận sẽ cực bất ngờ và thích thú. Đây sẽ là món quà ý nghĩa, độc lạ giúp bạn lưu giữ những kỷ niệm với bạn bè, người thân hoặc người ấy nữa nè.
Love Box là mặt hàng quà tặng đang HOT hiện nay vì không những nó có thể lưu giữ hình ảnh, note vào đó những dòng chữ thân thương mà còn đặc biệt ở chỗ là mang đến sự bất ngờ sau khi mở hộp.
Một món quà thiệt dễ thương và ngọt ngào sẽ làm tim ai đó tan chảy, hãy để Love Box kết nối các bạn lại gần nhau thêm.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:50",
                "updated_at"=> "2019-08-28 03:12:50"
            ],
            [
                'product_name' => 'Love box màu xanh trắng',
                'price' => 80000,
                'product_image' => 'https://i.ibb.co/yB9wV9q/love-box.jpg',
                'description' => 'Màu: đen + đỏ hoặc xanh lá + trắng
Kích thước: 10x10, khi mở ra 30x30
Mục đích: album quà tặng
Chất liệu: giấy thủ công
Số ảnh: 15-25 ảnh
Hộp hoàn thành bao gồm: 8 thẻ +1 hộp nhỏ ở giữa.
 Love Box hay Exploding Box được biết đến như một cuốn album thu nhỏ. Nếu như trước đây, album ảnh được làm thành từng trang và đóng thành cuốn dày cộm thì giờ đây, tất cả chi tiết của nó đều được biến tấu nhỏ gọn vừa y trong một chiếc hộp. Bên ngoài thì có vẻ rất bình thường như bao hộp quà khác, nhưng... khi mở ra thì đảm bảo người nhận sẽ cực bất ngờ và thích thú. Đây sẽ là món quà ý nghĩa, độc lạ giúp bạn lưu giữ những kỷ niệm với bạn bè, người thân hoặc người ấy nữa nè.
Love Box là mặt hàng quà tặng đang HOT hiện nay vì không những nó có thể lưu giữ hình ảnh, note vào đó những dòng chữ thân thương mà còn đặc biệt ở chỗ là mang đến sự bất ngờ sau khi mở hộp.
Một món quà thiệt dễ thương và ngọt ngào sẽ làm tim ai đó tan chảy, hãy để Love Box kết nối các bạn lại gần nhau thêm.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:50",
                "updated_at"=> "2019-08-28 03:12:50"
            ],
            [
                'product_name' => 'Scrapbook',
                'price' => 90000,
                'product_image' => 'https://i.ibb.co/0VCXt9T/scrapbook3.jpg',
                'description' => 'Màu: đen+đỏ, Đen +hồng hoặc Đen+vàng kim
Kích thước: 16x15
Mục đích: album quà tặng
Chất liệu: giấy thủ công
Hộp hoàn thành bao gồm: 8 thẻ +1 sổ nhỏ để ghi chú.
Số ảnh: 15-25 ảnh
Scrapbook hay còn được xem là album ảnh, được thiết kế handmade để tạo sự mới lạ và độc đáo trong việc lưu giữ những hình ảnh theo một cách đặc biệt hơn. Việc có một cuốn scrapbook vô cùng đặc biệt và được thiết kế ấn tượng sẽ giúp bạn lưu lại những ký ức và những hình ảnh vô cùng quý giá mà sẽ không bao giờ phải lo sợ là sẽ làm mất đi hay trôi vào quên lãng.
Sản phẩm thiết kế nhỏ gọn, là một món quà bất ngờ và tràn đầy ý nghĩa cho bạn bè hoặc người thân vào những dịp lễ, sinh nhật.
                ',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:51",
                "updated_at"=> "2019-08-28 03:12:51"
            ],
            [
                'product_name' => 'Hoa giấy 1 bông',
                'price' => 13000,
                'product_image' => 'https://i.ibb.co/PwrNpgL/hoa-gi-y.jpg',
                'description' => 'Màu: đỏ, xanh dương, hồng
Chất liệu: giấy nhún
Hoa giấy (hoa làm bằng giấy) đang dần là xu hướng quà tặng mới trong các dịp lễ tết, là món quà thể hiện lòng biết ơn của con cái với cha mẹ, của học sinh sinh viên với người thầy người cô hay còn là thứ gửi gắm lời yêu thương của các bạn trẻ. 
Sở dĩ hoa giấy được ưa chuộng bởi sự tươi tắn sinh động của các mẫu hoa và có thể giữ lại mà không lo tàn úa theo thời gian. Việc này rất quan trọng vì nó tương tự như tâm ý của bạn sẽ không phai mờ đi vậy. Chính vì thế mà các mẫu hoa giấy giá rẻ tự làm bởi các bạn sinh viên ngày càng được chào đón hơn. 
Nếu bạn cần một món quà thực sự ý nghĩa, rẻ và đẹp chobanj bè, người thân, thì hoa giấy cũng là một sản phẩm đáng được lựa chọn đấy.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:52",
                "updated_at"=> "2019-08-28 03:12:52"
            ],
            [
                'product_name' => 'Hoa giấy bó 4 bông',
                'price' => 40000,
                'product_image' => 'https://i.ibb.co/DMY4G9f/74231754-2614901988566942-5779836111266250752-n.jpg',
                'description' => 'Màu: đỏ, xanh dương, hồng
Chất liệu: giấy nhún
Hoa giấy (hoa làm bằng giấy) đang dần là xu hướng quà tặng mới trong các dịp lễ tết, là món quà thể hiện lòng biết ơn của con cái với cha mẹ, của học sinh sinh viên với người thầy người cô hay còn là thứ gửi gắm lời yêu thương của các bạn trẻ. 
Sở dĩ hoa giấy được ưa chuộng bởi sự tươi tắn sinh động của các mẫu hoa và có thể giữ lại mà không lo tàn úa theo thời gian. Việc này rất quan trọng vì nó tương tự như tâm ý của bạn sẽ không phai mờ đi vậy. Chính vì thế mà các mẫu hoa giấy giá rẻ tự làm bởi các bạn sinh viên ngày càng được chào đón hơn. 
Nếu bạn cần một món quà thực sự ý nghĩa, rẻ và đẹp chobanj bè, người thân, thì hoa giấy cũng là một sản phẩm đáng được lựa chọn đấy.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:52",
                "updated_at"=> "2019-08-28 03:12:52"
            ],
            [
                'product_name' => 'Hoa giấy bó 7 bông',
                'price' => 80000,
                'product_image' => 'https://i.ibb.co/vJLkWgd/74376546-2616895231700951-2047504815168159744-n.jpg',
                'description' => 'Màu: đỏ, xanh dương, hồng
Chất liệu: giấy nhún
Hoa giấy (hoa làm bằng giấy) đang dần là xu hướng quà tặng mới trong các dịp lễ tết, là món quà thể hiện lòng biết ơn của con cái với cha mẹ, của học sinh sinh viên với người thầy người cô hay còn là thứ gửi gắm lời yêu thương của các bạn trẻ. 
Sở dĩ hoa giấy được ưa chuộng bởi sự tươi tắn sinh động của các mẫu hoa và có thể giữ lại mà không lo tàn úa theo thời gian. Việc này rất quan trọng vì nó tương tự như tâm ý của bạn sẽ không phai mờ đi vậy. Chính vì thế mà các mẫu hoa giấy giá rẻ tự làm bởi các bạn sinh viên ngày càng được chào đón hơn. 
Nếu bạn cần một món quà thực sự ý nghĩa, rẻ và đẹp chobanj bè, người thân, thì hoa giấy cũng là một sản phẩm đáng được lựa chọn đấy.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:52",
                "updated_at"=> "2019-08-28 03:12:52"
            ],
            [
                'product_name' => 'Hoa giấy bó 12 bông',
                'price' => 120000,
                'product_image' => 'https://i.ibb.co/WxQXFKD/74645274-2616896771700797-1109884377522765824-n.jpg',
                'description' => 'Màu: đỏ, xanh dương, hồng
Chất liệu: giấy nhún
Hoa giấy (hoa làm bằng giấy) đang dần là xu hướng quà tặng mới trong các dịp lễ tết, là món quà thể hiện lòng biết ơn của con cái với cha mẹ, của học sinh sinh viên với người thầy người cô hay còn là thứ gửi gắm lời yêu thương của các bạn trẻ. 
Sở dĩ hoa giấy được ưa chuộng bởi sự tươi tắn sinh động của các mẫu hoa và có thể giữ lại mà không lo tàn úa theo thời gian. Việc này rất quan trọng vì nó tương tự như tâm ý của bạn sẽ không phai mờ đi vậy. Chính vì thế mà các mẫu hoa giấy giá rẻ tự làm bởi các bạn sinh viên ngày càng được chào đón hơn. 
Nếu bạn cần một món quà thực sự ý nghĩa, rẻ và đẹp chobanj bè, người thân, thì hoa giấy cũng là một sản phẩm đáng được lựa chọn đấy.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:52",
                "updated_at"=> "2019-08-28 03:12:52"
            ],
            [
                'product_name' => 'Mô hình 3D Minion',
                'price' => 40000,
                'product_image' => 'https://i.ibb.co/hVmSXJH/14956371-1207418852648603-7827871701360350897-n.jpg',
                'description' => 'Các mẫu: minion, totoro, người giấy
Chất liệu: giấy cứng
Thể loại: cắt và ghép giấy 3D
Mô hình 3D được in trên giấy cứng, cắt ra và ghép lại thành những nhật vật hoạt hình vô cùng quen thuộc và cđược yêu thích như minion, totoro, người giấy,... Mô hình 3D ít phổ biến vì đòi hỏi sự tinh tế và tỉ mỉ khi làm bằng tay. Nhưng đổi lại sự tỉ mỉ ấy, ta có một món quá vô cùng độc lạ và cũng không kém phần dễ thương, xinh xắn. Bạn có thể đặt nó ở bàn học hay bàn làm việc để trang trí, hay làm quà tặng vào dịp sinh nhật hay những ngày lễ.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:53",
                "updated_at"=> "2019-08-28 03:12:53"
            ],
            [
                'product_name' => 'Mô hình 3D Totoro',
                'price' => 40000,
                'product_image' => 'https://i.ibb.co/H2Tc6hs/14962670-1207418892648599-4995774417590645653-n.jpg',
                'description' => 'Các mẫu: minion, totoro, người giấy
Chất liệu: giấy cứng
Thể loại: cắt và ghép giấy 3D
Mô hình 3D được in trên giấy cứng, cắt ra và ghép lại thành những nhật vật hoạt hình vô cùng quen thuộc và cđược yêu thích như minion, totoro, người giấy,... Mô hình 3D ít phổ biến vì đòi hỏi sự tinh tế và tỉ mỉ khi làm bằng tay. Nhưng đổi lại sự tỉ mỉ ấy, ta có một món quá vô cùng độc lạ và cũng không kém phần dễ thương, xinh xắn. Bạn có thể đặt nó ở bàn học hay bàn làm việc để trang trí, hay làm quà tặng vào dịp sinh nhật hay những ngày lễ.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:53",
                "updated_at"=> "2019-08-28 03:12:53"
            ],
            [
                'product_name' => 'Mô hình 3D người giấy',
                'price' => 40000,
                'product_image' => 'https://i.ibb.co/QJqtCDj/14956459-1207418902648598-8869019146022661729-n.jpg',
                'description' => 'Các mẫu: minion, totoro, người giấy
Chất liệu: giấy cứng
Thể loại: cắt và ghép giấy 3D
Mô hình 3D được in trên giấy cứng, cắt ra và ghép lại thành những nhật vật hoạt hình vô cùng quen thuộc và cđược yêu thích như minion, totoro, người giấy,... Mô hình 3D ít phổ biến vì đòi hỏi sự tinh tế và tỉ mỉ khi làm bằng tay. Nhưng đổi lại sự tỉ mỉ ấy, ta có một món quá vô cùng độc lạ và cũng không kém phần dễ thương, xinh xắn. Bạn có thể đặt nó ở bàn học hay bàn làm việc để trang trí, hay làm quà tặng vào dịp sinh nhật hay những ngày lễ.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:53",
                "updated_at"=> "2019-08-28 03:12:53"
            ],
            [
                'product_name' => 'Mô hình 3D hoa',
                'price' => 40000,
                'product_image' => 'https://i.ibb.co/7bNmqQZ/gi-y-3-D-2.jpg',
                'description' => 'Các mẫu: minion, totoro, người giấy
Chất liệu: giấy cứng
Thể loại: cắt và ghép giấy 3D
Mô hình 3D được in trên giấy cứng, cắt ra và ghép lại thành những nhật vật hoạt hình vô cùng quen thuộc và cđược yêu thích như minion, totoro, người giấy,... Mô hình 3D ít phổ biến vì đòi hỏi sự tinh tế và tỉ mỉ khi làm bằng tay. Nhưng đổi lại sự tỉ mỉ ấy, ta có một món quá vô cùng độc lạ và cũng không kém phần dễ thương, xinh xắn. Bạn có thể đặt nó ở bàn học hay bàn làm việc để trang trí, hay làm quà tặng vào dịp sinh nhật hay những ngày lễ.',
                'id_category' => 5,
                "created_at"=> "2019-08-28 03:12:53",
                "updated_at"=> "2019-08-28 03:12:53"
            ],
            [
                'product_name' => 'Móc khóa mica CTXH',
                'price' => 12000,
                'product_image' => 'https://i.ibb.co/L5xNvf5/m-c-kh-a-CTXH.jpg',
                'description' => 'Màu: Xanh dương
Chất liệu: mica 
Hình dáng: tròn
Đường kính: 3cm
Dày: 2-3mm
Móc khóa có hình nam sinh, nữ sinh UIT cute lạc lối cùng với tòa nhà B xinh xắn. Nếu bạn muốn chứng minh rằng mình đã, đang và học UIT thì hãy nhanh tay sở hữu chiếc móc khóa xinh đẹp này. Móc khóa có cả nam và nữ nên dễ mua đôi tặng bạn gái nhé!',
                'id_category' => 6,
                "created_at"=> "2019-08-28 03:12:54",
                "updated_at"=> "2019-08-28 03:12:54"
            ],
            [
                'product_name' => 'Hoa hồng tươi',
                'price' => 18000,
                'product_image' => 'https://i.ibb.co/xmVM2fv/72397602-2608911835832624-6433829145045630976-n.png',
                'description' => 'Màu: đỏ
Loại: hoa tươi
Phụ kiện: bó bằng giấy hoặc ni lông
Hoa hồng đỏ không chỉ mang nhiều ý nghĩa hơn các loài hoa hồng khác, hồng đỏ là một biểu tượng toàn cầu. Hoa hồng đỏ là điều giản dị nhất để nói "I love you". Với mối quan hệ chớm nở, một bó hồng đỏ là dấu hiệu bắt đầu một tình yêu lãng mạn. Hoa hồng giúp bạn gửi đi thông điệp vững tin và lời mời tình yêu tiến gần thêm một bước nữa. Và đôi khi chỉ một cành hoa hồng thôi cũng là câu trả lời đầy cảm xúc. Dù bất kỳ dịp nào đi nữa, hoa hồng rất khó làm ai đó từ chối!
Hoa hồng đỏ còn thể hiện tình yêu của bạn đối với những người mình yêu thương. Vào dịp lễ 8/3, 20/10, nó là món quà rất ý nghĩa để tri ân với những người phụ nữ mà mình yêu thương.',
                'id_category' => 6,
                "created_at"=> "2019-08-28 03:12:54",
                "updated_at"=> "2019-08-28 03:12:54"
            ],
            [
                'product_name' => 'kẹp ảnh gỗ',
                'price' => 8000,
                'product_image' => 'https://i.ibb.co/hRpnF4t/kep-s-ch.jpg',
                'description' => 'chất liệu: gỗ
Màu: nâu
Mẫu: đa dạng
Công dụng: treo ảnh, trang trí
Kẹp sở hữu thiết kế nhỏ gọn, được gia công từ gỗ, tinh tế trong từng đường nét, chắc chắn và bền đẹp. Bộ sản phẩm gồm nhiều kẹp nhỏ, được làm từ chất liệu gỗ bền đẹp, xử lý cẩn thận, chống mục, chống giòn gãy. Lò xo inox đàn hồi tốt, kẹp chặt và dễ dàng điều chỉnh độ rộng, hẹp, vô cùng linh hoạt, tiện lợi và dễ dàng sử dụng. Kẹp gỗ được gia công tỉ mỉ, họa tiết những chậu xương rồng nhỏ bé xanh mướt ngộ nghĩnh được phủ lớp sơn sáng đẹp, không độc hại, an toàn cho sức khỏe. Tính tiện dụng cao, dùng để kẹp ảnh, kẹp giấy, có thể kết hợp đoạn dây thừng nhỏ để trang trí, tiện dụng trong việc quan sát.
Bạn tha hồ trang trí cho tổ ấm của mình với những tranh ảnh đầy màu sắc. Bạn có thể tự mình treo những bức ảnh kỉ niệm trong những chuyến đi chơi, những khi hẹn hò, ảnh cưới... bất cứ ảnh nào bạn thích. Cho bạn một không gian sống và làm việc thoải mái, khẳng định đẳng cấp thẩm mỹ. Sản phẩm sẽ được giao ngẫu nhiên hình dạng nhé.',
                'id_category' => 6,
                "created_at"=> "2019-08-28 03:12:55",
                "updated_at"=> "2019-08-28 03:12:55"
            ],
        ];
        
        foreach ($products as $key => $product) {
            Product::create($product);
        }
    }
}
