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
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_1.png?1649413074140') }}" alt="H??nh tr??nh">
                              <h4 class="heading-service">H??nh tr??nh</h4>
                          </div>



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_2.png?1649413074140') }}" alt="Cao c???p">
                              <h4 class="heading-service">Cao c???p</h4>
                          </div>



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_3.png?1649413074140') }}" alt="Tu???n Tr??ng m???t">
                              <h4 class="heading-service">Tu???n Tr??ng m???t</h4>
                          </div>



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_4.png?1649413074140') }}" alt="Kh??m ph??">
                              <h4 class="heading-service">Kh??m ph??</h4>
                          </div>



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_5.png?1649413074140') }}" alt="Sinh th??i">
                              <h4 class="heading-service">Sinh th??i</h4>
                          </div>



                          <div class="item swiper-slide">
                              <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/service_image_6.png?1649413074140') }}" alt="??i bi???n">
                              <h4 class="heading-service">??i bi???n</h4>
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
                          <p>Kh??m ph?? ??i???m du l???ch</p>
                          <h2 class="module-title">
          <span>Tu???n tr??ng m???t</span>
          <a class="btn-viewall" href="san-pham-noi-bat" title="Xem t???t c???">
            <span class="hidden-xs">Xem t???t c??? </span><i class="fa fa-long-arrow-right"></i>
          </a>
        </h2>
                      </div>




                      <div class="module-content product-loop-content swiper_honey_moon swiper-container">
                          <div class="swiper-wrapper">

                              <div class="item swiper-slide">





                                  <div class="product-box">
                                      <div class="product-thumbnail">
                                          <a href="{{ url('demoweb/product-detail') }}" title="Du l???ch Singapore" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/singapore.jpg') }}" class="img-responsive lazyload" title="Du l???ch Singapore" alt="Du l???ch Singapore">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Du l???ch Singapore">Du l???ch Singapore</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">25.296.000???</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
            26.000.000???
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895490" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363077" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                          <span>?????t ngay</span>
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
                                          <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i hoa anh ????o" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/cherry-blossom.jpg') }}" class="img-responsive lazyload" title="L??? h???i hoa anh ????o" alt="L??? h???i hoa anh ????o">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i hoa anh ????o">L??? h???i hoa anh ????o</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">35.000.000???</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895489" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363076" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                          <span>?????t ngay</span>
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
                                          <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i bia Oktoberfest" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}" class="img-responsive lazyload" title="L??? h???i bia Oktoberfest" alt="L??? h???i bia Oktoberfest">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i bia Oktoberfest">L??? h???i bia Oktoberfest</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">45.000.000???</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895485" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363072" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                          <span>?????t ngay</span>
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
                                          <a href="{{ url('demoweb/product-detail') }}" title="Du l???ch Hoa K???" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}" class="img-responsive lazyload" title="Du l???ch Hoa K???" alt="Du l???ch Hoa K???">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Du l???ch Hoa K???">Du l???ch Hoa K???</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">56.916.000???</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
            60.000.000???
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895480" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363067" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                          <span>?????t ngay</span>
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
                                          <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i Hawaii" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hawaii.jpg') }}" class="img-responsive lazyload" title="L??? h???i Hawaii" alt="L??? h???i Hawaii">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i Hawaii">L??? h???i Hawaii</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">63.240.000???</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
            65.000.000???
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895477" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363064" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                          <span>?????t ngay</span>
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
                                          <a href="{{ url('demoweb/product-detail') }}" title="Thi??n ???????ng Maldives" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/malaysia-f22a94cd-4a5e-47c5-b653-4c7400984292.jpg') }}" class="img-responsive lazyload" title="Thi??n ???????ng Maldives" alt="Thi??n ???????ng Maldives">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Thi??n ???????ng Maldives">Thi??n ???????ng Maldives</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">42.160.000???</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
            45.000.000???
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895473" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363060" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                          <span>?????t ngay</span>
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
                                          <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i Venice" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/venice.jpg') }}" class="img-responsive lazyload" title="L??? h???i Venice" alt="L??? h???i Venice">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i Venice">L??? h???i Venice</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">46.376.000???</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895476" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363063" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                          <span>?????t ngay</span>
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
                                          <a href="{{ url('demoweb/product-detail') }}" title="Kh??ch s???n Mahali Mzuri" class="product-image dp-flex">

                                              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}" class="img-responsive lazyload" title="Kh??ch s???n Mahali Mzuri" alt="Kh??ch s???n Mahali Mzuri">

                                          </a>
                                      </div>
                                      <div class="product-info a-left">
                                          <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Kh??ch s???n Mahali Mzuri">Kh??ch s???n Mahali Mzuri</a>
  </h3>
                                          <div class="product-review">

                                          </div>
                                          <div class="prices-and-actions">





                                              <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                  <span class="special-price">
        <span class="price">2.367.000???</span>
                                                  </span>
                                                  <span class="old-price">
        <span class="price">
          
        </span>
                                                  </span>



                                              </div>
                                              <div class="form-actions">


                                                  <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895463" enctype="multipart/form-data">
                                                      <input class="hidden" type="hidden" name="variantId" value="1363048" />



                                                      <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                          <span>?????t ngay</span>
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
                              <p>Gi???i thi???u c??c ??i???m ?????n h??ng ?????u</p>
                              <h2 class="module-title">
            <span>??i???m ?????n du l???ch h??ng ?????u</span>
            <a class="btn-viewall" href="/collections/all" title="Xem t???t c???">
              <span class="hidden-xs">Xem t???t c??? </span><i class="fa fa-long-arrow-right"></i>
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
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Du l???ch Ch??u ??">
                                          <span>Du l???ch Ch??u ??</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Du l???ch Ch??u ??u">
                                          <span>Du l???ch Ch??u ??u</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Du l???ch trong n?????c">
                                          <span>Du l???ch trong n?????c</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Du l???ch tr???i nghi???m">
                                          <span>Du l???ch tr???i nghi???m</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Tour tr??ng m???t">
                                          <span>Tour tr??ng m???t</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="V?? m??y bay">
                                          <span>V?? m??y bay</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Kh??ch s???n">
                                          <span>Kh??ch s???n</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Tour gi?? r???">
                                          <span>Tour gi?? r???</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Tour n???i b???t">
                                          <span>Tour n???i b???t</span>
                                      </a>

                                  </li>

                                  <li class="tour-list ">
                                      <a class="ajaxLayer" href="{{ url('demoweb/product') }}" title="Tour khuy???n m??i">
                                          <span>Tour khuy???n m??i</span>
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
                                              <a href="{{ url('demoweb/product-detail') }}" title="Du l???ch Singapore" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/singapore.jpg') }}" class="img-responsive lazyload" title="Du l???ch Singapore" alt="Du l???ch Singapore">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Du l???ch Singapore">Du l???ch Singapore</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">25.296.000???</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
            26.000.000???
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895490" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363077" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                              <span>?????t ngay</span>
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
                                              <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i hoa anh ????o" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/cherry-blossom.jpg') }}" class="img-responsive lazyload" title="L??? h???i hoa anh ????o" alt="L??? h???i hoa anh ????o">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i hoa anh ????o">L??? h???i hoa anh ????o</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">35.000.000???</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895489" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363076" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                              <span>?????t ngay</span>
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
                                              <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i bia Oktoberfest" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}" class="img-responsive lazyload" title="L??? h???i bia Oktoberfest" alt="L??? h???i bia Oktoberfest">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i bia Oktoberfest">L??? h???i bia Oktoberfest</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">45.000.000???</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895485" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363072" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                              <span>?????t ngay</span>
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
                                              <a href="{{ url('demoweb/product-detail') }}" title="Du l???ch Hoa K???" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}" class="img-responsive lazyload" title="Du l???ch Hoa K???" alt="Du l???ch Hoa K???">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Du l???ch Hoa K???">Du l???ch Hoa K???</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">56.916.000???</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
            60.000.000???
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895480" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363067" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                              <span>?????t ngay</span>
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
                                              <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i Hawaii" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hawaii.jpg') }}" class="img-responsive lazyload" title="L??? h???i Hawaii" alt="L??? h???i Hawaii">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i Hawaii">L??? h???i Hawaii</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">63.240.000???</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
            65.000.000???
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895477" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363064" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                              <span>?????t ngay</span>
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
                                              <a href="{{ url('demoweb/product-detail') }}" title="Thi??n ???????ng Maldives" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/malaysia-f22a94cd-4a5e-47c5-b653-4c7400984292.jpg') }}" class="img-responsive lazyload" title="Thi??n ???????ng Maldives" alt="Thi??n ???????ng Maldives">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Thi??n ???????ng Maldives">Thi??n ???????ng Maldives</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">42.160.000???</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
            45.000.000???
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895473" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363060" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                              <span>?????t ngay</span>
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
                                              <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i Venice" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/venice.jpg') }}" class="img-responsive lazyload" title="L??? h???i Venice" alt="L??? h???i Venice">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="L??? h???i Venice">L??? h???i Venice</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">46.376.000???</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895476" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363063" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                              <span>?????t ngay</span>
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
                                              <a href="{{ url('demoweb/product-detail') }}" title="Kh??ch s???n Mahali Mzuri" class="product-image dp-flex">

                                                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/brunei.jpg') }}" class="img-responsive lazyload" title="Kh??ch s???n Mahali Mzuri" alt="Kh??ch s???n Mahali Mzuri">

                                              </a>
                                          </div>
                                          <div class="product-info a-left">
                                              <h3 class="product-name text1line">
    <a href="{{ url('demoweb/product-detail') }}" title="Kh??ch s???n Mahali Mzuri">Kh??ch s???n Mahali Mzuri</a>
  </h3>
                                              <div class="product-review">

                                              </div>
                                              <div class="prices-and-actions">





                                                  <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                      <span class="special-price">
        <span class="price">2.367.000???</span>
                                                      </span>
                                                      <span class="old-price">
        <span class="price">
          
        </span>
                                                      </span>



                                                  </div>
                                                  <div class="form-actions">


                                                      <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895463" enctype="multipart/form-data">
                                                          <input class="hidden" type="hidden" name="variantId" value="1363048" />



                                                          <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="?????t ngay">
                                                              <span>?????t ngay</span>
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
                          <p>H??y c???p nh???t th?????ng xuy??n</p>
                          <h2 class="module-title">
          <span>C???m nang du l???ch</span>
          <a class="btn-viewall" href="tin-tuc" title="Xem t???t c???">
            <span class="hidden-xs">Xem t???t c??? </span><i class="fa fa-long-arrow-right"></i>
          </a>
        </h2>
                      </div>
                      <div class="module-content swiper_blog swiper-container">
                          <div class="swiper-wrapper">



                              <div class="item swiper-slide">
                                  <div class="main-blogs-image">
                                      <a class="dp-flex" href="blog-detail.html" title="R???n r??ng n???i tuy???n ???????ng bay m???i H???i Ph??ng - Nha Trang">


                                          <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/1-nhatrang.jpg') }}" alt="R???n r??ng n???i tuy???n ???????ng bay m???i H???i Ph??ng - Nha Trang">

                                      </a>
                                      <div class="main-blogs-time">
                                          <p>Th??ng</p>
                                          <p>12</p>
                                          <p>2015</p>
                                      </div>
                                  </div>
                                  <div class="main-blogs-info">
                                      <h3 class="article-title">
                <a class="text2line" href="blog-detail.html" title="R???n r??ng n???i tuy???n ???????ng bay m???i H???i Ph??ng - Nha Trang">R???n r??ng n???i tuy???n ???????ng bay m???i H???i Ph??ng - Nha Trang</a>
              </h3>
                                      <div class="article-summary text3line">
                                          Ng??y 15/11/2015 v???a qua, ???????ng bay m???i H???i Ph??ng - Nha Trang (t???nh Kh??nh H??a) ???? ch??nh th???c ??i v??o ho???t ?????ng, ????nh d???u s??? k???t n???i mang ?? ngh??a quan tr???ng gi???a hai th??nh ph??? tr???ng ??i???m du l???ch qu???c...
                                      </div>
                                      <a class="readmore" href="blog-detail.html">Chi ti???t</a>
                                  </div>
                              </div>

                              <div class="item swiper-slide">
                                  <div class="main-blogs-image">
                                      <a class="dp-flex" href="blog-detail.html" title="Ph?? Qu???c - ?????o Ng???c b??nh y??n">


                                          <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/11-bai-sao.jpg') }}" alt="Ph?? Qu???c - ?????o Ng???c b??nh y??n">

                                      </a>
                                      <div class="main-blogs-time">
                                          <p>Th??ng</p>
                                          <p>12</p>
                                          <p>2015</p>
                                      </div>
                                  </div>
                                  <div class="main-blogs-info">
                                      <h3 class="article-title">
                <a class="text2line" href="blog-detail.html" title="Ph?? Qu???c - ?????o Ng???c b??nh y??n">Ph?? Qu???c - ?????o Ng???c b??nh y??n</a>
              </h3>
                                      <div class="article-summary text3line">
                                          ???????c v?? nh?? thi??n ???????ng mi???n nhi???t ?????i v???i nhi???u b??i bi???n hoang s?? ?????p m?? h???n, Ph?? Qu???c mang ?????n cho b???n m???t v??ng tr???i y??n b??nh, l?? ??i???m h???n cu???i tu???n l?? t?????ng d??nh cho nh???ng ai mu???n ch???y tr???n kh???...
                                      </div>
                                      <a class="readmore" href="blog-detail.html">Chi ti???t</a>
                                  </div>
                              </div>

                              <div class="item swiper-slide">
                                  <div class="main-blogs-image">
                                      <a class="dp-flex" href="blog-detail.html" title="H?? N???i v?? TP.HCM - Top 10 th??nh ph??? tuy???t v???i nh???t Ch??u ??">


                                          <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/1-ha-noi-1-min-1.jpg') }}" alt="H?? N???i v?? TP.HCM - Top 10 th??nh ph??? tuy???t v???i nh???t Ch??u ??">

                                      </a>
                                      <div class="main-blogs-time">
                                          <p>Th??ng</p>
                                          <p>12</p>
                                          <p>2015</p>
                                      </div>
                                  </div>
                                  <div class="main-blogs-info">
                                      <h3 class="article-title">
                <a class="text2line" href="blog-detail.html" title="H?? N???i v?? TP.HCM - Top 10 th??nh ph??? tuy???t v???i nh???t Ch??u ??">H?? N???i v?? TP.HCM - Top 10 th??nh ph??? tuy???t v???i nh???t Ch??u ??</a>
              </h3>
                                      <div class="article-summary text3line">
                                          V???a qua, t???p ch?? Travel & Leisure (M???) v???a c??ng b??? k???t qu??? b??nh ch???n ???Top 10 th??nh ph??? tuy???t v???i nh???t ch??u ?????. Du l???ch Vi???t Nam c?? hai th??nh ph??? l?? H?? N???i (?????ng th??? 7) v?? TP.HCM (x???p th??? 9) trong ...
                                      </div>
                                      <a class="readmore" href="blog-detail.html">Chi ti???t</a>
                                  </div>
                              </div>

                              <div class="item swiper-slide">
                                  <div class="main-blogs-image">
                                      <a class="dp-flex" href="blog-detail.html" title="Ch??o m??a y??u th????ng !">


                                          <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/cherry-blossom.jpg') }}" alt="Ch??o m??a y??u th????ng !">

                                      </a>
                                      <div class="main-blogs-time">
                                          <p>Th??ng</p>
                                          <p>12</p>
                                          <p>2015</p>
                                      </div>
                                  </div>
                                  <div class="main-blogs-info">
                                      <h3 class="article-title">
                <a class="text2line" href="blog-detail.html" title="Ch??o m??a y??u th????ng !">Ch??o m??a y??u th????ng !</a>
              </h3>
                                      <div class="article-summary text3line">
                                          ???V?? ti???ng chim r???n h??t xa v???i, c??nh hoa ????o b???ng nh?? c?????i, l???ng nghe m??a xu??n v????????? C??u h??t nh??? nh??ng, da di???t c???a ai ???? c???t l??n nh?? r?? b??? chi???c ??o u ??m c???a m??a ????ng gi?? l???nh ????? l??ng ch???n r???n ????n c...
                                      </div>
                                      <a class="readmore" href="blog-detail.html">Chi ti???t</a>
                                  </div>
                              </div>

                              <div class="item swiper-slide">
                                  <div class="main-blogs-image">
                                      <a class="dp-flex" href="blog-detail.html" title="Festival hoa ???? L???t - ??i???m h???n mu??n s???c hoa">


                                          <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/2-festival-hoa-da-lat-1.jpg') }}" alt="Festival hoa ???? L???t - ??i???m h???n mu??n s???c hoa">

                                      </a>
                                      <div class="main-blogs-time">
                                          <p>Th??ng</p>
                                          <p>12</p>
                                          <p>2015</p>
                                      </div>
                                  </div>
                                  <div class="main-blogs-info">
                                      <h3 class="article-title">
                <a class="text2line" href="blog-detail.html" title="Festival hoa ???? L???t - ??i???m h???n mu??n s???c hoa">Festival hoa ???? L???t - ??i???m h???n mu??n s???c hoa</a>
              </h3>
                                      <div class="article-summary text3line">
                                          Festival hoa ???? L???t l?? s??? ki???n v??n h??a, x?? h???i, du l???ch thu h??t h??ng tri???u l?????t kh??ch ?????n tham d??? v?? th?????ng ngo???n. Hai n??m m???t l???n, l??? h???i ng??n hoa th?????ng ???????c t??? ch???c v??o cu???i th??ng 12 t???i th??nh ...
                                      </div>
                                      <a class="readmore" href="blog-detail.html">Chi ti???t</a>
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
                          <p>G???i ????ng g??p ????? nh???n ???????c h??? tr???</p>
                          <h2 class="module-title">
          <span>????ng g??p c???a kh??ch h??ng</span>
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
                                                      <p class="customer-content">??? T??i v?? ch???ng ???? ???????c h?????ng 1 tu???n tr??ng m???t r???t vui v??? v???i Tour L??ng m???n Paris. C???m ??n BizTravel ! ???</p>
                                                      <p class="customer-name">Jenny</p>
                                                  </div>
                                              </div>
                                          </div>




                                          <div class="item swiper-slide">
                                              <div class="row">
                                                  <div class="col-md-3 col-sm-3 col-xs-12 customer_image dp-flex">
                                                      <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/customer_image_1.png?1649413074140') }}" alt="Nguy???n Th??? Huy???n Th????ng">
                                                  </div>
                                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                                      <p class="customer-content">??? Ch????ng tr??nh Tour kh??m ph?? Cuba r???t h???p d???n. T??i ???? ???????c tr???i nghi???m nhi???u ??i???u th?? v???. C???m ??n BizTravel ???</p>
                                                      <p class="customer-name">Nguy???n Th??? Huy???n Th????ng</p>
                                                  </div>
                                              </div>
                                          </div>




                                          <div class="item swiper-slide">
                                              <div class="row">
                                                  <div class="col-md-3 col-sm-3 col-xs-12 customer_image dp-flex">
                                                      <img class="img-responsive lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/customer_image_1.png?1649413074140') }}" alt="Cloe">
                                                  </div>
                                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                                      <p class="customer-content">??? Gi?? c??? t???t, ch???t l?????ng tuy???t v???i! T??i v?? gia ????nh ???? ??i ngh??? ??? Phuket r???t tho???i m??i. ????? ??n l??? v?? ngon. ???</p>
                                                      <p class="customer-name">Cloe</p>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                              </div>


                              <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                  <div class="form-subcribe">



                                      <p>Nh???p ?????a ch??? email c???a b???n. Ch??ng t??i s??? g???i cho b???n c??c email v??? c??c ch????ng tr??nh khuy???n m??i th?????ng xuy??n</p>
                                      <form action="//gmail.us2.list-manage.com/subscribe/post?u=ef7f65e3be67e30ff1c4bd591&id=a7430e9bc5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                          <input id="email" name="EMAIL" type="email" value="" class="input_newsletter subcribe-email" placeholder="Email nh???n tin">
                                          <button class="btn-subcribe btn-style btn-style-hover">G???i</button>
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