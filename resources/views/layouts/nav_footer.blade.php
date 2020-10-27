<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>全家國際</title>

    <link rel="stylesheet" href="/css/nav_footer.css">

    <!-- boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&family=Poiret+One&display=swap" rel="stylesheet">
    @yield('css')

</head>
<body>
    <div id="bnav" class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-left" href="/"><img height="100%" style="max-width:100px; margin-top: -7px;" src="/images/全家LOGO01.png" alt=""> &emsp;全&nbsp;家&nbsp;國&nbsp;際</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav float-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">首&emsp;&emsp;頁 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/GreenBuilding">綠能建築</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/BM_total" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            日本建材
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/ProductType/1">陶板達人</a>
                            <a class="dropdown-item" href="/ProductType/2">東濃檜木</a>
                            <a class="dropdown-item" href="/ProductType/3">竹地板</a>
                            <a class="dropdown-item" href="/ProductType/4">屋瓦</a>
                            <a class="dropdown-item" href="/ProductType/5">隔熱毯</a>
                            <a class="dropdown-item" href="/ProductType/6">棟飾</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/news_index">最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about_us">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact_us">聯絡我們</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <header>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container-fluid">

            <div class="row align-items-center justify-content-center">
                <div class="footer_address flex-wrap d-xl-none d-lg-none d-md-none col-sm-11 col-12">
                    <div class="row">
                        <div class="col-1"><span class="iconify" data-icon="ic:baseline-add-location"
                                data-inline="false" data-height="20"></span></div>
                        <div class="col-10">台中市北屯區軍福十三路18號</div>
                        <div class="footer_map offset-5 mt-3 d-sm-none d-none d-xl-flex pl-2">GoogleMap</div>
                    </div>
                    <div class="row d-xl-none d-lg-none d-md-none">
                        <div class="col-1"><span class="iconify" data-icon="ls:mail" data-inline="false"></span></div>
                        <div class="footer_email col-10">info@famihouse.com.tw</div>
                    </div>
                </div>
                <div class="d-xl-none d-lg-none d-md-none col-sm-11 col-12">
                    <div class="row">
                        <div class="col-1"><span class="iconify" data-icon="ant-design:phone-outlined"
                                data-inline="false" data-height="24"></span></div>
                        <div class="footer_phone col-10">04-22392834<br>04-23016970</div>
                    </div>
                    <div class="row">
                        <div class="col-1">©</div>
                        <div class="footer_phone col-10">全家國際有限公司</div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="footer_logo col-xl-5 col-lg-4 col-md-4 d-none d-md-block">
                    ©全家國際有限公司
                </div>
                <div class="footer_address col-lg-4 col-md-5 d-none d-md-block d-xl-block flex-wrap">
                    <div class="row">
                        <div class="col-1"><span class="iconify" data-icon="ic:baseline-add-location"
                                data-inline="false" data-height="20"></span></div>
                        <div class="col-10">台中市北屯區軍福十三路18號</div>
                        <a href='https://www.google.com/maps/place/406%E5%8F%B0%E4%B8%AD%E5%B8%82%E5%8C%97%E5%B1%AF%E5%8D%80%E8%BB%8D%E7%A6%8F%E5%8D%81%E4%B8%89%E8%B7%AF18%E8%99%9F/@24.170371,120.732549,16z/data=!4m5!3m4!1s0x34691814fd9f46a5:0xb535568adf888c0b!8m2!3d24.170371!4d120.7325492?hl=zh-TW' class="footer_map offset-3 mt-3 d-sm-none d-none d-xl-flex pl-2">GoogleMap</a>
                    </div>
                    <div class="row d-xl-none d-md-flex">
                        <div class="col-1"><span class="iconify" data-icon="ls:mail" data-inline="false"></span></div>
                        <div class="footer_email col-9">info@famihouse.com.tw</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 d-none d-md-block d-xl-block">
                    <div class="row  d-sm-none d-none d-xl-flex">
                        <div class="col-1"><span class="iconify" data-icon="ls:mail" data-inline="false"></span></div>
                        <div class="footer_email col-10">info@famihouse.com.tw</div>
                    </div>
                    <div class="row">
                        <div class="col-1"><span class="iconify" data-icon="ant-design:phone-outlined"
                                data-inline="false" data-height="24"></span></div>
                        <div class="footer_phone col-10">04-22392834<br>04-23016970</div>
                    </div>
                </div>

            </div>

        </div>
    </footer>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <!-- boostrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <!-- icon -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    @yield('js')
</body>
</html>
