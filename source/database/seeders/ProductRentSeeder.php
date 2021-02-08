<?php

namespace Database\Seeders;

use App\Models\MediaProductRent;
use App\Models\ProductRent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductRentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SP1
        $productId = DB::table('products_rent')->insertGetId([
            'vendor_id' => 3,
            'name' => 'Máy photocopy Fuji Xerox S2110 + DADF + Duplex (Copy/In mạng /Scan mạng/ DADF + Duplex)',
            'slug' => Str::of('Máy photocopy Fuji Xerox S2110 + DADF + Duplex (Copy/In mạng /Scan mạng/ DADF + Duplex)')->slug('-'),
            'description' => 'Máy photocopy Fuji Xerox S2110 tích hợp sẵn tính năng in hai mặt tự động (bộ đảo bản sao tự động Duplex) và khay nạp giấy tự động (bộ nạp bản gốc tự động DADF) cho phép người dùng Copy/Scan liên tục một tập tài liệu đến 110 tờ, giúp bạn xử lý công việc nhanh chóng và hiệu quả hơn.',
            'content' => '<h2><span style="font-size: 10pt;">Máy photocopy Fuji Xerox S2110 + DADF + Duplex (Copy/In mạng /Scan&nbsp; mạng/ DADF + Duplex)</span></h2>
                        <p><span style="font-size: 10pt;"><strong><span style="color: #800080;"><a style="color: #800080;" title="Máy photocopy Fuji Xerox S2110" href="https://www.phucanh.vn/may-photocopy-fuji-xerox-s2110-dadf-duplex-copyin-mang-scan-mang-dadf-duplex.html">Máy photocopy Fuji Xerox S2110</a></span></strong>&nbsp;tích hợp sẵn tính năng in hai mặt tự động (bộ đảo bản sao tự động Duplex) và khay nạp giấy tự động (bộ nạp bản gốc tự động DADF) cho phép người dùng Copy/Scan liên tục một tập tài liệu đến 110 tờ, giúp bạn xử lý công việc nhanh chóng và hiệu quả hơn.</span></p>
                        <p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/lib/32800_MayphotocopyFujiXeroxS2110-1.jpg" alt=""></p>
                        <p><strong><span style="font-size: 10pt;">Vận hành nhanh</span></strong></p>
                        <p><span style="font-size: 10pt;">Giảm thời gian hoàn tất bản sao chụp đầu tiên. Máy photocopy Xerox S2110 giúp tiết kiệm thời gian chỉ mất 7.4 giây để cho ra bản sao chụp đầu tiên (A4 khổ ngang).</span></p>
                        <p><span style="font-size: 10pt;">Thời gian khởi động và in nhanh: Thời gian khởi động chưa đến 18 giây. Tiết kiệm tối đa thời gian in/sao chụp.</span></p>
                        <p><strong><span style="font-size: 10pt;">Thân thiện với môi trường</span></strong></p>
                        <p><span style="font-size: 10pt;">Sự tuân thủ được thế giới công nhận số hạt siêu nhỏ (UFP*) xuất hiện trong quá trình in liên tục giảm đáng kể nhờ việc tối ưu hóa chế độ cài đặt vận hành.</span></p>
                        <p><span style="font-size: 10pt;">Máy photocopy Fuji Xerox S2110 thân thiện với môi trường và dễ sử dụng, với chứng nhận ENERY STAR tiêu thụ điện năng thấp và chức năng tiết kiệm điện của nó. Tính năng chuyển máy sang chế độ nghỉ khi không dùng đến nhưng máy vẫn có thể tự động nhận dữ liệu và in.</span></p>
                        <p><strong><span style="font-size: 10pt;">Chức năng sao chụp thẻ ID nhanh chóng</span></strong></p>
                        <p><span style="font-size: 10pt;">Cho phép sao chụp cả 2 mặt thẻ lên một mặt của tờ giấy. Bạn có thể sao chụp hai thẻ cùng 1 lúc.</span></p>
                        <p><strong><span style="font-size: 10pt;">In và sao chụp trên giấy dày</span></strong></p>
                        <p><span style="font-size: 10pt;">Máy photocopy Fuji Xerox S2110 in chứng chỉ hay thiệp mừng trên giấy 60-216gsm, có thể tùy chỉnh tính năng in cho hầu hết mọi công việc, giảm nhu cầu thuê ngoài.</span></p>
                        <p><strong><span style="font-size: 10pt;">Máy Fuji Xerox S2110 giải pháp cho doanh nghiệp vừa và nhỏ năm 2018</span></strong></p>
                        <p><span style="font-size: 10pt;">Với sự phát triển không ngừng về công nghệ thì những chiếc máy photocopy không ngừng được cải tiến để đảm bảo nhu cầu sử dụng của các doanh nghiệp, đáp ứng được những đòi hỏi của người sử dụng một cách nhanh chóng và đơn giản. Kéo theo đó là giá thành các sản phẩm sẽ nâng cao để đảm bảo chất lượng điều đó vô hình chung chính là trở ngại cho các doanh nghiệp, đặc biệt là doanh nghiệp vừa và nhỏ.</span></p>
                        <p><strong><em><span style="font-size: 10pt;">Vậy tại sao máy photocopy S2110 lại là giải pháp cho vấn đề trên? Câu trả lời đơn giản cho câu hỏi trên chính là những ưu điểm mà máy mang lại.</span></em></strong></p>
                        <p><strong><span style="font-size: 10pt;">Tiết kiệm và thân thiện với môi trường</span></strong></p>
                        <p><span style="font-size: 10pt;">Fuji Xerox S2110 được sản xuất bởi công nghệ mới nên giá thành đầu tư ban đầu tương đối thấp, rất phù hợp và đảm bảo kinh tế cho các doanh nghiệp vừa và nhỏ. Ngoài ra thiết bị có giá trị TEC đạt 1,1 kWh, là tiêu chuẩn phù hợp với chương trình ENERGY STAR quốc tế góp phần vào việc giảm điện năng tiêu thụ của máy.</span></p>
                        <p><span style="font-size: 10pt;">Thiết bị được thiết bị được thiết kế thân thiện với môi trường và nơi làm việc, được trang bị công nghệ giúp giảm thiểu hạt cực tím (UFP) đảm bảo sức khỏe cho người sử dụng.</span></p>
                        <p><strong><span style="font-size: 10pt;">Thiết kế hiện đại, nhỏ gọn</span></strong></p>
                        <p><span style="font-size: 10pt;">Hãng Fuji Xerox đã chế tạo thành công máy với kích thước "nhỏ gọn" mang đến tiện ích "đơn giản" nhưng "thông minh", dễ dàng vận chuyển và sắp xếp trong văn phòng. Đáp ứng mọi nhu cầu của các doanh nghiệp vừa và nhỏ</span></p>
                        <p><strong><span style="font-size: 10pt;">Hiệu suất lớn, thiết lập đơn giản dễ sử dụng</span></strong></p>
                        <p><span style="font-size: 10pt;">Với tính năng thông minh, tiện lợi, dễ cài đặt và vận hành, kích thước nhỏ gọn nhưng hiệu suất lớn vẫn có khả năng xử lý khổ giấy A3. Đặc biệt với những tính năng tiêu biểu: In đen trắng 21 tờ/phút, quét màu nội bộ hoặc mạng ngoài, thời gian khởi động ít hơn 18 giây,...</span></p>
                        <p><span style="font-size: 10pt;">Những tính năng được nâng cấp thêm của máy Fuji Xerox S2110 giúp nâng cao hiệu quả và sự thuận tiện cho các cơ quan nhà nước, khách sạn, đại lý du lịch, ngân hàng và nhiều mô hình kinh doanh khác.</span></p>',
            'parameters' => json_encode([
                ['key' => 'Chức năng', 'value' => 'Copy/In mạng /Scan mạng/ DADF + Duplex'],
                ['key' => 'Khổ giấy', 'value' => 'A3/A4'],
                ['key' => 'Đảo mặt bản sao', 'value' => 'Có'],
                ['key' => 'ADF', 'value' => 'Có'],
                ['key' => 'Cổng giao tiếp', 'value' => 'USB/ LAN'],
                ['key' => 'Dùng mực', 'value' => 'CT202873 (9.000 bản) theo tiêu chuẩn của nhà sản xuất'],
            ]),
            'price_rent' => 2190000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = ProductRent::find($productId);
        // update product images
        $productImages = [
            '32800_ma__y_photocopy_fuji_xerox_s2110_1.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/photocopy-fuji-xerox-s2110/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/photocopy-fuji-xerox-s2110/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProductRent::create([
                    'media_id' => $media->id,
                    'product_rent_id' => $product->id
                ]);
                //update thumbnail
                if ($key == 0) {
                    $product->featured_image = $media->id;
                    $product->save();
                }
            }
        }

        // SP2
        $productId = DB::table('products_rent')->insertGetId([
            'vendor_id' => 3,
            'name' => 'Máy photocopy Fuji Xerox S2520 CPS + DADF+ Duplex (Copy/ Print/ Scan/ DADF + Duplex)',
            'slug' => Str::of('Máy photocopy Fuji Xerox S2520 CPS + DADF+ Duplex (Copy/ Print/ Scan/ DADF + Duplex)')->slug('-'),
            'description' => 'Máy photocopy Fuji Xerox S2110 tích hợp sẵn tính năng in hai mặt tự động (bộ đảo bản sao tự động Duplex) và khay nạp giấy tự động (bộ nạp bản gốc tự động DADF) cho phép người dùng Copy/Scan liên tục một tập tài liệu đến 110 tờ, giúp bạn xử lý công việc nhanh chóng và hiệu quả hơn.',
            'content' => '<h2 style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Máy photocopy Fuji Xerox S2520 CPS + DADF+ Duplex (Copy/ Print/ Scan/ DADF + Duplex)</span></h2>
                    <h2 style="text-align: justify;"><span style="font-size: 10pt;"><span style="font-family: arial, helvetica, sans-serif;">Fuji Xerox là một thương hiệu chuyên sản xuất máy in, máy photocopy lâu đời đến từ Nhật Bản. Mới đây Fuji Xerox mới giới thiệu dòng máy photocopy<span style="color: #0000ff;">&nbsp;</span><a href="https://www.phucanh.vn/may-photocopy-fuji-xerox-s2520-cps-copy-print-scan-dadf-duplex.html"><span style="color: #0000ff;">Fuji Xerox&nbsp;S2520 CPS DADF Duplex</span></a></span>&nbsp;dành cho khách doanh nghiệp nhỏ và vừa với nhu cầu in ấn, photocopy văn bản ơ mức trung bình tới cao.</span></h2>
                    <h2 style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Đặc điểm nổi bật</span></h2>
                    <ul style="text-align: justify;">
                    <li style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Trang bị nhiều công nghệ hiện đại</span></li>
                    <li style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Khả năng làm việc đa nhiệm</span></li>
                    <li style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Khả năng in đảo mặt</span></li>
                    <li style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Khay giấy lớn</span></li>
                    <li style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Bản in chất lượng</span></li>
                    </ul>
                    <h3 style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Trang bị nhiều công nghệ hiện đại</span></h3>
                    <p style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Vì sản phẩm hướng tới đối tượng khách hàng có nhu cầu in ấn ở mức tương đối nhiều, các văn phòng hay các công ty nhỏ và vừa vì vậy Fuji Xerox S2520 CPS được hãng trang bị nhiều công nghệ mới giúp cho chiếc máy photocopy có thân hình vừa phải này có một tốc độ in ấn cao và khả năng vận hành tin cậy với chi phí thấp.</span></p>
                    <p><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/22376_may_in_fuji_xerox_s2520_01.jpg" alt="Máy photocopy Fuji Xerox S2520 CPS + DADF+ Duplex (Copy/ Print/ Scan/ DADF + Duplex)" width="500"></span></p>
                    <h3 style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Khả năng làm việc đa nhiệm</span></h3>
                    <p style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Máy được tích hợp 3 tính năng trong một thân máy nhỏ gọn là in, photo, scan. Điều đặc biệt là máy có chức năng Duplex tức là đảo mặt tự động. </span></p>
                    <h3 style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Khả năng in đảo mặt</span></h3>
                    <p style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Thông thường các dòng máy in khác sẽ tự đảo mặt bản in, tuy nhiên với S2520 thì hãng trang bị thêm chức năng khá đáng giá là đảo mặt tự động cả bản chính. Tức là khi máy ở chế độ photo bạn buộc phải quét hai lần cho 2 mặt bản scan chính trên 1 tờ văn bản thì nay bạn chỉ cần nhét giấy vào khay DADF thì máy sẽ tự động “nuốt” bản scan và tiến hành scan hai mặt rồi sẽ in luôn bản sao hai mặt luôn. </span></p>
                    <p><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/22376_may_in_fuji_xerox_s2520_02.JPG" alt="Máy photocopy Fuji Xerox S2520 CPS + DADF+ Duplex (Copy/ Print/ Scan/ DADF + Duplex)" width="500"></span></p>
                    <p style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Chức năng này thường thấy ở những máy có mức giá cao hơn, tuy nhiên Fuji chăm chút cho người sử dụng đặc biệt là khách hàng doanh nghiệp với sự rút ngắn thời gian in ấn cho hiệu quả công việc của khách hàng cao hơn. Đây là một điểm rất đáng giá của S2520 CPS.</span></p>
                    <h3 style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Hiệu suất làm việc cao</span></h3>
                    <p style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Fuji Xerox S2520CPS có tốc độ in cao 25ppm, điều này giúp chiếc máy có năng suất hoạt động đáng nể trong phân khúc khi các dòng máy khác chỉ dừng lại ở mức từ 16-20ppm. Hơn nữa hãng cũng trang bị cho chiếc máy này bộ nhớ cache ở mức khủng với 512Mb. Với việc trang bị bộ nhớ cache lớn như vậy giúp cho máy in luôn đạt tốc độ in ấn ổn định. Vốn là sản phẩm đánh vào phân khúc các văn phòng, doanh nghiệp nhỏ và vừa thì sẽ rất là phiền phức khi máy in của cả văn phòng bị “kẹt lệnh”. Điều này với mẫu S2520 CPS của Fuji Xerox thì rất khó xảy ra khi hãng đang trang bị một bộ nhớ lớn.</span></p>
                    <h3 style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;Khay giấy lớn</span></h3>
                    <p style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Mẫu S2520 CPS được trang bị khay giấy lớn với sức chưa của khay giấy tự động lên tới 250 tờ, với khay giấy tay có sức chưa 100 tờ và khay giấy ra 250 tờ. Điều này khiến người sử dụng nhàn hơn khi không phải mất nhiều thời gian hay giấy như vốn thấy ở những chiếc máy có sức chứa giấy thấp. Điều này có được là nhờ sự thông minh của đội ngũ <a href="https://www.phucanh.vn/tim?q=Fuji+Xerox"><strong><span style="color: #0000ff;">Fuji Xerox</span></strong></a> đến từ Nhật khi họ cố gắng tận dụng khoảng trống để tạo ra một sức chứa giấy tối ưu với một chiếc máy photocopy có thân hình nhỏ gọn như S2520 CPS.</span></p>
                    <h3 style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">&nbsp;Bản in chất lượng</span></h3>
                    <p style="text-align: justify;"><span style="font-size: 10pt; font-family: arial, helvetica, sans-serif;">Fuji Xerox S2520 CPS sử dụng loại mực in CT 202384 với khả năng có thể in tới 9000 bản in cho một lần đổ mực ( bản in theo tiêu chí với độ phủ 5%,), đây cũng là một điểm sáng đáng giá với dòng máy này. Vốn được thiết kế cho thị trường Việt Nam nên mẫu máy S2520 CPS sử dụng nguồn điện 220-230V 50-60Hz nên bạn hoàn toàn có thể yên tâm về việc “set-up” máy vào văn phòng mình một cách dễ dàng.</span></p>',
            'parameters' => json_encode([
                ['key' => 'Hãng sản xuất', 'value' => 'Fuji Xerox'],
                ['key' => 'Model', 'value' => 'S2520 CPS + DADF+ Duplex'],
                ['key' => 'Chức năng', 'value' => 'Copy/ Print/ Scan/ DADF + Duplex'],
                ['key' => 'Khổ giấy', 'value' => 'A3/A4'],
                ['key' => 'Khay giấy', 'value' => 'Chuẩn khay 1: 250 tờ , Khay tay: 100 tờ; Sức chứa khay giấy ra: 250 tờ'],
                ['key' => 'Tốc độ', 'value' => 'copy/ in/ 25 trang/phút'],
                ['key' => 'Đảo mặt bản gốc', 'value' => 'Có'],
                ['key' => 'Dùng mực', 'value' => 'CT 202384 (9.000 bản theo tiêu chuẩn của nhà sản xuất)'],
                ['key' => 'Bảo hành chi tiết', 'value' => 'Bảo hành 12 tháng hoặc 40.000 bản chụp tùy theo điều kiện nào đến trước'],
            ]),
            'price_rent' => 1190000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = ProductRent::find($productId);
        // update product images
        $productImages = [
            '22376_may_in_fuji_xerox_s2520_01.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/photocopy-fuji-xerox-s2520/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/photocopy-fuji-xerox-s2520/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProductRent::create([
                    'media_id' => $media->id,
                    'product_rent_id' => $product->id
                ]);
                //update thumbnail
                if ($key == 0) {
                    $product->featured_image = $media->id;
                    $product->save();
                }
            }
        }

        // SP3
        $productId = DB::table('products_rent')->insertGetId([
            'vendor_id' => 2,
            'name' => 'Máy photocopy laser đen trắng Canon IR2006N (A3) (Copy/ In mạng, in Wifi/ Scan)',
            'slug' => Str::of('Máy photocopy laser đen trắng Canon IR2006N (A3) (Copy/ In mạng, in Wifi/ Scan)')->slug('-'),
            'description' => 'Máy photocopy Canon IR2006N là chiếc máy lí tưởng, đáp ứng tốt các nhu cầu in, sao chụp, quét với khổ tối đa A3, được trang bị đầy đủ các tính năng cho sao chụp chuyên nghiệp bởi bộ Duplex C1 giúp người dùng có thể in đảo giấy hai mặt tự động và bộ DADF AY1 giúp người dùng có thể sao chụp liên tục tự động hai mặt lên đến 50 tờ để người sử dụng xử lý công việc nhanh và hiệu quả hơn.',
            'content' => '<h2><span style="font-size: 10pt;">Máy in laser đen trắng Canon IR2006N (A3) (Copy/ In mạng, in Wifi/ Scan)</span></h2>
                        <p><span style="font-size: 10pt;">Máy photocopy&nbsp;<strong><span style="color: #800080;"><a style="color: #800080;" title="Canon IR2006N" href="https://www.phucanh.vn/may-in-laser-den-trang-canon-ir2006n-a3-copy-in-mang-in-wifi-scan.html">Canon IR2006N</a></span></strong> là chiếc máy lí tưởng, đáp ứng tốt các nhu cầu in, sao chụp, quét với khổ tối đa A3, được trang bị đầy đủ các tính năng cho sao chụp chuyên nghiệp bởi bộ Duplex C1 giúp người dùng có thể in đảo giấy hai mặt tự động và bộ DADF AY1 giúp người dùng có thể sao chụp liên tục tự động hai mặt lên đến 50 tờ để người sử dụng xử lý công việc nhanh và hiệu quả hơn.</span></p>
                        <p><span style="font-size: 10pt;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/34170_canon_ir2006n.png" alt=""></span></p>
                        <p><span style="font-size: 10pt;">Ngoài ra, máy photocopy Canon IR 2006N còn tính hợp tính năng kết nối không dây WiFi, kế thừa tính năng ưu điểm của model Canon ImageRunner 2004N, đây là một trong những dòng máy photocopy đầu tiên của Cannon dẫn đầu về chuẩn kết nối này, để người dùng kết nối với máy photocopy Canon IR 2006N thuận tiện và dễ dàng hơn.</span></p>
                        <p><strong><span style="font-size: 10pt;">In bảo mật</span></strong></p>
                        <p><span style="font-size: 10pt;">Quản lí an toàn những tài liệu nhạy cảm với tính năng in bảo mật từ Canon IR 2006N. Các lệnh in sẽ chỉ được tiến hành khi được xác nhận lệnh tại máy.</span></p>
                        <p><strong><span style="font-size: 10pt;">Quét tài liệu thuận tiện hơn</span></strong></p>
                        <p><span style="font-size: 10pt;">Máy photocopy Canon IR 2006N tích hợp cả hai tính năng Scan kéo (Pull Scan) &amp; Scan đẩy ( Push Scan) với phần mềm MF Toolbox giúp người dùng thao tác dễ dàng với công việc sử dụng nhiều đến việc scan tài liệu. Với tính năng Scan đẩy người dùng dễ dàng quét và đẩy file scan đến bất kỳ máy tính nào trong cùng một mạng Lan có kết nối với máy photocopy Canon IR 2006N.</span></p>
                        <p><strong><span style="font-size: 10pt;">In đảo mặt tự động</span></strong></p>
                        <p><span style="font-size: 10pt;">Máy photocopy Canon IR 2006N rất tiện lợi nhờ cơ chế in đảo mặt tự động được trang bị thêm. Bạn có thể tiết kiệm thời gian, tiết kiệm giấy và bảo vệ môi trường với những bản in hai mặt tự động.</span></p>
                        <p><strong><span style="font-size: 10pt;">Giải pháp in/quét bằng di động</span></strong></p>
                        <p><span style="font-size: 10pt;">Bạn có thể in ảnh, tài liệu từ thiết bị di động hay quét tài liệu tới thiết bị di động với ứng dụng Canon Mobile Printing and Canon Mobile Scanning từ máy photocopy Canon IR 2006N một cách dễ dàng.</span></p>
                        <p><strong><span style="font-size: 10pt;">Kết nối không dây WiFi</span></strong></p>
                        <p><span style="font-size: 10pt;">Với việc tích hợp mạng LAN không dây, Canon imageRUNNER 2006N có thể kết nối với máy tính hoặc các thiết bị di động trong cùng một mạng không dây. Đây là dòng sản phẩm đầu tiên trên thị trường tích hợp tính năng in/scan không dây Wireless/Wifi giúp người dùng thuận tiện hơn trong việc kết nối sử dụng máy.</span></p>
                        <p><strong><span style="font-size: 10pt;">Quản lý ID theo phòng ban</span></strong></p>
                        <p><span style="font-size: 10pt;">Máy photocopy Canon IR 2006N giúp người sử dụng dễ dàng quản lý truy cập và theo dõi việc sử dụng lên đến 100 người sử dụng với số ID. Với tính năng này, bạn có thể gán quyền truy cập chọn lọc, giới hạn số lượng bản in, cũng như theo dõi in ấn, sao chép và quét tài liệu. Quản lý người sử dụng máy photocopy tốt hơn thông qua bản in kết quả đầu ra để kiểm soát tốt hơn các chi phí của bạn.</span></p>',
            'parameters' => json_encode([
                ['key' => 'Loại máy', 'value' => 'In ấn, Sao chụp, Quét, Gửi dữ liệu'],
                ['key' => 'Tốc độ sao chụp', 'value' => '20 trang /phút'],
                ['key' => 'Thời gian khởi động', 'value' => '13 giây'],
                ['key' => 'Thời gian khởi động từ chế độ chờ', 'value' => '4,3 giây'],
                ['key' => 'Thời gian sao chép bản đầu tiên (A4)', 'value' => '7,4 giây'],
                ['key' => 'Bộ nhớ', 'value' => '512MB'],
                ['key' => 'Độ phóng đại', 'value' => '25% – 400 %'],
                ['key' => 'Giao diện kết nối', 'value' => 'Windows Vista/7/8/8.1/10,Windows 2016 Server,-Mac OS X 10.9.5 trở lên'],
                ['key' => 'Khay nạp và đảo bản  gốc tự động', 'value' => 'Có sẵn'],
                ['key' => 'Màn hình điều khiển', 'value' => 'Cảm ứng 3,5 inch hỗ trợ Tiếng Việt'],
                ['key' => 'Độ phân giải', 'value' => '600 x 600dpi'],
            ]),
            'price_rent' => 2590000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = ProductRent::find($productId);
        // update product images
        $productImages = [
            '34170_canon_ir2006n.png',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/photocopy-canon-ir2006n/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/photocopy-canon-ir2006n/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProductRent::create([
                    'media_id' => $media->id,
                    'product_rent_id' => $product->id
                ]);
                //update thumbnail
                if ($key == 0) {
                    $product->featured_image = $media->id;
                    $product->save();
                }
            }
        }

        // SP4
        $productId = DB::table('products_rent')->insertGetId([
            'vendor_id' => 1,
            'name' => 'Máy photocopy HP LaserJet MFP M436N (W7U01A) (Copy/ Print/ Scan)',
            'slug' => Str::of('Máy photocopy HP LaserJet MFP M436N (W7U01A) (Copy/ Print/ Scan)')->slug('-'),
            'description' => 'Máy photocopy HP LaserJet MFP M436N (W7U01A) phù hợp cho các văn phòng, cửa hàng photo vì hiệu suất và chất lượng bản in sắc nét. Máy in laser đen trắng này được trang bị nhiều chức năng như in, sao chép, scan,… cho thiết bị trở nên vô cùng đa năng  và thuận tiện cho nhiều mục đích sử dụng khác nhau của bạn',
            'content' => '<h2>Máy photocopy HP LaserJet MFP M436N (W7U01A)</h2>
<p><strong><a title="Máy photocopy HP LaserJet MFP M436N (W7U01A)" href="https://www.phucanh.vn/tim?q=HP+LaserJet+MFP+M436N+%28W7U01A%29">Máy photocopy HP LaserJet MFP M436N (W7U01A)</a></strong>&nbsp;phù hợp cho các văn phòng, cửa hàng photo vì hiệu suất và chất lượng bản in sắc nét.&nbsp;<a style="color: #0000ff;" title="Máy in laser đen trắng tại Phúc Anh" href="https://www.phucanh.vn/may-in-theo-hang.html?filter=%2C24322%2C">Máy in laser đen trắng</a>&nbsp;này được trang bị nhiều chức năng như in, sao chép, scan,… cho thiết bị trở nên vô cùng&nbsp;<span style="color: #0000ff;"><a style="color: #0000ff;" title="Máy in đa chức năng tại Phúc Anh" href="https://www.phucanh.vn/may-in-da-nang.html">đa năng</a></span>&nbsp; và thuận tiện cho nhiều mục đích sử dụng khác nhau của bạn.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/29767_laserjet_mfp_m436n_ha1.jpg" alt="Máy photocopy HP LaserJet MFP M436N (W7U01A)" width="500"></p>
<h3>Tạo ra bản in chất lượng trên nhiều khổ giấy</h3>
<p><strong>HP LaserJet MFP M436N</strong> có công suất cao&nbsp;với&nbsp;độ phân giải&nbsp;in/copy: 600x600 dpi. độ phân giải scan: 4800x4800 dpi cho sản phẩm in có chất lượng cao, hình ảnh và chữ viết rõ ràng, sắc nét, sống động do có nhiều điểm in. Độ phân giải cũng cho khả năng in cho nhiều khổ giấy khác nhau như A4, A5, B5, Letter, Legal, Enverlopes (DL),..</p>
<p>Bạn cũng có thể sử dụng <strong>máy in HP LaserJet MFP M436N</strong> để photo, in, scan, với khổ giấy tối đa A3, giúp bạn xử lý hầu hết các công việc trong văn phòng, với thiết kế hiện đại mang lại nét sang trọng trong văn phòng làm việc của cơ quan.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/29767_laserjet_mfp_m436n_ha2.jpg" alt="Máy photocopy HP LaserJet MFP M436N (W7U01A)" width="500"></p>
<h3>Giải quyết công việc nhanh chóng</h3>
<p><a style="color: #0000ff;" title="Máy in laser đen trắng của HP tại Phúc Anh" href="https://www.phucanh.vn/may-in-hp.html?filter=%2C24322%2C">Máy in laser đen trắng HP</a>&nbsp;có tốc độ làm việc lên tới 23 trang/phút với in, sao chép 30 ảnh/phút giúp bạn tiết kiệm thời gian in, tăng hiệu quả công việc.<a style="color: #0000ff;" title="Máy in tại Phúc Anh" href="https://www.phucanh.vn/may-in-theo-hang.html">Máy in</a> hoạt động trơn tru, hạn chế được các sự cố kẹt giấy, tràn mực.</p>
<p>Đặc biệt,&nbsp;<strong>HP Pro MFP M436n (W7U01A)</strong> sử dụng loại&nbsp;<a style="color: #0000ff;" title="Mực in HP dành cho máy in HP laser đen trắng tại Phúc Anh" href="https://www.phucanh.vn/muc-cho-may-in-hp.html?brand=82&amp;filter=%2C19914%2C">mực in</a> chính hãng của <a style="color: #0000ff;" title="Máy in HP tại Phúc Anh" href="https://www.phucanh.vn/may-in-hp.html">HP</a>, là loại mực chất lượng cao, tiết kiệm cùng với đó là giúp tăng độ bền của máy.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/29767_laserjet_mfp_m436n_ha4.jpg" alt="Máy photocopy HP LaserJet MFP M436N (W7U01A)" width="500"></p>
<h3>Dễ sử dụng, kết nối nhanh chóng</h3>
<p><strong>Máy in đa chức năng HP LaserJet MFP M436N</strong> trang bị cổng USB và tích hợp sẵn tính năng kết nối qua mạng LAN, giúp bạn kết nối in/scan thuận tiện và dễ dàng, nhờ tính năng này văn phòng cơ quan bạn có thể dùng chung thiết bị mà không cần phụ thuộc vào máy chủ.</p>
<p>Máy còn được trang bị&nbsp;các phím&nbsp;chức năng giúp bạn&nbsp;dễ dàng thao tác các in ấn. Màn hình hiển thị thông số, tình trạng hoạt động giúp bạn chủ động trong công việc.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/29767_laserjet_mfp_m436n_ha3.jpg" alt="Máy photocopy HP LaserJet MFP M436N (W7U01A)" width="500"></p>
<h3>Tết kiệm năng lượng</h3>
<p><strong>Máy in đa năng HP LaserJet MFP M436N</strong> thân thiện với môi trường và dễ sử dụng, với chứng nhận ENERY STAR tiêu thụ điện năng thấp và chức năng tiết kiệm điện của nó. Tính năng chuyển máy sang chế độ nghỉ khi không dùng đến nhưng máy vẫn có thể tự động nhận dữ liệu và in.</p>
<p>Tới&nbsp;<span style="color: #0000ff;"><strong><a style="color: #0000ff;" href="https://www.phucanh.vn/">Phúc Anh</a></strong></span>&nbsp;để được tư vấn và sở hữu các sản phẩm công nghệ,&nbsp;<span style="color: #0000ff;"><strong><a style="color: #0000ff;" href="https://www.phucanh.vn/laptop.html">laptop</a>,&nbsp;<a style="color: #0000ff;" href="https://www.phucanh.vn/may-tinh-de-ban.html">PC</a>,&nbsp;<a style="color: #0000ff;" href="https://www.phucanh.vn/camera-theo-hang.html">camera,</a>&nbsp;<a style="color: #0000ff;" href="https://www.phucanh.vn/linh-kien-pc-lap-rap.html">linh kiện máy tính</a>,&nbsp;<a style="color: #0000ff;" href="https://www.phucanh.vn/thiet-bi-van-phong.html">thiết bị văn phòng</a></strong></span>,... chính hãng, uy tín cùng chất lượng dịch vụ tốt nhất hiện nay.</p>',
            'parameters' => json_encode([
                ['key' => 'Sản phẩm', 'value' => 'Máy in laser đa chức năng'],
                ['key' => 'Hãng sản xuất', 'value' => '	HP'],
                ['key' => 'Model', 'value' => 'LaserJet MFP M436N (W7U01A)'],
                ['key' => 'Tốc độ in/copy', 'value' => '23 tờ A4/phút.'],
                ['key' => 'Bộ nhớ', 'value' => '512MB'],
                ['key' => 'Độ phóng đại', 'value' => '25% – 400 %'],
                ['key' => 'Giao diện kết nối', 'value' => 'Windows Vista/7/8/8.1/10,Windows 2016 Server,-Mac OS X 10.9.5 trở lên'],
                ['key' => 'Khay nạp và đảo bản  gốc tự động', 'value' => 'Có sẵn'],
                ['key' => 'Màn hình điều khiển', 'value' => 'Cảm ứng 3,5 inch hỗ trợ Tiếng Việt'],
                ['key' => 'Độ phân giải', 'value' => 'Độ phân giải in/copy: 600x600 dpi. Độ phân giải scan: 4800x4800 dpi.'],
                ['key' => 'Bảo hành chi tiết', 'value' => 'Bảo hành 12 tháng'],
            ]),
            'price_rent' =>4590000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = ProductRent::find($productId);
        // update product images
        $productImages = [
            '29767_laserjet_mfp_m436n_ha1.jpg',
            '29767_laserjet_mfp_m436n_ha2.jpg',
            '29767_laserjet_mfp_m436n_ha3.jpg',
            '29767_laserjet_mfp_m436n_ha4.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/photocopy-hp-mfp-m436/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/photocopy-hp-mfp-m436/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProductRent::create([
                    'media_id' => $media->id,
                    'product_rent_id' => $product->id
                ]);
                //update thumbnail
                if ($key == 0) {
                    $product->featured_image = $media->id;
                    $product->save();
                }
            }
        }

        // SP5
        $productId = DB::table('products_rent')->insertGetId([
            'vendor_id' => 1,
            'name' => 'Máy photocopy laser đen trắng HP Đa chức năng MFP M436DN (2KY38A) (Copy/ Print/ Scan/ Duplex/ Network)',
            'slug' => Str::of('Máy photocopy laser đen trắng HP Đa chức năng MFP M436DN (2KY38A) (Copy/ Print/ Scan/ Duplex/ Network)')->slug('-'),
            'description' => 'Máy in laser đen trắng HP Đa chức năng MFP M436DN với các chức năng : In đảo mặt tự động, copy, scan màu, với tốc độ 23 trang /phút khổ A4 và 12 trang /phút khổ A3 giúp bạn giải quyết công việc trong văn phòng một cách nhanh chóng và hiệu quả.',
            'content' => '<h2>Máy in laser đen trắng HP Đa chức năng MFP M436DN (2KY38A)</h2>
<p><strong><a title="Máy in laser đen trắng HP Đa chức năng MFP M436DN" href="https://www.phucanh.vn/tim?q=MFP+M436DN+%282KY38A%29">Máy in laser đen trắng HP Đa chức năng MFP M436DN</a></strong>&nbsp;với các chức năng : In đảo mặt tự động, copy, scan màu, với tốc độ 23 trang /phút khổ A4 và 12 trang /phút khổ A3 giúp bạn giải quyết công việc trong văn phòng một cách nhanh chóng và hiệu quả. Ngoài ra chiếc&nbsp;<a style="color: #0000ff;" title="Máy in laser đen trắng tại Phúc Anh" href="https://www.phucanh.vn/may-in-theo-hang.html?filter=%2C24322%2C">máy in laser đen trắng</a>&nbsp;<a style="color: #0000ff;" title="Máy in đa chức năng tại Phúc Anh" href="https://www.phucanh.vn/may-in-da-nang.html">đa chức năng</a>&nbsp;này&nbsp;còn tích hợp tính năng kết nối qua mạng LAN giúp bạn kết nối dễ dàng các thiết bị với nhau và chia sẻ tài nguyên dùng chung giảm thiểu chi phí đầu tư.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/31280_mfp_m436dn_ha2.jpg" alt="Máy in laser đen trắng HP Đa chức năng MFP M436DN (2KY38A)" width="500" height="500"></p>
<h3>Nổi bật văn phòng với thiết kế hiện đại</h3>
<p><strong>Máy in HP Đa chức năng MFP M436DN</strong> được thiết kế với kích thước nhỏ gọn&nbsp;thích hợp sử dụng trong các văn phòng hay trong không gian làm việc cá nhân tại nhà nhằm hỗ trợ hiệu quả cho công việc của người dùng.&nbsp;<a style="color: #0000ff;" title="Máy in tại Phúc Anh" href="https://www.phucanh.vn/may-in-theo-hang.html">Máy in</a> được thiết kế với tông màu trắng sang trọng, sạch sẽ làm nổi bật không gian làm việc của người dùng.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/31280_mfp_m436dn_ha1.jpg" alt="Máy in laser đen trắng HP Đa chức năng MFP M436DN (2KY38A)" width="500"></p>
<h3>Đa chức năng, dễ sử dụng</h3>
<p>Bạn cũng có thể sử dụng&nbsp;<strong>máy in MFP M436DN</strong> để photo, in, scan, với khổ giấy tối đa A3, giúp bạn xử lý hầu hết các công việc trong văn phòng, với thiết kế hiện đại mang lại nét sang trọng trong văn phòng làm việc của cơ quan. Máy in&nbsp;được trang bị với bảng điều khiển trực quan có giao diện thông minh, đơn giản giúp cho người dùng có thể dễ dàng tuỳ chỉnh, cài đặt các chế độ copy, scan dễ dàng.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/31280_mfp_m436dn_ha4.jpg" alt="Máy in laser đen trắng HP Đa chức năng MFP M436DN (2KY38A)" width="500"></p>
<h3>In ấn vượt trội, tiết kiệm chi phí</h3>
<p><strong>Máy in&nbsp;HP Đa chức năng MFP M436DN&nbsp;</strong>sử dụng công nghệ in laser hiện đại với bộ xử lý 600MHz và bộ nhớ 128MB giúp cho thiết bị có tốc độ in đen/ trắng vượt trội 23 trang mỗi phút với khổ A4, 12 trang mỗi phút với khổ A3 cùng. Chức năng&nbsp;<a style="color: #0000ff;" title="Máy in laser đen trắng hỗ trợ in 2 mặt tại Phúc Anh" href="https://www.phucanh.vn/may-in-theo-hang.html?filter=%2C24322%2C25854%2C">in hai mặt</a> tự động mang đến cho người dùng những bản in, copy nhanh chóng hỗ trợ công việc cho các buổi họp, buổi thuyết trình, giúp tiết kiệm thời gian, tiết kiệm giấy và bảo vệ môi trường.</p>
<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/lib/31280_MayinlaserentrngHPachcnngMFPM436DN-1.jpg" alt="Máy in laser đen trắng HP Đa chức năng MFP M436DN (2KY38A)" width="500"></p>
<h3>Bản in sắc nét trên nhiều khổ giấy</h3>
<p><a style="color: #0000ff;" title="Máy in laser đen trắng của HP tại Phúc Anh" href="https://www.phucanh.vn/may-in-hp.html?filter=%2C24322%2C">Máy in laser đen trắng HP</a>&nbsp;có độ phân giải 600 x 600 dpi đảm bảo phủ đều trên mặt giấy cùng với khả năng hỗ trợ các khổ giấy từ khổ A3 trở xuống thông dụng giúp cho người dùng có thể dễ dàng lựa chọn các loại khổ giấy chuyên dùng cho việc in ấn báo cáo.<img style="display: block; margin-left: auto; margin-right: auto;" src="https://phucanhcdn.com/media/product/31280_mfp_m436dn_ha3.jpg" alt="Máy in laser đen trắng HP Đa chức năng MFP M436DN (2KY38A)" width="500"></p>
<h3>Kết nối qua mạng Lan</h3>
<p><strong>Máy in MFP M436DN</strong>&nbsp;tích hợp sẵn tính năng kết nối qua mạng LAN, giúp bạn kết nối in/scan thuận tiện và dễ dàng, nhờ tính năng này văn phòng cơ quan bạn có thể dùng chung thiết bị mà không cần phụ thuộc vào máy chủ. Ngoài ra máy được trang bị cổng USB tiện lợi, giúp cho người dùng có thể dễ dàng in, copy các dữ liệu trực tiếp trong bộ nhớ USB của bạn.</p>
<p>Tới&nbsp;<span style="color: #0000ff;"><strong><a style="color: #0000ff;" href="https://www.phucanh.vn/">Phúc Anh</a></strong></span>&nbsp;để được tư vấn và sở hữu các sản phẩm công nghệ,&nbsp;<span style="color: #0000ff;"><strong><a style="color: #0000ff;" href="https://www.phucanh.vn/laptop.html">laptop</a>,&nbsp;<a style="color: #0000ff;" href="https://www.phucanh.vn/may-tinh-de-ban.html">PC</a>,&nbsp;<a style="color: #0000ff;" href="https://www.phucanh.vn/camera-theo-hang.html">camera,</a>&nbsp;<a style="color: #0000ff;" href="https://www.phucanh.vn/linh-kien-pc-lap-rap.html">linh kiện máy tính</a>,&nbsp;<a style="color: #0000ff;" href="https://www.phucanh.vn/thiet-bi-van-phong.html">thiết bị văn phòng</a></strong></span>,... chính hãng, uy tín cùng chất lượng dịch vụ tốt nhất hiện nay.</p>',
            'parameters' => json_encode([
                ['key' => 'Sản phẩm', 'value' => 'Máy in laser đa chức năng'],
                ['key' => 'Hãng sản xuất', 'value' => '	HP'],
                ['key' => 'Model', 'value' => 'HP Đa chức năng MFP M436DN (2KY38A)'],
                ['key' => 'Chức năng', 'value' => '	Copy/ Print/ Scan/ Duplex/ Network'],
                ['key' => 'Tốc độ in/copy', 'value' => '23 tờ A4/phút.'],
                ['key' => 'Bộ nhớ', 'value' => '512MB'],
                ['key' => 'Độ phóng đại', 'value' => '25% – 400 %'],
                ['key' => 'Giao diện kết nối', 'value' => 'Windows Vista/7/8/8.1/10,Windows 2016 Server,-Mac OS X 10.9.5 trở lên'],
                ['key' => 'Khay nạp và đảo bản  gốc tự động', 'value' => 'Có sẵn'],
                ['key' => 'Màn hình điều khiển', 'value' => 'Cảm ứng 3,5 inch hỗ trợ Tiếng Việt'],
                ['key' => 'Độ phân giải', 'value' => 'Độ phân giải in/copy: 600x600 dpi. Độ phân giải scan: 4800x4800 dpi.'],
                ['key' => 'Bảo hành chi tiết', 'value' => 'Bảo hành 12 tháng'],
            ]),
            'price_rent' => 1090000.00,
            'favorite_flg' => true,
            'status' => true
        ]);
        $product = ProductRent::find($productId);
        // update product images
        $productImages = [
            '31280_mfp_m436dn_ha1.jpg',
            '31280_mfp_m436dn_ha2.jpg',
            '31280_mfp_m436dn_ha3.jpg',
            '31280_mfp_m436dn_ha4.jpg',
        ];
        foreach ($productImages as $key => $fileName) {
            $filePathRoot = public_path('products/photocopy-hp-mfp-m436dn/' . $fileName) ;
            if (copy($filePathRoot, $filePath = public_path('products/photocopy-hp-mfp-m436dn/copy-' . $fileName))) {
                $media = $product->addMedia($filePath)->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
                MediaProductRent::create([
                    'media_id' => $media->id,
                    'product_rent_id' => $product->id
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
