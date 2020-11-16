@extends('layouts/nav_footer')

@section('css')
    <link rel="stylesheet" href="/css/contact_us.css">
@endsection

@section('header')
    <section id="section01">
        <div class="container-fluid">
            <div class="title_group row justify-content-center align-items-center">

                <!-- 聯絡我們文字 -->
                <div class="col-12 col-lg-5  title d-flex align-items-center justify-content-end">
                    <div class="title_box mt-5 my-5 ">
                        <div class="row contact_us justify-content-end align-items-center no-gutters">
                            <div class="title_text">聯絡我們</div>
                            <div class="w-100"></div>
                            <div class="sec1_line"></div>
                            <div class="sub_text">歡迎來電洽詢。
                            </div>
                        </div>
                    </div>
                </div>


                <!-- 大尺寸時看到的圖 -->
                <div class="col-12 col-lg-7 d-none d-lg-block photo">
                    <img src="/images/contact_us/全家綠建築.png" alt="全家綠建築" style="width: 100%; ">
                </div>
                <div class="col-12 col-lg-7 d-block d-lg-none photo">
                    <img src="/images/contact_us/全家綠建築_直.png" alt="全家綠建築" style="width: 100%; ">
                </div>
            </div>
        </div>
    </section>
    <hr>

@endsection

@section('content')
    <section class="call_us " id="map">
        <div class="container py-5">
            <div class="row justify-content-center">
                <!-- 文字區域 -->
                <div class="col-lg-5 py-50 ">
                    <div class="group_content text-center d-flex contact-center">

                        <div class="text-bottom " data-aos="fade-down">
                            <h3 class="title-number">01</h3>
                        </div>
                        <div class="title_grp">
                            <div class="content_title">聯絡方式</div>
                            <div class="sub_title">歡迎來電洽詢</div>
                        </div>
                    </div>

                    <div class="content_grp">
                        <div class="info_grp col-12">
                            <div class="address_title col-2 p-0">地址</div>
                            <div class="col-12 d-flex info">
                                <div class="icon"><span class="iconify" data-icon="ic:baseline-add-location"
                                        data-inline="false" data-height="20"></span><i class="map"></i></div>
                                <div class="text col-11 ">406 台中市北屯區軍福十三路18號</div>
                            </div>
                        </div>

                        <div class="info_grp col-12">
                            <div class="address_title col-2 p-0">Email</div>
                            <div class="col-12 d-flex info">
                                <div class="icon"><span class="iconify" data-icon="ls:mail" data-inline="false"></span><i
                                        class="map"></i></div>
                                <a class="text col-11" href="mailto:info@famihouse.com.tw">info@famihouse.com.tw</a>
                            </div>
                        </div>


                        <div class="info_grp col-12">
                            <div class="address_title col-2 p-0">Line</div>
                            <div class="col-12 d-flex info">
                                <div class="icon"><span class="iconify" data-icon="cib:line" data-inline="false" data-width="20" data-height="20"></span><i class="map"></i></div>
                                <div class="text col-11 ">hawk0506</div>
                            </div>
                        </div>

                        <div class="info_grp col-12">
                            <div class="address_title col-2 p-0">電話</div>
                            <div class="col-12 d-flex info">
                                <div class="icon"><span class="iconify" data-icon="ant-design:phone-outlined"
                                        data-inline="false" data-height="24"></span><i class="map"></i></div>
                                <div class="text col-11 ">04-22392834<br>04-22392180</div>
                            </div>
                        </div>
                        <!-- <div class="btn_contact_us m-auto">聯絡我們</div> -->
                    </div>
                </div>

                <!-- GOOGLE MAP : 大的版面-->
                <div class="google_map col-lg-7 py-50 ">
                    <div class="d-flex justify-content-center align-items-center rwd-map">
                        <iframe width="552" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.0386893164655!2d120.73036051543644!3d24.170375878518442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691814fd9f46a5%3A0xb535568adf888c0b!2zNDA25Y-w5Lit5biC5YyX5bGv5Y2A6LuN56aP5Y2B5LiJ6LevMTjomZ8!5e0!3m2!1szh-TW!2stw!4v1603158826559!5m2!1szh-TW!2stw"></iframe>
                        <div class="google_map_btn m-auto">Google Map</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container super_line">

        </div>
    </section>

    <!-- Divider -->
    <!-- <div class="link-top"></div>
        <br><br><br><br><br> -->

    <!-- Form -->
    <section class="customer_form" id="customer_form">
        <div class="container py-5">
            <div class="row text-center justify-content-center mb-5">
                <div class="title-number mb-3">02</div>
                <div class="w-100"></div>
                <h2 class="content_title">聯絡我們</h2>
            </div>
            <form method="post" enctype="" class="" action="/contact_us">
            @csrf
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="form-group row mb-lg-5">
                            <label for="user_name" class="col-sm-2 col-form-label">
                                客戶姓名
                                <span class="ml-1 text-danger font-weight-bold">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="user_name" value="" id="user_name" require>
                            </div>
                        </div>
                        <div class="form-group row mb-lg-5">
                            <label for="telephone_number" class="col-sm-2 col-form-label">家用電話</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="telephone_number" value="" id="telephone_number">
                            </div>
                        </div>
                        <div class="form-group row mb-lg-5">
                            <label for="phone_number" class="col-sm-2 col-form-label">行動電話</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone_number" value="" id="phone_number">
                            </div>
                        </div>
                        <div class="form-group row mb-lg-5">
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" value="" id="email">
                            </div>
                        </div>
                        <div class="form-group row mb-lg-5">
                            <label for="serverce_id" class="col-sm-2 col-form-label">
                                服務類型
                                <span class="ml-1 text-danger font-weight-bold">*</span></label>
                            </label>
                            <div class="col-sm-10">
                                <select name="serverce_id" id="serverce_id">
                                    @foreach($contact_service_list as $contact_service)
                                        <option value="{{$contact_service->id}}">{{$contact_service->service_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-lg-5">
                            <label for="subject" class="col-sm-2 col-form-label">
                                主旨
                                <span class="ml-1 text-danger font-weight-bold">*</span></label>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="subject" value="" id="subject">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inner_text" class="col-sm-2 col-form-label">
                                內文
                                <span class="ml-1 text-danger font-weight-bold">*</span></label>
                            </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="inner_text" id="inner_text" cols="30"
                                    rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row py-5">
                            <div class="offset-md-2 col-md-2">
                                <img src="http://www.hcgc.com.tw/newcode" alt="" class="newcodeimg">
                            </div>
                            <div class="col-md-5">
                                <div class="form-group row">
                                    <label for="code" class="col-sm-5 col-form-label">請輸入驗證碼</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="" name="code" id="code"
                                            data-rule-remote="http://www.hcgc.com.tw/newcode/validate"
                                            data-msg-remote="驗證碼輸入錯誤" required="">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-3" id="recaptcha_form">
                                <div id="recaptcha" class="g-recaptcha" data-sitekey="6Lfuqx0UAAAAADMw93F6Y0gy6Cw3P_b2NasBDWkM" data-callback="verifyCallback" data-expired-callback="expCallback"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lfuqx0UAAAAADMw93F6Y0gy6Cw3P_b2NasBDWkM&amp;co=aHR0cDovL3d3dy50Y2Nvbi5jb20udHc6ODA.&amp;hl=zh-TW&amp;v=T9w1ROdplctW2nVKvNJYXH8o&amp;size=normal&amp;cb=yowjngas304m" width="304" height="78" role="presentation" name="a-l5ez64l1dg3u" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                            </div> -->
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary btn-lg" name="save-contactus"
                                value="contactus">確認送出</button>
                            <button type="reset" class="btn btn-secondary btn-lg ">清除</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('js')

@endsection
