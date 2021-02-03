<?php

namespace Database\Seeders;

use App\Models\MediaProduct;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
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
            'category_id' => 1,
            'name' => 'Máy in HP LaserJet Pro M12a (T0L45A)',
            'slug' => Str::of('Máy in HP LaserJet Pro M12a (T0L45A)')->slug('-'),
            'description' => 'Máy in này trang bị công nghệ tự động tắt/mở khi kết nối cổng USB, giảm chi phí cho doanh nghiệp cũng như bảo vệ môi trường.',
            'content' => '<h3>Kiểu dáng nhỏ gọn</h3>
                <p><a href="https://www.thegioididong.com/may-in/may-in-hp-laserjet-pro-m12a-t0l45a" target="_blank" title="Máy in HP LaserJet Pro M12a (T0L45A)">Máy in HP LaserJet Pro M12a</a>&nbsp;có thiết kế nhỏ gọn, không chiếm nhiều không gian, thích hợp đặt trên bàn làm việc, bàn học.</p>
                <p><a href="https://www.thegioididong.com/images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a-11.jpg" onclick="return false;"><img alt="Máy in HP LaserJet Pro M12a - thiết kế" data-original="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a-11.jpg" class="lazy" title="Máy in HP LaserJet Pro M12a - thiết kế" src="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a-11.jpg" style="display: block;"></a></p>
                <h3>Tốc độ in nhanh chóng cho chất lượng rõ nét</h3>
                <p><a href="https://www.thegioididong.com/may-in-hp" target="_blank" title="máy in hp">Máy in HP</a> hỗ trợ tốc độ in 18 trang/phút đáp ứng hiệu quả nhu cầu in ấn cá nhân hay văn phòng nhỏ.</p>
                <p>Ngoài ra với độ phân giải 600 x 600 dpi cho bạn những bản in đẹp, chất lượng rõ nét.</p>
                <p><a href="https://www.thegioididong.com/images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a3.jpg" onclick="return false;"><img alt="Tốc độ in nhanh chóng - Máy in HP LaserJet Pro M12a (T0L45A)" data-original="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a3.jpg" class="lazy" title="Tốc độ in nhanh chóng - Máy in HP LaserJet Pro M12a (T0L45A)" src="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a3.jpg" style="display: block;"></a></p>
                <h3><a href="https://www.thegioididong.com/may-in-laser" target="_blank" title="Máy in laser trắng đen">Máy in laser trắng đen</a> 1 mặt tiện dụng</h3>
                <p><a href="https://www.thegioididong.com/images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a7.jpg" onclick="return false;"><img alt="Máy in laser trắng đen - Máy in HP LaserJet Pro M12a (T0L45A)" data-original="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a7.jpg" class="lazy" title="Máy in laser trắng đen - Máy in HP LaserJet Pro M12a (T0L45A)" src="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a7.jpg" style="display: block;"></a></p>
                <h3>Giảm thiểu chi phí in ấn với mực in chính hãng HP 72A</h3>
                <p><a href="https://www.thegioididong.com/images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a-1-4.jpg" onclick="return false;"><img alt="Máy in HP LaserJet Pro M12a - mực in" data-original="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a-1-4.jpg" class="lazy" title="Máy in HP LaserJet Pro M12a - mực in" src="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a-1-4.jpg" style="display: block;"></a></p>
                <h3>Sử dụng tiết kiệm điện, bảo vệ môi trường</h3>
                <p>Máy in này trang bị công nghệ tự động tắt/mở khi kết nối cổng USB, giảm chi phí cho doanh nghiệp cũng như bảo vệ môi trường.</p>
                <p><a href="https://www.thegioididong.com/images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a-3.jpg" onclick="return false;"><img alt="Tiết kiệm điện năng - Máy in HP LaserJet Pro M12a T0L45A " data-original="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a-3.jpg" class="lazy" title="Máy in HP LaserJet Pro M12a T0L45A - Tiết kiệm điện năng" src="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a-3.jpg" style="display: block;"></a></p>
                <h3>Cổng kết nối tốc độ USB 2.0</h3>
                <p><a href="https://www.thegioididong.com/may-in" target="_blank" title="Máy in">Máy in</a>&nbsp;này có hỗ trợ cổng kết nối tốc độ cao USB 2.0 giúp bạn dễ dàng kết nối với các máy tính chạy hệ điều hành Windows / MacOS.</p>
                <p><a href="https://www.thegioididong.com/images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a6-1.jpg" onclick="return false;"><img alt="Cổng kết nối - Máy in HP LaserJet Pro M12a (T0L45A)" data-original="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a6-1.jpg" class="lazy" title="Cổng kết nối - Máy in HP LaserJet Pro M12a (T0L45A)" src="https://cdn.tgdd.vn/Products/Images/5693/154989/may-in-hp-laserjet-pro-m12a-t0l45a6-1.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In laser trắng đen'],
                ['key' => 'Chức năng', 'value' => 'In 1 mặt'],
                ['key' => 'Công suất in khuyến nghị', 'value' => '100-1000 trang/tháng'],
                ['key' => 'Số trang in hộp mực kèm theo máy (Độ phủ 5% trang A4)', 'value' => 'Khoảng 500 trang'],
                ['key' => 'Tốc độ in', 'value' => '18 trang/phút'],
                ['key' => 'Tuổi thọ in', 'value' => '5.000 trang/tháng'],
                ['key' => 'Chất lượng in', 'value' => 'HP FastRes 1200 dpi, 600 x 600 dpi'],
                ['key' => 'Loại mực in', 'value' => 'Mực in HP 79A CF279A'],
                ['key' => 'Thời gian in trang đầu tiên', 'value' => '9s'],
                ['key' => 'Cổng kết nối', 'value' => '1 x USB 2.0'],
                ['key' => 'Khay nạp giấy', 'value' => '150 tờ'],
            ]),
            'price' => 2190000.00,
            'discount' => 20,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'may-in-hp-laserjet-pro-m12a-t0l45a-1-3-org.jpg',
            'may-in-hp-laserjet-pro-m12a-t0l45a-2-2-org.jpg',
            'may-in-hp-laserjet-pro-m12a-t0l45a-3-2-org.jpg',
            'may-in-hp-laserjet-pro-m12a-t0l45a-4-1-org.jpg',
            'may-in-hp-laserjet-pro-m12a-t0l45a-5-org.jpg',
            'may-in-hp-laserjet-pro-m12a-t0l45a-6-1-org.jpg',
            'may-in-hp-laserjet-pro-m12a-t0l45a-7-1-org.jpg',
            'may-in-hp-laserjet-pro-m12a-t0l45a-8-1-org.jpg',
            'may-in-hp-laserjet-pro-m12a-t0l45a-9-org.jpg',
            'may-in-hp-laserjet-pro-m12a-t0l45a-10-org.jpg'
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/hp-m12a/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/hp-m12a/copy-' . $fileName))) {
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

        //SP2
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 2,
            'category_id' => 1,
            'name' => 'Máy in Laser Canon LBP 6030W Wifi',
            'slug' => Str::of('Máy in Laser Canon LBP 6030W Wifi')->slug('-'),
            'description' => 'Máy in Laser Canon LBP 6030W wifi có kích thước rất nhỏ gọn (chỉ 364 x 249 x 199 mm) vừa tiết kiệm không gian, cùng tông màu trắng hiện đại giúp bạn dễ dàng bố trí trong không gian làm việc của mình. ',
            'content' => '<h3>Thiết kế đơn giản, nhỏ gọn</h3>
            <p><a href="https://www.thegioididong.com/may-in/may-in-laser-canon-lbp-6030w-wifi" target="_blank" title="Máy in Laser Canon LBP 6030W wifi">Máy in Laser Canon LBP 6030W wifi</a>&nbsp;có kích thước rất nhỏ gọn (chỉ 364 x 249 x 199 mm) vừa tiết kiệm không gian, cùng tông màu trắng hiện đại giúp bạn dễ dàng bố trí trong không gian làm việc của mình.&nbsp;</p>
            <p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-12.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP 6030W wifi - Thiết kế" data-original="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-12.jpg" class="lazy" title="Máy in Laser Canon LBP 6030W wifi - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-12.jpg" style="display: block;"></a></p>
            <h3>Tốc độ in nhanh với 7.8 giây/trang cùng công suất hoạt động tốt</h3>
            <p>Bên cạnh đó, <a href="https://www.thegioididong.com/may-in-canon" target="_blank" title="Máy in Canon">máy in Canon</a>&nbsp;còn sở hữu tốc độ in lên đến 18 trang/phút, giúp hiệu suất làm việc của bạn thêm tăng tốc, hiệu quả.</p>
            <p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-13.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP 6030W wifi - Công suất hoạt động tốt" data-original="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-13.jpg" class="lazy" title="Máy in Laser Canon LBP 6030W wifi - Công suất hoạt động tốt" src="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-13.jpg" style="display: block;"></a></p>
            <h3><a href="https://www.thegioididong.com/may-in-laser" target="_blank" title="Máy in laser trắng đen">Máy in laser trắng đen</a> tối ưu hóa chất lượng in với độ phân giải 2400 x 600 dpi sắc nét</h3>
            <p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-17.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP 6030W wifi - Chất lượng in tốt" data-original="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-17.jpg" class="lazy" title="Máy in Laser Canon LBP 6030W wifi - Chất lượng in tốt" src="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-17.jpg" style="display: block;"></a></p>
            <h3>Kết nối không dây Wifi hỗ trợ in nhanh chóng</h3>
            <p><a href="https://www.thegioididong.com/may-in?g=in-wifi" target="_blank" title="Xem thêm máy in hỗ trợ wifi">Máy in wifi</a>&nbsp;này hỗ trợ wifi internet dễ dàng in những tài liệu cần thiết một cách nhanh chóng và thuận tiện nhất. Yêu cầu máy in và thiết bị kết nối chung một mạng wifi.</p>
            <p>Ngoài ra, <a href="https://www.thegioididong.com/may-in" target="_blank" title="máy in">máy in</a> hỗ trợ kết nối qua USB 2.0 thông dụng, tiện lợi.</p>
            <p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-100420-060401.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP 6030W wifi - Kết nối tiện lợi" data-original="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-100420-060401.jpg" class="lazy" title="Máy in Laser Canon LBP 6030W wifi - Kết nối tiện lợi" src="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-100420-060401.jpg" style="display: block;"></a></p>
            <h3>Bảng điều khiển dễ dàng sử dụng, nhanh chóng</h3>
            <p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-14.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP 6030W wifi - Dễ dàng sử dụng" data-original="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-14.jpg" class="lazy" title="Máy in Laser Canon LBP 6030W wifi - Dễ dàng sử dụng" src="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-14.jpg" style="display: block;"></a></p>
            <h3>Khay nạp giấy 150 tờ cùng khay đựng giấy đã in 100 tờ, thuận lợi hơn cho quá trình sử dụng liên tục</h3>
            <p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-15.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP 6030W wifi - Khay đựng giấy tiện lợi" data-original="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-15.jpg" class="lazy" title="Máy in Laser Canon LBP 6030W wifi - Khay đựng giấy tiện lợi" src="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-15.jpg" style="display: block;"></a></p>
            <h3>Loại mực in chính hãng khuyến khích sử dụng&nbsp;<a href="https://www.thegioididong.com/muc-in/hop-muc-cartridge-canon-325-danh-cho-canon-lbp603" target="_blank">Cartridge 325</a></h3>
            <p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-17-1.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP 6030W Wifi - Mực in chính hãng" data-original="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-17-1.jpg" class="lazy" title="Máy in Laser Canon LBP 6030W Wifi - Mực in chính hãng" src="https://cdn.tgdd.vn/Products/Images/5693/205982/may-in-laser-canon-lbp-6030w-wifi-17-1.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In laser trắng đen'],
                ['key' => 'Chức năng', 'value' => 'In wifi, In 1 mặt'],
                ['key' => 'Số trang in hộp mực kèm theo máy (Độ phủ 5% trang A4)', 'value' => 'Khoảng 800 - 1200 trang'],
                ['key' => 'Tốc độ in', 'value' => '18 trang/phút'],
                ['key' => 'Tuổi thọ in', 'value' => '8.000 trang/tháng'],
                ['key' => 'Công suất in khuyến nghị', 'value' => '200-800 trang/tháng'],
                ['key' => 'Loại mực in', 'value' => 'Mực in Cartridge 325'],
                ['key' => 'Chất lượng in', 'value' => '2400 x 600 dpi'],
                ['key' => 'Thời gian in trang đầu tiên', 'value' => '7.8 giây'],
                ['key' => 'Bộ nhớ', 'value' => '32 MB'],
                ['key' => 'Màn hình hiển thị LCD', 'value' => 'Màn hình LED'],
                ['key' => 'Cổng kết nối', 'value' => '1 x USB 2.0'],
                ['key' => 'Khay nạp giấy', 'value' => '150 tờ'],
                ['key' => 'Khay chứa giấy đã in', 'value' => '100 tờ'],
            ]),
            'price' => 2790000.00,
            'discount' => 17,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'may-in-laser-canon-lbp-6030w-wifi-2-1-org.jpg',
            'may-in-laser-canon-lbp-6030w-wifi-3-1-org.jpg',
            'may-in-laser-canon-lbp-6030w-wifi-4-1-org.jpg',
            'may-in-laser-canon-lbp-6030w-wifi-5-1-org.jpg',
            'may-in-laser-canon-lbp-6030w-wifi-6-org.jpg',
            'may-in-laser-canon-lbp-6030w-wifi-7-org.jpg',
            'may-in-laser-canon-lbp-6030w-wifi-8-org.jpg',
            'may-in-laser-canon-lbp-6030w-wifi-9-org.jpg',
            'may-in-laser-canon-lbp-6030w-wifi-10-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/canon-6030/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/canon-6030/copy-' . $fileName))) {
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

        //SP3
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 1,
            'category_id' => 1,
            'name' => 'Máy in HP Neverstop Laser 1000w (4RY23A)',
            'slug' => Str::of('Máy in HP Neverstop Laser 1000w (4RY23A)')->slug('-'),
            'description' => 'Máy in HP thiết kế gọn gàng, tinh tế đến từng chi tiết, lắp đặt và sử dụng tiện lợi trong mọi không gian từ văn phòng làm việc, phòng khách đến phòng ngủ, nhà xưởng... ',
            'content' => '<h3>Kiểu dáng hiện đại, thiết kế tinh xảo</h3><p><a href="https://www.thegioididong.com/may-in-hp" target="_blank" title="Máy in HP">Máy in HP</a> thiết kế gọn gàng, tinh tế đến từng chi tiết, lắp đặt và sử dụng tiện lợi trong mọi không gian từ văn phòng làm việc, phòng khách đến phòng ngủ, nhà xưởng...&nbsp;</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-10.jpg" onclick="return false;"><img alt="Máy in HP Neverstop Laser 1000w (4RY23A) - Thiết kế" data-original="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-10.jpg" class="lazy" title="Máy in HP Neverstop Laser 1000w (4RY23A) - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-10.jpg" style="display: block;"></a></p><h3>Chất lượng <a href="https://www.thegioididong.com/may-in-laser" target="_blank" title="Máy in laser trắng đen">máy in laser trắng đen</a> cao, hạn chế nhòe mờ</h3><p>Độ phân giải đạt 600 x 600 dpi, bản in rõ đẹp, sắc nét, màu đen đậm, giúp mọi người cập nhật thông tin từ bản in dễ dàng, thuận lợi.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-13.jpg" onclick="return false;"><img alt="Máy in HP Neverstop Laser 1000w (4RY23A) - Chất lượng bản in" data-original="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-13.jpg" class="lazy" title="Máy in HP Neverstop Laser 1000w (4RY23A) - Chất lượng bản in" src="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-13.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/may-in?g=in-wifi" target="_blank" title="Máy in Wifi">Máy in Wifi</a> tốc độ in mạnh mẽ</h3><p><a href="https://www.thegioididong.com/may-in/may-in-hp-neverstop-laser-1000w-4ry23a" target="_blank" title="Máy in HP Neverstop Laser 1000w (4RY23A)">Máy in HP Neverstop Laser 1000w (4RY23A)</a> có chức năng in 1 mặt, tốc độ in cực kỳ mạnh mẽ, in được 20 trang in trong 1 phút,&nbsp;&nbsp;thời gian in trang đầu tiên chỉ mất 7.8 giây,&nbsp;công suất in lớn nhất đến 12.000 trang/tháng. Ngoài ra, máy trang bị khay nạp giấy chứa được 150 tờ, khay chứa giấy đã in 100 tờ, cho hiệu suất in lớn với chi phí thấp, mang lại lợi ích kinh tế cao cho doanh nghiệp.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-16.jpg" onclick="return false;"><img alt="Máy in HP Neverstop Laser 1000w (4RY23A) - Tốc độ in" data-original="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-16.jpg" class="lazy" title="Máy in HP Neverstop Laser 1000w (4RY23A) - Tốc độ in" src="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-16.jpg" style="display: block;"></a></p><h3>Dễ dàng sử dụng với bảng điều khiển có đèn LED</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-12.jpg" onclick="return false;"><img alt="Máy in HP Neverstop Laser 1000w (4RY23A) - Bảng điều khiển" data-original="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-12.jpg" class="lazy" title="Máy in HP Neverstop Laser 1000w (4RY23A) - Bảng điều khiển" src="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-12.jpg" style="display: block;"></a></p><h3>Kết nối tiện dụng</h3><p><a href="https://www.thegioididong.com/may-in" target="_blank" title="Máy in">Máy in</a> có thể chia sẻ, in ấn tài liệu từ điện thoại, máy tính bảng qua kết nối in không dây dễ dàng. Bạn có thể truy cập và in nhanh tài liệu cũng như hình ảnh từ Dropbox và Google Drive trên điện thoại thông minh một cách đơn giản.</p><p>Máy còn hỗ trợ cổng USB 2.0, tích hợp công nghệ in thông dụng là Google Cloud Print 2.0, Apple AirPrint, Wi-Fi Direct giúp in ấn linh hoạt, nhanh chóng hơn.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-15.jpg" onclick="return false;"><img alt="Máy in HP Neverstop Laser 1000w (4RY23A) - Kết nối" data-original="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-15.jpg" class="lazy" title="Máy in HP Neverstop Laser 1000w (4RY23A) - Kết nối" src="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-15.jpg" style="display: block;"></a></p><h3>Có thể nạp mực vào máy trực tiếp bằng bộ nạp mực chính hãng&nbsp;<a href="https://www.thegioididong.com/muc-in/hop-muc-hp-103a-neverstop-danh-cho-hp-neverstop" target="_blank">HP 103A Neverstop</a></h3><p>Thao tác bơm mực cho laptop cực kỳ đơn giản, bạn chỉ mất 15 giây để bơm mực. Bạn có thể tự mình thay mực cho máy mà không cần phải sợ mực vây ra làm bẩn quần áo.</p><p>Hộp mực in kèm theo máy có công suất in khoảng 5000 trang (độ phủ 5% trên 1 trang A4).</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a.gif" onclick="return false;"><img alt="Máy in HP Neverstop Laser 1000w (4RY23A) - nạp mực trực tiếp" data-original="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a.gif" class="lazy" title="Máy in HP Neverstop Laser 1000w (4RY23A) - nạp mực trực tiếp" src="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a.gif" style="display: block;"></a></p><h3 style="margin: 1.5em auto 0.3em; padding: 0px; border: 0px; vertical-align: baseline; font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 22px; line-height: 1.4em; font-family: Arial, Helvetica, sans-serif; outline: none; zoom: 1;">Dễ dàng theo dõi mực trong máy nhờ vào hệ thống đèn led bên ngoài máy</h3><p>Hệ thống đèn LED bên ngoài sẽ thông báo cho bạn khi mực còn một nửa để bạn kịp thời bơm mực để không làm gián đoạn trong quá trình in.</p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; vertical-align: baseline; margin-block-start: 0px; margin-block-end: 0px; padding-inline-start: 0px; text-rendering: geometricprecision; font-size: 16px; font-family: Arial, Helvetica, sans-serif;"><a class="preventdefault" href="https://www.thegioididong.com/images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-8.jpg" onclick="return false;"><img alt="Máy in HP Neverstop Laser 1000w (4RY23A) - đèn led báo mực" class="lazy" data-class="lazy" data-original="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-8.jpg" style="display: block;" title="Máy in HP Neverstop Laser 1000w (4RY23A) - đèn led báo mực" src="https://cdn.tgdd.vn/Products/Images/5693/209211/may-in-hp-neverstop-laser-1000w-4ry23a-8.jpg"></a></p><p dir="ltr" style="line-height:1.38;margin-top:0pt;margin-bottom:0pt;">Tốc độ in vượt trội, trang in rõ nét, thiết kế nhỏ gọn không tốn nhiều không gian lắp đặt sẽ là sự lựa chọn tuyệt vời cho văn phòng của bạn.</p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In laser trắng đen'],
                ['key' => 'Chức năng', 'value' => 'In wifi, In 1 mặt'],
                ['key' => 'Số trang in hộp mực kèm theo máy (Độ phủ 5% trang A4)', 'value' => 'Khoảng 5000 trang'],
                ['key' => 'Tốc độ in', 'value' => '20 trang/phút'],
                ['key' => 'Tuổi thọ in', 'value' => '12.000 trang/tháng'],
                ['key' => 'Công suất in khuyến nghị', 'value' => '250-2500 trang/tháng'],
                ['key' => 'Loại mực in', 'value' => 'Mực in HP 103A Black'],
                ['key' => 'Chất lượng in', 'value' => '600 x 600 dpi'],
                ['key' => 'Thời gian in trang đầu tiên', 'value' => '7.8 giây'],
                ['key' => 'Bộ nhớ', 'value' => '32 MB'],
                ['key' => 'Màn hình hiển thị LCD', 'value' => 'Màn hình LED'],
                ['key' => 'Cổng kết nối', 'value' => '1 x USB 2.0'],
                ['key' => 'Khay nạp giấy', 'value' => '150 tờ'],
                ['key' => 'Khay chứa giấy đã in', 'value' => '100 tờ'],
                ['key' => 'Trọng lượng', 'value' => '6.95 kg'],
            ]),
            'price' => 2990000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'may-in-hp-neverstop-laser-1000w-4ry23a-trang-1-org.jpg',
            'may-in-hp-neverstop-laser-1000w-4ry23a-trang-2-org.jpg',
            'may-in-hp-neverstop-laser-1000w-4ry23a-trang-3-org.jpg',
            'may-in-hp-neverstop-laser-1000w-4ry23a-trang-4-org.jpg',
            'may-in-hp-neverstop-laser-1000w-4ry23a-trang-5-org.jpg',
            'may-in-hp-neverstop-laser-1000w-4ry23a-trang-8-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/hp-1000w/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/hp-1000w/copy-' . $fileName))) {
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

        //SP4
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 4,
            'category_id' => 1,
            'name' => 'Máy in laser Brother HL L2321D',
            'slug' => Str::of('Máy in laser Brother HL L2321D')->slug('-'),
            'description' => 'Được thiết kế hướng đến phục vụ người dùng doanh nghiệp nên máy in Brother HL-L2321D có kiểu dáng vuông vắn, màu sắc sạch sẽ, cứng cáp, giúp tối ưu không gian bố trí hơn.',
            'content' => '<h3>Thiết kế hiện đại, gọn gàng dành riêng cho doanh nghiệp</h3><p>Được thiết kế hướng đến phục vụ người dùng doanh nghiệp nên <a href="https://www.thegioididong.com/may-in/may-in-laser-brother-hl-l2321d" target="_blank" title="máy in Brother HL-L2321D"><strong>máy in Brother HL-L2321D</strong></a> có kiểu dáng vuông vắn, màu sắc sạch sẽ, cứng cáp, giúp tối ưu không gian bố trí hơn.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115902/may-in-laser-brother-hl-l2321d-16.jpg" onclick="return false;"><img alt="Máy in laser Brother HL L2321D - Thiết kế gọn gàng, hiện đại" data-original="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-16.jpg" class="lazy" title="Máy in laser Brother HL L2321D - Thiết kế gọn gàng, hiện đại" src="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-16.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/may-in?g=in-2-mat" target="_blank" title="Máy in 2 mặt tự động">Máy in hai mặt tự động</a>&nbsp;tiện dụng</h3><p>Chức năng in hai mặt tự động giúp bạn in hai mặt giấy nhanh chóng mà không cần phải đảo chiều bằng tay. Qua đó cũng giúp tiết kiệm được thời gian và giấy in nhiều hơn.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115902/may-in-laser-brother-hl-l2321d-15.jpg" onclick="return false;"><img alt="Máy in laser Brother HL L2321D - Chức năng hoạt động hiệu quả" data-original="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-15.jpg" class="lazy" title="Máy in laser Brother HL L2321D - Chức năng hoạt động hiệu quả" src="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-15.jpg" style="display: block;"></a></p><h3>Tốc độ in nhanh chóng, công suất hoạt động tốt</h3><p><a href="https://www.thegioididong.com/may-in-brother" target="_blank" title="Máy in Brother">Máy in Brother</a> đáp ứng với tốc độ <strong>in 30 trang/phút </strong>giúp bạn không cần phải chờ đợi lâu, nâng cao hiệu quả và tiết kiệm thời gian cho việc khác.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115902/may-in-laser-brother-hl-l2321d-17.jpg" onclick="return false;"><img alt="Máy in laser Brother HL L2321D - Tốc độ in nhanh chóng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-17.jpg" class="lazy" title="Máy in laser Brother HL L2321D - Tốc độ in nhanh chóng" src="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-17.jpg" style="display: block;"></a></p><h3>Chất lượng bản in đẹp, hoạt động hiệu quả</h3><p><a href="https://www.thegioididong.com/may-in" target="_blank" title="Máy in">Máy in</a> hỗ trợ chất lượng in lên đến<strong>&nbsp;2.400 x 600 dpi</strong>. Giúp cho chất lượng bản in hình ảnh tài liệu đẹp và rõ nét.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115902/may-in-laser-brother-hl-l2321d-21.jpg" onclick="return false;"><img alt="Máy in laser Brother HL L2321D - Chất lượng in tốt" data-original="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-21.jpg" class="lazy" title="Máy in laser Brother HL L2321D - Chất lượng in tốt" src="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-21.jpg" style="display: block;"></a></p><h3>Kết nối cổng USB 2.0 thông dụng</h3><p><a href="https://www.thegioididong.com/may-in-laser" target="_blank" title="Máy in laser trắng đen">Máy in laser trắng đen</a> hỗ trợ kết nối USB 2.0<strong> </strong>giúp người dùng dễ dàng kết nối với các với các máy tính hệ điều hành Mac OS, Windows một cách nhanh chóng và tiện lợi.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115902/may-in-laser-brother-hl-l2321d-12.jpg" onclick="return false;"><img alt="Máy in laser Brother HL L2321D - Cổng kết nối USB 2.0 thông dụng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-12.jpg" class="lazy" title="Máy in laser Brother HL L2321D - Cổng kết nối USB 2.0 thông dụng" src="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-12.jpg" style="display: block;"></a></p><h3>Khay giấy chính sức chứa lớn, tối đa lên đến&nbsp;250 tờ,&nbsp;được thiết kế dạng hộc kéo kín đáo giúp chống bụi, côn trùng</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115902/may-in-laser-brother-hl-l2321d-19.jpg" onclick="return false;"><img alt="Máy in laser Brother HL L2321D - Khay nạp giấy tiện dụng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-19.jpg" class="lazy" title="Máy in laser Brother HL L2321D - Khay nạp giấy tiện dụng" src="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-19.jpg" style="display: block;"></a></p><h3>Sử dụng hộp mực in <a href="https://www.thegioididong.com/muc-in/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d" target="_blank">TN-2385</a> in được 2.500 trang giúp tiết kiệm chi phí đáng kể cho doanh nghiệp</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115902/may-in-laser-brother-hl-l2321d-22.jpg" onclick="return false;"><img alt="Máy in laser Brother HL L2321D - Tiệm kiệm chi phí in ấn hơn" data-original="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-22.jpg" class="lazy" title="Máy in laser Brother HL L2321D - Tiệm kiệm chi phí in ấn hơn" src="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-22.jpg" style="display: block;"></a></p><h3>Bảng điều khiển dễ dàng thao tác, trực quan</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115902/may-in-laser-brother-hl-l2321d-10.jpg" onclick="return false;"><img alt="Máy in laser Brother HL L2321D - Bảng điều khiển dễ dàng thao tác" data-original="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-10.jpg" class="lazy" title="Máy in laser Brother HL L2321D - Bảng điều khiển dễ dàng thao tác" src="https://cdn.tgdd.vn/Products/Images/5693/115902/may-in-laser-brother-hl-l2321d-10.jpg" style="display: block;"></a></p><p>&nbsp;</p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In laser trắng đen'],
                ['key' => 'Chức năng', 'value' => 'In 2 mặt'],
                ['key' => 'Số trang in hộp mực kèm theo máy (Độ phủ 5% trang A4)', 'value' => 'Khoảng 2600 trang'],
                ['key' => 'Tốc độ in', 'value' => '30 trang/phút'],
                ['key' => 'Tuổi thọ in', 'value' => '12.000 trang/tháng'],
                ['key' => 'Công suất in khuyến nghị', 'value' => '250-2500 trang/tháng'],
                ['key' => 'Loại mực in', 'value' => 'Brother TN 2385'],
                ['key' => 'Chất lượng in', 'value' => '2400 x 600 dpi'],
                ['key' => 'Thời gian in trang đầu tiên', 'value' => '7.8 giây'],
                ['key' => 'Cổng kết nối', 'value' => '1 x USB 2.0'],
                ['key' => 'Khay nạp giấy', 'value' => '150 tờ'],
                ['key' => 'Khay chứa giấy đã in', 'value' => '100 tờ'],
            ]),
            'price' => 2690000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'may-in-laser-brother-hl-l2321d-xam-1-1-org.jpg',
            'may-in-laser-brother-hl-l2321d-xam-2-1-org.jpg',
            'may-in-laser-brother-hl-l2321d-xam-3-1-org.jpg',
            'may-in-laser-brother-hl-l2321d-xam-4-1-org.jpg',
            'may-in-laser-brother-hl-l2321d-xam-5-1-org.jpg',
            'may-in-laser-brother-hl-l2321d-xam-6-1-org.jpg',
            'may-in-laser-brother-hl-l2321d-xam-7-1-org.jpg',
            'may-in-laser-brother-hl-l2321d-xam-8-1-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/brother-hl-l2321d/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/brother-hl-l2321d/copy-' . $fileName))) {
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

        //SP5
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 2,
            'category_id' => 1,
            'name' => 'Máy in Laser Canon LBP2900',
            'slug' => Str::of('Máy in Laser Canon LBP2900')->slug('-'),
            'description' => 'Máy in Laser Canon LBP2900 được Canon thiết kế theo hướng đơn giản, gọn gàng. Với kích thước nhỏ gọn bạn có thể đặt nhiều vị trí khác nhau trong phòng làm việc của mình.',
            'content' => '<h3>Thiết kế đơn giản, gọn gàng</h3><p><a href="https://www.thegioididong.com/may-in/may-in-laser-canon-lbp2900" target="_blank" title="https://www.thegioididong.com/may-in/may-in-laser-canon-lbp2900">Máy in Laser Canon LBP2900</a> được&nbsp;Canon&nbsp;thiết kế theo hướng đơn giản, gọn gàng. Với kích thước nhỏ gọn bạn có thể đặt nhiều vị trí khác nhau trong phòng làm việc của mình.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115910/may-in-laser-canon-lbp2900-5.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP2900 - Thiết kế đơn giản, gọn gàng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-5.jpg" class="lazy" title="Máy in Laser Canon LBP2900 - Thiết kế đơn giản, gọn gàng" src="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-5.jpg" style="display: block;"></a></p><h3>Tốc độ in nhanh</h3><p>Với 9.3 giây cho trang in đầu tiên, bạn có ngay một bản in hoàn hảo mà không cần chờ lâu. Với tốc độ 12 trang/phút từ&nbsp;<a href="https://www.thegioididong.com/may-in" target="_blank" title="Máy in">máy in</a>&nbsp;với giấy A4 bạn vẫn hoàn toàn đáp ứng nhu cầu công việc hàng ngày của mình.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115910/may-in-laser-canon-lbp2900-6.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP2900 - Tốc độ in nhanh chóng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-6.jpg" class="lazy" title="Máy in Laser Canon LBP2900 - Tốc độ in nhanh chóng" src="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-6.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/may-in-laser" target="_blank" title="Máy in laser trắng đen">Máy in laser trắng đen</a> rõ nét</h3><p><a href="https://www.thegioididong.com/may-in-canon" target="_blank" title="Máy in Canon">Máy in Canon</a> này&nbsp;được trang bị độ phân giải 600 x 2400 dpi cho bạn những bản in rõ nét mà không cần lo lắng vấn đề mờ bản in hay gặp.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115910/may-in-laser-canon-lbp2900-10.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP2900 - In laser trắng đen" data-original="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-10.jpg" class="lazy" title="Máy in Laser Canon LBP2900 - In laser trắng đen" src="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-10.jpg" style="display: block;"></a></p><h3>Khay nạp giấy 150 tờ cùng khay chứa giấy đã in 100 tờ tiện lợi cho quá trình sử dụng liên tục</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115910/may-in-laser-canon-lbp2900-8.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP2900 - Khay chứa giấy" data-original="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-8.jpg" class="lazy" title="Máy in Laser Canon LBP2900 - Khay chứa giấy" src="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-8.jpg" style="display: block;"></a></p><h3>Bảng điều khiển trực quan, dễ dàng thao tác</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115910/13may-in-laser-canon-lbp2900-1.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP2900 - Bảng điều khiển" data-original="https://cdn.tgdd.vn/Products/Images/5693/115910/13may-in-laser-canon-lbp2900-1.jpg" class="lazy" title="Máy in Laser Canon LBP2900 - Bảng điều khiển" src="https://cdn.tgdd.vn/Products/Images/5693/115910/13may-in-laser-canon-lbp2900-1.jpg" style="display: block;"></a></p><h3>Cổng kết nối 2.0 dễ dàng kết nối</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115910/may-in-laser-canon-lbp2900-15.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP2900 -  kết nối" data-original="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-15.jpg" class="lazy" title="Máy in Laser Canon LBP2900 -  kết nối" src="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-15.jpg" style="display: block;"></a></p><h3>Bảo vệ máy in, kéo dài thời gian sử dụng với mực in chính hãng của <a href="https://www.thegioididong.com/muc-in/hop-muc-cartridge-canon-303-danh-cho-canon-lbp2900" target="_blank">Cartridge Canon 303</a></h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115910/may-in-laser-canon-lbp2900-11.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP2900 - Mực in chính hãng " data-original="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-11.jpg" class="lazy" title="Máy in Laser Canon LBP2900 - Mực in chính hãng " src="https://cdn.tgdd.vn/Products/Images/5693/115910/may-in-laser-canon-lbp2900-11.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In laser trắng đen'],
                ['key' => 'Chức năng', 'value' => 'In 1 mặt'],
                ['key' => 'Số trang in hộp mực kèm theo máy (Độ phủ 5% trang A4)', 'value' => 'Khoảng 1000 - 1400 trang'],
                ['key' => 'Tốc độ in', 'value' => '12 trang/phút'],
                ['key' => 'Tuổi thọ in', 'value' => '12.000 trang/tháng'],
                ['key' => 'Công suất in khuyến nghị', 'value' => '200-800 trang/tháng'],
                ['key' => 'Loại mực in', 'value' => 'Mực in Cartridge 303'],
                ['key' => 'Chất lượng in', 'value' => '2400 x 600 dpi'],
                ['key' => 'Thời gian in trang đầu tiên', 'value' => '9 giây'],
                ['key' => 'Cổng kết nối', 'value' => '1 x USB 2.0'],
                ['key' => 'Khay nạp giấy', 'value' => '150 tờ'],
                ['key' => 'Khay chứa giấy đã in', 'value' => '100 tờ'],
            ]),
            'price' => 3190000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'may-in-laser-canon-lbp2900-xam-up-1-org.jpg',
            'may-in-laser-canon-lbp2900-xam-up-2-org.jpg',
            'may-in-laser-canon-lbp2900-xam-up-3-org.jpg',
            'may-in-laser-canon-lbp2900-xam-up-4-org.jpg',
            'may-in-laser-canon-lbp2900-xam-up-5-org.jpg',
            'may-in-laser-canon-lbp2900-xam-up-6-org.jpg',
            'may-in-laser-canon-lbp2900-xam-up-7-org.jpg',
            'may-in-laser-canon-lbp2900-xam-up-8-org.jpg',
            'may-in-laser-canon-lbp2900-xam-up-9-org.jpg',
            'may-in-laser-canon-lbp2900-xam-up-10-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/canon-2900/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/canon-2900/copy-' . $fileName))) {
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

        //SP6
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 4,
            'category_id' => 1,
            'name' => 'Máy in Laser Brother HL-L2366DW Wifi',
            'slug' => Str::of('Máy in Laser Brother HL-L2366DW Wifi')->slug('-'),
            'description' => 'Máy in laser Brother HL-L2366DW Wifi có kiểu dáng khá nhỏ gọn, thích hợp với nhiều không gian văn phòng hay làm việc tại nhà. Ngoài ra, kết hợp cùng với gam màu đen tạo nên sự hiện đại, chắc chắn và dễ dàng vệ sinh.',
            'content' => '<h3>Kiểu dáng hiện đại, nhỏ gọn</h3><p><a href="https://www.thegioididong.com/may-in/may-in-laser-brother-hl-l2366dw" target="_blank" title="Máy in Laser Brother HL-L2366DW Wifi">Máy in laser Brother HL-L2366DW&nbsp;Wifi</a> có kiểu dáng khá nhỏ gọn, thích hợp với nhiều không gian văn phòng hay làm việc tại nhà. Ngoài ra, kết hợp cùng với gam màu đen tạo nên sự hiện đại, chắc chắn và dễ dàng vệ sinh.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115888/may-in-laser-brother-hl-l2366dw-19.jpg" onclick="return false;"><img alt="Máy in laser Brother HL-L2366DW - Thiết kế hiện đại, nhỏ gọn" data-original="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-19.jpg" class="lazy" title="Máy in laser Brother HL-L2366DW - Thiết kế hiện đại, nhỏ gọn" src="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-19.jpg" style="display: block;"></a></p><h3>Chất lượng bản in đẹp và in hai mặt tự động</h3><p><a href="https://www.thegioididong.com/may-in-brother" target="_blank" title="Máy in Brother ">Máy in Brother </a>này phù hợp với nhu cầu in văn bản đen trắng với độ phân giải tối đa là 2400 x 600 dpi, cho chất lượng hình ảnh tốt, rõ nét. Ngoài ra tính năng<a href="https://www.thegioididong.com/hoi-dap/cac-tinh-nang-chinh-cua-mot-may-in-da-nang-1170886#hmenuid2" target="_blank" title=" in hai mặt tự động"> in hai mặt tự động</a> giúp cho bạn tiết kiệm thời gian và giấy in hơn.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115888/may-in-laser-brother-hl-l2366dw-24.jpg" onclick="return false;"><img alt="Máy in laser Brother HL-L2366DW - In chất lượng tốt" data-original="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-24.jpg" class="lazy" title="Máy in laser Brother HL-L2366DW - In chất lượng tốt" src="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-24.jpg" style="display: block;"></a></p><h3>Kết nối máy in đa dạng, tiện lợi</h3><p><a href="https://www.thegioididong.com/may-in-laser" target="_blank" title="Máy in laser trắng đen">Máy in laser trắng đen</a> được hãng trang bị kết nối USB 2.0 và mạng LAN dễ dàng kết nối với các thiết bị bên ngoài. Ngoài ra còn có thể in qua thiết bị di động (qua wifi direct kết nối máy in &amp; điện thoại, hoặc qua wifi nhà, văn phòng) giúp bạn dễ dàng in tài liệu từ điện thoại của mình.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115888/may-in-laser-brother-hl-l2366dw.jpg" onclick="return false;"><img alt="Máy in laser Brother HL-L2366DW - Kết nối tiện dụng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw.jpg" class="lazy" title="Máy in laser Brother HL-L2366DW - Kết nối tiện dụng" src="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw.jpg" style="display: block;"></a></p><h3>Tốc độ in nhanh chóng</h3><p><a href="https://www.thegioididong.com/may-in" target="_blank" title="Máy in">Máy in</a> Brother HL-L2366DW cho tốc độ in tối đa lên đến 30 trang/phút, đáp ứng rất tốt nhu cầu in ấn của các doanh nghiệp.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115888/may-in-laser-brother-hl-l2366dw-25.jpg" onclick="return false;"><img alt="Máy in laser Brother HL-L2366DW - Tốc độ nhanh chóng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-25.jpg" class="lazy" title="Máy in laser Brother HL-L2366DW - Tốc độ nhanh chóng" src="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-25.jpg" style="display: block;"></a></p><h3>Khay nạp giấy 200 tờ cùng khay đựng giấy đã in 100 tờ giúp thuận tiện hơn khi sử dụng <a href="https://www.thegioididong.com/may-in?g=in-wifi" target="_blank" title="máy in wifi">máy in wifi</a> liên tục</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115888/may-in-laser-brother-hl-l2366dw-21.jpg" onclick="return false;"><img alt="Máy in laser Brother HL-L2366DW - Khay nạp giấy tiện dụng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-21.jpg" class="lazy" title="Máy in laser Brother HL-L2366DW - Khay nạp giấy tiện dụng" src="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-21.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/hoi-dap/cac-tinh-nang-chinh-cua-mot-may-in-da-nang-1170886#in-hai-mat-tu-dong" target="_blank" title="Máy in 2 mặt tự động">Máy in 2 mặt tự động</a> có bảng điều khiển trực quan, dễ dàng thao tác</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115888/may-in-laser-brother-hl-l2366dw-20.jpg" onclick="return false;"><img alt="Máy in laser Brother HL-L2366DW - Bảng điều khiển trực quan" data-original="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-20.jpg" class="lazy" title="Máy in laser Brother HL-L2366DW - Bảng điều khiển trực quan" src="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-20.jpg" style="display: block;"></a></p><h3>Tiết kiệm chi phí, bản in đẹp, bền màu với mực in <a href="https://www.thegioididong.com/muc-in/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d" target="_blank">TN-2385</a></h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115888/may-in-laser-brother-hl-l2366dw-18.jpg" onclick="return false;"><img alt="Máy in laser Brother HL-L2366DW - Tiết kiệm chi phí in ấn" data-original="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-18.jpg" class="lazy" title="Máy in laser Brother HL-L2366DW - Tiết kiệm chi phí in ấn" src="https://cdn.tgdd.vn/Products/Images/5693/115888/may-in-laser-brother-hl-l2366dw-18.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In laser trắng đen'],
                ['key' => 'Chức năng', 'value' => 'In wifi, In 2 mặt'],
                ['key' => 'Số trang in hộp mực kèm theo máy (Độ phủ 5% trang A4)', 'value' => 'Khoảng 2600 trang'],
                ['key' => 'Tốc độ in', 'value' => '	30 trang/phút'],
                ['key' => 'Tuổi thọ in', 'value' => '12.000 trang/tháng'],
                ['key' => 'Công suất in khuyến nghị', 'value' => '200-800 trang/tháng'],
                ['key' => 'Loại mực in', 'value' => 'Brother TN 2385'],
                ['key' => 'Chất lượng in', 'value' => '2400 x 600 dpi'],
                ['key' => 'Thời gian in trang đầu tiên', 'value' => '9 giây'],
                ['key' => 'Cổng kết nối', 'value' => '1 x USB 2.0'],
                ['key' => 'Khay nạp giấy', 'value' => '	250 tờ'],
                ['key' => 'Khay chứa giấy đã in', 'value' => '200 tờ'],
            ]),
            'price' => 3690000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'may-in-laser-brother-hl-l2366dw-mau-den-1-org.jpg',
            'may-in-laser-brother-hl-l2366dw-mau-den-2-org.jpg',
            'may-in-laser-brother-hl-l2366dw-mau-den-3-org.jpg',
            'may-in-laser-brother-hl-l2366dw-mau-den-4-org.jpg',
            'may-in-laser-brother-hl-l2366dw-mau-den-5-org.jpg',
            'may-in-laser-brother-hl-l2366dw-mau-den-6-org.jpg',
            'may-in-laser-brother-hl-l2366dw-mau-den-7-org.jpg',
            'may-in-laser-brother-hl-l2366dw-mau-den-8-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/brother-hl-l2366dw/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/brother-hl-l2366dw/copy-' . $fileName))) {
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

        //SP7
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 4,
            'category_id' => 1,
            'name' => 'Máy in Laser đa năng Brother DCP-L2520D',
            'slug' => Str::of('Máy in Laser đa năng Brother DCP-L2520D')->slug('-'),
            'description' => 'Máy in laser Brother DCP L2520D sở hữu trên mình thiết kế đơn giản, đường nét cứng cáp, kết hợp màu đen sang trọng, mạnh mẽ giúp cho phòng làm việc thêm chuyên nghiệp.',
            'content' => '<h3>Thiết kế đơn giản, hiện đại, tông màu cứng cáp</h3><p><a href="https://www.thegioididong.com/may-in/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo" target="_blank" title="Máy in laser Brother DCP L2520D"><strong>Máy in laser Brother DCP L2520D</strong></a> sở hữu trên mình thiết kế đơn giản, đường nét cứng cáp, kết hợp màu đen sang trọng, mạnh mẽ giúp cho phòng làm việc thêm chuyên nghiệp.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-18.jpg" onclick="return false;"><img alt="Máy in laser Brother DCP L2520D đa chức năng - Thiết kế hiện đại, cứng cáp" data-original="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-18.jpg" class="lazy" title="Máy in laser Brother DCP L2520D đa chức năng - Thiết kế hiện đại, cứng cáp" src="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-18.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/may-in" target="_blank" title="Máy in">Máy in</a> đa tính năng dành riêng cho doanh nghiệp</h3><p><a href="https://www.thegioididong.com/may-in-brother" target="_blank" title="Máy in Brother">Máy in Brother</a>&nbsp;này ngoài tính năng chính là in, thì còn được trang bị thêm tính năng photo, scan tiện lợi, đáp ứng mọi nhu cầu đa dạng của người dùng.</p><p>Đặc biệt, với chế độ <a href="https://www.thegioididong.com/hoi-dap/cac-tinh-nang-chinh-cua-mot-may-in-da-nang-1170886#hmenuid2" target="_blank" title="in hai mặt tự động ">in hai mặt tự động </a>giúp người dùng in nhanh chóng mà không cần lật giấy bằng tay, tiết kiệm thời gian.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-17.jpg" onclick="return false;"><img alt="Máy in laser Brother DCP L2520D đa chức năng - Đa chức năng sử dụng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-17.jpg" class="lazy" title="Máy in laser Brother DCP L2520D đa chức năng - Đa chức năng sử dụng" src="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-17.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/may-in?g=copy" target="_blank" title="Máy in copy">Máy in copy</a> với tốc độ in mạnh mẽ</h3><p>Máy in laser Brother DCP có tốc độ in lên đến <strong>30 trang/phút</strong> giúp người dùng đáp ứng tốt được tải công việc in ấn hàng ngày. <strong>Khay chứa giấy 250 tờ</strong> giúp bạn in liên tục mà không cần phải nạp giấy thường xuyên.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-19.jpg" onclick="return false;"><img alt="Máy in laser Brother DCP L2520D đa chức năng - Công suất hoạt động hiệu quả" data-original="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-19.jpg" class="lazy" title="Máy in laser Brother DCP L2520D đa chức năng - Công suất hoạt động hiệu quả" src="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-19.jpg" style="display: block;"></a></p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-21.jpg" onclick="return false;"><img alt="Máy in laser Brother DCP L2520D đa chức năng - Khay đựng giấy tiện lợi" data-original="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-21.jpg" class="lazy" title="Máy in laser Brother DCP L2520D đa chức năng - Khay đựng giấy tiện lợi" src="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-21.jpg" style="display: block;"></a></p><h3>Chất lượng bản in tuyệt hảo</h3><p><a href="https://www.thegioididong.com/may-in-laser" target="_blank" title="Máy in laser trắng đen">Máy in laser trắng đen</a> này có <strong>độ phân giải lên đến 2400 x 600 dpi </strong>giúp bạn có những bản in đẹp, rõ các chi tiết in nhỏ. Bên cạnh đó tính năng photo với <strong>độ phân giải 600 x 600 dpi </strong>cho những bản sao chất lượng.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-23.jpg" onclick="return false;"><img alt="Máy in laser Brother DCP L2520D đa chức năng - Chất lượng in tốt" data-original="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-23.jpg" class="lazy" title="Máy in laser Brother DCP L2520D đa chức năng - Chất lượng in tốt" src="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-23.jpg" style="display: block;"></a></p><h3>Bảng điều khiển trực quan, dễ dàng thao tác nhanh chóng</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-20.jpg" onclick="return false;"><img alt="Máy in laser Brother DCP L2520D đa chức năng - Bảng điều khiển dễ dàng sử dụng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-20.jpg" class="lazy" title="Máy in laser Brother DCP L2520D đa chức năng - Bảng điều khiển dễ dàng sử dụng" src="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-20.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/may-in?g=scan" target="_blank" title="Máy in scan">Máy in Scan</a> kết nối USB 2.0 tiện lợi, linh hoạt trong quá trình sử dụng</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-22.jpg" onclick="return false;"><img alt="Máy in laser Brother DCP L2520D đa chức năng - Kết nối tiện dụng" data-original="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-22.jpg" class="lazy" title="Máy in laser Brother DCP L2520D đa chức năng - Kết nối tiện dụng" src="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-22.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/hoi-dap/cac-tinh-nang-chinh-cua-mot-may-in-da-nang-1170886#in-hai-mat-tu-dong" target="_blank" title="Máy in 2 mặt tự động">Máy in 2 mặt tự động</a> tiết kiệm chi phí in ấn với mực in chính hãng <a href="https://www.thegioididong.com/muc-in/hop-muc-brother-tn-2385-danh-cho-brother-dcpl2520d" target="_blank">TN-2385</a></h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-24.jpg" onclick="return false;"><img alt="Máy in laser Brother DCP L2520D đa chức năng - Tiết kiệm chi phí in ấn" data-original="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-24.jpg" class="lazy" title="Máy in laser Brother DCP L2520D đa chức năng - Tiết kiệm chi phí in ấn" src="https://cdn.tgdd.vn/Products/Images/5693/115899/may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-24.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In laser trắng đen'],
                ['key' => 'Chức năng', 'value' => 'Copy, Scan, In 2 mặt'],
                ['key' => 'Số trang in hộp mực kèm theo máy (Độ phủ 5% trang A4)', 'value' => 'Khoảng 2600 trang'],
                ['key' => 'Tốc độ in', 'value' => '	30 trang/phút'],
                ['key' => 'Tuổi thọ in', 'value' => '12.000 trang/tháng'],
                ['key' => 'Công suất in khuyến nghị', 'value' => '‎250-2000 trang/tháng'],
                ['key' => 'Loại mực in', 'value' => 'Brother TN 2385'],
                ['key' => 'Chất lượng in', 'value' => '2400 x 600 dpi'],
                ['key' => 'Thời gian in trang đầu tiên', 'value' => '8 giây'],
                ['key' => 'Cổng kết nối', 'value' => '1 x USB 2.0'],
                ['key' => 'Khay nạp giấy', 'value' => '	250 tờ'],
                ['key' => 'Khay chứa giấy đã in', 'value' => '200 tờ'],
            ]),
            'price' => 4390000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-xam-1-org.jpg',
            'may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-xam-2-org.jpg',
            'may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-xam-3-org.jpg',
            'may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-xam-4-org.jpg',
            'may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-xam-5-org.jpg',
            'may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-xam-6-org.jpg',
            'may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-xam-7-org.jpg',
            'may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-xam-8-org.jpg',
            'may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-xam-9-org.jpg',
            'may-in-da-chuc-nang-brother-dcp-l2520d-in-photo-xam-10-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/brother-dcp-l2520d/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/brother-dcp-l2520d/copy-' . $fileName))) {
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

        //SP8
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 4,
            'category_id' => 1,
            'name' => 'Máy in phun màu đa năng In Scan Copy Brother DCP-T510W Wifi',
            'slug' => Str::of('Máy in phun màu đa năng In Scan Copy Brother DCP-T510W Wifi')->slug('-'),
            'description' => 'Máy in Brother DCP-T510W thiết kế sang trọng, gọn đẹp. Kiểu dáng chắc chắn, cứng cáp, đặt vững vàng trên mặt bàn, kệ tủ trong gia đình, văn phòng công ty. ',
            'content' => '<h3><a href="https://www.thegioididong.com/may-in" target="_blank" title="Máy in">Máy in</a>&nbsp;Brother DCP-T510W thiết kế sang trọng, gọn đẹp</h3><p>Kiểu dáng chắc chắn, cứng cáp, đặt vững vàng trên mặt bàn, kệ tủ trong gia đình, văn phòng công ty.&nbsp;</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093230.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Thiết kế sang trọng, gọn đẹp" data-original="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093230.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Thiết kế sang trọng, gọn đẹp" src="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093230.jpg" style="display: block;"></a></p><h3>Bản in rõ ràng, không nhòe hình</h3><p>Độ phân giải&nbsp;1200 x 6000 dpi của <a href="https://www.thegioididong.com/may-in-brother" target="_blank" title="Máy in Brother">máy in Brother</a>&nbsp;tạo ra các bản in có chất lượng cao, bản màu chân thật, hiển thị rõ ràng các màu sắc.</p><p>Ngoài ra, độ phân giải của bản copy&nbsp;1200 x 600 dpi, scan 1200 x 2400 dpi cũng mang đến cho bạn những bản sao, bản scan nét, đẹp, tránh tối đa các trường hợp nhiễu, nhòe hình.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-094820-114840.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Bản in rõ ràng, không nhòe hình" data-original="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-094820-114840.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Bản in rõ ràng, không nhòe hình" src="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-094820-114840.jpg" style="display: block;"></a></p><h3>Dễ dàng sử dụng điều khiển nút nhấn và màn hình LCD 1 dòng&nbsp;</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093238.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Dễ dàng sử dụng" data-original="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093238.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Dễ dàng sử dụng" src="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093238.jpg" style="display: block;"></a></p><h3>Tốc độ in mạnh mẽ, đa chức năng</h3><p><a href="https://www.thegioididong.com/may-in/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t" target="_blank" title="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W">Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W</a>&nbsp;có in 6 ảnh/phút (in màu), 12 ảnh/phút (in trắng đen), tuổi thọ in được 12000 trang/tháng, công suất khuyến nghị tới 250 - 2000 trang/tháng&nbsp;cho bạn in tài liệu nhanh, ổn định.</p><p>Chức năng in 1 mặt, in wifi, scan, copy tiện lợi cho bạn nhiều phương pháp lựa chọn in ấn để đạt hiệu quả công việc tốt nhất.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-094320-094313.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Tốc độ in mạnh mẽ, đa chức năng" data-original="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-094320-094313.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Tốc độ in mạnh mẽ, đa chức năng" src="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-094320-094313.jpg" style="display: block;"></a></p><h3>Hiệu suất in cao với khay nạp&nbsp;giấy&nbsp;chứa 150 tờ, khay chứa giấy đã in 50 tờ&nbsp;</h3><p>Thiết kế khay in <a href="https://www.thegioididong.com/may-in?g=copy" target="_blank" title="Máy in copy">máy in copy</a>&nbsp;hỗ trợ chứa đựng nhiều loại giấy cho việc xử lý giấy in linh hoạt, tính năng sao chép nhiều văn bản trên 1 trang, hạn chế lãng phí giấy in, cho bạn sắp xếp các văn bản gọn hơn.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093244.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Hiệu suất in cao" data-original="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093244.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Hiệu suất in cao" src="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093244.jpg" style="display: block;"></a></p><h3>Trang bị kết nối linh hoạt</h3><p>Ngoài cổng USB 2,0, mẫu máy in này của Brother còn in wifi, in không dây trực tiếp, tích hợp nhiều công nghệ in hiện đại gồm&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cac-cong-nghe-in-khong-day-tren-may-in-1164612" target="_blank" title="Wi-Fi Direct">Wi-Fi Direct</a>,&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cac-cong-nghe-in-khong-day-tren-may-in-1164612" target="_blank" title="iPrint &amp; Scan">iPrint &amp; Scan</a>,&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cac-cong-nghe-in-khong-day-tren-may-in-1164612" target="_blank" title="Google Cloud Print 2.0">Google Cloud Print 2.0</a>,&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cac-cong-nghe-in-khong-day-tren-may-in-1164612" target="_blank" title="AirPrint">AirPrint</a>, phù hợp với các thiết bị vận hành với hệ điều hành&nbsp;iOS, Android,&nbsp;Windows cho người dùng ghép nối thiết bị phong phú, in tài liệu nhanh gọn mọi lúc mọi nơi.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-094820-114834.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Trang bị kết nối linh hoạt" data-original="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-094820-114834.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Trang bị kết nối linh hoạt" src="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-094820-114834.jpg" style="display: block;"></a></p><h3>Nên dùng mực in chính hãng để kéo dài tuổi thọ <a href="https://www.thegioididong.com/may-in?g=scan" target="_blank" title="Máy in scan">máy in scan</a>&nbsp;</h3><p>Hãng Brother khuyên mọi người sử dụng mực in&nbsp;BTD60 BK, BT5000 C/M/Y chính hãng để có những bản in đẹp, đạt chuẩn và kéo dài độ bền cho <a href="https://www.thegioididong.com/may-in?g=in-wifi" target="_blank" title="máy in wifi">máy in wifi</a>. Đặc biệt, bình mực chứa lượng lớn mực in có khả năng in được 5000 - 6500 ảnh/bình, giúp tiết kiệm chi phí doanh nghiệp tối ưu.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093256.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Nên dùng mực in chính hãng" data-original="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093256.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Brother DCP-T510W - Nên dùng mực in chính hãng" src="https://cdn.tgdd.vn/Products/Images/5693/226070/may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-093220-093256.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In phun màu'],
                ['key' => 'Chức năng', 'value' => 'Scan, Copy, In wifi, In 1 mặt'],
                ['key' => 'Số trang in hộp mực kèm theo máy (Độ phủ 5% trang A4)', 'value' => 'Khoảng 6500 trang'],
                ['key' => 'Tốc độ in', 'value' => '12 ảnh/phút (Đen trắng) - 6 ảnh/phút (Màu)'],
                ['key' => 'Tuổi thọ in', 'value' => '12.000 trang/tháng'],
                ['key' => 'Công suất in khuyến nghị', 'value' => '250-2000 trang/tháng'],
                ['key' => 'Loại mực in', 'value' => 'Mực in BTD60 BK và BT5000 C/M/Y'],
                ['key' => 'Chất lượng in', 'value' => '	1200 x 6000 dpi'],
                ['key' => 'Thời gian in trang đầu tiên', 'value' => '15 giây'],
                ['key' => 'Cổng kết nối', 'value' => '1 x USB 2.0'],
                ['key' => 'Khay nạp giấy', 'value' => '	250 tờ'],
                ['key' => 'Khay chứa giấy đã in', 'value' => '200 tờ'],
            ]),
            'price' => 4690000.00,
            'discount' => 15,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-1-1-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-2-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-3-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-4-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-5-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-6-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-7-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-8-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-9-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-brother-dcp-t-10-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/brother-dcp-t/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/brother-dcp-t/copy-' . $fileName))) {
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

        //SP9
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 2,
            'category_id' => 1,
            'name' => 'Máy in phun màu đa năng In Scan Copy Canon PIXMA G3010',
            'slug' => Str::of('Máy in phun màu đa năng In Scan Copy Canon PIXMA G3010')->slug('-'),
            'description' => 'Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 thiết kế hiện đại, đường nét tinh tế, hoàn hảo, kiểu dáng dễ dàng lắp đặt và sử dụng trong nhà, văn phòng, cửa hàng,...',
            'content' => '<h3>Màu đen tối giản, gọn đẹp, dễ lắp đặt</h3><p><a href="https://www.thegioididong.com/may-in/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g" target="_blank" title="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010">Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010</a> thiết kế hiện đại, đường nét tinh tế, hoàn hảo, kiểu dáng dễ dàng lắp đặt và sử dụng trong nhà, văn phòng, cửa hàng,...</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293820-123833.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Màu đen tối giản" data-original="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293820-123833.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Màu đen tối giản" src="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293820-123833.jpg" style="display: block;"></a></p><h3>Đa chức năng, tốc độ in cao</h3><p><a href="https://www.thegioididong.com/may-in?g=in-phun-mau" target="_blank" title="Máy in phun màu">Máy in phun màu</a> có chức năng in 1 mặt, in wifi, scan, copy, đáp ứng nhu cầu sử dụng đa dạng của mọi người dùng.</p><p>Tốc độ in 8.8 ảnh/phút (in trắng đen), 5.0 ảnh/phút (in màu), trang đầu in trong 11 giây, công suất in của <a href="https://www.thegioididong.com/may-in?g=copy" target="_blank" title="máy in copy">máy in copy</a> đạt tối đa 5000 trang/phút giúp nâng cao năng suất công việc, hỗ trợ bạn chuẩn bị tài liệu nhanh chóng, tiết kiệm thời gian hơn.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-182420-042411.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Đa chức năng, tốc độ in cao" data-original="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-182420-042411.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Đa chức năng, tốc độ in cao" src="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-182420-042411.jpg" style="display: block;"></a></p><h3>Chất lượng bản in nét với độ phân giải 1200 x 4800 dpi</h3><p><a href="https://www.thegioididong.com/may-in?g=scan" target="_blank" title="Máy in scan">Máy in scan</a> cho bản in rõ ràng từ chữ đến hình ảnh, cho bạn tiếp cận các thông tin trên bản in dễ dàng hơn. So sánh với <a href="https://www.thegioididong.com/may-in-brother" target="_blank" title="máy in Brother">máy in Brother</a> thì bản in nét hơn, màu đen sâu hơn, thấy được các vùng bóng của kiểu chữ. Khi in ảnh cần chỉnh sáng hơn rồi mới in thì bản in mới ra độ sáng tối ưu.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293920-123905.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Chất lượng bản in nét" data-original="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293920-123905.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Chất lượng bản in nét" src="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293920-123905.jpg" style="display: block;"></a></p><h3>Khay nạp giấy in chứa được cùng lúc 100 tờ, khay chứa giấy in là 50 tờ cho cho bạn in liên tục</h3><p>In được giấy A4, A5, B5, có khay để giấy in A5 riêng biệt giúp người dùng thực hiện các thao tác in linh hoạt hơn.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293720-023716.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - In liên tục" data-original="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293720-023716.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - In liên tục" src="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293720-023716.jpg" style="display: block;"></a></p><h3>Bảng điều khiển <a href="https://www.thegioididong.com/may-in" target="_blank" title="máy in">máy in</a> được chỉ dẫn rõ ràng cho từng nút nhấn, tiện sử dụng</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293820-123844.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Bảng điều khiển máy in được chỉ dẫn rõ ràng" data-original="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293820-123844.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Bảng điều khiển máy in được chỉ dẫn rõ ràng" src="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293820-123844.jpg" style="display: block;"></a></p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-132720-012736.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Chi tiết bảng điều khiển" data-original="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-132720-012736.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Chi tiết bảng điều khiển" src="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-132720-012736.jpg" style="display: block;"></a></p><h3>Hỗ trợ in tài liệu qua kết nối Wifi</h3><p><a href="https://www.thegioididong.com/may-in-canon" target="_blank" title="Xem thêm máy in Canon">Máy in Canon</a>&nbsp;hỗ trợ kết nối wifi, tích hợp công nghệ&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cac-cong-nghe-in-khong-day-tren-may-in-1164612" target="_blank" title="Công nghệ Canon Mobile Printing">Canon Mobile Printing</a>,&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cac-cong-nghe-in-khong-day-tren-may-in-1164612" target="_blank" title="Công nghệ Google Cloud Print 2.0">Google Cloud Print 2.0</a>,&nbsp;<a href="https://www.thegioididong.com/tin-tuc/cac-cong-nghe-in-khong-day-tren-may-in-1164612" target="_blank" title="Công nghệ Wi-Fi Direct">Wi-Fi Direct</a>&nbsp;tiên tiến, phù hợp với hệ điều hành&nbsp;Windows 10, Windows 8.1, Windows 7 SP1, cho bạn in ấn tiện lợi từ nhiều thiết bị thông qua mạng Wifi ở mọi nơi mọi lúc.</p><p>Cổng kết nối USB 2.0, kết nối nhanh với&nbsp;<a href="https://www.thegioididong.com/may-in?g=in-wifi" target="_blank" title="Máy in wifi">máy in Wifi</a>, cho bạn in tài liệu từ USB nhanh chóng.&nbsp;</p><p>Đặc biệt, chức năng scan, copy đã có sẵn trên Wi-Fi Direct nên khi dùng ứng dụng này, bạn có thể trực tiếp copy, scan các giấy tờ mình cần, cực đơn giản.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293820-123859.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Hỗ trợ in tài liệu qua kết nối Wifi" data-original="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293820-123859.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Hỗ trợ in tài liệu qua kết nối Wifi" src="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-293820-123859.jpg" style="display: block;"></a></p><h3>Sử dụng mực in&nbsp;GI-790 chính hãng, bền màu cho bản in đẹp với tần suất ổn định cao</h3><p>Hộp GI-790 Black có thể in được 6000 tờ còn hộp mực GI-790 Color là 7000 tờ, cực tiết kiệm chi phí. Tặng kèm có 2 đầu phun B, C, 1 lọ mực đen và 3 lọ mực màu.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-013020-043026.jpg" onclick="return false;"><img alt="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Sử dụng mực in GI-790 chính hãng" data-original="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-013020-043026.jpg" class="lazy" title="Máy in phun màu đa năng In-Scan-Copy Canon PIXMA G3010 - Sử dụng mực in GI-790 chính hãng" src="https://cdn.tgdd.vn/Products/Images/5693/225001/may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-013020-043026.jpg" style="display: block;"></a></p><h3>Cách kết nối:</h3><p><strong>Wi-Fi Direct:</strong></p><p>- Kết nối laptop: Bấm nút "Direct" trên máy in, ở laptop chọn mục "Wifi" dò tên&nbsp;Direct của máy in kết nối, mật khẩu chính là tên seri của máy rồi vào Printers &amp; Scannes trên laptop tìm tên máy, chọn thêm. Kết nối với dây cáp USB, chỉ cắm dây vào thiết bị là tự kết nối với laptop chạy hệ điều hành Windows 10.</p><p>- Kết nối điện thoại: Bật wifi trên điện thoại, vào mục "Wifi"&nbsp;tìm tên&nbsp;Direct máy in rồi kết nối với mật khẩu gõ tương tự.&nbsp;</p><p><strong>Kết nối wifi internet:</strong></p><p>- Kết nối laptop: Vào web hãng ở địa chỉ: ij.start.canon, nhấn chọn "Thiết lập", nhập tên model của máy in, chọn chữ "Go", nhấn "Download" và tiến hành cài đặt để tải drivers, những ứng dụng cần thiết.</p><p>-&nbsp;Kết nối điện thoại: Vào kho ứng dụng, tìm và tải Canon Print về điện thoại, reset lại máy in sau đó ấn vào nút&nbsp;Direct ở bảng điều khiển cho đến khi màn hình nhấp nháy thì bạn mở Canon Print trên điện thoại, dò tìm và kết nối wifi.</p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In phun màu'],
                ['key' => 'Chức năng', 'value' => 'Scan, Copy, In wifi, In 1 mặt'],
                ['key' => 'Số trang in hộp mực kèm theo máy (Độ phủ 5% trang A4)', 'value' => 'Khoảng 7000 trang'],
                ['key' => 'Tốc độ in', 'value' => '	8.8 ảnh/phút (Đen trắng) - 5 ảnh/phút (Màu)'],
                ['key' => 'Tuổi thọ in', 'value' => '12.000 trang/tháng'],
                ['key' => 'Công suất in khuyến nghị', 'value' => '150-1500 trang/tháng'],
                ['key' => 'Loại mực in', 'value' => '	GI-790 (Black), GI-790(Cyan, Magenta, Yellow)'],
                ['key' => 'Chất lượng in', 'value' => '	1200 x 4800 dpi'],
                ['key' => 'Thời gian in trang đầu tiên', 'value' => '11 giây'],
                ['key' => 'Cổng kết nối', 'value' => '1 x USB 2.0'],
                ['key' => 'Khay nạp giấy', 'value' => '	100 tờ'],
                ['key' => 'Khay chứa giấy đã in', 'value' => '150 tờ'],
            ]),
            'price' => 5590000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-1-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-2-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-3-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-4-org.jpg',
            'may-in-phun-mau-da-nang-in-scan-copy-canon-pixma-g-5-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/canon-pixma-g/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/canon-pixma-g/copy-' . $fileName))) {
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

        //SP10
        $productId = DB::table('products')->insertGetId([
            'vendor_id' => 2,
            'category_id' => 1,
            'name' => 'Máy in Laser Canon LBP214dw Wifi',
            'slug' => Str::of('Máy in Laser Canon LBP214dw Wifi')->slug('-'),
            'description' => 'Máy in Laser Canon LBP214dw Wifi với trọng lượng nhẹ cùng kiểu dáng thanh lịch hơn so với nhiều máy in truyền thống khác nên rất dễ dàng cho việc di chuyển, lắp đặt. Máy rất thích hợp sử dụng tại nhà, trong văn phòng, cửa hàng.',
            'content' => '<h3>Thiết kế thanh lịch, ấn tượng</h3><p><a href="https://www.thegioididong.com/may-in/may-in-laser-canon-lbp214dw-wifi" target="_blank" title="Máy in Laser Canon LBP214dw Wifi">Máy in Laser Canon LBP214dw Wifi</a>&nbsp;với trọng lượng nhẹ cùng kiểu dáng thanh lịch hơn so với nhiều máy in truyền thống khác nên rất dễ dàng cho việc di chuyển, lắp đặt. Máy rất thích hợp sử dụng tại nhà, trong văn phòng, cửa hàng.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/204887/may-in-laser-canon-lbp214dw-wifi-14.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP214dw wifi - Thiết kế" data-original="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-14.jpg" class="lazy" title="Máy in Laser Canon LBP214dw wifi - Thiết kế" src="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-14.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/may-in?g=in-2-mat" target="_blank" title="Máy in 2 mặt tự động">Máy in 2 mặt tự động</a> cho chất lượng bản in cao</h3><p>Độ phân giải 2400 x 600 dpi được trang bị trên <a href="https://www.thegioididong.com/may-in?g=in-wifi" target="_blank" title="Máy in Wifi">máy in Wifi</a> này sẽ hạn chế các tình trạng bản in bị mờ, không sát với bản gốc, giấy, nhàu, gây khó khăn cho người dùng.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/204887/may-in-laser-canon-lbp214dw-wifi-18.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP214dw Wifi - In 2 mặt" data-original="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-18.jpg" class="lazy" title="Máy in Laser Canon LBP214dw Wifi - In 2 mặt" src="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-18.jpg" style="display: block;"></a></p><h3>Kết nối với USB nhanh chóng để in ấn</h3><p>Ngoài ra, kết nối&nbsp;wifi hỗ trợ&nbsp;người dùng kết nối&nbsp;<a href="https://www.thegioididong.com/may-in" target="_blank" title="máy in">máy in</a>&nbsp;với các thiết bị di động như laptop, điện thoại, máy tính bảng... mà không cần dùng dây cáp.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/204887/may-in-laser-canon-lbp214dw-wifi-20-1.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP214dw Wifi - Hỗ trợ kết nối" data-original="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-20-1.jpg" class="lazy" title="Máy in Laser Canon LBP214dw Wifi - Hỗ trợ kết nối" src="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-20-1.jpg" style="display: block;"></a></p><h3>Tốc độ in tối đa 38 trang/phút, 80.000 trang/tháng</h3><p><a href="https://www.thegioididong.com/may-in-canon" target="_blank" title="Máy in Canon">Máy in Canon</a>&nbsp;có khả năng in ra trang đầu chỉ trong 5.7 giây, cùng với công suất in tối đa&nbsp;80.000 trang/tháng, đủ khả năng đáp ứng nhu cầu in ấn cho mọi doanh nghiệp cũng như kinh doanh cá nhân.</p><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/204887/may-in-laser-canon-lbp214dw-wifi-15.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP214dw Wifi - Tốc độ in" data-original="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-15.jpg" class="lazy" title="Máy in Laser Canon LBP214dw Wifi - Tốc độ in" src="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-15.jpg" style="display: block;"></a></p><h3><a href="https://www.thegioididong.com/may-in-laser" target="_blank" title="Máy in laser trắng đen">Máy in laser trắng đen</a>&nbsp;có sức chứa khay đựng giấy đã in 150 tờ cùng khay nạp giấy 250 tờ</h3><h3><a class="preventdefault" href="https://www.thegioididong.com/images/5693/204887/may-in-laser-canon-lbp214dw-wifi-17.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP214dw Wifi - Khay đựng giấy" data-original="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-17.jpg" class="lazy" title="Máy in Laser Canon LBP214dw Wifi - Khay đựng giấy" src="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-17.jpg" style="display: block;"></a></h3><h3>Khuyến khích sử dụng mực in chính hãng&nbsp;Cartridge 052</h3><p><a class="preventdefault" href="https://www.thegioididong.com/images/5693/204887/may-in-laser-canon-lbp214dw-wifi-20.jpg" onclick="return false;"><img alt="Máy in Laser Canon LBP214dw Wifi - Mực in chính hãng " data-original="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-20.jpg" class="lazy" title="Máy in Laser Canon LBP214dw Wifi - Mực in chính hãng " src="https://cdn.tgdd.vn/Products/Images/5693/204887/may-in-laser-canon-lbp214dw-wifi-20.jpg" style="display: block;"></a></p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In laser trắng đen'],
                ['key' => 'Chức năng', 'value' => 'In 1 mặt, In 2 mặt'],
                ['key' => 'Số trang in hộp mực kèm theo máy (Độ phủ 5% trang A4)', 'value' => 'Khoảng 1500 - 2200 trang'],
                ['key' => 'Tốc độ in', 'value' => '38 trang/phút'],
                ['key' => 'Tuổi thọ in', 'value' => '80.000 trang/tháng'],
                ['key' => 'Công suất in khuyến nghị', 'value' => '750-4000 trang/tháng'],
                ['key' => 'Loại mực in', 'value' => 'Cartridge 052'],
                ['key' => 'Chất lượng in', 'value' => '2400 x 600 dpi'],
                ['key' => 'Thời gian in trang đầu tiên', 'value' => '5.7 giây'],
                ['key' => 'Cổng kết nối', 'value' => '1 x USB 2.0'],
                ['key' => 'Khay nạp giấy', 'value' => '250 tờ'],
                ['key' => 'Khay chứa giấy đã in', 'value' => '150 tờ'],
            ]),
            'price' => 6690000.00,
            'discount' => 10,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = Product::find($productId);
        // update product images
        $productImages = [
            'may-in-laser-canon-lbp214dw-wifi-2-1-org.jpg',
            'may-in-laser-canon-lbp214dw-wifi-3-1-org.jpg',
            'may-in-laser-canon-lbp214dw-wifi-4-1-org.jpg',
            'may-in-laser-canon-lbp214dw-wifi-5-1-org.jpg',
            'may-in-laser-canon-lbp214dw-wifi-6-1-org.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/canon-lbp214dw/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/canon-lbp214dw/copy-' . $fileName))) {
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
