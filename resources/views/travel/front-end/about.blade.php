@extends('travel.layout.main')
@section('title')
    about.page
@endsection

@section('header')
    @include('travel.layout.header')
@endsection

@section('content')
  <section class="blog-template" itemscope itemtype="http://schema.org/Blog">
    <meta itemprop="name" content="Tin tức">
    <meta itemprop="description" content="Chủ đề chưa có mô tả">
    <section class="blog-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul>
                        <li class="home">
                            <a itemprop="url" href="{{ url('demoweb') }}" title="Về trang chủ">
                                <span itemprop="title">Trang chủ</span>
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li>
                            <strong itemprop="title">Tin tức</strong>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 blog-articles first">
                    <div class="blog-top-image">
                        <a class="article-image dp-flex" href="{{ url('demoweb/blog-detail') }}" title="Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang">
                            <picture class="dp-flex">

                                <source media="(max-width: 480px)" srcset="{{ asset('vendor/image/articles/2-nhatrang.jpg') }}" />
                                <source media="(min-width: 481px)" srcset="{{ asset('vendor/image/articles/2-nhatrang.jpg') }}" />
                                <img class="img-responsive" src="{{ asset('vendor/image/articles/2-nhatrang.jpg') }}" alt="Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang">

                            </picture>
                        </a>
                    </div>
                    <div class="blog-top-title">
                        <h3 class="article-title">
          <a class="text3line" href="{{ url('demoweb/blog-detail') }}" title="Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang">
            Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang
          </a>
        </h3>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 blog-articles">
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-items-top">
                            <div class="blog-top-image">
                                <a class="article-image dp-flex" href="{{ url('demoweb/blog-detail') }}" title="Phú Quốc - Đảo Ngọc bình yên">
                                    <picture class="dp-flex">

                                        <source media="(min-width: 768px)" srcset="{{ asset('vendor/image/11-bai-sao.jpg') }}" />
                                        <source media="(min-width: 600px) and (max-width: 768px)" srcset="{{ asset('vendor/image/11-bai-sao.jpg') }}" />
                                        <source media="(max-width: 599px)" srcset="{{ asset('vendor/image/11-bai-sao.jpg') }}" />
                                        <img class="img-responsive" src="{{ asset('vendor/image/11-bai-sao.jpg') }}" alt="Phú Quốc - Đảo Ngọc bình yên">

                                    </picture>
                                </a>
                            </div>
                            <div class="blog-top-title">
                                <h3 class="article-title text1line">
              <a class="" href="{{ url('demoweb/blog-detail') }}" title="Phú Quốc - Đảo Ngọc bình yên">
                Phú Quốc - Đảo Ngọc bình yên
              </a>
            </h3>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-items-top">
                            <div class="blog-top-image">
                                <a class="article-image dp-flex" href="{{ url('demoweb/blog-detail') }}" title="Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á">
                                    <picture class="dp-flex">

                                        <source media="(min-width: 768px)" srcset="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" />
                                        <source media="(min-width: 600px) and (max-width: 768px)" srcset="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" />
                                        <source media="(max-width: 599px)" srcset="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" />
                                        <img class="img-responsive" src="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" alt="Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á">

                                    </picture>
                                </a>
                            </div>
                            <div class="blog-top-title">
                                <h3 class="article-title text1line">
              <a class="" href="{{ url('demoweb/blog-detail') }}" title="Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á">
                Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á
              </a>
            </h3>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-items-top">
                            <div class="blog-top-image">
                                <a class="article-image dp-flex" href="{{ url('demoweb/blog-detail') }}" title="Chào mùa yêu thương !">
                                    <picture class="dp-flex">

                                        <source media="(min-width: 768px)" srcset="{{ asset('vendor/image/chao-mua-yeu-thuong-2-resize.jpg') }}" />
                                        <source media="(min-width: 600px) and (max-width: 768px)" srcset="{{ asset('vendor/image/chao-mua-yeu-thuong-2-resize.jpg') }}" />
                                        <source media="(max-width: 599px)" srcset="{{ asset('vendor/image/chao-mua-yeu-thuong-2-resize.jpg') }}" />
                                        <img class="img-responsive" src="{{ asset('vendor/image/chao-mua-yeu-thuong-2-resize.jpg') }}" alt="Chào mùa yêu thương !">

                                    </picture>
                                </a>
                            </div>
                            <div class="blog-top-title">
                                <h3 class="article-title text1line">
              <a class="" href="{{ url('demoweb/blog-detail') }}" title="Chào mùa yêu thương !">
                Chào mùa yêu thương !
              </a>
            </h3>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-items-top">
                            <div class="blog-top-image">
                                <a class="article-image dp-flex" href="{{ url('demoweb/blog-detail') }}" title="Festival hoa Đà Lạt - Điểm hẹn muôn sắc hoa">
                                    <picture class="dp-flex">

                                        <source media="(min-width: 768px)" srcset="{{ asset('vendor/image/2-festival-hoa-da-lat-1.jpg') }}" />
                                        <source media="(min-width: 600px) and (max-width: 768px)" srcset="{{ asset('vendor/image/2-festival-hoa-da-lat-1.jpg') }}" />
                                        <source media="(max-width: 599px)" srcset="{{ asset('vendor/image/2-festival-hoa-da-lat-1.jpg') }}" />
                                        <img class="img-responsive" src="{{ asset('vendor/image/2-festival-hoa-da-lat-1.jpg') }}" alt="Festival hoa Đà Lạt - Điểm hẹn muôn sắc hoa">

                                    </picture>
                                </a>
                            </div>
                            <div class="blog-top-title">
                                <h3 class="article-title text1line">
              <a class="" href="{{ url('demoweb/blog-detail') }}" title="Festival hoa Đà Lạt - Điểm hẹn muôn sắc hoa">
                Festival hoa Đà Lạt - Điểm hẹn muôn sắc hoa
              </a>
            </h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-content">
        <div class="container">
            <div class="row">
                <div class="right-content col-lg-9 col-md-9  col-sm-12 col-xs-12">





                    <h1 class="title-head">
        Tin tức
      </h1>

                    <section class="list-blogs blog-main">

                        <!-- item begin -->
                        <div class="item">
                            <div class="row">
                                <div class="main-blogs-image col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                    <a class="dp-flex" href="{{ url('demoweb/blog-detail') }}" title="Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang">
                                        <picture>

                                            <source media="(min-width: 1200px)" srcset="{{ asset('vendor/image/2-nhatrang.jpg') }}" />
                                            <source media="(min-width: 992px) and (max-width: 1199px)" srcset="{{ asset('vendor/image/2-nhatrang.jpg') }}" />
                                            <source media="(min-width: 768px) and (max-width: 991px)" srcset="{{ asset('vendor/image/2-nhatrang.jpg') }}" />
                                            <source media="(min-width: 500px) and (max-width: 767px)" srcset="{{ asset('vendor/image/2-nhatrang.jpg') }}" />
                                            <source media="(max-width: 499px)" srcset="{{ asset('vendor/image/2-nhatrang.jpg') }}" />
                                            <img class="img-responsive" src="{{ asset('vendor/image/2-nhatrang.jpg') }}" alt="Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang">

                                        </picture>
                                    </a>
                                    <div class="main-blogs-time">
                                        <p>Tháng</p>
                                        <p>12</p>
                                        <p>2015</p>
                                    </div>
                                </div>
                                <div class="main-blogs-info col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                    <h3 class="article-title">
                <a class="text2line" href="{{ url('demoweb/blog-detail') }}" title="Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang">Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang</a>
              </h3>
                                    <div class="article-summary text3line">
                                        Ngày 15/11/2015 vừa qua, đường bay mới Hải Phòng - Nha Trang (tỉnh Khánh Hòa) đã chính thức đi vào hoạt động, đánh dấu sự kết nối mang ý nghĩa quan trọng giữa hai thành phố trọng điểm du lịch quốc gia, góp phần thúc đẩy phát triển du lịch cả nước và phát triển kinh tế xã hội hai địa phương. ...
                                    </div>
                                    <a class="readmore" href="{{ url('demoweb/blog-detail') }}">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- item end -->

                        <!-- item begin -->
                        <div class="item">
                            <div class="row">
                                <div class="main-blogs-image col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                    <a class="dp-flex" href="{{ url('demoweb/blog-detail') }}" title="Phú Quốc - Đảo Ngọc bình yên">
                                        <picture>

                                            <source media="(min-width: 1200px)" srcset="{{ asset('vendor/image/11-bai-sao.jpg') }}" />
                                            <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/033/603/articles/11-bai-sao.jpg?v=1449541293753" />
                                            <source media="(min-width: 768px) and (max-width: 991px)" srcset="{{ asset('vendor/image/11-bai-sao.jpg') }}" />
                                            <source media="(min-width: 500px) and (max-width: 767px)" srcset="{{ asset('vendor/image/11-bai-sao.jpg') }}" />
                                            <source media="(max-width: 499px)" srcset="{{ asset('vendor/image/11-bai-sao.jpg') }}" />
                                            <img class="img-responsive" src="{{ asset('vendor/image/11-bai-sao.jpg') }}" alt="Phú Quốc - Đảo Ngọc bình yên">

                                        </picture>
                                    </a>
                                    <div class="main-blogs-time">
                                        <p>Tháng</p>
                                        <p>12</p>
                                        <p>2015</p>
                                    </div>
                                </div>
                                <div class="main-blogs-info col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                    <h3 class="article-title">
                <a class="text2line" href="{{ url('demoweb/blog-detail') }}" title="Phú Quốc - Đảo Ngọc bình yên">Phú Quốc - Đảo Ngọc bình yên</a>
              </h3>
                                    <div class="article-summary text3line">
                                        Được ví như thiên đường miền nhiệt đới với nhiều bãi biển hoang sơ đẹp mê hồn, Phú Quốc mang đến cho bạn một vùng trời yên bình, là điểm hẹn cuối tuần lý tưởng dành cho những ai muốn chạy trốn khỏi phố phường chật hẹp. Giá tốt nhất thị trường kết hợp nghỉ dưỡng tuyệt vời tại Vinpearl Phú Quốc re...
                                    </div>
                                    <a class="readmore" href="{{ url('demoweb/blog-detail') }}">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- item end -->

                        <!-- item begin -->
                        <div class="item">
                            <div class="row">
                                <div class="main-blogs-image col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                    <a class="dp-flex" href="{{ url('demoweb/blog-detail') }}" title="Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á">
                                        <picture>

                                            <source media="(min-width: 1200px)" srcset="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" />
                                            <source media="(min-width: 992px) and (max-width: 1199px)" srcset="//bizweb.dktcdn.net/thumb/medium/100/033/603/articles/1-ha-noi-1-min-1.jpg?v=1469523455710" />
                                            <source media="(min-width: 768px) and (max-width: 991px)" srcset="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" />
                                            <source media="(min-width: 500px) and (max-width: 767px)" srcset="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" />
                                            <source media="(max-width: 499px)" srcset="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" />
                                            <img class="img-responsive" src="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" alt="Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á">

                                        </picture>
                                    </a>
                                    <div class="main-blogs-time">
                                        <p>Tháng</p>
                                        <p>12</p>
                                        <p>2015</p>
                                    </div>
                                </div>
                                <div class="main-blogs-info col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                    <h3 class="article-title">
                <a class="text2line" href="{{ url('demoweb/blog-detail') }}" title="Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á">Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á</a>
              </h3>
                                    <div class="article-summary text3line">
                                        Vừa qua, tạp chí Travel & Leisure (Mỹ) vừa công bố kết quả bình chọn “Top 10 thành phố tuyệt vời nhất châu Á”. Du lịch Việt Nam có hai thành phố là Hà Nội (đứng thứ 7) và TP.HCM (xếp thứ 9) trong danh sách. Tạp chí này cũng ví von: “Nếu TP.HCM là trái tim cuồng nhiệt của Việt Nam thì Hà Nội là t...
                                    </div>
                                    <a class="readmore" href="{{ url('demoweb/blog-detail') }}">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <!-- item end -->

                        <div class="text-xs-left w100 f-left">

                            <nav>
                                <ul class="pagination clearfix">

                                    <li class="page-item disabled"><a class="page-link" href="#">«</a>
                                    </li>




                                    <li class="active page-item disabled"><a class="page-link" href="#">1</a>
                                    </li>




                                    <li class="page-item"><a class="page-link" href="/tin-tuc?page=2">2</a>
                                    </li>



                                    <li class="page-item"><a class="page-link" href="/tin-tuc?page=2">»</a>
                                    </li>

                                </ul>
                            </nav>

                        </div>
                    </section>

                </div>

                <aside class=" left left-content col-lg-3 col-md-3  hidden-sm hidden-xs">





                    <div class="block margin-bottom-30">
                        <a href="#" title="banner_1">
                            <img class="img-responsive" src="{{ asset('vendor/image/banner_image_1.png') }}" alt="banner_1">
                        </a>
                    </div>





                    <div class="block margin-bottom-30">
                        <a href="#" title="banner_2">
                            <img class="img-responsive" src="{{ asset('vendor/image/banner_image_2.png') }}" alt="banner_2">
                        </a>
                    </div>





                    <div class="block ">
                        <a href="#" title="banner_3">
                            <img class="img-responsive" src="{{ asset('vendor/image/banner_image_3.png') }}" alt="banner_3">
                        </a>
                    </div>


                </aside>

            </div>
        </div>
    </section>
  </section>
@endsection

@section('footer')
    @include('travel.layout.footer')
@endsection