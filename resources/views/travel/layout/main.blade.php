<!DOCTYPE html>
<html lang="vi" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>
      @yield('title')



  </title>
  <!-- ================= Page description ================== -->

  <meta name="description" content="" />

  <!-- ================= Meta ================== -->


  <meta name="keywords" content="bizweb theme, theme du lịch, travel theme, avent team, bizweb, dkt" />


  <link rel="canonical" href="https://travel-theme.mysapo.net/" />
  <meta name='revisit-after' content='1 days' />
  <meta name="robots" content="noodp,index,follow" />
  <!-- ================= Favicon ================== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="icon" href="{{ asset('vendor/image/favicon.png?1649413074140') }}" type="image/x-icon" />


  <link rel="preload" as='style' type="text/css" href="{{ asset('vendor/css/base.scss.css?1649413074140') }}">
  <link rel="preload" as='style' type="text/css" href="{{ asset('vendor/css/style.scss.css?1649413074140') }}">
  <link rel="preload" as='style' type="text/css" href="{{ asset('vendor/css/update.scss.css?1649413074140') }}">
  <link rel="preload" as='style' type="text/css" href="{{ asset('vendor/css/module.scss.css?1649413074140') }}">
  <link rel="preload" as='style' type="text/css" href="{{ asset('vendor/css/responsive.scss.css?1649413074140') }}">
  <link rel="preload" as='style' type="text/css" href="{{ asset('vendor/css/travel.scss.css?1649413074140') }}">
  <link rel="preload" as='style' type="text/css" href="{{ asset('vendor/css/owl.carousel.min.css?1649413074140') }}">
  <link rel="preload" as="style" type="text/css" href="{{ asset('vendor/css/swiper.min.css?1649413074140') }}">
  <link rel="preload" as='style' type="text/css" href="{{ asset('vendor/css/header.scss.css?1649413074140') }}">
  <link rel="preload" as="style" href="{{ asset('vendor/css/bootstrap.css?1649413074140') }}" type="text/css">
  <link href="{{ asset('vendor/css/swiper.min.css?1649413074140') }}" rel="stylesheet" type="text/css" />



  <!-- Facebook Open Graph meta tags -->


  <meta property="og:type" content="website">
  <meta property="og:title" content="Theme du lịch BizTravel">
  <meta property="og:image" content="{{ asset('vendor/image/logo-header.png?1649413074140') }}">
  <meta property="og:image:secure_url" content="{{ asset('vendor/image/logo-header.png?1649413074140') }}">

  <meta property="og:description" content="">
  <meta property="og:url" content="https://travel-theme.mysapo.net/">
  <meta property="og:site_name" content="BizTravel">

  <!-- Plugin CSS -->




  <link href="{{ asset('vendor/css/header.scss.css?1649413074140') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('vendor/css/bootstrap.css?1649413074140') }}" rel="stylesheet" type="text/css" />
  <!-- Build Main CSS -->
  <link href="{{ asset('vendor/css/base.scss.css?1649413074140') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('vendor/css/travel.scss.css?1649413074140') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('vendor/css/style.scss.css?1649413074140') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('vendor/css/update.scss.css?1649413074140') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('vendor/css/module.scss.css?1649413074140') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('vendor/css/responsive.scss.css?1649413074140') }}" rel="stylesheet" type="text/css" />



  <!-- Header JS -->
  <!-- Bizweb javascript customer -->



  <!-- Bizweb conter for header -->
  <script>
      var Bizweb = Bizweb || {};
      Bizweb.store = 'travel-theme.mysapo.net';
      Bizweb.id = 33603;
      Bizweb.theme = {
          'id': 852890,
          'name': "Travel 25-03-2022",
          'role': 'main'
      };
      Bizweb.template = 'index';
      if (!Bizweb.fbEventId) Bizweb.fbEventId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
          var r = Math.random() * 16 | 0,
              v = c == 'x' ? r : (r & 0x3 | 0x8);
          return v.toString(16);
      });
  </script>
  <script>
      (function() {
          function asyncLoad() {
              var urls = [];
              for (var i = 0; i < urls.length; i++) {
                  var s = document.createElement('script');
                  s.type = 'text/javascript';
                  s.async = true;
                  s.src = urls[i];
                  var x = document.getElementsByTagName('script')[0];
                  x.parentNode.insertBefore(s, x);
              }
          };
          window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
      })();
  </script>


  <script>
      window.BizwebAnalytics = window.BizwebAnalytics || {};
      window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};
      window.BizwebAnalytics.meta.currency = 'VND';
      window.BizwebAnalytics.tracking_url = '/s';

      var meta = {};


      for (var attr in meta) {
          window.BizwebAnalytics.meta[attr] = meta[attr];
      }
  </script>


  <script src="{{ asset('vendor/js/stats.min.js?1649413074140') }}"></script>





  <link rel="preload" as="script" href="{{ asset('vendor/js/swiper.min.js?1649413074140') }}" />
  <script src="{{ asset('vendor/js/swiper.min.js?1649413074140') }}" type="text/javascript"></script>
  <link rel="preload" as="script" href="{{ asset('vendor/js/plugin_main.js?1649413074140') }}" />
  <script src="{{ asset('vendor/js/plugin_main.js?1649413074140') }}" type="text/javascript"></script>
  <script>
      $(document).ready(function($) {
          awe_lazyloadImage();
      });

      function awe_lazyloadImage() {
          var ll = new LazyLoad({
              elements_selector: ".lazyload",
              load_delay: 100,
              threshold: 0
          });
      }
      window.awe_lazyloadImage = awe_lazyloadImage;
  </script>

</head>

<body>
    {{-- Header --}}
    @yield('header')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @yield('footer')

    <!-- Bizweb javascript -->
    <script src="{{ asset('vendor/js/option-selectors.js?1649413074140') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/js/api.jquery.js?1649413074140') }}" type="text/javascript"></script>

    <!-- Add to cart -->
    {{-- <script>
        Bizweb.updateCartFromForm = function(cart, cart_summary_id, cart_count_id) {
            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {

                            var table = jQuery(cart_summary_id);
                            if (value.length) {
                                jQuery('<ul class="list-item-cart"></ul>').appendTo(table);
                                jQuery.each(value, function(i, item) {

                                    var src = item.image;
                                    if (src == null) {
                                        src = "http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
                                    }
                                    var buttonQty = "";
                                    if (item.quantity == '1') {
                                        buttonQty = 'disabled';
                                    } else {
                                        buttonQty = '';
                                    }
                                    jQuery('<li class="item productid-' + item.variant_id + '"><a class="product-image" href="' + item.url + '" title="' + item.name + '">' + '<img alt="' + item.name + '" src="' + src + '"width="' + '80' + '"\></a>' + '<div class="detail-item"><div class="product-details"> <a href="javascript:;" data-id="' + item.variant_id + '" title="Xóa" class="remove-item-cart fa fa-remove">&nbsp;</a>' + '<p class="product-name"> <a href="' + item.url + '" title="' + item.name + '">' + item.name + '</a></p></div>' + '<div class="product-details-bottom"><span class="price pricechange">' + Bizweb.formatMoney(item.price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span>' + '<div class="quantity-select"><input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '"><button onClick="var result = document.getElementById(\'qty' + item.variant_id + '\'); var qty' + item.variant_id + ' = result.value; if( !isNaN( qty' + item.variant_id + ' ) &amp;&amp; qty' + item.variant_id + ' &gt; 1 ) result.value--;return false;" class="reduced items-count btn-minus" ' + buttonQty + ' type="button">–</button><input type="text" maxlength="12" min="0" class="input-text number-sidebar qty' + item.variant_id + '" id="qty' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '"><button onClick="var result = document.getElementById(\'qty' + item.variant_id + '\'); var qty' + item.variant_id + ' = result.value; if( !isNaN( qty' + item.variant_id + ' )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button></div></div></li>').appendTo(table.children('.list-item-cart'));
                                });
                                jQuery('<div><div class="top-subtotal">Tổng cộng: <span class="price">' + Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span></div></div>').appendTo(table);
                                jQuery('<div><div class="actions"><a href="/checkout" class="btn btn-gray btn-checkout"><span>Thanh toán</span></a><a href="/cart" class="view-cart btn btn-white margin-left-5"><span>Giỏ hàng</span></a></div></div>').appendTo(table);
                            } else {
                                jQuery('<div class="no-item"><p>Không có sản phẩm nào trong giỏ hàng.</p></div>').appendTo(table);

                            }
                        }
                    });
                }
            }
            updateCartDesc(cart);
            var numInput = document.querySelector('#cart-sidebar input.input-text');
            if (numInput != null) {
                // Listen for input event on numInput.
                numInput.addEventListener('input', function() {
                    // Let's match only digits.
                    var num = this.value.match(/^\d+$/);
                    if (num == 0) {
                        // If we have no match, value will be empty.
                        this.value = 1;
                    }
                    if (num === null) {
                        // If we have no match, value will be empty.
                        this.value = "";
                    }
                }, false)
            }
        }

        Bizweb.updateCartPageForm = function(cart, cart_summary_id, cart_count_id) {
            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {
                            var table = jQuery(cart_summary_id);
                            if (value.length) {

                                var pageCart = '<div class="cart page_cart hidden-xs">' + '<form action="/cart" method="post" novalidate class="margin-bottom-0"><div class="bg-scroll"><div class="cart-thead">' + '<div style="width: 17%">Ảnh sản phẩm</div><div style="width: 33%"><span class="nobr">Tên sản phẩm</span></div><div style="width: 15%" class="a-center"><span class="nobr">Đơn giá</span></div><div style="width: 14%" class="a-center">Số lượng</div><div style="width: 15%" class="a-center">Thành tiền</div><div style="width: 6%">Xoá</div></div>' + '<div class="cart-tbody"></div></div></form></div>';
                                var pageCartCheckout = '<div class="cart-collaterals cart_submit row"><div class="totals col-sm-12 col-md-12 col-xs-12"><div class="totals"><div class="inner">' + '<table class="table shopping-cart-table-total margin-bottom-0" id="shopping-cart-totals-table"><colgroup><col><col></colgroup>' + '<tfoot><tr><td colspan="20" class="a-right"><span>Tổng tiền</span></td><td class="a-right"><strong><span class="totals_price price">' + Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span></strong></td></tr></tfoot></table>' + '<ul class="checkout"><li class="clearfix"><button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button" onclick="window.location.href=\'/collections/all\'"><span>Tiếp tục mua hàng</span></button><button class="btn btn-primary button btn-proceed-checkout f-right" title="Tiến hành đặt hàng" type="button" onclick="window.location.href=\'/checkout\'"><span>Tiến hành đặt hàng</span></button></li>' + '</ul></div></div></div></div>';
                                jQuery(pageCart).appendTo(table);
                                jQuery.each(value, function(i, item) {
                                    var buttonQty = "";
                                    if (item.quantity == '1') {
                                        buttonQty = 'disabled';
                                    } else {
                                        buttonQty = '';
                                    }
                                    var link_img1 = Bizweb.resizeImage(item.image, 'compact');
                                    if (link_img1 == "null" || link_img1 == '' || link_img1 == null) {
                                        link_img1 = "//bizweb.dktcdn.net/thumb/compact/100/033/603/themes/852890/assets/noimage.jpg?1649413074140";
                                    }
                                    if (item.variant_title == "Default Title") {
                                        var variant_title_pageForm = "";
                                    } else {
                                        var variant_title_pageForm = '<span class="variant-title">' + item.variant_title + '</span>';
                                    }
                                    var pageCartItem = '<div class="item-cart productid-' + item.variant_id + '">' + '<div style="width: 17%" class="image dp-flex"><a class="product-image" title="' + item.name + '" href="' + item.url + '"><img width="75" height="auto" alt="' + item.name + '" src="' + link_img1 + '"></a></div>' + '<div style="width: 33%" class="a-center dp-flex"><h2 class="product-name"> <a href="' + item.url + '">' + item.title + '</a> </h2>' + variant_title_pageForm + '</div><div style="width: 15%" class="a-center dp-flex"><span class="item-price"> <span class="price pricechange">' + Bizweb.formatMoney(item.price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span></span></div>' + '<div style="width: 14%" class="a-center dp-flex"><div class="input_qty_pr"><input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '"><input type="text" maxlength="12" min="0" class="input-text number-sidebar input_pop input_pop qtyItem' + item.variant_id + '" id="qtyItem' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '"disabled="disabled"></div></div>' + '<div style="width: 15%" class="a-center dp-flex"><span class="cart-price"> <span class="price">' + Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫") + '</span> </span></div>' + '<div style="width: 6%"><a class="button remove-item remove-item-cart" title="Xóa" href="javascript:;" data-id="' + item.variant_id + '"><span><span>Xóa</span></span></a></div></div>';
                                    jQuery(pageCartItem).appendTo(table.find('.cart-tbody'));
                                    if (item.variant_title == 'Default Title') {
                                        $('.variant-title').hide();
                                    }
                                });
                                jQuery(pageCartCheckout).appendTo(table.children('.cart'));
                            } else {
                                jQuery('<p class="hidden-xs-down">Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="index.html" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>').appendTo(table);
                                jQuery('.cart_desktop_page').css('min-height', 'auto');
                            }
                        }
                    });
                }
            }
            updateCartDesc(cart);
            jQuery('#wait').hide();
        }

        Bizweb.updateCartPageFormMobile = function(cart, cart_summary_id, cart_count_id) {
            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {

                            var table = jQuery(cart_summary_id);
                            if (value.length) {
                                jQuery('<div class="cart_page_mobile content-product-list"></div>').appendTo(table);
                                jQuery.each(value, function(i, item) {
                                    if (item.image != null) {
                                        var src = Bizweb.resizeImage(item.image, 'small');
                                    } else {
                                        var src = "https://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
                                    }
                                    jQuery('<div class="item-product item productid-' + item.variant_id + ' "><div class="item-product-cart-mobile"><a href="' + item.url + '">	<a class="product-images1" href=""  title="' + item.name + '"><img width="80" height="150" alt="" src="' + src + '" alt="' + item.name + '"></a></a></div>' + '<div class="title-product-cart-mobile">' + '<h3>' + '<a href="' + item.url + '" title="' + item.name + '">' + item.name + '</a>' + '</h3>' + '<p>Giá: <span class="pricechange">' + Bizweb.formatMoney(item.price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span></p>' + '</div>' + '<div class="select-item-qty-mobile">' + '<div class="txt_center">' + '<input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '">' + '<input type="text" maxlength="12" readonly min="0" class="input-text qtyMobile number-sidebar qtyMobile' + item.variant_id + '" id="qtyMobile' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '">' + '</div>' + '<a class="button remove-item remove-item-cart" href="javascript:;" data-id="' + item.variant_id + '">Xoá</a>' + '</div>').appendTo(table.children('.content-product-list'));
                                    var qtyMobile = parseInt($('.qtyMobile').val());
                                    if (qtyMobile == 0) {
                                        qtyMobile = 1;
                                    }
                                });

                                jQuery('<div class="header-cart-price" style="">' + '<div class="btn-custom-mobile-cart">' + '<button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button" onclick="window.location.href=\'/collections/all\'"><span>Tiếp tục mua hàng</span></button>' + '<button class="btn btn-white f-left" title="Xóa toàn bộ đơn hàng" type="button" onclick="window.location.href=\'/cart/clear\'"><span>Xóa toàn bộ đơn hàng</span></button>' + '</div>' + '<div class="title-cart ">' + '<h3 class="text-xs-left">Tổng tiền</h3>' + '<a class="text-xs-right totals_price_mobile">' + Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫") + '</a>' + '</div>' + '<div class="checkout">' + '<button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href=\'/checkout\'">' + '<span>Tiến hành thanh toán</span>' + '</button>' + '</div>' + '</div>').appendTo(table);
                            }

                        }
                    });
                }
            }
            updateCartDesc(cart);
        }

        Bizweb.updateCartPopupForm = function(cart, cart_summary_id, cart_count_id) {

            if ((typeof cart_summary_id) === 'string') {
                var cart_summary = jQuery(cart_summary_id);
                if (cart_summary.length) {
                    // Start from scratch.
                    cart_summary.empty();
                    // Pull it all out.        
                    jQuery.each(cart, function(key, value) {
                        if (key === 'items') {
                            var table = jQuery(cart_summary_id);
                            if (value.length) {
                                jQuery.each(value, function(i, item) {
                                    var src = item.image;
                                    if (src == null) {
                                        src = "http://bizweb.dktcdn.net/thumb/large/assets/themes_support/noimage.gif";
                                    }
                                    var buttonQty = "";
                                    if (item.quantity == '1') {
                                        buttonQty = 'disabled';
                                    } else {
                                        buttonQty = '';
                                    }
                                    if (item.variant_title == "Default Title") {
                                        var variant_title_popup = "";
                                    } else {
                                        var variant_title_popup = '<p class="variant-title-popup">' + item.variant_title + '</p>';
                                    }
                                    var pageCartItem = '<div class="item-popup productid-' + item.variant_id + '"><div style="width: 55%;" class="text-left"><div class="item-image">' + '<a class="product-image" href="' + item.url + '" title="' + item.name + '"><img alt="' + item.name + '" src="' + src + '"width="' + '80' + '"\></a>' + '</div><div class="item-info"><p class="item-name"><a href="' + item.url + '" title="' + item.name + '">' + item.title + '</a></p>' + variant_title_popup + '<p class="item-remove"><a href="javascript:;" class="remove-item-cart" title="Xóa" data-id="' + item.variant_id + '"><i class="fa fa-close"></i> Bỏ sản phẩm</a></p><p class="addpass" style="color:#fff;">' + item.variant_id + '</p></div></div>' + '<div style="width: 15%;" class="text-right"><div class="item-price"><span class="price pricechange">' + Bizweb.formatMoney(item.price, "{{amount_no_decimals_with_comma_separator}}₫") + '</span>' + '</div></div><div style="width: 15%;" class="text-center"><input class="variantID" type="hidden" name="variantId" value="' + item.variant_id + '">' + '<button onClick="var result = document.getElementById(\'qtyItem' + item.variant_id + '\'); var qtyItem' + item.variant_id + ' = result.value; if( !isNaN( qtyItem' + item.variant_id + ' ) &amp;&amp; qtyItem' + item.variant_id + ' &gt; 1 ) result.value--;return false;" ' + buttonQty + ' class="reduced items-count btn-minus" type="button">–</button>' + '<input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyItem' + item.variant_id + '" id="qtyItem' + item.variant_id + '" name="Lines" id="updates_' + item.variant_id + '" size="4" value="' + item.quantity + '">' + '<button onClick="var result = document.getElementById(\'qtyItem' + item.variant_id + '\'); var qtyItem' + item.variant_id + ' = result.value; if( !isNaN( qtyItem' + item.variant_id + ' )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button></div>' + '<div style="width: 15%;" class="text-right"><span class="cart-price"> <span class="price">' + Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫") + '</span> </span></div></div>';
                                    jQuery(pageCartItem).appendTo(table);

                                    $('.link_product').text();
                                });
                            }
                        }
                    });
                }
            }
            jQuery('.total-price').html(Bizweb.formatMoney(cart.total_price, "{{amount_no_decimals_with_comma_separator}}₫"));
            updateCartDesc(cart);
        }



        function updateCartDesc(data) {
            var $cartPrice = Bizweb.formatMoney(data.total_price, "{{amount_no_decimals_with_comma_separator}}₫"),
                $cartMobile = $('#header .cart-mobile .quantity-product'),
                $cartDesktop = $('.count_item_pr'),
                $cartDesktopList = $('.cart-counter-list'),
                $cartPopup = $('.cart-popup-count');

            switch (data.item_count) {
                case 0:
                    $cartMobile.text('0');
                    $cartDesktop.text('0');
                    $cartDesktopList.text('0');
                    $cartPopup.text('0');

                    break;
                case 1:
                    $cartMobile.text('1');
                    $cartDesktop.text('1');
                    $cartDesktopList.text('1');
                    $cartPopup.text('1');

                    break;
                default:
                    $cartMobile.text(data.item_count);
                    $cartDesktop.text(data.item_count);
                    $cartDesktopList.text(data.item_count);
                    $cartPopup.text(data.item_count);
                    break;
            }
            $('.top-cart-content .top-subtotal .price, aside.sidebar .block-cart .subtotal .price, .popup-total .total-price').html($cartPrice);
            $('.popup-total .total-price').html($cartPrice);
            $('.shopping-cart-table-total .totals_price').html($cartPrice);
            $('.header-cart-price .totals_price_mobile').html($cartPrice);
            $('.cartCount').html(data.item_count);
        }

        Bizweb.onCartUpdate = function(cart) {
            Bizweb.updateCartFromForm(cart, '.mini-products-list');
            Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');

        };
        Bizweb.onCartUpdateClick = function(cart, variantId) {
            jQuery.each(cart, function(key, value) {
                if (key === 'items') {
                    jQuery.each(value, function(i, item) {
                        if (item.variant_id == variantId) {
                            $('.productid-' + variantId).find('.pricechange').html(Bizweb.formatMoney(item.price, "{{amount_no_decimals_with_comma_separator}}₫"));
                            $('.productid-' + variantId).find('.cart-price span.price').html(Bizweb.formatMoney(item.price * item.quantity, "{{amount_no_decimals_with_comma_separator}}₫"));
                            $('.productid-' + variantId).find('.items-count').prop("disabled", false);
                            $('.productid-' + variantId).find('.number-sidebar').prop("disabled", false);
                            $('.productid-' + variantId + ' .number-sidebar').val(item.quantity);
                            if (item.quantity == '1') {
                                $('.productid-' + variantId).find('.items-count.btn-minus').prop("disabled", true);
                            }
                        }
                    });
                }
            });
            updateCartDesc(cart);
        }
        Bizweb.onCartRemoveClick = function(cart, variantId) {
            jQuery.each(cart, function(key, value) {
                if (key === 'items') {
                    jQuery.each(value, function(i, item) {
                        if (item.variant_id == variantId) {
                            $('.productid-' + variantId).remove();
                        }
                    });
                }
            });
            updateCartDesc(cart);
        }
        $(window).ready(function() {
            $.ajax({
                type: 'GET',
                url: '/cart.js',
                async: false,
                cache: false,
                dataType: 'json',
                success: function(cart) {
                    Bizweb.updateCartFromForm(cart, '.mini-products-list');
                    Bizweb.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');

                }
            });
        });
    </script> --}}
    <div id="popup-cart" class="modal fade" role="dialog">
        <div id="popup-cart-desktop" class="clearfix">
            <div class="content">
                <a href="javascript:void(0)" class="close-window">x</a>
                <div class="clearfix">
                    <div class="product-image f-left padding-right-20">
                        <img alt="BizTravel" src="{{ asset('vendor/image/logo-header.png?1649413074140') }}">
                    </div>
                    <div class="f-left" style="width: 320px;">
                        <div class="product-info f-left">
                            <p class="product-name margin-bottom-0">
                                <a href="#" title=""></a>
                            </p>
                            <p class="success-message btn-cart">Sản phẩm đã thêm vào giỏ hàng !</p>
                        </div>
                        <div class="actions clearfix margin-top-10" style=" clear: left; ">
                            <button class="btn continue-shopping  btn-primary margin-right-10" onclick="$('#popup-cart').modal('hide');">Tiếp tục mua sắm</button>
                            <button class="btn btn-cart  btn-primary " onclick="window.location='/cart'">Xem giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;" onclick="$('#popup-cart').modal('hide');"><i class="fa  fa-times-circle"></i></a>
        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
    </div>
    <script src="{{ asset('vendor/js/cs.script.js?1649413074140') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('vendor/js/bootstrap.js?1649413074140') }}" />
    <script src="{{ asset('vendor/js/bootstrap.js?1649413074140') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('vendor/js/main.js?1649413074140') }}" />
    <script src="{{ asset('vendor/js/main.js?1649413074140') }}" type="text/javascript"></script>
    <link rel="preload" as="script" href="{{ asset('vendor/js/travel.js?1649413074140') }}" />
    <script src="{{ asset('vendor/js/travel.js?1649413074140') }}" type="text/javascript"></script>

    <!-- Product detail JS,CSS -->

    <script type='text/javascript'>
        var timer = undefined;
        timer = setTimeout(() => {
            //<![CDATA[ 
            function loadCSS(e, t, n) {
                "use strict";
                var i = window.document.createElement("link");
                var o = t || window.document.getElementsByTagName("footer")[0];
                i.rel = "stylesheet";
                i.href = e;
                i.media = "only x";
                o.parentNode.insertBefore(i, o);
                setTimeout(function() {
                    i.media = n || "all"
                })
            }
            loadCSS("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
            //]]> 
            timer = undefined;
        }, 3000)
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>