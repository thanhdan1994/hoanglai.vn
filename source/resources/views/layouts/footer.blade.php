<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="multiple-logo">
                    <div class="main-logo">
                        <a href="{{ route('home') }}">
                            <img src="/img/logo.png" />
                        </a>
                    </div>
                    <div class="vendor-logos">
                        <h2>{{ $settings['companyName'] }}</h2>
                        <ul class="logos">
                            <li>
                                <a href="javascript: void(0)">
                                    <img src="https://cdn.tgdd.vn/Brand/1/Brother5693-b_32.jpg" style="height: 24px;"/>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0)">
                                    <img src="https://cdn.tgdd.vn/Brand/1/HP5693-b_36.jpg" style="height: 24px;"/>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0)">
                                    <img src="https://cdn.tgdd.vn/Brand/1/Canon5693-b_46.jpg" style="height: 24px;"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="copyright">Địa chỉ: {{ $settings['address1'] }}</p>
                {!!  !empty($settings['address2']) ? '<p class="copyright">Địa chỉ: '. $settings['address2'].'</p>' : ''  !!}
            </div>
            <div class="col-lg-4">
                <div class="social">
                    <h4>Liên hệ với chúng tôi</h4>
                    <ul>
                        <li><a><i class="icon-social-facebook"></i></a></li>
                        <li><a><i class="icon-social-instagram"></i></a></li>
                        <li><a><i class="icon-social-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <dl>
                    <dt>TƯ VẤN THUÊ MÁY PHOTOCOPY</dt>
                    <dd class="mb10"><a href="tel:{{$settings['phone1']}}"><i class="icon-phone"></i>{{$settings['phone1']}}</a></dd>
                    <dd><a href="mailto:{{$settings['email']}}"><i class="icon-mail"></i>{{$settings['email']}}</a></dd>
                </dl>
            </div>
            <div class="col-lg-4">
                <dl>
                    <dt>HỖ TRỢ KỸ THUẬT</dt>
                    <dd class="mb10"><a href="tel:{{$settings['phone2']}}"><i class="icon-phone"></i>{{$settings['phone2']}}</a></dd>
                </dl>
            </div>
            <div class="col-lg-4">
                <dl>
                    <dt>GỌI MUA HÀNG</dt>
                    <dd class="mb10"><a href="tel:{{$settings['phone3']}}">{{$settings['phone3']}}</a></dd>
{{--                    <dd class="mb10"><a href="tel:0909144005">0909.146.005 (Ms.Nhung)</a></dd>--}}
                </dl>
            </div>
        </div>
        <p class="copyright pt14">© Copyright 2021 HOANGLAI-PRINTER, All rights reserved <br> ® Giải pháp in Hoàng Lai giữ bản quyền nội dung trên website này</p>
    </div>
</footer>
