@extends('travel.layout.main')
@section('title')
  product-detail.page
@endsection

@section('header')
  @include('travel.layout.header')
@endsection

@section('content')
  <section class="product-template">

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


                        <li>
                            <a class="changeurl" href="product.html"><span >Du lịch trải nghiệm</span></a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li><strong><span>Du lịch Brunei</span></strong>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="product-image-slider">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="owl-carousel" data-lg-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xxs-items="1" data-auto-play="1" data-dot="true" data-margin="0">


                        <div class="item">
                            <img src="{{ asset('vendor/image/articles/brunei.jpg') }}?v=1449478246263" alt="Du lịch Brunei" class="img-responsive">
                        </div>

                        <div class="item">
                            <img src="{{ asset('vendor/image/articles/14-27ab8.jpg') }}?v=1449484386787" alt="Du lịch Brunei" class="img-responsive">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="product-content product" itemscope itemtype="http://schema.org/product">
        <meta itemprop="url" content="//travel-theme.mysapo.net/du-lich-brunei">
        <meta itemprop="image" {{ asset('vendor/image/articles/brunei.jpg') }}?v=1449478246263">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 details-pro">
                    <!-- product-name -->
                    <h1 itemprop="name" class="product-name">Du lịch Brunei</h1>
                    <!-- end name -->

                    <div class="form-product">
                        <form enctype="multipart/form-data" id="add-to-cart-form" action="/cart/add" method="post" class="form-inline">
                            <div class="row">
                                <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12 prd-left">
                                    <div class="box-variant clearfix">


                                        <input type="hidden" name="variantId" value="1806171" />

                                    </div>

                                    <div class="form-group product_quantity">
                                        <label class="form-control-label">Số lượng</label>
                                        <div class="btn_quantity">
                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) result.value--;return false;" class="reduced btn btn-ipnb" type="button">-</button>
                                            <input type="text" class="form-control text-xs-center qty" title="Số lượng" value="1" maxlength="3" id="qty" name="quantity" onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')">
                                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase btn btn-ipnb" type="button">+</button>
                                        </div>
                                    </div>

                                    <!-- product-summary -->

                                    <div class="product-summary product_description" itemprop="description">
                                        <div class="rte description text5line">

                                            <em>Mô tả ngắn của sản phẩm đang được cập nhật ...</em>

                                        </div>
                                    </div>

                                    <!-- end summary -->
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">





                                    <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                        <span class="special-price">
      <span class="price" itemprop="price">42.000.000₫</span>
                                        <meta itemprop="priceCurrency" content="VND">
                                        </span>
                                        <span class="old-price">
      <span class="price" itemprop="price">
        
      </span>
                                        <meta itemprop="priceCurrency" content="VND">
                                        </span>



                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                                    <!-- BUTTON ACTIONS -->
                                    <input class="hidden" type="hidden" name="variantId" value="1806171" />
                                    <div class="button_actions">



                                        <button type="submit" class="btn btn-cart add_to_cart btn_buy btn-style btn-style-hover btn-transition" title="Thêm vào giỏ hàng">
                                            <span>Đặt ngay</span>
                                        </button>



                                    </div>
                                    <!-- END BUTTON ACTIONS -->
                                </div>
                            </div>
                        </form>




                        <div class="social-sharing">





                            <div class="social-media" data-permalink="https://travel-theme.mysapo.net/du-lich-brunei">
                                <label>Chia sẻ: </label>

                                <a target="_blank" href="//www.facebook.com/sharer.php?u=https://travel-theme.mysapo.net/du-lich-brunei" class="share-facebook btn-transition btn-border-hover" title="Chia sẻ lên Facebook">
                                    <i class="fa fa-facebook-official"></i>
                                </a>



                                <a target="_blank" href="//twitter.com/share?text=Du lịch Brunei&amp;url=https://travel-theme.mysapo.net/du-lich-brunei" class="share-twitter btn-transition btn-border-hover" title="Chia sẻ lên Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>





                                <a target="_blank" href="//plus.google.com/share?url=https://travel-theme.mysapo.net/du-lich-brunei" class="share-google btn-transition btn-border-hover" title="+1">
                                    <i class="fa fa-google-plus"></i>
                                </a>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-tabs e-tabs not-dqtab">
                    <!-- Nav tabs -->
                    <ul class="tabs tabs-title nav-tabs clearfix">

                        <li class="tab-link" data-tab="tab-1">
                            <h3>Chương trình Tour</h3>
                        </li>


                        <li class="tab-link" data-tab="tab-2">
                            <h3>Chính sách</h3>
                        </li>


                        <li class="tab-link" data-tab="tab-3">
                            <h3>Điều khoản</h3>
                        </li>

                    </ul>
                    <div id="tab-1" class="tab-content content_extab">
                        <div class="rte">

                            <p style="text-align: justify;">Các địa điểm tham quan nổi bật:</p>

                            <p style="text-align: justify;">- Cung điện Hoàng gia Brunei (Istana Nurul Iman – Sultan’s Palace): du khách chỉ có thể chụp ảnh ở ngoài cổng. Cung điện Hoàng gia Brunei mở cửa vào dịp Hari Raya (Tết Hồi giáo, khoảng tháng 8 hàng năm). Người dân sau khi ăn uống và ra về còn được phát tặng một hộp bánh ngọt thơm ngon.</p>

                            <p style="text-align: justify;">- Bảo tàng Hoàng gia Royal Regalia: đây là nơi lưu giữ những quà tặng, kỷ vật thuộc Hoàng gia và tiểu sử của vị vua đương thời.</p>

                            <p style="text-align: justify;">- Khu làng nổi Kampong Ayer: ngôi làng nổi cổ nhất ở Brunei với văn hóa lịch sử hơn 600 năm. Hiện nay, nơi đây vẫn còn loài khỉ mũi to sinh sống và nhà cửa đơn sơ ngay bên sông. Ngôi làng có đầy đủ trường học, nhà thờ Hồi giáo, cơ quan hành chính, cây xăng, chợ... Du khách vào làng tham quan sẽ có dịch vụ tàu gỗ chở đi.</p>

                            <p style="text-align: justify;">- Ngôi chùa Chinese Temple: nằm giữa trung tâm, đây là nơi để cộng đồng người Hoa ở Brunei đến cúng bái.</p>

                            <p style="text-align: center;"><img src="{{ asset('vendor/image/35-1.jpg') }}?v=1445489195410" />
                            </p>

                            <p style="text-align: justify;">- Quần thể The Empire Hotel &amp; Country Club: khách sạn nổi tiếng nhất Brunei, rộng 180ha với 443 căn phòng lộng lẫy. Đây cũng là một trong những khách sạn cao cấp nhất châu Á và là thuộc top mười khách sạn đẹp nhất thế giới.</p>

                            <p style="text-align: justify;">- Công viên Jerudong Park: công viên vui chơi lớn nhất Đông Nam Á, cách thủ đô Bandar khoảng 10km.</p>

                            <p style="text-align: justify;">- Khu chợ trời Pasar Malam Gadong: chợ đêm Gadong bán thức ăn khá rẻ và khá nhộn nhịp.</p>

                            <p style="text-align: justify;">- Khu chợ trời Tamu Kianggeh (Open Market): chợ ngoài trời, bán thịt cá và rau củ quả, ngay cạnh bến xe đi Miri và là cửa ngõ vào tham quan trung tâm thành phố.</p>

                            <p style="text-align: justify;">- Đài kỷ niệm Billionth Barrel Monument: ghi dấu sự kiện quan trọng khi Brunei xuất khẩu 1 tỷ thùng dầu.</p>

                            <p style="text-align: center;"><img src="{{ asset('vendor/image/35.jpg') }}?v=1445489195420" />
                            </p>

                        </div>
                    </div>

                    <div id="tab-2" class="tab-content content_extab">
                        <div class="rte">

                            <p style="text-align: justify;">Cám ơn quý khách đã quan tâm và truy cập vào website. Chúng tôi tôn trọng và cam kết sẽ bảo mật những thông tin mang tính riêng tư của Quý khách.</p>

                            <p style="text-align: justify;">Chính sách bảo mật sẽ giải thích cách chúng tôi tiếp nhận, sử dụng và (trong trường hợp nào đó) tiết lộ thông tin cá nhân của Quý khách.</p>

                            <p style="text-align: justify;">Bảo vệ dữ liệu cá nhân và gây dựng được niềm tin cho quý khách là vấn đề rất quan trọng với chúng tôi. Vì vậy, chúng tôi sẽ dùng tên và các thông tin khác liên quan đến quý khách tuân thủ theo nội dung của Chính sách bảo mật. Chúng tôi chỉ thu thập những thông tin cần thiết liên quan đến giao dịch mua bán.</p>

                            <p style="text-align: justify;">Chúng tôi sẽ giữ thông tin của khách hàng trong thời gian luật pháp quy định hoặc cho mục đích nào đó. Quý khách có thể truy cập vào website và trình duyệt mà không cần phải cung cấp chi tiết cá nhân. Lúc đó, Quý khách đang ẩn danh và chúng tôi không thể biết bạn là ai nếu Quý khách không đăng nhập vào tài khoản của mình.</p>

                            <p style="text-align: justify;"><strong>1. Thu thập thông tin cá nhân</strong>
                            </p>

                            <p style="text-align: justify;">- Chúng tôi thu thập, lưu trữ và xử lý thông tin của bạn cho quá trình mua hàng và cho những thông báo sau này liên quan đến đơn hàng, và để cung cấp dịch vụ, bao gồm một số thông tin cá nhân: danh hiệu, tên, giới tính, ngày sinh, email, địa chỉ, địa chỉ giao hàng, số điện thoại, fax, chi tiết thanh toán, chi tiết thanh toán bằng thẻ hoặc chi tiết tài khoản ngân hàng.</p>

                            <p style="text-align: justify;">- Chúng tôi sẽ dùng thông tin quý khách đã cung cấp để xử lý đơn đặt hàng, cung cấp các dịch vụ và thông tin yêu cầu thông qua website và theo yêu cầu của bạn.</p>

                            <p style="text-align: justify;">- Hơn nữa, chúng tôi sẽ sử dụng các thông tin đó để quản lý tài khoản của bạn; xác minh và thực hiện giao dịch trực tuyến, nhận diện khách vào web, nghiên cứu nhân khẩu học, gửi thông tin bao gồm thông tin sản phẩm và dịch vụ. Nếu quý khách không muốn nhận bất cứ thông tin tiếp thị của chúng tôi thì có thể từ chối bất cứ lúc nào.</p>

                            <p style="text-align: justify;">- Chúng tôi có thể chuyển tên và địa chỉ cho bên thứ ba để họ giao hàng cho bạn (ví dụ cho bên chuyển phát nhanh hoặc nhà cung cấp).</p>

                            <p style="text-align: justify;">- Chi tiết đơn đặt hàng của bạn được chúng tôi lưu giữ nhưng vì lí do bảo mật nên chúng tôi không công khai trực tiếp được. Tuy nhiên, quý khách có thể tiếp cận thông tin bằng cách đăng nhập tài khoản trên web. Tại đây, quý khách sẽ thấy chi tiết đơn đặt hàng của mình, những sản phẩm đã nhận và những sản phẩm đã gửi và chi tiết email, ngân hàng và bản tin mà bạn đặt theo dõi dài hạn.</p>

                            <p style="text-align: justify;">- Quý khách cam kết bảo mật dữ liệu cá nhân và không được phép tiết lộ cho bên thứ ba. Chúng tôi không chịu bất kỳ trách nhiệm nào cho việc dùng sai mật khẩu nếu đây không phải lỗi của chúng tôi.</p>

                            <p style="text-align: justify;">- Chúng tôi có thể dùng thông tin cá nhân của bạn để nghiên cứu thị trường. mọi thông tin chi tiết sẽ được ẩn và chỉ được dùng để thống kê. Quý khách có thể từ chối không tham gia bất cứ lúc nào.</p>

                            <p style="text-align: justify;"><strong>2. Bảo mật</strong>
                            </p>

                            <p style="text-align: justify;">- Chúng tôi có biện pháp thích hợp về kỹ thuật và an ninh để ngăn chặn truy cập trái phép hoặc trái pháp luật hoặc mất mát hoặc tiêu hủy hoặc thiệt hại cho thông tin của bạn.</p>

                            <p style="text-align: justify;">- Chúng tôi khuyên quý khách không nên đưa thông tin chi tiết về việc thanh toán với bất kỳ ai bằng e-mail, chúng tôi không chịu trách nhiệm về những mất mát quý khách có thể gánh chịu trong việc trao đổi thông tin của quý khách qua internet hoặc email.</p>

                            <p style="text-align: justify;">- Quý khách tuyệt đối không sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống website. Mọi vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.</p>

                            <p style="text-align: justify;">- Mọi thông tin giao dịch sẽ được bảo mật nhưng trong trường hợp cơ quan pháp luật yêu cầu, chúng tôi sẽ buộc phải cung cấp những thông tin này cho các cơ quan pháp luật.</p>

                            <p style="text-align: justify;">Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh bởi luật pháp Việt Nam và tòa án Việt Nam có thẩm quyền xem xét.</p>

                            <p style="text-align: justify;"><strong>3. Quyền lợi khách hàng</strong>
                            </p>

                            <p style="text-align: justify;">- Quý khách có quyền yêu cầu truy cập vào dữ liệu cá nhân của mình, có quyền yêu cầu chúng tôi sửa lại những sai sót trong dữ liệu của bạn mà không mất phí. Bất cứ lúc nào bạn cũng có quyền yêu cầu chúng tôi ngưng sử dụng dữ liệu cá nhân của bạn cho mục đích tiếp thị.</p>


                        </div>
                    </div>


                    <div id="tab-3" class="tab-content content_extab">
                        <div class="rte">

                            <p style="text-align: justify;">Khi quý khách truy cập vào trang web của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Quy định và Điều kiện sử dụng, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về quy định và điều kiện được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó.</p>

                            <p style="text-align: justify;">Quý khách vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.</p>

                            <p style="text-align: justify;"><strong>1. Hướng dẫn sử dụng web</strong>
                            </p>

                            <p style="text-align: justify;">- Khi vào web của chúng tôi, người dùng tối thiểu phải 18 tuổi hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp.</p>

                            <p style="text-align: justify;">- Chúng tôi cấp giấy phép sử dụng để bạn có thể mua sắm trên web trong khuôn khổ điều khoản và điều kiện sử dụng đã đề ra.</p>

                            <p style="text-align: justify;">- Nghiêm cấm sử dụng bất kỳ phần nào của trang web này với mục đích thương mại hoặc nhân danh bất kỳ đối tác thứ ba nào nếu không được chúng tôi cho phép bằng văn bản. Nếu vi phạm bất cứ điều nào trong đây, chúng tôi sẽ hủy giấy phép của bạn mà không cần báo trước.</p>

                            <p style="text-align: justify;">- Trang web này chỉ dùng để cung cấp thông tin sản phẩm chứ chúng tôi không phải nhà sản xuất nên những nhận xét hiển thị trên web là ý kiến cá nhân của khách hàng, không phải của chúng tôi.</p>

                            <p style="text-align: justify;">- Quý khách phải đăng ký tài khoản với thông tin xác thực về bản thân và phải cập nhật nếu có bất kỳ thay đổi nào. Mỗi người truy cập phải có trách nhiệm với mật khẩu, tài khoản và hoạt động của mình trên web. Hơn nữa, quý khách phải thông báo cho chúng tôi biết khi tài khoản bị truy cập trái phép. Chúng tôi không chịu bất kỳ trách nhiệm nào, dù trực tiếp hay gián tiếp, đối với những thiệt hại hoặc mất mát gây ra do quý khách không tuân thủ quy định.</p>

                            <p style="text-align: justify;">- Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Sau đó, nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.</p>

                            <p style="text-align: justify;"><strong>2. Chấp nhận đơn hàng và giá cả</strong>
                            </p>

                            <p style="text-align: justify;">- Chúng tôi có quyền từ chối hoặc hủy đơn hàng của quý khách vì bất kỳ lý do gì vào bất kỳ lúc nào. Chúng tôi có thể hỏi thêm về số điện thoại và địa chỉ trước khi nhận đơn hàng.</p>

                            <p style="text-align: justify;">- Chúng tôi cam kết sẽ cung cấp thông tin giá cả chính xác nhất cho người tiêu dùng. Tuy nhiên, đôi lúc vẫn có sai sót xảy ra, ví dụ như trường hợp giá sản phẩm không hiển thị chính xác trên trang web hoặc sai giá, tùy theo từng trường hợp chúng tôi sẽ liên hệ hướng dẫn hoặc thông báo hủy đơn hàng đó cho quý khách. Chúng tôi cũng có quyền từ chối hoặc hủy bỏ bất kỳ đơn hàng nào dù đơn hàng đó đã hay chưa được xác nhận hoặc đã bị thanh toán.</p>

                            <p style="text-align: justify;"><strong>3. Thương hiệu và bản quyền</strong>
                            </p>

                            <p style="text-align: justify;">- Mọi quyền sở hữu trí tuệ (đã đăng ký hoặc chưa đăng ký), nội dung thông tin và tất cả các thiết kế, văn bản, đồ họa, phần mềm, hình ảnh, video, âm nhạc, âm thanh, biên dịch phần mềm, mã nguồn và phần mềm cơ bản đều là tài sản của chúng tôi. Toàn bộ nội dung của trang web được bảo vệ bởi luật bản quyền của Việt Nam và các công ước quốc tế. Bản quyền đã được bảo lưu.</p>

                            <p style="text-align: justify;"><strong>4. Quyền pháp lý</strong>
                            </p>

                            <p style="text-align: justify;">- Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh bởi luật pháp Việt Nam và Tòa án có thẩm quyền tại Việt Nam sẽ giải quyết bất kỳ tranh chấp nào phát sinh từ việc sử dụng trái phép trang web này.</p>

                            <p style="text-align: justify;"><strong>5. Quy định về bảo mật</strong>
                            </p>

                            <p style="text-align: justify;">- Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất bảo vệ thông tin và việc thanh toán của quý khách. Thông tin của quý khách trong quá trình thanh toán sẽ được mã hóa để đảm bảo an toàn. Sau khi quý khách hoàn thành quá trình đặt hàng, quý khách sẽ thoát khỏi chế độ an toàn.</p>

                            <p style="text-align: justify;">- Quý khách không được sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Trang web cũng nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống. Cá nhân hay tổ chức vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.</p>

                            <p style="text-align: justify;">- Mọi thông tin giao dịch sẽ được bảo mật nhưng trong trường hợp cơ quan pháp luật yêu cầu, chúng tôi sẽ buộc phải cung cấp những thông tin này cho các cơ quan pháp luật.</p>

                            <p style="text-align: justify;"><strong>6. Thay đổi, hủy bỏ giao dịch tại website</strong>
                            </p>

                            <p style="text-align: justify;">Trong mọi trường hợp, khách hàng đều có quyền chấm dứt giao dịch nếu đã thực hiện các biện pháp sau đây:</p>

                            <p style="text-align: justify;">- Thông báo cho chúng tôi về việc hủy giao dịch qua đường dây nóng 04.6674.2332</p>

                            <p style="text-align: justify;">- Trả lại hàng hoá đã nhận nhưng chưa sử dụng hoặc hưởng bất kỳ lợi ích nào từ hàng hóa đó (theo quy định của chính sách đổi trả hàng).</p>

                        </div>
                    </div>

                    <!-- Tab panes -->
                </div>
            </div>
        </div>
    </div>


    <div class="related-products">
        <div class="container">
            <div class="row">


                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="module-heading product-loop-heading">
                        <h2 class="module-title">
          <a href="du-lich-trai-nghiem">
            <span>Tour liên quan</span>
          </a>
        </h2>
                    </div>



                    <div class="module-content product-loop-content owl-carousel" data-lg-items="4" data-md-items="3" data-sm-items="3" data-xs-items="2" data-xss-items="1" data-margin="15" data-auto-play="true">





                        <div class="item">





                            <div class="product-box">
                                <div class="product-thumbnail">
                                    <a href="product-detail.html" title="Lễ hội hoa anh đào" class="product-image dp-flex">

                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/cherry-blossom.jpg') }}?v=1491186199237" class="img-responsive lazyload" title="Lễ hội hoa anh đào" alt="Lễ hội hoa anh đào">

                                    </a>
                                </div>
                                <div class="product-info a-left">
                                    <h3 class="product-name text1line">
  <a href="product-detail.html" title="Lễ hội hoa anh đào">Lễ hội hoa anh đào</a>
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





                        <div class="item">





                            <div class="product-box">
                                <div class="product-thumbnail">
                                    <a href="product-detail.html" title="Lễ hội bia Oktoberfest" class="product-image dp-flex">

                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/1490419039-e0bc9dc980-o2.jpg') }}?v=1449478232713" class="img-responsive lazyload" title="Lễ hội bia Oktoberfest" alt="Lễ hội bia Oktoberfest">

                                    </a>
                                </div>
                                <div class="product-info a-left">
                                    <h3 class="product-name text1line">
  <a href="product-detail.html" title="Lễ hội bia Oktoberfest">Lễ hội bia Oktoberfest</a>
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





                        <div class="item">





                            <div class="product-box">
                                <div class="product-thumbnail">
                                    <a href="product-detail.html" title="Lễ hội Hawaii" class="product-image dp-flex">

                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/hawaii.jpg') }}?v=1491186112150" class="img-responsive lazyload" title="Lễ hội Hawaii" alt="Lễ hội Hawaii">

                                    </a>
                                </div>
                                <div class="product-info a-left">
                                    <h3 class="product-name text1line">
  <a href="product-detail.html" title="Lễ hội Hawaii">Lễ hội Hawaii</a>
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





                        <div class="item">





                            <div class="product-box">
                                <div class="product-thumbnail">
                                    <a href="product-detail.html" title="Lễ hội Venice" class="product-image dp-flex">

                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/venice.jpg') }}?v=1449478214613" class="img-responsive lazyload" title="Lễ hội Venice" alt="Lễ hội Venice">

                                    </a>
                                </div>
                                <div class="product-info a-left">
                                    <h3 class="product-name text1line">
  <a href="product-detail.html" title="Lễ hội Venice">Lễ hội Venice</a>
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





                        <div class="item">





                            <div class="product-box">
                                <div class="product-thumbnail">
                                    <a href="product-detail.html" title="Du lịch Mộc Châu" class="product-image dp-flex">

                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/chao-mua-yeu-thuong-2-resize.jpg') }}?v=1449478202133" class="img-responsive lazyload" title="Du lịch Mộc Châu" alt="Du lịch Mộc Châu">

                                    </a>
                                </div>
                                <div class="product-info a-left">
                                    <h3 class="product-name text1line">
  <a href="product-detail.html" title="Du lịch Mộc Châu">Du lịch Mộc Châu</a>
  </h3>
                                    <div class="product-review">

                                    </div>
                                    <div class="prices-and-actions">





                                        <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                            <span class="special-price">
      <span class="price">1.054.000₫</span>
                                            </span>
                                            <span class="old-price">
      <span class="price">
        
          1.500.000₫
        
      </span>
                                            </span>



                                        </div>
                                        <div class="form-actions">


                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895468" enctype="multipart/form-data">
                                                <input class="hidden" type="hidden" name="variantId" value="1363055" />



                                                <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                    <span>Đặt ngay</span>
                                                </button>



                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="item">





                            <div class="product-box">
                                <div class="product-thumbnail">
                                    <a href="product-detail.html" title="Du lịch Hải Phòng" class="product-image dp-flex">

                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/1-nhatrang.jpg') }}?v=1449478205563" class="img-responsive lazyload" title="Du lịch Hải Phòng" alt="Du lịch Hải Phòng">

                                    </a>
                                </div>
                                <div class="product-info a-left">
                                    <h3 class="product-name text1line">
  <a href="product-detail.html" title="Du lịch Hải Phòng">Du lịch Hải Phòng</a>
  </h3>
                                    <div class="product-review">

                                    </div>
                                    <div class="prices-and-actions">





                                        <div class="price-box price-loop-style" itemscope itemtype="http://schema.org/Offer">



                                            <span class="special-price">
      <span class="price">1.589.000₫</span>
                                            </span>
                                            <span class="old-price">
      <span class="price">
        
      </span>
                                            </span>



                                        </div>
                                        <div class="form-actions">


                                            <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-895470" enctype="multipart/form-data">
                                                <input class="hidden" type="hidden" name="variantId" value="1363057" />



                                                <button class="btn btn-buy btn-style btn-style-hover btn-transition btn-cart btn_buy add_to_cart" title="Đặt ngay">
                                                    <span>Đặt ngay</span>
                                                </button>



                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="item">





                            <div class="product-box">
                                <div class="product-thumbnail">
                                    <a href="product-detail.html" title="Du lịch Cuba" class="product-image dp-flex">

                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{ asset('vendor/image/dg-150723-cuba.jpg') }}?v=1449478222867" class="img-responsive lazyload" title="Du lịch Cuba" alt="Du lịch Cuba">

                                    </a>
                                </div>
                                <div class="product-info a-left">
                                    <h3 class="product-name text1line">
  <a href="product-detail.html" title="Du lịch Cuba">Du lịch Cuba</a>
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
                </div>

            </div>
        </div>
    </div>

  </section>

  <script type="text/javascript">
    function valid(o, w) {
        o.value = o.value.replace(valid.r[w], '');
        var qtyCount = document.getElementById('qty').value;
        if (qtyCount == 0) {
            document.getElementById("qty").value = 1;
        }
    }
    valid.r = {
        'numbers': /[^\d]/g
    }
  </script>
  {{-- <script>
    var selectCallback = function(variant, selector) {
        if (variant) {
            var form = jQuery('#' + selector.domIdPrefix).closest('form');
            for (var i = 0, length = variant.options.length; i < length; i++) {
                var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
                if (radioButton.size()) {
                    radioButton.get(0).checked = true;
                }
            }
        }

        var addToCart = jQuery('.details-pro .button_actions .btn-cart'),
            priceBox = jQuery('.details-pro .price-box'),
            productPrice = jQuery('.details-pro .special-price .price'),
            comparePrice = jQuery('.details-pro .old-price .price'),
            inputQty = jQuery('.details-pro .product_quantity'),
            btnBox = jQuery('.details-pro .button_actions');

        if (variant) {
            //console.log(variant.price, variant.compare_at_price, variant.inventory_quantity);
            addToCart.removeAttr('disabled');
            if (variant.inventory_quantity == 0) {
                inputQty.hide();
                btnBox.show();
                addToCart.removeClass('btn_buy').addClass('btn_soldout').attr('disabled', 'disabled').html('<span>Đã hết tour</span>').show();
                if (variant.price != 0) {
                    priceBox.show();
                    productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
                    if (variant.compare_at_price > variant.price) {
                        comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
                    } else {
                        comparePrice.hide();
                    }
                } else {
                    productPrice.html('Liên hệ');
                    comparePrice.hide();
                }
            } else {
                //console.log('invent != 0');
                priceBox.show();
                inputQty.show();
                btnBox.show();
                if (variant.price == 0) {
                    inputQty.hide();
                    productPrice.html('Liên hệ');
                    addToCart.hide();
                    comparePrice.hide();
                } else {
                    //console.log('---');
                    inputQty.show();
                    inputQty.removeClass('hidden');
                    productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
                    if (variant.compare_at_price > variant.price) {
                        comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫")).show();
                    } else {
                        comparePrice.hide();
                        btnBox.show();
                        addToCart.show();
                    }
                    addToCart.removeClass('btn_soldout').addClass('btn_buy').removeAttr('disabled', 'disabled').html('<span>Đặt ngay</span>').show();
                }
            }
        } else {
            //console.log(variant.price, variant.compare_at_price, variant.inventory_quantity);
            productPrice.html('Liên hệ');
            comparePrice.hide();
            inputQty.hide();
            addToCart.addClass('btn_soldout').attr('disabled', 'disabled').html('<span>Đã hết tour</span>'); // set add-to-cart button to unavailable class and disable button
        }

        /*begin variant image*/
        if (variant && variant.image) {
            var originalImage = jQuery(".large-image img");
            var newImage = variant.image;
            var element = originalImage[0];
            Bizweb.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {
                jQuery(element).parents('a').attr('href', newImageSizedSrc);
                jQuery(element).attr('src', newImageSizedSrc);
            });
        }


        /*end of variant image*/

        if ($('.selector-wrapper')[0].childElementCount == 1) {
            $('.selector-wrapper').prepend('<label>Title</label>');
        }

    };

    // initialize multi selector for product



    jQuery('.selector-wrapper').addClass('clearfix');

    jQuery('.selector-wrapper').prepend("<label for='product-select-option-0'>Title</label>");


    $('.selector-wrapper').hide();


    jQuery('.swatch :radio').change(function() {
        var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
        var optionValue = jQuery(this).val();
        jQuery(this)
            .closest('form')
            .find('.single-option-selector')
            .eq(optionIndex)
            .val(optionValue)
            .trigger('change');
    });
  </script> --}}
  <script>
    $(".not-dqtab").each(function(e) {
        $(this).find('.tabs-title li:first-child').addClass('current');
        $(this).find('.tab-content').first().addClass('current');

        $(this).find('.tabs-title li').click(function() {
            if ($(window).width() > 315) {
                if ($(this).hasClass('current')) {
                    $(this).removeClass('current');
                } else {
                    var tab_id = $(this).attr('data-tab');
                    var url = $(this).attr('data-url');
                    $(this).closest('.e-tabs').find('.tab-viewall').attr('href', url);

                    $(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
                    $(this).closest('.e-tabs').find('.tab-content').removeClass('current');

                    $(this).addClass('current');
                    $(this).closest('.e-tabs').find("#" + tab_id).addClass('current');
                }
            } else {
                var tab_id = $(this).attr('data-tab');
                var url = $(this).attr('data-url');
                $(this).closest('.e-tabs').find('.tab-viewall').attr('href', url);

                $(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
                $(this).closest('.e-tabs').find('.tab-content').removeClass('current');

                $(this).addClass('current');
                $(this).closest('.e-tabs').find("#" + tab_id).addClass('current');

            }

        });
    });
    $('#gallery_01 img, .swatch-element label').click(function(e) {
        /* click thumb đổi ảnh */
        var current_click = $(this).attr('src');
        var source_img = current_click.replace("/thumb/small", "").split('?')[0];
        //var thumb_source_img = current_click.replace("/thumb/small","net/thumb/grande").split("?")[0];
        //console.log(current_click);
        $('.large-image img').attr('src', source_img);
        $('.large-image a').attr('href', source_img);
    });
  </script>
@endsection

@section('footer')
  @include('travel.layout.footer')
@endsection