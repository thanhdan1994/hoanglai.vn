<header class="header mb60">
    <div class="container flex flex-mobile">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="/img/logo.png" />
            </a>
        </div>
        <ul class="flex ml20 pt14">
            <li>
                <h4>
                    <a href="{{ route('home.product-category.printer') }}">
                        <i class="icon-printer"></i>
                        <span>MÁY IN</span>
                    </a>
                </h4>
            </li>
            <li>
                <h4>
                    <a href="{{ route('home.product-category.photocopy') }}">
                        <i class="icon-copy-machine"></i>
                        <span>MÁY PHOTOCOPY</span>
                    </a>
                </h4>
            </li>
            <li>
                <h4>
                    <a href="{{ route('home.product-category.cartridge') }}">
                        <i class="icon-cartridge"></i>
                        <span>HỘP MỰC MÁY IN</span>
                    </a>
                </h4>
            </li>
            <li>
                <h4>
                    <a href="{{ route('home.articles.news') }}">
                        <i class="icon-news"></i>
                        <span>TIN TỨC</span>
                    </a>
                </h4>
            </li>
            <li>
                <h4>
                    <a href="{{ route('home.articles.xulysuco') }}">
                        <i class="icon-maintenance"></i>
                        <span>XỬ LÝ SỰ CỐ</span>
                    </a>
                </h4>
            </li>
        </ul>
        <a href="javascript: void(0)" onclick="openMenu()"><img class="menu-icon" src="/img/menu-icon-32x32.png"/></a>
    </div>
    <nav class="subnav">
        <span class="close" onclick="closeMenu()"><img class="menu-icon" src="/img/close-menu-icon-32x32.png"/></span>
        <div class="navigation animate-bottom">
            <a href="{{ route('home.product-category.printer') }}">
                <i class="icon-printer"></i>
                <span>MÁY IN</span>
            </a>
            <a href="{{ route('home.product-category.photocopy') }}">
                <i class="icon-copy-machine"></i>
                <span>MÁY PHOTOCOPY</span>
            </a>
            <a href="{{ route('home.product-category.cartridge') }}">
                <i class="icon-cartridge"></i>
                <span>HỘP MỰC MÁY IN</span>
            </a>
            <a href="{{ route('home.articles.news') }}">
                <i class="icon-news"></i>
                <span>TIN TỨC</span>
            </a>
            <a href="{{ route('home.articles.xulysuco') }}">
                <i class="icon-maintenance"></i>
                <span>XỬ LÝ SỰ CỐ</span>
            </a>
        </div>
    </nav>
    <div class="over" onclick="closeMenu()"></div>
</header>
