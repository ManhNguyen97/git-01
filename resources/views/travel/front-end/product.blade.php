@extends('travel.layout.main')
@section('title')
  product.page
@endsection

@section('header')
  @include('travel.layout.header')
@endsection

@section('content')
  <section class="collection-template">

    <div class="collection-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="collection-header">
                        <div class="collection-header-title">
                            <h2>
          <a href="san-pham-noi-bat" title="Tour du lịch hot">
            <span>Tour du lịch hot</span>
          </a>
        </h2>
                        </div>
                        <div class="collection-header-content">
                            <div class="owl-carousel" data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xxs-items="1" data-dot="true" data-auto-play="true" data-nav="true">





                                <div class="item">
                                    <div class="product-hot">
                                        <div class="product-hot-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Singapore" class=" dp-flex">

                                                <picture class=" dp-flex">
                                                    <source media="(min-width: 1200px)" srcset="{{ asset('vendor/image/singapore.jpg') }}?v=1449478242597">
                                                        <source media="(min-width: 992px) and (max-width: 1199px)" srcset="{{ asset('vendor/image/singapore.jpg') }}?v=1449478242597">
                                                            <source media="(min-width: 768px) and (max-width: 991px)" srcset="{{ asset('vendor/image/singapore.jpg') }}?v=1449478242597">
                                                                <source media="(min-width: 376px) and (max-width: 767px)" srcset="{{ asset('vendor/image/singapore.jpg') }}?v=1449478242597">
                                                                    <source media="(max-width: 375px)" srcset="{{ asset('vendor/image/singapore.jpg') }}?v=1449478242597">
                                                                        <img itemprop="image" src="{{ asset('vendor/image/singapore.jpg') }}?v=1449478242597" class="img-responsive" title="Du lịch Singapore" alt="Du lịch Singapore">
                                                </picture>

                                            </a>
                                        </div>
                                        <div class="product-hot-name">
                                            <h3 class="product-name">
                    <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Singapore" class="text3line">
                      <span>Du lịch Singapore</span>
                    </a>
                  </h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="product-hot">
                                        <div class="product-hot-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội hoa anh đào" class=" dp-flex">

                                                <picture class=" dp-flex">
                                                    <source media="(min-width: 1200px)" srcset="{{ asset('vendor/image/cherry-blossom.jpg') }}?v=1491186199237">
                                                        <source media="(min-width: 992px) and (max-width: 1199px)" srcset="{{ asset('vendor/image/cherry-blossom.jpg') }}?v=1491186199237">
                                                            <source media="(min-width: 768px) and (max-width: 991px)" srcset="{{ asset('vendor/image/cherry-blossom.jpg') }}?v=1491186199237">
                                                                <source media="(min-width: 376px) and (max-width: 767px)" srcset="{{ asset('vendor/image/cherry-blossom.jpg') }}?v=1491186199237">
                                                                    <source media="(max-width: 375px)" srcset="{{ asset('vendor/image/cherry-blossom.jpg') }}?v=1491186199237">
                                                                        <img itemprop="image" src="{{ asset('vendor/image/cherry-blossom.jpg') }}?v=1491186199237" class="img-responsive" title="Lễ hội hoa anh đào" alt="Lễ hội hoa anh đào">
                                                </picture>

                                            </a>
                                        </div>
                                        <div class="product-hot-name">
                                            <h3 class="product-name">
                    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội hoa anh đào" class="text3line">
                      <span>Lễ hội hoa anh đào</span>
                    </a>
                  </h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="product-hot">
                                        <div class="product-hot-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội bia Oktoberfest" class=" dp-flex">

                                                <picture class=" dp-flex">
                                                    <source media="(min-width: 1200px)" srcset="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}?v=1449478232713">
                                                        <source media="(min-width: 992px) and (max-width: 1199px)" srcset="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}?v=1449478232713">
                                                            <source media="(min-width: 768px) and (max-width: 991px)" srcset="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}?v=1449478232713">
                                                                <source media="(min-width: 376px) and (max-width: 767px)" srcset="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}?v=1449478232713">
                                                                    <source media="(max-width: 375px)" srcset="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}?v=1449478232713">
                                                                        <img itemprop="image" src="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}?v=1449478232713" class="img-responsive" title="Lễ hội bia Oktoberfest" alt="Lễ hội bia Oktoberfest">
                                                </picture>

                                            </a>
                                        </div>
                                        <div class="product-hot-name">
                                            <h3 class="product-name">
                    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội bia Oktoberfest" class="text3line">
                      <span>Lễ hội bia Oktoberfest</span>
                    </a>
                  </h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="product-hot">
                                        <div class="product-hot-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Hoa Kỳ" class=" dp-flex">

                                                <picture class=" dp-flex">
                                                    <source media="(min-width: 1200px)" srcset="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}?v=1449478220560">
                                                        <source media="(min-width: 992px) and (max-width: 1199px)" srcset="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}?v=1449478220560">
                                                            <source media="(min-width: 768px) and (max-width: 991px)" srcset="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}?v=1449478220560">
                                                                <source media="(min-width: 376px) and (max-width: 767px)" srcset="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}?v=1449478220560">
                                                                    <source media="(max-width: 375px)" srcset="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}?v=1449478220560">
                                                                        <img itemprop="image" src="{{ asset('vendor/image/hoa-ky-e91c0e17-cdff-4bc7-85ae-63ead91cd819.jpg') }}?v=1449478220560" class="img-responsive" title="Du lịch Hoa Kỳ" alt="Du lịch Hoa Kỳ">
                                                </picture>

                                            </a>
                                        </div>
                                        <div class="product-hot-name">
                                            <h3 class="product-name">
                    <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Hoa Kỳ" class="text3line">
                      <span>Du lịch Hoa Kỳ</span>
                    </a>
                  </h3>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="product-hot">
                                        <div class="product-hot-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội Hawaii" class=" dp-flex">

                                                <picture class=" dp-flex">
                                                    <source media="(min-width: 1200px)" srcset="{{ asset('vendor/image/hawaii.jpg') }}?v=1491186112150">
                                                        <source media="(min-width: 992px) and (max-width: 1199px)" srcset="{{ asset('vendor/image/hawaii.jpg') }}?v=1491186112150">
                                                            <source media="(min-width: 768px) and (max-width: 991px)" srcset="{{ asset('vendor/image/hawaii.jpg') }}?v=1491186112150">
                                                                <source media="(min-width: 376px) and (max-width: 767px)" srcset="{{ asset('vendor/image/hawaii.jpg') }}?v=1491186112150">
                                                                    <source media="(max-width: 375px)" srcset="{{ asset('vendor/image/hawaii.jpg') }}?v=1491186112150">
                                                                        <img itemprop="image" src="{{ asset('vendor/image/hawaii.jpg') }}?v=1491186112150" class="img-responsive" title="Lễ hội Hawaii" alt="Lễ hội Hawaii">
                                                </picture>

                                            </a>
                                        </div>
                                        <div class="product-hot-name">
                                            <h3 class="product-name">
                    <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội Hawaii" class="text3line">
                      <span>Lễ hội Hawaii</span>
                    </a>
                  </h3>
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


    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 a-left">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="index.html"><span >Trang chủ</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>


                        <li><strong><span> Du lịch Châu Á</span></strong>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="collection-content">
        <div class="container">
            <div class="row">
                <div class="main_container col-lg-9 col-md-9  col-sm-12 col-xs-12">
                    <h1 class="title-head">Du lịch Châu Á</h1>
                    <div class="category-products products">





                        <section class="products-view products-view-grid">
                            <div class="row">





                                <div class="col-xs-6 col-sm-4 col-lg-4 item-view">





                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Brunei" class="product-image dp-flex">

                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/brunei.jpg') }}?v=1449478246263" class="img-responsive lazyload" title="Du lịch Brunei" alt="Du lịch Brunei">

                                            </a>
                                        </div>
                                        <div class="product-info a-left">
                                            <h3 class="product-name text1line">
  <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Brunei">Du lịch Brunei</a>
  </h3>
                                            <div class="product-review">

                                            </div>
                                            <div class="prices-and-actions">





                                                <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                    <span class="special-price">
      <span class="price">42.000.000₫</span>
                                                    </span>
                                                    <span class="old-price">
      <span class="price">
        
      </span>
                                                    </span>



                                                </div>
                                                <div class="form-actions">


                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895493" enctype="multipart/form-data">
                                                        <input class="hidden" type="hidden" name="variantId" value="1806171" />



                                                        <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                            <span>Đặt ngay</span>
                                                        </button>



                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="col-xs-6 col-sm-4 col-lg-4 item-view">





                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Campuchia" class="product-image dp-flex">

                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/campuchia.jpg') }}?v=1449478245160" class="img-responsive lazyload" title="Du lịch Campuchia" alt="Du lịch Campuchia">

                                            </a>
                                        </div>
                                        <div class="product-info a-left">
                                            <h3 class="product-name text1line">
  <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Campuchia">Du lịch Campuchia</a>
  </h3>
                                            <div class="product-review">

                                            </div>
                                            <div class="prices-and-actions">





                                                <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                    <span class="special-price">
      <span class="price">12.000.000₫</span>
                                                    </span>
                                                    <span class="old-price">
      <span class="price">
        
      </span>
                                                    </span>



                                                </div>
                                                <div class="form-actions">


                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895492" enctype="multipart/form-data">
                                                        <input class="hidden" type="hidden" name="variantId" value="1363079" />



                                                        <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                            <span>Đặt ngay</span>
                                                        </button>



                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="col-xs-6 col-sm-4 col-lg-4 item-view">





                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Malaysia" class="product-image dp-flex">

                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/malaysia-f22a94cd-4a5e-47c5-b653-4c7400984292.jpg') }}?v=1449478244283" class="img-responsive lazyload" title="Du lịch Malaysia" alt="Du lịch Malaysia">

                                            </a>
                                        </div>
                                        <div class="product-info a-left">
                                            <h3 class="product-name text1line">
  <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Malaysia">Du lịch Malaysia</a>
  </h3>
                                            <div class="product-review">

                                            </div>
                                            <div class="prices-and-actions">





                                                <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                    <span class="special-price">
      <span class="price">17.404.000₫</span>
                                                    </span>
                                                    <span class="old-price">
      <span class="price">
        
          20.000.000₫
        
      </span>
                                                    </span>



                                                </div>
                                                <div class="form-actions">


                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895491" enctype="multipart/form-data">
                                                        <input class="hidden" type="hidden" name="variantId" value="1363078" />



                                                        <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                            <span>Đặt ngay</span>
                                                        </button>



                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="col-xs-6 col-sm-4 col-lg-4 item-view">





                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Singapore" class="product-image dp-flex">

                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/singapore.jpg') }}?v=1449478242597" class="img-responsive lazyload" title="Du lịch Singapore" alt="Du lịch Singapore">

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





                                <div class="col-xs-6 col-sm-4 col-lg-4 item-view">





                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Lễ hội hoa anh đào" class="product-image dp-flex">

                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/cherry-blossom.jpg') }}?v=1491186199237" class="img-responsive lazyload" title="Lễ hội hoa anh đào" alt="Lễ hội hoa anh đào">

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





                                <div class="col-xs-6 col-sm-4 col-lg-4 item-view">





                                    <div class="product-box">
                                        <div class="product-thumbnail">
                                            <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Cuba" class="product-image dp-flex">

                                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/dg-150723-cuba.jpg') }}?v=1449478222867" class="img-responsive lazyload" title="Du lịch Cuba" alt="Du lịch Cuba">

                                            </a>
                                        </div>
                                        <div class="product-info a-left">
                                            <h3 class="product-name text1line">
  <a href="{{ url('demoweb/product-detail') }}" title="Du lịch Cuba">Du lịch Cuba</a>
  </h3>
                                            <div class="product-review">

                                            </div>
                                            <div class="prices-and-actions">





                                                <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                                    <span class="special-price">
      <span class="price">61.132.000₫</span>
                                                    </span>
                                                    <span class="old-price">
      <span class="price">
        
          65.000.000₫
        
      </span>
                                                    </span>



                                                </div>
                                                <div class="form-actions">


                                                    <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895481" enctype="multipart/form-data">
                                                        <input class="hidden" type="hidden" name="variantId" value="1363069" />



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
                            <div class="text-xs-right w100 f-left">

                            </div>
                        </section>


                    </div>
                </div>

                <aside class="sidebar right left-content col-lg-3 col-md-3">
                    <div class="sidebar-menu">
                        <div class="sidebar-menu-title">
                            <h2>
  <span>Tour du lịch</span>
  </h2>
                        </div>
                        <div class="sidebar-menu-content">
                            <div class="sidebar-linklists">
                                <ul>



                                    <li class="sidebar-menu-list active">
                                        <a class="ajaxLayer" href="product.html" title="Du lịch Châu Á">
                                            <span>Du lịch Châu Á</span>
                                        </a>

                                    </li>

                                    <li class="sidebar-menu-list">
                                        <a class="ajaxLayer" href="product.html" title="Du lịch Châu Âu">
                                            <span>Du lịch Châu Âu</span>
                                        </a>

                                    </li>

                                    <li class="sidebar-menu-list">
                                        <a class="ajaxLayer" href="product.html" title="Du lịch trong nước">
                                            <span>Du lịch trong nước</span>
                                        </a>

                                    </li>

                                    <li class="sidebar-menu-list">
                                        <a class="ajaxLayer" href="product.html" title="Du lịch trải nghiệm">
                                            <span>Du lịch trải nghiệm</span>
                                        </a>

                                    </li>

                                    <li class="sidebar-menu-list">
                                        <a class="ajaxLayer" href="product.html" title="Tour trăng mật">
                                            <span>Tour trăng mật</span>
                                        </a>

                                    </li>

                                    <li class="sidebar-menu-list">
                                        <a class="ajaxLayer" href="product.html" title="Vé máy bay">
                                            <span>Vé máy bay</span>
                                        </a>

                                    </li>

                                    <li class="sidebar-menu-list">
                                        <a class="ajaxLayer" href="product.html" title="Khách sạn">
                                            <span>Khách sạn</span>
                                        </a>

                                    </li>

                                    <li class="sidebar-menu-list">
                                        <a class="ajaxLayer" href="product.html" title="Tour giá rẻ">
                                            <span>Tour giá rẻ</span>
                                        </a>

                                    </li>

                                    <li class="sidebar-menu-list">
                                        <a class="ajaxLayer" href="product.html" title="Tour nối bật">
                                            <span>Tour nối bật</span>
                                        </a>

                                    </li>

                                    <li class="sidebar-menu-list">
                                        <a class="ajaxLayer" href="product.html" title="Tour khuyến mãi">
                                            <span>Tour khuyến mãi</span>
                                        </a>

                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </div>
  </section>
@endsection

@section('footer')
  @include('travel.layout.footer')
@endsection