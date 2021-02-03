<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SV1
        $serviceId = DB::table('articles')->insertGetId([
            'article_type_id' => 2, // DỊCH VỤ
            'name' => 'Dịch vụ nạp mực máy photocopy, máy in tận nơi',
            'slug' => Str::of('Dịch vụ nạp mực máy photocopy, máy in tận nơi')->slug('-'),
            'description' => 'Mực in được ví như linh hồn của bản in, là nguyên liệu quan trọng nhất tạo nên sự đặc sắc của mỗi bản in. Dù là một trang văn bản bình thường hay một ấn phẩm tạp chí chuyên nghiệp, một tờ lịch để bàn hay một bức tranh nghệ thuật…',
            'content' => '<h2><strong>Khi mà ngành in ấn ngày càng phát triển thì càng khẳng định thêm vai trò cốt lõi của&nbsp;</strong><strong>mực in</strong><strong>.</strong></h2>

                <p>Mực in được ví như linh hồn của bản in, là nguyên liệu quan trọng nhất tạo nên sự đặc sắc của mỗi bản in. Dù là một trang văn bản bình thường hay một ấn phẩm tạp chí chuyên nghiệp, một tờ lịch để bàn hay một bức tranh nghệ thuật… tất cả những màu sắc sặc sỡ ấy đều phụ thuộc vào mực in. Thế mới thấy mực in quan trọng như thế nào trong cuộc sống của chúng ta.</p>

                <p style="text-align:center"><input alt="giới thiệu về dịch vụ nạp mực máy in, máy photocopy tận nơi" src="/uploads/posts/nap_muc_may_photocopy.webp" type="image"></p>

                <p>Bạn thường xuyên sử dụng&nbsp;<strong>máy in</strong>,&nbsp;<strong>máy photocopy</strong>&nbsp;trong công việc thì việc chú ý đến&nbsp;<strong>mực in</strong>&nbsp;lại càng phải lưu tâm. Từ khâu chọn loại mực in phù hợp với máy đến địa chỉ cung cấp mực in và&nbsp;<strong>nạp mực in</strong>&nbsp;tất cả đều phải lựa chọn một cách cẩn thận. Vì chất lượng mực in phụ thuộc rất nhiều vào đơn vị cung cấp mực in.</p>

                <p>Nếu bạn&nbsp;đang sử dụng dịch vụ&nbsp;<a href="/cho-thue-may-photocopy/3.html"><strong>cho thuê máy photocopy</strong></a>&nbsp;của Hoang Lai&nbsp;thì dĩ nhiên sẽ không cần phải quan tâm&nbsp;đến các&nbsp;vấn&nbsp;đề nạp mực vì&nbsp;đã&nbsp;được công ty hỗ trợ trọn gói, nhưng nếu bạn&nbsp;đang sử dụng dịch vụ của bên khác hoặc bạn cần nạp mực thì hãy&nbsp;đến với Hoang Lai để&nbsp;được phục vụ tốt nhất!</p>

                <p style="text-align:center"><input alt="giới thiệu về dịch vụ nạp mực máy in, máy photocopy tận nơi" src="/uploads/posts/nap_muc_may_photocopy_2.webp" type="image"></p>

                <p><strong>Hoang Lai tự hào là một trong những đơn vị cung cấp&nbsp;</strong><strong>dịch vụ nạp mực in</strong><strong>&nbsp;chất lượng và giá cả hợp lý tại Tp HCM. Vì sao chúng tôi lại tự tin khẳng định như vậy? Khi sử dụng dịch vụ nạp mực in tại Hoang Lai, quý khách hàng sẽ được tận hưởng những ưu đãi tốt nhất:</strong></p>

                <ul>
                    <li>Cam kết sử dụng&nbsp;<strong>mực in chính hãng</strong>, phù hợp với tất cả các hãng máy photocopy hiện có trên thị trường. Mực in chất lượng, đúng trọng lượng, ít thải nhằm nâng cao tuổi thọ máy in.</li>
                    <li>Chu trình&nbsp;nạp mực&nbsp;chuyên nghiệp, sạch và gọn. Chúng tôi cam kết bảng in trắng, đẹp, không lem, không chảy mực, sắc nét tương đương hộp mực (cartrigde) mới.</li>
                    <li>Đội ngũ kỹ thuật viên lành nghề, nhiệt tình, luôn sẵn sàng linh kiện thay thế như trống (Drum), gạt, trục cao áp, trục từ, chip hộp mực để thay thế các link kiện hộp mực hư cũ, bị hỏng</li>
                    <li><strong>Nạp mực tận nơi,</strong>&nbsp;tại nhà hoặc văn phòng, đội ngũ nhân viên của chúng tôi sẵn sàng có mặt nhanh chóng, kịp thời để đáp ứng nhu cầu và đảm bảo tiến độ công việc của bạn. Ngoài ra chúng tôi còn hỗ trợ thêm một số dịch vị như&nbsp;<strong>bảo dưỡng, bảo trì, vệ sinh máy photocopy</strong>, giúp máy của bạn hoạt động trơn tru, bền bỉ hơn.</li>
                    <li>Chi phí thấp nhất tại Tp Hồ Chí Minh với giá nạp mực máy in chỉ từ&nbsp;80.000 VNĐ/Bình&nbsp;và mực máy photocopy chỉ từ&nbsp;150,000 VNĐ/Bình</li>
                </ul>

                <p>Hãy để Hoang Lai&nbsp;đồng hành cùng với bạn và máy photocopy của bạn. Gọi ngay cho chúng tôi theo đường dây nóng&nbsp;<strong>090.9144.225</strong>&nbsp;để được tư vấn và hỗ trợ tốt nhất.</p>',
            'favorite_flg' => true,
            'status' => true
        ]);

        $service = Article::find($serviceId);
        $serviceImage = 'dich-vu-nap-muc-tan-noi.jpeg';
        $filePathRoot = public_path('services/' . $serviceImage) ;
        if (copy($filePathRoot, $filePath = public_path('services/copy-' . $serviceImage))) {
            $media = $service
                ->addMedia($filePath)
                ->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
            $service->featured_image = $media->id;
            $service->save();
        }

        // SV2
        $serviceId = DB::table('articles')->insertGetId([
            'article_type_id' => 2, // DỊCH VỤ
            'name' => 'Dịch vụ Sửa máy in máy photocopy tận nơi',
            'slug' => Str::of('Dịch vụ Sửa máy in máy photocopy tận nơi')->slug('-'),
            'description' => 'Mực in được nhập khẩu từ Nhật Bản đảm bảo bản in đen đậm đẹp chất lượng. Nếu khách hàng cảm thấy không hài lòng có thể hoàn tiền lại.',
            'content' => '<h2>Nạp mực máy in tận nơi giá rẻ</h2>
                <ul>
                    <li>Mực in được nhập khẩu từ Nhật Bản đảm bảo bản in đen đậm đẹp chất lượng. Nếu khách hàng cảm thấy không hài lòng có thể hoàn tiền lại.</li>
                    <li>Kỹ thuật viên giàu kinh nghiệm trong công tác nghiệp vụ. Thái độ thành thật, nhiệt tình, vui vẻ đối với khách hàng.</li>
                    <li>Ngoài ra công ty còn có các dịch vụ như&nbsp;<a href="https://vitinhnhatnghe.com/sua-may-in" title="Sửa máy in tại nhà">sửa máy in tại nhà</a>, sửa máy fax tại nhà. Cung cấp hộp mực máy in các loại</li>
                    <li>Đặt biệt có chiết khấu cho khách hàng mỗi lần sử dụng dịch vụ. Vui lòng liên hệ số điện thoại 0909144225</li>
                </ul>

                <h2><strong>Bảng báo giá đổ mực máy in 2018</strong></h2>

                <p>Dưới đây là&nbsp;<strong>bảng báo giá thay mực máy in</strong>&nbsp;của Công ty Hoang Lai&nbsp;được cập nhập trong năm 2020</p>

                <h2>Bơm mực máy in màu tại các quận TpHCM</h2>

                <p>Công ty Hoàng Lai&nbsp;chuyện&nbsp;<em>bơm mực máy in</em>,&nbsp;<em>nạp mực máy in</em>,&nbsp;<em>đổ mực máy in</em>&nbsp;tại nhà tận nơi. Tại các quận:</p>

                <ul>
                    <li>Bơm mực máy in tại quận 7, 12, 8, 1</li>
                    <li>Bơm mực in quận Tân Bình, Gò Vấp, Bình Thạnh, Thủ Đức,…</li>
                </ul>

                <h2>Thay mực máy in các hãng</h2>

                <h3>Thay mực máy in Canon</h3>

                <p>Hoang Lai hỗ trợ khách hàng thay mực in các dòng Canon: 2900, … tại nhà. Có bảo hành. Đảm bảo chất lượng.</p>

                <h3>Thay mực in HP</h3>

                <p>Với các dòng mực in HP, được Hoàng Lai&nbsp;&nbsp;thay nhanh chóng, chuyên nghiệp.</p>

                <h3>Thay mực máy in Brother</h3>

                <p>Mực in Brother với đầy đủ các dòng của hãng được thay mực nhanh chóng.</p>

                <h2>Cách bơm mực máy in gồm các thao tác</h2>

                <ol>
                    <li>Tháo rời&nbsp;các bộ phận của hộp mực&nbsp;trống, trục sạc, gạt lớn ngăn chứa mực</li>
                    <li>Làm vệ sinh, hút sạch bụi, mực thải&nbsp;xem&nbsp;các hư hỏng hao mòn của các bộ phận và thay thế</li>
                    <li>Đổ&nbsp;sạch mực cũ ở ngăn chính và vệ sinh gạt nhỏ</li>
                    <li>Lắp ráp các chi tiết đã làm sạch</li>
                    <li>Đổ mực mới</li>
                    <li>Sau đó in thử vài trang đầu tiên</li>
                </ol>

                <h2>Cách bảo quản và sử dụng máy in màu đúng cách</h2>

                <ol>
                    <li>Vệ sinh máy in thường xuyên như hút bụi, giấy vụn bên trong máy. 80% sự cố của máy in là từ vệ sinh kém, môi trường nhiều bụi</li>
                    <li>Khi in bị kẹt giấy lập tức tắt điện mở nắp cửa chính lấy hộp mực ra ngoài, rút giấy theo chiều thuận của trang giấy đi</li>
                    <li>Không nên tắt máy in trong giờ làm việc vì muốn tiết kiệm điện. Độ ẩm cao của không khí (miền Bắc VN) cũng là nguyên nhân làm mực vón cục, gây trục trặc</li>
                    <li>Không nên sử dụng giấy quá mỏng, giấy thô còn sót tạp chất có thể làm xước các trống, tạo các lỗi không thể khắc phục được trên trang in</li>
                    <li>Khi trang in có vệt mờ dọc, lấy hộp mực và lắc đều, nếu tình trạng trên biến mất hộp mực sắp hết, bạn chỉ còn có thể in vài chục trang nữa thôi. Chính xác hơn bạn có thể cân hộp mực</li>
                    <li>Bảo trì máy in, hộp mực đúng cách bạn có thể tái đổ hộp mực đến&nbsp;4&nbsp;lần, tiết kiệm được một số tiền không nhỏ</li>
                    <li>Tóm lại việc nạp mực máy in, nếu thực hiện đúng phương pháp chuyên nghiệp thì hoàn toàn không có hại gì cho máy, hay chất lượng trang in cả</li>
                </ol>',
            'favorite_flg' => true,
            'status' => true
        ]);
        $service = Article::find($serviceId);
        $serviceImage = 'dich-vu-sua-may-in-tan-noi.jpeg';
        $filePathRoot = public_path('services/' . $serviceImage) ;
        if (copy($filePathRoot, $filePath = public_path('services/copy-' . $serviceImage))) {
            $media = $service
                ->addMedia($filePath)
                ->toMediaCollection(env('COLLECTION_NAME_IMAGES'));
            $service->featured_image = $media->id;
            $service->save();
        }
    }
}
