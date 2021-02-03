<?php

namespace Database\Seeders;

use App\Models\MediaProduct;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartridgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SP1
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 1,
            'category_id' => 3,
            'name' => 'Mực In HP 103A Neverstop (dành cho HP Neverstop)',
            'slug' => Str::of('Mực In HP 103A Neverstop (dành cho HP Neverstop)')->slug('-'),
            'description' => 'Mực In HP 103A Neverstop (dành cho HP Neverstop)',
            'content' => '<h3>Cách nạp mực&nbsp;HP 103A Neverstop trong vòng 15 giây</h3><p>Bước 1: Bạn cầm và tháo vòng bảo vệ trên hộp mực.</p><p>Bước 2: Bạn mở nắp bơm mực.</p><p>Bước 3: Bạn để đầu hộp mực ngay vị trí nơi bơm mực và xoay theo chiều đồng hồ.</p><p>Bước 4: Bạn ấn thanh bơm xuống từ từ để bơm mực cho tới khi hết hộp mực.</p><p>Bước 5: Bạn xoay hộp mực ngược chiều đồng hồ để tháo hộp mực ra khỏi máy in.&nbsp;</p><p>Như vậy, bạn đóng nắp bơm mực và bắt đầu chạy in tài liệu.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-2.jpg" onclick="return false;"><img alt="Cách nạp mực HP 103A Neverstop (dành cho HP Neverstop)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-2.jpg" class="lazy" title="Cách nạp mực HP 103A Neverstop (dành cho HP Neverstop)" src="https://cdn.tgdd.vn/Products/Images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-2.jpg" style="display: block;"></a></p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop.gif" onclick="return false;"><img alt="Mực In HP 103A Neverstop (dành cho HP Neverstop) - thay mực in" data-original="https://cdn.tgdd.vn/Products/Images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop.gif" class="lazy" title="Mực In HP 103A Neverstop (dành cho HP Neverstop) - thay mực in" src="https://cdn.tgdd.vn/Products/Images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop.gif" style="display: block;"></a></p><h3>Thiết kế dành riêng cho máy in <a href="https://www.thegioididong.com/may-in/may-in-hp-neverstop-laser-1000w-4ry23a" target="_blank">HP&nbsp;Neverstop</a></h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-5.jpg" onclick="return false;"><img alt="Mực HP 103A Neverstop (dành cho HP Neverstop)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-5.jpg" class="lazy" title="Mực HP 103A Neverstop (dành cho HP Neverstop)" src="https://cdn.tgdd.vn/Products/Images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-5.jpg" style="display: block;"></a></p><h3>Mực in tối đa 2500 trang với độ phủ trang 5%</h3><p><a href="https://www.thegioididong.com/muc-in-hp" target="_blank" title="mực in hp">Mực in&nbsp;HP</a> 103A Neverstop thích hợp với việc in ấn khổi lượng lớn ở khả năng in đến 2500 trang (độ phủ trang 5%). Bạn thoải mái trong việc in văn bản, tài liệu và không cần lo lắng về chi phí phát sinh cho 1 trang in.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-3.jpg" onclick="return false;"><img alt="Công suất mực HP 103A Neverstop (dành cho HP Neverstop)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-3.jpg" class="lazy" title="Công suất mực HP 103A Neverstop (dành cho HP Neverstop)" src="https://cdn.tgdd.vn/Products/Images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-3.jpg" style="display: block;"></a></p><h3>Chất lượng bản in đẹp, màu mực bền</h3><p><a href="https://www.thegioididong.com/muc-in" target="_blank" title="Mực in">Mực in</a> chính hãng HP đem đến trải nghiệm bản in chất lượng cao, ổn định không có các đường gợn hoặc bị nhòe. Màu mực in sáng đẹp cho chất lượng bản in rõ nét, tương thích với nhiều loại giấy khác nhau, độ ổn định cao.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-6.jpg" onclick="return false;"><img alt="Mực In HP 103A Neverstop (dành cho HP Neverstop) - mực in chính hãng" data-original="https://cdn.tgdd.vn/Products/Images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-6.jpg" class="lazy" title="Mực In HP 103A Neverstop (dành cho HP Neverstop) - mực in chính hãng" src="https://cdn.tgdd.vn/Products/Images/1262/215701/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-6.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Nơi sản xuất', 'value' => 'Trung Quốc'],
                ['key' => 'Thuơng hiệu', 'value' => 'HP'],
                ['key' => 'Tương thích máy in', 'value' => 'HP Never Stop'],
                ['key' => 'Số trang in tối đa (Độ phủ 5%)', 'value' => '2500 trang'],
            ]),
            'price' => 240000.00,
            'discount' => 10,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop-600x600.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/cartridge-hp-neverstop/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/cartridge-hp-neverstop/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProduct::create([
                    'media_id' => $media->id,
                    'product_id' => $product->id
                ]);
                //update thumbnail
                if ($key == 0) {
                    $product->featured_image = $media->id;
                    $product->save();
                }
            }
        }

        // SP2
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 4,
            'category_id' => 3,
            'name' => 'Mực In Brother TN-2385 (dành cho Brother DCPL2520D/ HL-2366DW/ HL-2321D/HL-2361DN/MFC-L2701DW)',
            'slug' => Str::of('Mực In Brother TN-2385 (dành cho Brother DCPL2520D/ HL-2366DW/ HL-2321D/HL-2361DN/MFC-L2701DW)')->slug('-'),
            'description' => 'Mực In Brother TN-2385 (dành cho Brother DCPL2520D/ HL-2366DW/ HL-2321D/HL-2361DN/MFC-L2701DW)',
            'content' => '<h3>Cách thay thế hộp mực Brother TN-2385</h3><p>Bước 1: Bạn mở bao bì hộp mực mới, tháo bao ni lông và lắc nhẹ để mực được phân phối đều.</p><p>Bước 2: Bạn tắt nguồn máy in và lấy hộp mực đã hết ra khỏi máy.</p><p>Bước 3: Đặt hộp mực mới vào khay chứa hộp mực.</p><p>Bước 4: Đậy nắp lại và tiến hành in ấn.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-21.gif" onclick="return false;"><img alt="Brother TN-2385 (Brother DCPL2520D/ HLL2366DW/ HLL2321D) - huớng dẫn lắp máy in" data-original="https://cdn.tgdd.vn/Products/Images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-21.gif" class="lazy" title="Brother TN-2385 (Brother DCPL2520D/ HLL2366DW/ HLL2321D) - huớng dẫn lắp máy in" src="https://cdn.tgdd.vn/Products/Images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-21.gif" style="display: block;"></a></p><h3>Phù hợp sử dụng cho các dòng máy in Brother <a href="https://www.thegioididong.com/may-in/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo" target="_blank" title="https://www.thegioididong.com/may-in/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo">DCP-L2520D</a>,&nbsp;<a href="https://www.thegioididong.com/may-in/may-in-laser-brother-hl-l2366dw" target="_blank" title="Máy in Laser Brother HL-L2366DW Wifi">HL-L2366DW</a>,&nbsp;<a href="https://www.thegioididong.com/may-in/may-in-laser-brother-hl-l2321d" target="_blank" title="https://www.thegioididong.com/may-in/may-in-laser-brother-hl-l2321d">HL-L2321D</a></h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-13.jpg" onclick="return false;"><img alt="Brother TN-2385 (Brother DCPL2520D/ HLL2366DW/ HLL2321D) - phù hợp với máy in" data-original="https://cdn.tgdd.vn/Products/Images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-13.jpg" class="lazy" title="Brother TN-2385 (Brother DCPL2520D/ HLL2366DW/ HLL2321D) - phù hợp với máy in" src="https://cdn.tgdd.vn/Products/Images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-13.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/muc-in-brother" target="_blank" title="mực in brother">Mực in Brother</a> có khả năng in đến 2600 trang với độ phủ mực 5 %.</h3><p>Một <a href="https://www.thegioididong.com/muc-in/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d" target="_blank" title="Brother TN-2385 (Brother DCPL2520D/ HLL2366DW/ HLL2321D)">hộp mực Brother TN-2385</a> có thể in tối đa 2600 trang với độ phủ 5 % giúp bạn tiết kiệm chi phí in ấn tài liệu cho văn phòng/ gia đình.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-.jpg" onclick="return false;"><img alt="Brother TN-2385 (Brother DCPL2520D/ HLL2366DW/ HLL2321D)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-.jpg" class="lazy" title="Brother TN-2385 (Brother DCPL2520D/ HLL2366DW/ HLL2321D)" src="https://cdn.tgdd.vn/Products/Images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-.jpg" style="display: block;"></a></p><h3>Chất lượng bản in chi tiết, rõ ràng nhờ <a href="https://www.thegioididong.com/muc-in" target="_blank" title="mực in">mực in</a> chính hãng Brother</h3><p>Bên cạnh đó, sử dụng mực in chính hãng Brother giúp đầu in hoạt động trơn tru, đảm bảo độ bền sử dụng trong thời gian lâu dài.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-21-.jpg" onclick="return false;"><img alt="Brother TN-2385 (Brother DCPL2520D/ HLL2366DW/ HLL2321D) - mực in chính hãng " data-original="https://cdn.tgdd.vn/Products/Images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-21-.jpg" class="lazy" title="Brother TN-2385 (Brother DCPL2520D/ HLL2366DW/ HLL2321D) - mực in chính hãng " src="https://cdn.tgdd.vn/Products/Images/1262/215643/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-21-.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Nơi sản xuất', 'value' => 'Việt Nam'],
                ['key' => 'Thuơng hiệu', 'value' => 'Brother'],
                ['key' => 'Tương thích máy in', 'value' => 'Brother DCP-L2520DBrother HL-L2366DWBrother HL-L2321D'],
                ['key' => 'Số trang in tối đa (Độ phủ 5%)', 'value' => '2600 trang'],
            ]),
            'price' => 450000.00,
            'discount' => 5,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-2-org.jpg',
            'hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-3-org.jpg',
            'hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-4-org.jpg',
            'hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-5-org.jpg',
            'hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-6-org.jpg',
            'hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d-7-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/cartridge-brother-tn-2385/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/cartridge-brother-tn-2385/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProduct::create([
                    'media_id' => $media->id,
                    'product_id' => $product->id
                ]);
                //update thumbnail
                if ($key == 0) {
                    $product->featured_image = $media->id;
                    $product->save();
                }
            }
        }

        // SP3
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 2,
            'category_id' => 3,
            'name' => 'Mực In Cartridge Canon 303 (dành cho Canon LBP2900)',
            'slug' => Str::of('Mực In Cartridge Canon 303 (dành cho Canon LBP2900)')->slug('-'),
            'description' => 'Mực In Cartridge Canon 303 (dành cho Canon LBP2900)',
            'content' => '<h3>Cách thay thế hộp mực mực in Canon 303</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-1.gif" onclick="return false;"><img alt="Hướng dẫn cách thay hộp mực Cartridge Canon 303 (dành cho Canon LBP2900)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-1.gif" class="lazy" title="Hướng dẫn cách thay hộp mực Cartridge Canon 303 (dành cho Canon LBP2900)" src="https://cdn.tgdd.vn/Products/Images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-1.gif" style="display: block;"></a></p><p>Bước 1: Bạn mở bao bì hộp mực mới, tháo bao ni lông và lắc nhẹ để mực được phân phối đều.</p><p>Bước 2: Bạn tắt nguồn máy in và lấy hộp mực đã hết ra khỏi máy.</p><p>Bước 3: Đặt hộp mực mới vào khay chứa hộp mực.</p><p>Bước 4: Đậy nắp lại và tiến hành in ấn.</p><h3>Phù hợp sử dụng cho máy in&nbsp;<a href="https://www.thegioididong.com/may-in/may-in-laser-canon-lbp2900" target="_blank" title="Máy in Laser Canon LBP2900">Canon LBP2900</a></h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-6.jpg" onclick="return false;"><img alt="Hộp mực Cartridge Canon 303 (dành cho Canon LBP2900)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-6.jpg" class="lazy" title="Hộp mực Cartridge Canon 303 (dành cho Canon LBP2900)" src="https://cdn.tgdd.vn/Products/Images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-6.jpg" style="display: block;"></a></p><h3>Có khả năng in đến 2000 trang với độ phủ mực 5 %</h3><p>Một <a href="https://www.thegioididong.com/muc-in/hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900" target="_blank" title="Canon 303 (dành cho Canon LBP2900)">hộp mực Canon 303</a> có thể in tối đa 2000 trang với độ phủ 5 % giúp bạn tiết kiệm chi phí in ấn tài liệu cho văn phòng/ gia đình.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp29001.jpg" onclick="return false;"><img alt="Công suất hộp mực Cartridge Canon 303 (dành cho Canon LBP2900)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp29001.jpg" class="lazy" title="Công suất hộp mực Cartridge Canon 303 (dành cho Canon LBP2900)" src="https://cdn.tgdd.vn/Products/Images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp29001.jpg" style="display: block;"></a></p><h3>Chất lượng bản in chi tiết, rõ ràng nhờ <a href="https://www.thegioididong.com/muc-in-canon" target="_blank" title="mực in chính hãng canon">mực in chính hãng Canon</a></h3><p>Bên cạnh đó, sử dụng <a href="https://www.thegioididong.com/muc-in" target="_blank" title="mực in">mực in</a> chính hãng Canon màu đen giúp đầu in hoạt động trơn tru, đảm bảo độ bền sử dụng trong thời gian lâu dài.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp29002.jpg" onclick="return false;"><img alt="Chất lượng hộp mực Cartridge Canon 303 (dành cho Canon LBP2900)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp29002.jpg" class="lazy" title="Chất lượng hộp mực Cartridge Canon 303 (dành cho Canon LBP2900)" src="https://cdn.tgdd.vn/Products/Images/1262/215695/hop-muc-cartridge-canon-303-danh-cho-canon-lbp29002.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Nơi sản xuất', 'value' => 'Nhật Bản, Trung Quốc'],
                ['key' => 'Thuơng hiệu', 'value' => 'Canon'],
                ['key' => 'Tương thích máy in', 'value' => 'Canon LBP 2900'],
                ['key' => 'Số trang in tối đa (Độ phủ 5%)', 'value' => '2000 trang'],
            ]),
            'price' => 1450000.00,
            'discount' => 15,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-den-2-org.jpg',
            'hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-den-3-org.jpg',
            'hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-den-4-org.jpg',
            'hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-den-5-org.jpg',
            'hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900-den-6-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/cartridge-canon-303/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/cartridge-canon-303/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProduct::create([
                    'media_id' => $media->id,
                    'product_id' => $product->id
                ]);
                //update thumbnail
                if ($key == 0) {
                    $product->featured_image = $media->id;
                    $product->save();
                }
            }
        }

        // SP4
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 2,
            'category_id' => 3,
            'name' => 'Mực In Cartridge Canon 325 (dành cho Canon LBP6030/6030w)',
            'slug' => Str::of('Mực In Cartridge Canon 325 (dành cho Canon LBP6030/6030w)')->slug('-'),
            'description' => 'Mực In Cartridge Canon 325 (dành cho Canon LBP6030/6030w)',
            'content' => '<h3>Cách thay thế hộp mực&nbsp;Cartridge Canon 325</h3><h3><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp6031.gif" onclick="return false;"><img alt="Cách thay hộp mực Cartridge Canon 325" data-original="https://cdn.tgdd.vn/Products/Images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp6031.gif" class="lazy" title="Cách thay hộp mực Cartridge Canon 325" src="https://cdn.tgdd.vn/Products/Images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp6031.gif" style="display: block;"></a></h3><p>Bước 1: Bạn lấy hộp mực mới ra khỏi hộp và lắc nhẹ và đều.</p><p>Bước 2: Bạn tắt nguồn máy in và lấy hộp hết mực ra.</p><p>Bước 3: Bạn lắp hộp mực mới vào khay mực.</p><p>Bước 4: Bạn mở nguồn và chạy máy in</p><h3>Thích hợp với các dòng máy in <a href="https://www.thegioididong.com/may-in/may-in-laser-canon-lbp-6030" target="_blank" title="Máy in Laser Canon LBP 6030">Canon LBP 6030</a>, <a href="https://www.thegioididong.com/may-in/may-in-laser-canon-lbp-6030w-wifi" target="_blank" title="Máy in Laser Canon LBP 6030W Wifi">LBP&nbsp;6030W</a></h3><h3><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-4.jpg" onclick="return false;"><img alt="Hộp mực Cartridge Canon 325 (dành cho Canon LBP6030/6030w)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-4.jpg" class="lazy" title="Hộp mực Cartridge Canon 325 (dành cho Canon LBP6030/6030w)" src="https://cdn.tgdd.vn/Products/Images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-4.jpg" style="display: block;"></a></h3><h3><br>Có thể in được khoảng 1.600 trang với độ in phủ mực lên đến 5%</h3><p>Một <a href="https://www.thegioididong.com/muc-in/hop-muc-cartridge-canon-325-danh-cho-canon-lbp603" target="_blank" title="Canon 325 (dành cho Canon LBP6030/6030w)">hộp mực in Laser Canon Cartridge 325</a> có thể in tối đa 1.600 trang với độ in phủ mực lên đến 5%. Giúp bạn tiết kiệm phần nào chi phí in ấn tài liệu trong gia đình, văn phòng.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-5.jpg" onclick="return false;"><img alt="Công suất hộp mực Cartridge Canon 325 (dành cho Canon LBP6030/6030w)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-5.jpg" class="lazy" title="Công suất hộp mực Cartridge Canon 325 (dành cho Canon LBP6030/6030w)" src="https://cdn.tgdd.vn/Products/Images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-5.jpg" style="display: block;"></a></p><h3>Chất lượng bản in sắc nét, rõ ràng, hạn chế tối đa hiện tượng mờ nhòe</h3><p><a href="https://www.thegioididong.com/muc-in-canon" target="_blank" title="mực in canon">Mực in Canon</a> màu đen cho chất lượng bản in sắc nét, rõ ràng, hạn chế tối đa hiện tượng mờ nhòe. Ngoài ra <a href="https://www.thegioididong.com/muc-in" target="_blank" title="mực in">mực in</a> giúp đầu in hoạt động ổn định, sử dụng bền trong thời gian lâu dài</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp6031.jpg" onclick="return false;"><img alt="Chất lượng hộp mực Cartridge Canon 325 (dành cho Canon LBP6030/6030w)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp6031.jpg" class="lazy" title="Chất lượng hộp mực Cartridge Canon 325 (dành cho Canon LBP6030/6030w)" src="https://cdn.tgdd.vn/Products/Images/1262/215697/hop-muc-cartridge-canon-325-danh-cho-canon-lbp6031.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Nơi sản xuất', 'value' => 'Nhật Bản'],
                ['key' => 'Thuơng hiệu', 'value' => 'Canon'],
                ['key' => 'Tương thích máy in', 'value' => 'Canon LBP 6030/6030w'],
                ['key' => 'Số trang in tối đa (Độ phủ 5%)', 'value' => '1600 trang'],
            ]),
            'price' => 1550000.00,
            'discount' => 15,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-den-2-org.jpg',
            'hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-den-3-org.jpg',
            'hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-den-4-org.jpg',
            'hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-den-5-org.jpg',
            'hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-den-6-org.jpg',
            'hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-den-7-org.jpg',
            'hop-muc-cartridge-canon-325-danh-cho-canon-lbp603-den-8-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/cartridge-canon-325/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/cartridge-canon-325/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProduct::create([
                    'media_id' => $media->id,
                    'product_id' => $product->id
                ]);
                //update thumbnail
                if ($key == 0) {
                    $product->featured_image = $media->id;
                    $product->save();
                }
            }
        }

        // SP5
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 2,
            'category_id' => 3,
            'name' => 'Mực In Cartridge Canon 337 (dành cho Canon MF241d)',
            'slug' => Str::of('Mực In Cartridge Canon 337 (dành cho Canon MF241d)')->slug('-'),
            'description' => 'Mực In Cartridge Canon 337 (dành cho Canon MF241d)',
            'content' => '<h3>Cách thay hộp mực&nbsp;Cartridge Canon 337</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-1.gif" onclick="return false;"><img alt="Cách thay hộp mực Cartridge Canon 337 (dành cho Canon MF241d)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-1.gif" class="lazy" title="Cách thay hộp mực Cartridge Canon 337 (dành cho Canon MF241d)" src="https://cdn.tgdd.vn/Products/Images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-1.gif" style="display: block;"></a></p><p>Bước 1: Bạn tắt nguồn máy in và lấy hộp mực cũ ra.</p><p>Bước 2: Bạn khui hộp sản phẩm lấy hộp mực mới.</p><p>Bước 3: Bạn bỏ hộp mực mới vào khay chứa máy in.</p><p>Bước 4: Bạn đậy nắp máy in và bật nguồn lên.</p><h3><a href="https://www.thegioididong.com/muc-in-canon" target="_blank" title="mực in canon">Mực in Canon</a> dành riêng máy in <a href="https://www.thegioididong.com/may-in/may-in-laser-canon-da-chuc-nang-mf241d" target="_blank" title="Máy in đa năng Canon Laser MF241d">Canon Laser MF241d</a></h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d2.jpg" onclick="return false;"><img alt="Hộp mực Cartridge Canon 337 (dành cho Canon MF241d)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d2.jpg" class="lazy" title="Hộp mực Cartridge Canon 337 (dành cho Canon MF241d)" src="https://cdn.tgdd.vn/Products/Images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d2.jpg" style="display: block;"></a></p><h3>Có thể in tối đa 2400 trang với độ phủ 5%</h3><p>Bộ đôi máy in và <a href="https://www.thegioididong.com/muc-in/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d" target="_blank" title="Canon 337 (dành cho Canon MF241d)">mực in Canon 337</a> có thể cho ra 2400 bản in A4, đảm bảo hiệu năng làm việc, giúp bạn giảm chi phí cũng như thời gian trong công việc văn phòng hoặc nhu cầu cá nhân.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-4.jpg" onclick="return false;"><img alt="Công suất hộp mực Cartridge Canon 337 (dành cho Canon MF241d)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-4.jpg" class="lazy" title="Công suất hộp mực Cartridge Canon 337 (dành cho Canon MF241d)" src="https://cdn.tgdd.vn/Products/Images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-4.jpg" style="display: block;"></a></p><h3>Chất lượng mực in rõ nét, vận hành mượt mà</h3><p><a href="https://www.thegioididong.com/muc-in" target="_blank" title="Mực in">Mực in</a> màu đen đều, nhanh khô, không dây mực ra bản in cho ra bản in chi tiết, chữ không bị nhòe. Do đó,&nbsp;đảm bảo cho máy in không bị hỏng, trục trặc, khiến công việc bị gián đoạn, phải in lại khiến lãng phí mực và giấy, tiết kiệm đáng kể chi phí sử dụng đáng kể.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d1.jpg" onclick="return false;"><img alt="Chất lượng hộp mực Cartridge Canon 337 (dành cho Canon MF241d)" data-original="https://cdn.tgdd.vn/Products/Images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d1.jpg" class="lazy" title="Chất lượng hộp mực Cartridge Canon 337 (dành cho Canon MF241d)" src="https://cdn.tgdd.vn/Products/Images/1262/215698/hop-muc-cartridge-canon-337-danh-cho-canon-mf241d1.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Nơi sản xuất', 'value' => 'Nhật Bản'],
                ['key' => 'Thuơng hiệu', 'value' => 'Canon'],
                ['key' => 'Tương thích máy in', 'value' => 'Canon MF241d'],
                ['key' => 'Số trang in tối đa (Độ phủ 5%)', 'value' => '2400 trang'],
            ]),
            'price' => 1750000.00,
            'discount' => 5,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-den-2-org.jpg',
            'hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-den-3-org.jpg',
            'hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-den-4-org.jpg',
            'hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-den-5-org.jpg',
            'hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-den-6-org.jpg',
            'hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-den-7-org.jpg',
            'hop-muc-cartridge-canon-337-danh-cho-canon-mf241d-den-8-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/cartridge-canon-337/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/cartridge-canon-337/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProduct::create([
                    'media_id' => $media->id,
                    'product_id' => $product->id
                ]);
                //update thumbnail
                if ($key == 0) {
                    $product->featured_image = $media->id;
                    $product->save();
                }
            }
        }

        // SP6
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 1,
            'category_id' => 3,
            'name' => 'Hộp Mực In Sapido 12A (2612A/FX09/FX10) Cho Máy In HP 1010, HP 1012, HP 1015, HP 1018, HP 1020, HP 1022, HP 1022n, HP 1022nw, Canon 2900, Canon 3000',
            'slug' => Str::of('Hộp Mực In Sapido 12A (2612A/FX09/FX10) Cho Máy In HP 1010, HP 1012, HP 1015, HP 1018, HP 1020, HP 1022, HP 1022n, HP 1022nw, Canon 2900, Canon 3000')->slug('-'),
            'description' => 'Hộp Mực In Sapido 12A (2612A/FX09/FX10) Cho Máy In HP 1010, HP 1012, HP 1015, HP 1018, HP 1020, HP 1022, HP 1022n, HP 1022nw, Canon 2900, Canon 3000',
            'content' => 'Dùng cho máy in HP 1010, 1012, 1015, 1018, 1020, 1022, 1022n, 1022nw và Canon 2900, 3000<br>
                    Số lượng trang in lên đến: 2.300 trang<br>
                    Cho chất lượng bản in rõ, đẹp<h5>Cho bản in sắc nét, rõ ràng</h5>
                    <p><strong>Mực In Sapido 12A (2612A/FX09/FX10)</strong> được sản xuất theo công  thức tiên tiến, cho chất lượng bản in rõ ràng, sắc nét, hạn chế mờ nhòe.  Bên cạnh đó, công thức này cũng không gây tổn hại đến đầu in nên bạn có  thể an tâm hơn khi sử dụng.</p>
                    <h5>Tối ưu hóa chi phí</h5>
                    <p>Một hộp mực in Sapido 12A (2612A/FX09/FX10) có thể in được khoảng 2.300 trang  với độ phủ 5% giúp bạn tiết kiệm hơn cho bạn khi sử dụng in ấn tài liệu  cho văn phòng nhỏ hoặc dùng trong gia đình. Bạn sẽ không phải thay đổi  hộp mực quá thường xuyên như trước đây nữa.</p>
                    <h5>Thích hợp cho các dòng máy in</h5>
                    <p>Sản phẩm thích hợp sử dụng cho cho dòng máy in HP 1010, 1012, 1015, 1018, 1020, 1022, 1022n, 1022nw và Canon 2900, 3000. Với công thức đặc biệt,  mực đảm bảo an toàn cho máy in của bạn.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...</p>',
            'parameters' => json_encode([
                ['key' => 'Thương hiệu', 'value' => 'Sapido'],
                ['key' => 'Loại mực', 'value' => 'Mực laser'],
                ['key' => 'Loại máy sử dụng', 'value' => 'Laser'],
                ['key' => 'Xuất xứ', 'value' => 'Trung Quốc'],
                ['key' => 'Số trang in được', 'value' => '2.300 trang'],
            ]),
            'price' => 350000.00,
            'discount' => 30,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            '1.jpg',
            '2.jpg',
            '3.jpg',
            '4.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/cartridge-sapido/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/cartridge-sapido/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProduct::create([
                    'media_id' => $media->id,
                    'product_id' => $product->id
                ]);
                //update thumbnail
                if ($key == 0) {
                    $product->featured_image = $media->id;
                    $product->save();
                }
            }
        }
    }
}
