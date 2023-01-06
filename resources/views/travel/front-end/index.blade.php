@extends('travel.layout.main')
@section('title')
    index.page
@endsection
@section('header')
  @include('travel.layout.header')
@endsection

@section('content')
  <h1 class="hidden">BizTravel - </h1>


  <section class="awe-section-1">
      <div class="home-slider swiper-container">
          <div class="swiper-wrapper">





              <div class="item swiper-slide">
                  <a href="#" class="clearfix">
                      <picture>
                          <source media="(max-width: 480px)" srcset="{{ asset('vendor/image/articles/slider_1.jpg?1649413074140') }}">
                              <source media="(min-width: 481px) and (max-width: 600px)" srcset="{{ asset('vendor/image/articles/slider_1.jpg?1649413074140') }}">
                                  <source media="(min-width: 601px) and (max-width: 1023px)" srcset="{{ asset('vendor/image/articles/slider_1.jpg?1649413074140') }}">
                                      <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="{{ asset('vendor/image/articles/slider_1.jpg?1649413074140') }}">
                                          <source media="(min-width: 1200px)" srcset="{{ asset('vendor/image/articles/slider_1.jpg?1649413074140') }}">
                                              <img class="lazyload" src="{{ asset('vendor/image/articles/slider_1.jpg?1649413074140') }}" alt="BizTravel">
                      </picture>
                  </a>
              </div>





          </div>
      </div>

      <script>
          var swiper = new Swiper('.home-slider', {
              autoplay: {
                  delay: 4500,
                  disableOnInteraction: false
              },
          });
      </script>
  </section>


  <section class="awe-section-2">
      <div class="main-service hidden-xs lazyload" data-src="{{ asset('vendor/image/service_background_image.png?1649413074140') }}">
          <div class="container">
              <div class="row">
                  <div class="swiper_service swiper-container">
                      <div class="swiper-wrapper">



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_1.png?1649413074140') }}" alt="Hành trình">
                              <h4 class="heading-service">Hành trình</h4>
                          </div>



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_2.png?1649413074140') }}" alt="Cao cấp">
                              <h4 class="heading-service">Cao cấp</h4>
                          </div>



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_3.png?1649413074140') }}" alt="Tuần Trăng mật">
                              <h4 class="heading-service">Tuần Trăng mật</h4>
                          </div>



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_4.png?1649413074140') }}" alt="Khám phá">
                              <h4 class="heading-service">Khám phá</h4>
                          </div>



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_5.png?1649413074140') }}" alt="Sinh thái">
                              <h4 class="heading-service">Sinh thái</h4>
                          </div>



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_6.png?1649413074140') }}" alt="Đi biển">
                              <h4 class="heading-service">Đi biển</h4>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>

      <script>
          var swiper = new Swiper('.swiper_service', {
              slidesPerView: 6,
              spaceBetween: 0,
              slidesPerGroup: 1,
              breakpoints: {
                  300: {
                      slidesPerView: 2,
                      spaceBetween: 0
                  },
                  500: {
                      slidesPerView: 2,
                      spaceBetween: 0
                  },
                  640: {
                      slidesPerView: 2,
                      spaceBetween: 0
                  },
                  768: {
                      slidesPerView: 3,
                      spaceBetween: 0
                  },
                  992: {
                      slidesPerView: 6,
                      spaceBetween: 0
                  },
                  1200: {
                      slidesPerView: 6,
                      spaceBetween: 0
                  }
              }
          });
      </script>
  </section>


  <section class="awe-section-3">
      <div class="main-honey-moon">

          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="module-heading product-loop-heading">
                          <p>Khám phá điểm du lịch</p>
                          <h2 class="module-title">
          <span>Tuần trăng mật</span>
          <a class="btn-viewall" href="san-pham-noi-bat" title="Xem tất cả">
            <span class="hidden-xs">Xem tất cả </span><i class="fa fa-long-arrow-right"></i>
          </a>
        </h2>
                      </div>




                      <div class="module-content product-loop-content swiper_honey_moon swiper-container">
                          <div class="swiper-wrapper">

                              <div class="item swiper-slide">





                                  <div class="product-box">
                                      <div class="product-thumbnail">
                                          <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Singapore" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/singapore.jpg') }}" class="img-responsive lazyload" title="Du lịch Singapore" alt="Du lịch Singapore">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Singapore">Du lịch Singapore</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">25.296.000₫</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
            26.000.000₫
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895490" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363077" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                          <span>Đặt ngay</span>
                                                      </button>



                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="item swiper-slide">





                                  <div class="product-box">
                                      <div class="product-thumbnail">
                                          <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội hoa anh đào" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/cherry-blossom.jpg') }}" class="img-responsive lazyload" title="Lễ hội hoa anh đào" alt="Lễ hội hoa anh đào">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội hoa anh đào">Lễ hội hoa anh đào</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">35.000.000₫</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895489" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363076" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                          <span>Đặt ngay</span>
                                                      </button>



                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="item swiper-slide">





                                  <div class="product-box">
                                      <div class="product-thumbnail">
                                          <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội bia Oktoberfest" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}" class="img-responsive lazyload" title="Lễ hội bia Oktoberfest" alt="Lễ hội bia Oktoberfest">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội bia Oktoberfest">Lễ hội bia Oktoberfest</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">45.000.000₫</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895485" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363072" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                          <span>Đặt ngay</span>
                                                      </button>



                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="item swiper-slide">





                                  <div class="product-box">
                                      <div class="product-thumbnail">
                                          <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Hoa Kỳ" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}" class="img-responsive lazyload" title="Du lịch Hoa Kỳ" alt="Du lịch Hoa Kỳ">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Hoa Kỳ">Du lịch Hoa Kỳ</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">56.916.000₫</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
            60.000.000₫
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895480" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363067" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                          <span>Đặt ngay</span>
                                                      </button>



                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="item swiper-slide">





                                  <div class="product-box">
                                      <div class="product-thumbnail">
                                          <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội Hawaii" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hawaii.jpg') }}" class="img-responsive lazyload" title="Lễ hội Hawaii" alt="Lễ hội Hawaii">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội Hawaii">Lễ hội Hawaii</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">63.240.000₫</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
            65.000.000₫
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895477" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363064" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                          <span>Đặt ngay</span>
                                                      </button>



                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="item swiper-slide">





                                  <div class="product-box">
                                      <div class="product-thumbnail">
                                          <a href="{{ url('demoweb/product-detail') }}" title="Thiên đường Maldives" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/malaysia-f22a94cd-4a5e-47c5-b653-4c7400984292.jpg') }}" class="img-responsive lazyload" title="Thiên đường Maldives" alt="Thiên đường Maldives">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Thiên đường Maldives">Thiên đường Maldives</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">42.160.000₫</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
            45.000.000₫
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895473" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363060" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                          <span>Đặt ngay</span>
                                                      </button>



                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="item swiper-slide">





                                  <div class="product-box">
                                      <div class="product-thumbnail">
                                          <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội Venice" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/venice.jpg') }}" class="img-responsive lazyload" title="Lễ hội Venice" alt="Lễ hội Venice">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội Venice">Lễ hội Venice</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">46.376.000₫</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895476" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363063" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                          <span>Đặt ngay</span>
                                                      </button>



                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="item swiper-slide">





                                  <div class="product-box">
                                      <div class="product-thumbnail">
                                          <a href="{{ url('demoweb/product-detail') }}" title="Khách sạn Mahali Mzuri" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}" class="img-responsive lazyload" title="Khách sạn Mahali Mzuri" alt="Khách sạn Mahali Mzuri">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Khách sạn Mahali Mzuri">Khách sạn Mahali Mzuri</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">2.367.000₫</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895463" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363048" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                          <span>Đặt ngay</span>
                                                      </button>



                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
      <script>
          var swiper = new Swiper('.swiper_honey_moon', {
              slidesPerView: 4,
              spaceBetween: 15,
              slidesPerGroup: 1,
              breakpoints: {
                  300: {
                      slidesPerView: 1,
                      spaceBetween: 15
                  },
                  500: {
                      slidesPerView: 1,
                      spaceBetween: 15
                  },
                  640: {
                      slidesPerView: 2,
                      spaceBetween: 15
                  },
                  768: {
                      slidesPerView: 3,
                      spaceBetween: 15
                  },
                  992: {
                      slidesPerView: 3,
                      spaceBetween: 15
                  },
                  1200: {
                      slidesPerView: 4,
                      spaceBetween: 15
                  }
              }
          });
      </script>
  </section>




  <section class="awe-section-4">
      <div class="main-banners hidden-xs">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                      <div class="row">




                          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 margin-bottom-30">
                              <a href="#" title="banner_1">
                                  <img class="img-responsive w100 lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/banner_image_1.png?1649413074140') }}" alt="banner_1">
                              </a>
                          </div>




                          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 margin-bottom-30">
                              <a href="#" title="banner_2">
                                  <img class="img-responsive w100 lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/banner_image_2.png?1649413074140') }}" alt="banner_2">
                              </a>
                          </div>

                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 margin-bottom-30">
                      <a href="#" title="banner_3">
                          <img class="img-responsive w100 lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/banner_image_3.png?1649413074140') }}" alt="banner_3">
                      </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                      <div class="row">




                          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 margin-bottom-30">
                              <a href="#" title="banner_4">
                                  <img class="img-responsive w100 lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/banner_image_4.png?1649413074140') }}" alt="banner_4">
                              </a>
                          </div>




                          <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 margin-bottom-30">
                              <a href="#" title="banner_5">
                                  <img class="img-responsive w100 lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/banner_image_5.png?1649413074140') }}" alt="banner_5">
                              </a>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>




  <section class="awe-section-5">
      <div class="main-best-tour">


          <div class="main-best-tour-heading">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="module-heading product-loop-heading">
                              <p>Giới thiệu các điểm đến hàng đầu</p>
                              <h2 class="module-title">
            <span>Điểm đến du lịch hàng đầu</span>
            <a class="btn-viewall" href="/collections/all" title="Xem tất cả">
              <span class="hidden-xs">Xem tất cả </span><i class="fa fa-long-arrow-right"></i>
            </a>
          </h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="main-best-tour-content lazyload" data-src="{{ asset('vendor/image/main_best_tour_content_background.png?1649413074140') }}">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                          <div class="sidebar-linklists">
                              <ul>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Du lịch Châu Á">
                                          <span>Du lịch Châu Á</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Du lịch Châu Âu">
                                          <span>Du lịch Châu Âu</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Du lịch trong nước">
                                          <span>Du lịch trong nước</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Du lịch trải nghiệm">
                                          <span>Du lịch trải nghiệm</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Tour trăng mật">
                                          <span>Tour trăng mật</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Vé máy bay">
                                          <span>Vé máy bay</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Khách sạn">
                                          <span>Khách sạn</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Tour giá rẻ">
                                          <span>Tour giá rẻ</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Tour nối bật">
                                          <span>Tour nối bật</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Tour khuyến mãi">
                                          <span>Tour khuyến mãi</span>
                                      </a>

                                  </li>

                              </ul>
                          </div>


                          <div class="banner-linklists hidden-sm hidden-xs">
                              <a href="#" title="banner">
                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/banner_linklist.png?1649413074140') }}" class="img-responsive lazyload" alt="banner">
                              </a>
                          </div>

                      </div>

                      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">




                          <div class="module-content product-loop-content swiper_best_tour swiper-container">
                              <div class="swiper-wrapper">

                                  <div class="item swiper-slide">





                                      <div class="product-box">
                                          <div class="product-thumbnail">
                                              <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Singapore" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/singapore.jpg') }}" class="img-responsive lazyload" title="Du lịch Singapore" alt="Du lịch Singapore">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Singapore">Du lịch Singapore</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">25.296.000₫</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
            26.000.000₫
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895490" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363077" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                              <span>Đặt ngay</span>
                                                          </button>



                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="item swiper-slide">





                                      <div class="product-box">
                                          <div class="product-thumbnail">
                                              <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội hoa anh đào" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/cherry-blossom.jpg') }}" class="img-responsive lazyload" title="Lễ hội hoa anh đào" alt="Lễ hội hoa anh đào">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội hoa anh đào">Lễ hội hoa anh đào</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">35.000.000₫</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895489" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363076" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                              <span>Đặt ngay</span>
                                                          </button>



                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="item swiper-slide">





                                      <div class="product-box">
                                          <div class="product-thumbnail">
                                              <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội bia Oktoberfest" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}" class="img-responsive lazyload" title="Lễ hội bia Oktoberfest" alt="Lễ hội bia Oktoberfest">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội bia Oktoberfest">Lễ hội bia Oktoberfest</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">45.000.000₫</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895485" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363072" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                              <span>Đặt ngay</span>
                                                          </button>



                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="item swiper-slide">





                                      <div class="product-box">
                                          <div class="product-thumbnail">
                                              <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Hoa Kỳ" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}" class="img-responsive lazyload" title="Du lịch Hoa Kỳ" alt="Du lịch Hoa Kỳ">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Hoa Kỳ">Du lịch Hoa Kỳ</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">56.916.000₫</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
            60.000.000₫
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895480" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363067" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                              <span>Đặt ngay</span>
                                                          </button>



                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="item swiper-slide">





                                      <div class="product-box">
                                          <div class="product-thumbnail">
                                              <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội Hawaii" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hawaii.jpg') }}" class="img-responsive lazyload" title="Lễ hội Hawaii" alt="Lễ hội Hawaii">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội Hawaii">Lễ hội Hawaii</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">63.240.000₫</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
            65.000.000₫
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895477" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363064" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                              <span>Đặt ngay</span>
                                                          </button>



                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="item swiper-slide">





                                      <div class="product-box">
                                          <div class="product-thumbnail">
                                              <a href="{{ url('demoweb/product-detail') }}" title="Thiên đường Maldives" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/malaysia-f22a94cd-4a5e-47c5-b653-4c7400984292.jpg') }}" class="img-responsive lazyload" title="Thiên đường Maldives" alt="Thiên đường Maldives">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Thiên đường Maldives">Thiên đường Maldives</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">42.160.000₫</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
            45.000.000₫
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895473" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363060" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                              <span>Đặt ngay</span>
                                                          </button>



                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="item swiper-slide">





                                      <div class="product-box">
                                          <div class="product-thumbnail">
                                              <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội Venice" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/venice.jpg') }}" class="img-responsive lazyload" title="Lễ hội Venice" alt="Lễ hội Venice">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội Venice">Lễ hội Venice</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">46.376.000₫</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895476" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363063" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                              <span>Đặt ngay</span>
                                                          </button>



                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="item swiper-slide">





                                      <div class="product-box">
                                          <div class="product-thumbnail">
                                              <a href="{{ url('demoweb/product-detail') }}" title="Khách sạn Mahali Mzuri" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/brunei.jpg') }}" class="img-responsive lazyload" title="Khách sạn Mahali Mzuri" alt="Khách sạn Mahali Mzuri">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Khách sạn Mahali Mzuri">Khách sạn Mahali Mzuri</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">2.367.000₫</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895463" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363048" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                              <span>Đặt ngay</span>
                                                          </button>



                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>

      <script>
          var swiper = new Swiper('.swiper_best_tour', {
              slidesPerView: 3,
              spaceBetween: 15,
              slidesPerGroup: 1,
              breakpoints: {
                  300: {
                      slidesPerView: 1,
                      spaceBetween: 15
                  },
                  500: {
                      slidesPerView: 1,
                      spaceBetween: 15
                  },
                  640: {
                      slidesPerView: 2,
                      spaceBetween: 15
                  },
                  768: {
                      slidesPerView: 3,
                      spaceBetween: 15
                  },
                  992: {
                      slidesPerView: 2,
                      spaceBetween: 15
                  },
                  1200: {
                      slidesPerView: 3,
                      spaceBetween: 15
                  }
              }
          });
      </script>
  </section>


  <section class="awe-section-6">
      <div class="main-blogs">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="module-heading">
                          <p>Hãy cập nhật thường xuyên</p>
                          <h2 class="module-title">
          <span>Cẩm nang du lịch</span>
          <a class="btn-viewall" href="tin-tuc" title="Xem tất cả">
            <span class="hidden-xs">Xem tất cả </span><i class="fa fa-long-arrow-right"></i>
          </a>
        </h2>
                      </div>
                      <div class="module-content swiper_blog swiper-container">
                          <div class="swiper-wrapper">



                              <div class="item swiper-slide">
                                  <div class="main-blogs-image">
                                      <a class="dp-flex" href="blog-detail.html" title="Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang">


                                          <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/1-nhatrang.jpg') }}" alt="Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang">

                                      </a>
                                      <div class="main-blogs-time">
                                          <p>Tháng</p>
                                          <p>12</p>
                                          <p>2015</p>
                                      </div>
                                  </div>
                                  <div class="main-blogs-info">
                                      <h3 class="article-title">
                <a class="text2line" href="blog-detail.html" title="Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang">Rộn ràng nối tuyến đường bay mới Hải Phòng - Nha Trang</a>
              </h3>
                                      <div class="article-summary text3line">
                                          Ngày 15/11/2015 vừa qua, đường bay mới Hải Phòng - Nha Trang (tỉnh Khánh Hòa) đã chính thức đi vào hoạt động, đánh dấu sự kết nối mang ý nghĩa quan trọng giữa hai thành phố trọng điểm du lịch quốc...
                                      </div>
                                      <a class="readmore" href="blog-detail.html">Chi tiết</a>
                                  </div>
                              </div>

                              <div class="item swiper-slide">
                                  <div class="main-blogs-image">
                                      <a class="dp-flex" href="blog-detail.html" title="Phú Quốc - Đảo Ngọc bình yên">


                                          <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/11-bai-sao.jpg') }}" alt="Phú Quốc - Đảo Ngọc bình yên">

                                      </a>
                                      <div class="main-blogs-time">
                                          <p>Tháng</p>
                                          <p>12</p>
                                          <p>2015</p>
                                      </div>
                                  </div>
                                  <div class="main-blogs-info">
                                      <h3 class="article-title">
                <a class="text2line" href="blog-detail.html" title="Phú Quốc - Đảo Ngọc bình yên">Phú Quốc - Đảo Ngọc bình yên</a>
              </h3>
                                      <div class="article-summary text3line">
                                          Được ví như thiên đường miền nhiệt đới với nhiều bãi biển hoang sơ đẹp mê hồn, Phú Quốc mang đến cho bạn một vùng trời yên bình, là điểm hẹn cuối tuần lý tưởng dành cho những ai muốn chạy trốn khỏ...
                                      </div>
                                      <a class="readmore" href="blog-detail.html">Chi tiết</a>
                                  </div>
                              </div>

                              <div class="item swiper-slide">
                                  <div class="main-blogs-image">
                                      <a class="dp-flex" href="blog-detail.html" title="Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á">


                                          <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" alt="Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á">

                                      </a>
                                      <div class="main-blogs-time">
                                          <p>Tháng</p>
                                          <p>12</p>
                                          <p>2015</p>
                                      </div>
                                  </div>
                                  <div class="main-blogs-info">
                                      <h3 class="article-title">
                <a class="text2line" href="blog-detail.html" title="Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á">Hà Nội và TP.HCM - Top 10 thành phố tuyệt vời nhất Châu Á</a>
              </h3>
                                      <div class="article-summary text3line">
                                          Vừa qua, tạp chí Travel & Leisure (Mỹ) vừa công bố kết quả bình chọn “Top 10 thành phố tuyệt vời nhất châu Á”. Du lịch Việt Nam có hai thành phố là Hà Nội (đứng thứ 7) và TP.HCM (xếp thứ 9) trong ...
                                      </div>
                                      <a class="readmore" href="blog-detail.html">Chi tiết</a>
                                  </div>
                              </div>

                              <div class="item swiper-slide">
                                  <div class="main-blogs-image">
                                      <a class="dp-flex" href="blog-detail.html" title="Chào mùa yêu thương !">


                                          <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/cherry-blossom.jpg') }}" alt="Chào mùa yêu thương !">

                                      </a>
                                      <div class="main-blogs-time">
                                          <p>Tháng</p>
                                          <p>12</p>
                                          <p>2015</p>
                                      </div>
                                  </div>
                                  <div class="main-blogs-info">
                                      <h3 class="article-title">
                <a class="text2line" href="blog-detail.html" title="Chào mùa yêu thương !">Chào mùa yêu thương !</a>
              </h3>
                                      <div class="article-summary text3line">
                                          “Và tiếng chim rộn hót xa vời, cánh hoa đào bỗng như cười, lắng nghe mùa xuân về…” Câu hát nhẹ nhàng, da diết của ai đó cất lên như rũ bỏ chiếc áo u ám của mùa đông giá lạnh để lòng chộn rộn đón c...
                                      </div>
                                      <a class="readmore" href="blog-detail.html">Chi tiết</a>
                                  </div>
                              </div>

                              <div class="item swiper-slide">
                                  <div class="main-blogs-image">
                                      <a class="dp-flex" href="blog-detail.html" title="Festival hoa Đà Lạt - Điểm hẹn muôn sắc hoa">


                                          <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/2-festival-hoa-da-lat-1.jpg') }}" alt="Festival hoa Đà Lạt - Điểm hẹn muôn sắc hoa">

                                      </a>
                                      <div class="main-blogs-time">
                                          <p>Tháng</p>
                                          <p>12</p>
                                          <p>2015</p>
                                      </div>
                                  </div>
                                  <div class="main-blogs-info">
                                      <h3 class="article-title">
                <a class="text2line" href="blog-detail.html" title="Festival hoa Đà Lạt - Điểm hẹn muôn sắc hoa">Festival hoa Đà Lạt - Điểm hẹn muôn sắc hoa</a>
              </h3>
                                      <div class="article-summary text3line">
                                          Festival hoa Đà Lạt là sự kiện văn hóa, xã hội, du lịch thu hút hàng triệu lượt khách đến tham dự và thưởng ngoạn. Hai năm một lần, lễ hội ngàn hoa thường được tổ chức vào cuối tháng 12 tại thành ...
                                      </div>
                                      <a class="readmore" href="blog-detail.html">Chi tiết</a>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <script>
          var swiper = new Swiper('.swiper_blog', {
              slidesPerView: 3,
              spaceBetween: 15,
              slidesPerGroup: 1,
              breakpoints: {
                  300: {
                      slidesPerView: 1,
                      spaceBetween: 15
                  },
                  500: {
                      slidesPerView: 1,
                      spaceBetween: 15
                  },
                  640: {
                      slidesPerView: 1,
                      spaceBetween: 15
                  },
                  768: {
                      slidesPerView: 2,
                      spaceBetween: 15
                  },
                  992: {
                      slidesPerView: 3,
                      spaceBetween: 15
                  },
                  1200: {
                      slidesPerView: 3,
                      spaceBetween: 15
                  }
              }
          });
      </script>
  </section>


  <section class="awe-section-7">
      <div class="main-parallax">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="module-heading">
                          <p>Gửi đóng góp để nhận được hỗ trợ</p>
                          <h2 class="module-title">
          <span>Đóng góp của khách hàng</span>
        </h2>
                      </div>
                      <div class="module-content">
                          <div class="row">
                              <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                                  <div class="parallax-content swiper_subcribe swiper-container">
                                      <div class="swiper-wrapper">




                                          <div class="item swiper-slide">
                                              <div class="row">
                                                  <div class="col-md-3 col-sm-3 col-xs-12 customer_image dp-flex">
                                                      <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/customer_image_1.png?1649413074140') }}" alt="Jenny">
                                                  </div>
                                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                                      <p class="customer-content">“ Tôi và chồng đã được hưởng 1 tuần trăng mật rất vui vẻ với Tour Lãng mạn Paris. Cảm ơn BizTravel ! ”</p>
                                                      <p class="customer-name">Jenny</p>
                                                  </div>
                                              </div>
                                          </div>




                                          <div class="item swiper-slide">
                                              <div class="row">
                                                  <div class="col-md-3 col-sm-3 col-xs-12 customer_image dp-flex">
                                                      <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/customer_image_1.png?1649413074140') }}" alt="Nguyễn Thị Huyền Thương">
                                                  </div>
                                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                                      <p class="customer-content">“ Chương trình Tour khám phá Cuba rất hấp dẫn. Tôi đã được trải nghiệm nhiều điều thú vị. Cảm ơn BizTravel ”</p>
                                                      <p class="customer-name">Nguyễn Thị Huyền Thương</p>
                                                  </div>
                                              </div>
                                          </div>




                                          <div class="item swiper-slide">
                                              <div class="row">
                                                  <div class="col-md-3 col-sm-3 col-xs-12 customer_image dp-flex">
                                                      <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/customer_image_1.png?1649413074140') }}" alt="Cloe">
                                                  </div>
                                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                                      <p class="customer-content">“ Giá cả tốt, chất lượng tuyệt vời! Tôi và gia đình đã đi nghỉ ở Phuket rất thoải mái. Đồ ăn lạ và ngon. ”</p>
                                                      <p class="customer-name">Cloe</p>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                              </div>


                              <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                  <div class="form-subcribe">



                                      <p>Nhập địa chỉ email của bạn. Chúng tôi sẽ gửi cho bạn các email về các chương trình khuyến mãi thường xuyên</p>
                                      <form action="//gmail.us2.list-manage.com/subscribe/post?u=ef7f65e3be67e30ff1c4bd591&id=a7430e9bc5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                          <input id="email" name="EMAIL" type="email" value="" class="input_newsletter subcribe-email" placeholder="Email nhận tin">
                                          <button class="btn-subcribe btn-style btn-style-hover">Gửi</button>
                                      </form>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <script>
          var swiper = new Swiper('.swiper_subcribe', {
              slidesPerView: 3,
              spaceBetween: 15,
              slidesPerGroup: 1,
              breakpoints: {
                  300: {
                      slidesPerView: 1,
                      spaceBetween: 30
                  },
                  500: {
                      slidesPerView: 1,
                      spaceBetween: 30
                  },
                  640: {
                      slidesPerView: 1,
                      spaceBetween: 30
                  },
                  768: {
                      slidesPerView: 1,
                      spaceBetween: 30
                  },
                  992: {
                      slidesPerView: 1,
                      spaceBetween: 30
                  },
                  1200: {
                      slidesPerView: 1,
                      spaceBetween: 30
                  }
              }
          });
      </script>
  </section>
@endsection

@section('footer')
    @include('travel.layout.footer')
@endsection