<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ env('APP_URL') . '/favicon.ico' }}" />
    <title>Cho thuê máy in, bán máy in, sữa chữa máy in nhanh chóng giá rẻ tại Tp.HCM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="/stylesheets/styles.css">
    @yield('css')
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "url": "https://hoanglai.vn",
        "name": "Hoang Lai - Cho thuê máy in, bán máy in, sữa chữa máy in nhanh chóng giá rẻ tại Tp.HCM",
        "description": "Hoang Lai là công ty hàng đầu về lĩnh vực máy photocopy, hiện công ty đang phân phối các dòng máy photocopy Ricoh với giá tốt, kèm theo các dịch vụ cho thuê máy photocopy uy tín, chất lượng."
    }
    </script>
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <div class="fix_tel">
        <div class="tel">
            <a href="tel:0909144005"><p class="fone">0909.144.005</p></a>
        </div>
        <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="right: 150px; bottom: -12px;">
            <div class="ring-alo-ph-circle"></div>
            <div class="ring-alo-ph-img-circle">
                <a href="tel:0909144005"><img class="lazy" src="/img/phone-call.png" alt="G"></a>
            </div>
        </div>
    </div>
    <div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
    <style>
        .fone {
            font-size: 19px;
            color: #980e01;
            line-height: 30px;
            font-weight: bold;
            padding-left: 15px;
            padding-top: 5px;
            margin: 0 0;
        }
        .fix_tel {
            position: fixed;
            bottom: 15px;
            left: 18px;
            z-index: 999;
        }
        .fix_tel a {
            text-decoration: none;
            display: block;
        }
        .tel {
            background: #9ccfea;
            width: 205px;
            height: 40px;
            position: relative;
            overflow: hidden;
            background-size: 40px;
            border-radius: 28px;
            border: none;
        }
        .ring-alo-phone {
            background-color: transparent;
            cursor: pointer;
            height: 80px;
            position: absolute;
            transition: visibility 0.5s ease 0s;
            visibility: hidden;
            width: 80px;
            z-index: 200000 !important;
        }
        .ring-alo-phone.ring-alo-show {
            visibility: visible;
        }
        .ring-alo-phone.ring-alo-hover,
        .ring-alo-phone:hover {
            opacity: 1;
        }
        .ring-alo-ph-circle {
            animation: 1.2s ease-in-out 0s normal none infinite running ring-alo-circle-anim;
            background-color: transparent;
            border: 2px solid rgba(30,30,30,0.4);
            border-radius: 100%;
            height: 70px;
            left: 162px;
            opacity: 0.1;
            position: absolute;
            top: 12px;
            transform-origin: 50% 50% 0;
            transition: all 0.5s ease 0s;
            width: 70px;
        }
        .ring-alo-phone.ring-alo-active .ring-alo-ph-circle {
            animation: 1.1s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
        }
        .ring-alo-phone.ring-alo-static .ring-alo-ph-circle {
            animation: 2.2s ease-in-out 0s normal none infinite running ring-alo-circle-anim !important;
        }
        .ring-alo-phone.ring-alo-hover .ring-alo-ph-circle,
        .ring-alo-phone:hover .ring-alo-ph-circle {
            border-color: #009900;
            opacity: 0.5;
        }
        .ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-circle,
        .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-circle {
            border-color: #baf5a7;
            opacity: 0.5;
        }
        .ring-alo-phone.ring-alo-green .ring-alo-ph-circle {
            border-color: #009900;
            opacity: 0.5;
        }
        .ring-alo-ph-circle-fill {
            animation: 2.3s ease-in-out 0s normal none infinite running ring-alo-circle-fill-anim;
            background-color: #000;
            border: 2px solid transparent;
            border-radius: 100%;
            height: 30px;
            left: 30px;
            opacity: 0.1;
            position: absolute;
            top: 31px;
            transform-origin: 50% 50% 0;
            transition: all 0.5s ease 0s;
            width: 30px;
        }
        .ring-alo-phone.ring-alo-hover .ring-alo-ph-circle-fill,
        .ring-alo-phone:hover .ring-alo-ph-circle-fill {
            background-color: rgba(0,175,242,0.5);
            opacity: 0.75 !important;
        }
        .ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-circle-fill,
        .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-circle-fill {
            background-color: rgba(117,235,80,0.5);
            opacity: 0.75 !important;
        }
        .ring-alo-phone.ring-alo-green .ring-alo-ph-circle-fill {
            background-color: rgba(0,175,242,0.5);
            opacity: 0.75 !important;
        }
        .ring-alo-ph-img-circle {
            animation: 1s ease-in-out 0s normal none infinite running ring-alo-circle-img-anim;
            border: 2px solid transparent;
            border-radius: 100%;
            height: 30px;
            left: 180px;
            opacity: 1;
            position: absolute;
            top: 31px;
            transform-origin: 50% 50% 0;
            width: 30px;
        }
        .ring-alo-phone.ring-alo-green .ring-alo-ph-img-circle {
            /*background-color: #0d85c4;*/
        }
        @keyframes ring-alo-circle-anim {
            0% {
                opacity: 0.1;
                transform: rotate(0deg) scale(0.5) skew(1deg);
            }
            30% {
                opacity: 0.5;
                transform: rotate(0deg) scale(0.7) skew(1deg);
            }
            100% {
                opacity: 0.6;
                transform: rotate(0deg) scale(1) skew(1deg);
            }
        }
        @keyframes ring-alo-circle-img-anim {
            0% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }
            10% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }
            20% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }
            30% {
                transform: rotate(-25deg) scale(1) skew(1deg);
            }
            40% {
                transform: rotate(25deg) scale(1) skew(1deg);
            }
            50% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }
            100% {
                transform: rotate(0deg) scale(1) skew(1deg);
            }
        }
        @keyframes ring-alo-circle-fill-anim {
            0% {
                opacity: 0.2;
                transform: rotate(0deg) scale(0.7) skew(1deg);
            }
            50% {
                opacity: 0.2;
                transform: rotate(0deg) scale(1) skew(1deg);
            }
            100% {
                opacity: 0.2;
                transform: rotate(0deg) scale(0.7) skew(1deg);
            }
        }
        .ring-alo-ph-img-circle a img {
            padding: 1px 0 12px 1px;
            width: 30px;
            position: relative;
            top: -1px;
        }
    </style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/stylesheets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/stylesheets/js/popper.min.js"></script>
    <script src="/stylesheets/js/bootstrap.min.js"></script>
    <script>
        function closeMenu() {
            let over = document.getElementsByClassName('over')[0];
            let subnav = document.getElementsByClassName('subnav')[0];
            subnav.style.display = 'none';
            over.style.display = 'none';
        }
        function openMenu() {
            let over = document.getElementsByClassName('over')[0];
            let subnav = document.getElementsByClassName('subnav')[0];
            subnav.style.display = 'block';
            over.style.display = 'block';
        }
    </script>
    @yield('js')
</body>
</html>
